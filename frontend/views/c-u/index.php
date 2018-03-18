<?php foreach ($goods as $one): ?>
<p><?= $one->getProducerName()?></p>
<i><?=$one->getCategoryName()?></i>
<hr>
<?php endforeach; ?>

<?php foreach ($category as $one): ?>
    <?php foreach ($one->getGoodsRelations() as $one_goods): ?>
        <p><?=$one_goods->name;?></p>
    <?php endforeach; ?>
<hr>
<?php endforeach; ?>

