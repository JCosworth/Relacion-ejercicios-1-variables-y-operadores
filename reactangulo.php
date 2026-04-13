<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 - Rectángulo</title>
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
            border-bottom: 2px solid #3f51b5; /* Azul índigo */
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
            border-left: 4px solid #3f51b5;
        }
        .fila-formulario {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }
        .grupo-input {
            flex: 1;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #34495e;
            font-weight: bold;
            font-size: 0.9em;
        }
        input[type="number"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #bdc3c7;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 1em;
        }
        input[type="number"]:focus {
            border-color: #3f51b5;
            outline: none;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #3f51b5;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1em;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #303f9f;
        }
        .separador {
            border-top: 1px solid #ecf0f1;
            margin: 25px 0;
        }
        .info-datos {
            text-align: center;
            color: #7f8c8d;
            margin-bottom: 15px;
            font-style: italic;
        }
        .grid-resultados {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }
        .caja-resultado {
            background-color: #e8eaf6;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #c5cae9;
            text-align: center;
        }
        .operacion-nombre {
            font-size: 0.85em;
            color: #5c6bc0;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }
        .operacion-valor {
            font-size: 1.5em;
            color: #303f9f;
            font-weight: bold;
        }
        .explicacion {
            font-size: 0.75em;
            color: #7986cb;
            margin-top: 5px;
        }
    </style>
</head>
<body>

    <div class="tarjeta-ejercicio">
        <h2 class="titulo">Ejercicio 6</h2>
        
        <div class="enunciado">
            Calcula el perímetro y área de un rectángulo, dadas su base y su altura.
        </div>

        <form method="POST" action="">
            <div class="fila-formulario">
                <div class="grupo-input">
                    <label for="base">Base:</label>
                    <input type="number" step="any" name="base" id="base" required 
                           value="<?php echo isset($_POST['base']) ? $_POST['base'] : ''; ?>">
                </div>
                <div class="grupo-input">
                    <label for="altura">Altura:</label>
                    <input type="number" step="any" name="altura" id="altura" required 
                           value="<?php echo isset($_POST['altura']) ? $_POST['altura'] : ''; ?>">
                </div>
            </div>
            
            <button type="submit">Calcular Rectángulo</button>
        </form>

        <?php
        if (isset($_POST['base']) && isset($_POST['altura'])) {
            
            // 1. Leemos las variables permitiendo decimales
            $base = (float)$_POST['base'];
            $altura = (float)$_POST['altura'];

            // 2. Calculamos perímetro y área
            $perimetro = 2 * $base + 2 * $altura;
            $area = $base * $altura;

            // 3. Mostramos los resultados
            echo "<div class='separador'></div>";
            echo "<div class='info-datos'>Si la base es <strong>$base</strong> y la altura es <strong>$altura</strong>:</div>";
            
            echo "<div class='grid-resultados'>";
                echo "<div class='caja-resultado'>";
                    echo "<div class='operacion-nombre'>Perímetro</div>";
                    echo "<div class='operacion-valor'>$perimetro</div>";
                    echo "<div class='explicacion'>2 × base + 2 × altura</div>";
                echo "</div>";
                
                echo "<div class='caja-resultado'>";
                    echo "<div class='operacion-nombre'>Área</div>";
                    echo "<div class='operacion-valor'>$area</div>";
                    echo "<div class='explicacion'>base × altura</div>";
                echo "</div>";
            echo "</div>";
        }
        ?>
    </div>

</body>
</html>