<?php

function sayHello(string $name, callable $manipulate): string {
    $result = $manipulate($name);
    return "Hello $result";
}