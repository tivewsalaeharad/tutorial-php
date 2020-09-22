<pre>
<?php
$s = new SplObjectStorage();
$o1 = new StdClass;
$o2 = new StdClass;
$o3 = new StdClass;
$s->attach($o1);
$s->attach($o2);
var_dump($s->contains($o1));
var_dump($s->contains($o2));
var_dump($s->contains($o3));
$s->detach($o2);
var_dump($s->contains($o1));
var_dump($s->contains($o2));
var_dump($s->contains($o3));
?>

<hr>

$s = new SplObjectStorage();
$o1 = new StdClass;
$o2 = new StdClass;
$o3 = new StdClass;
$s[$o1] = "данные для объекта 1";
$s[$o2] = array(1,2,3);
if (isset($s[$o2])) echo(implode(', ', $s[$o2]));


<?php
$s = new SplObjectStorage();
$o1 = new StdClass;
$o2 = new StdClass;
$o3 = new StdClass;
$s[$o1] = "данные для объекта 1";
$s[$o2] = array(1,2,3);
if (isset($s[$o2])) echo(implode(', ', $s[$o2]));
?>
</pre>
