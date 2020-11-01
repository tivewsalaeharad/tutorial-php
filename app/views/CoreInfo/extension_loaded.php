<?php
echo "Подключён xdebug: ".(extension_loaded('xdebug') ? 'да' : 'нет').'<br>';
echo "Подключён imap: ".(extension_loaded('imap') ? 'да' : 'нет').'<br>';
echo "Подключён apc: ".(extension_loaded('apc') ? 'да' : 'нет').'<br>';
echo "Подключён bbcode: ".(extension_loaded('bbcode') ? 'да' : 'нет').'<br>';
echo "Подключён bcmath: ".(extension_loaded('bcmath') ? 'да' : 'нет').'<br>';
echo "Подключён curl: ".(extension_loaded('curl') ? 'да' : 'нет').'<br>';
echo "Подключён mysqli: ".(extension_loaded('mysqli') ? 'да' : 'нет').'<br>';
echo "Подключён ssh2: ".(extension_loaded('ssh2') ? 'да' : 'нет').'<br>';
echo "Подключён stats: ".(extension_loaded('stats') ? 'да' : 'нет').'<br>';
echo "Подключён pdflib: ".(extension_loaded('pdflib') ? 'да' : 'нет').'<br>';

