<?php

echo "<pre>";

// используйте этот формат для фильтров с дополнительными параметрами
$options = [
    'options' => [
        'default' => 3, // значение, возвращаемое, если фильтрация завершилась неудачей
        // другие параметры
        'min_range' => 0
    ],
    'flags' => FILTER_FLAG_ALLOW_OCTAL,
];

echo '0755 --> '.filter_var('0755', FILTER_VALIDATE_INT, $options).PHP_EOL;

// для фильтров, который принимает только флаги, вы можете передать их непосредственно
echo 'oops --> '.filter_var('oops', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE).PHP_EOL;

// для фильтров, который принимает только флаги, вы также можете передать их как массив
echo 'oops -->'.filter_var('oops', FILTER_VALIDATE_BOOLEAN, ['flags' => FILTER_NULL_ON_FAILURE]).PHP_EOL;

// callback-функция фильтра валидации
function foo($value)
{
    // Ожидаемый формат: Фамилия, Имена
    if (strpos($value, ", ") === false) return false;
    list($surname, $givennames) = explode(", ", $value, 2);
    $empty = (empty($surname) || empty($givennames));
    $notstrings = (!is_string($surname) || !is_string($givennames));
    return $empty || $notstrings ? false : $value;
}
echo 'Doe, Jane Sue -->'.filter_var('Doe, Jane Sue', FILTER_CALLBACK, ['options' => 'foo']).PHP_EOL;

echo "</pre>";