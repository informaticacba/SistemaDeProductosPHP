<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" type="image/svg" href="./Imagenes/facturacion.svg" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <title>Login</title>

</head>

<body>
    <header>
        <h1>System Administration</h1>
    </header>

    <div class="caja">
        <Form action="../Controller/usuariologin.php" method="POST">

            <h2>Login</h2>
            <label for="user">Usuario</label>
            <input type="text" placeholder="carlos9870" name="usuario" id="user" required>
            <br>
            <label for="password">Contraseña</label>
            <input type="password" placeholder="**********" name="contraseña" id="password" required>
            <br>
            <br>

            <input type="submit" value="Ingresar" class="btn btn-success btn-lg ">
            <br>
            <br>
            <a href="registro.php">No tengo una cuenta</a>

            <?php
            if (isset($_GET["fallo"]) && $_GET["fallo"] == 'true') {
                echo "<div style='color:red'>Usuario y/o Contraseña invalidos </div>";
            }
            ?>
        </Form>
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