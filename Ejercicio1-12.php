<?php

echo "<b>Ejercicio 12:</b>  Crea una variable que almacene la cantidad de productos comprados por un <br />";
echo "cliente y en otra el precio de cada unidad. Usa un operador ternario para aplicar un descuento <br />";
echo "del 20% si ha comprado más de 10 productos. Muestra la cantidad a pagar <br />";
echo "<br />";

// 1. Creamos las variables

$cantidad =  (int)($_GET['cantidad'] ?? 1);
$precio =  (float)($_GET['precio'] ?? 1);

// 2. Realizamos las operaciones
$resultado = ($cantidad <= 10) ? $cantidad*$precio : ($cantidad*$precio)*0.8;

echo "El precio de comprar esta cantidad de productos: $cantidad al precio de $precio € es de $resultado €";

?>