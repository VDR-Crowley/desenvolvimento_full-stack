<?php

class Post {
  public int $id;
  public int $likes = 0;
  public array $comments = [];
  public string $author;
  public function __construct( $postId, $qtLikes, $authorPost) {
    if($postId > 0){
      $this->id = $postId;
      // simulando uma consulta de banco de dados
      $this->likes = $qtLikes;
      $this->author = $authorPost;
    } else {
      echo "<p style='color:red;'>Esse POST não existe em  nosso banco de dados.<p>";
    }
  }
  public function upLikes() {
    $this->likes++;
  }
}
$post1 = new Post( 1, 28, "Vando Dos Reis" );
$post2 = new Post( 0, 14, "Vinicius");
echo "Post tem <strong>".$post1->likes." likes</strong>, postado por <em>".$post1->author;