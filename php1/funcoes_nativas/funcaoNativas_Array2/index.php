<?php
$array = [12, 52, 89, 63, 10];

if(in_array(30, $array)) {
	echo "Existe!";
} else {
	echo "Not Existente!";
}
echo "<br>";

print_r($array);

echo "<br>";

asort($array);

echo "<br>";

print_r($array);

echo "<br>";

array_shift($array);

echo "<br>";

print_r($array);
