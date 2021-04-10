<?php
$ait_id = new ArrayIterator(array('c1001', 'c1002', 'c1003'));
$ait_name = new ArrayIterator(array('apple', 'orange', 'banana'));
$ait_units = new ArrayIterator(array(756, 996, 2345));

$mit = new MultipleIterator(MultipleIterator::MIT_KEYS_ASSOC);
$mit->attachIterator($ait_id, "ID");
$mit->attachIterator($ait_name, "NAME");
$mit->attachIterator($ait_units, "UNITS");

echo $mit->countIterators() . "\n"; //3

if ($mit->containsIterator($ait_id)) { //true
    echo "ait_id iterator attached \n";
}

foreach ($mit as $fruit) {
    echo "<pre>";
    print_r($fruit);
    echo "</pre>";
}
