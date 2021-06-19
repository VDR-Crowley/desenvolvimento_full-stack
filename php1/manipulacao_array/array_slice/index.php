<?php 

	$letter = ["A", "B", "C", "D", "E", "F"];

	$returnNewArray = array_slice($letter, 0, 2);

	print_r($returnNewArray);
	echo "<br>Letras: ".implode(", ",$returnNewArray); 

?>
