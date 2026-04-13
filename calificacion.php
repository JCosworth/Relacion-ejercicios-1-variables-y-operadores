<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8 - Calificaciones</title>
    <style>
        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }
        .tarjeta-ejercicio {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
            max-width: 450px;
            width: 100%;
            box-sizing: border-box;
        }
        .titulo {
            color: #2c3e50;
            margin-top: 0;
            border-bottom: 2px solid #607d8b; /* Gris azulado */
            padding-bottom: 10px;
        }
        .enunciado {
            color: #555;
            font-size: 0.95em;
            line-height: 1.5;
            margin-bottom: 25px;
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #607d8b;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #34495e;
            font-weight: bold;
        }
        input[type="number"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #bdc3c7;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 1em;
            margin-bottom: 20px;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #607d8b;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1em;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #455a64;
        }
        .separador {
            border-top: 1px solid #ecf0f1;
            margin: 25px 0;
        }
        
        /* Clases dinámicas para los resultados */
        .resultado-caja {
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            font-size: 1.2em;
            font-weight: bold;
        }
        .aprobado {
            background-color: #e8f5e9;
            color: #2e7d32;
            border: 1px solid #a5d6a7;
        }
        .suspenso {
            background-color: #ffebee;
            color: #c62828;
            border: 1px solid #ef9a9a;
        }
        .invalido {
            background-color: #fff3e0;
            color: #ef6c00;
            border: 1px solid #ffcc80;
        }
    </style>
</head>
<body>

    <div class="tarjeta-ejercicio">
        <h2 class="titulo">Ejercicio 8</h2>
        
        <div class="enunciado">
            Crea una variable que almacene una nota de examen y usa un operador relacional para mostrar si el estudiante ha aprobado o suspendido.
        </div>

        <form method="POST" action="">
            <label for="nota">Introduce la nota del examen (0-10):</label>
            <input type="number" step="0.1" name="nota" id="nota" required 
                   value="<?php echo isset($_POST['nota']) ? $_POST['nota'] : ''; ?>"
                   placeholder="Ej: 7.5">
            
            <button type="submit">Comprobar Nota</button>
        </form>

        <?php
        if (isset($_POST['nota'])) {
            // 1. Leemos la variable
            $nota = (float)$_POST['nota'];
            
            // 2. Realizamos las operaciones y preparamos variables para el HTML
            $clase_css = "";
            $mensaje = "";

            if ($nota >= 5 && $nota <= 10) {
                $clase_css = "aprobado";
                $mensaje = "El resultado de $nota es: Aprobado 🎉";
            } elseif ($nota < 5 && $nota >= 0) {
                $clase_css = "suspenso";
                $mensaje = "El resultado de $nota es: Suspenso 📚";
            } else {
                $clase_css = "invalido";
                $mensaje = "Cuidado: $nota no es una nota válida ⚠️";
            }

            // 3. Imprimimos el resultado con la clase dinámica
            echo "<div class='separador'></div>";
            echo "<div class='resultado-caja $clase_css'>";
            echo $mensaje;
            echo "</div>";
        }
        ?>
    </div>

</body>
</html>