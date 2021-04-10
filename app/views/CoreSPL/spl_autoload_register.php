<?php

use MyClasses\Class1;
use MyClasses\Class2;

spl_autoload_register(function($class) {
    $fn = '../app/lib/'.str_replace('\\', '/', $class.'.php');
    echo '<b>autoload: ' . $class . '</b> file: ' . $fn . '<br>';
    if (file_exists($fn)) require $fn; 
});

$o1 = new Class1();
$o2 = new Class2();

echo "<pre>";
print_r(spl_autoload_functions());
echo "</pre>";
