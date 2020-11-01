<?php
$a = ['a' => 'one', 'b' => 'two', 'c' => 'three'];
$b = ['a' => 'one', 'b' => 'two', 'c' => 'three'];

$a['b'] = null;
unset($b['b']);

echo '<pre>';
var_export($a);
echo PHP_EOL;
var_export($b);
echo '</pre>';
