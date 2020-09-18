<?php

class Proveedor
{


    private $_cedula, $_nombre, $_apellido, $_correo, $_telefono, $_direccion, $_ciudad;


    public function __construct($cedula, $nombre, $apellido, $correo, $telefono, $direccion, $ciudad)
    {
        $this->_cedula = $cedula;
        $this->_nombre = $nombre;
        $this->_apellido = $apellido;
        $this->_correo = $correo;
        $this->_telefono = $telefono;
        $this->_direccion = $direccion;
        $this->_ciudad = $ciudad;
    }

    public function getCedula()
    {

        return $this->_cedula;
    }
    public function setCedula($cedula)
    {
        $this->_cedula = $cedula;
    }
    public function getNombre()
    {

        return $this->_nombre;
    }
    public function setNombre($nombre)
    {
        $this->_nombre = $nombre;
    }
    public function getApellido()
    {

        return $this->_apellido;
    }
    public function setApellido($apellido)
    {
        $this->_apellido = $apellido;
    }
    public function getCorreo()
    {

        return $this->_correo;
    }
    public function setCorreo($correo)
    {
        $this->_correo = $correo;
    }
    public function getTelefono()
    {

        return $this->_telefono;
    }
    public function setTelefono($telefono)
    {
        $this->_telefono = $telefono;
    }
    public function getDireccion()
    {

        return $this->_direccion;
    }
    public function setDireccion($direccion)
    {
        $this->_direccion = $direccion;
    }

    public function getCiudad()
    {

        return $this->_ciudad;
    }
    public function setCiudad($ciudad)
    {
        $this->_ciudad = $ciudad;
    }



    public function traerProveedor()
    {


        $consulta = "SELECT * FROM proveedores ";

        return $consulta;
    }

    public function verificarProveedor()
    {

        $cedula = $this->getCedula();

        $consulta = "SELECT * FROM proveedores WHERE identificacion_proveedor='$cedula'";

        return $consulta;
    }


    public function insertarProveedor()
    {

        $cedula = $this->getCedula();
        $nombre = $this->getNombre();
        $apellido = $this->getApellido();
        $correo = $this->getCorreo();
        $telefono = $this->getTelefono();
        $direccion = $this->getDireccion();
        $ciudad = $this->getCiudad();

        $consulta = "INSERT INTO proveedores (identificacion_proveedor,nombre_proveedor,apellido_proveedor,correo_proveedor,telefono_proveedor,direccion_proveedor,ciudad_proveedor)
    VALUES ('$cedula','$nombre','$apellido','$correo','$telefono','$direccion','$ciudad')";

        return $consulta;
    }
    public function actualizarProveedor()
    {

        $cedula = $this->getCedula();
        $nombre = $this->getNombre();
        $apellido = $this->getApellido();
        $correo = $this->getCorreo();
        $telefono = $this->getTelefono();
        $direccion = $this->getDireccion();
        $ciudad = $this->getCiudad();

        $consulta = "UPDATE proveedores  set nombre_proveedor='$nombre',apellido_proveedor='$apellido',correo_proveedor='$correo',telefono_proveedor='$telefono',direccion_proveedor='$direccion',ciudad_proveedor='$ciudad' 
    WHERE identificacion_proveedor='$cedula' ";

        return $consulta;
    }

    public function eliminarProveedor()
    {


        $cedula = $this->getCedula();

        $consulta = "DELETE FROM proveedores WHERE  identificacion_proveedor='$cedula'";

        return $consulta;
    }
}
