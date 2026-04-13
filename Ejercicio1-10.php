 <?php

echo "<b>Ejercicio 10:</b> Crea una variable que almacene la edad de una persona y usa un operador ternario <br />";
echo "para determinar si es mayor de edad o no.<br />";
echo "<br />";

// 1. Creamos las variables

$edad =  (int)($_GET['edad'] ?? 18);

// 2. Realizamos las operaciones

$resultado = ($edad >= 18) ? "MAYOR DE EDAD" : "MENOR DE EDAD";

// 3. Imprimimos

echo "Con una edad de $edad eres $resultado";

?> 