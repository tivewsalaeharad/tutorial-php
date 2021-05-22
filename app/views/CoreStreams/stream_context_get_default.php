<?php

$default_opts = array(
    'http'=>array(
        'method'=>"GET",
        'header'=>"Accept-language: en\r\n" .
            "Cookie: foo=bar",
        'proxy'=>"tcp://10.54.1.39:8000"
    )
);

$alternate_opts = array(
    'http'=>array(
        'method'=>"POST",
        'header'=>"Content-type: application/x-www-form-urlencoded\r\n" .
            "Content-length: " . strlen("baz=bomb"),
        'content'=>"baz=bomb"
    )
);

$default = stream_context_get_default($default_opts);
$alternate = stream_context_create($alternate_opts);

var_dump($default);

/* Отправляет обычный GET-запрос на прокси-сервер 10.54.1.39
 * Для www.example.com используются опции контекста, указанные в $default_opts
 */
//readfile('http://www.example.com');

/* Отправляет POST-запрос напрямую к www.example.com
 * Используемые опции контекста определены в $alternate_opts
 */
//readfile('http://www.example.com', false, $alternate);
