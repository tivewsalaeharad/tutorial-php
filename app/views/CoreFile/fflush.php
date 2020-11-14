<?php
echo "<pre>";
$filename = '../app/files/bar.txt';

$file = fopen($filename, 'r+');
rewind($file);
echo PHP_EOL;

fwrite($file, 'Foo');
readfile($filename);
echo PHP_EOL;

fflush($file);
readfile($filename);
echo PHP_EOL;

ftruncate($file, ftell($file));
readfile($filename);
echo PHP_EOL;

fwrite($file, 'Foo');
readfile($filename);
echo PHP_EOL;

fclose($file);

echo "</pre>";
