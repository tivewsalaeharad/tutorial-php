<?
if (isset($_POST['rename'])) {
    if (!file_exists('..\\app\\trash')) mkdir('..\\app\\trash');
    rename('..\\app\\files\\'.$_POST['filename'], '..\\app\\trash\\'.$_POST['filename']);
}
$files = array_slice(scandir('..\\app\\files'), 2);
?>

<pre>

if (isset($_POST['rename'])) {
    if (!file_exists('..\\app\\trash')) mkdir('..\\app\\trash');
    rename('..\\app\\files\\'.$_POST['filename'], '..\\app\\trash\\'.$_POST['filename']);
}
$files = array_slice(scandir('..\\app\\files'), 2);

</pre>
<table>
    <?foreach ($files as $file):?>
        <tr>
            <td><?=$file?></td>
            <td>
                <form action="" method="POST">
                    <input type="hidden" name="filename" value="<?=$file?>">
                    <input type="submit" name="rename" value="Переместить">
                </form>
            </td>
        </tr>
    <?endforeach;?>
</table>
