<?php

include('../Controller/db.php');
require_once('../Model/Productos.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $traerpro = new Productos($id, '', '', '', '', '', '', '', '');

    $consulta = mysqli_query($conn, $traerpro->verificarProducto());
    while ($fila = mysqli_fetch_assoc($consulta)) {





?>


        <!DOCTYPE html>
        <html>

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../View/css/adminproductos.css">
            <link rel="icon" type="image/svg" href="./Imagenes/facturacion.svg" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <title> Compra Productos</title>
        </head>

        <body>
            <header>
                <a href="Facturar.php"> <button type="button" class="bot">Atrás</button></a>
                <h1>Buy Product</h1>
            </header>
            <div>
                <form action="#" method="POST">
                    <fieldset>
                        <legend>Comprar Producto</legend>


                        <input type="hidden" min="1" name="codigo" value="<?php echo $fila['codigo_producto'] ?>" id="codigo" class="la">
                        <br>
                        <br>
                        <label for="nombre">Nombre <a>*</a></label>
                        <input type="text" name="nombre" value="<?php echo $fila['nombre_producto'] ?>" id="nombre" class="la" readonly onmousedown="return false;">
                        <br>
                        <br>
                        <label for="descripcion">Descripción <a>*</a></label>
                        <textarea name="descripcion" id="descripcion" class="la" placeholder="Los juguetes son azules" readonly onmousedown="return false;">
                <?php echo $fila['descripcion_producto'] ?>    
            </textarea>

                        <br>
                        <br>

                        <label for="categoria">Categoría <a>*</a></label>
                        <input type="text" name="categoria" value="<?php echo $fila['categoria_producto'] ?>" id="categoria" class="la" readonly onmousedown="return false;">
                        <br>
                        <br>


                        <label for="precio">Precio Unidad<a>*</a></label>

                        <input type="text" name="precio" value="<?php echo $fila['precio_producto'] ?>" id="precio" class="la" readonly onmousedown="return false;">

                        <br>
                        <br>
                        <label for="tipoiva">Tipo Iva<a>*</a> </label>
                        <input type="text" name="tipoiva" value="<?php echo $fila['tipo_iva_producto'] ?>" id="tipoiva" class="la" readonly onmousedown="return false;">

                        <br>
                        <br>
                        <label for="valoriva">Valor Iva<a>*</a> </label>
                        <input type="text" name="valoriva" value="<?php echo $fila['valor_iva_producto'] ?>" id="valoriva" class="la" readonly onmousedown="return false;">


                        <br>
                        <br>
                        <label for="cantidad">Cantidad Disponible<a>*</a></label>

                        <input type="text" name="cantidad" value="<?php echo $fila['cantidad_producto'] ?>" id="cantidad" class="la" readonly onmousedown="return false;">

                        <br>
                        <br>
                        <label for="compra">Cantidad A Comprar<a>*</a></label>

                        <input type="number" min="1" max="<?php echo $fila['cantidad_producto'] ?>" name="compra" id="compra" class="la" placeholder="5" required>

                        <br>
                        <br>


                        <center>
                            <input type="submit" name="envio" value="Facturar" class="btn" id="boton">

                            <?php


                            if (isset($_POST['envio'])) {

                                $precios = $_POST['precio'];
                                $cantidad = $_POST['compra'];
                                $subtotal = $precios * $cantidad;
                                $impuestos = $_POST['valoriva'];
                                $totalimpuestos = $cantidad * $impuestos;
                                $totalpago = $subtotal + $totalimpuestos;

                                echo "<h2 class='hd'> Subtotal:  {$subtotal} </h2>";
                                echo "<h2 class='hd'> Total Impuestos:  {$totalimpuestos}</h2>";
                                echo "<h2 class='hd'> Total A Pagar:  {$totalpago}</h2>";
                            }

                            ?>


                        </center>



                    </fieldset>
                </form>
        <?php }
} ?>
            </div>



        </body>

        </html>