<!DOCTYPE html>
<html lang="en">
<head>
    <title>CODIGO DE BARRAS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="JsBarcode.all.min"></script>
</head>
<body>
    <div class = container>
        <h1>INVENTARIO PRODUCTOS</h1>
        <div class="row">
            <div class="col-sm-4">
                <form action="php/insertar.php" method="pos">
                    <label>Nombre</label>
                    <input type="text" name="codigo"class="form-control">
                    <br>
                    <button type="submit" class="btn btn-primary">Crear codigo</button>
                </form>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-10">
                <?php require_once "tabla.php"; ?>
            </div>
        </div>
    </div>
</body>
</html>