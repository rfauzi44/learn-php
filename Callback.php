<?php

function sayHello (string $name, callable $filter) {
    $result = $filter($name);
    echo "Hello $result\n";
}

sayHello("Rizal", "strtoupper");
sayHello("Rizal", fn($name) => strtoupper($name));


 