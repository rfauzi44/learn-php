<?php

// $sayHello = function (string $name) {
//     echo "Hello $name" . PHP_EOL;
// };

// $sayHello("Rizal");


// function sayGoodbye(string $name, $filter)
// {
//     $result = $filter($name);
//     echo "Good bye $result\n";
// }

// $filterFunction = function ($name) {
//     return strtoupper($name);
// };

// sayGoodbye("Rizal", $filterFunction);

// closure

$firstName = "Rizaldi";
$lastName = "Fauzi";

// $fullName = function() use ($firstName, $lastName) {
//     echo "$firstName and $lastName";
// };

// $fullName();

//arrow function improve closure in anonymous function

$fullName = fn() => "$firstName $lastName";

echo $fullName();

