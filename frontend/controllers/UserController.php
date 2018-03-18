<?php

namespace frontend\controllers;
use frontend\models\LoginForm;
use frontend\models\forms\SingupForm;
use common\components\EmailService;
use Yii;

class UserController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSingup()
    {
        $model = new SingupForm();

        if ($model->load(Yii::$app->request->post()) and $user = $model->save())
        {
            Yii::$app->user->login($user);
            Yii::$app->session->setFlash('success','Register success');
            return $this->redirect(['user/index']);
        }

        return $this->render('singup', [
            'model' => $model
        ]);
    }

    public function actionLogin()
    {
        $model = new LoginForm();

        if($model->load(Yii::$app->request->post()) and $model->login())
        {
            return $this->redirect(['user/index']);
        }

        return $this->render('login',[
            'model' => $model
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->redirect(['user/login']);
    }

}
