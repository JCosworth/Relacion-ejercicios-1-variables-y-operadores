<?php

echo "<b>Ejercicio 14:</b> Dado un número entero, usa un operador ternario para mostrar si es par o impar.<br />";
echo "<br />";

// 1. Creamos las variables

$numero = (int)($_GET['numero'] ?? 7);

// 2. Realizamos las operaciones
$resultado = (int)($numero / 2);
$sobra = $numero % 2;

$comp = ($sobra == 0) ? "PAR":"IMPAR";

//3. Imprimimos
echo "El número $numero es $comp";

?>