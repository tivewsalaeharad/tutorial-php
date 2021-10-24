<?php
$examples = [
    ['/o/', 'hello world'],
    ['/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)+$/', 'my@domain.ru'],
    ['|<[^>]+>(.*)</[^>]+>|U',  '<b>пример: </b><div align=left>это тест</div>', 'PREG_PATTERN_ORDER'],
    ['/(?J)(?<match>foo)|(?<match>bar)/', 'foo bar', 'PREG_PATTERN_ORDER'],
    ['|<[^>]+>(.*)</[^>]+>|U', '<b>пример: </b><div align=\"left\">это тест</div>', 'PREG_SET_ORDER'],
    ['/(foo)(bar)(baz)/', 'foobarbaz', 'PREG_OFFSET_CAPTURE'],
    ['/./', 'hello'],
    ['/\w/', 'hello world'],
    ['/\w*/', 'AV is largest Analytics community of India'],
    ['/\w+/', 'AV is largest Analytics community of India'],
    ['/^\w+/', 'AV is largest Analytics community of India'],
    ['/\w+$/', 'AV is largest Analytics community of India'],
    ['/\b\w./', 'AV is largest Analytics community of India'],
    ['/@\w+.(\w+)/', 'abc.test@gmail.com, xyz@test.in, test.first@analyticsvidhya.com, first.test@rest.biz'],
    ['/\d{2}-\d{2}-\d{4}/', 'Amit 34-3456 12-05-2007, XYZ 56-4532 11-11-2011, ABC 67-8945 12-01-2009'],
    ['/\d{2}-\d{2}-(\d{4})/', 'Amit 34-3456 12-05-2007, XYZ 56-4532 11-11-2011, ABC 67-8945 12-01-2009'],
    ['/\b[aeiou]\w+/i', 'AV is largest Analytics community of India'],
    ['/\b[^aeiou ]\w+/i', 'AV is largest Analytics community of India'],
    ['/\d([A-Z][A-Za-z]+)([A-Z][A-Za-z]+)/', '1NoahEmma2LiamOlivia3MasonSophia4JacobIsabella5WilliamAva6EthanMia7MichaelEmily'],
    //['//', ''],
];

echo '<table border="1" class="text-center"><tr><td>REGEX</td><td>TEXT</td><td>FLAG</td><td>RESULT</td><td>MATCHES</td><tr>';
foreach ($examples as $example) {
    $regexp = $example[0];
    $text = $example[1];
    $flag = isset($example[2]) ? constant($example[2]) : 0;
    $offset = isset($example[3]) ? $example[3] : 0;
    $flag_text = isset($example[2]) ? $example[2] . ($offset ? '(' . $offset . ')' : '') : '';
    $result = preg_match_all($regexp, $text, $match, $flag);
    echo "<tr><td>$regexp</td><td>$text</td><td>$flag_text</td><td>$result</td><td>";
    foreach ($match as $key => $element) {
        echo "<strong><u>$key:</u></strong> ";
        foreach ($element as $atom) echo var_export($atom) . '; ';
        echo "<br>";
    }
    echo "</td></tr>";
}
echo "<table>";
