<?php
// echo date('d/m/Y H:i:s')."<br>";

function returnDay($data) {
	$day = date('w', strtotime($data));
	$days = ["Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sabado", "Domingo"];
	return $days[$day - 1];
}

$date = "2021-04-10";
$time = strtotime($date);

echo date("Y / m / N", $time)."<br>".returnDay($date);