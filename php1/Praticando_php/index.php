<?php 
	/*
		Ler vários números e informar quantos
		números entre 100 e 200 foram digitados. Se
		o valor 0 for lido encerrar a execução
	*/
?>

<form method="POST">
	<fieldset>
		<legend>Informe um numero que esteja entre 100 e 200</legend>
		<label>
			<input type="number" name="number">
		</label>
	</fieldset>	
	<br><br>

	<input type="submit" value="Enviar">
</form>

<?php
	
	$number = filter_input(INPUT_POST, "number", FILTER_VALIDATE_INT);
	$numberValido = 0;

	while($number != 0) {
		if($number > 100 && $number < 200) {
			$numberValido += $number;
			echo "Numero valido: $numberValido<br>";
			$number = 0;
		} else {
			echo "Numero $number não esta em 100 e 300 <br>";
			$number = 0;
		}
	}
	

?>