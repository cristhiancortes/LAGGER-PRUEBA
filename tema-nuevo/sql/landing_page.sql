-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2022 a las 03:37:13
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `landing_page`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_landing`
--

CREATE TABLE `registro_landing` (
  `id_registro` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `nit` bigint(255) NOT NULL,
  `punto` varchar(255) NOT NULL,
  `equipo` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `promotor` varchar(255) NOT NULL,
  `rtc` bigint(255) NOT NULL,
  `capitan` varchar(255) NOT NULL,
  `dir_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro_landing`
--

INSERT INTO `registro_landing` (`id_registro`, `nombre`, `nit`, `punto`, `equipo`, `ciudad`, `promotor`, `rtc`, `capitan`, `dir_ip`) VALUES
(5, 'Anibal', 900789456, 'Bosa', 'LaLibertad', ' Ciudad#1', ' Oscar', 321, ' Capitan', '127.0.0.1'),
(6, 'Mariela', 987654, 'Bosa', 'Millonarios', ' Ciudad#2', ' Casa', 123, ' Capitan', '127.0.0.1'),
(7, 'Rugal', 900987654, 'Bosa', 'Millos', ' Ciudad#1', ' PPP', 444, ' Capitan', '127.0.0.1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro_landing`
--
ALTER TABLE `registro_landing`
  ADD PRIMARY KEY (`id_registro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro_landing`
--
ALTER TABLE `registro_landing`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
