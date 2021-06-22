<?php

class Post {
  public $likes = 0;
  public $deslikes = 0;
  public $commets = [];
  public $author;
}

$post1 = new Post();

$post1->likes = 10;
$post1->deslikes = 60;

if($post1->likes > $post1->deslikes) {
  echo "O seu post foi curtido pela comunidade com ".$post1->likes." likes";
} else {
  echo "O seu post foi odiado pela comunidade com ".$post1->deslikes." deslikes";
}