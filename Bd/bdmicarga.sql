-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 01-04-2019 a las 14:41:30
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdmicarga`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductor`
--

DROP TABLE IF EXISTS `conductor`;
CREATE TABLE IF NOT EXISTS `conductor` (
  `idConductor` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Documento` varchar(45) NOT NULL,
  `NumCelular` varchar(45) NOT NULL,
  `LicConduccion` int(11) NOT NULL,
  `VenLicencia` date NOT NULL,
  PRIMARY KEY (`idConductor`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `conductor`
--

INSERT INTO `conductor` (`idConductor`, `Nombre`, `Documento`, `NumCelular`, `LicConduccion`, `VenLicencia`) VALUES
(1, 'yo', '1057604032', '2343556', 2333, '2019-03-13'),
(2, 'lola', '234234', '2343556', 2333, '2019-03-13'),
(3, 'pepe', '234234', '2343556', 2333, '2019-03-13'),
(4, 'seÃ±or', '234234', '2343556', 2333, '2019-03-13'),
(5, 'lalo', '234234', '2343556', 2333, '2019-03-13'),
(6, 'jac', '234234', '2423', 3243, '2019-03-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

DROP TABLE IF EXISTS `curso`;
CREATE TABLE IF NOT EXISTS `curso` (
  `idCurso` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaVencimiento` date NOT NULL,
  `Conductor_idConductor` int(11) NOT NULL,
  PRIMARY KEY (`idCurso`),
  KEY `fk_Curso_Conductor1_idx` (`Conductor_idConductor`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`idCurso`, `Nombre`, `FechaInicio`, `FechaVencimiento`, `Conductor_idConductor`) VALUES
(1, 'jajaja', '2019-03-13', '2019-03-12', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

DROP TABLE IF EXISTS `documento`;
CREATE TABLE IF NOT EXISTS `documento` (
  `idDocumento` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo` varchar(45) NOT NULL,
  `FechaRenovacion` date NOT NULL,
  `FechaVencimiento` date NOT NULL,
  `Numero` varchar(45) NOT NULL,
  `Vehiculo_idVehiculo` int(11) NOT NULL,
  PRIMARY KEY (`idDocumento`),
  KEY `fk_Documento_Vehiculo1_idx` (`Vehiculo_idVehiculo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `documento`
--

INSERT INTO `documento` (`idDocumento`, `Tipo`, `FechaRenovacion`, `FechaVencimiento`, `Numero`, `Vehiculo_idVehiculo`) VALUES
(1, 'nose', '2019-03-12', '2019-03-14', '23432', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Documento` varchar(45) NOT NULL,
  `Telefono` varchar(45) NOT NULL,
  `Perfil` enum('Administrador','Empleado') NOT NULL,
  `Password` text NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `Nombre`, `Documento`, `Telefono`, `Perfil`, `Password`) VALUES
(1, 'jimmy', '1057604032', '3123751882', 'Administrador', '123'),
(2, 'lola', '234234', '123213', 'Empleado', '12345'),
(3, 'yoo', '12345', '3264', 'Administrador', '$2y$10$oHg2UImr9LIqmP1rpyORSe7Y5EF/51PZBL3yNpe3wb5dEl97yfbbC'),
(4, 'pepe', '111', '11111', 'Empleado', '111'),
(5, 'ggg', '222', '22222222', 'Empleado', '$2y$10$jt4S1PQEVWZ3jJHWE8rCe.hKA0PqfVjBaG8htMPxTb/NVABuOlRnG'),
(8, 'jjj', '000', '44404', 'Empleado', '$2y$10$RrEQhRAJHn49elRzlhqf/uBU78kJg96dsZFXaoeSwHYHMgckf1UlC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

DROP TABLE IF EXISTS `vehiculo`;
CREATE TABLE IF NOT EXISTS `vehiculo` (
  `idVehiculo` int(11) NOT NULL AUTO_INCREMENT,
  `PlacaCabezote` varchar(45) NOT NULL,
  `Modelo` int(11) NOT NULL,
  `Color` varchar(45) NOT NULL,
  `PlacaRemolque` varchar(45) NOT NULL,
  `CapacidadTanque` varchar(45) NOT NULL,
  `Seccional` varchar(45) NOT NULL,
  `Conductor_idConductor` int(11) NOT NULL,
  PRIMARY KEY (`idVehiculo`),
  KEY `fk_Vehiculo_Conductor1_idx` (`Conductor_idConductor`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`idVehiculo`, `PlacaCabezote`, `Modelo`, `Color`, `PlacaRemolque`, `CapacidadTanque`, `Seccional`, `Conductor_idConductor`) VALUES
(2, 'sdfsd', 45646, 'rojo', 'poyuu', 'etrrr', 'Sogamoso', 3),
(3, 'sdfsd', 45646, 'rojo', 'poyuu', 'etrrr', 'Sogamoso', 4),
(5, 'sdfsd', 45646, 'rojo', 'poyuu', 'etrrr', 'Sogamoso', 1),
(6, 'sdfsd', 45646, 'rojo', 'poyuu', 'etrrr', 'Sogamoso', 3),
(7, 'ggggg', 44444, 'azul', 'gfghf', 'gggg', 'Corrales', 3),
(8, 'sds', 23423, 'sdfsdf', '32432', '32432', 'Sogamoso', 2);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `fk_Curso_Conductor1` FOREIGN KEY (`Conductor_idConductor`) REFERENCES `conductor` (`idConductor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `documento`
--
ALTER TABLE `documento`
  ADD CONSTRAINT `fk_Documento_Vehiculo1` FOREIGN KEY (`Vehiculo_idVehiculo`) REFERENCES `vehiculo` (`idVehiculo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `fk_Vehiculo_Conductor1` FOREIGN KEY (`Conductor_idConductor`) REFERENCES `conductor` (`idConductor`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
