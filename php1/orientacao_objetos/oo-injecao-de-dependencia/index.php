<?php
interface MontagemBasica {
  public function somar($x, $y);
}
class Basico1 implements MontagemBasica {
  public function somar($x, $y) {
    return $x + $y;
  }
}
class Basico2 implements MontagemBasica { 
  public function somar($x, $y) {
    $res = $x;
    for($i = 0; $i < $y; $i++) {
      $res++;
    }
    return $res;
  }
}

class Matematica {
  private $basico;
  public function __construct(MontagemBasica $b) {
    $this->basico = $b; // b é a class de montagem basica
  }
  public function somar($x, $y) {
    return $this->basico->somar($x, $y);
  }
}

$basico = new basico1();
$mat = new Matematica($basico);
echo $mat->somar(10, 15);

/*
Outra forma de injeção de dependência
$mat = new Matematica(new basico1());
echo $mat->somar(10, 15);
*/