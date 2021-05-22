<?php
$src = fopen('http://www.example.com', 'r');
$dest1 = fopen('../app/files/first1k.txt', 'w');
$dest2 = fopen('../app/files/remainder.txt', 'w');

echo stream_copy_to_stream($src, $dest1, 1024) . " байт скопировано в first1k.txt\n";
echo stream_copy_to_stream($src, $dest2) . " байт скопировано в remainder.txt\n";