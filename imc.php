<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13 - Calculadora IMC</title>
    <style>
        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #f4f6f9;
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
            box-shadow: 0 8px 25px rgba(0,0,0,0.05);
            max-width: 450px;
            width: 100%;
            box-sizing: border-box;
            border-top: 6px solid #17a2b8; /* Azul clínico */
        }
        .titulo {
            color: #2c3e50;
            margin-top: 0;
            border-bottom: 2px solid #e9ecef;
            padding-bottom: 10px;
        }
        .enunciado {
            color: #6c757d;
            font-size: 0.95em;
            line-height: 1.5;
            margin-bottom: 25px;
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #17a2b8;
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
            color: #495057;
            font-weight: bold;
            font-size: 0.9em;
        }
        input[type="number"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ced4da;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 1em;
            background-color: #fdfefe;
        }
        input[type="number"]:focus {
            border-color: #17a2b8;
            outline: none;
        }
        button {
            width: 100%;
            padding: 14px;
            background-color: #17a2b8;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1.05em;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #138496;
        }
        .separador {
            border-top: 1px dashed #dee2e6;
            margin: 25px 0;
        }
        
        /* Clases dinámicas de Salud */
        .resultado-caja {
            padding: 20px;
            border-radius: 8px;
            text-align: center;
        }
        .valor-imc {
            font-size: 2.2em;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .mensaje {
            font-size: 1.2em;
            font-weight: bold;
            text-transform: uppercase;
        }
        .datos-extra {
            font-size: 0.85em;
            margin-top: 15px;
            opacity: 0.8;
        }
        
        /* Colores según resultado */
        .bajo { background-color: #e0f7fa; color: #00838f; border: 1px solid #b2ebf2; }
        .sano { background-color: #e8f5e9; color: #2e7d32; border: 1px solid #c8e6c9; }
        .sobrepeso { background-color: #fff3e0; color: #ef6c00; border: 1px solid #ffe0b2; }
        .obeso { background-color: #ffebee; color: #c62828; border: 1px solid #ffcdd2; }
    </style>
</head>
<body>

    <div class="tarjeta-ejercicio">
        <h2 class="titulo">🩺 Calculadora IMC</h2>
        
        <div class="enunciado">
            Crea un programa que calcule el índice de masa corporal (IMC) dada la altura y el peso de una persona, indicando si está en un rango saludable.
        </div>

        <form method="POST" action="">
            <div class="fila-formulario">
                <div class="grupo-input">
                    <label for="peso">Peso (KG):</label>
                    <input type="number" step="0.1" min="1" name="peso" id="peso" required 
                           value="<?php echo isset($_POST['peso']) ? $_POST['peso'] : '88'; ?>">
                </div>
                <div class="grupo-input">
                    <label for="altura">Altura (m):</label>
                    <input type="number" step="0.01" min="0.5" name="altura" id="altura" required 
                           value="<?php echo isset($_POST['altura']) ? $_POST['altura'] : '1.88'; ?>">
                </div>
            </div>
            
            <button type="submit">Calcular IMC</button>
        </form>

        <?php
        if (isset($_POST['peso']) && isset($_POST['altura'])) {
            
            $peso = (float)$_POST['peso'];
            $altura = (float)$_POST['altura'];
            
            // Calculamos IMC y protegemos por si la altura es 0 (evitar error de división)
            if ($altura > 0) {
                $imc = $peso / ($altura * $altura);
                $imc_formateado = number_format($imc, 2, ',', '.');
                
                $clase_css = "";
                $mensaje = "";

                // Tu lógica de opciones genial
                if ($imc < 18.5){
                    $clase_css = "bajo";
                    $mensaje = "Pilla panceta 🥓";
                } elseif ($imc < 25){
                    $clase_css = "sano";
                    $mensaje = "Menudo tipazo tienes 😎";
                } elseif ($imc < 30){
                    $clase_css = "sobrepeso";
                    $mensaje = "De cabeza al gimnasio 🏋️‍♂️";
                } else {
                    $clase_css = "obeso";
                    $mensaje = "¡¡FANEGAS!! 🍔";
                }

                echo "<div class='separador'></div>";
                echo "<div class='resultado-caja $clase_css'>";
                    echo "<div class='valor-imc'>$imc_formateado</div>";
                    echo "<div class='mensaje'>$mensaje</div>";
                    echo "<div class='datos-extra'>Peso: $peso KG | Altura: $altura m</div>";
                echo "</div>";
            }
        }
        ?>
    </div>

</body>
</html>