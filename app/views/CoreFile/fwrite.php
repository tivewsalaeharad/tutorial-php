<pre>
$all='Name: '.$_POST['name']."\r\n".'Message: '.$_POST['message']."\r\n";
if (!$handle = fopen($filename, 'a')) {
    echo 'Не могу открыть файл ($filename)';
    exit;
}
if (fwrite($handle, $all) === false) {
    echo 'Не могу произвести запись в файл ($files)';
    exit;
}
</pre>

<form action='/routine/write_file' method='post'>
Введите имя: <input type='text' name='name' />
Сообщение: <input type='text' name='message' />
<input type='submit' value='Ввести' />
</form>
