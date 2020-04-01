<? $items = array(
    array(
        'icon' => 'fa-code',
        'caption' => 'Массивы',
        'controller' => 'corearray',
        'content' => ['array_slice', 'array_chunk', 'arsort', 'asort', 'ksort', 'natsort', 'rsort', 'sort'],
    ),
    array(
        'icon' => 'fa-tree',
        'caption' => 'Классы',
        'controller' => 'coreclass',
        'content' => ['get_class'],
    ),
    array(
        'icon' => 'fa-calendar',
        'caption' => 'Дата и время',
        'controller' => 'coredatetime',
        'content' => ['date_sunrise', 'date_sunset', 'strftime'],
    ),
    array(
        'icon' => 'fa-retweet',
        'caption' => 'Reflection',
        'controller' => 'corereflection',
        'content' => ['Reflection'],
    ),
    array(
        'icon' => 'fa-cog',
        'caption' => 'Информация PHP',
        'controller' => 'corephp',
        'content' => ['phpinfo', 'version_compare'],
    ),
    array(
        'icon' => 'fa-folder-open',
        'caption' => 'Каталоги',
        'controller' => 'corecat',
        'content' => ['getcwd', 'scandir'],
    ),
    array(
        'icon' => 'fa-file',
        'caption' => 'Файлы',
        'controller' => 'corefile',
        'content' => ['realpath', 'dirname'],
    ),
    array(
        'icon' => 'fa-terminal',
        'caption' => 'Запуск программы',
        'controller' => 'coreshell',
        'content' => ['shell_exec'],
    ),
    array(
        'icon' => 'fa-list',
        'caption' => 'Standard PHP Library',
        'controller' => 'corespl',
        'content' => ['spldoublylinkedlist', 'splstack', 'splqueue', 'splmaxheap', 'splminheap', 'splpriorityqueue', 'splfixedarray', 'splobjectstorage', 'arrayobject'],
    ),
    array(
        'icon' => 'fa-quote-right',
        'caption' => 'Строки',
        'controller' => 'corestring',
        'content' => ['explode', 'strpos', 'htmlspecialchars'],
    ),
); ?>
