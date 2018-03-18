<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;
use yii\web\Controller;
use console\models\News;
/**
 * Description of HelperController
 *
 * @author Kirilloid
 */
class HelperController extends Controller {
    
    public function actionIndex() {
        return $this->render('index');
    }
    
    public function actionEscapeOutput(){
        $comments = [
            [
                'id' => 10,
                'author' => 'Alex',
                'text' => 'Bango',
            ],
            [
                'id' => 11,
                'author' => 'Miha',
                'text' => '<script>alert("bango");</script>',    
                
            ]
        ];
        return $this->render('escape-output',[
            'comments' => $comments
        ]);
    }
    
    public function actionArray(){
        $news = News::getList();
        return $this->render('array',[
            'news' => $news
        ]);
    }
}
