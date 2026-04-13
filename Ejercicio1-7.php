<?php

echo "<b>Ejercicio 7:</b> Dado un número de segundos almacenado en una variable, calcula cuántas horas,<br />";
echo "minutos y segundos representa. Muestra el resultado en formato 'HH:MM:SS'.<br />";
echo "<br />";

// 1. Creamos la variable

$segundos =  (int)($_GET['segundos'] ?? "3600");

// 2. Realizamos las operaciones (usamos % para utilizar el resto)
$horas = (int)($segundos / 3600);
$sobran = $segundos % 3600;

$min = (int)($sobran / 60);
$sec = $sobran % 60;

// 3. Mostramos resultados
echo "Si tenemos $segundos segundos, el resultado es: <br />";
echo "$horas h: $min m: $sec s";
?>