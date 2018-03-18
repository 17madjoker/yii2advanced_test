<?php
/* @var $this yii\web\View
 * @var $result[] frontend\models\Book 
 *  */

use yii\helpers\Url;

?>
<h1>Bookshop</h1>
<p><a href="<?=Url::to(['create'])?>" class="btn btn-default">Create</a></p>
    <hr>
<?php foreach ($result as $book): ?>

<h3><?=$book->name?></h3>
<p><?=$book->isbn?></p>
<p><?=$book->getDatePublished()?></p>
<p><b><?=$book->getPublisherName();?></b></p>
<?php foreach ($book->getAuthors() as $author): ?> 
<i><?=$author->getFullName()?></i>        
<?php endforeach;?>
    <hr>
<?php endforeach;