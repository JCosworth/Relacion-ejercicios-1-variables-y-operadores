<?php

echo "<b>Ejercicio 13:</b> Crea un programa que calcule el índice de masa corporal (IMC) dada la altura y el <br />";
echo "peso de una persona. Usa un operador relacional para indicar si está en un rango saludable (18.5 <br />";
echo "a 24.9). <br />";
echo "<br />";

// 1. Creamos las variables

$peso =  (float)($_GET['peso'] ?? 88);
$altura =  (float)($_GET['altura'] ?? 1.88);

// 2. Realizamos las operaciones
$imc = $peso/($altura*$altura);

// 3. Opciones
if ($imc < 18.5){
    echo "Pilla panceta.<br />";
}elseif ($imc < 25){
    echo "Menudo tipazo tienes.<br />";
}elseif ($imc < 30){
    echo "De cabeza al gimnasio.<br />";
}else{
    echo "¡¡FANEGAS!!<br />";
}
echo "<br/>";
echo "$peso KG <br />";
echo "$altura m"

?>