<?php 

  class Post {
    // typed properties
    public int $likes = 0;
    public array $comments = [];
    public string $author;

    public function upLikes() {
      $this->likes++
      ;
    }
  }

  $post = new Post();

  echo "Post: ".$post->likes."<br>";
  $post->upLikes();
  echo "Post: ".$post->likes;

?>