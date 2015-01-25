<?php

$p1 = array(1,2);
$p2 = array(1,5);
$p3 = array(1,8);
$triangulo = false;

if ($p2[0] == $p1[0]) {
	if ($p3[0]!=$p1[0]) {
		$triangulo = true;
	}
} else {
	if ($p3[0]==$p1[0]) {
		$triangulo = true;
	}

	$m12 = ($p2[1]-$p1[1])/($p2[0]-$p1[0]);
	$m13 = ($p3[1]-$p1[1])/($p3[0]-$p1[0]);
	
	if ($m12 == $m13) $triangulo = true;

	echo "<pre>m12: ";
	print_r($m12);
	echo " m13: ";
	print_r($m13);
	echo "</pre>";

}


echo "Los puntos:";

echo "<br/>";

echo "<pre>";
print_r($p1);
print_r($p2);
print_r($p3);
echo "</pre>";

if ($triangulo) {
    echo "Forman un triángulo";
}
else {
    echo "No forman un triángulo";
}

