<?php 
	/*
		A biblioteca de uma universidade deseja fazer
		um algoritmo que leia o nome do livro que
		será emprestado, o tipo de usuário (professor
		ou aluno) e possa imprimir um recibo
		conforme mostrado a seguir. Considerar que
		o professor tem 10 dias para devolver o livro
		o aluno somente 3 dias
	*/

	session_start();

?>

<form method="POST" action="recebedor.php">
	<fieldset>
		<legend>Informe o nome de quem pegar o livro emprestado</legend>
		<label>Qual o usuario:
		<input type="text" name="user">
	</label>
	</fieldset>	
	<br>
	<input type="submit" value="Enviar">
</form>