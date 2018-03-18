<?php
namespace frontend\models;

use yii\base\Model;
use frontend\models\User;
use Yii;

/**
 * Login form
 */
class LoginForm extends Model
{
    public $username;
    public $password;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            [['password','username'], 'required'],
            [['password'],'validatePassword']
        ];
    }

    public function login()
    {
        if($this->validate())
        {
            $user = User::findByUsername($this->username);
            return Yii::$app->user->login($user);
        }
        return false;
    }

    public function validatePassword($attribute, $params)
    {
        $user = User::findByUsername($this->username);
        if (!$user or !$user->validatePassword($this->password))
        {
            $this->addError($attribute, 'Wrong password');
        }
    }
}
