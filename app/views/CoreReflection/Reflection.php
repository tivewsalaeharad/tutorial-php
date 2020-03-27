<pre>

$rm_conroller_model = new ReflectionMethod('Controller', 'model');
Reflection::export($rm_conroller_model);

<?
$rm_conroller_model = new ReflectionMethod('Controller', 'model');
Reflection::export($rm_conroller_model);
?>


$modifiers = $rm_conroller_model->getModifiers();
$modifiers =

<?
$rm_conroller_model = new ReflectionMethod('Controller', 'model');
$modifiers = $rm_conroller_model->getModifiers();
echo $modifiers;
?>



Reflection::getModifierNames($modifiers) =

<?=implode(', ', Reflection::getModifierNames($modifiers))?>

</pre>
