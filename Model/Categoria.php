<?php
class Categoria
{

    private $_codigo, $_nombre;


    public function __construct($codigo, $nombre)
    {
        $this->_codigo = $codigo;
        $this->_nombre = $nombre;
    }

    public function getCodigo()
    {

        return $this->_codigo;
    }
    public function setCodigo($codigo)
    {

        $this->_codigo = $codigo;
    }

    public function getNombre()
    {

        return $this->_nombre;
    }

    public function setNombre($nombre)
    {

        $this->_nombre = $nombre;
    }

    public function traerCategoria()
    {


        $consulta = "SELECT * FROM categorias ";

        return $consulta;
    }


    public function verificarCategoria()
    {

        $nombre = $this->getNombre();

        $consulta = "SELECT * FROM categorias WHERE nombre_categoria='$nombre'";

        return $consulta;
    }

    public function buscarCategoria()
    {

        $codigo = $this->getCodigo();

        $consulta = "SELECT * FROM categorias WHERE id_categoria ='$codigo'";

        return $consulta;
    }

    public function insertarCategoria()
    {


        $nombre = $this->getNombre();


        $consulta = "INSERT INTO categorias (nombre_categoria)VALUES ('$nombre')";

        return $consulta;
    }
    public function actualizarCategoria()
    {

        $codigo = $this->getCodigo();
        $nombre = $this->getNombre();


        $consulta = "UPDATE  categorias SET nombre_categoria='$nombre' WHERE id_categoria ='$codigo' ";

        return $consulta;
    }


    public function eliminarCategoria()
    {


        $codigo = $this->getCodigo();

        $consulta = "DELETE FROM categorias WHERE id_categoria ='$codigo'";

        return $consulta;
    }
}
