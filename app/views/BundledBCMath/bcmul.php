<?php

function bcfact($n)
{
    $result = '1';
    if ($n > 1) {
        for ($i = 2; $i <= intval($n); $i++) {
            $result = bcmul($result, strval($i));
        }
    }
    return $result;
}

function bcpi($precision)
{
    $num = 0;
    bcscale($precision+3);
    $limit = ($precision+3)/14;
    for ($k = 0; $k < $limit; $k++) {
        $num = bcadd($num, bcdiv(
            bcmul(bcadd('13591409', bcmul('545140134', $k)), bcmul(bcpow(-1, $k), bcfact(6*$k))),
            bcmul(bcmul(bcpow('640320', 3*$k+1), bcsqrt('640320')), bcmul(bcfact(3*$k), bcpow(bcfact($k), 3)))
        ));
    }
    return bcdiv(1, (bcmul(12, ($num))), $precision);
}

echo bcpi(100);
