<?php

/**
 * Created by PhpStorm.
 * User: Kirilloid
 * Date: 18.03.2018
 * Time: 3:46
 */

namespace frontend\controllers\behaviors;
use yii\base\Behavior;
use yii\base\Controller;
use Yii;

class AccessBehavior extends Behavior
{

    public function events()
    {
        return [
            Controller::EVENT_BEFORE_ACTION => 'checkAccess'
        ];
    }

    public function checkAccess()
    {
        if (Yii::$app->user->isGuest)
        {
            return Yii::$app->controller->redirect(['site/index']);
        }
    }
}