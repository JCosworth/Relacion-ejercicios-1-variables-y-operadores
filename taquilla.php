<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11 - Taquilla de Cine</title>
    <style>
        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #1a1a2e; /* Fondo noche oscura */
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
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            max-width: 500px;
            width: 100%;
            box-sizing: border-box;
            border-top: 8px solid #e50914; /* Rojo cine */
        }
        .titulo {
            color: #1a1a2e;
            margin-top: 0;
            border-bottom: 2px solid #e50914;
            padding-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .enunciado {
            color: #555;
            font-size: 0.95em;
            line-height: 1.5;
            margin-bottom: 25px;
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #e50914;
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
        }
        input[type="number"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #bdc3c7;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 1em;
            background-color: #fdfefe;
        }
        input[type="number"]:focus {
            border-color: #e50914;
            outline: none;
        }
        button {
            width: 100%;
            padding: 14px;
            background-color: #e50914;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1.1em;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #b20710;
        }
        .separador {
            border-top: 2px dashed #ecf0f1;
            margin: 25px 0;
        }
        
        /* Clases dinámicas para la taquilla */
        .resultado-caja {
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            font-size: 1.2em;
            font-weight: bold;
        }
        .los-dos {
            background-color: #1a1a2e;
            color: #f1c40f; /* Dorado VIP */
            border: 2px solid #f1c40f;
        }
        .solo-uno {
            background-color: #fdf2e9;
            color: #d35400;
            border: 2px solid #e67e22;
        }
        .ninguno {
            background-color: #fdedec;
            color: #c0392b;
            border: 2px solid #e74c3c;
        }
    </style>
</head>
<body>

    <div class="tarjeta-ejercicio">
        <h2 class="titulo">🍿 Taquilla: Ejercicio 11</h2>
        
        <div class="enunciado">
            Gervasio y Facundina quieren ir al cine para ver una película restringida a mayores de edad. Indica si pueden entrar juntos, separados o ninguno.
        </div>

        <form method="POST" action="">
            <div class="fila-formulario">
                <div class="grupo-input">
                    <label for="edadG">Edad de Gervasio:</label>
                    <input type="number" step="1" min="0" name="edadG" id="edadG" required 
                           value="<?php echo isset($_POST['edadG']) ? $_POST['edadG'] : '18'; ?>">
                </div>
                <div class="grupo-input">
                    <label for="edadF">Edad de Facundina:</label>
                    <input type="number" step="1" min="0" name="edadF" id="edadF" required 
                           value="<?php echo isset($_POST['edadF']) ? $_POST['edadF'] : '18'; ?>">
                </div>
            </div>
            
            <button type="submit">Comprobar Entradas</button>
        </form>

        <?php
        if (isset($_POST['edadG']) && isset($_POST['edadF'])) {
            
            // 1. Leemos las variables
            $edadG = (int)$_POST['edadG'];
            $edadF = (int)$_POST['edadF'];
            
            // 2. Realizamos tus operaciones con clases CSS dinámicas
            echo "<div class='separador'></div>";

            if ($edadG >= 18 && $edadF >= 18){
                echo "<div class='resultado-caja los-dos'>🎟️ Pueden verla juntos</div>";
            } elseif ($edadG < 18 && $edadF >= 18){
                echo "<div class='resultado-caja solo-uno'>⚠️ Lo siento Gervasio, te quedas en casa</div>";
            } elseif ($edadF < 18 && $edadG >= 18){
                echo "<div class='resultado-caja solo-uno'>⚠️ Lo siento Facundina, te quedas en casa</div>";
            } else {
                echo "<div class='resultado-caja ninguno'>❌ En casa los 2 y la puerta del dormitorio abierta de par en par</div>";
            }
        }
        ?>
    </div>

</body>
</html>