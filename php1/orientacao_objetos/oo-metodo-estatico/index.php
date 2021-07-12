<?php

  class Matematica {
    public static string $name = "Vando"; 

    public static function soma($n1, $n2) {
      return $n1 + $n2;
    }
  }
  echo "Soma: ".Matematica::soma(20, 20)."calculo feito por ".Matematica::$name;