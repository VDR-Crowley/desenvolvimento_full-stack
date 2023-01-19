<?php
require 'config.php';

$list = [];
$sql = $pdo->query("SELECT * FROM user");
if($sql->rowCount() > 0) {
  $list = $sql->fetchAll(PDO::FETCH_ASSOC);
}
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
      <td><?= $user['id'] ?></td>
      <td><?= $user['nome'] ?></td>
      <td><?= $user['email'] ?></td>
      <td>
        <a href="update.php?id=<?= $user['id'] ?>">[ Editar ]</a>
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
      window.location.href = "delete.php?id=<?= $user['id'] ?>";
    }
    return isDelete;
  }
</script>