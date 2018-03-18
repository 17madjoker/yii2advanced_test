<?php
/** @var $comments array 
 */
use yii\helpers\Html;
?>
<?php foreach ($comments as $comment): ?>
    <?=Html::tag('h2', Html::encode($comment['author']))?>
    <?=Html::tag('p', Html::encode($comment['id']))?>
    <?=Html::tag('p', Html::encode($comment['text']))?>
    <hr>
<?php endforeach; ?> 


