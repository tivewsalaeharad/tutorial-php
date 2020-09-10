<?php

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = [6, 7, 8, 9, 10, 11, 12];

echo "<pre>";
echo "Нечетные:\n";
print_r(array_filter($array1, function ($var) { return $var & 1; }));
echo PHP_EOL;
echo "Четные:\n";
print_r(array_filter($array2, function ($var) { return !($var & 1); }));
echo "</pre>";
