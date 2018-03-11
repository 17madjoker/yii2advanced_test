<?php
/**
 * Description of News
 *
 * @author Kirilloid
 */

namespace console\models;
use Yii;
use common\components\StrposHelper;

class News 
{
    const STATUS_NOT_SEND = 1;
    
    public static function getList()
    {
        $sql = 'SELECT * FROM news WHERE status = '.self::STATUS_NOT_SEND.';';
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        return self::prepareList($result);
    }
    
    public static function prepareList($result)
    {
        if(!empty($result) and is_array($result))
        {
            foreach ($result as &$value) {
                $value['content'] = Yii::$app->StrposHelper->getShort($value['content'],20);
            }
        }
        return $result;
    }
}
