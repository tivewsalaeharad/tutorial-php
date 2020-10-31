<?php
$var1 = new DateTime();
$var2 = $var1;
$var3 = $var1;
echo "<pre>";
debug_zval_dump($var1);
debug_zval_dump(new DateTime());
echo "</pre>";
