<?php

$rm = new ReflectionMethod('ReflectionMethod', 'export');
echo "<pre>";
var_dump($rm->getPrototype());
echo "</pre>";

$reflectionMethod = new ReflectionMethod('ReflectionClass', 'getName');
echo $reflectionMethod->invoke(new ReflectionClass('ReflectionExtension'));