<?php
/**
 * @var $model frontend\models\forms\SearchForm
 * @var $results frontend\models\
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use frontend\helpers\HighlightHelper;
?>

<h1>Simple search</h1>

<?php $form = ActiveForm::begin() ?>

<?= $form->field($model,'keyword')?>
<?= Html::submitButton('Search',['class' => 'btn btn-primary'])?>

<?php $form = ActiveForm::end() ?>

<hr>

<div class="col-md-8">
    <?php if($results): ?>
        <?php foreach($results as $result): ?>
            <h3><?=$result['title']?></h3>
            <p><?=$result['id']?></p>
            <p><?=HighlightHelper::process($model->keyword, $result['content'])?></p>
            <hr>
        <?php endforeach ?>
    <?php endif?>
</div>
