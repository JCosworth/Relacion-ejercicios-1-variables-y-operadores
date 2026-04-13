<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 - Área del Triángulo</title>
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
            border-bottom: 2px solid #9b59b6; /* Cambiamos el color a morado para diferenciar del Ej 1 */
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
            border-left: 4px solid #9b59b6;
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
            margin-bottom: 20px;
            border: 1px solid #bdc3c7;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 1em;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #9b59b6;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1em;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #8e44ad;
        }
        .separador {
            border-top: 1px solid #ecf0f1;
            margin: 25px 0;
        }
        .datos {
            color: #34495e;
            font-size: 1.1em;
            margin-bottom: 10px;
            text-align: center;
        }
        .resultado {
            font-size: 1.3em;
            color: #8e44ad;
            font-weight: bold;
            background-color: #f5eef8;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            border: 1px solid #d7bde2;
        }
    </style>
</head>
<body>

    <div class="tarjeta-ejercicio">
        <h2 class="titulo">Ejercicio 2</h2>
        
        <div class="enunciado">
            Crea una variable que almacene el valor de una base y otra que almacene la altura de un triángulo.<br>
            Calcula el área del triángulo (fórmula: ½ * base * altura) y muestra el resultado.
        </div>

        <form method="POST" action="">
            <label for="base">Introduce la base:</label>
            <input type="number" step="0.01" name="base" id="base" required 
                   value="<?php echo isset($_POST['base']) ? $_POST['base'] : ''; ?>" 
                   placeholder="Ej: 10">

            <label for="altura">Introduce la altura:</label>
            <input type="number" step="0.01" name="altura" id="altura" required 
                   value="<?php echo isset($_POST['altura']) ? $_POST['altura'] : ''; ?>" 
                   placeholder="Ej: 5">
            
            <button type="submit">Calcular Área</button>
        </form>

        <?php
        // Verificamos si se enviaron los datos (comprobando si existe 'base' y 'altura' en el POST)
        if (isset($_POST['base']) && isset($_POST['altura'])) {
            
            // 1. Leemos las variables del formulario
            $base = $_POST['base'];
            $altura = $_POST['altura'];

            // 2. Calculamos el área
            $area = ($base * $altura) / 2;

            // 3. Mostramos los resultados
            echo "<div class='separador'></div>";
            echo "<div class='datos'>Para una base de <strong>$base</strong> y una altura de <strong>$altura</strong>.</div>";
            echo "<div class='resultado'>El área calculada es: $area</div>";
        }
        ?>
    </div>

</body>
</html>