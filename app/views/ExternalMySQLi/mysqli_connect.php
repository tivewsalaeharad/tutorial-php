<?php
$link = mysqli_connect("dev.alef.im", "calvin_book", "yfa7-iR0z-rZ11v", "calvin_book");

echo "<pre>";

if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    echo "</pre>";
    exit;
}

echo "Соединение с MySQL установлено!" . PHP_EOL;
echo "Информация о сервере: " . mysqli_get_host_info($link) . PHP_EOL;
echo PHP_EOL;

$query = <<<SQL
SELECT * FROM `users`
SQL;

$result = mysqli_query($link, $query);
print_r(mysqli_fetch_all($result, MYSQLI_ASSOC));

echo "</pre>";

mysqli_close($link);

