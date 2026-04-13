<?php
echo "<b>Ejercicio 3:</b> Define tres variables: una que almacene un número entero, otra que almacene un <br />";
echo "número decimal, y otra que almacene una cadena de texto. Muestra los valores de cada variable <br />";
echo "usando echo. <br />";
echo "<br />";

// 1. Definimos las variables
$entero = (int)($_GET['entero'] ?? 10);
$decimal = (float)($_GET['decimal'] ?? 10.1);
$texto = (string)($_GET['texto'] ?? 'Diez');

// 2. Mostramos los resultados en la pantalla usando echo
echo "$entero es un número entero <br />";
echo "$decimal es un número decimal <br />";
echo "$texto es una cadena de texto";
?>