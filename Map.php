<?php

$students = array(
        array(
                "id" => 1,
                "name" => "Rizal",
                "address" => [
                        "city" => "Yogyakarta",
                        "country" => "Indonesia"

                ]
        ),
        array(
                "name" => "Rizal",
                "salaries" => 1_000_000

        )
);

// $salaries = [
//         "name" => "Rizal",
//         "salaries" => 1_000_000
// ];

// echo $students[0];

$foobar = $students[0]["id"];

echo $foobar;