<?php
echo "<b>Ejercicio 4:</b> Crea una variable que almacene tu nombre y otra que almacene tu ciudad. Usa echo <br />";
echo "para mostrar la frase -Mi nombre es [nombre] y vivo en [ciudad]- <br />";
echo "<br />";

// 1. Creamos la variables:
$nombre = $_GET ["nombre"] ?? "- no ha introducido un nombre -";
$ciudad = $_GET ["ciudad"] ?? "- no ha introducido una ciudad -";

// 2. Mostramos la frase:
echo "Mi nombre es $nombre y vivo en $ciudad.";

?>