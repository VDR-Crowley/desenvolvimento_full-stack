<?php

$people = 
[
	"name" => "Vando dos Reis",
	"age" => 20,
	"company" => "WebSites OFFCOMPUTER",
	"profession" => "Desenvolvedor Web"
];

if(key_exists("age", $people)) {
	echo "<h2>{$people['name']} é maior de idade possuindo {$people['age']} e pode ter uma empresa</h2>";
	echo "<br><strong>Esses são os dados correspondente ao mesmo.</strong><br>";
	echo "<dl>";
		foreach($people as $chave => $dados) {
			echo "<dt>".strtoupper($chave).":</dt>";
			echo "<dd>$dados</dd><br>";
		};
	echo "</dl>";
} else {
	echo "<h2>Lamento mas {$people['name']} não informou a sua idade!</h2>";
}