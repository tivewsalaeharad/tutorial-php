<pre class='prettyprint' style="padding: 10px;">
<?=htmlspecialchars(file_get_contents('../app/functions/filters.php'))?>
</pre>
<button
    onclick="
        fetch('/routine/filters', { method: 'post', body: 'test=1', headers: {'Content-Type': 'application/x-www-form-urlencoded'}})
        .then(function(response) { return response.text(); })
        .then(function(data) { document.getElementById('output').innerHTML = data; });"
>Получить данные</button>
<br>
<br>
<pre id="output"></pre>