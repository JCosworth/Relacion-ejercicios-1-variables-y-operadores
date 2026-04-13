<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9 - Permiso de Conducir</title>
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
            border-bottom: 2px solid #f39c12; /* Color amarillo autoescuela */
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
            border-left: 4px solid #f39c12;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #34495e;
            font-weight: bold;
        }
        input[type="number"], select {
            width: 100%;
            padding: 12px;
            border: 1px solid #bdc3c7;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 1em;
            margin-bottom: 20px;
            background-color: #fff;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #f39c12;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1em;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #d68910;
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
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        .puede-conducir {
            background-color: #e8f5e9;
            color: #2e7d32;
            border: 2px solid #81c784;
        }
        .no-puede {
            background-color: #ffebee;
            color: #c62828;
            border: 2px solid #e57373;
        }
    </style>
</head>
<body>

    <div class="tarjeta-ejercicio">
        <h2 class="titulo">Ejercicio 9</h2>
        
        <div class="enunciado">
            Crea una variable que almacene la edad de una persona y otra que almacene si tiene permiso de conducir. Muestra si puede conducir.
        </div>

        <form method="POST" action="">
            <label for="edad">Edad de la persona:</label>
            <input type="number" step="1" min="0" name="edad" id="edad" required 
                   value="<?php echo isset($_POST['edad']) ? $_POST['edad'] : '18'; ?>">
            
            <label for="permiso">¿Tiene permiso de conducir?</label>
            <select name="permiso" id="permiso" required>
                <option value="si" <?php echo (isset($_POST['permiso']) && $_POST['permiso'] == 'si') ? 'selected' : ''; ?>>Sí</option>
                <option value="no" <?php echo (isset($_POST['permiso']) && $_POST['permiso'] == 'no') ? 'selected' : ''; ?>>No</option>
            </select>
            
            <button type="submit">Comprobar</button>
        </form>

        <?php
        if (isset($_POST['edad']) && isset($_POST['permiso'])) {
            
            // 1. Leemos las variables
            $edad = (int)$_POST['edad'];
            $permiso = $_POST['permiso']; // Solo puede valer "si" o "no"
            
            // 2. Realizamos la comprobación y asignamos las clases visuales
            echo "<div class='separador'></div>";

            if ($edad >= 18 && $permiso === "si") {
                echo "<div class='resultado-caja puede-conducir'>🟢 PUEDE CONDUCIR</div>";
            } else {
                echo "<div class='resultado-caja no-puede'>🔴 NO PUEDE CONDUCIR</div>";
            }
        }
        ?>
    </div>

</body>
</html>