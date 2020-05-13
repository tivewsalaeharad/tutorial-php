<?php
$find = array('fuck', 'idiot', 'bitch');
$replace = array('f**k', 'id**t', 'bi**h');
if (isset($_POST['user_input']) && !empty($_POST['user_input'])) {
    $user_input = $_POST['user_input'];
    $user_input_new = str_ireplace($find, $replace, $user_input);
}
?>
<form action="" method="POST">
<textarea name = "user_input" rows = "6" cols = "30"><?=$user_input_new?></textarea>
<br>
<input type = "submit" value = "Исправить!">
</form>
