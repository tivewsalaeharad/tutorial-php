<?php
    $array = [
        'не объявлено' => $x,
        'null' => null,
        'false' => false,
        '0' => 0,
        '0.0' => 0.0,
        "''" => '',
        '[]' => [],
        "'0'" => '0',
        "'php'" => 'php',
        "'true'" => 'true',
        "'false'" => 'false',
        "'1'" => '1',
        "'-1'" => '-1',
        '[1, 2, 3]' => [1, 2, 3],
        'true' => true,
        '1' => 1,
        '42' => 42,
        '-1' => -1,
        '4.2' => 4.2,
        "DateTime" => new DateTime()
    ];
?>
<style>
    .true { background-color: green; font-weight: bold; color: darkblue; }
    .false { background-color: darkred; font-weight: bold; color: yellow; }
    td{text-align: center; padding-left: 5px; padding-right: 5px; font-size: x-small; }
</style>
<table border="1" class="text-center">
    <tr>
        <td>is_countable($x)</td>
        <td>is_iterable($x)</td>
        <td>is_scalar($x)</td>
        <td>gettype($x)</td>
        <td>strval($x)</td>
        <td>var_export($x)</td>
        <td>$x</td>
        <td>boolval($x)</td>
        <td>$x == true</td>
        <td>empty($x)</td>
        <td>!$x</td>
        <td>$x == null</td>
        <td>$x == ""</td>
        <td>$x == 0</td>
        <td>$x == []</td>
        <td>is_null($x)</td>
        <td>$x === null</td>
        <td>isset($x)</td>
        <td>$x !== null</td>
    </tr>
    <?php foreach ($array as $text => $element) {
        $is_countable = is_countable($element) ? 'true' : 'false';
        $is_iterable = is_iterable($element) ? 'true' : 'false';
        $is_scalar = is_scalar($element) ? 'true' : 'false';
        $boolval = boolval($element) ? 'true' : 'false';
        $eq_true = $element ? 'true' : 'false';
        $empty = empty($element) ? 'true' : 'false';
        $eq_false = !$element ? 'true' : 'false';
        $eq_null = $element == null ? 'true' : 'false';
        $eq_empty_str = $element == '' ? 'true' : 'false';
        $eq_zero = $element == 0 ? 'true' : 'false';
        $eq_empty_array = $element == [] ? 'true' : 'false';
        $is_null = is_null($element) ? 'true' : 'false';
        $strictly_null = $element === null ? 'true' : 'false';
        $isset = isset($element) ? 'true' : 'false';
        $strictly_not_null = $element !== null ? 'true' : 'false';
        ?>
    <tr>
        <td class="<?=$is_countable?>"><?=$is_countable?></td>
        <td class="<?=$is_iterable?>"><?=$is_iterable?></td>
        <td class="<?=$is_scalar?>"><?=$is_scalar?></td>
        <td><?=gettype($element)?></td>
        <td><?=is_object($element) ? '<strong style="color: red;">ERROR</strong>' : strval($element)?></td>
        <td><?=var_export($element)?></td>
        <td><?=$text?></td>
        <td class="<?=$boolval?>"><?=$boolval?></td>
        <td class="<?=$eq_true?>"><?=$eq_true?></td>
        <td class="<?=$empty?>"><?=$empty?></td>
        <td class="<?=$eq_false?>"><?=$eq_false?></td>
        <td class="<?=$eq_null?>"><?=$eq_null?></td>
        <td class="<?=$eq_empty_str?>"><?=$eq_empty_str?></td>
        <td class="<?=$eq_zero?>"><?=$eq_zero?></td>
        <td class="<?=$eq_empty_array?>"><?=$eq_empty_array?></td>
        <td class="<?=$is_null?>"><?=$is_null?></td>
        <td class="<?=$strictly_null?>"><?=$strictly_null?></td>
        <td class="<?=$isset?>"><?=$isset?></td>
        <td class="<?=$strictly_not_null?>"><?=$strictly_not_null?></td>
    </tr>
    <?php }?>
</table>
