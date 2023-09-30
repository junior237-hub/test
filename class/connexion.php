<?php
class connexion{
   private $db="mysql:host=localhost;dbname=membre";
   private $user="root";
   private $pass="";


 public function connection(){
    try {
        $pdo =new PDO($this->db,$this->user,$this->pass);
       } catch (\PDOException $th) {
        echo "error de connexion".$th->getMessage();
       }
 }
   
}

