<?php
use yii\helpers\Html;
echo Html::tag('h2', 'title');
echo Html::tag('p', 'Some text');
$array = [
    'first' => 'Chicago',
    'second' => 'Colorado',
    'third' => 'Moscow',
];
echo Html::dropDownList('cityes', [], $array);
echo Html::radioList('cityes', [], $array);
echo Html::checkboxList('cityes', [], $array);

