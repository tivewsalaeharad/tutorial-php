<pre>
<?php
$array = new SplFixedArray(5);
$array[1] = 2;
$array[4] = "foo";
var_dump($array[0]);
var_dump($array[1]);
var_dump($array["4"]);
$array->setSize(10);
$array[9] = "asdf";
$array->setSize(2);
try {
    var_dump($array["non-numeric"]);
} catch(RuntimeException $re) {
    echo "RuntimeException: ".$re->getMessage()."\n";
}
try {
    var_dump($array[-1]);
} catch(RuntimeException $re) {
    echo "RuntimeException: ".$re->getMessage()."\n";
}
try {
    var_dump($array[5]);
} catch(RuntimeException $re) {
    echo "RuntimeException: ".$re->getMessage()."\n";
}
?>
</pre>
