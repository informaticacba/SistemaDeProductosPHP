<?php


require_once('../Model/Productos.php');
include('db.php');


$codigo = $_POST["codigo"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$categoria = $_POST["categoria"];
$proveedor = $_POST["proveedor"];
$precio = $_POST["precio"];
$tipoiva = $_POST["tipoiva"];
$valoriva = $_POST["valoriva"];
$cantidad = $_POST["cantidad"];


$editar = new Productos($codigo, $nombre, $descripcion, $categoria, $proveedor, $precio, $tipoiva, $valoriva, $cantidad);

$consultar_producto = mysqli_query($conn, $editar->actualizarProductos());

if (!$consultar_producto) {

    header("location:../View/editarProducto.php");
} else {

    header("location:../View/AdminProductos.php");
}
