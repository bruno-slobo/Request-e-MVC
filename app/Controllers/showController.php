<?php
namespace App\Controllers;

use Core\Controller;
use Core\Request; 
use App\Models\User;

class ShowController extends Controller {
    
    public function index() {
        $UserModel = new User(); 
        
        $Users = $UserModel-> getAll();
        $content = ['Users' => $Users];

        $this->view('show', $content);
    }
}