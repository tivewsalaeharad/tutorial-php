<?php

$s1 = "tcp://www.example.com:80";
$s2 = "tcp://127.0.0.1:8090";
//https://habr.com/ru/post/43637/

$fp = stream_socket_client($s2, $errno, $errstr, 30,
    STREAM_CLIENT_ASYNC_CONNECT | STREAM_CLIENT_CONNECT);

if (!$fp) {
    echo "$errstr ($errno)<br />\n";
} else {

    $start = hrtime(true);

    echo "<br>";
    echo "<br>";
    echo "<h3 style='padding-left: 350px'>Please waiting for 10 seconds...</h3>";

    fwrite($fp, "GET / HTTP/1.1\r\nHost: 127.0.0.1\r\nAccept: */*\r\n\r\n");
    echo "<p style='padding-left: 400px'>";
    while ((hrtime(true) - $start) / 1000000000 < 10) {
        echo stream_socket_recvfrom($fp, 1024);
        ob_flush();
        flush();
    }
    echo "</p>";
    echo "<h3 style='padding-left: 350px'>Thx, ".stream_socket_get_name($fp, false)."!</h3>";
    stream_socket_shutdown($fp, STREAM_SHUT_RDWR);
}
