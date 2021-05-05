<?php 
	$array = 
	[
		"name" => "Vando dos Reis",
		"age" => 20,
		"color" => "Preto",
		"profession" => "Web Developer"
	];
?>

<table border="5">
		<?php foreach($array as $key => $value): ?>
			<tr>
				<th><?php echo $key ?></th>
				<td><?php echo $value ?></td>
			</tr>
		<?php endforeach; ?>

</table>
