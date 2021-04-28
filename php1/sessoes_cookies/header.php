<h1>Formulario Basic PHP</h1>
<?php
if(isset($_COOKIE['name'])) {
	$name = $_COOKIE['name'];
	echo "<H2>User: {$name}</H2>";
}
?>
<hr>