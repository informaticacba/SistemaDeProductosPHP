
<?php

require_once('../Model/Productos.php');
include('db.php');

$id = $_GET['id'];

$eliminar = new Productos($id, '', '', '', '', '', '', '', '');

$respuesta = mysqli_query($conn, $eliminar->eliminarProductos());


header("location:../View/AdminProductos.php");

?>