<?php foreach ($employee as $worker): ?>
    <h1><?=$worker['fname'].' - '.$worker['sname']?></h1>
    <p><?='Зарплата - '.$worker['salary'].' рублей'?></p>
    <hr>
<?php endforeach; ?>
