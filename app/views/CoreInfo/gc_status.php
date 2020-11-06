<?php

// создадим дерево объектов, для которых понадобится собирать мусор
$a = new stdClass();
$a->b = [];
for ($i = 0; $i < 100000; $i++) {
    $b = new stdClass();
    $b->a = $a;
    $a->b[] = $b;
}
unset($a);
unset($b);
gc_collect_cycles();

echo "<pre>";
print_r(gc_status());
echo "</pre>";
