<?
function getNumber($str, $pos) {
    do {
        $ch = mb_substr($str, ++$pos, 1);
        $number = is_numeric($ch);
        if ($number) $result .= $ch;
    } while($number);
    return $result;
}

$s = "->11гe+20∆∆A+4µcњil->5•Ћ®†Ѓ p+5f-7Ќ¬f pro+10g+1悦ra->58->44m+1*m+2a喜er!";
$l = mb_strlen($s);

do {
    $c = mb_substr($s, $n, 1);
    switch ($c) {
        case '-':
            if (mb_substr($s, $n+1, 1) == '>') {
                $n = getNumber($s, ++$n);
            } else {
                $n -= getNumber($s, $n);
            }
            break;
        case '+':
            $offset = getNumber($s, $n);
            $n += mb_strlen($offset) + $offset + 1;
            break;
        default:
            $output .= $c;
            echo $c;
            $n++;
    }
} while ($n < $l);

echo $output;
