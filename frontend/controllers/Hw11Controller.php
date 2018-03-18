<?php

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\Hw11;

/**
 * Description of Hw11Controller
 *
 * @author Kirilloid
 */
class Hw11Controller extends Controller {
    
    public function actionForm() {
        $model = new Hw11();
        $formData = Yii::$app->request->post();
        if (Yii::$app->request->isPost){
            $model->attributes = $formData;
            if ($model->validate()){
                Yii::$app->session->setFlash('success', 'Validate success');
                $result = Yii::$app->mailer->compose('/hw11/testmail',[
                'model' => $model])
                ->setFrom('testyii2@mail.ru')
                ->setTo('testyii2@mail.ru')
                ->setSubject('Тема сообщения')
                ->send(); 
            }
        }
        return $this->render('form',[
            'model' => $model
        ]);
    }
}
