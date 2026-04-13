<?php
echo "<b>Ejercicio 5:</b> Crea dos variables que almacenen dos números enteros. Realiza las operaciones <br />";
echo "básicas (suma, resta, multiplicación y división) y muestra los resultados. <br />";
echo "<br />";

// 1. Aunque el ejercicio pide dos variables yo voy a crear 3:
$numero1 = (int)($_GET ["numero1"] ?? "99999999");
$numero2 = (int)($_GET ["numero2"] ?? "99999999");

// 2. Creamos la operación
$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$multiplicacion = $numero1 * $numero2;
$division = $numero1 / $numero2;

// 3. Imprimimos en pantalla
echo "Los resultados son: <br />";
echo "Suma:           $suma <br />";
echo "Resta:          $resta <br />";
echo "Multiplicación: $multiplicacion <br />";
echo "División:       $division";
?>