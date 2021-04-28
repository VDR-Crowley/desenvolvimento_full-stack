<?php 
	require('index.php');

	$nome = trim(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));
	$lista = file_get_contents('lista.txt');

	if($nome) {
		$lista .= "$nome\n";
		file_put_contents("lista.txt", $lista);

	}
		
	$listas = explode("\n", $lista);

	echo "<ul>";
		foreach($listas as $item) {
			if(trim($item) != "") {
				echo "<li>$item</li>";
			}
		}
	echo "</ul>";
	
	
?>