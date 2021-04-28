<?php 
	require('./header.php');
?>

<form method="GET" action="./recebedor.php">
	<label>
		Name: <br>
		<input type="text" name="name">
	</label>
	<br><br>
	<label>
		Password: <br>
		<input type="email" name="email">
	</label>
	<br><br>

	<label>
		Age: <br>
		<input type="text" name="email">
	</label>

	<br><br>
	<label>
		Password: <br>
		<input type="password" name="password">
	</label>

	<br><br>

	<input type="submit" value="Enviar">
</form>