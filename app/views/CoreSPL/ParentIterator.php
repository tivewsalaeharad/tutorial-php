<?php

$iterator = new ParentIterator(
    new RecursiveArrayIterator([
        5,
        [[1, 2], [3, 4], 5],
        [1, 2, 3],
        'A', 'B', 'C',
        ['a', ['b', 'c']],
        [[]],
    ])
);

foreach ($iterator as $recursive) {
    foreach ($recursive as $value) {
        $children = $iterator->getChildren();
        //if ($children->hasChildren()) {
            echo $value . '( ';
            foreach ($children as $child) {
                foreach ($child as $item) {
                    echo ($item ?? 'FALSE') . ' ';
                }
            }
            echo ') ';
        //} else {
        //    echo $value . '(' . ('-') . ') ';
        //}
    }
    echo "<br>";
}
