<?php

$foobar = [1, 2, 3, 4, 5];
$total = 0 ;

for($i = 0; $i < count($foobar); $i++ ) {
    $total += $foobar[$i];
};

var_dump($total);

$number = 0 ;

// while ($number <= 10) {
//     echo "Yey";
//     $number++;
// }

// do {
//     echo "yey";
//     $number++;
// } while ($number < 1);

// while ($number <= 10) {
//     echo "$number";
//     $number++;

//     if ($number == 5) {
//         break;
//     };
// };

for ($i=0; $i <=100 ; $i++) {
    if ($i % 2 == 0 ) {
        continue;
        echo "Even\n";

    }
    echo $i . PHP_EOL;
}

foreach ($foobar as $key => $value) {
    echo "{$key}s\n {$value}s\n";
    # code...
}

$user = [
    "name" => "Indonesia",
    "id" => "Yogyakarta"
];

foreach ($user as $key => $value) {
    echo "$key : $value\n";
    # code...
};