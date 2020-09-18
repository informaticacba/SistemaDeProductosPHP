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

$ivatotal = (($precio * $valoriva) + $precio) - $precio;

$insertar = new Productos($codigo, $nombre, $descripcion, $categoria, $proveedor, $precio, $tipoiva, $ivatotal, $cantidad);

$consultar_producto = mysqli_query($conn, $insertar->verificarProducto());
$filas = mysqli_num_rows($consultar_producto);

if ($filas > 0) {

    header("location:../View/insertarProducto.php?fallo=true");
} else {

    $resultado = mysqli_query($conn, $insertar->insertarProducto());

    if (!$resultado) {

        header("location:../View/insertarProducto.php");
    } else {

        header("location:../View/AdminProductos.php");
    }
}
