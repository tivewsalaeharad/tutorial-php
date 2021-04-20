<?php

$fo = new SplFileObject('../app/files/write.txt');

echo $fo->current() . "<br>";
echo $fo->current() . "<br>";
echo $fo->current() . "<br>";

echo $fo->fgets() . "<br>";
echo $fo->fgets() . "<br>";
echo $fo->fgets() . "<br>";
