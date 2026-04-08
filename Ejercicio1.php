<?php
// Ejercicio 1: Define una constante con el valor de la gravedad terrestre (9.8).
// Luego, crea una variable que almacene la masa de un objeto y calcula su peso
// multiplicando la masa por la constante de gravedad. Muestra el resultado.

// 1. Definimos la constante de la gravedad terrestre
const GRAVEDAD = 9.8;

// 2. Leemos la variable desde la barra de direcciones (URL)
// Si en la URL escriben "?masa=15", $masa valdrá 15.
// Si no escriben nada, usamos el operador ?? para que valga 10 por defecto.
$masa = $_GET['masa'] ?? 10;

// 3. Calculamos el peso multiplicando la variable de la masa por la constante
$peso = $masa * GRAVEDAD;

// 4. Mostramos los resultados en la pantalla usando echo
echo "Para una masa de $masa kg.<br />";
echo "El peso calculado es: $peso Newtons.";
?>