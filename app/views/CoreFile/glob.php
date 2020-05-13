<pre>
<?php
foreach (glob("../app/views/CoreFile/*file.php") as $filename) {
    echo "$filename размер " . filesize($filename) . "\n";
}
?>
</pre>
