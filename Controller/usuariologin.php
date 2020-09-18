<?php

require_once('../Model/Usuario.php');
include('db.php');

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$login = new Usuario('', '', '', '', '', $usuario, $contraseña);

$resultado = mysqli_query($conn, $login->verificarUsuario());

$filas = mysqli_num_rows($resultado);


if ($filas > 0) {

   header("location:../View/home.html");
} else {


   header("location:../View/index.php?fallo=true");
}

mysqli_free_result($resultado);
mysqli_close($conn);
