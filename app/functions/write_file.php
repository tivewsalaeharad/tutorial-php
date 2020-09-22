<?php

$all='Name: '.$_POST['name']."\r\n".'Message: '.$_POST['message']."\r\n";
if (!$handle = fopen($this->file_write_file, 'a')) {
    echo "Не могу открыть файл ($this->file_write_file)";
    exit;
}
if (fwrite($handle, $all) === false) {
    echo "Не могу произвести запись в файл ($this->file_write_file)";
    exit;
}
header('Location: /CoreFile/fread');
