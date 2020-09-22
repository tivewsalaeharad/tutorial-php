<pre>
<?php
$q = new SplQueue();

$q[] = 1;
$q[] = 2;
$q[] = 3;
$q[] = $q->key();

foreach ($q as $elem) $result .= (strlen($result) ? ', ' : '').$elem;
echo $result;
?>
</pre>
