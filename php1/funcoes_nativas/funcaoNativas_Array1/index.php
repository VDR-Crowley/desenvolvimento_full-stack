<?php 

$students = ["Vando", "Andre", "Gabriel", "Julha", "Vinicius"];
$okay = ["Vando", "Julha", "Andre"];
$disapproved = array_diff($students, $okay);
print_r($disapproved);

echo "<br>";

$numbers = [10, 52, 30, 88, 66, 45, 28, 100];
$numbersFilters = array_filter($students, fn($item) => strLen($item) <= 5);
print_r($numbersFilters);

echo "<br>";

$doubleNumbers = array_map(fn($item) => $item * 2, $numbers);
print_r($doubleNumbers);

print " ";