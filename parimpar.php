<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14 - Par o Impar</title>
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
            max-width: 400px;
            width: 100%;
            box-sizing: border-box;
        }
        .titulo {
            color: #2c3e50;
            margin-top: 0;
            border-bottom: 2px solid #34495e;
            padding-bottom: 10px;
            text-align: center;
        }
        .enunciado {
            color: #555;
            font-size: 0.95em;
            line-height: 1.5;
            margin-bottom: 25px;
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #34495e;
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
            text-align: center;
        }
        input[type="number"]:focus {
            border-color: #34495e;
            outline: none;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #34495e;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1em;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #2c3e50;
        }
        .separador {
            border-top: 1px solid #ecf0f1;
            margin: 25px 0;
        }
        
        /* Clases dinámicas */
        .resultado-caja {
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            font-size: 1.3em;
        }
        .numero-grande {
            font-size: 1.5em;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        .par {
            background-color: #e8f8f5;
            color: #117a65;
            border: 2px solid #a3e4d7;
        }
        .impar {
            background-color: #fdedec;
            color: #c0392b;
            border: 2px solid #f5b7b1;
        }
    </style>
</head>
<body>

    <div class="tarjeta-ejercicio">
        <h2 class="titulo">🔢 Ejercicio 14</h2>
        
        <div class="enunciado">
            Dado un número entero, usa un operador ternario para mostrar si es par o impar.
        </div>

        <form method="POST" action="">
            <label for="numero">Introduce un número entero:</label>
            <input type="number" step="1" name="numero" id="numero" required 
                   value="<?php echo isset($_POST['numero']) ? $_POST['numero'] : '7'; ?>">
            
            <button type="submit">Comprobar</button>
        </form>

        <?php
        if (isset($_POST['numero'])) {
            
            // 1. Leemos la variable
            $numero = (int)$_POST['numero'];
            
            // 2. Realizamos la comprobación con el módulo y el ternario
            $sobra = $numero % 2;
            $comp = ($sobra == 0) ? "PAR" : "IMPAR";
            
            // Usamos la misma lógica para decidir la clase CSS
            $clase_css = ($sobra == 0) ? "par" : "impar";

            // 3. Imprimimos el resultado
            echo "<div class='separador'></div>";
            echo "<div class='resultado-caja $clase_css'>";
            echo "<span class='numero-grande'>$numero</span>";
            echo "Es un número <strong>$comp</strong>";
            echo "</div>";
        }
        ?>
    </div>

</body>
</html>