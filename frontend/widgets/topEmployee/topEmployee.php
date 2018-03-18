<?php

namespace frontend\widgets\topEmployee;
use yii\base\Widget;
use Yii;
/**
 * Description of topEmployee
 *
 * @author Kirilloid
 */
class topEmployee extends Widget {
    
    public $num_of_employee = null;
    public function run() {        
        if(!isset($this->num_of_employee)){
            $this->num_of_employee = 2;
        }
        $sql = "SELECT * FROM employee ORDER BY salary LIMIT $this->num_of_employee";
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('top',[
            'topEmployee' => $result
        ]);
    }
}
