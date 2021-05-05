<?php 
	$people = 
	[
		"name" => "Vando dos Reis",
		"age" => 20,
		"sexo" => "Masculino",
		"company" => "DevOfWeb",
		"profession" => "Desenvolvedor Web"
	];

	/*
		retorna um array novo apenas com as chaves do people
		segundo argumento é o valor da chave que deve ser retornada
	*/
	$keys = array_keys($people, "DevOfWeb");
	print_r($keys);

	echo "<br><br>";

	/* retorna um array novo apenas com os valores do people */
	$values = array_values($people);
	print_r($values);
?>