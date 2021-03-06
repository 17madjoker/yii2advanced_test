<?php

namespace frontend\models;
use yii\base\Model;
use Yii;
/**
 * Description of Subscribe
 *
 * @author Kirilloid
 */
class Subscribe extends Model 
{
    public $email;
    
    public function rules() {
        return [
            ['email','required'],
            ['email','email']
        ];
    }
    
    public function save()
    {
        $sql = "INSERT INTO subscriber (id,email) VALUES (NULL,'{$this->email}');";
        return Yii::$app->db->createCommand($sql)->execute();
    }
}
