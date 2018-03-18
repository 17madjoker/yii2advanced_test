<?php

namespace frontend\controllers;
use frontend\models\Workers;
use yii\web\Controller;
use Yii;

/**
 * Description of WorkerController
 *
 * @author Kirilloid
 */
class WorkerController extends Controller
{
    public function actionList() 
    {
        echo '<pre>';
        $model = new Workers;
        $model->firstName = 'Ivan';
        $model->secondName = 'Ivanov';
        $model->thirdName = 'Ivanich';
        var_dump($model['firstName']);
        foreach ($model as $key => $value) {
            echo $key.' '.$value.'<br>';
        }
        var_dump($model->toArray());
        var_dump($model->getAttributes());
        var_dump($model->attributes);
        var_dump($model->attributes());
    }
    
    public function actionRegister() {
        $model = new Workers;
        $model->scenario = Workers::SCENARIO_EMPLOYEE_REGISTER;
        $formData = Yii::$app->request->post();
        if (Yii::$app->request->isPost) {
            $model->attributes = $formData;
            if($model->validate() and $model->emptysave()) {
                Yii::$app->session->setFlash('success','Даннные сохранены');
            }
        }
        return $this->render('register',[
            'model' => $model
        ]);
    }
    
    public function actionUpdate() {
        $model = new Workers;
        $model->scenario = Workers::SCENARIO_EMPLOYEE_UPDATE;
        $formData = Yii::$app->request->post();
        if (Yii::$app->request->isPost) {
            $model->attributes = $formData;
            if($model->validate() and $model->emptysave()) {
                Yii::$app->session->setFlash('success','Форма обновлена');
            }
        }
        return $this->render('update',[
            'model' => $model
        ]);
    }
}
