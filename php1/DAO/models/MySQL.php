<?php

namespace Dao\models;
use PDO;

class MySQL
{
  protected $pdo;

  function __construct(string $db_name, string $db_host, string $db_user)
  {
    $this->pdo = new PDO("mysql:dbname=$db_name;host=$db_host", $db_user);
  }

  function delete($id, string $table = 'users') {
    $sql = $this->pdo->prepare("DELETE FROM $table WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute(); 
  }

  function getAll(string $table, string $item) {
    return $this->pdo->query("SELECT $item FROM $table");
  }
}