<?php

class Home extends Controller
{
    public function index()
    {
        $this->view('home/index');        
    }

    public function register()
    {
        if(isset($_POST['register']))
        {            
            $user = $this->model('users');
            $user->register();
            header("Location: " . BASEURL . "/home/index");
            exit;
        }
    }
}