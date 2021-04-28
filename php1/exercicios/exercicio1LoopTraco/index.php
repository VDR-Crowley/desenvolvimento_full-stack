<?php

$risk = '';

for($row = 1; $row <= 10; $row++) {
  $risk .= '-';
  if($row === 10){
    for($column = 1; $column <= 10; $column++) {
      echo $risk.'<br>';
    }
  }
  //var_dump($risco);
}