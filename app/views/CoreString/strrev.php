<pre>
mb_convert_encoding(strrev(mb_convert_encoding("Он дивен, палиндром - и ни морд, ни лап не видно!", 'UTF-16BE', 'UTF-8')), 'UTF-8', 'UTF-16LE') = 

<?=mb_convert_encoding(strrev(mb_convert_encoding("Он дивен, палиндром - и ни морд, ни лап не видно!", 'UTF-16BE', 'UTF-8')), 'UTF-8', 'UTF-16LE')?>



Будьте внимательны при использовании этой функции с кириллическим текстом


</pre>
