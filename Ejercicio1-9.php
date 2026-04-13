<?php

echo "<b>Ejercicio 9:</b> Crea una variable que almacene la edad de una persona y otra que almacene si tiene <br />";
echo "permiso de conducir. Usa un operador lógico para mostrar si puede conducir (debe tener más de <br />";
echo "18 años y tener permiso de conducir). <br />";
echo "<br />";

// 1. Creamos las variables

$edad =  (int)($_GET['edad'] ?? 18);
$permiso = $_GET['permiso'] ?? "SI";

// 2. Realizamos las operaciones
if ($edad >= 18 && ($permiso == "SI" || $permiso == "si" || $permiso == "sI" || $permiso == "Si")) {
    echo "PUEDE CONDUCIR";
}else{
    echo "NO PUEDE CONDUCIR";
}

?>