<?php 
require 'config.php';

$userDao = new UserDaoMySQL($pdo);

  $user = false;
  $id = filter_input(INPUT_GET, 'id');
  if($id) {
    $user = $userDao->findById($id);
  }

  if($user === false) {
    header("Location: index.php");
    exit;
  }
?>

<h1>Editar um Usúario</h1>
<form method="POST" action="update_action.php">
  <input type="hidden" name="id" value="<?=$user->getId()?>" />;?>" />

  <label>
    Nome: <br />
    <input type="text" name="name" value="<?=$user->getName();?>" />
  </label>
  
  <br />

  <label>
    E-mail: <br />
    <input type="email" name="email" value="<?=$user->getEmail();?>" />
  </label>

    <br />
    <br />

    <input type="submit" value="Salvar" />
</form>
