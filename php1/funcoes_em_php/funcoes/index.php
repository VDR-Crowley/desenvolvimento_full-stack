<?php

function newTabuada($cont, $multiplicacion, $numberTabuada) {
  for($i = $cont; $i <= $multiplicacion; $i++) {
    echo "{$numberTabuada} X {$i} = ".$numberTabuada * $i."<br>";
  }
}
newTabuada(1, 10, 2);


function somar( int $n1 = 0, int $n2 = 0) {
  $soma = $n1 + $n2;
  return $soma;
}

function subtrair(int $n1 = 0, int $n2 = 0) {
  $sub = $n1 + $n2;
  return $sub;
}

function fracao($n1, $n2, $n3, $n4) {
  $fracao = ($n1 * $n2); $fracao2 = ($n3 * $n4);
  return $fracao."/".$fracao2 ;
}

$mulOfFracoes = fracao(2, 20, 6, 2);
echo $mulOfFracoes."<br>";

$somaOfNumbers = somar(50, 50);
echo "Soma: ".$somaOfNumbers;