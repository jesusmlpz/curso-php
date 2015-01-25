<?php

include ('fibonacci.php');

$max = 100;

$serie = fibonacci($max);

echo "<pre>";
print_r($serie);
echo "</pre>";

echo sizeof($serie, $mode);