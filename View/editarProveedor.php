<?php
include('../Controller/db.php');
require_once('../Model/Proveedor.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $consulta = new  Proveedor($id, '', '', '', '', '', '');

    $resultado = mysqli_query($conn, $consulta->verificarProveedor());
    while ($fila = mysqli_fetch_assoc($resultado)) {









?>

        <!DOCTYPE html>
        <html>

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../View/css/registro.css">
            <link rel="icon" type="image/svg" href="./Imagenes/facturacion.svg" />
            <title>Editar Proveedor</title>
        </head>

        <body>
            <header>
                <a href="AdminElementos.php"> <button type="button" class="bot">Atrás</button></a>
                <h1>Provider Edit</h1>
            </header>
            <div>
                <form action="../Controller/editarproveedor.php" method="POST">
                    <fieldset>
                        <legend>Editar Proveedor</legend>

                        <input type="hidden" name="cedula" id="cedula" value="<?php echo $fila['identificacion_proveedor'] ?>">
                        <br>
                        <br>
                        <label for="nombre">Nombre <a>*</a></label>
                        <input type="text" name="nombre" value="<?php echo $fila['nombre_proveedor'] ?>" id="nombre" class="la" placeholder="Carlos" pattern="[A-Z a-z]{1,10}" title="No uses numeros ni caracteres especiales" required>
                        <br>
                        <br>
                        <label for="apellido">Apellido <a>*</a></label>
                        <input type="text" name="apellido" value="<?php echo $fila['apellido_proveedor'] ?>" id="apellido" class="la" placeholder="Melo" pattern="[A-Z a-z]{1,10}" title="No uses numeros ni caracteres especiales" required>
                        <br>
                        <br>
                        <label for="correo">Correo <a>*</a></label>
                        <input type="email" name="correo" value="<?php echo $fila['correo_proveedor'] ?>" id="correo" class="la" placeholder="carlos@gmail.com" required>
                        <br>
                        <br>
                        <label for="telefono">Teléfono <a>*</a></label>
                        <input type="number" name="telefono" value="<?php echo $fila['telefono_proveedor'] ?>" min="1" id="telefono" class="la" placeholder="314192292" required>
                        <br>
                        <br>
                        <label for="direccion">Dirección<a>*</a></label>

                        <input type="text" name="direccion" value="<?php echo $fila['direccion_proveedor'] ?>" id="direccion" class="la" placeholder="Carrera 10 #23-15" required>

                        <br>
                        <br>
                        <label for="ciudad">Ciudad<a>*</a> </label>
                        <select id="ciudad" name="ciudad" class="la" required>

                            <option value="">Selecciona una ciudad</option>
                            <option value="Bogota D.C.">Bogotá D.C.</option>
                            <option value="Barranquilla">Barranquilla</option>
                            <option value="Cali">Cali</option>
                            <option value="Medellin">Medellín</option>
                        </select>

                        <br><br>
                        <center>
                            <input type="submit" value="Actualizar" class="btn">
                        </center>



                    </fieldset>
                </form>
        <?php }
}
        ?>
            </div>

        </body>

        </html>