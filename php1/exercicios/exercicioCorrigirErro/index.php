<?php 

  //phpinfo();


  $lista = [
    'nome' => 'Vando',
    'idade' => 300,
    'atributos' => [
      'forca' => 55,
      'agilidade' => 20,
      'destreza' => 30
    ],
    'vida' => 1000,
    'mana' => 200
  ];

  echo "NOME: ".$lista['nome'].'<br>';
  echo "FORÇA: ".$lista['atributos']['forca'].'<br>';
  echo "VIDA: ".$lista['vida'];


?>