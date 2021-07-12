<?php

class Post {
  public int $likes = 0;
  public array $comments = [];
  private string $author;

  public function setAuthor($name) {
    $this->author = ucfirst($name);
  }

  public function getAuthor() {
    return $this->author ?? '';
  }
}

$post1 = new Post();
$post1->setAuthor("vando");

$post2 = new Post();
$post2->setAuthor("bi");

echo "POST1: ".$post1->likes." likes - ".$post1->getAuthor()."<br>";
echo "POST2: ".$post2->likes." likes - ".$post2->getAuthor();