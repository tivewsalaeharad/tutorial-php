<?
$my_array = ['US' => 'Washington', 'UK' => 'London', 'Austria' => 'Vienna', 'Russia' => 'Moscow', 'Japan' => 'Tokyo']; 
array_walk($my_array, function($value, $key) { echo "$value is the capital of $key<br>"; });
?>
