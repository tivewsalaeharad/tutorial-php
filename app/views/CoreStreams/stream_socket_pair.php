<?php

$sockets = stream_socket_pair(STREAM_PF_INET, STREAM_SOCK_STREAM, STREAM_IPPROTO_IP);
$pid     = pcntl_fork();

if ($pid == -1) {
    die('не удалось создать процесс');
} else if ($pid) {
    fclose($sockets[0]);
    fwrite($sockets[1], "дочерний PID: $pid\n");
    echo fgets($sockets[1]);
    fclose($sockets[1]);

} else {
    fclose($sockets[1]);
    fwrite($sockets[0], "сообщение от дочернего процесса\n");
    echo fgets($sockets[0]);
    fclose($sockets[0]);
}
