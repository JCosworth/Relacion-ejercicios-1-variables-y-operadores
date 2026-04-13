<?php
echo "<b>Ejercicio 2</b>: Crea una variable que almacene el valor de una base y otra que almacene la altura <br />";
echo "de un triángulo. Calcula el área del triángulo (fórmula: ½ * base * altura) y muestra el resultado. <br />";
echo "<br />";

// 1. Definimos base y altura
$base = $_GET['base'] ?? 10;
$altura = $_GET['altura'] ?? 5;

// 2. Multiplicamos base por altura
$area = ($base * $altura)/2;

// 3. Mostramos los resultados en la pantalla usando echo
echo "Para una base de $base y una altura de $altura, el area es: $area";
?>