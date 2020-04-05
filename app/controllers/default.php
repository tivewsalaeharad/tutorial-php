<?php
class DefaultController extends Controller
{

    private $folder;

    public function __construct($folder) {
        $this->folder = $folder;
    }

    public function __call(string $name , array $arguments) {
        if (file_exists('../app/views/'.$this->folder.'/'.$name.'.php')) {
            return $this->view($this->folder.'/'.$name);
        } else {
            return $this->unknownMethod($name.' [../app/views/'.$this->folder.'/'.$name.'.php]');
        }
    }

}
