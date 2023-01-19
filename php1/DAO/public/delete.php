<?php
require 'config.php';

$userDao = new UserDaoMySQL($pdo);

$id = filter_input(INPUT_GET, 'id');

if($id) {
  $userDao->delete($id);  
}

header("Location: index.php");
exit;
