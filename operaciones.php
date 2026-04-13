<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 - Operaciones Básicas</title>
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
            border-bottom: 2px solid #e67e22; /* Naranja coral */
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
            border-left: 4px solid #e67e22;
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
            border-color: #e67e22;
            outline: none;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #e67e22;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1em;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #d35400;
        }
        .separador {
            border-top: 1px solid #ecf0f1;
            margin: 25px 0;
        }
        .grid-resultados {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }
        .caja-resultado {
            background-color: #fdf2e9;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #fae5d3;
            text-align: center;
        }
        .operacion-nombre {
            font-size: 0.85em;
            color: #7f8c8d;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }
        .operacion-valor {
            font-size: 1.4em;
            color: #d35400;
            font-weight: bold;
        }
        .error {
            color: #c0392b;
            font-size: 0.8em;
        }
    </style>
</head>
<body>

    <div class="tarjeta-ejercicio">
        <h2 class="titulo">Ejercicio 5</h2>
        
        <div class="enunciado">
            Crea dos variables que almacenen dos números enteros. Realiza las operaciones básicas (suma, resta, multiplicación y división) y muestra los resultados.
        </div>

        <form method="POST" action="">
            <div class="fila-formulario">
                <div class="grupo-input">
                    <label for="numero1">Número 1:</label>
                    <input type="number" step="1" name="numero1" id="numero1" required 
                           value="<?php echo isset($_POST['numero1']) ? $_POST['numero1'] : ''; ?>">
                </div>
                <div class="grupo-input">
                    <label for="numero2">Número 2:</label>
                    <input type="number" step="1" name="numero2" id="numero2" required 
                           value="<?php echo isset($_POST['numero2']) ? $_POST['numero2'] : ''; ?>">
                </div>
            </div>
            
            <button type="submit">Calcular Operaciones</button>
        </form>

        <?php
        if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
            
            // 1. Leemos las variables como enteros
            $numero1 = (int)$_POST['numero1'];
            $numero2 = (int)$_POST['numero2'];

            // 2. Realizamos las operaciones
            $suma = $numero1 + $numero2;
            $resta = $numero1 - $numero2;
            $multiplicacion = $numero1 * $numero2;
            
            // Protección contra la división por cero
            if ($numero2 != 0) {
                // Redondeamos a 2 decimales para que quede bonito
                $division = round($numero1 / $numero2, 2); 
            } else {
                $division = "<span class='error'>No se puede dividir por 0</span>";
            }

            // 3. Imprimimos en pantalla
            echo "<div class='separador'></div>";
            echo "<div class='grid-resultados'>";
                echo "<div class='caja-resultado'>";
                    echo "<div class='operacion-nombre'>Suma</div>";
                    echo "<div class='operacion-valor'>$suma</div>";
                echo "</div>";
                
                echo "<div class='caja-resultado'>";
                    echo "<div class='operacion-nombre'>Resta</div>";
                    echo "<div class='operacion-valor'>$resta</div>";
                echo "</div>";
                
                echo "<div class='caja-resultado'>";
                    echo "<div class='operacion-nombre'>Multiplicación</div>";
                    echo "<div class='operacion-valor'>$multiplicacion</div>";
                echo "</div>";
                
                echo "<div class='caja-resultado'>";
                    echo "<div class='operacion-nombre'>División</div>";
                    echo "<div class='operacion-valor'>$division</div>";
                echo "</div>";
            echo "</div>";
        }
        ?>
    </div>

</body>
</html>