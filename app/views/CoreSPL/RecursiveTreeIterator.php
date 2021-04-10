<?php
$it = new RecursiveArrayIterator([1, 2, [3, 4, [5, 6, 7], 8], 9, 10]);
$tit = new RecursiveTreeIterator($it);


echo "<pre>";

foreach( $tit as $key => $value ){
    echo $value . PHP_EOL;
}

echo "</pre>";
