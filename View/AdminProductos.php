<?php

include('../Controller/db.php');
require_once('../Model/Productos.php');


$traerpro = new Productos('', '', '', '', '', '', '', '', '');

$consulta = mysqli_query($conn, $traerpro->traerProducto());






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
    <title>Administrar Productos</title>
</head>

<body>
    <header>
        <h1>Administrar Productos</h1>
        <a href="home.html"> <button type="button" class="bot">Atrás</button></a>
    </header>
    <div class="ca">
        <div id="ca1">
            <h2>Productos
                <a href="insertarProducto.php">
                    <button type="button" class="btn btn-primary">Nuevo Producto</button>
                </a>

            </h2>

            <table class="table">
                <thead class="thead1">
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre </th>
                        <th>Descripción </th>
                        <th>Categoría</th>
                        <th>Proveedor </th>
                        <th>Precio Unidad </th>
                        <th>Tipo iva </th>
                        <th>Valor iva</th>
                        <th>Cantidad Inventario</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    while ($filas = mysqli_fetch_assoc($consulta)) {
                    ?>
                        <tr>
                            <td><?php echo $filas['codigo_producto'] ?></td>
                            <td><?php echo $filas['nombre_producto'] ?></td>
                            <td><?php echo $filas['descripcion_producto'] ?></td>
                            <td><?php echo $filas['categoria_producto'] ?></td>
                            <td><?php echo $filas['proveedor_producto'] ?></td>
                            <td><?php echo $filas['precio_producto'] ?></td>
                            <td><?php echo $filas['tipo_iva_producto'] ?></td>
                            <td><?php echo $filas['valor_iva_producto'] ?></td>
                            <td><?php echo $filas['cantidad_producto'] ?></td>
                            <td>
                                <a href="editarProductos.php?id=<?php echo $filas['codigo_producto'] ?>"> <button type="button" class="btn btn-success">Editar</button></a>
                                <a href="../Controller/eliminarproducto.php?id=<?php echo $filas['codigo_producto'] ?>">
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