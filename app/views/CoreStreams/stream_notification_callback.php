<?php

function stream_notification_callback($notification_code, $severity, $message, $message_code, $bytes_transferred, $bytes_max) {

    switch($notification_code) {
        case STREAM_NOTIFY_RESOLVE:
        case STREAM_NOTIFY_AUTH_REQUIRED:
        case STREAM_NOTIFY_COMPLETED:
        case STREAM_NOTIFY_FAILURE:
        case STREAM_NOTIFY_AUTH_RESULT:
            var_dump($notification_code, $severity, $message, $message_code, $bytes_transferred, $bytes_max);
            /* Игнорируем */
            break;

        case STREAM_NOTIFY_REDIRECTED:
            echo "Перенаправлены на: ", $message;
            break;

        case STREAM_NOTIFY_CONNECT:
            echo "Подсоединились...";
            break;

        case STREAM_NOTIFY_FILE_SIZE_IS:
            echo "Получили размер файла: ", $bytes_max;
            break;

        case STREAM_NOTIFY_MIME_TYPE_IS:
            echo "Получили mime-тип файла: ", $message;
            break;

        case STREAM_NOTIFY_PROGRESS:
            echo "Пошёл прогресс, пока загружено ", $bytes_transferred, " байт";
            break;
    }
    echo "\n";
}

$ctx = stream_context_create();
stream_context_set_params($ctx, array("notification" => "stream_notification_callback"));

echo "<pre>";
file_get_contents("http://php.net/contact", false, $ctx);
echo "</pre>";
