<?
list($current, $last, $before) = [1, 0, 0];
for ($x = 0; $x < 6; $x++) {
    for ($y = 0; $y < 6; $y++) {
        $result[$y][$x] = $current;
        list ($current, $last, $before) = [$current + $last, $current, $last];
    }
}

array_walk($result, function($value, $key) use (&$diagonal_sum) {$diagonal_sum += $value[5 - $key];});

echo 'Все числа:<br>';
array_walk_recursive($result, function($value, $key) { echo $value.($key == 5 ? "<br>" : ", "); } );
echo '<br>';
echo 'Сумма по диагонали [5][0]-[0][5]: '.$diagonal_sum;
