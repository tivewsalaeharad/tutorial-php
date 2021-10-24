<?php
$subject = array('1', 'a', '2', 'b', '3', 'A', 'B', '4');
$pattern = array('/[1a]/', '/\d/', '/[a-z]/', );
$replace = array('{$0}', '[$0]', '($0)');
//$replace = array('one-first ', 'letter ', 'number ', );

echo "<pre>";
echo "preg_filter возвращает\n";
print_r(preg_filter($pattern, $replace, $subject));

echo "preg_replace возвращает\n";
print_r(preg_replace($pattern, $replace, $subject));
echo "</pre>";
