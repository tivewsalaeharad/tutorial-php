<?php

echo(get_cfg_var('zend.assertions'));
echo '<br>';
echo(ini_get('zend.assertions'));
echo '<br>';
echo (get_current_user());
echo '<br>';
echo "Последнее изменение: " . date ("F d Y H:i:s.", getlastmod());
echo '<br>';
echo "MygID: ".getmygid();
echo '<br>';
echo "INode: ".getmyinode();
echo '<br>';
echo "PID: ".getmypid();
echo '<br>';
echo "UID: ".getmyuid();
echo '<br>';
echo "SAPI: ".php_sapi_name();
echo '<br>';
echo 'OS: '.php_uname();
echo '<br>';
echo 'Temp: '.sys_get_temp_dir();
echo '<br>';
echo 'ZendVersion: '.zend_version();

