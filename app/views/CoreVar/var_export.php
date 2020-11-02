<?php
class A
{
    public $var1;
    public $var2;

    public static function __set_state($an_array)
    {
        echo $an_array['var1'].$an_array['var2'];
    }
}

$a = new A;
$a->var1 = 5;
$a->var2 = 'foo';

echo '<pre>';
eval(var_export($a, true).';');
echo '</pre>';

