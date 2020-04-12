<?php
$string = 'Coronavirus is not dangerous!!!';
$im     = imagecreatefrompng('images/image.png');
$orange = imagecolorallocate($im, 220, 210, 60);
$px     = (imagesx($im) - 7.5 * strlen($string)) / 2;
imagestring($im, 3, $px, 9, $string, $orange);
if (!file_exists('tempimages')) mkdir('tempimages');
imagepng($im, 'tempimages/file.png');
imagedestroy($im);
?>
<img src="../public/tempimages/file.png"/>

