<?php
    if($model->hasErrors()) {
        echo '<pre>';
        print_r($model->getErrors());
        echo '</pre>';
    }
?>
<h3>H11 form test</h3>
<form action="" method="post">
    <p>Width:</p>
    <input type="text" name='width'><hr>
    <p>Height:</p>
    <input type="text" name='height'><hr>
    <p>Number of camer:</p>
    <p><input name='camera[]' type='radio' value='1'> 1</p>
    <p><input name='camera[]' type='radio' value='2'> 2</p>
    <p><input name='camera[]' type='radio' value='3'> 3</p><hr>
    <p>Number of stvorki:</p>
    <p><input type="text" name='stvorki'></p><hr>
    <p>Number of povorotnix stvorki:</p>
    <p><input type="text" name='povorotstvorki'></p><hr>
    <p>Color:</p>
    <p><select size="3" name="color">
    <option value="1">White</option>
    <option value="2">Grey</option>
    </select></p><hr>
    <p>Podokonnik:</p>
    <p><input type="checkbox" name='podokonnik'></p><hr>
    <p>Name:</p>
    <input type="text" name='name'>
    <p>email:</p>
    <input type="text" name='email'>
    <button type='submit'>Send</button>
</form>
