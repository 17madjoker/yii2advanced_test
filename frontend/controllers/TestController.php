<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Test;
use Yii;

class TestController extends Controller 
{
    public function actionIndex() 
    {
        $max = Yii::$app->params['maxNewInlist'];
        $news = Test::getNewsList($max);        
        return $this->render('index',[
            'news' => $news
        ]);
    }
    
    public function actionView($id)
    {
        $item = Test::getItem($id);
        return $this->render('view',[
            'item' => $item
        ]);
    }
    
    public function actionMail()
    {
        $result = Yii::$app->mailer->compose()
                ->setFrom('test@mail.com')
                ->setTo('test@mail.com')
                ->setSubject('Тема сообщения')
                ->setTextBody('Текст сообщения')
                ->setHtmlBody('<b>Текст сообщения ....</b>')
                ->send();
        var_dump($result);
        die;
    }
}

