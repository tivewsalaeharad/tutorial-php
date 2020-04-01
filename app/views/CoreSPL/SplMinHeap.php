<pre>

$h = new SplMinHeap();

$h->insert(8);
$h->insert(1);
$h->insert(16);
$h->insert(5);
$h->insert(22);

foreach ($h as $elem) $result .= ($result ? ', ' : '').$elem;
echo $result;


<?php

$h = new SplMinHeap();

$h->insert(8);
$h->insert(1);
$h->insert(16);
$h->insert(5);
$h->insert(22);

foreach ($h as $elem) $result .= ($result ? ', ' : '').$elem;
echo $result;

?>
</pre>
