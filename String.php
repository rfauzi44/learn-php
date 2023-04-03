<?php

// echo "Name :";
// echo " Foobar";
// echo " ";
// echo "\nThis first line\nAnd this is new line";

echo <<<DESC
Heredoc
Lorem ipsum dolor sit amet
This is new line, not \n new line
This is the line

DESC;

echo <<<'DESC'
Nowdoc
Lorem ipsum dolor sit amet
This is new line, not \n new line
This is the line

DESC;