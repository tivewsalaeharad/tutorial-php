<pre>

$filename = "..\\app\\files\\write.txt";
if (!$handle = fopen($filename, "rb")) {
    echo "Не удаётся открыть файл";
} else {
    $contents = fread($handle, filesize($filename));
    echo $contents;
    fclose($handle);
}

<?
$filename = "..\\app\\files\\write.txt";
if (!$handle = fopen($filename, "rb")) {
    echo "Не удаётся открыть файл";
} else {
    $contents = fread($handle, filesize($filename));
    echo $contents;
    fclose($handle);
}
?>
</pre>
