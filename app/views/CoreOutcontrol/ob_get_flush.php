<?php

//ob_get_flush() ==== ob_get_contents(); ob_end_flush();

echo '['.ob_get_level().']';
echo 1;

ob_start();
echo 'Этот текст не будет выведен';

ob_clean();
echo '<i>['.ob_get_level().']';
echo 2;
echo '</i>';

ob_flush();
echo '<b>['.ob_get_level().']';
echo 3;
echo 4;
echo '</b>';

$fragment = ob_get_flush();
echo '['.ob_get_level().']';
echo 5;
echo 6;
echo $fragment;
