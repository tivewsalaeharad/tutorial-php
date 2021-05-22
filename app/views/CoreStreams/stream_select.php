<?php

if (!$fpr = @fopen("../app/files/write.txt", "r")) {
    trigger_error("Невозможно открыть файл", E_USER_ERROR);
}

if (!$fpe = @fopen("../app/files/test.txt", "r")) {
    trigger_error("Невозможно открыть URL", E_USER_ERROR);
}

$r = [];
$w = [$fpr];
$e = [$fpe];
$ss = stream_select($r, $w, $e, 0);

if (false === $ss) {
    echo "Произошла ошибка при вызове stream_select()\n";
} else {

    echo "<pre>";

    echo "===\$r===\n";
    foreach ($r as $s) print_r(stream_get_meta_data($s));
    echo "\n";

    echo "===\$w===\n";
    foreach ($w as $s) print_r(stream_get_meta_data($s));
    echo "\n";

    echo "===\$e===\n";
    foreach ($e as $s) print_r(stream_get_meta_data($s));
    echo "\n";

    echo $ss;
    echo "</pre>";
}
