<?php 

namespace App\Models;
use Core\Database;

class User { 
    private $table = "user";

    public function getAll() {
        $db = Database::getInstance(); 
        return $db->getList($this->table, '*'); 
    }

    public function record($data = null){ 
        $db = Database::getInstance();
        
        if($data != null && !empty($data)){ 
            if(isset($data['senha']) && filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data = [ 
                    'email' => filter_var($data['email'], FILTER_VALIDATE_EMAIL), 
                    'senha' => password_hash($data['senha'], PASSWORD_BCRYPT, ["cost" => 10]),
                ]; 
                return $db->insert($this->table, $data);
            }
        }
        return false;
    }
}