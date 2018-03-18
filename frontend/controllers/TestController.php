<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Test;
use frontend\models\Comments;
use frontend\models\ExampleValidation;
use Faker\Factory;
use frontend\models\NewsGenerate;
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
    
    public function actionTest() {
        $model = new ExampleValidation();
        $formData = Yii::$app->request->post();
        if (Yii::$app->request->isPost){
            $model->attributes = $formData;
            if ($model->validate()){
                Yii::$app->session->setFlash('success', 'Data ok');
            }
        }
        return $this->render('testValidator',[
            'model' => $model
        ]);
    }
    
    public function actionAlias()
    { 
        print_r(Yii::getAlias('@files'));
        print_r(Yii::getAlias('@photos'));
        print_r(Yii::getAlias('@webroot'));
    }
    
    public function actionMyLayout(){
        $this->layout = 'test'; 
        $model = Comments::getComments();
        //var_dump($model); die;
        return $this->render('layout',[
            'model' => $model
        ]);
    }

    public function actionYii2faker()
    {
        for ($i = 0; $i < 10; $i++)
        {
            $faker = Factory::create();
            $newsItem = new NewsGenerate();

            $newsItem->title = $faker->text(35);
            $newsItem->content = $faker->text(rand(1000,2000));
            $newsItem->status = '1';

            $newsItem->save();
        }
    }

//    public function actionBiggenerate()
//    {
//        $faker = Factory::create();
//
//        for($j = 0; $j < 100; $j++)
//        {
//            $news = [];
//            for ($i = 0; $i < 100; $i++)
//            {
//                $news[] = [$faker->text(35),
//                    $faker->text(rand(1000,2000)),'1'];
//            }
//            Yii::$app->db->createCommand()->batchInsert('news',['title','content','status'],$news)->execute();
//        }
//    }
}

