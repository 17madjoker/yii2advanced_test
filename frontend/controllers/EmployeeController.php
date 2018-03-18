<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;
use yii\web\Controller;
use frontend\models\Employee;
use Yii;
/**
 * Description of EmployeeController
 *
 * @author Kirilloid
 */
class EmployeeController extends Controller 
{

    public function actionRegister() 
    {        
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_REGISTER;
                
        if ($model->load(Yii::$app->request->post())) {

            if ($model->validate()) {
                Yii::$app->session->setFlash('success', 'Registered!');
            }
        }
        
        return $this->render('register', [
            'model' => $model,
        ]);
    }
    
    public function actionUpdate() {
        return $this->render('update');
    }
}
