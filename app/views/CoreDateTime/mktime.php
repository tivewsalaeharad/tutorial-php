<?php

$year = 2021;
$start_date = date('Y-m-d', mktime(0, 0, 0,12, 31, $year - 1));
$end_date = date('Y-m-d', mktime(0, 0, 0,12, 31, $year));

echo $start_date . " " . $end_date;