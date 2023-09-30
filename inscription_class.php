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
    include_once('class/connexion.php');
    $pdo = new connexion();
    $pdo->connection();
    $res = $pdo->prepare($sql);
    $res->execute(array($nom, $prenom, $email, $pass));

    header("lacation:index.php");
  }


}