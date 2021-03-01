<?php 
/*
$numero = 10;

for($i = 1; $i <= $numero; $i++) {
  echo $i * 2;
  echo '<br>';
}*/

$listStudents = [
  "Vando",
  "Vinicius",
  "Viviane",
  "Claudia",
  "Cardoso"
];

echo "<h1>Lista de estudante</h1>";

echo "<ul>";
foreach($listStudents as $listNumber => $student) {
  echo "<li>Aluno ".($listNumber + 1).": ".$student."</li>";
}
echo "</ul>";