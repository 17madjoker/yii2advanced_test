<?php
/**
 * Created by PhpStorm.
 * User: Kirilloid
 * Date: 18.03.2018
 * Time: 14:59
 */

namespace frontend\controllers;
use yii\web\Controller;
use frontend\models\forms\SearchForm;
use Yii;

class SearchController extends Controller
{
    public function actionIndex()
    {
        $model = new SearchForm();

        $results = null;
        if ($model->load(Yii::$app->request->post()))
        {
            $results = $model->search();
        }

        return $this->render('index',[
            'model' => $model,
            'results' => $results
        ]);
    }

    public function actionSphinx()
    {
        $model = new SearchForm();

        $results = null;
        if ($model->load(Yii::$app->request->post()))
        {
            $results = $model->sphinxSearch();
        }

        return $this->render('sphinx',[
            'model' => $model,
            'results' => $results
        ]);
    }
}