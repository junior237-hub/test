<?php
$path = dirname(__DIR__);
require_once($path . "/config/config.php");
$config = new config();
$GLOBALS["db"] = $dbConnection = $config->dbConnect();


class User
{

  private $connection;
  public function __construct()
  {
    $this->connection = $GLOBALS["db"];
  }

  public function saveUsers(array $user)
  {
    $sql = "INSERT INTO users(nom, prenom,email,pass)VALUES(?,?,?,?)";
    $res = $this->connection->prepare($sql);
    return $res->execute(array($user['nom'], $user['prenom'], $user['email'], $user['pass']));
  }

  public function getUsers()
  {
    $sql = "SELECT * FROM users";
    $res = $this->connection->prepare($sql);
    $res->execute();
    $user = $res->fetchAll(PDO::FETCH_ASSOC);
    return $user;
  }
}