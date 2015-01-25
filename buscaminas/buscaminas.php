<?php
/**
 * Juego buscaminas
 */

//número de líneas
$a = 10;
//número de columnas
$b = 10;
//número de minas
$n = (integer)(($a * $b) / 5);

// Deifinición del campo de minas
$campo_lineal = array();
$campo = array( array());
$slice = array();

// Asignar minas de forma aleatoria en una matriz lineal
$campo_lineal = array_pad($campo_lineal, $a * $b, "");
$i_mina = array_rand($campo_lineal, $n);

// Rellenar matriz bidimensional (minas y número de minas adyacentes)
for ($i = 0; $i < $a + 2; $i++) {
	$campo[$i] = array_pad($campo[0], $b + 2, "");
}

for ($i = 0; $i < sizeof($i_mina); $i++) {
	$campo[(int)($i_mina[$i] / $a) + 1][(int)($i_mina[$i] % $a) + 1] = "*";
}

for ($i = 1; $i < $a + 1; $i++) {
	for ($j = 1; $j < $b + 1; $j++) {
		if ($campo[$i][$j] == "*")
			continue;
		$slice = array_slice($campo[$i - 1], $j - 1, 3);
		$count_values = array_count_values($slice);
		if (array_key_exists("*", $count_values)) {
			$n_minas = $count_values["*"];
		} else {
			$n_minas = 0;
		}

		$slice = array_slice($campo[$i], $j - 1, 3);
		$count_values = array_count_values($slice);
		if (array_key_exists("*", $count_values)) {
			$n_minas += $count_values["*"];
		}

		$slice = array_slice($campo[$i + 1], $j - 1, 3);
		$count_values = array_count_values($slice);
		if (array_key_exists("*", $count_values)) {
			$n_minas += $count_values["*"];
		}
		$campo[$i][$j] = $n_minas;
	}
}

// Generar código html
$html = "<table border=1>";

for ($i = 1; $i < $a + 1; $i++) {
	$html .= "<tr>";
	for ($j = 1; $j < $b + 1; $j++) {
		$html .= "<td width=20 align=center>".(string)$campo[$i][$j]."</td>";
	}
	$html .= "</tr>";
}
$html .= "</table>";

// Presentar matriz
echo $html;



