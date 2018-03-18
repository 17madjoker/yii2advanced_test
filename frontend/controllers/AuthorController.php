<?php

namespace frontend\controllers;
use frontend\models\Author;
use frontend\controllers\behaviors\AccessBehavior;
use Yii;

class AuthorController extends \yii\web\Controller
{
    public function behaviors()
    {
         return [
            AccessBehavior::className()
         ];
    }
    
    public function actionCreate()
    {
        $model = new Author();

        if($model->load(Yii::$app->request->post()) and $model->save())
        {
            Yii::$app->session->setFlash('success','Author was added');
            return $this->redirect(['index']);
        }

        return $this->render('create',[
            'model' => $model
        ]);
    }

    public function actionDelete($id)
    {
        Author::findOne($id)->delete();
        Yii::$app->session->setFlash('danger','Author was deleted');

        return $this->redirect(['index']);
    }

    public function actionIndex()
    {
        $authors = Author::find()->all();
        return $this->render('index',[
            'authors' => $authors,
        ]);
    }

    public function actionRead()
    {
        return $this->render('read');
    }

    public function actionUpdate($id)
    {
        $model = Author::findOne($id);

        if($model->load(Yii::$app->request->post()) and $model->save())
        {
            Yii::$app->session->setFlash('success','Author was update');
            return $this->redirect(['index']);
        }

        return $this->render('update',[
            'model' => $model
        ]);
    }

}
