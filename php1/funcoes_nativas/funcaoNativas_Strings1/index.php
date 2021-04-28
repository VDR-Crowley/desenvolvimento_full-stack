<?php

$firstName = 'Vando';
$lastName = "Dos Reis";

$dirtyName = "    Vinicius   ";
$cleanName = trim($dirtyName);

echo "Dirty Name: ".$dirtyName."Name Length: ".strlen($dirtyName);
echo "<br>Clean name: ".$cleanName." Name Length: ".strlen($cleanName);


$fullName = "<br><br>".strtoupper($firstName)." ".strtoupper($lastName);

echo $fullName;

$newName = str_replace("Vando", "Vinicius", $firstName);

echo "<br>".$newName;
