<?php

  class Matematica {
    public static function soma($n1, $n2) {
      return $n1 + $n2;
    }
  }
  echo "Soma: ".Matematica::soma(20, 20);