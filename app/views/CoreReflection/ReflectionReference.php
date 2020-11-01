<?php
$val1 = 'foo';
$val2 = 'bar';
$arr = [&$val1, &$val2, &$val1];

$rr1 = ReflectionReference::fromArrayElement($arr, 0);
$rr2 = ReflectionReference::fromArrayElement($arr, 1);
$rr3 = ReflectionReference::fromArrayElement($arr, 2);

echo "<pre>";
var_dump(bin2hex($rr1->getId()));
var_dump(bin2hex($rr2->getId()));
var_dump(bin2hex($rr3->getId()));
var_dump($rr1->getId() === $rr2->getId());
var_dump($rr1->getId() === $rr3->getId());
echo "</pre>";
