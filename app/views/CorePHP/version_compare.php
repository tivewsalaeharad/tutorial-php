<pre>
if (version_compare(PHP_VERSION, '7.0.0') &gt;= 0) {
    echo 'Я использую PHP версии не ниже 7.0.0, моя версия: ' . PHP_VERSION . "\n";
}

if (version_compare(PHP_VERSION, '5.3.0') &gt;= 0) {
    echo 'Я использую PHP версии не ниже 5.3.0, моя версия: ' . PHP_VERSION . "\n";
}

if (version_compare(PHP_VERSION, '5.0.0', '&lt;=')) {
    echo 'Я использую PHP 5.0.0 или выше, моя версия: ' . PHP_VERSION . "\n";
}

if (version_compare(PHP_VERSION, '5.0.0', '&lt;')) {
    echo 'Я до сих пор использую PHP 4, моя версия: ' . PHP_VERSION . "\n";
}

<?php
if (version_compare(PHP_VERSION, '7.0.0') >= 0) {
    echo 'Я использую PHP версии не ниже 7.0.0, моя версия: ' . PHP_VERSION . "\n";
}

if (version_compare(PHP_VERSION, '5.3.0') >= 0) {
    echo 'Я использую PHP версии не ниже 5.3.0, моя версия: ' . PHP_VERSION . "\n";
}

if (version_compare(PHP_VERSION, '5.0.0', '>=')) {
    echo 'Я использую PHP 5.0.0 или выше, моя версия: ' . PHP_VERSION . "\n";
}

if (version_compare(PHP_VERSION, '5.0.0', '<')) {
    echo 'Я до сих пор использую PHP 4, моя версия: ' . PHP_VERSION . "\n";
}
?>

</pre>
