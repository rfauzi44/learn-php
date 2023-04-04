<?php

function factorialLoop(int $value): int
{
    $total = 1;
    for ($i = 1; $i <= $value; $i++) {
        $total = $total * $i;
    }

    return $total;
}

var_dump(factorialRecursive(5));
var_dump(1 * 2 * 3 * 4 * 5);

function factorialRecursive(int $value): int
{

    if ($value == 1) {
        return 1;
        # code...
    } else {
        return $value * factorialRecursive($value - 1);
    }
}
