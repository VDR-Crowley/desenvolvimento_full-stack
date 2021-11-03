<form method="post">
  <input type="text" name="excluir">
<button type="submit">Excluir</button>
</form>

<?php
require_once("./form.php");
require("./class_arquivos.php");

$file = new File();
$nameFile = $_POST["name-arquivo"];
$texto = $_POST["file"];
$fileTotal = $file->createFile($nameFile, $texto);

$file->readFile($nameFile);

$delete = $_POST["excluir"];
if($delete) {
  $file->deleteFile($delete);
}

?>
