<pre>

if (isset($_POST['upload'])) {
    $tmp_name = $_FILES['uploadfile']['tmp_name'];
    if (is_uploaded_file($tmp_name)) {
        $brief_name = $_FILES['uploadfile']['name'];
        $file_name = "../app/files/$brief_name";
        echo "Файл $brief_name успешно загружен.&lt;br&gt;Отображаем содержимое&lt;br&gt;&lt;br&gt;";
        move_uploaded_file($tmp_name, $file_name);
        readfile($file_name);
        echo "&lt;br&gt;";
    } else {
        echo "Возможная атака с участием загрузки файла: '$tmp_name'.";
    }
}

</pre>

<?php
if (isset($_POST['upload'])) {
    $tmp_name = $_FILES['uploadfile']['tmp_name'];
    if (is_uploaded_file($tmp_name)) {
        $brief_name = $_FILES['uploadfile']['name'];
        $file_name = "../app/files/$brief_name";
        echo "Файл $brief_name успешно загружен.<br>Отображаем содержимое<br><br>";
        move_uploaded_file($tmp_name, $file_name);
        readfile($file_name);
        echo "<br>";
    } else {
        echo "Возможная атака с участием загрузки файла: '$tmp_name'.";
    }
}
?>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="uploadfile">
<input type="submit" name="upload" value="Загрузить">
</form>
