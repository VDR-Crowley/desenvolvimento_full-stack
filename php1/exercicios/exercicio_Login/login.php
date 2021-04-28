<?php
	session_start(); 
?>

<h2>Entre com seu nome</h2>

<form method="POST" action="./index.php">
	<label>
		<input type="text" name="nome" placeholder="Nome" />
	</label>

	<input type="submit" value="Entrar">
</form>

<?php 
	if(isset($_SESSION['aviso'])) {
		echo $_SESSION['aviso'];
		$_SESSION['aviso'] = '';
	}
?>