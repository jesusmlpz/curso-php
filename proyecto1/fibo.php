<?php

$max = 25;

$fib1 = 0;
$fib2 = 1;

$fib_str = $fib1.", ".$fib2;

for ($i=2;$i<=$max;$i++) {
    $fib0 = $fib2 +$fib1;
    $fib_str = $fib_str.", ".$fib0;  
    $fib1 = $fib2;
    $fib2 = $fib0;
}

echo $fib_str;
