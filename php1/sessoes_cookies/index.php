<?php 
	session_start();
	include("./header.php");

	if($_SESSION['aviso']) {
		echo $_SESSION['aviso'];
		$_SESSION['aviso'] = '';
	}
?>

<style>
	label {display: block; margin-top: 1rem;}
	input[type=submit] {width:220px;margin-top: 1rem;}
</style>


<form method="POST" action="recebedor.php">
	<a href="apagar.php">Apagar</a>
	<label>
		<input type="text" name="name" placeholder="Name">
	</label>

	<label>
		<input type="text" name="email" placeholder="E-mail">
	</label>

	<label>
		<input type="text" name="idade" placeholder="Age">
	</label>

	<input type="submit" value="Enviar">
</form>