<pre>
class PQtest extends SplPriorityQueue
{
    public function compare($priority1, $priority2)
    {
        if ($priority1 === $priority2) return 0;
        return $priority1 &gt; $priority2 ? -1 : 1;
    }
}

$objPQ = new PQtest();
$objPQ-&gt;insert('A',3);
$objPQ-&gt;insert('B',6);
$objPQ-&gt;insert('C',1);
$objPQ-&gt;insert('D',2);
echo "COUNT-&gt;".$objPQ-&gt;count()."&lt;BR&gt;";
$objPQ-&gt;setExtractFlags(PQtest::EXTR_BOTH);
$objPQ-&gt;top();

while($objPQ-&gt;valid()){
    print_r($objPQ-&gt;current());
    echo "&lt;BR&gt;";
    $objPQ-&gt;next();
}
</pre>
<?php

class PQtest extends SplPriorityQueue
{
    public function compare($priority1, $priority2)
    {
        if ($priority1 === $priority2) return 0;
        return $priority1 < $priority2 ? -1 : 1;
    }
}

$objPQ = new PQtest();
$objPQ->insert('A',3);
$objPQ->insert('B',6);
$objPQ->insert('C',1);
$objPQ->insert('D',2);
echo "COUNT->".$objPQ->count()."<BR>";
$objPQ->setExtractFlags(PQtest::EXTR_BOTH);
$objPQ->top();

while($objPQ->valid()){
    print_r($objPQ->current());
    echo "<BR>";
    $objPQ->next();
}

?>
