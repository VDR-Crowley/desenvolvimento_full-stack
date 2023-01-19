<?php
require 'config.php';

use Dao\models\User;

$user = new UserDaoMySQL($pdo);

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($name && $email) {
  if($user->findByEmail($email) === false) {
    $newUser = new User();
    $newUser->setName($name);
    $newUser->setEmail($email);

    $user->add($newUser);

    header("Location: index.php");
    exit();
  } else {
    header("Location: index.php");
    exit();
  }
} else {
  header("Location: add.php");
  exit;
}
