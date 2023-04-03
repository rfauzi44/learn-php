<?php

$name = "Rizaldi";
$number = 10;

define("SURNAME", "Fauzi");

//if constant must be use dot

echo "My name is {$name}s " .SURNAME .PHP_EOL;

$newName = (int)$name;
$newNumber = (string)$number;

var_dump($newName);
var_dump($newNumber);

$firstIndex = $name[0];

var_dump($firstIndex);