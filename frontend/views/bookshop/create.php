<?php
/*
 * @var $this yii\web\View
 * @var $book frontend\models\Book
 * @var $publishers array
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use dosamigos\datepicker\DatePicker;
?>

<?php $form = ActiveForm::begin() ?>

<?=$form->field($book, 'name')?>
<?=$form->field($book, 'isbn')?>
<?= $form->field($book, 'date_published')->widget(
    DatePicker::className(), [
    // inline too, not bad
    'inline' => true,
    // modify template for custom rendering
    'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
    'clientOptions' => [
        'autoclose' => true,
        'format' => 'yyyy-m-d'
    ]
]);?>
<?=$form->field($book, 'publisher_id')->dropDownList($publishers)?>
<?=Html::submitButton('Create book',['class' => 'btn btn-success'])?>

<?php $form = ActiveForm::end() ?>