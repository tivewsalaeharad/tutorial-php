<?php
function someFunction(int $param, $param2) {}

$rf = new ReflectionFunction('someFunction');
$rp = $rf->getParameters();
echo "<pre>";
var_dump($rp);
echo PHP_EOL;

foreach ($rp as $rpe) {
    $rt = $rpe->getType();
    echo ($rt ? $rt : '-').PHP_EOL;
}

echo "</pre>";

