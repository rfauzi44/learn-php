<?php

require_once "data/Person.php";

$person1 = new Person();
$person1->name = "Rizal";
$person1->gender = "Male";
$person1->address = "Yogyakarta";

var_dump($person1);