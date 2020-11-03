-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2020 a las 01:08:51
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
  `codigo_producto` int(11) NOT NULL,
  `nombre_producto` varchar(50) NOT NULL,
  `descripcion_producto` varchar(200) NOT NULL,
  `stock` int(11) NOT NULL,
  `precio` decimal(20,2) NOT NULL,
  `imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigo_producto`, `nombre_producto`, `descripcion_producto`, `stock`, `precio`, `imagen`) VALUES
(1, 'Chocolate', 'De dudosa procedencia. x100g', 485, '61.00', 'chocolate.png'),
(2, 'Sugus', 'Cada 200gr', 23, '151.50', 'sugus.jpg'),
(3, 'Alfajor Aguila', 'Alfajor negro. Por unidad', 251, '80.00', 'alfajor-aguila.jpg'),
(4, 'Alfajor Negro 3.0', 'Alfajor negro Bagley. Por unidad', 197, '80.00', 'alfajor-negro.png'),
(5, 'Alfajor Terrabusi', 'Alfajor negro Terrabusi. Por unidad', 210, '80.00', 'alfajor-terrabusi.png'),
(6, 'Chocolate Aguila', 'Chocolate Aguila amargo x150gr', 100, '130.00', 'chocolate-aguila.png'),
(7, 'Chocolate Cofler Air', 'Chocolate Negro Cofler Air x55gr', 224, '110.00', 'cofler-air.jpeg'),
(8, 'Chocolate Cofler Frutilla', 'Chocolate Cofler de Yogurt Sabor Frutilla x55gr', 398, '110.50', 'cofler-frutilla.png'),
(9, 'Chocolate Milka', 'Chocolate Milka Extra Cacao x100gr', 121, '159.99', 'milka-extra.jpg'),
(10, 'Chocolate Milka Oreo', 'Chocolate Milka Oreo x100gr', 1500, '150.99', 'milka-oreo.jpg'),
(11, 'Oblea Cofler', 'Oblea Cofler Block', 21, '35.00', 'oblea-block.png'),
(12, 'Terrabusi Snacky', 'Terrabusi Snacky x60gr', 10, '40.00', 'terrabusi-snaky.jpg'),
(13, 'Mantecol', 'Mantecol Bocadito x25grs Libre de Gluten', 12, '65.35', 'mantecol.png'),
(14, 'Bon o Bon Aguila', 'Por unidad', 148, '30.72', 'bonobonaguila.png'),
(30, 'Chicle Boobaloo', 'de frutilla, por unidad', 0, '13.00', 'imagenotfound.jpg');

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
('fcytuader', '3372089fdaf1b8a60cc6790b01909bb6d0b6e6683a90645dee81bf451cf6ce68', 'fcytuader@uader.edu.ar'),
('flaapu', '688787d8ff144c502c7f5cffaafe2cc588d86079f9de88304c26b0cb99ce91c6', 'flaviacrolla@hotmail.es'),
('proveedor', '1ee0264c578ac69d945af9917f7fae5d2f227c38a3cf0cf5542b4331f7ea9e96', 'proveedor@deamor.com'),
('sportup', '3d3a06d49d31ca1a6c88617c5302b65cb4781e6f19c3c18cd226d7aa554281c5', 'schmidt.octavio@gmail.com');

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

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `codigo_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

-- USUARIOS CON PRIVILEGIOS

# Privilegios para `user_delete`@`localhost`

GRANT SELECT, INSERT, UPDATE, DELETE, FILE ON *.* TO `user_delete`@`localhost` IDENTIFIED BY PASSWORD '*F691FF554CF2F82E6303C08B14F897957F8F37AE';

GRANT ALL PRIVILEGES ON `candyshopbdd`.* TO `user_delete`@`localhost`;


# Privilegios para `user_modify`@`localhost`

GRANT SELECT, INSERT, UPDATE, ALTER ON *.* TO `user_modify`@`localhost` IDENTIFIED BY PASSWORD '*E0A40615670CD7FB30E968924B87197B7AD22D58';


# Privilegios para `user_normal`@`localhost`

GRANT SELECT ON *.* TO `user_normal`@`localhost` IDENTIFIED BY PASSWORD '*C4207EB3162FB33ACE655FC76398C8F454ABE8B2';

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
