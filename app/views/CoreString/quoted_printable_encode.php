<pre>
    <?=quoted_printable_encode('Привет мир')?><br>
    <?=imap_8bit('Привет мир')?><br>
    <?=quoted_printable_encode(convert_uuencode('Hello world'))?><br>
    <?=quoted_printable_encode(base64_encode('Hello world'))?>
</pre>