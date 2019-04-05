-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-04-2019 a las 23:09:34
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

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
  `Documento` varchar(45) DEFAULT NULL,
  `NumCelular` varchar(45) NOT NULL,
  `LicConduccion` int(11) NOT NULL,
  `VenLicencia` date NOT NULL,
  PRIMARY KEY (`idConductor`),
  UNIQUE KEY `Documento_UNIQUE` (`Documento`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `conductor`
--

INSERT INTO `conductor` (`idConductor`, `Nombre`, `Documento`, `NumCelular`, `LicConduccion`, `VenLicencia`) VALUES
(1, 'Luis Alarcon', '1234567890', '3123456789', 12344, '2019-05-24');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietario`
--

DROP TABLE IF EXISTS `propietario`;
CREATE TABLE IF NOT EXISTS `propietario` (
  `idPropietario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Direccion` varchar(45) NOT NULL,
  `Documento` int(11) NOT NULL,
  `Celular` int(11) NOT NULL,
  PRIMARY KEY (`idPropietario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `propietario`
--

INSERT INTO `propietario` (`idPropietario`, `Nombre`, `Direccion`, `Documento`, `Celular`) VALUES
(1, 'BBBB', 'cra3', 12, 321);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Documento` varchar(45) DEFAULT NULL,
  `Telefono` varchar(45) NOT NULL,
  `Perfil` enum('Administrador','Empleado') NOT NULL,
  `Password` text NOT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `Documento_UNIQUE` (`Documento`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `Nombre`, `Documento`, `Telefono`, `Perfil`, `Password`) VALUES
(1, 'jajajaja', '1', '1234567890', 'Administrador', '$2y$10$RZ9eRlO9csjNu4i/2jBtu.JEPoZq/QoYJ9tsB9bLv4QfaCrFLUQqe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

DROP TABLE IF EXISTS `vehiculo`;
CREATE TABLE IF NOT EXISTS `vehiculo` (
  `idVehiculo` int(11) NOT NULL AUTO_INCREMENT,
  `numero_motor` varchar(50) NOT NULL,
  `serie_motor` varchar(50) NOT NULL,
  `num_chasis` varchar(50) NOT NULL,
  `PlacaCabezote` varchar(45) NOT NULL,
  `Modelo_cabezote` int(11) NOT NULL,
  `Color` varchar(45) NOT NULL,
  `PlacaRemolque` varchar(45) NOT NULL,
  `Modelo_remolque` varchar(50) NOT NULL,
  `CapacidadTanque` varchar(45) NOT NULL,
  `Seccional` varchar(45) NOT NULL,
  `Conductor_idConductor` int(11) NOT NULL,
  `Propietario_idPropietario` int(11) NOT NULL,
  PRIMARY KEY (`idVehiculo`),
  KEY `fk_Vehiculo_Conductor_idx` (`Conductor_idConductor`),
  KEY `fk_Vehiculo_Propietario1_idx` (`Propietario_idPropietario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`idVehiculo`, `numero_motor`, `serie_motor`, `num_chasis`, `PlacaCabezote`, `Modelo_cabezote`, `Color`, `PlacaRemolque`, `Modelo_remolque`, `CapacidadTanque`, `Seccional`, `Conductor_idConductor`, `Propietario_idPropietario`) VALUES
(1, '', '', '', '21332', 12312, 'azul', '213e', '', '21312', 'Sogamoso', 1, 1),
(2, '', '', '', '23456', 99, 'negroi', '234567', '', '234567', 'Sogamoso', 1, 1);

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
  ADD CONSTRAINT `fk_Vehiculo_Conductor` FOREIGN KEY (`Conductor_idConductor`) REFERENCES `conductor` (`idConductor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Vehiculo_Propietario1` FOREIGN KEY (`Propietario_idPropietario`) REFERENCES `propietario` (`idPropietario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
