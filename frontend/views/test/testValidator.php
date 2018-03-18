<?php
    if ($model->hasErrors()){
        echo '<pre>';
        print_r($model->getErrors());
        echo '</pre>';
    }
?>
<h1>TestValidator</h1>
<form action="" method="post">
    <p>Test attribute</p>
    <input type="text" name="testAttribute">
    <p>Start value</p>
    <input type="text" name="startValue">
    <p>End value</p>
    <input type="text" name="endValue">
    <p><input name='options[]' type="checkbox" value='1'>Wifi</p>
    <p><input name='options[]' type="checkbox" value='2'>IceCream</p>
    <p><input name='options[]' type="checkbox" value='3'>Cola</p>
    <button type="submit">Check</button>
</form>
