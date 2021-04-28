<?php 
	session_start();
	include("./header.php");

	$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$age = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);

	if($name && $email && $age) {

		$tempoExpiracao = time() + (86400 * 30);
		setcookie('name', $name, $tempoExpiracao);

		echo "<br>Name: ".$name;
		echo "<br>E-mail: ".$email;
		echo "<br>Age: ".$age;
	} else {
		$_SESSION['aviso'] = "Os dados preenchidos estão incorretos!";

		header('Location: index.php');
		exit;
	}
?>