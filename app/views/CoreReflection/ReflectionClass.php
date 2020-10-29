<pre>
<?
$rc = new ReflectionClass('DateTime');
Reflection::export($rc);
echo PHP_EOL;
var_dump($rc->getExtension());
echo PHP_EOL;
echo $rc->getExtensionName();
?>
</pre>
