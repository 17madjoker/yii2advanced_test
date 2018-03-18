<?php

namespace frontend\models;
use Yii;
use yii\base\Model;
use yii\helpers\Html;

/**
 * 
 */
class Comments extends Model 
{
    public static function getComments()
    {
        $sql = "SELECT * from comments";
        $results = Yii::$app->db->createCommand($sql)->queryAll();
        foreach ($results as &$result) 
        {
            $result['comment'] = Html::encode($result['comment']);
        }
        return $results;
    } 
}



