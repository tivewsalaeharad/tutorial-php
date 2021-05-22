<?php

$url = 'http://www.php.net/';

if (!$fp = fopen($url, 'r')) {
    trigger_error("Невозможно открыть URL ($url)", E_USER_ERROR);
}

$meta = stream_get_meta_data($fp);

echo "<pre>";
print_r($meta);
echo "</pre>";

fclose($fp);

