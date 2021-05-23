<div>Для работы наберите в терминале "php -q app\functions\websockets.php"</div>
<div id="root"></div>
<script>
    var socket = new WebSocket('ws://localhost:8090');
    socket.onmessage = function(e) {
        document.getElementById('root').innerHTML = e.data;
    };
    socket.onclose = function (e) {
        document.getElementById('root').innerHTML = 'Соединение прервано';
    }
</script>
<pre class='prettyprint' style="padding: 10px;">
<?=htmlspecialchars(file_get_contents('../app/functions/websockets.php'))?>
</pre>