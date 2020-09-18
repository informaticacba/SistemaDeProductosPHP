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
    <link rel="stylesheet" href="../View/css/adminproductos.css">
    <link rel="icon" type="image/svg" href="./Imagenes/facturacion.svg" />
    <title>Nuevo Producto</title>
</head>

<body>
    <header>
        <a href="AdminProductos.php"> <button type="button" class="bot">Atrás</button></a>
        <h1>Product Register</h1>
    </header>
    <div>
        <form action="../Controller/insertarproducto.php" method="POST">
            <fieldset>
                <legend>Registrar Producto</legend>
                <label for="codigo">Codigo <a>*</a></label>
                <?php
                if (isset($_GET["fallo"]) && $_GET["fallo"] == 'true') {
                    echo "<div style='color:red'>Este codigo ya se encuentra registrado</div>";
                }
                ?>
                <input type="number" min="1" name="codigo" id="codigo" class="la" placeholder="777055888" required>
                <br>
                <br>
                <label for="nombre">Nombre <a>*</a></label>
                <input type="text" name="nombre" id="nombre" class="la" placeholder="Cocacola 120ml" required>
                <br>
                <br>
                <label for="descripcion">Descripción <a>*</a></label>
                <textarea name="descripcion" id="descripcion" class="la" placeholder="Los juguetes son azules" pattern="[A-Z a-z]{1,10}" title="No uses numeros ni caracteres especiales" required>  </textarea>

                <br>
                <br>
                <label for="categoria">Categoría <a>*</a></label>
                <select id="categoria" name="categoria" class="la" required>
                    <option value="">Selecciona una categoria</option>
                    <?php
                    while ($filas = mysqli_fetch_assoc($consulta)) {

                    ?>
                        <option value="<?php echo $filas['nombre_categoria'] ?>"><?php echo $filas['nombre_categoria'] ?></option>
                    <?php } ?>

                </select>
                <br>
                <br>
                <label for="proveedor">Proveedor <a>*</a></label>
                <select id="proveedor" name="proveedor" class="la" required>

                    <option value="">Selecciona un proveedor</option>
                    <?php
                    while ($filas = mysqli_fetch_assoc($resultado)) {

                    ?>
                        <option value="<?php echo $filas['nombre_proveedor'] ?>"><?php echo $filas['nombre_proveedor'] ?></option>

                    <?php } ?>
                </select>
                <br>
                <br>
                <label for="precio">Precio unidad<a>*</a></label>

                <input type="number" min="1" name="precio" id="precio" class="la" placeholder="250000" required>

                <br>
                <br>
                <label for="tipoiva">Tipo Iva<a>*</a> </label>
                <select id="tipoiva" name="tipoiva" class="la" required>
                    <option value="">Selecciona el tipo de iva</option>
                    <option value="Exento">Exento 0%</option>
                    <option value="IVA G">IVA G 12%</option>
                    <option value="IVA R">IVA R 8%</option>
                    <option value="IVA A">IVA A 22%</option>
                </select>

                <br>
                <br>
                <label for="valoriva">Valor Iva<a>*</a> </label>
                <select id="valoriva" name="valoriva" class="la" required>
                    <option value="">Selecciona el valor del iva</option>
                    <option value="0.00">0.00</option>
                    <option value="0.12">0.12</option>
                    <option value="0.08">0.08</option>
                    <option value="0.22">0.22</option>
                </select>

                <br>
                <br>
                <label for="cantidad">Cantidad Inventario<a>*</a></label>

                <input type="number" min="1" name="cantidad" id="cantidad" class="la" placeholder="150" required>

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