<?php 
	session_start();

	$user = filter_input(INPUT_POST, "user", FILTER_SANITIZE_SPECIAL_CHARS);

	if($user == "professor") {
		$nameFile = md5(time().rand(0, 1000))."txt";
		$texto = "O usuario é um professor e tera 10 dias para devolver o livro";
		$recibo = file_put_contents($nameFile, $texto);
		echo file_get_contents($nameFile);
		echo "<script>alert('recibo criado!'); location.href='index.php'</script>";
	} else if($user == "aluno") {
		$nameFile = md5(time().rand(0, 1000))."txt";
		$texto = "O usuario é um aluno e tera 3 dias para devolver o livro";
		$recibo = file_put_contents($nameFile, $texto);
		echo file_get_contents($nameFile);
		echo "<script>alert('recibo criado!'); location.href='index.php'</script>";
	}
?>