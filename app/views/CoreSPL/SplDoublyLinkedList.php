<pre>
<?
$dll = new SplDoublyLinkedList();
$dll->push(1);
$dll->push(2);
$dll->push(3);

print_r(serialize($dll));
echo ("\n\n");
$str = $dll->serialize();
print_r($str);
echo ("\n\n");

$dll->push($dll->top());
$dll->push($dll->bottom());
$dll->unshift(5);
var_dump($dll);
$dll->unserialize($str);
var_dump($dll);
?>
</pre>
