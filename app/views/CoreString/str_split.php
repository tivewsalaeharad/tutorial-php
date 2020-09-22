<pre>
<?
$parts = str_split(mb_convert_encoding("Какой-то очень длинный текст", 'UTF-16BE', 'UTF-8'), 12);
foreach ($parts as $part) echo mb_convert_encoding($part, 'UTF-8', 'UTF-16BE').PHP_EOL;

?>

</pre>
