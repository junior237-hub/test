<?php
class inscription_class
{

  private $nom;
  private $prenom;
  private $email;
  private $pass;

  private $connection;


  public function __construct($Nom, $Prenom, $Email, $Pass)
  {
    $this->nom = $Nom;
    $this->prenom = $Prenom;
    $this->email = $Email;
    $this->pass = $Pass;

    $this->connection = new PDO("mysql:host=localhost;dbname=membre", "root", "");

  }

  public function inscription()
  {
    $sql = "INSERT INTO user(nom, prenom,email,pass)VALUES(?,?,?,?)";
    $res = $this->connection->prepare($sql);
    $res->execute(array($this->nom  , $this->prenom ,$this->email,$this->pass));
    header("location:index.php");
  }

  public function modifier($user_id, $data){
    $sql="UPDATE user SET ?,?,?,? WHERE $user_id = ?";
    $res = $this->connection->prepare($sql);
    $res->execute(array($this->nom  , $this->prenom ,$this->email,$this->pass));
  }

  public function lister(){

    $sql="SELECT * FROM user";
    $res=$this->connection->prepare($sql);
    $res->execute();
    $user=$res->fetchAll(PDO::FETCH_ASSOC);
    return $user;

   

  }

  public function supprimer($user_id){
    $sql ="DELETE FROM user WHERE id_user=$user_id";
    $res = $this->connection->prepare($sql);
    $res->execute(array($user_id));
  }

}
