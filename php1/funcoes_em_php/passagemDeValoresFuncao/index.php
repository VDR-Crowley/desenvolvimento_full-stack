<?php
// Passagem de valor por parametro.
function somar($n1, $n2) {
  return $n1 + $n2;
}
$x = 2;
$y = 3;
echo "Total: ".somar($x, $y)."<br>";

//Passagem de valor por referencia.
function twoSoma($n1, $n2, &$total) {
  $total = $n1 + $n2;
  return $total;
}
$numberOne = 5;
$numberTwo = 5;
$totalSoma = 0;

echo "Total: ".twoSoma($numberOne, $numberTwo, $totalSoma);
echo "<br>Value of variable totalSoma: ".$totalSoma;
echo "<br>";
$lista = [5, 8, 6, 3, 10];
sort($lista); // ex de função nativa com passagem de valor por referencia.
print_r($lista);