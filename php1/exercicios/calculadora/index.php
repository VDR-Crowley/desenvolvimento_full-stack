<?php
require("./calculadora.php");

$calc = new Calculadora();
$calc->add(12);
$calc->add(2);
$calc->sub(1);
$calc->multiply(3);
$calc->divide(5);
$calc->add(0.5);

echo "TOTAL: ".$calc->getTotal();

$calc->clean();
