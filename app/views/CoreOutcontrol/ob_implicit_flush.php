<?php
ob_implicit_flush();
echo "<br>";
echo "<br>";
echo "<h3 style='padding-left: 350px'>Please waiting for 10 seconds...</h3>";
echo "<p style='padding-left: 400px'>";
for ($n=0; $n<10; $n++) {
    echo " $n ";
    ob_flush(); //Вызывается, если запущен пользовательский буффер, т.к. flush() не имеет доступа к содержимому последнего
    //flush(); //Не требуется, т.к. включен режим неявного сброса
    sleep(1);
}
echo "<h3 style='padding-left: 350px'>Thx!</h3>";
//ob_flush(); // Что и требовалось доказать
echo "</p>";
