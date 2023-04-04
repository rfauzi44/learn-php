<?php

$myString = "Rizaldi Fauzi";

$newString = explode(" ", $myString);

var_dump($newString);

$myArray = [1, 2, 5, 4];

$sortedArray = sort($myArray);

var_dump($myArray);

$isFoo = is_array($myString);
var_dump($isFoo);
