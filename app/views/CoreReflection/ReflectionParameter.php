<?php
function someFunction(int $param, string $param2, callable &$param3, $param4, Exception &$param5) {}

$rp = (new ReflectionFunction('someFunction'))->getParameters();
$rmp = (new ReflectionMethod('ReflectionClass', 'getConstant'))->getParameters();

echo "<pre>";

foreach ($rp as $rpe) {
    $rt = $rpe->getType();
    echo $rpe->getName().': '.
        ($rt ? $rt->getName().($rt->isBuiltin() ? '@' : '').' ' : 'NOTYPE ').
        ($rpe->canBePassedByValue() ? 'BYVAL ' : '').
        ($rpe->isPassedByReference() ? 'BYREF ' : '').PHP_EOL;
}

echo "</pre><pre>";

foreach ($rmp as $item) {
    var_dump($item->getDeclaringFunction());
}

echo "</pre>";

