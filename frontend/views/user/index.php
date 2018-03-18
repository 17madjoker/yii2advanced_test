<?php
/* @var $this yii\web\View */

use yii\helpers\Url;

?>
<h1>user/index</h1>
<?php if(isset(Yii::$app->user->identity->username)):?>
<mark>Hello <?=Yii::$app->user->identity->username?></mark>
<?php endif ?>
<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
<p><a href="<?=Url::to(['user/logout'])?>" class="btn btn-default">Logout</a></p>
