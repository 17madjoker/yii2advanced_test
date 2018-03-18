<?php

namespace frontend\controllers;
use yii\db\Connection;
use yii\web\Controller;
use yii\db\Command;
use Yii;
/**
 * Description of DaoController
 *
 * @author Kirilloid
 */
class DaoController extends Controller 
{
    
    public function actionIndex()
    {
        $db = new Connection([
            'dsn' => 'mysql:host=localhost;dbname=yii2advanced',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8'
        ]);
        
        $sql = 'SELECT COUNT(*) as count FROM news';
        $command = new Command([
            'db' => $db,
            'sql' => $sql,
        ]);
        $results = $command->queryScalar();     
        
        echo '<pre>';
        print_r($results); die; 
        echo '</pre>';
        
        return $this->render('index');
    }
    
    public function actionDouble()
    {
        $sql1 = 'SELECT * FROM city';
        $result1 = Yii::$app->db->createCommand($sql1)->queryAll();
        
        $sql2 = 'SELECT * FROM bango';
        $result2 = Yii::$app->db2->createCommand($sql2)->queryAll();
        
        var_dump($result1);
        var_dump($result2);
        
        return $this->render('double');
    }
}
