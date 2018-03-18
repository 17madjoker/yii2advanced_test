<?php

namespace console\models;
use yii\console\Controller;
use Yii;
/**
 * Description of Log
 *
 * @author Kirilloid
 */
class Log  
{
    public static function getAlias()
    {
        return Yii::getAlias('@common').'/files/';
    }
    
    public static function setLog($file)
    {
        $time = trim(date("Y-m-d H:i:s") .'|').PHP_EOL;
        file_put_contents($file, $time, FILE_APPEND | LOCK_EX);
    }
    
        public static function salaryLog($file,$data)
    {
        foreach ($data as $value) 
        {          
        $time = trim($value['id'].'-'.$value['fname'].'-'.$value['salary'].'|').PHP_EOL;
        file_put_contents($file, $time, FILE_APPEND | LOCK_EX);
        }
    }
}
