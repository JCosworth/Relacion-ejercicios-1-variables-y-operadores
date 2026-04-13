<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Tipos de Variables</title>
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
            max-width: 480px;
            width: 100%;
            box-sizing: border-box;
        }
        .titulo {
            color: #2c3e50;
            margin-top: 0;
            border-bottom: 2px solid #16a085; /* Color verde esmeralda */
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
            border-left: 4px solid #16a085;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #34495e;
            font-weight: bold;
            font-size: 0.9em;
        }
        input {
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
            background-color: #16a085;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1em;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #1abc9c;
        }
        .separador {
            border-top: 1px solid #ecf0f1;
            margin: 25px 0;
        }
        .lista-resultados {
            background-color: #e8f8f5;
            padding: 15px 20px;
            border-radius: 8px;
            border: 1px solid #a3e4d7;
        }
        .item-resultado {
            font-size: 1.1em;
            color: #2c3e50;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px dashed #a3e4d7;
        }
        .item-resultado:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }
        .valor {
            color: #16a085;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="tarjeta-ejercicio">
        <h2 class="titulo">Ejercicio 3</h2>
        
        <div class="enunciado">
            Define tres variables: una que almacene un número entero, otra que almacene un número decimal, y otra que almacene una cadena de texto. Muestra los valores de cada variable.
        </div>

        <form method="POST" action="">
            <label for="entero">Número Entero:</label>
            <input type="number" step="1" name="entero" id="entero" required 
                   value="<?php echo isset($_POST['entero']) ? $_POST['entero'] : ''; ?>" 
                   placeholder="Ej: 42">

            <label for="decimal">Número Decimal:</label>
            <input type="number" step="any" name="decimal" id="decimal" required 
                   value="<?php echo isset($_POST['decimal']) ? $_POST['decimal'] : ''; ?>" 
                   placeholder="Ej: 3.14">

            <label for="texto">Cadena de Texto:</label>
            <input type="text" name="texto" id="texto" required 
                   value="<?php echo isset($_POST['texto']) ? $_POST['texto'] : ''; ?>" 
                   placeholder="Ej: Hola mundo">
            
            <button type="submit">Mostrar Variables</button>
        </form>

        <?php
        // Verificamos si se enviaron los tres datos
        if (isset($_POST['entero']) && isset($_POST['decimal']) && isset($_POST['texto'])) {
            
            // 1. Definimos las variables y forzamos su tipo
            $entero = (int)$_POST['entero'];
            $decimal = (float)$_POST['decimal'];
            // Usamos htmlspecialchars por seguridad al imprimir texto del usuario
            $texto = htmlspecialchars((string)$_POST['texto']); 

            // 2. Mostramos los resultados
            echo "<div class='separador'></div>";
            echo "<div class='lista-resultados'>";
                echo "<div class='item-resultado'><span class='valor'>$entero</span> es un número entero</div>";
                echo "<div class='item-resultado'><span class='valor'>$decimal</span> es un número decimal</div>";
                echo "<div class='item-resultado'><span class='valor'>\"$texto\"</span> es una cadena de texto</div>";
            echo "</div>";
        }
        ?>
    </div>

</body>
</html>