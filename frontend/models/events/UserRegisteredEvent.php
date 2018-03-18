<?php

/**
 * Created by PhpStorm.
 * User: Kirilloid
 * Date: 18.03.2018
 * Time: 2:49
 */
namespace frontend\models\events;

use yii\base\Event;
use frontend\models\User;
use common\components\UserNotificationInterface;

class UserRegisteredEvent extends  Event implements UserNotificationInterface
{
    /**
     * @var User
     */
    public $user;
    /**
     * @var string
     */
    public $subject;

    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->user->email;
    }
}