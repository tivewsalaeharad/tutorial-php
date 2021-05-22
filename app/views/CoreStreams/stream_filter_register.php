<?php

/* Определяем наш класс фильтра */
class strtoupper_filter extends php_user_filter {
    function filter($in, $out, &$consumed, $closing)
    {

        var_dump($in);
        echo "<br>";

        while ($bucket = stream_bucket_make_writeable($in)) {

            var_dump($bucket);
            echo "<br>";

            $bucket->data = strtoupper($bucket->data);
            $consumed += $bucket->datalen;
            stream_bucket_append($out, $bucket);
        }
        return PSFS_PASS_ON;
    }
}

/* Регистрируем наш фильтр в PHP */
stream_filter_register("strtoupper", "strtoupper_filter")
or die("Не удалось зарегистрировать фильтр");

$fp = fopen("../app/files/foo-bar.txt", "w");

/* Присоединяем зарегистрированный фильтр к только что открытому потоку */
stream_filter_append($fp, "strtoupper");

fwrite($fp, "Line1\n");
fwrite($fp, "Word - 2\n");
fwrite($fp, "Easy As 123\n");

fclose($fp);

/* Читаем содержимое снова
 */
echo "<pre>";
readfile("../app/files/foo-bar.txt");
echo "</pre>";
