
<?php

require_once('../Model/Categoria.php');
include('db.php');

$id = $_GET['id'];

$eliminar = new Categoria($id, '');

$respuesta = mysqli_query($conn, $eliminar->eliminarCategoria());


header("location:../View/AdminElementos.php");

?>