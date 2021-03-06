<?php

namespace frontend\models;
use Yii;

class Test
{
    /**
     * @param integer $max
     * @return array
     */
    public static function getNewsList($max)
    {
        $max = intval($max);
        $sql = "SELECT * from news LIMIT $max";
        $results = Yii::$app->db->createCommand($sql)->queryAll();
        $Strpos_helper = Yii::$app->StrposHelper;
        foreach ($results as &$result) 
        {
            $result['content'] = $Strpos_helper->getShort($result['content']);
        }
        return $results;
    }
    
    /**
     * @param integer $id
     * @return array|false
     */
    public static function getItem($id) {
        $id = intval($id);
        $sql = "SELECT * from news WHERE id=$id";
        $item = Yii::$app->db->createCommand($sql)->queryOne();
        return $item;
    }
}

