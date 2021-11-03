<?php
class File
{
  private $file;
  public function readFile($file) 
  {
    echo file_get_contents($file);
  }
  public function createFile($file, $fileDate) 
  {
    echo file_put_contents($file, $fileDate);
  }
  public function deleteFile($file)
  {
    if($file) {
      unlink($file);
      echo "Arquivo excluido com sucesso"; 
    } else {
      echo "Arquivo não pode ser excluido";   
    }
  }
}
?>