<?php

require_once('../Model/Categoria.php');
include('db.php');

$nombre = $_POST["nombre"];

$insertar = new Categoria('', $nombre);

$consultar_categoria = mysqli_query($conn, $insertar->verificarCategoria());
$filas = mysqli_num_rows($consultar_categoria);

if ($filas > 0) {

    header("location:../View/insertarCategoria.php?fallo=true");
} else {

    $resultado = mysqli_query($conn, $insertar->insertarCategoria());

    if (!$resultado) {

        header("location:../View/insertarCategoria.php");
    } else {

        header("location:../View/AdminElementos.php");
    }
}
