<?php

$myArray = [
    0 => 'a',
    1 => ['subA','subB', [0 => 'subsubA', 1 => 'subsubB', 2 => [0 => 'deepA', 1 => 'deepB']]],
    2 => 'b',
    3 => ['subA','subB','subC'],
    4 => 'c'
];

echo "<pre>";

$iterator = new RecursiveArrayIterator($myArray);
iterator_apply($iterator, 'traverseStructure', array($iterator));

function traverseStructure($iterator) {

    while ( $iterator -> valid() ) {

        if ( $iterator -> hasChildren() ) {

            traverseStructure($iterator -> getChildren());

        }
        else {
            echo $iterator -> key() . ' : ' . $iterator -> current() .PHP_EOL;
        }

        $iterator -> next();
    }
}

echo "</pre>";
