<?php
echo "Подключён xdebug: ".(extension_loaded('xdebug') ? 'да' : 'нет').'<br>';
echo "Подключён apc: ".(extension_loaded('apc') ? 'да' : 'нет').'<br>';
echo "Подключён bbcode: ".(extension_loaded('bbcode') ? 'да' : 'нет').'<br>';
echo "Подключён ssh2: ".(extension_loaded('ssh2') ? 'да' : 'нет').'<br>';
echo "Подключён stats: ".(extension_loaded('stats') ? 'да' : 'нет').'<br>';

