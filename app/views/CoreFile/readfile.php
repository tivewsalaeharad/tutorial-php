<h1>Пример с выводом файла:</h1>
<p><?readfile('../app/files/file.txt');?></p>
<h1>Пример с загрузкой файла:</h1>
<pre class='prettyprint' style="padding: 10px;">
<?=htmlspecialchars(file_get_contents('../app/functions/upload_txt.php'))?>
</pre>
<p><a href="/routine/upload_txt"> Для загрузки - перейти на эту страницу </a></p>
