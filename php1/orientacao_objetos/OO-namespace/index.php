<?php
require("./class1.php");
require("./class2.php");
require("classes/matematica/basico.php");

use classes\matematica\Basica as MatematicaBasica;

$people = new classTwo\MyClass();
echo $people->human();

$mate = new MatematicaBasica();
echo $mate->mate();