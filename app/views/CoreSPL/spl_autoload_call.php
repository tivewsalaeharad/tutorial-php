<?php

spl_autoload_call('Class3');
spl_autoload('Class4');

$o3 = new Class3();
$o4 = new Class4();

echo "<pre>";
print_r(spl_autoload_functions());
echo "</pre>";