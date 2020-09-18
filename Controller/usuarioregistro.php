<?php

require_once('../Model/Usuario.php');
include('db.php');

$cedula = $_POST["cedula"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];

$registro = new Usuario($cedula, $nombre, $apellido, $correo, $telefono, $usuario, $contraseña);




$consultar_usuario = mysqli_query($conn, $registro->consultarUsuario());
$filas = mysqli_num_rows($consultar_usuario);

$consultar_contraseña = mysqli_query($conn, $registro->consultarContraseña());
$fila = mysqli_num_rows($consultar_contraseña);
if ($filas > 0 && $fila > 0) {

    header("location:../View/registro.php?fallo=true&&fallos=true");
} elseif ($filas > 0) {

    header("location:../View/registro.php?fallo=true");
} elseif ($fila > 0) {

    header("location:../View/registro.php?fallos=true");
} else {
    $resultado = mysqli_query($conn, $registro->insertarUsuario());

    if (!$resultado) {

        header("location:../View/registro.php");
    } else {

        header("location:../View/home.html");
    }
}


mysqli_free_result($resultado);
mysqli_close($conn);
