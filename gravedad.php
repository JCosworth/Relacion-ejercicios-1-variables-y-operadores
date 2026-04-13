<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - Gravedad</title>
    <style>
        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
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
            border-bottom: 2px solid #3498db;
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
        /* Estilos del formulario */
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
        /* Estilos del resultado */
        .datos {
            color: #34495e;
            font-size: 1.1em;
            margin-bottom: 10px;
            text-align: center;
        }
        .resultado {
            font-size: 1.3em;
            color: #27ae60;
            font-weight: bold;
            background-color: #eafaf1;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            border: 1px solid #b7e4c7;
        }
    </style>
</head>
<body>

    <div class="tarjeta-ejercicio">
        <h2 class="titulo">Ejercicio 1</h2>
        
        <div class="enunciado">
            Define una constante con el valor de la gravedad terrestre (9.8).<br>
            Crea un formulario para introducir la masa de un objeto y calcula su peso.
        </div>

        <form method="POST" action="">
            <label for="masa">Introduce la masa (kg):</label>
            <input type="number" step="0.01" name="masa" id="masa" required 
                   value="<?php echo isset($_POST['masa']) ? $_POST['masa'] : ''; ?>" 
                   placeholder="Ej: 15.5">
            
            <button type="submit">Calcular Peso</button>
        </form>

<?php
        // 1. Definimos la constante FUERA del condicional
        const GRAVEDAD = 9.8;

        // Verificamos si el usuario ha pulsado el botón
        if (isset($_POST['masa'])) {
            
            // 2. Leemos la variable del formulario
            $masa = $_POST['masa'];

            // 3. Calculamos el peso
            $peso = $masa * GRAVEDAD;

            // 4. Mostramos los resultados
            echo "<div class='separador'></div>";
            echo "<div class='datos'>Para una masa de <strong>$masa kg</strong>.</div>";
            echo "<div class='resultado'>El peso calculado es: $peso Newtons</div>";
        }
        ?>
    </div>

</body>
</html>