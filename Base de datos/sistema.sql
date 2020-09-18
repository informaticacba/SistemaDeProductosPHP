-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-09-2020 a las 20:32:46
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre_categoria`) VALUES
(1, 'Aseo Personal '),
(3, 'Bebidas'),
(4, 'Infantiles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codigo_producto` decimal(20,0) NOT NULL,
  `nombre_producto` varchar(30) NOT NULL,
  `descripcion_producto` varchar(50) NOT NULL,
  `categoria_producto` varchar(30) NOT NULL,
  `proveedor_producto` varchar(30) NOT NULL,
  `precio_producto` decimal(30,0) NOT NULL,
  `tipo_iva_producto` varchar(10) NOT NULL,
  `valor_iva_producto` decimal(10,2) NOT NULL,
  `cantidad_producto` decimal(50,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigo_producto`, `nombre_producto`, `descripcion_producto`, `categoria_producto`, `proveedor_producto`, `precio_producto`, `tipo_iva_producto`, `valor_iva_producto`, `cantidad_producto`) VALUES
('12345', 'Cocacola light', ' \r\n                 \r\n                es muy fresc', 'Bebidas', 'Jose', '25285', 'IVA G', '0.00', '25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `identificacion_proveedor` decimal(10,0) NOT NULL,
  `nombre_proveedor` varchar(20) NOT NULL,
  `apellido_proveedor` varchar(20) NOT NULL,
  `correo_proveedor` varchar(30) NOT NULL,
  `telefono_proveedor` decimal(10,0) DEFAULT NULL,
  `direccion_proveedor` varchar(30) NOT NULL,
  `ciudad_proveedor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`identificacion_proveedor`, `nombre_proveedor`, `apellido_proveedor`, `correo_proveedor`, `telefono_proveedor`, `direccion_proveedor`, `ciudad_proveedor`) VALUES
('79943669', 'Paula', 'Melo', 'marcomelo@gmail.com', '31441588', 'Carrera 151D#142C-35', 'Bogota D.C.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `numerocedula_usuario` decimal(10,0) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `apellido_usuario` varchar(50) NOT NULL,
  `correo_usuario` varchar(100) NOT NULL,
  `telefono_usuario` decimal(10,0) NOT NULL,
  `user_usuario` varchar(10) NOT NULL,
  `contraseña_usuario` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`numerocedula_usuario`, `nombre_usuario`, `apellido_usuario`, `correo_usuario`, `telefono_usuario`, `user_usuario`, `contraseña_usuario`) VALUES
('12345', 'prueba', 'diagnostica', 'prueba@gmail.com', '3151515', 'prueba', '123'),
('79943669', 'Marco', 'Melo', 'marcomelo@gmail.com', '3144192293', 'marquitos', '12345'),
('1000571914', 'Carlos', 'Melo', 'carlosandres98707@gmail.com', '3144192292', 'carlos9870', 'carlos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`),
  ADD UNIQUE KEY `pk_categorias` (`nombre_categoria`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigo_producto`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`identificacion_proveedor`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`numerocedula_usuario`),
  ADD UNIQUE KEY `un_usuarios` (`user_usuario`,`contraseña_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
