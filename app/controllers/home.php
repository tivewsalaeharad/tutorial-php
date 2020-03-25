<?php
class Home extends Controller
{
    public function index($name='default_name')
    {
        $user=$this->model('User');
        $user->name=$name;
        return $this->view('home/index',['name'=>$user->name]);
    }

}
