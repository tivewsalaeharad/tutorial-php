<pre>
$dll = new SplDoublyLinkedList();
$dll->push(1);
$dll->push(2);
$dll->push(3);
$dll->push($dll->top());
$dll->push($dll->bottom());
$dll->unshift(5);
var_dump($dll);


<?
$dll = new SplDoublyLinkedList();
$dll->push(1);
$dll->push(2);
$dll->push(3);
$dll->push($dll->top());
$dll->push($dll->bottom());
$dll->unshift(5);
var_dump($dll);
?>
</pre>
