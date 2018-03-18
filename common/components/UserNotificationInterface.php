<?php
/**
 * Created by PhpStorm.
 * User: Kirilloid
 * Date: 18.03.2018
 * Time: 1:59
 */

namespace common\components;


interface UserNotificationInterface
{
    public function getEmail();

    public function getSubject();

}