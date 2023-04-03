<?php

$names = array("Rizal", "Aldi", "Fauzi");
// var_dump($names);

$age = [1, "Foo", 3, "Bar"];
// var_dump($age);

// $myname = $names[0];
// $arrayIndex = count($age);

// echo $myname;
// echo "\n";
// echo $arrayIndex;

$union = $names + $age;

var_dump($union);

$address = [
    "id" => "Yogyakarta",
    "name" => "Indonesia"
];

$user = [
    "name" => "Indonesia",
    "id" => "Yogyakarta"
];

var_dump($user != $address);



