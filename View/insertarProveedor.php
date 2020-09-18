<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../View/css/registro.css">
    <link rel="icon" type="image/svg" href="./Imagenes/facturacion.svg" />
    <title>Nuevo Proveedor</title>
</head>

<body>
    <header>
        <a href="AdminElementos.php"> <button type="button" class="bot">Atrás</button></a>
        <h1>Provider Register</h1>
    </header>
    <div>
        <form action="../Controller/insertarproveedor.php" method="POST">
            <fieldset>
                <legend>Registrar Proveedor</legend>
                <label for="numero">Numero Documento <a>*</a></label>
                <?php
                if (isset($_GET["fallo"]) && $_GET["fallo"] == 'true') {
                    echo "<div style='color:red'>Proveedor con este documento  ya se encuentra registrado</div>";
                }
                ?>
                <input type="number" min="1" name="cedula" id="numero" class="la" placeholder="1000571914" required>
                <br>
                <br>
                <label for="nombre">Nombre <a>*</a></label>
                <input type="text" name="nombre" id="nombre" class="la" placeholder="Carlos" pattern="[A-Z a-z]{1,10}" title="No uses numeros ni caracteres especiales" required>
                <br>
                <br>
                <label for="apellido">Apellido <a>*</a></label>
                <input type="text" name="apellido" id="apellido" class="la" placeholder="Melo" pattern="[A-Z a-z]{1,10}" title="No uses numeros ni caracteres especiales" required>
                <br>
                <br>
                <label for="correo">Correo <a>*</a></label>
                <input type="email" name="correo" id="correo" class="la" placeholder="carlos@gmail.com" required>
                <br>
                <br>
                <label for="telefono">Teléfono <a>*</a></label>
                <input type="number" name="telefono" min="1" id="telefono" class="la" placeholder="314192292" required>
                <br>
                <br>
                <label for="direccion">Dirección<a>*</a></label>

                <input type="text" name="direccion" id="direccion" class="la" placeholder="Carrera 10 #23-15" required>

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
                    <input type="submit" value="Guardar" class="btn">
                </center>



            </fieldset>
        </form>
    </div>

</body>

</html>