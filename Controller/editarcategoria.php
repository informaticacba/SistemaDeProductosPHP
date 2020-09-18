<?php

require_once('../Model/Categoria.php');
include('db.php');

$codigo = $_POST["codigo"];
$nombre = $_POST["nombre"];

$actaulizar = new Categoria($codigo, $nombre);

$respuesta = mysqli_query($conn, $actaulizar->actualizarCategoria());


if (!$respuesta) {

    header("location:../View/editarCategoria.php");
} else {

    header("location:../View/AdminElementos.php");
}
