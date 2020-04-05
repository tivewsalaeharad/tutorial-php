<?php

class App
{
    protected $controller = "home";
    protected $method = "index";
    protected $params = [];

    public function __construct() {
        set_exception_handler(['App', 'handleException']);
        $url = $this->parseUrl();
        $controller = array_shift($url);
        $this->controller = $controller ?: $this->controller;
        $method = array_shift($url);
        $this->method = $method ?: $this->method;
        $this->params = $url ? array_values($url) : [];

        if (file_exists('../app/controllers/'.$this->controller.'.php')) {
            require_once('../app/controllers/'.$this->controller.'.php');
            $this->controller = new $this->controller($this->controller);
        } else {
            require_once('../app/controllers/default.php');
            $this->controller = new DefaultController($this->controller);
        }
        echo call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl()
    {
        if (isset($_GET['url']))
        {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }

    public static function handleException (Throwable $e) {
        require_once('../app/controllers/error.php');
        $controller = new ErrorController();
        echo $controller->error500($e);
    }
}
