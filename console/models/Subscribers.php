<?php

namespace console\models;
use Yii;

/**
 * Description of Subscribers
 *
 * @author Kirilloid
 */
class Subscribers {
    
    public static function getList()
    {
        $sql = 'SELECT * FROM subscriber;';
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
}
