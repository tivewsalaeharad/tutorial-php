<? $items = array(
    /*
    __halt_compiler()
    array()
    die()
    empty()
    eval()
    exit()
    isset()
    list()
    unset()
    */
    array(
        'icon' => 'fa-code',
        'caption' => 'Массивы',
        'controller' => 'CoreArray',
        'content' => ['array_chunk', 'array_count_values', 'array_flip', 'array_keys', 'array_pop', 'array_push', 'array_reverse', 'array_shift', 'array_slice', 'array_sum', 'array_unique', 'array_unshift', 'arsort', 'asort', 'extract', 'ksort', 'natsort', 'rsort', 'shuffle', 'sort'],
    ),
    array(
        'icon' => 'fa-tree',
        'caption' => 'Классы',
        'controller' => 'CoreClass',
        'content' => ['get_class'],
    ),
    array(
        'icon' => 'fa-calendar',
        'caption' => 'Дата и время',
        'controller' => 'CoreDateTime',
        'content' => ['date_sunrise', 'date_sunset', 'strftime'],
    ),
    array(
        'icon' => 'fa-retweet',
        'caption' => 'Reflection',
        'controller' => 'CoreReflection',
        'content' => ['Reflection'],
    ),
    array(
        'icon' => 'fa-bug',
        'caption' => 'Обработка ошибок',
        'controller' => 'CoreError',
        'content' => ['set_exception_handler'],
    ),
    array(
        'icon' => 'fa-cog',
        'caption' => 'Информация PHP',
        'controller' => 'CorePHP',
        'content' => ['phpinfo', 'version_compare'],
    ),
    array(
        'icon' => 'fa-folder-open',
        'caption' => 'Каталоги',
        'controller' => 'CoreCat',
        'content' => ['getcwd', 'scandir'],
    ),
    array(
        'icon' => 'fa-file',
        'caption' => 'Файлы',
        'controller' => 'CoreFile',
        'content' => ['dirname', 'file_exists', 'filesize', 'filetype', 'fopen', 'fread', 'fwrite', 'is_executable', 'is_file', 'is_readable', 'is_uploaded_file', 'is_writable', 'mkdir', 'move_uploaded_file', 'pathinfo', 'readfile', 'realpath', 'rename', 'unlink'],
    ),
    array(
        'icon' => 'fa-calculator',
        'caption' => 'Math',
        'controller' => 'CoreMath',
        'content' => ['max', 'rand'],
    ),
    array(
        'icon' => 'fa-terminal',
        'caption' => 'Запуск программы',
        'controller' => 'CoreShell',
        'content' => ['shell_exec'],
    ),
    array(
        'icon' => 'fa-list',
        'caption' => 'Standard PHP Library',
        'controller' => 'CoreSPL',
        'content' => ['spldoublylinkedlist', 'splstack', 'splqueue', 'splmaxheap', 'splminheap', 'splpriorityqueue', 'splfixedarray', 'splobjectstorage', 'arrayobject'],
    ),
    array(
        'icon' => 'fa-quote-right',
        'caption' => 'Строки',
        'controller' => 'CoreString',
        'content' => ['explode', 'htmlentities', 'htmlspecialchars', 'implode', 'md5', 'printf', 'sprintf', 'str_ireplace', 'str_split', 'strlen', 'strpos', 'str_repeat', 'str_replace', 'strrev', 'trim'],
    ),
); ?>
