<?php
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
$title = ArrayHelper::getColumn($news, 'title');
echo '<pre>';
print_r($title);
echo implode(', ', $title);
$listData = ArrayHelper::map($news, 'id', 'title');
var_dump($listData);
echo Html::dropDownList('titles', [], $listData);