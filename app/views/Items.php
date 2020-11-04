<? $items = array(
    /*
    __halt_compiler()
    array()
    die()
    eval()
    exit()
    list()
    array(
        'icon' => 'fa-indent',
        'caption' => 'Встроенные классы',
        'controller' => 'InbuiltClasses',
        'content' => ['Generator'],
    ),
    array(
        'icon' => 'fa-code',
        'caption' => 'Массивы',
        'controller' => 'CoreArray',
        'content' => ['array_chunk', 'array_column', 'array_count_values', 'array_filter', 'array_flip', 'array_keys', 'array_map', 'array_pop', 'array_push', 'array_reverse', 'array_shift', 'array_slice', 'array_sum', 'array_unique', 'array_unshift', 'array_walk', 'array_walk_recursive', 'arsort', 'asort', 'extract', 'ksort', 'natsort', 'rsort', 'shuffle', 'sort'],
    ),
    array(
        'icon' => 'fa-filter',
        'caption' => 'Фильтрация данных',
        'controller' => 'CoreFilter',
        'content' => ['filter_has_var', 'filter_id', 'filter_input', 'filter_list', 'filter_var', 'filter_var_array'],
    ),
    array(
        'icon' => 'fa-tree',
        'caption' => 'Классы',
        'controller' => 'CoreClass',
        'content' => ['get_class', 'get_class_vars'],
    ),
    array(
        'icon' => 'fa-retweet',
        'caption' => 'Reflection',
        'controller' => 'CoreReflection',
        'content' => ['Reflection', 'ReflectionClass', 'ReflectionExtension', 'ReflectionFunction', 'ReflectionMethod', 'ReflectionParameter', 'ReflectionGenerator', 'ReflectionReference'],
    ),
    array(
        'icon' => 'fa-font',
        'caption' => 'Переменные',
        'controller' => 'CoreVar',
        'content' => ['boolval', 'debug_zval_dump', 'empty', 'get_defined_vars', 'isset', 'serialize', 'unset', 'var_export'],
    ),
    array(
        'icon' => 'fa-subscript',
        'caption' => 'CSPRING',
        'controller' => 'CoreCSPRING',
        'content' => ['random_bytes', 'random_int'],
    ),
    array(
        'icon' => 'fa-ellipsis-h',
        'caption' => 'Hash',
        'controller' => 'CoreHash',
        'content' => ['hash_algos', 'hash_hmac_algos', 'hash'],
    ),
    array(
        'icon' => 'fa-asterisk',
        'caption' => 'Пароли',
        'controller' => 'CorePassword',
        'content' => ['password_algos', 'password_hash', 'password_get_info'],
    ),
    array(
        'icon' => 'fa-calendar',
        'caption' => 'Дата и время',
        'controller' => 'CoreDateTime',
        'content' => ['DateTimeImmutable', 'date_sunrise', 'date_sunset', 'date', 'strftime', 'strtotime'],
    ),
    array(
        'icon' => 'fa-bug',
        'caption' => 'Обработка ошибок',
        'controller' => 'CoreError',
        'content' => ['debug_backtrace', 'debug_print_backtrace', 'error_get_last', 'set_exception_handler'],
    ),
    */
    array(
        'icon' => 'fa-arrow-right',
        'caption' => 'Контроль вывода',
        'controller' => 'CoreOutcontrol',
        'content' => ['ob_end_flush', 'ob_get_clean', 'ob_get_flush', 'ob_get_length', 'ob_get_status'],
    ),
    array(
        'icon' => 'fa-cog',
        'caption' => 'Информация PHP',
        'controller' => 'CoreInfo',
        'content' => ['extension_loaded', 'phpinfo', 'version_compare'],
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
        'content' => ['dirname', 'file_exists', 'file_get_contents', 'file', 'filesize', 'filetype', 'fopen', 'fread', 'fwrite', 'glob', 'is_executable', 'is_file', 'is_readable', 'is_uploaded_file', 'is_writable', 'mkdir', 'move_uploaded_file', 'pathinfo', 'readfile', 'realpath', 'rename', 'unlink'],
    ),
    array(
        'icon' => 'fa-terminal',
        'caption' => 'Запуск программы',
        'controller' => 'CoreShell',
        'content' => ['shell_exec'],
    ),
    array(
        'icon' => 'fa-calculator',
        'caption' => 'Math',
        'controller' => 'CoreMath',
        'content' => ['max', 'rand'],
    ),
    array(
        'icon' => 'fa-list',
        'caption' => 'Standard PHP Library',
        'controller' => 'CoreSPL',
        'content' => ['SplDoublyLinkedList', 'SplStack', 'SplQueue', 'SplMaxHeap', 'SplMinHeap', 'SplPriorityQueue', 'SplFixedArray', 'SplObjectStorage', 'ArrayObject', 'spl_autoload_register'],
    ),
    array(
        'icon' => 'fa-quote-right',
        'caption' => 'Строки',
        'controller' => 'CoreString',
        'content' => ['explode', 'htmlentities', 'htmlspecialchars', 'implode', 'md5', 'printf', 'quoted_printable_encode', 'sprintf', 'str_ireplace', 'str_split', 'strlen', 'strpos', 'str_repeat', 'str_replace', 'strrev', 'strtr', 'substr_count', 'trim'],
    ),
    array(
        'icon' => 'fa-calculator',
        'caption' => 'BC Math',
        'controller' => 'BundledBCMath',
        'content' => ['bcmul', 'bcsqrt'],
    ),
    array(
        'icon' => 'fa-code',
        'caption' => 'JSON',
        'controller' => 'BundledJSON',
        'content' => ['json_decode', 'json_encode'],
    ),
    array(
        'icon' => 'fa-align-left',
        'caption' => 'PCRE',
        'controller' => 'BundledPCRE',
        'content' => ['preg_match', 'preg_match_all'],
    ),
    array(
        'icon' => 'fa-image',
        'caption' => 'Изображения',
        'controller' => 'BundledImages',
        'content' => ['imagepng'],
    ),
    array(
        'icon' => 'fa-quote-left',
        'caption' => 'Многобайтовые строки',
        'controller' => 'BundledMultibyte',
        'content' => ['mb_strimwidth', 'mb_substr'],
    ),
    array(
        'icon' => 'fa-server',
        'caption' => 'cURL',
        'controller' => 'ExternalCURL',
        'content' => ['curl_exec'],
    ),
    array(
        'icon' => 'fa-database',
        'caption' => 'MySQLi',
        'controller' => 'ExternalMySQLi',
        'content' => ['mysqli_connect'],
    ),
    array(
        'icon' => 'fa-file',
        'caption' => 'PDF',
        'controller' => 'PECL_PDF',
        'content' => ['PDFlib'],
    )
);

