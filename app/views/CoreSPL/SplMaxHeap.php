<pre>
<?php
$h = new SplMaxHeap();

$h->insert(8);
$h->insert(1);
$h->insert(16);
$h->insert(5);
$h->insert(22);
$h->next();

foreach ($h as $elem) {
    $result .= ($result ? ', ' : '') . $elem . ' (' . ($h->isEmpty() ? '-' : '+') . ($h->valid() ? '+' : '-') . ')';
    $h->next();
}
echo $result;
$h->rewind();
echo "\n" . '(' . ($h->isEmpty() ? '-' : '+') . ($h->valid() ? '+' : '-') . ')' . "\n";
foreach ($h as $elem) $result .= ($result ? ', ' : '') . $elem . ' (' . ($h->isEmpty() ? '-' : '+') . ($h->valid() ? '+' : '-') . ')';
echo $result;

?>
</pre>
