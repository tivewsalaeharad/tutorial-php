<?php
class Controller
{
    public function model($model) {
        require_once('../app/models/'.$model.'.php');
        return new $model();
    }

    public function view($view, $data=[]) {
        extract($data);
        ob_start();
        require_once('../app/views/'.$view.'.php');
        $body = ob_get_clean();
        ob_end_clean();
        return $this->layout($body);
    }

    public function unknownMethod($method) {
        return $this->view('error/unknownMethod', ['method' => $method, 'class' => get_class($this)]);
    }

    public function __call(string $name , array $arguments) {
        return $this->unknownMethod($name);
    }

    private function layout($body) {
        ob_start();
        require('../app/views/Layout.php');
        $return = ob_get_clean();
        return $return;
    }

}
