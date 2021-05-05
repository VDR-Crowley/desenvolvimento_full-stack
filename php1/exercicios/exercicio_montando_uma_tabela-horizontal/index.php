<?php 
$array = 
	[
		"name" => "Vando dos Reis",
		"age" => 20,
		"color" => "Preto",
		"profession" => "Web Developer"
	];

	$chaves = array_keys($array);
	$valores = array_values($array);
?>

<table border="2">
	
	<tr>
		<?php foreach($chaves as $chave): ?>
			<th> <?php echo $chave?> </th>
		<?php endforeach;?>
	</tr>

	<tr>
		<?php foreach($valores as $valor): ?>
			<td> <?php echo $valor?> </td>
		<?php endforeach;?>
	</tr>

</table>