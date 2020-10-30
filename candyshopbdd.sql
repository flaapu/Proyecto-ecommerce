-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-10-2020 a las 19:36:41
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
-- Base de datos: `candyshopbdd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codigo_producto` varchar(8) NOT NULL,
  `nombre_producto` varchar(150) NOT NULL,
  `descripcion_producto` varchar(200) NOT NULL,
  `stock` int(11) NOT NULL,
  `precio` float NOT NULL,
  `imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigo_producto`, `nombre_producto`, `descripcion_producto`, `stock`, `precio`, `imagen`) VALUES
('1', 'Chocolate', 'De dudosa procedencia. x100g', 60, 60.99, 'chocolate.png'),
('10', 'Chocolate Milka Oreo', 'Chocolate Milka Oreo x100gr', 1500, 150, 'milka-oreo.jpg'),
('11', 'Oblea Cofler', 'Oblea Cofler Block', 10, 35, 'oblea-block.png'),
('12', 'Terrabusi Snacky', 'Terrabusi Snacky x60gr', 5, 40, 'terrabusi-snaky.jpg'),
('13', 'Mantecol', 'Mantecol Bocadito x25grs Libre de Gluten', 0, 60.99, 'mantecol.png'),
('2', 'Sugus', 'Cada 200gr', 15, 150.5, 'sugus.jpg'),
('3', 'Alfajor Aguila', 'Alfajor negro. Por unidad', 300, 80, 'alfajor-aguila.jpg'),
('4', 'Alfajor Negro 3.0', 'Alfajor negro Bagley. Por unidad', 200, 80, 'alfajor-negro.png'),
('5', 'Alfajor Terrabusi', 'Alfajor negro Terrabusi. Por unidad', 250, 80, 'alfajor-terrabusi.png'),
('6', 'Chocolate Aguila', 'Chocolate Aguila amargo x150gr', 100, 130, 'chocolate-aguila.png'),
('7', 'Chocolate Cofler Air', 'Chocolate Negro Cofler Air x55gr', 209, 110, 'cofler-air.jpeg'),
('8', 'Chocolate Cofler Frutilla', 'Chocolate Cofler de Yogurt Sabor Frutilla x55gr', 400, 110, 'cofler-frutilla.png'),
('9', 'Chocolate Milka', 'Chocolate Milka Extra Cacao x100gr', 120, 160.5, 'milka-extra.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `username` varchar(10) NOT NULL,
  `clave` varchar(150) NOT NULL,
  `correoelectronico` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`username`, `clave`, `correoelectronico`) VALUES
('flaapu', '688787d8ff144c502c7f5cffaafe2cc588d86079f9de88304c26b0cb99ce91c6', 'flaviacrolla@hotmail.es');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigo_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `correoelectronico` (`correoelectronico`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;