<?php

echo "<b>Ejercicio 11:</b>  Gervasio y Facundina quieren ir al cine para ver una película que está restringida a <br />";
echo "mayores de edad (18 o más años). Diseña un programa en PHP que lea las edades de Gervasio y <br />";
echo "Facundina e indique si ambos pueden ver la película juntos, si solamente uno de ellos puede <br />";
echo "verla o si no puede verla ninguno. <br />";
echo "<br />";

// 1. Creamos las variables

$edadG =  (int)($_GET['edadG'] ?? 18);
$edadF =  (int)($_GET['edadF'] ?? 18);

// 2. Realizamos las operaciones
if ($edadG >= 18 && $edadF >= 18){
    echo "Pueden verla juntos";
} elseif ($edadG < 18 && $edadF >= 18){
    echo "Lo siento Gervasio, te quedas en casa";
} elseif ($edadF < 18 && $edadG >= 18){
    echo "Lo siento Facundina, te quedas en casa";
} else {
    echo "En casa los 2 y la puerta del dormitorio abierta de par en par";
}

?>