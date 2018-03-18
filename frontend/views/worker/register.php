<h1>Register form!</h1>
<?php
    if($model->hasErrors()) {
        echo '<pre>';
        print_r($model->getErrors());
        echo '</pre>';
    }
?>
<form action="" method="post">
    <p>First name:</p>
    <input type="text" name="firstName">
    <p>Second name:</p>
    <input type="text" name="secondName">
    <p>Third name:</p>
    <input type="text" name="thirdName">
    <p>Email:</p>
    <input type="text" name="email">
    <button type="submit">Send</buttom>
</form>

