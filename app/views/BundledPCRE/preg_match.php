<?php
$examples = [
    ['/o/', 'hello world'],
    ['/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)+$/', 'my@domain.ru'],
    ['/[a-zA-Zа-яА-Я]/', '+7(495)250-47-89'],
    ['/(foo)(bar)(baz)/', 'foobarbaz', 'PREG_OFFSET_CAPTURE'],
    ['/(a)(b)*(c)/', 'ac'],
    ['/(a)(b)*(c)/', 'ac', 'PREG_UNMATCHED_AS_NULL'],
    ['/^def/', 'abcdef', 'PREG_OFFSET_CAPTURE', 3],
    ['/^def/', substr('abcdef',3), 'PREG_OFFSET_CAPTURE'],
];

echo '<table border="1" class="text-center"><tr><td>REGEX</td><td>TEXT</td><td>FLAG</td><td>RESULT</td><td>MATCHES</td><tr>';
foreach ($examples as $example) {
    $regexp = $example[0];
    $text = $example[1];
    $flag = isset($example[2]) ? constant($example[2]) : 0;
    $offset = isset($example[3]) ? $example[3] : 0;
    $flag_text = isset($example[2]) ? $example[2] . ($offset ? '(' . $offset .')' : '') : '';
    $result = preg_match($regexp, $text, $match, $flag);
    echo "<tr><td>$regexp</td><td>$text</td><td>$flag_text</td><td>$result</td><td>";
    foreach ($match as $element) {
        var_export($element);
        echo "<br>";
    }
    echo "</td></tr>";
}
echo "<table>";

