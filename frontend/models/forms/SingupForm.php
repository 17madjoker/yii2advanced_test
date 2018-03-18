<?php

namespace frontend\models\forms;
use yii\base\Model;
use frontend\models\User;
use common\components\EmailService;
use frontend\models\events\UserRegisteredEvent;

use Yii;
/**
 * Created by PhpStorm.
 * User: Kirilloid
 * Date: 18.03.2018
 * Time: 0:27
 */
class SingupForm extends Model
{
    public $username;
    public $email;
    public $password;

    public function rules()
    {
        return [
            ['username','trim'],
            ['username','required'],
            ['username','string','min' => 2, 'max' => 255],

            ['email','trim'],
            ['email','required'],
            ['email','email'],
            ['email','unique', 'targetClass' => User::className()],
            ['email','string','max' => 255],

            ['password','required'],
            ['password','string','min' => 3],
        ];
    }

    public function save()
    {
        if ($this->validate())
        {
            $user = new User;
            $user->email = $this->email;
            $user->username = $this->username;
            $user->created_at = $time = time();
            $user->updated_at = $time;
            $user->auth_key = Yii::$app->security->generateRandomString();
            $user->password_hash = Yii::$app->security->generatePasswordHash($this->password);

            if($user->save())
            {
                $event = new UserRegisteredEvent();
                $event->user = $user;
                $event->subject = 'Test subject';
                $user->trigger(User::USER_REGISTERED, $event);
//                 Yii::$app->EmailService->notifyUser($user,'Welcome!');
//                 Yii::$app->EmailService->notifyAdmins('User registered');
                 return $user;
            }
        }
        return false;
    }
}