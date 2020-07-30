<?php
class Home extends Controller
{

    public function testParent() {
        $this->testVar = rand(0, 10);
        parent::testParent();
        echo "Testing descendant class";
    }

    public function index($name='default_name')
    {
        $user=$this->model('User');
        $user->name=$name;
        return $this->view('home/index',['name'=>$user->name]);
    }

}
