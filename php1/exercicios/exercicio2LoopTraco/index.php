<?php

$risk = '';

for($row = 1; $row <= 20; $row++) {
  echo "<br>";
  if($row === 1) {
    for($i = 1; $i <= 20; $i++) {
      $risk .= '-';
      echo $risk.'<br>';
    }
   
  }

  //var_dump($risco);
}
