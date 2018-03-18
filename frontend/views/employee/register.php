<h1>Register form!</h1>
<?php
/**
 *  @var $model fronten\models\Employee
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;

    if($model->hasErrors()) {
        echo '<pre>';
        print_r($model->getErrors());
        echo '</pre>';
    }
?>

<?php $form = ActiveForm::begin(); ?>

<?=$form->field($model,'firstName')?>
<?=$form->field($model,'lastName')?>
<?=$form->field($model,'middleName')?>
<?=$form->field($model,'email')?>
<?=$form->field($model,'birthday')?>
<?=$form->field($model,'hiringDate')?>
<?=$form->field($model,'position')?>
<?=$form->field($model,'idCode')?>
<?=$form->field($model,'city')->dropDownList([$model->getCitiesList()])?>
<?=Html::submitButton('Send', ['class' => 'btn btn-primary']);?>

<?php ActiveForm::end(); ?>



<!--
<form action="" method="post">
    <p>First name:</p>
    <input type="text" name="firstName">
    <p>Second name:</p>
    <input type="text" name="lastName">
    <p>Middle name:</p>
    <input type="text" name="middleName">
    <p>Birthday:</p>
    <input type="text" name="birthday">
    <p>Hiring day:</p>
    <input type="text" name="hiringDate">
    <p>Position:</p>
    <input type="text" name="position">
    <p>id Code:</p>
    <input type="text" name="idCode">
    <p>Email:</p>
    <input type="text" name="email">
    <button type="submit">Send</buttom>
</form>
-->
