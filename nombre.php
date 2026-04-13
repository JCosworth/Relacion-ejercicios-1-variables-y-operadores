<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 - Nombre y Ciudad</title>
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
            border-bottom: 2px solid #2980b9; /* Azul zafiro */
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
            border-left: 4px solid #2980b9;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #34495e;
            font-weight: bold;
            font-size: 0.95em;
        }
        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #bdc3c7;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 1em;
            transition: border-color 0.3s;
        }
        input[type="text"]:focus {
            border-color: #2980b9;
            outline: none;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #2980b9;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1em;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #2471a3;
        }
        .separador {
            border-top: 1px solid #ecf0f1;
            margin: 25px 0;
        }
        .resultado {
            font-size: 1.2em;
            color: #2c3e50;
            background-color: #ebf5fb;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            border: 1px solid #d6eaf8;
            line-height: 1.5;
        }
        .destacado {
            color: #2980b9;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="tarjeta-ejercicio">
        <h2 class="titulo">Ejercicio 4</h2>
        
        <div class="enunciado">
            Crea una variable que almacene tu nombre y otra que almacene tu ciudad. Usa echo para mostrar la frase "Mi nombre es [nombre] y vivo en [ciudad]".
        </div>

        <form method="POST" action="">
            <label for="nombre">¿Cuál es tu nombre?</label>
            <input type="text" name="nombre" id="nombre" required 
                   value="<?php echo isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : ''; ?>" 
                   placeholder="Ej: Jorge">

            <label for="ciudad">¿En qué ciudad vives?</label>
            <input type="text" name="ciudad" id="ciudad" required 
                   value="<?php echo isset($_POST['ciudad']) ? htmlspecialchars($_POST['ciudad']) : ''; ?>" 
                   placeholder="Ej: Madrid">
            
            <button type="submit">Generar Frase</button>
        </form>

        <?php
        // Verificamos si se enviaron los datos
        if (isset($_POST['nombre']) && isset($_POST['ciudad'])) {
            
            // Leemos las variables aplicando htmlspecialchars por seguridad
            $nombre = htmlspecialchars($_POST['nombre']);
            $ciudad = htmlspecialchars($_POST['ciudad']);

            // Mostramos el resultado
            echo "<div class='separador'></div>";
            echo "<div class='resultado'>";
            echo "Mi nombre es <span class='destacado'>$nombre</span> y vivo en <span class='destacado'>$ciudad</span>.";
            echo "</div>";
        }
        ?>
    </div>

</body>
</html>