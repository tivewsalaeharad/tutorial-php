<? $items = array(
    array(
        'icon' => 'fa-code',
        'caption' => 'Массивы',
        'controller' => 'corearray',
        'content' => ['array_slice', 'array_chunk'],
    ),
    array(
        'icon' => 'fa-tree',
        'caption' => 'Классы',
        'controller' => 'coreclass',
        'content' => ['get_class'],
    ),
    array(
        'icon' => 'fa-cog',
        'caption' => 'Информация PHP',
        'controller' => 'corephp',
        'content' => ['phpinfo'],
    ),
    array(
        'icon' => 'fa-retweet',
        'caption' => 'Reflection',
        'controller' => 'corereflection',
        'content' => ['Reflection'],
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
        'icon' => 'fa-quote-right',
        'caption' => 'Строки',
        'controller' => 'corestring',
        'content' => ['explode', 'strpos', 'htmlspecialchars'],
    ),
); ?>
