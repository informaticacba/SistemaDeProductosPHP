
<?php

require_once('../Model/Proveedor.php');
include('db.php');



$id = $_GET['id'];

$eliminar = new Proveedor($id, '', '', '', '', '', '');

$respuesta = mysqli_query($conn, $eliminar->eliminarProveedor());


header("location:../View/AdminElementos.php");


?>