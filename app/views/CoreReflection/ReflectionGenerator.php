<?php
function foo()
{
    yield 1;
}

function bar()
{
    yield from foo();
}

function baz()
{
    yield from bar();
}

$gen = baz();
$gen->valid(); // запускаем генератор

echo "<pre>";
print_r((new ReflectionGenerator($gen))->getTrace());
echo "</pre>";
