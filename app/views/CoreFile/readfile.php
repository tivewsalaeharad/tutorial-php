<h1>Пример с выводом файла:</h1>
<pre>
readfile('../app/files/file.txt');
</pre>
<p><?readfile('../app/files/file.txt');?></p>
<h1>Пример с загрузкой файла:</h1>
<p>На отдельной странице:</p>
<pre>
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.basename($file_name).'"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: '.filesize($file_name));
readfile($file_name);
</pre>
<p><a href="/routine/upload_txt"> Для загрузки - перейти на эту страницу </a></p>
