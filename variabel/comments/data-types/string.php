<?php

/** 
 * string
 * can includes any characters
*/

$string_a = 'Dias \'12345678910';
$string_b = "Ilyasa !^@&@";

// concatenation

$concatenation = $string_a . ' ' . $string_b;
// echo $concatenation

// the differences between single quote and double qoutes
$string_c = '{$string_b} apa';
$string_d = "{$string_b} apa";

echo ($string_c);
echo PHP_EOL;
echo ($string_d);