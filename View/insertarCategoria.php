<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../View/css/registro.css">
    <link rel="icon" type="image/svg" href="./Imagenes/facturacion.svg" />
    <title>Nueva Categoría</title>
</head>

<body>
    <header>
        <a href="AdminElementos.php"> <button type="button" class="bot">Atrás</button></a>
        <h1>Category Register</h1>
    </header>
    <div>
        <form action="../Controller/insertarcategoria.php" method="POST">
            <fieldset>
                <legend>Registrar Categoría</legend>

                <label for="nombre">Nombre Categoría <a>*</a></label>
                <?php
                if (isset($_GET["fallo"]) && $_GET["fallo"] == 'true') {
                    echo "<div style='color:red'>Esta categoria ya se encuentra registrada</div>";
                }
                ?>
                <input type="text" name="nombre" id="nombre" class="la" placeholder="Bebidas" pattern="[A-Z a-z]{1,30}" title="No uses numeros ni caracteres especiales" required>
                <br>
                <br>
                <center>
                    <input type="submit" value="Guardar" class="btn">
                </center>



            </fieldset>
        </form>
    </div>
</body>

</html>