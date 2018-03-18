<?php

namespace frontend\controllers;
use yii\web\Controller;
use Yii;
use frontend\models\Subscribe;

/**
 * Description of NewsletterController
 *
 * @author Kirilloid
 */
class NewsletterController extends Controller
{
    
    public function actionSubscribe() 
    {
        $model = new Subscribe;
        $formData = Yii::$app->request->post();
        if (Yii::$app->request->isPost)
            {       
                $model->email = $formData['email'];
                if ($model->validate() and $model->save())
                {
                    Yii::$app->session->setFlash('success', 'Sub_created!');
                }
            }
        return $this->render('subscribe',[
            'model' => $model
        ]);
    }
}
