<?php

namespace app\Controllers;
use Core\Controller;

class LoginController extends Controller{

    public function index(){

        $this->view('login');
    }

    public function home(){
        $this->view('index');
    }
}