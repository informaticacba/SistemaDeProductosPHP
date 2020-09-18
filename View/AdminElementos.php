<?php

include('../Controller/db.php');
require_once('../Model/Proveedor.php');
require_once('../Model/Categoria.php');

$traerprov = new Proveedor("", "", "", "", "", "", "",);

$resultado = mysqli_query($conn, $traerprov->traerProveedor());

$traercat = new Categoria('', '');

$consulta = mysqli_query($conn, $traercat->traerCategoria());


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/adminelementos.css">
    <link rel="icon" type="image/svg" href="./Imagenes/facturacion.svg" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Administrar Elementos</title>
</head>

<body>

    <header>

        <h1>Administrar Elementos</h1>
        <a href="home.html"> <button type="button" class="bot">Atrás</button></a>
    </header>
    <div class="ca">
        <div id="ca1">
            <h2>Proveedores
                <a href="insertarProveedor.php">
                    <button type="button" class="btn btn-primary">Nuevo Proveedor</button>
                </a>

            </h2>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre </th>
                        <th>Apellido </th>
                        <th>Correo </th>
                        <th>Teléfono </th>
                        <th>Dirección </th>
                        <th>Ciudad </th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($filas = mysqli_fetch_assoc($resultado)) {

                    ?>
                        <tr>
                            <td><?php echo $filas['identificacion_proveedor'] ?></td>
                            <td><?php echo $filas['nombre_proveedor'] ?></td>
                            <td><?php echo $filas['apellido_proveedor'] ?></td>
                            <td><?php echo $filas['correo_proveedor'] ?></td>
                            <td><?php echo $filas['telefono_proveedor'] ?></td>
                            <td><?php echo $filas['direccion_proveedor'] ?></td>
                            <td><?php echo $filas['ciudad_proveedor'] ?></td>
                            <td>
                                <a href="editarProveedor.php?id=<?php echo $filas['identificacion_proveedor'] ?>"><button type="button" class="btn btn-success">Editar</button></a>
                                <a href="../Controller/eliminarproveedor.php?id=<?php echo $filas['identificacion_proveedor'] ?>"><button type="button" class="btn btn-danger">Eliminar</button></a>



                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
        <br>
        <hr border="1px">
        <div id="ca2">
            <h2>Categorías
                <a href="insertarCategoria.php">
                    <button type="button" class="btn btn-primary">Nueva Categoría</button>
                </a>

            </h2>
            <table class="table">
                <thead class="thead">
                    <tr>
                        <th>ID Categoría</th>
                        <th>Nombre Categoría</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($filas = mysqli_fetch_assoc($consulta)) {

                    ?>
                        <tr>
                            <td><?php echo $filas['id_categoria'] ?></td>
                            <td><?php echo $filas['nombre_categoria'] ?></td>
                            <td>
                                <a href="editarCategoria.php?id=<?php echo $filas['id_categoria'] ?>">
                                    <button type="button" class="btn btn-success">Editar</button>
                                </a>
                                <a href="../Controller/eliminarcategoria.php?id=<?php echo $filas['id_categoria'] ?>">

                                    <button type="button" class="btn btn-danger">Eliminar</button>
                                </a>

                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>


</body>

</html>