<?
echo "Метод {$data['method']} класса {$data['class']} не найден";
echo '<br>';
echo getcwd();
echo '<br>';
echo realpath('..');
echo '<br>';
echo realpath('../app');
echo '<br>';
