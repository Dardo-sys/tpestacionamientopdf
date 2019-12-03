-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2019 a las 08:09:56
-- Versión del servidor: 10.4.8-MariaDB
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
-- Base de datos: `istic2019`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrovehiculo`
--

CREATE TABLE `registrovehiculo` (
  `id` int(10) NOT NULL,
  `patente` varchar(10) NOT NULL,
  `horaingreso` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registrovehiculo`
--

INSERT INTO `registrovehiculo` (`id`, `patente`, `horaingreso`) VALUES
(4, 'iwv783', '1572501024'),
(5, 'qwe036', '1572501059'),
(6, 'cri789', '1572502614'),
(7, 'zzz777', '1572504114');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `clave`) VALUES
(1, 'usuario', 'usuario'),
(2, 'admin', '1234'),
(3, 'roman', 'riquelme'),
(4, 'martin', 'palermo'),
(5, 'ramon', 'abila');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculosfacturados`
--

CREATE TABLE `vehiculosfacturados` (
  `id` int(11) NOT NULL,
  `patente` varchar(10) NOT NULL,
  `horaingreso` varchar(100) NOT NULL,
  `horasalida` varchar(100) NOT NULL,
  `importe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vehiculosfacturados`
--

INSERT INTO `vehiculosfacturados` (`id`, `patente`, `horaingreso`, `horasalida`, `importe`) VALUES
(1, 'iwv783', '31-10-19 02:50', '31-10-19 03:41', '169.61111111111'),
(2, 'qwe036', '31-10-19 02:50', '31-10-19 03:41', '168.38888888889'),
(3, 'cri789', '31-10-19 03:16', '31-10-19 03:41', '82.666666666667'),
(4, 'zzz777', '31-10-19 03:41', '31-10-19 03:42', '0.61111111111111');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registrovehiculo`
--
ALTER TABLE `registrovehiculo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculosfacturados`
--
ALTER TABLE `vehiculosfacturados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registrovehiculo`
--
ALTER TABLE `registrovehiculo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `vehiculosfacturados`
--
ALTER TABLE `vehiculosfacturados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
