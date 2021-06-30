<?php
namespace App\Controllers;

use Core\Controller;
use Core\Request; 
use App\Models\User;

class IndexController extends Controller {
    
    public function index(Request $request){
        if($request->isMethod('get')){
            $this->view('cad');
        } else{
            $userModel = new User;
            $response = $userModel->record($request->post());
            $content = $response ? "Dados armazenasdos com sucesso" : "Falha";

            $this->view('index', ['user' => $request->post(), 'content' => $content]);
        }
    }
}
