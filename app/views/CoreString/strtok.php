<?php
$string = "This is\tan example\nstring";
/* В качестве разделителей используем пробел, табуляцию и перевод строки */
$tok = strtok($string, " \n\t");

while ($tok !== false) {
    echo "Word=$tok<br />";
    $tok = strtok(" \n\t");
}
