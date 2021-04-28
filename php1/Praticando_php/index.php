<?php 
	
	$brothers = array("Vando", "Vinicius", "Viviane");

	$nameLargerFive = array_filter($brothers, function($value) {
		if(strlen($value) > 5) {
			return "$value\n";
		}
	});

	echo "<h2>Esses são os nomes com mais de 5 caracteres! </h2>";
	echo "<ul>";
	foreach($nameLargerFive as $name) {
		if(trim($name) != "") {
			$name = strtoupper($name);
			echo "<li>$name</li>";
		}
	}
	echo "</ul>";

?>