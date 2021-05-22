<?php

$handle = @fopen("../app/files/remainder.txt", "r");

echo "<pre>";

if ($handle) {
    while (($buffer = stream_get_line($handle, 20)) !== false) {
        echo htmlspecialchars($buffer) . "<br>";
    }
    if (!feof($handle)) {
        echo "Ошибка: stream_get_line() неожиданно потерпел неудачу\n";
    }
    fclose($handle);
}

echo "</pre>";
