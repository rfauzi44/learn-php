<?php

// goto a;
// echo "Hello world" . PHP_EOL;



for ($i=0; $i <=100 ; $i++) {
    if ($i == 50 ) {

        goto a;

    }
    echo $i . PHP_EOL;
}
a:
echo "Hello A";




