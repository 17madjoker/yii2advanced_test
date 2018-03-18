<?php

namespace frontend\controllers;
use yii\web\Controller;
/**
 * Description of GalleryController
 *
 * @author Kirilloid
 */
class GalleryController extends Controller{
    
    public function actionIndex() {
        return $this->render('index');
    }
    
    public function actionNivoslider() {
        return $this->render('nivo');
    }
}
