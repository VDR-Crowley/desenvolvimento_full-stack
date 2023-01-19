<?php

$pdo = new PDO("mysql:dbname=usuarios;host=localhost", "root", "");
var_dump($pdo);


$sql = $pdo->query('SELECT * FROM user');
$database = $sql->fetchAll( PDO::FETCH_ASSOC );

echo "<pre>";
print_r($database);