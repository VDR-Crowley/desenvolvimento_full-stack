<?php
class Calculadora {
  private float $number = 0;
  
  public function add($n) {
    $this->number += $n;
  }
  public function sub($n) {
    $this->number -= $n;
  }
  public function multiply($n) {
    $this->number *= $n;
  }
  public function divide($n) {
    $this->number /= $n;
  }
  public function getTotal() {
    return number_format($this->number, 2, ',', '.');
  }
  public function clean() {
    $this->number = 0;
  }
}
