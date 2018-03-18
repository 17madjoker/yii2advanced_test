<?php
use Yii;
$this->params['breadcrumbs'] = [
    'Test 1',
    ['label' => 'Index', 'url' => ['/test/index']]
];
?>
<?php foreach ($news as $onenews): ?>
<h2><a href="<?=Yii::$app->urlManager->createUrl(['test/view', 'id' => $onenews['id']])?>">
        <?=$onenews['title']?></a></h2>
<p><?=$onenews['content']?></p>
<hr>
<?php endforeach; ?>


