<?php 

  $pessoas = [
    [ "name" => "Vando Dos Reis", "sexo" => "M", "nota" => 6.5 ],
    [ "name" => "Vinicius Dos Reis", "sexo" => "M", "nota" => 4.5 ],
    [ "name" => "Viviane Dos Reis", "sexo" => "F", "nota" => 5.8 ],
    [ "name" => "Claudia Cristina Pereira", "sexo" => "F", "nota" => 9.5 ],
    [ "name" => "Jose Cardoso Dos Reis", "sexo" => "M", "nota" => 8.2 ],
    [ "name" => "Creusa Andrade", "sexo" => "F", "nota" => 3.5 ]
  ];

  // total de homens
  function contar_m($subtotal, $item) {
    if($item['sexo'] === "M") {
      $subtotal += 1;
    }
    return $subtotal;
  }

  $total_m = array_reduce($pessoas, "contar_m");

  // total da soma das notas dos homens
  function soma_m($subtotal, $item) {
    if($item['sexo'] === "M") {
      $subtotal += $item['nota'];
    }
    return $subtotal;
  } 

  $soma_notas = array_reduce($pessoas, "soma_m");

  // media de notas dos homens
  $media_m = $soma_notas / $total_m;

  echo "Total de alunos do sexo masculino: {$total_m}<br>";
  echo "Total de notas dos alunos do sexo masculino: {$soma_notas}<br>";
  echo "Media total dos homens: {$media_m}";

?>