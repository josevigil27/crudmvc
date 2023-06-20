-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2023 a las 23:03:56
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `devwebcamp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Cobertores'),
(2, 'Oficina'),
(3, 'Muebles'),
(4, 'Audio'),
(5, 'Multimedia'),
(6, 'Telefonos, Tablets, etc.'),
(7, 'Relojes'),
(8, 'Repuestos de PC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `categoria_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `categoria_id`, `cantidad`, `precio`) VALUES
(1, ' iPhone 14 Pro Max', 6, 35, 35500.00),
(3, 'Apple Watch Series 8', 7, 50, 12500.00),
(4, 'Apple Watch SE 2022', 7, 35, 8500.00),
(5, 'NVIDIA GeForce 4090', 8, 5, 50000.00),
(6, 'iPad Pro M2', 6, 25, 57000.00),
(7, 'iPhone 12 Pro Max', 6, 10, 17000.00),
(8, 'iPhone 11 Pro Max', 6, 15, 9000.00),
(9, 'Clear Case iPhone 14 Pro Max', 1, 50, 1490.00),
(10, 'Silicon Case iPhone Xs', 1, 45, 1000.00),
(11, 'Intel i9 13 Gen EVO', 8, 10, 3500.60),
(12, 'Nikon D780', 5, 8, 16700.99),
(13, 'Parlante S150', 4, 3, 1430.55),
(14, 'Parlante Bluetooth Mini', 4, 25, 2000.00),
(15, 'Silla Ergonomica para Oficina', 3, 9, 1500.99),
(16, 'Impresora Epson', 2, 6, 3500.00),
(17, 'Papel A4', 2, 100, 400.00),
(37, ' Spigen Cases Samsung Galaxy S23 Ultra', 1, 10, 1350.00),
(38, ' Silla Gamer', 3, 5, 1500.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `apellido` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `confirmado` tinyint(1) DEFAULT NULL,
  `token` varchar(13) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `password`, `confirmado`, `token`, `admin`) VALUES
(10, ' Jose', 'Vigil', 'correo@correo.com', '$2y$10$TVXaaNtF.c5ohtVBuLCMd.vai3L9BYjo8x1NSMZ9y/7/b.TPeqMPa', 1, '', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_producto_categorias_idx` (`categoria_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_producto_categorias` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
