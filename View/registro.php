<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../View/css/registro.css" type="text/css">
    <link rel="icon" type="image/svg" href="./Imagenes/facturacion.svg" />
    <title>Registrar</title>
</head>

<body>
    <header>
        <a href="index.php"> <button type="button" class="bot">Atrás</button></a>

        <h1>Register User</h1>
    </header>
    <div>
        <form action="../Controller/usuarioregistro.php" method="POST">
            <fieldset>
                <legend>Registro</legend>
                <label for="numero">Numero Documento <a>*</a></label>
                <input type="number" min="1" name="cedula" id="numero" class="la" placeholder="1000571914" required>
                <br>
                <br>
                <label for="nombre">Nombre <a>*</a></label>
                <input type="text" name="nombre" id="nombre" class="la" placeholder="Carlos" pattern="[A-Z a-z]{1,50}" title="No uses numeros ni caracteres especiales" required>
                <br>
                <br>
                <label for="apellido">Apellido <a>*</a></label>
                <input type="text" name="apellido" id="apellido" class="la" placeholder="Melo" pattern="[A-Z a-z]{1,50}" title="No uses numeros ni caracteres especiales" required>
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
                <label for="usuario">Usuario<a>*</a></label>
                <?php
                if (isset($_GET["fallo"]) && $_GET["fallo"] == 'true') {
                    echo "<div style='color:red'>Usuario ya se encuentra registrado</div>";
                }
                ?>
                <input type="text" name="usuario" id="usuario" class="la" placeholder="carlos07" maxlength="10" required>

                <br>
                <br>
                <label for="contraseña">Contraseña<a>*</a> </label>
                <?php
                if (isset($_GET["fallos"]) && $_GET["fallos"] == 'true') {
                    echo "<div style='color:red'>Contraseña ya se encuentra registrada</div>";
                }
                ?>
                <input type="password" name="contraseña" id="contraseña" class="la" placeholder="*********" maxlength="10" required>

                <br><br>
                <center>
                    <input type="submit" value="Registrarme" class="btn">
                </center>



            </fieldset>
        </form>
    </div>

    <footer>
        <h3>!Sígueme!</h3>
        <a href="https://www.google.com/intl/es-419/gmail/about/#"><img src="./Imagenes/gmail.png"></a>
        <a href="https://twitter.com/?lang=es"><img src="./Imagenes/gorjeo.png"></a>
        <a href="https://es-la.facebook.com/"><img src="./Imagenes/facebook.png"></a>
        <a href="https://www.youtube.com/?gl=ES&hl=es"><img src="./Imagenes/youtube.png"></a>




    </footer>
</body>

</html>