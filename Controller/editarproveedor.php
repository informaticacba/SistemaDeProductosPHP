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

$consultar_proveedor = mysqli_query($conn, $insertar->actualizarProveedor());

if (!$consultar_proveedor) {

    header("location:../View/editarProveedor.php");
} else {

    header("location:../View/AdminElementos.php");
}
