<?php
class inscription_class
{

  private $nom;
  private $prenom;
  private $email;
  private $pass;

  public function __construct($Nom, $Prenom, $Email, $Pass)
  {
    $this->nom = $Nom;
    $this->prenom = $Prenom;
    $this->email = $Email;
    $this->pass = $Pass;
  }

  public function inscription()
  {

    $sql = "INSERT INTO user(nom, prenom,email,pass)VALUES(?,?,?,?)";

    
    require_once("class/connexion.php");
    $pdo = new connexion();
    $con= $pdo->connection();
    $res = $con->prepare($sql);
    $res->execute(array($this->nom  , $this->prenom ,$this->email,$this->pass));
    header("location:index.php");
  }

  public function lister(){
    
    $sql="SELECT * FROM user";
    require_once("class/connexion.php");
    $pdo = new connexion();
    $con= $pdo->connection();
    $res=$con->prepare($sql);
    $res->execute();

   

  }

  public function supprimer($user_id){

    $sql ="DELETE FROM user WHERE id_user=$user_id";
    require_once("class/connexion.php");
    $pdo = new connexion();
    $con= $pdo->connection();
    $res = $con->prepare($sql);
    $res->execute(array($user_id));
  }
}
//  $obj=new inscription_class();
//  $obj->supprimer($user_id);
//  var_dump($user_id);