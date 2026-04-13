<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12 - Carrito de Compra</title>
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
            border-bottom: 2px solid #27ae60; /* Verde esmeralda comercial */
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
            border-left: 4px solid #27ae60;
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
            border-color: #27ae60;
            outline: none;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #27ae60;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1em;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #219a52;
        }
        .separador {
            border-top: 1px solid #ecf0f1;
            margin: 25px 0;
        }
        
        /* Cajas de resultado */
        .resultado-caja {
            background-color: #e8f8f5;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            border: 1px solid #a3e4d7;
        }
        .resumen {
            color: #7f8c8d;
            font-size: 0.9em;
            margin-bottom: 10px;
        }
        .total {
            font-size: 1.8em;
            color: #1e8449;
            font-weight: bold;
        }
        .etiqueta-descuento {
            display: inline-block;
            background-color: #f1c40f;
            color: #873600;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 0.8em;
            font-weight: bold;
            margin-bottom: 10px;
            text-transform: uppercase;
        }
    </style>
</head>
<body>

    <div class="tarjeta-ejercicio">
        <h2 class="titulo">🛒 Ejercicio 12</h2>
        
        <div class="enunciado">
            Crea una variable con la cantidad de productos y otra con el precio. Usa un operador ternario para aplicar un 20% de descuento si compra más de 10. Muestra el total.
        </div>

        <form method="POST" action="">
            <div class="fila-formulario">
                <div class="grupo-input">
                    <label for="cantidad">Cantidad:</label>
                    <input type="number" step="1" min="1" name="cantidad" id="cantidad" required 
                           value="<?php echo isset($_POST['cantidad']) ? $_POST['cantidad'] : '1'; ?>">
                </div>
                <div class="grupo-input">
                    <label for="precio">Precio unidad (€):</label>
                    <input type="number" step="0.01" min="0" name="precio" id="precio" required 
                           value="<?php echo isset($_POST['precio']) ? $_POST['precio'] : '10.00'; ?>">
                </div>
            </div>
            
            <button type="submit">Calcular Total</button>
        </form>

        <?php
        if (isset($_POST['cantidad']) && isset($_POST['precio'])) {
            
            // 1. Leemos las variables
            $cantidad = (int)$_POST['cantidad'];
            $precio = (float)$_POST['precio'];
            
            // 2. Realizamos tus operaciones con el ternario
            $resultado = ($cantidad <= 10) ? $cantidad * $precio : ($cantidad * $precio) * 0.8;
            
            // Formateamos el precio para que tenga siempre 2 decimales
            $resultado_formateado = number_format($resultado, 2, ',', '.');
            $precio_formateado = number_format($precio, 2, ',', '.');

            // 3. Imprimimos el ticket de compra
            echo "<div class='separador'></div>";
            echo "<div class='resultado-caja'>";
            
            // Pequeño extra visual: Si hay descuento, mostramos una etiqueta
            if ($cantidad > 10) {
                echo "<div class='etiqueta-descuento'>¡20% de Descuento Aplicado!</div>";
            }
            
            echo "<div class='resumen'>Comprando <strong>$cantidad</strong> uds. a <strong>$precio_formateado €</strong>/ud.</div>";
            echo "<div class='total'>Total: $resultado_formateado €</div>";
            echo "</div>";
        }
        ?>
    </div>

</body>
</html>