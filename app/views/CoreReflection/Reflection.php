<pre>
<?
$rm_conroller_model = new ReflectionMethod('Controller', 'model');
Reflection::export($rm_conroller_model);
$modifiers = $rm_conroller_model->getModifiers();
echo $modifiers;
echo '<br>';
echo implode(', ', Reflection::getModifierNames($modifiers));
?>
</pre>
