<?php
class config
{
   private $db = "mysql:host=localhost;dbname=membre";
   private $user = "root";
   private $pass = "";


   public function dbConnect()
   {
      try {
         $pdo = new PDO($this->db, $this->user, $this->pass);
         return $pdo;
      } catch (\PDOException $th) {
         return false;
      }
   }

}