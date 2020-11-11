<?php
$d = dir("..");
echo "Дескриптор: " . $d->handle . "<br>";
echo "Путь: " . $d->path . "<br>";
while (false !== ($entry = $d->read())) {
    echo $entry."<br>";
}
$d->close();
