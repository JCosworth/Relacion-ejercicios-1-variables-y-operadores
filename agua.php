<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15 - Estados del Agua</title>
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
            border-bottom: 2px solid #3498db; /* Azul agua */
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
            border-left: 4px solid #3498db;
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
            font-size: 1.1em;
            margin-bottom: 20px;
        }
        input[type="number"]:focus {
            border-color: #3498db;
            outline: none;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1em;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #2980b9;
        }
        .separador {
            border-top: 1px solid #ecf0f1;
            margin: 25px 0;
        }
        
        /* Clases dinámicas de temperatura */
        .resultado-caja {
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            font-size: 1.2em;
        }
        .temperatura-grande {
            font-size: 1.8em;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        .congelada {
            background-color: #e0f7fa;
            color: #00838f;
            border: 2px solid #b2ebf2;
        }
        .liquida {
            background-color: #e3f2fd;
            color: #1565c0;
            border: 2px solid #bbdefb;
        }
        .hirviendo {
            background-color: #fbe9e7;
            color: #d84315;
            border: 2px solid #ffccbc;
        }
    </style>
</head>
<body>

    <div class="tarjeta-ejercicio">
        <h2 class="titulo">🌡️ Ejercicio 15</h2>
        
        <div class="enunciado">
            Crea un programa que reciba la temperatura en grados Celsius y muestre si el agua está congelada, en estado líquido o hirviendo.
        </div>

        <form method="POST" action="">
            <label for="temperatura">Temperatura del agua (°C):</label>
            <input type="number" step="0.1" name="temperatura" id="temperatura" required 
                   value="<?php echo isset($_POST['temperatura']) ? $_POST['temperatura'] : '25'; ?>"
                   placeholder="Ej: 25">
            
            <button type="submit">Comprobar Estado</button>
        </form>

        <?php
        if (isset($_POST['temperatura'])) {
            
            // 1. Leemos la variable
            $temperatura = (float)$_POST['temperatura'];
            
            // 2. Operador ternario anidado (¡Torpón se pone técnico!)
            $estado = ($temperatura <= 0) ? "CONGELADA 🧊" : (($temperatura >= 100) ? "HIRVIENDO ♨️" : "en ESTADO LÍQUIDO 💧");
            
            // Usamos el mismo ternario para asignar la clase CSS de color
            $clase_css = ($temperatura <= 0) ? "congelada" : (($temperatura >= 100) ? "hirviendo" : "liquida");

            // 3. Imprimimos el resultado
            echo "<div class='separador'></div>";
            echo "<div class='resultado-caja $clase_css'>";
            echo "<span class='temperatura-grande'>$temperatura °C</span>";
            echo "El agua está <strong>$estado</strong>.";
            echo "</div>";
        }
        ?>
    </div>

</body>
</html>