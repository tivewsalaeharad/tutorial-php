<pre>
$my_array = ['US' =&gt; 'Washington', 'UK' =&gt; 'London', 'Austria' =&gt; 'Vienna', 'Russia' =&gt; 'Moscow', 'Japan' =&gt; 'Tokyo']; 
array_walk($my_array, function($value, $key) { echo "$value is the capital of $key&lt;br&gt; });


<?
$my_array = ['US' => 'Washington', 'UK' => 'London', 'Austria' => 'Vienna', 'Russia' => 'Moscow', 'Japan' => 'Tokyo']; 
array_walk($my_array, function($value, $key) { echo "$value is the capital of $key<br>"; });
?>
</pre>

