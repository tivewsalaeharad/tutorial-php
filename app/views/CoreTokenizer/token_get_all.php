<?php
$tokens = token_get_all('<?php echo "Hello world!"; ?>');

echo "<table border='1'>";

foreach ($tokens as $token) {
    echo "<tr align='center'>";
    if (is_array($token)) {
        echo "<td>{$token[2]}</td><td>" . token_name($token[0]) . "</td><td>{$token[1]}</td>";
    } else {
        echo "<td>-</td><td>-</td><td>$token</td>";
    }
    echo "</tr>";
}
echo "</<table>";
