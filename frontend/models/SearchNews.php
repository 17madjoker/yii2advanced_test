<?php
/**
 * Created by PhpStorm.
 * User: Kirilloid
 * Date: 18.03.2018
 * Time: 15:22
 */

namespace frontend\models;
use Yii;
use yii\sphinx;
use yii\helpers\ArrayHelper;
use frontend\models\NewsGenerate;

class SearchNews
{
    public function simpleSearch($keyword)
    {
        $params = [
            ':keyword' => $keyword,
        ];
        $sql = "SELECT * FROM news WHERE MATCH (content) AGAINST (:keyword) LIMIT 10";

        return Yii::$app->db->createCommand($sql)->bindValues($params)->queryAll();
    }

    public function sphinxSearch($keyword)
    {
        $sql = "SELECT * FROM idx_news_content WHERE MATCH ('$keyword') OPTION ranker=WORDCOUNT";
        $data = Yii::$app->sphinx->createCommand($sql)->queryAll();

        $ids = ArrayHelper::map($data, 'id', 'id');
        $data = NewsGenerate::find()->where(['id' => $ids])->asArray()->all();
        $data = ArrayHelper::index($data,'id');

        $correctdata = [];
        foreach ($ids as $element)
        {
            $correctdata[] = [
                'id' => $element,
                'title' => $data[$element]['title'],
                'content' => $data[$element]['content'],
            ];
        }

        return $correctdata;
    }
}