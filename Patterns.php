<?php
//1
$n = 5;
for ($row = 1; $row <= $n; $row++) {

    for ($col = 1; $col <= $n; $col++) {
        echo "*";
    };
    echo "\n";
};
echo "\n";

//2
$n = 5;
for ($row = 1; $row <= $n; $row++) {

    for ($col = 1; $col <= $row; $col++) {
        echo "*";
    };
    echo "\n";
};
echo "\n";

//3
$n = 5;
for ($row = 1; $row <= $n; $row++) {

    for ($col = 1; $col <= $n - ($row - 1); $col++) {
        echo "*";
    };
    echo "\n";
};
echo "\n";
