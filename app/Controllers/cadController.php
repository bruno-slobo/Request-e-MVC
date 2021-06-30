<?php
namespace App\Controllers;

use Core\Controller;

class CadController extends Controller {
    
    public function index() {
        $this->view('cad');
    }
}