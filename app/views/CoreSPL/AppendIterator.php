<?php

$array_a = new ArrayIterator(array('a' => 'aardwolf', 'b' => 'bear', 'c' => 'capybara'));
$array_b = new RegexIterator($array_a, '/^[ac]/');

$iterator = new AppendIterator;
$iterator->append($array_a);
$iterator->append($array_b);

foreach ($iterator as $current) {
$inner = $iterator->getInnerIterator();
if ($inner instanceOf RegexIterator) {
echo 'Отфильтрованный: ';
} else {
echo 'Оригинальный: ';
}
echo '(' . $iterator->getIteratorIndex() . ') ' . $current . '<br>';
}

echo '<hr>';

foreach ($iterator->getArrayIterator() as $item) {
    echo get_class($item) . '<br>';
}