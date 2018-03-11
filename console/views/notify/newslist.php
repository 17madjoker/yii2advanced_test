<?php foreach ($newsList as $news): ?>
    <h1><?=$news['title']?></h1>
    <p><?=$news['content']?></p>
    <hr>
<?php endforeach; ?>
