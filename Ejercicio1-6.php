<?php
echo "<b>Ejercicio 6:</b> Calcula el perímetro y área de un rectángulo, dadas su base y su altura, almacenadas <br />";
echo "en dos variables <br />";
echo "<br />";

// 1. Definimos base y altura
$base = $_GET['base'] ?? 10;
$altura = $_GET['altura'] ?? 5;

// 2. Multiplicamos base por altura
$perimetro = 2 * $base + 2 * $altura;
$area = $base * $altura;

// 3. Mostramos los resultados en la pantalla usando echo
echo "Si la base es $base y la altura es $altura: <br />";
echo "El perimetro lo obtenemos de sumar dos veces la base por dos veces la altura, por lo tanto el resultado es $perimetro <br />";
echo "El area lo obtenemos de multiplicar la base por la altura, por lo tanto el resultado es $area";
?>