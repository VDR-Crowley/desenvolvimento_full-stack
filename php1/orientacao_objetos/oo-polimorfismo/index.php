<?php
interface Forma {
  public function getTipo();
  public function getArea();
} 
class Quadrado implements Forma{
  private string $tipo = "Quadrado";
  private int $largura;
  private int $altura;
  public function __construct($x, $y) {
    $this->largura = $x;
    $this->altura = $y;
  }
  public function getTipo() {
    return $this->tipo;
  }
  public function getArea() {
    return $this->largura * $this->altura;
  }
}
class Circle implements Forma {
  private string $tipo = "Circle";
  private $raio;
  public function __construct($r) {
    $this->raio = $r;
  }
  public function getTipo() {
    return $this->tipo;
  }

  public function getArea() {
    return pi() * ($this->raio * $this->raio);
  }
}

$quadrado = new Quadrado(5, 5);
$circle = new Circle(7);

$objetos = [
  $quadrado,
  $circle
];

foreach($objetos as $objeto) {
  $tipo = $objeto->getTipo();
  $area = $objeto->getArea();
  echo "Area: ".$tipo." : ".$area."<br>";
}