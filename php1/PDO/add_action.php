<?php
require 'config.php';

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($name && $email) {
  // deixa o sistema fulneravel
  // $pdo->query("INSERT INTO user (nome, email) VALUES ('$name', '$email')");
  $sql = $pdo->prepare("SELECT * FROM user WHERE email = :email");
  $sql->bindValue(':email', $email);
  $sql->execute();

  if($sql->rowCount() == 0) {
    // modo correto PDO state
    $sql = $pdo->prepare("INSERT INTO user (nome, email) VALUES (:name, :email)");
    $sql->bindValue(':name', $name);
    $sql->bindParam(':email', $email);
  
    $email = 'vandotestando@gmail.com';
  
    $sql->execute();
  }

  header("Location: index.php");
  exit();

  // $sql->bindParam(':email', $email); // faz uma associação com a variavel,

} else {
  header("Location: add.php");
  exit;
}
