<?php
//fichiequi gère les redirections

if (isset($_POST["inscription"])) {

  //check for invalid data
  foreach ($_POST as $attr => $data) {
    if (empty($data) && $attr != "inscription") {
      echo "configure you own error management system";
      //redirect the user back
      header("location: " . $_SERVER['HTTP_REFERER']);
      break;
    }
  }

  require_once("./inscription_class.php");
  $pass = sha1($_POST["pass"]);
  $nom = htmlspecialchars($_POST["nom"]);
  $prenom = htmlspecialchars($_POST["prenom"]);
  $email = htmlspecialchars($_POST["email"]);

  $controller = new inscription_class($nom, $prenom, $email, $pass);
  $controller->inscription();
 
}

//afficher




