<pre>
<?
preg_match_all(
    "|href=\"(https://www.imdb.com/search/title\?genres=.*?)\"|" ,
    file_get_contents("https://www.imdb.com/feature/genre/"),
    $matches);
print_r($matches);
?>
</pre>
