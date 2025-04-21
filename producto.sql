-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2020 a las 20:36:02
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prog_avanzada`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `codigo` int(11) NOT NULL,
  `precio` int(50) NOT NULL,
  `stock` varchar(50) NOT NULL,
  `autor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`Id`, `nombre`, `codigo`, `precio`, `stock`, `autor`) VALUES
(6, 'Ética nicomaquea', 917888, 1500, '20', 'Aristóteles'),
(7, 'Política', 656979, 1250, '10', 'Aristóteles'),
(8, 'Metafísica', 6546546, 1800, '5', 'Aristóteles'),
(9, 'Categorías', 654987, 900, '66', 'Aristóteles'),
(10, 'Retórica', 6548887, 800, '3', 'Aristóteles'),
(16, 'La ciudad de Dios', 154677, 1300, '25', 'SanAgustin'),
(17, 'Confesiones', 151621, 1300, '50', 'SanAgustin'),
(18, 'República', 151679, 2900, '46', 'Platon'),
(19, 'Banquete', 151699, 1950, '30', 'Platon'),
(20, 'Protágoras', 161388, 2500, '50', 'Platon'),
(21, 'Apología de Sócrates', 151621, 1600, '10', 'Platon');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
