<?php

$name = "Vando ";

$first = "Reis";


$firstName = $name;
//$firstName .= isset($first) ? $first : "";

$firstName .= $first ?? ""; // condicional NULL CAO

echo $firstName;