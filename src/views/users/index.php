<?php
require "../../controllers/UserController.php";
$userController = new userController();
$users = $userController->getAllUsers();
?>

<html>

<head>
  <title>list des users</title>
</head>

<body>
  <h3>tous les utilisateurs</h3>
  <ul>
    <?php foreach ($users as $user): ?>
      <li>
        <?= $user["nom"] ?>
      </li>
    <?php endforeach; ?>
  </ul>
</body>

</html>