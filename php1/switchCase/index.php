<?php

$type = "jogo";

switch ($type) {
  case "Foto":
    echo "Exibindo a foto";
    break;
  case "Video":
    echo "Exibindo o video";
    break;
  case "Texto":
    echo "Exibindo o texto";
    break;
  default:
    echo "Este tipo não pode ser indenficado.";
    break;
}