<?php
/**
 * @var $model fronted\models\Subcsribe
 */
use Yii;
use common\widgets\Alert;
?>
<form action="" method="post">
    <p>Email</p>
    <input type="text" name="email" class="form-control">
    <?php if(Yii::$app->session->hasFlash('success')):?>
    <p><?=Yii::$app->session->getFlash('success')?></p>
    <?php endif;?>
    <br>
    <?php if($model->hasErrors()):?>
    <p><?php var_dump($model->getErrors())?></p>
    <?php endif; ?>
    <button class="btn btn-success" type="submit">Отправить!</button>
</form>

