<?php

namespace frontend\components;
use Yii;

class StrposHelper 
{
    private $maxTextLimit;
    
    public function __construct() {
        $this->maxTextLimit = Yii::$app->params['maxTextLimit'];
    }

    public function getShort($string,$limit = null)
    {
        if ($limit === null) 
        {
            $limit = $this->maxTextLimit;
        }
        $res = mb_substr($string, 0, $limit);
        return $res;
    }
}
