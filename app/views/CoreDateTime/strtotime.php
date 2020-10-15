<?php

$d = "2020-07-29";
$d1 = strtotime($d);
$d2 = $d1 - $d1 % 86400;
$d3 = date('Y-m-d H:i:s', $d2);
echo $d3;

?>
