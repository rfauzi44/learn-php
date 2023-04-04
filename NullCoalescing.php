<?php

$data = [
    "name" => "Rizal"
];

// if (isset($data["name"])) {
//     $myName = $data["name"];
// } else {
//     $myName = "No name";
// }

$myName = $data["name"] ?? "No name";

var_dump($myName);