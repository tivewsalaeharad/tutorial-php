<?php

$numbers = new ArrayIterator(array(100, 2, 30, 400, 50));

// Фильтр больших файлов ( > 100MB)
function is_large_number($current) {
    return is_numeric($current) && $current > 35;
}
$large_numbers = new CallbackFilterIterator($numbers, 'is_large_number');

foreach ($large_numbers as $number) {
    echo $number . '<br>';
}
