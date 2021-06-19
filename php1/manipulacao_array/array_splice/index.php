<?php

$array = [21, 45, 78, 96, 33];

array_splice($array, 1, 2);

print_r($array);

array_splice($array, 1, 2, [55, 88, 66]);

echo "<br>";

print_r($array);
