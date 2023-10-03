<?php

class UserController
{

  private $userModel;

  public function __construct()
  {
    $path = dirname(__DIR__);
    require $path . "/models/User.php";
    $this->userModel = new User();
  }

  public function store(array $user)
  {
    if ($this->userModel->saveUsers($user)) {
      echo "GOOD, user saved";
    } else {
      echo "fuck";
    }
  }
  public function getAllUsers()
  {
    return $users = $this->userModel->getUsers();
  }
}