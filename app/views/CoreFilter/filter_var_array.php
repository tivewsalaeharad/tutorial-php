<?php
$my_array = ['<b>Hello</b>', ['<i>world</i>', '<script>console.log("Hello!")</script>']];
print_r($my_array);
echo "<br>";
$my_array = filter_var_array($my_array, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
print_r($my_array);
