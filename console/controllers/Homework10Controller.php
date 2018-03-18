<?php

namespace console\controllers;
use yii\console\Controller;
use console\models\Log;
use Yii;
/**
 * Description of Homework10
 *
 * @author Kirilloid
 */
class Homework10Controller extends Controller 
{
    public function actionLog()
    {
        $file = Log::getAlias().'log.txt';
        Log::setLog($file);
    }
    
    public function actionSalary()
    {
        $file = Log::getAlias().'salary.txt';
        $sql = 'SELECT * FROM employee';
        $employee = Yii::$app->db->createCommand($sql)->queryAll();      
            $result = Yii::$app->mailer->compose('/homework10/employee',[
                'employee' => $employee       
            ])
            ->setFrom('testyii2@mail.ru')
            ->setTo('testyii2@mail.ru')
            ->setSubject('Тема сообщения')
            ->send(); 
        Log::salaryLog($file,$employee);
    }      
}
