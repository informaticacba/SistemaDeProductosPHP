<?php

class Usuario
{

    private $_cedula, $_nombre, $_apellido, $_correo, $_telefono, $_usuario, $_contraseña;

    public function __construct($cedula, $nombre, $apellido, $correo, $telefono, $usuario, $contraseña)
    {
        $this->_cedula = $cedula;
        $this->_nombre = $nombre;
        $this->_apellido = $apellido;
        $this->_correo = $correo;
        $this->_telefono = $telefono;
        $this->_usuario = $usuario;
        $this->_contraseña = $contraseña;
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
    public function getUsuario()
    {

        return $this->_usuario;
    }
    public function setUsuario($usuario)
    {
        $this->_usuario = $usuario;
    }

    public function getContraseña()
    {

        return $this->_contraseña;
    }
    public function setContraseña($contraseña)
    {
        $this->_contraseña = $contraseña;
    }

    public function consultarUsuario()
    {

        $usuario = $this->getUsuario();
        $consulta = "SELECT * FROM usuarios WHERE user_usuario='$usuario'";

        return $consulta;
    }

    public function consultarContraseña()
    {


        $contraseña = $this->getContraseña();
        $consulta = "SELECT * FROM usuarios WHERE contraseña_usuario='$contraseña'";

        return $consulta;
    }


    public function verificarUsuario()
    {

        $usuario = $this->getUsuario();
        $contraseña = $this->getContraseña();
        $consulta = "SELECT * FROM usuarios WHERE user_usuario='$usuario' and contraseña_usuario='$contraseña'";

        return $consulta;
    }

    public function insertarUsuario()
    {

        $cedula = $this->getCedula();
        $nombre = $this->getNombre();
        $apellido = $this->getApellido();
        $correo = $this->getCorreo();
        $telefono = $this->getTelefono();
        $usuario = $this->getUsuario();
        $contraseña = $this->getContraseña();

        $consulta = "INSERT INTO usuarios (numerocedula_usuario,nombre_usuario,apellido_usuario,correo_usuario,telefono_usuario,user_usuario,contraseña_usuario)
    VALUES ('$cedula','$nombre','$apellido','$correo','$telefono','$usuario','$contraseña')";

        return $consulta;
    }
}
