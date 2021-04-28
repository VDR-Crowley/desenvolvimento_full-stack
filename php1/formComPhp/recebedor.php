<?php
$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$passWord = filter_input(INPUT_POST, "password");

if($name && $email) {
	echo "<h2>Dados recebidos!</h2>";
	echo "Name: ".$name;
	echo "<br>E-mail: ".$email;
	echo "<br><br>";

	var_dump(filter_var('bob@example.com', FILTER_VALIDATE_EMAIL));

} else {
	header("Location: index.php");
	exit;
}

