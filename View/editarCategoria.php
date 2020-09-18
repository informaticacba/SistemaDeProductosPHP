<?php

include('../Controller/db.php');
require_once('../Model/Categoria.php');

if (isset($_GET['id'])) {


    $id = $_GET['id'];

    $consulta = new Categoria($id, '');

    $resultado = mysqli_query($conn, $consulta->buscarCategoria());

    while ($fila = mysqli_fetch_assoc($resultado)) {



?>



        <!DOCTYPE html>
        <html>

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../View/css/registro.css">
            <link rel="icon" type="image/svg" href="./Imagenes/facturacion.svg" />
            <title>Editar Categoría</title>
        </head>

        <body>
            <header>
                <a href="AdminElementos.php"> <button type="button" class="bot">Atrás</button></a>
                <h1>Category Register</h1>
            </header>
            <div>
                <form action="../Controller/editarcategoria.php" method="POST">
                    <fieldset>
                        <legend>Editar Categoría</legend>

                        <input type="hidden" name="codigo" value="<?php echo $fila['id_categoria'] ?>">
                        <label for="nombre">Nombre Categoría <a>*</a></label>

                        <input type="text" name="nombre" value="<?php echo $fila['nombre_categoria'] ?>" id="nombre" class="la" placeholder="Bebidas" pattern="[A-Z a-z]{1,30}" title="No uses numeros ni caracteres especiales" required>
                        <br>
                        <br>
                        <center>
                            <input type="submit" value="Actualizar" class="btn">
                        </center>



                    </fieldset>
                </form>
        <?php
    }
}
        ?>
            </div>
        </body>

        </html>