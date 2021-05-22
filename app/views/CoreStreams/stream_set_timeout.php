<?php

$fp = fsockopen("www.example.com", 80);
if (!$fp) {
    echo "Невозможно открыть сокет\n";
} else {

    fwrite($fp, "GET / HTTP/1.0\r\n\r\n");
    stream_set_timeout($fp, 0, 100000);
    $res = fread($fp, 2000);

    $info = stream_get_meta_data($fp);
    fclose($fp);

    if ($info['timed_out']) {
        echo 'Истекло время соединения!';
    } else {
        echo $res;
    }

}
