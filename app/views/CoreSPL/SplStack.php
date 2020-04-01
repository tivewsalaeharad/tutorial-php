<pre>

$q = new SplStack();

$q[] = 1;
$q[] = 2;
$q[] = 3;
$q[] = $q->key();

foreach ($q as $elem) $result .= (strlen($result) ? ', ' : '').$elem;
echo $result;


<?php
$q = new SplStack();

$q[] = 1;
$q[] = 2;
$q[] = 3;
$q[] = $q->key();

foreach ($q as $elem) $result .= (strlen($result) ? ', ' : '').$elem;
echo $result;
?>
</pre>
