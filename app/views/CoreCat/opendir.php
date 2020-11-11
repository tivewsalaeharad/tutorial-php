<?php

$dir = getcwd().'/';

if (is_dir($dir)) {
    if ($dh = opendir($dir)) {

        var_dump($dh);
        echo "<br>".get_resource_type($dh)."<br>".$dh."<br>";

        while (($file = readdir($dh)) !== false) {
            echo "файл: $file : тип: " . filetype($dir . $file) . "<br>";
        }
        closedir($dh);
    }
}
