<?php

$a = 10;
$b = 10;

echo "<table border=1>";
echo "<tr>";   
for ($i=0 ;$i<$a+1; $i++)
        echo "<td>".$i."</td>";
echo "</tr>";

for ($i=1 ; $i<$b+1; $i++) {
    echo "<tr>";
    echo "<td>".$i."</td>";
    for ($j=1; $j<=$a; $j++) {
        echo "<td>".$i*$j."</td>"; }
    echo "</tr>"; }

echo "</table>";

