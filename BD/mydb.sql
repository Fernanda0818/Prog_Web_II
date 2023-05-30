-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-05-2023 a las 02:02:12
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id20828499_webii`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nombre`, `descripcion`) VALUES
(1, 'Bebidas', 'Todas las bebidas que haya en la tienda'),
(2, 'comida', 'comida '),
(3, 'bebidas', 'bebidas dulces'),
(4, 'dulces', 'dulces pequeños'),
(5, 'productos de limpieza', 'productos de limpieza'),
(6, 'higiene', 'higiene personal'),
(7, 'accesorios', 'accesorios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datostemp`
--

CREATE TABLE `datostemp` (
  `id` int(255) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `precioUnitario` decimal(65,0) NOT NULL,
  `cantidad` int(255) NOT NULL,
  `total` decimal(65,0) NOT NULL,
  `idProducto` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `depositos`
--

CREATE TABLE `depositos` (
  `idDepositos` int(11) NOT NULL,
  `compania` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `cliente` varchar(100) NOT NULL,
  `comision` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `Ventas_idVentas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `depositos`
--

INSERT INTO `depositos` (`idDepositos`, `compania`, `fecha`, `cantidad`, `cliente`, `comision`, `total`, `Ventas_idVentas`) VALUES
(6, 'HSBC', '2023-05-25', 200, 'Fernanda', 15, 215, 20),
(7, 'BBVA', '2023-05-25', 200, 'ggg', 15, 215, 24),
(8, 'BANAMEX', '2023-05-26', 10500, 'Maria Fernanda Trejo Anguiano', 15, 10515, 27);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallesventa`
--

CREATE TABLE `detallesventa` (
  `id` int(255) NOT NULL,
  `Productos_idProductos` int(11) NOT NULL,
  `Ventas_idVentas` int(11) NOT NULL,
  `precioUnitario` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detallesventa`
--

INSERT INTO `detallesventa` (`id`, `Productos_idProductos`, `Ventas_idVentas`, `precioUnitario`, `cantidad`) VALUES
(1, 4, 6, 17, 2),
(2, 5, 6, 18, 1),
(3, 10, 6, 28, 1),
(4, 9, 7, 25, 1),
(5, 1, 21, 15, 2),
(6, 4, 21, 17, 2),
(7, 8, 21, 30, 1),
(8, 3, 21, 20, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProductos` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `codigo_barras` int(11) NOT NULL,
  `precio_unitario` decimal(5,0) NOT NULL,
  `stock` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `Proveedores_idProveedores` int(11) NOT NULL,
  `Categoria_idCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProductos`, `nombre`, `codigo_barras`, `precio_unitario`, `stock`, `descripcion`, `Proveedores_idProveedores`, `Categoria_idCategoria`) VALUES
(1, 'Jugo de mango', 12, '15', 900, 'jugo con pulpa de mango', 1, 3),
(2, 'papel', 13, '23', 783, 'papel higienico', 2, 6),
(3, 'sopa Preparada', 14, '20', 8292, 'Sopa de vaso preparada', 3, 2),
(4, 'cafe Americano', 15, '17', 893, 'cafe americano grande', 4, 3),
(5, 'chocolate Caliente', 16, '18', 920, 'chocolate caliente grande', 5, 3),
(6, 'cafe Cappuchino', 17, '23', 903, 'Cafe cappucchino grande', 6, 3),
(7, 'sandwich', 18, '13', 90, 'sandwich', 7, 2),
(8, 'mini Pizza', 10, '30', 892, 'mini pizza de peperoni', 4, 2),
(9, 'ice Mora', 11, '25', 902, 'bebida fria sabor mora azul', 6, 3),
(10, 'ice Fresa', 20, '28', 902, 'bebida fria sabor fresa', 6, 3),
(11, 'ice Cereza', 21, '22', 989, 'bebida fria sabor cereza', 7, 3),
(12, 'ramen', 22, '17', 83, 'ramen', 1, 3),
(13, 'limpia pisos', 23, '23', 827, 'limpia pisos ', 4, 5),
(14, 'gomitas', 24, '16', 892, 'gomitas de diferentes tipos', 7, 4),
(15, 'hielera', 19, '280', 89, 'hielera de unicel', 5, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `idProveedores` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `pais` varchar(45) NOT NULL,
  `ciudad` varchar(45) NOT NULL,
  `codigoPostal` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`idProveedores`, `nombre`, `direccion`, `pais`, `ciudad`, `codigoPostal`, `email`, `telefono`) VALUES
(1, 'Felipe', 'morelos #8', 'Mexico', 'Mexico', '38800', 'felipe@gmail.com', 1234567891),
(2, 'Antonio', 'Manuel Doblado', 'Mexico', 'Mexico', '37836', 'antonio@gmail.com', 1234567890),
(3, 'Marsela', 'Francisco I Madero', 'Mexico', 'Mexico', '93748', 'Marsela@gmail.com', 1234567890),
(4, 'Lorena', 'Abasolo', 'Mexico', 'Mexico', '62789', 'lorena@gmail.com', 837483759),
(5, 'Antonio', 'Manuel Doblado', 'Mexico', 'Mexico', '37836', 'antonio@gmail.com', 1234567890),
(6, 'Marsela', 'Francisco I Madero', 'Mexico', 'Mexico', '93748', 'Marsela@gmail.com', 1234567890),
(7, 'Lorena', 'Abasolo', 'Mexico', 'Mexico', '62789', 'lorena@gmail.com', 837483759);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `idServicios` int(11) NOT NULL,
  `compania` varchar(45) NOT NULL,
  `total` int(11) NOT NULL,
  `Ventas_idVentas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`idServicios`, `compania`, `total`, `Ventas_idVentas`) VALUES
(1, 'telcel', 250, 1),
(2, 'telcel', 250, 2),
(3, 'INTERNET', 215, 3),
(4, 'CFE', 804, 4),
(5, 'FLASH MOBILE', 515, 8),
(6, 'FLASH MOBILE', 515, 9),
(7, 'UNEFON', 515, 10),
(9, 'INTERNET', 215, 13),
(10, 'AGUA', 918, 17),
(11, 'WEEX', 215, 18),
(12, 'DISH', 38, 22),
(13, 'TELCEL', 215, 23),
(14, 'DISH', 365, 25),
(15, 'CFE', 12575, 26);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `correo`, `usuario`, `pass`) VALUES
(1, 'mariafernanda.t.a48@gmail.com', 'Fernanda', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(7, 'mariafernanda.t.a48@gmail.com', 'Maria', 'a9993e364706816aba3e25717850c26c9cd0d89d');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idVentas` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `numeroCaja` int(11) DEFAULT NULL,
  `TotalVenta` decimal(5,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`idVentas`, `fecha`, `numeroCaja`, `TotalVenta`) VALUES
(1, '2023-05-20', NULL, '250'),
(2, '2023-05-20', NULL, '250'),
(3, '2023-05-25', NULL, '215'),
(4, '2023-05-25', NULL, '804'),
(6, '2023-05-25', NULL, '80'),
(7, '2023-05-25', NULL, '25'),
(8, '2023-05-25', NULL, '515'),
(9, '2023-05-25', NULL, '515'),
(10, '2023-05-25', NULL, '515'),
(11, '2023-05-25', NULL, '15'),
(12, '2023-05-25', NULL, '500'),
(13, '2023-05-25', NULL, '215'),
(14, '2023-05-25', NULL, '150'),
(15, '2023-05-25', NULL, '150'),
(16, '2023-05-25', NULL, '90'),
(17, '2023-05-25', NULL, '918'),
(18, '2023-05-25', NULL, '215'),
(19, '2023-05-25', NULL, '200'),
(20, '2023-05-25', NULL, '200'),
(21, '2023-05-25', NULL, '114'),
(22, '2023-05-25', NULL, '38'),
(23, '2023-05-25', NULL, '215'),
(24, '2023-05-25', NULL, '200'),
(25, '2023-05-26', NULL, '365'),
(26, '2023-05-26', NULL, '12575'),
(27, '2023-05-26', NULL, '10500');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `datostemp`
--
ALTER TABLE `datostemp`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `depositos`
--
ALTER TABLE `depositos`
  ADD PRIMARY KEY (`idDepositos`,`Ventas_idVentas`),
  ADD KEY `fk_Depositos_Ventas1_idx` (`Ventas_idVentas`);

--
-- Indices de la tabla `detallesventa`
--
ALTER TABLE `detallesventa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_detallesVenta_Ventas1_idx` (`Ventas_idVentas`),
  ADD KEY `Productos_idProductos` (`Productos_idProductos`,`Ventas_idVentas`) USING BTREE;

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProductos`,`Proveedores_idProveedores`,`Categoria_idCategoria`),
  ADD KEY `fk_Productos_Proveedores_idx` (`Proveedores_idProveedores`),
  ADD KEY `fk_Productos_Categoria1_idx` (`Categoria_idCategoria`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`idProveedores`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`idServicios`,`Ventas_idVentas`),
  ADD KEY `fk_Servicios_Ventas1_idx` (`Ventas_idVentas`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `idUsuario_UNIQUE` (`idUsuario`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idVentas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `datostemp`
--
ALTER TABLE `datostemp`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `depositos`
--
ALTER TABLE `depositos`
  MODIFY `idDepositos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `detallesventa`
--
ALTER TABLE `detallesventa`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProductos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `idProveedores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `idServicios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `idVentas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `depositos`
--
ALTER TABLE `depositos`
  ADD CONSTRAINT `fk_Depositos_Ventas1` FOREIGN KEY (`Ventas_idVentas`) REFERENCES `ventas` (`idVentas`);

--
-- Filtros para la tabla `detallesventa`
--
ALTER TABLE `detallesventa`
  ADD CONSTRAINT `fk_detallesVenta_Productos1` FOREIGN KEY (`Productos_idProductos`) REFERENCES `productos` (`idProductos`),
  ADD CONSTRAINT `fk_detallesVenta_Ventas1` FOREIGN KEY (`Ventas_idVentas`) REFERENCES `ventas` (`idVentas`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_Productos_Categoria1` FOREIGN KEY (`Categoria_idCategoria`) REFERENCES `categoria` (`idCategoria`),
  ADD CONSTRAINT `fk_Productos_Proveedores` FOREIGN KEY (`Proveedores_idProveedores`) REFERENCES `proveedores` (`idProveedores`);

--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `fk_Servicios_Ventas1` FOREIGN KEY (`Ventas_idVentas`) REFERENCES `ventas` (`idVentas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
