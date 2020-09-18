<?php


require_once('../Model/Proveedor.php');
include('db.php');

$cedula = $_POST["cedula"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"];
$ciudad = $_POST["ciudad"];


$insertar = new Proveedor($cedula, $nombre, $apellido, $correo, $telefono, $direccion, $ciudad);

$consultar_proveedor = mysqli_query($conn, $insertar->verificarProveedor());
$filas = mysqli_num_rows($consultar_proveedor);
if ($filas > 0) {

    header("location:../View/insertarProveedor.php?fallo=true");
} else {

    $resultado = mysqli_query($conn, $insertar->insertarProveedor());

    if (!$resultado) {

        header("location:../View/insertarProveedor.php");
    } else {

        header("location:../View/AdminElementos.php");
    }
}





mysqli_free_result($resultado);
mysqli_close($conn);
