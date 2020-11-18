<?php

echo escapeshellarg('-d');

echo "<br>";

echo escapeshellcmd('php -d display_errors=1 -d error_reporting=-1 -r echo $argv[1];');
