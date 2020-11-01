<pre>
<?=md5('***').PHP_EOL?>
<?=md5('******').PHP_EOL?>
<?=hash('md5', '***').PHP_EOL?>
<?
$ctx = hash_init('md5');
hash_update($ctx, '**');
hash_update($ctx, '*');
$copy_ctx = hash_copy($ctx);
echo hash_final($ctx).PHP_EOL;
hash_update($copy_ctx, '***');
echo hash_final($copy_ctx).PHP_EOL;
?>
<?=hash_hmac('md5', '***', 'secret')?>
</pre>