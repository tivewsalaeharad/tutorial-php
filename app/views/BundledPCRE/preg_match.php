<?php
echo preg_match('/[a-zA-Zа-яА-Я]/', '+7(495)250-47-89');
echo "<pre>";
preg_match('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);
print_r($matches);
preg_match('/(a)(b)*(c)/', 'ac', $matches);
var_dump($matches);
preg_match('/(a)(b)*(c)/', 'ac', $matches, PREG_UNMATCHED_AS_NULL);
var_dump($matches);
$subject = "abcdef";
$pattern = '/^def/';
preg_match($pattern, $subject, $matches, PREG_OFFSET_CAPTURE, 3);
print_r($matches);
$subject = "abcdef";
$pattern = '/^def/';
preg_match($pattern, substr($subject,3), $matches, PREG_OFFSET_CAPTURE);
print_r($matches);
echo "</pre>";
