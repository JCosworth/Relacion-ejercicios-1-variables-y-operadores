<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10 - Mayor de Edad</title>
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
            border-bottom: 2px solid #8e44ad; /* Morado amatista */
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
            border-left: 4px solid #8e44ad;
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
            margin-bottom: 20px;
        }
        input[type="number"]:focus {
            border-color: #8e44ad;
            outline: none;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #8e44ad;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1em;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #732d91;
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
            font-size: 1.2em;
            font-weight: bold;
        }
        .mayor {
            background-color: #f4ecf7;
            color: #732d91;
            border: 1px solid #d7bde2;
        }
        .menor {
            background-color: #fef5e7;
            color: #d35400;
            border: 1px solid #fad7a1;
        }
    </style>
</head>
<body>

    <div class="tarjeta-ejercicio">
        <h2 class="titulo">Ejercicio 10</h2>
        
        <div class="enunciado">
            Crea una variable que almacene la edad de una persona y usa un operador ternario para determinar si es mayor de edad o no.
        </div>

        <form method="POST" action="">
            <label for="edad">Introduce la edad:</label>
            <input type="number" step="1" min="0" name="edad" id="edad" required 
                   value="<?php echo isset($_POST['edad']) ? $_POST['edad'] : '18'; ?>">
            
            <button type="submit">Verificar Edad</button>
        </form>

        <?php
        if (isset($_POST['edad'])) {
            
            // 1. Leemos la variable
            $edad = (int)$_POST['edad'];
            
            // 2. Usamos tu operador ternario para el texto...
            $resultado = ($edad >= 18) ? "MAYOR DE EDAD" : "MENOR DE EDAD";
            
            // ... y lo usamos de nuevo para asignar la clase CSS correcta
            $clase_css = ($edad >= 18) ? "mayor" : "menor";

            // 3. Imprimimos
            echo "<div class='separador'></div>";
            echo "<div class='resultado-caja $clase_css'>";
            echo "Con una edad de $edad años eres:<br><strong>$resultado</strong>";
            echo "</div>";
        }
        ?>
    </div>

</body>
</html>