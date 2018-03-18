<?php
/**
 * Created by PhpStorm.
 * User: Kirilloid
 * Date: 18.03.2018
 * Time: 15:01
 */

namespace frontend\models\forms;
use yii\base\Model;
use frontend\models\SearchNews;

class SearchForm extends Model
{
    public $keyword;

    public function rules()
    {
        return [
            ['keyword','trim'],
            ['keyword','required'],
            ['keyword','string','min' => 3],
        ];
    }

    public function search()
    {
        if ($this->validate())
        {
            $model = new SearchNews();
            return $model->simpleSearch($this->keyword);
        }
    }

    public function sphinxSearch()
    {
        if ($this->validate())
        {
            $model = new SearchNews();
            return $model->sphinxSearch($this->keyword);
        }
    }
}