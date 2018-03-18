<?php

/**
 * Created by PhpStorm.
 * User: Kirilloid
 * Date: 18.03.2018
 * Time: 15:45
 */

namespace frontend\helpers;

class HighlightHelper
{
    public static function process($keyword, $string)
    {
        $newkeyword = '<mark>'.$keyword.'</mark>';
        return str_replace($keyword, $newkeyword, $string);
    }
}