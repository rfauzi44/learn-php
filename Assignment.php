<?php

$num1 = 10;
$total = 100;

$total += 1;
$total += 1;

echo <<<OUTPUT

$total 


OUTPUT;

var_dump($total);