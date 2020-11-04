<?php

ob_start();
echo "Привет ";
$len1 = ob_get_length();
echo "Мир";
$len2 = ob_get_length();
ob_end_flush();
echo $len1 . ", " . $len2;
