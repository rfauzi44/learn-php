<?php

$something = 100;

$gender = 1;
$sayHi = "";


if (!$something) {
    echo "Yey\n";
} else if ($something == 80) {
    echo "Foo\n";
} else {
    echo "Bar\n";
}

if (!$something) :
    echo "Yey\n";
elseif ($something == 80) :
    echo "Foo\n";
else :
    echo "Bar\n";
endif;


switch ($something) {
    case 90:
        echo "Foo\n";
        break;
    case 80:
        echo "Bar\n";
        break;
    default:
        echo "Default\n";
        break;
}

// if ($gender == 0) {
//     $sayHi = "Hi Man";
// } else {
//     $sayHi = "Hi Girls";
// }


$sayHi = $gender == 0 ? "Hi Man" : "Hi Girls";

var_dump($sayHi);
