<?php
function dividir($number) {
  $metade = $number / 2;
  echo $metade."<br>";

  if(round($metade) > 0) {
    dividir($metade);
  }
}
$numero = 100;
dividir($numero);