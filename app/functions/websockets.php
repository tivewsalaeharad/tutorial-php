<?php

function writeHandshakeHeaders($socket)
{
    $request = socket_read($socket, 5000);
    preg_match('#Sec-WebSocket-Key: (.*)\r\n#', $request, $matches);
    $key = base64_encode(pack(
        'H*',
        sha1($matches[1] . '258EAFA5-E914-47DA-95CA-C5AB0DC85B11')
    ));
    $headers = "HTTP/1.1 101 Switching Protocols\r\n";
    $headers .= "Upgrade: websocket\r\n";
    $headers .= "Connection: Upgrade\r\n";
    $headers .= "Sec-WebSocket-Version: 13\r\n";
    $headers .= "Sec-WebSocket-Accept: $key\r\n\r\n";
    socket_write($socket, $headers, strlen($headers));
}

function wrap($msg)
{
    $length = strlen($msg);

    $bytesFormatted = chr(129);
    if($length <= 125){
        $bytesFormatted .= chr($length);
    } else if($length >= 126 && $length <= 65535) {
        $bytesFormatted .= chr(126);
        $bytesFormatted .= chr(( $length  >> 8 ) & 255);
        $bytesFormatted .= chr(( $length       ) & 255);
    } else {
        $bytesFormatted .= chr(127);
        $bytesFormatted .= chr(( $length >> 56 ) & 255);
        $bytesFormatted .= chr(( $length >> 48 ) & 255);
        $bytesFormatted .= chr(( $length >> 40 ) & 255);
        $bytesFormatted .= chr(( $length >> 32 ) & 255);
        $bytesFormatted .= chr(( $length >> 24 ) & 255);
        $bytesFormatted .= chr(( $length >> 16 ) & 255);
        $bytesFormatted .= chr(( $length >>  8 ) & 255);
        $bytesFormatted .= chr(( $length       ) & 255);
    }

    $bytesFormatted .= $msg;
    return $bytesFormatted;

}

function sendMessage($socket_array, $message)
{
    foreach ($socket_array as $socket) {
        @socket_write($socket, wrap($message));
    }
}

$port = 8090;
//$host = 'localhost';

// Create WebSocket.
$server = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_set_option($server, SOL_SOCKET, SO_REUSEADDR, 1);
socket_bind($server, '127.0.0.1', $port);
socket_listen($server);

$client_socket_array = [$server];

// Send messages into WebSocket in a loop.
while (true) {

    $new_socket_array = $client_socket_array;
    $null_array = [];
    socket_select($new_socket_array, $null_array, $null_array, 0, 10);

    if (in_array($server, $new_socket_array)) {
        $new_socket = socket_accept($server);
        $client_socket_array[] = $new_socket;
        // Send WebSocket handshake headers.
        writeHandshakeHeaders($new_socket);

        socket_getpeername($new_socket, $client_ip_address);
        sendMessage($client_socket_array, "Присоединение: " . $client_ip_address .
            ' [Всего: ' . count($client_socket_array) . ']');

        $new_socket_array_index = array_search($server, $new_socket_array);
        unset($new_socket_array[$new_socket_array_index]);

    }

    foreach ($new_socket_array as $new_socket_array_resource) {

        $socketData = @socket_read($new_socket_array_resource, 1024, PHP_NORMAL_READ);
        if ($socketData === false) {
            socket_getpeername($new_socket_array_resource, $client_ip_address);
            $new_socket_array_index = array_search($new_socket_array_resource, $client_socket_array);
            unset($client_socket_array[$new_socket_array_index]);
            sendMessage($client_socket_array, "Отсоединение: " . $client_ip_address .
                ' [Всего: ' . count($client_socket_array) . ']');
        }

   }

    sleep(1);
    sendMessage($client_socket_array, 'Сейчас: ' . date('d M Y (D) H:i:s'));

}
