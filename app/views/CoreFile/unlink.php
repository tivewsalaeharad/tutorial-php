<?
if (isset($_POST['unlink'])) {
    unlink('../app/files/'.$_POST['filename']);
}
$files = array_slice(scandir('../app/files'), 2);
?>

<pre>

if (isset($_POST['unlink'])) {
    unlink('../app/files/'.$_POST['filename']);
}
$files = array_slice(scandir('../app/files'), 2);


</pre>
<table>
    <?foreach ($files as $file):?>
        <tr>
            <td><?=$file?></td>
            <td>
                <form action="" method="POST">
                    <input type="hidden" name="filename" value="<?=$file?>">
                    <input type="submit" name="unlink" value="Удалить">
                </form>
            </td>
        </tr>
    <?endforeach;?>
</table>
