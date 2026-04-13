<?php

echo "<b>Ejercicio 15:</b>  Crea un programa que reciba la temperatura en grados Celsius y muestre si el agua <br />";
echo "está congelada, en estado líquido o hirviendo (usando operadores relacionales y ternarios).";
echo "<br />";

// 1. Creamos la variable

$temperatura =  (float)($_GET['temperatura'] ?? 25);

// 2. Realizamos las operaciones
$estado = ($temperatura >= 100) ? "hirviendo." : "en estado líquido.";

if ($temperatura <=0){
    echo "El agua esta congelada.";
}else{
    echo "El agua esta $estado";
}

?>