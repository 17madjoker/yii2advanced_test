<?php
/**
 * Created by PhpStorm.
 * User: Kirilloid
 * Date: 18.03.2018
 * Time: 1:48
 */

namespace common\components;
use yii\base\Component;
use common\components\UserNotificationInterface;
use Yii;

/**
 * Class EmailService
 * @package common\components
 */
class EmailService extends Component
{
    /**
     * @param \common\components\UserNotificationInterface $user
     * @param string $subject
     * @return bool
     */
    public function notifyUser(UserNotificationInterface $event)
    {
        return Yii::$app->mailer->compose()
            ->setFrom('testyii2@mail.ru')
            ->setTo($event->getEmail())
            ->setSubject($event->getSubject())
            ->send();
    }

    public function notifyAdmins(UserNotificationInterface $event)
    {
//        echo '<pre>';
//        var_dump($event);
//        echo '</pre>';
//        die;
        return Yii::$app->mailer->compose()
            ->setFrom('testyii2@mail.ru')
            ->setTo('testyii2@mail.ru')
            ->setSubject($event->getSubject())
            ->send();
    }
}