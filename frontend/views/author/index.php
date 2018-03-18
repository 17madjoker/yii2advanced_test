<?php
/* @var $this yii\web\View
 * @var $authors[] frontend\models\Author
 */

use yii\helpers\Url;

?>

<h1>author/index</h1>
<a href="<?=Url::to(['author/create'])?>" class='btn btn-success'>Create</a>
<hr>

<table class="table table-striped">
    <thead>
    <tr>
        <th>ID</th>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Дата рождения</th>
        <th>Edit link</th>
        <th>Delete author</th>
    </tr>
    </thead>
<?php foreach ($authors as $author): ?>
    <tr>
        <td><?=$author->id?></td>
        <td><?=$author->first_name?></td>
        <td><?=$author->last_name?></td>
        <td><?=$author->birthdate?></td>
        <td><a href="<?=Url::to(['author/update','id' => $author->id])?>" class="btn btn-default">Edit</a></td>
        <td><a href="<?=Url::to(['author/delete','id' => $author->id])?>" class="btn btn-danger">Delete</a></td>
    </tr>
<?php endforeach ?>
</table>