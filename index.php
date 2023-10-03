<?php
//fichier qui gère les redirections
if (isset($_REQUEST["action"])) {
  switch ($_REQUEST["action"]) {
    case 'user':
      require_once("src/controllers/UserController.php");
      $userController = new UserController();

      if (isset($_REQUEST["register"])) {
        $user = [
          "nom" => $_REQUEST["nom"],
          "pass" => $_REQUEST["pass"],
          "email" => $_REQUEST["email"],
          "prenom" => $_REQUEST["prenom"],
        ];
        $userController->store($user);
      }
      break;

    default:
      /*** redirect to error page */
      break;
  }
} else {
  header("location: src/view/home.php");
}