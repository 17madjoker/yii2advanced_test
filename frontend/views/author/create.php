<?php
/* @var $this yii\web\View
 * @var $models frontend\models\Author
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<h1>author/create</h1>

<?php $form = ActiveForm::begin() ?>

<?=$form->field($model,'first_name')?>
<?=$form->field($model,'last_name')?>
<?=$form->field($model,'birthdate')?>
<?=$form->field($model,'rating')?>
<?=Html::submitButton('Create',['class' => 'btn btn-success'])?>

<?php ActiveForm::end() ?>

