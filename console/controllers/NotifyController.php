<?php

namespace console\controllers;
use console\models\News;
use console\models\Subscribers;
use console\models\Sender;
use yii\console\Controller;
/**
 * Description of NotifyController
 *
 * @author Kirilloid
 */
class NotifyController extends Controller {
    
    public function actionNews()
    {
        $newsList = News::getList();
        $subscribers = Subscribers::getList();
        Sender::send($subscribers, $newsList);
        var_dump($result); 
        var_dump($users); 
        die;
    }
}
