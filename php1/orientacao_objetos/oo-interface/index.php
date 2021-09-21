<?php
interface Database {
  public function listarProduto(); 
  public function adicionarProduto(); 
  public function alterarProduto(); 
  public function removerProduto(); 
}
class MysqlDB implements Database {
  private int $produto = 0;
  public function listarProduto() {
    return "<br>Produto ".$this->produto;
  }
  public function adicionarProduto() {
    $this->produto++;
    echo "<br>Adicionando com MySQL ".$this->produto;
  }
  public function alterarProduto() {}
  public function removerProduto() {
    $this->produto--;
    echo "<br>Produto removido";
  }
}
$db = new MysqlDB();
$db->adicionarProduto();
$db->adicionarProduto();
echo $db->listarProduto();
$db->removerProduto();
echo $db->listarProduto();