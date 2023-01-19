<?php
require 'config.php';
require 'autoload.php';

$user = new UserDaoMySQL($pdo);
$list = $userDao->findAll();
?>
<a href="add.php">Add</a>

<table border="1", width="100%">
  <tr>
    <th>ID</th>
    <th>NOME</th>
    <th>E-EMAIL</th>
    <th>AÇÕES</th>
  </tr>

  <?php foreach($list as $user): ?>
    <tr>
      <td><?= $user->getId() ?></td>
      <td><?= $user->getName() ?></td>
      <td><?= $user->getEmail() ?></td>
      <td>
        <a href="update.php?id=<?= $userDao->getId() ?>">[ Editar ]</a>
        <a id="delete">[ Excluir ]</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>

<script type="text/javascript">
  document.querySelector('#delete').addEventListener('click', handleDelete);

  function handleDelete(e) {
    e.preventDefault();
    const isDelete = confirm('Tem certeza que deseja exluir?');
    if(isDelete) {
      window.location.href = "delete.php?id=<?= $userDao->getId() ?>";
    }
    return isDelete;
  }
</script>