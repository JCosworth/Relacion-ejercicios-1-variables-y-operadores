<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 - Conversor de Tiempo</title>
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
            max-width: 500px;
            width: 100%;
            box-sizing: border-box;
        }
        .titulo {
            color: #2c3e50;
            margin-top: 0;
            border-bottom: 2px solid #00acc1; /* Color Cian */
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
            border-left: 4px solid #00acc1;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #34495e;
            font-weight: bold;
            font-size: 0.95em;
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
        input[type="number"]:focus {
            border-color: #00acc1;
            outline: none;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #00acc1;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1em;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #00838f;
        }
        .caja-resultado {
            background-color: #e0f7fa;
            border: 1px solid #b2ebf2;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            margin-top: 25px;
        }
        .info-datos {
            color: #006064;
            font-size: 0.9em;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .reloj-digital {
            font-family: 'Courier New', Courier, monospace;
            font-size: 2.8em;
            color: #00838f;
            font-weight: bold;
            letter-spacing: 2px;
        }
    </style>
</head>
<body>

    <div class="tarjeta-ejercicio">
        <h2 class="titulo">Ejercicio 7</h2>
        
        <div class="enunciado">
            Dado un número de segundos almacenado en una variable, calcula cuántas horas, minutos y segundos representa. Muestra el resultado en formato 'HH:MM:SS'.
        </div>

        <form method="POST" action="">
            <label for="segundos">Total de segundos:</label>
            <input type="number" step="1" min="0" name="segundos" id="segundos" required 
                   value="<?php echo isset($_POST['segundos']) ? $_POST['segundos'] : ''; ?>"
                   placeholder="Ej: 3665">
            
            <button type="submit">Convertir a Formato Reloj</button>
        </form>

        <?php
        if (isset($_POST['segundos'])) {
            
            // 1. Leemos la variable
            $segundos = (int)$_POST['segundos'];

            // 2. Realizamos tus operaciones
            $horas = (int)($segundos / 3600);
            $sobran = $segundos % 3600;

            $min = (int)($sobran / 60);
            $sec = $sobran % 60;

            // Damos formato HH:MM:SS (rellenando con ceros si es necesario)
            $formato_reloj = sprintf("%02d:%02d:%02d", $horas, $min, $sec);

            // 3. Mostramos resultados
            echo "<div class='caja-resultado'>";
                echo "<div class='info-datos'>$segundos segundos equivalen a:</div>";
                echo "<div class='reloj-digital'>$formato_reloj</div>";
            echo "</div>";
        }
        ?>
    </div>

</body>
</html>