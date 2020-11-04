<?php
class Controller
{
    public $testVar; 

    public function model($model) {
        require_once('../app/models/'.$model.'.php');
        return new $model();
    }

    public function view($view, $data=[]) {
        extract($data);
        ob_start();
        require_once('../app/views/'.$view.'.php');
        $body = ob_get_clean();
        return $this->layout($body, $view, $data);
    }

    public function testParent() {
        echo "Testing parent class with given number: $this->testVar<br>";
    }

    public function unknownMethod($method) {
        return $this->view('error/unknownMethod', ['method' => $method, 'class' => get_class($this)]);
    }

    public function __call(string $name , array $arguments) {
        return $this->unknownMethod($name);
    }

    private function layout($body, $view, $data = []) {
        ob_start("ob_gzhandler");
        $code = get_called_class() == 'ErrorController' ? $data[2] : '../app/views/'.$view.'.php' ;
        require('../app/views/Layout.php');
        $return = ob_get_clean();
        return $return;
    }

}
