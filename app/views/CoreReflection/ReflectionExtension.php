<?php
$re = new ReflectionExtension('mysqli');
$re2 = new ReflectionExtension('date');
echo "<pre>";
print_r($re->getDependencies());
print_r(($re->getINIEntries()));
print_r(($re2->getINIEntries()));
echo "</pre>";
