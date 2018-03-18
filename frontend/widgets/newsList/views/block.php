<?php
use Yii;
?>
<?php foreach ($news as $onenews): ?>
<h2><a href="<?=Yii::$app->urlManager->createUrl(['test/view', 'id' => $onenews['id']])?>">
        <?=$onenews['title']?></a></h2>
<p><?=$onenews['content']?></p>
<hr>
<?php endforeach; ?>