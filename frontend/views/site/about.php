<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use frontend\widgets\newsList\newsList;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= newsList::widget(['showLimit' => 3])?>
    </p>
    <code><?= __FILE__ ?></code>
</div>
