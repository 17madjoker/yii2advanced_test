<?php

namespace console\models;
use Yii;
/**
 * Description of Sender
 *
 * @author Kirilloid
 */
class Sender {
    
    public static function send($subscribers,$newsList)
    {
        foreach ($subscribers as $subscriber)
        {           
            $result = Yii::$app->mailer->compose('/notify/newslist',[
                'newsList' => $newsList       
            ])
            ->setFrom('testyii2@mail.ru')
            ->setTo($subscriber['email'])
            ->setSubject('Тема сообщения')
            ->send();            
       }
    }
    
}
