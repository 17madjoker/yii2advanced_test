<?php

namespace console\controllers;
use \yii\console\Controller;
use Yii;

class MailerController extends Controller 
{
    
    public function actionSend()
    {
        $result = Yii::$app->mailer->compose()
            ->setFrom('testyii2@mail.ru')
            ->setTo('testyii2@mail.ru')
            ->setSubject('Тема сообщения')
            ->setTextBody('Текст сообщения')
            ->setHtmlBody('Bango')
            ->send();
    var_dump($result); die;
    }
}

