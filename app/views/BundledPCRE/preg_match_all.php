<?php
echo "<pre>";
preg_match_all("|<[^>]+>(.*)</[^>]+>|U", "<b>пример: </b><div align=left>это тест</div>", $out, PREG_PATTERN_ORDER);
echo $out[0][0] . ", " . $out[0][1] . "\n";
echo $out[1][0] . ", " . $out[1][1] . "\n";
preg_match_all('/(?J)(?<match>foo)|(?<match>bar)/', 'foo bar', $matches, PREG_PATTERN_ORDER);
print_r($matches['match']);
preg_match_all("|<[^>]+>(.*)</[^>]+>|U", "<b>пример: </b><div align=\"left\">это тест</div>", $out, PREG_SET_ORDER);
echo $out[0][0] . ", " . $out[0][1] . "\n";
echo $out[1][0] . ", " . $out[1][1] . "\n";
preg_match_all('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);
print_r($matches);
echo "</pre>";
