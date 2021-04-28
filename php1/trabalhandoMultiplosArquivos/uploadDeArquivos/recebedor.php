<?php
	echo "<pre>";
	print_r($_FILES);
	$permitidos = array('image/jpeg', 'image/jpg', 'image/png');

	if(in_array($_FILES['arquivo']['type'], $permitidos)) {
		$fileName = md5(time().rand(0, 1000)).'.png';
		move_uploaded_file($_FILES['arquivo']['tmp_name'], './arquivos/'.$fileName);
		echo "Arquivo recebido com sucesso!";
	} else {
		echo "Arquivo não pode ser recebido!";
	}
?>
