<?php

ini_set('max_execution_time', 0);

function check($prime, &$number, &$result)
{
    $power = 0;
    while (bcmod($number, $prime) == 0) {
        $power = bcadd($power, 1);
        $number = bcdiv($number, $prime);
    }
    if ($power) {
        $result[] = ['prime' => $prime, 'power' => $power];
    }

}

function primefactor($number)
{
    $n = $number;
    $result = [];
    $first_prime_numbers = [2, 3, 5, 7];
    $grid_prime_numbers = [11, 13, 17, 19, 23, 29, 31, 37];

    $sqrt = bcsqrt($number);

    foreach ($first_prime_numbers as $first_prime_number) {
        check($first_prime_number, $number, $result);
    }

    $i = 0;

    do {
        $k = bcadd(bcmul(30, $i), current($grid_prime_numbers));

        check($k, $number, $result);

        if (!next($grid_prime_numbers)) {
            $i = bcadd($i, 1);
            reset($grid_prime_numbers);
        }
    } while (bccomp($k, $sqrt) < 0);

    if ($number != 1) {
        $result[] = ['prime' => $number, 'power' => 1];
    }

    echo $n.' = ';

    foreach ($result as $item) {
        echo $item['prime'].'<sup>'.$item['power'].'</sup> ';
    }

    echo '<br>';

}

//https://ru.numberempire.com/numberfactorizer.php

for ($i = 1; $i < 1000; $i++) {
    primefactor($i);
}

