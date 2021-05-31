<div>Для работы наберите в терминале "php -q app\functions\ws2.php"</div>
<div id="root"></div>
<script>
    var socket = new WebSocket('ws://127.0.0.1:8090');
    socket.onmessage = function(e) {
        document.getElementById('root').innerHTML = e.data;
    };
    socket.onclose = function (e) {
        document.getElementById('root').innerHTML = 'Соединение прервано';
    }
</script>
<pre class='prettyprint' style="padding: 10px;">
<?=htmlspecialchars(file_get_contents('../app/functions/ws2.php'))?>
</pre>
