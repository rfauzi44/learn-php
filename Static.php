<?php

function increment() {
    static $value = 1;
    echo $value .PHP_EOL;
    $value++;

}

increment();
increment();

