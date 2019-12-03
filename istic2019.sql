-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2019 a las 05:29:24
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

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
  `registrovehiculoID` int(10) NOT NULL,
  `patente` varchar(10) NOT NULL,
  `horaingreso` varchar(100) NOT NULL,
  `horaingreso2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registrovehiculo`
--

INSERT INTO `registrovehiculo` (`registrovehiculoID`, `patente`, `horaingreso`, `horaingreso2`) VALUES
(8, 'ABC123', '1573594369', ''),
(9, 'AC660YK', '1573762260', ''),
(10, 'AC660YK', '1574307147', ''),
(11, 'ABC123', '1574824674', ''),
(12, 'ABC123', '1574835924', ''),
(13, 'ABC123', '1574835944', ''),
(14, 'ABC123', '1574836310', ''),
(15, 'ABC123', '1574836321', ''),
(16, 'ABC123', '1574836355', ''),
(17, 'ABC123', '1574836375', ''),
(18, 'ABC123', '1574836427', ''),
(19, 'zzz777', '1574836437', ''),
(20, 'ABC123', '1574836512', ''),
(21, 'zzz777', '1574836528', ''),
(24, 'QWE123', '1574840629', ''),
(25, 'ABC124', '1574843395', '27-11-19 05:29'),
(26, 'BBB222', '1574861228', '27-11-19 10:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuarioID` int(11) NOT NULL,
  `registrovehiculoID` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuarioID`, `registrovehiculoID`, `nombre`, `clave`) VALUES
(8, 0, 'Dardo', '1234'),
(9, 0, 'nora', '123'),
(10, 0, 'dardo', 'dardo'),
(11, 0, 'qwerty', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculosfacturados`
--

CREATE TABLE `vehiculosfacturados` (
  `vehiculosfacturadosID` int(11) NOT NULL,
  `usuarioID` int(11) NOT NULL,
  `patente` varchar(10) NOT NULL,
  `horaingreso` varchar(100) NOT NULL,
  `horasalida` varchar(100) NOT NULL,
  `importe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vehiculosfacturados`
--

INSERT INTO `vehiculosfacturados` (`vehiculosfacturadosID`, `usuarioID`, `patente`, `horaingreso`, `horasalida`, `importe`) VALUES
(1, 8, 'ABC123', '12-11-19 18:32', '12-11-19 18:34', '5.0555555555556'),
(2, 2, 'BBB222', '27-11-19 10:27', '27-11-19 10:27', '1.8888888888889');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registrovehiculo`
--
ALTER TABLE `registrovehiculo`
  ADD PRIMARY KEY (`registrovehiculoID`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuarioID`);

--
-- Indices de la tabla `vehiculosfacturados`
--
ALTER TABLE `vehiculosfacturados`
  ADD PRIMARY KEY (`vehiculosfacturadosID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
