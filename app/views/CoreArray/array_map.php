<pre>
$my_array = ['a' =&gt; '1', 'b' =&gt; '2', 'c' =&gt; '3', 'd' =&gt; '4', 'e' =&gt; '5']; 
array_map(function($n) { return $n**3; }, $my_array) = 


<?
    $my_array = ['a' => '1', 'b' => '2', 'c' => '3', 'd' => '4', 'e' => '5']; 
    print_r(array_map(function($n) { return $n**3; }, $my_array));
?>
</pre>

