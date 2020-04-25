<?
function dog_generator() {
    foreach (['Далматинец', 'Терьер', 'Кромфортлендер', 'Ротвейлер'] as $dog) {
        $input = yield $dog;  
        // перехватываем input от send или используем $dog
        if ($input == -1) return; // останавливаем генератор
    }
}

function &gen_reference() {
    $value = 3;
    while ($value > 0) yield $value;
}

$generator = dog_generator();

foreach ($generator as $dog) { // $dog - это результат вызова yield
    echo $dog.'<br>';
    // мы хотим найти терьера
    if ($dog == 'Терьер') {
        // отправляем входные данные генератору через yield
        $generator->send(-1);
        echo 'Мы нашли терьера, останавливаем просмотр';
    }
}

echo '<br><br>';

/* Обратите внимание, что мы можем изменять $number в цикле, и
 * так как генератор возвращает ссылку, $value
 * в gen_reference() также изменится. */
foreach (gen_reference() as &$number) echo (--$number).'... ';
