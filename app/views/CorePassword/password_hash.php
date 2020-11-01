<pre>
<?=crypt('***')?>

<?=crypt('***', '')?>

<?=crypt('***', 'rm')?>

<?=password_hash('***', PASSWORD_DEFAULT);?>

<?=password_hash('***', PASSWORD_BCRYPT);?>

<?=password_hash('***', PASSWORD_ARGON2I);?>

<?=password_hash('***', PASSWORD_ARGON2ID);?>
</pre>