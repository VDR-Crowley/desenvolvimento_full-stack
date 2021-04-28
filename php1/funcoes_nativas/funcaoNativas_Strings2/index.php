<?php
$fullName = "Vando dos reis";

$string = strpos($fullName, "os");
echo "Total de caracteres na string: ".strlen($fullName);

if(!!$string) {
	echo "<br>Achou essa palavra na posição: ".$string;
} else {
	echo "<br>Essa palavra não foi achada!";
}

echo "<br>Todas as primeiras letras em upper: ".ucwords($fullName)."<br>";

$words = explode(" ", $fullName);
print_r($words);

$salary = 1800.90;

echo "<br>R$ ".number_format($salary, "2", ",", ".");


