<?php
$iterator = new ArrayIterator(array(1, 2, 3));
$cache    = new CachingIterator($iterator, CachingIterator::FULL_CACHE);

echo "<pre>";
$cache->next();
var_dump($cache->getCache());

$cache->next();
var_dump($cache->getCache());

$cache->next();
var_dump($cache->getCache());
echo "</pre>";
