<?php 
	session_start();

	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
?>
	<h2>Bem vindo ao HOME</h2>
<?php
	$_SESSION['nome'] = $nome;
	if($nome) {
		if(in_array($_SESSION['nome'], $_SESSION)) {	
		echo "Olá, ".strtoupper($nome)." - ";
		}
	}
	else {
		$_SESSION['aviso'] = "O campo está vazio!";
		header('Location: login.php');
		exit;
	}
?>
	<a href="login.php"><?php $_SESSION['nome'] = ''?>Sair da sessão</a>
