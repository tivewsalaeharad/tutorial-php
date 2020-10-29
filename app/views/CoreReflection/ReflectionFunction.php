<?php

function test()
{
static $a = 0, $b = 15;
$a++;
$b++;
return $a;
}

$rf = new ReflectionFunction('test');
echo "<pre>";
print_r( $rf->getStaticVariables() );
var_dump(test());
print_r( $rf->getStaticVariables() );
echo "</pre>";
