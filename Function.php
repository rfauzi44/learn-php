<?php
// if (true) {
//     function sayHi()
//     {
//         echo "Hi there";
//     }
// }

// sayHello();
// sayHello();
// sayHi();

// function sayHello(string  $name, int $age = 8)
// {
//     echo "Hello there $name, your age is $age \n";
//     var_dump($name);
// }

// sayHello("Yey", 10 );

// function sumAll(...$values): int
// {
//    $total = 0;
//    foreach ($values as $value) {
//     $total += $value; 
//     # code...
//    }
//    return $total;
// }

// $result = sumAll(10, 20);
// var_dump($result);


//variable function: use for callback

function helloName($name, $addName) {
    $result = $addName($name);
    echo "Hey $result";
}


function addName($thisName): string {

    return "$thisName Callback";

}

helloName("Rizal", "addName");



