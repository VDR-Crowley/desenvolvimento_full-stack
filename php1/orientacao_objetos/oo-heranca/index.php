<?php
class Post {
  private int $id;
  private int $likes = 0;

  protected function setId($i) {
    $this->id = $i;
  }
  public function getId() {
    return $this->id;
  }

  protected function setLikes($like) {
    $this->likes = $like;
  }
  public function getLikes() {
    return $this->likes;
  }
}
// Foto Herda as propriedades de Post
class Foto extends Post {
  private $url;

  public function __construct($id) {
    $this->setId($id);
    $this->setLikes(50);
  }

  public function setUrl($u) {
    $this->url = $u;
  }
  public function getUrl() {
    return $this->url;
  }
}
class Texto extends Post {
  private string $texto;

  public function __construct($id) {
    $this->setId($id);
  }

  public function setTexto($t) {
    $stop = 100;
    if(strlen($t) <= $stop) {
      $this->texto = $t;
    } else {
      $this->texto = "O limite de caracteres foi excedida";
    }
  }
  public function getTexto() {
    return $this->texto;
  }
}

$foto = new Foto(20);
$foto->setUrl("www.rede.com.br/perfil@{$foto->getId()}");

echo "<h1>Foto da Postagem</h1>";
echo "URL da imagem: ".$foto->getUrl();
echo "<br>Likes: ".$foto->getLikes();

$texto = new Texto(20);
$texto->setTexto("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been");

echo "<h1>Texto da postagem</h1>";
echo $texto->getTexto();