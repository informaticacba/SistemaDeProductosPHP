<?php

class Productos
{


    private $_codigo, $_nombre, $_descripcion, $_categoria, $_proveedor, $_precio, $_tipo_iva, $_valor_iva, $_cantidad;



    public function __construct($codigo, $nombre, $descripcion, $categoria, $proveedor, $precio, $tipoiva, $valoriva, $cantidad)
    {
        $this->_codigo = $codigo;
        $this->_nombre = $nombre;
        $this->_descripcion = $descripcion;
        $this->_categoria = $categoria;
        $this->_proveedor = $proveedor;
        $this->_precio = $precio;
        $this->_tipo_iva = $tipoiva;
        $this->_valor_iva = $valoriva;
        $this->_cantidad = $cantidad;
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
    public function getDescripcion()
    {

        return $this->_descripcion;
    }
    public function setDescripcion($descripcion)
    {
        $this->_descripcion = $descripcion;
    }
    public function getCategoria()
    {

        return $this->_categoria;
    }
    public function setCategoria($categoria)
    {
        $this->_categoria = $categoria;
    }
    public function getProveedor()
    {

        return $this->_proveedor;
    }
    public function setProveedor($proveedor)
    {
        $this->_proveedor = $proveedor;
    }
    public function getPrecio()
    {

        return $this->_precio;
    }
    public function setPrecio($precio)
    {
        $this->_precio = $precio;
    }

    public function getTipoIva()
    {

        return $this->_tipo_iva;
    }
    public function setTipoIva($tipoiva)
    {
        $this->_tipo_iva = $tipoiva;
    }

    public function getValorIva()
    {

        return $this->_valor_iva;
    }
    public function setValorIva($valoriva)
    {
        $this->_valor_iva = $valoriva;
    }


    public function getCantidad()
    {

        return $this->_cantidad;
    }
    public function setCantidad($cantidad)
    {
        $this->_cantidad = $cantidad;
    }

    public function traerProducto()
    {


        $consulta = "SELECT * FROM productos ";

        return $consulta;
    }

    public function verificarProducto()
    {

        $codigo = $this->getCodigo();

        $consulta = "SELECT * FROM productos WHERE codigo_producto ='$codigo'";

        return $consulta;
    }

    public function insertarProducto()
    {

        $codigo = $this->getCodigo();
        $nombre = $this->getNombre();
        $descripcion = $this->getDescripcion();
        $categoria = $this->getCategoria();
        $proveedor = $this->getProveedor();
        $precio = $this->getPrecio();
        $tipoiva = $this->getTipoIva();
        $valoriva = $this->getValorIva();
        $cantidad = $this->getCantidad();

        $consulta = "INSERT INTO productos (codigo_producto,nombre_producto,descripcion_producto,categoria_producto,proveedor_producto,precio_producto,tipo_iva_producto,valor_iva_producto,cantidad_producto)
    VALUES('$codigo','$nombre','$descripcion','$categoria','$proveedor','$precio','$tipoiva','$valoriva','$cantidad')";

        return $consulta;
    }


    public function eliminarProductos()
    {


        $codigo = $this->getCodigo();

        $consulta = "DELETE FROM productos WHERE  codigo_producto='$codigo'";

        return $consulta;
    }

    public function actualizarProductos()
    {


        $codigo = $this->getCodigo();
        $nombre = $this->getNombre();
        $descripcion = $this->getDescripcion();
        $categoria = $this->getCategoria();
        $proveedor = $this->getProveedor();
        $precio = $this->getPrecio();
        $tipoiva = $this->getTipoIva();
        $valoriva = $this->getValorIva();
        $cantidad = $this->getCantidad();

        $consulta = "UPDATE productos  set nombre_producto='$nombre',descripcion_producto='$descripcion',categoria_producto='$categoria',proveedor_producto='$proveedor',precio_producto='$precio',tipo_iva_producto='$tipoiva',valor_iva_producto='$valoriva',cantidad_producto='$cantidad' 
    WHERE codigo_producto ='$codigo' ";

        return $consulta;
    }
}
