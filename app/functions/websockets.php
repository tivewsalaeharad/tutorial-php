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

function wrap($msg = "")
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

$port = 8090;
//$host = 'localhost';

// Create WebSocket.
$server = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_set_option($server, SOL_SOCKET, SO_REUSEADDR, 1);
socket_bind($server, 0, $port);
socket_listen($server);
$client = socket_accept($server);

$client_socket_array = [$server];

// Send WebSocket handshake headers.
writeHandshakeHeaders($client);

// Send messages into WebSocket in a loop.
while (true) {

    /*
    $new_socket_array = $client_socket_array;
    $null_array =[];
    socket_select($new_socket_array, $null_array, $null_array, 0, 10);

    if (in_array($server, $new_socket_array)) {
        $new_socket = socket_accept($server);

        $client_socket_array[] = $new_socket;

        // Send WebSocket handshake headers.
        writeHandshakeHeaders($new_socket);
        //
        socket_getpeername($new_socket, $client_ip_address);
        //foreach ($client_socket_array as $client_socket) {
            socket_write($client, "Соедниение установлено. IP = ".$client_ip_address);
        //}


        $new_socket_array_index = array_search($server, $new_socket_array);
        unset($new_socket_array[$new_socket_array_index]);

    }

    //foreach ($new_socket_array as $new_socket_array_resource) {
        // Send messages into WebSocket in a loop.
        sleep(1);
        $content = 'Сейчас: ' . date('d M Y (D) H:i:s');
        $response = chr(129) . chr(strlen($content)) . $content;
        //foreach ($client_socket_array as $client_socket) {
            socket_write($client, $response);
        //}
    //}
    */

    sleep(1);
    $content = 'Сейчас: ' . date('d M Y (D) H:i:s');
    socket_write($client, wrap($content));
}
