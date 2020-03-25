<? $items = array(
    array(
        'icon' => 'glyphicon-cloud',
        'caption' => 'Массивы',
        'controller' => 'corearray',
        'content' => ['array_slice', 'array_chunk'],
    ),
    array(
        'icon' => 'glyphicon-tree-deciduous',
        'caption' => 'Классы',
        'controller' => 'coreclass',
        'content' => ['get_class'],
    ),
    array(
        'icon' => 'glyphicon-folder-open',
        'caption' => 'Каталоги',
        'controller' => 'corecat',
        'content' => ['getcwd', 'scandir'],
    ),
    array(
        'icon' => 'glyphicon-file',
        'caption' => 'Файлы',
        'controller' => 'corefile',
        'content' => ['realpath', 'dirname'],
    ),
    array(
        'icon' => 'glyphicon-flash',
        'caption' => 'Запуск программы',
        'controller' => 'coreshell',
        'content' => ['shell_exec'],
    ),
    array(
        'icon' => 'glyphicon-inbox',
        'caption' => 'Строки',
        'controller' => 'corestring',
        'content' => ['explode', 'strpos', 'htmlspecialchars'],
    ),
); ?>
