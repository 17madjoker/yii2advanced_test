<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;
use yii\web\Controller;
use frontend\models\CUGoods;
use frontend\models\CUProduces;
use frontend\models\CUCategory;
/**
 * Description of CUController
 *
 * @author Kirilloid
 */
class CUController extends Controller 
{
    public function actionIndex() 
    {
        $query1 = CUGoods::find();
        $query2 = CUProduces::find();
        $query3 = CUCategory::find();
        
        $goods = $query1->all();  
        $produces = $query2->all(); 
        $category = $query3->all(); 
                
        return $this->render('index',[
            'goods' => $goods,
            'producer' => $produces,
            'category' => $category,
        ]);
    }
}
