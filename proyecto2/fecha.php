<?php

echo "Hoy es 22 de enero de 2014, es la 4 semana del 2 mes";
echo "<br/>";

$format  = "Hoy es ".date('d');
$format =$format." de ".date('F');
$format =$format." de ".date('o');
$format =$format.", es la ".date('W');
$format =$format." del ".date('n')." mes";


echo $format;
