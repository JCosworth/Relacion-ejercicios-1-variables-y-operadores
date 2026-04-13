<?php

echo "<b>Ejercicio 8:</b> Crea una variable que almacene una nota de examen y usa un operador relacional <br />";
echo "para mostrar si el estudiante ha aprobado o suspendido (considera que la nota mínima para <br />";
echo "aprobar es 5). <br />";
echo "<br />";

// 1. Creamos la variable

$nota =  (float)($_GET['nota'] ?? 0);

// 2. Realizamos las operaciones
if ($nota >= 5 && $nota <= 10) {
    echo "El resultado de $nota es Aprobado";
} elseif ($nota < 5 && $nota >= 0) {
    echo "El resultado de $nota es Suspenso";
}else{
    echo "No has puesto una nota válida";
}

?>