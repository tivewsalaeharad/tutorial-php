<pre class='prettyprint' style="padding: 10px;">
<?=htmlspecialchars(file_get_contents('../app/functions/write_file.php'))?>
</pre>

<form action='/routine/write_file' method='post'>
Введите имя: <input type='text' name='name' />
Сообщение: <input type='text' name='message' />
<input type='submit' value='Ввести' />
</form>
