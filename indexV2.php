<<!DOCTYPE html>
<html>
<head>
    <title>Código de barras</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="JsBarcode.all.min.js"></script>
    <style>
        /* Estilos minimalistas */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .main-container {
            display: flex;
            padding: 20px;
        }
        .container {
            flex: 1;
            max-width: 500px;
            margin-right: 20px;
        }
        h2 {
            font-size: 1.5em;
            color: #343a40;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }
        .card {
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 4px;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .btn-custom {
            background-color: #28a745;
            border-color: #28a745;
            color: white;
            font-size: 1em;
            padding: 10px 20px;
            border-radius: 4px;
            transition: background-color 0.3s, border-color 0.3s;
            display: block;
            width: 100%;
            text-align: center;
        }
        .btn-custom:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
        label {
            font-size: 1em;
            color: #495057;
        }
        input.form-control {
            border-radius: 4px;
            padding: 10px;
            font-size: 1em;
        }
        hr {
            margin: 15px 0;
            border-top: 1px solid #dee2e6;
        }
        .table-container {
            flex: 1;
            overflow-x: auto;
        }
    </style>
</head>
<body>

    <div class="main-container">
        <div class="container">
            <h2>INVENTARIO</h2>
            <div class="card">
                <form id="productForm">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control">
                    </div>
                    <button class="btn btn-custom" type="submit">Generar Producto</button>
                    <hr>
                </form>
            </div>
        </div>
        <div class="table-container" id="productTable">
            <?php 
                require "tabla.php";
            ?>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#productForm').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: 'php/insertar.php',
                    data: $(this).serialize(),
                    success: function(response) {
                        // Actualiza la tabla de productos
                        $('#productTable').load('tabla.php');
                        // Limpia el campo de texto y mantiene el foco
                        $('#nombre').val('').focus();
                    }
                });
            });
        });
    </script>
</body>
</html>
