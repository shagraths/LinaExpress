-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 28, 2015 at 04:03 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `LinaExpress`
--

-- --------------------------------------------------------

--
-- Table structure for table `Carta`
--

CREATE TABLE IF NOT EXISTS `Carta` (
  `id_carta` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) NOT NULL,
  `numero_rit` varchar(50) NOT NULL,
  `numeroCartaEmpresa` varchar(50) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_entrega` date NOT NULL,
  `fecha_plazo` date NOT NULL,
  `emisor` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `idCuidad` int(11) NOT NULL,
  `receptor` varchar(100) NOT NULL,
  `rut_receptor` varchar(30) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `idEmpresa` int(11) NOT NULL,
  `observacion` varchar(1000) NOT NULL,
  `estado` varchar(11) NOT NULL,
  PRIMARY KEY (`id_carta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `Carta`
--

INSERT INTO `Carta` (`id_carta`, `tipo`, `numero_rit`, `numeroCartaEmpresa`, `fecha_ingreso`, `fecha_entrega`, `fecha_plazo`, `emisor`, `direccion`, `idCuidad`, `receptor`, `rut_receptor`, `telefono`, `idEmpresa`, `observacion`, `estado`) VALUES
(4, 'CARTATIPO1', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', 0, '', '', '', 0, 'SIN OBSERVACION', 'ACTIVO'),
(5, 'CARTATIPO2', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', 0, '', '', '', 0, 'SIN OBSERVACION', 'ACTIVO'),
(6, 'CARTATIPO3', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', 0, '', '', '', 0, 'SIN OBSERVACION', 'ACTIVO'),
(7, 'CARTATIPO4', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', 0, '', '', '', 0, 'SIN OBSERVACION', 'ACTIVO');

-- --------------------------------------------------------

--
-- Table structure for table `Ciudad`
--

CREATE TABLE IF NOT EXISTS `Ciudad` (
  `id_ciudad` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_ciudad` varchar(50) NOT NULL,
  `tipo_ciudad` varchar(50) NOT NULL,
  `observacion` varchar(1000) NOT NULL,
  `estado` varchar(10) NOT NULL,
  PRIMARY KEY (`id_ciudad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Devolucion`
--

CREATE TABLE IF NOT EXISTS `Devolucion` (
  `id_devolucion` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_devolucion` varchar(30) NOT NULL,
  `observacion` varchar(10000) NOT NULL,
  `visitas` int(11) NOT NULL,
  PRIMARY KEY (`id_devolucion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Excel`
--

CREATE TABLE IF NOT EXISTS `Excel` (
  `Id_Excel` int(11) NOT NULL AUTO_INCREMENT,
  `N_Dato` int(11) NOT NULL,
  `FechaEntrega` date NOT NULL,
  `TipoCarta` varchar(50) NOT NULL,
  `N_Carta` int(11) NOT NULL,
  `Rit` varchar(50) NOT NULL,
  `NombreReceptor` varchar(150) NOT NULL,
  `Direccion` varchar(150) NOT NULL,
  `Ciudad` varchar(150) NOT NULL,
  `TipoDestino` varchar(150) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `NombreArchivo` varchar(150) NOT NULL,
  `Estado` varchar(50) NOT NULL,
  `FechaSubida` datetime NOT NULL,
  PRIMARY KEY (`Id_Excel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `Excel`
--

INSERT INTO `Excel` (`Id_Excel`, `N_Dato`, `FechaEntrega`, `TipoCarta`, `N_Carta`, `Rit`, `NombreReceptor`, `Direccion`, `Ciudad`, `TipoDestino`, `Telefono`, `Id_Usuario`, `NombreArchivo`, `Estado`, `FechaSubida`) VALUES
(1, 2, '2015-04-08', 'Oficio', 0, 'C-566-2015', 'Paula Vergara Aravena', 'santa lucinda 1', 'longavi', 'Rural', '123123', 3, 'ListoParaSubir11.xls', '', '2015-04-26 07:04:00'),
(2, 3, '2015-04-08', 'Carta Certificada', 0, 'A-555-2015', 'Nicols Vergara Aravena', 'santa lucinda 2', 'panimavida', 'Rural', '1', 3, 'ListoParaSubir11.xls', '', '2015-04-26 07:04:00'),
(3, 4, '2015-04-08', 'Art. 23', 0, 'B-888-2015', 'Eduardo Vergara Diaz', 'santa lucinda 3', 'y. buenas', 'Rural', '456', 3, 'ListoParaSubir11.xls', '', '2015-04-26 07:04:00'),
(4, 5, '2015-04-08', 'otro', 0, 'E-8996-2015', 'Monica Aravena Letelier', 'santa lucinda 4', 'miraflores', 'Rural', '555', 3, 'ListoParaSubir11.xls', '', '2015-04-26 07:04:00'),
(5, 6, '2015-04-08', 'Oficio', 0, 'F-544-2015', 'Tigger Vergara Aravena', 'santa lucinda 5', 'linares', 'Urbano', '555', 3, 'ListoParaSubir11.xls', '', '2015-04-26 07:04:00'),
(6, 7, '2015-04-08', 'Carta Certificada', 0, 'G-123-2015', 'Alejandro Cabezas Unda', 'santa lucinda 6', 'linares', 'Urbano', '444', 3, 'ListoParaSubir11.xls', '', '2015-04-26 07:04:00'),
(7, 8, '2015-04-08', 'Art. 23', 0, 'H-456-2015', 'Elba Diaz Faundez', 'santa lucinda 7', 'linares', 'Urbano', '44', 3, 'ListoParaSubir11.xls', '', '2015-04-26 07:04:00'),
(8, 9, '2015-04-08', 'otro', 0, 'I-789-2015', 'Eduardo Vergara Hormazabal', 'santa lucinda 8', 'linares', 'Urbano', '54', 3, 'ListoParaSubir11.xls', '', '2015-04-26 07:04:00'),
(9, 2, '2015-04-08', 'Oficio', 0, 'C-566-2015', 'Paula Vergara Aravena', 'santa lucinda 1', 'longavi', 'Rural', '123123', 3, 'ListoParaSubir12.xls', '', '2015-04-27 01:04:00'),
(10, 3, '2015-04-08', 'Carta Certificada', 0, 'A-555-2015', 'Nicols Vergara Aravena', 'santa lucinda 2', 'panimavida', 'Rural', '1', 3, 'ListoParaSubir12.xls', '', '2015-04-27 01:04:00'),
(11, 4, '2015-04-08', 'Art. 23', 0, 'B-888-2015', 'Eduardo Vergara Diaz', 'santa lucinda 3', 'y. buenas', 'Rural', '456', 3, 'ListoParaSubir12.xls', '', '2015-04-27 01:04:00'),
(12, 5, '2015-04-08', 'otro', 0, 'E-8996-2015', 'Monica Aravena Letelier', 'santa lucinda 4', 'miraflores', 'Rural', '555', 3, 'ListoParaSubir12.xls', '', '2015-04-27 01:04:00'),
(13, 6, '2015-04-08', 'Oficio', 0, 'F-544-2015', 'Tigger Vergara Aravena', 'santa lucinda 5', 'linares', 'Urbano', '555', 3, 'ListoParaSubir12.xls', '', '2015-04-27 01:04:00'),
(14, 7, '2015-04-08', 'Carta Certificada', 0, 'G-123-2015', 'Alejandro Cabezas Unda', 'santa lucinda 6', 'linares', 'Urbano', '444', 3, 'ListoParaSubir12.xls', '', '2015-04-27 01:04:00'),
(15, 8, '2015-04-08', 'Art. 23', 0, 'H-456-2015', 'Elba Diaz Faundez', 'santa lucinda 7', 'linares', 'Urbano', '44', 3, 'ListoParaSubir12.xls', '', '2015-04-27 01:04:00'),
(16, 9, '2015-04-08', 'otro', 0, 'I-789-2015', 'Eduardo Vergara Hormazabal', 'santa lucinda 8', 'linares', 'Urbano', '54', 3, 'ListoParaSubir12.xls', '', '2015-04-27 01:04:00'),
(17, 2, '2015-04-08', 'Oficio', 0, 'C-566-2015', 'Paula Vergara Aravena', 'santa lucinda 1', 'longavi', 'Rural', '123123', 3, 'ListoParaSubir13.xls', '', '2015-04-27 01:04:00'),
(18, 3, '2015-04-08', 'Carta Certificada', 0, 'A-555-2015', 'Nicols Vergara Aravena', 'santa lucinda 2', 'panimavida', 'Rural', '1', 3, 'ListoParaSubir13.xls', '', '2015-04-27 01:04:00'),
(19, 4, '2015-04-08', 'Art. 23', 0, 'B-888-2015', 'Eduardo Vergara Diaz', 'santa lucinda 3', 'y. buenas', 'Rural', '456', 3, 'ListoParaSubir13.xls', '', '2015-04-27 01:04:00'),
(20, 5, '2015-04-08', 'otro', 0, 'E-8996-2015', 'Monica Aravena Letelier', 'santa lucinda 4', 'miraflores', 'Rural', '555', 3, 'ListoParaSubir13.xls', '', '2015-04-27 01:04:00'),
(21, 6, '2015-04-08', 'Oficio', 0, 'F-544-2015', 'Tigger Vergara Aravena', 'santa lucinda 5', 'linares', 'Urbano', '555', 3, 'ListoParaSubir13.xls', '', '2015-04-27 01:04:00'),
(22, 7, '2015-04-08', 'Carta Certificada', 0, 'G-123-2015', 'Alejandro Cabezas Unda', 'santa lucinda 6', 'linares', 'Urbano', '444', 3, 'ListoParaSubir13.xls', '', '2015-04-27 01:04:00'),
(23, 8, '2015-04-08', 'Art. 23', 0, 'H-456-2015', 'Elba Diaz Faundez', 'santa lucinda 7', 'linares', 'Urbano', '44', 3, 'ListoParaSubir13.xls', '', '2015-04-27 01:04:00'),
(24, 9, '2015-04-08', 'otro', 0, 'I-789-2015', 'Eduardo Vergara Hormazabal', 'santa lucinda 8', 'linares', 'Urbano', '54', 3, 'ListoParaSubir13.xls', '', '2015-04-27 01:04:00'),
(25, 2, '2015-04-08', 'Oficio', 0, 'C-566-2015', 'Paula Vergara Aravena', 'santa lucinda 1', 'longavi', 'Rural', '123123', 3, 'ListoParaSubir14.xls', '', '2015-04-28 01:04:00'),
(26, 3, '2015-04-08', 'Carta Certificada', 0, 'A-555-2015', 'Nicols Vergara Aravena', 'santa lucinda 2', 'panimavida', 'Rural', '1', 3, 'ListoParaSubir14.xls', '', '2015-04-28 01:04:00'),
(27, 4, '2015-04-08', 'Art. 23', 0, 'B-888-2015', 'Eduardo Vergara Diaz', 'santa lucinda 3', 'y. buenas', 'Rural', '456', 3, 'ListoParaSubir14.xls', '', '2015-04-28 01:04:00'),
(28, 5, '2015-04-08', 'otro', 0, 'E-8996-2015', 'Monica Aravena Letelier', 'santa lucinda 4', 'miraflores', 'Rural', '555', 3, 'ListoParaSubir14.xls', '', '2015-04-28 01:04:00'),
(29, 6, '2015-04-08', 'Oficio', 0, 'F-544-2015', 'Tigger Vergara Aravena', 'santa lucinda 5', 'linares', 'Urbano', '555', 3, 'ListoParaSubir14.xls', '', '2015-04-28 01:04:00'),
(30, 7, '2015-04-08', 'Carta Certificada', 0, 'G-123-2015', 'Alejandro Cabezas Unda', 'santa lucinda 6', 'linares', 'Urbano', '444', 3, 'ListoParaSubir14.xls', '', '2015-04-28 01:04:00'),
(31, 8, '2015-04-08', 'Art. 23', 0, 'H-456-2015', 'Elba Diaz Faundez', 'santa lucinda 7', 'linares', 'Urbano', '44', 3, 'ListoParaSubir14.xls', '', '2015-04-28 01:04:00'),
(32, 9, '2015-04-08', 'otro', 0, 'I-789-2015', 'Eduardo Vergara Hormazabal', 'santa lucinda 8', 'linares', 'Urbano', '54', 3, 'ListoParaSubir14.xls', '', '2015-04-28 01:04:00'),
(33, 2, '2015-04-08', 'Oficio', 0, 'C-566-2015', 'Paula Vergara Aravena', 'santa lucinda 1', 'longavi', 'Rural', '123123', 3, 'ListoParaSubir15.xls', '', '2015-04-28 02:04:00'),
(34, 3, '2015-04-08', 'Carta Certificada', 0, 'A-555-2015', 'Nicols Vergara Aravena', 'santa lucinda 2', 'panimavida', 'Rural', '1', 3, 'ListoParaSubir15.xls', '', '2015-04-28 02:04:00'),
(35, 4, '2015-04-08', 'Art. 23', 0, 'B-888-2015', 'Eduardo Vergara Diaz', 'santa lucinda 3', 'y. buenas', 'Rural', '456', 3, 'ListoParaSubir15.xls', '', '2015-04-28 02:04:00'),
(36, 5, '2015-04-08', 'otro', 0, 'E-8996-2015', 'Monica Aravena Letelier', 'santa lucinda 4', 'miraflores', 'Rural', '555', 3, 'ListoParaSubir15.xls', '', '2015-04-28 02:04:00'),
(37, 6, '2015-04-08', 'Oficio', 0, 'F-544-2015', 'Tigger Vergara Aravena', 'santa lucinda 5', 'linares', 'Urbano', '555', 3, 'ListoParaSubir15.xls', '', '2015-04-28 02:04:00'),
(38, 7, '2015-04-08', 'Carta Certificada', 0, 'G-123-2015', 'Alejandro Cabezas Unda', 'santa lucinda 6', 'linares', 'Urbano', '444', 3, 'ListoParaSubir15.xls', '', '2015-04-28 02:04:00'),
(39, 8, '2015-04-08', 'Art. 23', 0, 'H-456-2015', 'Elba Diaz Faundez', 'santa lucinda 7', 'linares', 'Urbano', '44', 3, 'ListoParaSubir15.xls', '', '2015-04-28 02:04:00'),
(40, 9, '2015-04-08', 'otro', 0, 'I-789-2015', 'Eduardo Vergara Hormazabal', 'santa lucinda 8', 'linares', 'Urbano', '54', 3, 'ListoParaSubir15.xls', '', '2015-04-28 02:04:00'),
(41, 2, '2015-04-08', 'Oficio', 0, 'C-566-2015', 'Paula Vergara Aravena', 'santa lucinda 1', 'longavi', 'Rural', '123123', 3, 'ListoParaSubir16.xls', '', '2015-04-28 03:04:00'),
(42, 3, '2015-04-08', 'Carta Certificada', 0, 'A-555-2015', 'Nicols Vergara Aravena', 'santa lucinda 2', 'panimavida', 'Rural', '1', 3, 'ListoParaSubir16.xls', '', '2015-04-28 03:04:00'),
(43, 4, '2015-04-08', 'Art. 23', 0, 'B-888-2015', 'Eduardo Vergara Diaz', 'santa lucinda 3', 'y. buenas', 'Rural', '456', 3, 'ListoParaSubir16.xls', '', '2015-04-28 03:04:00'),
(44, 5, '2015-04-08', 'otro', 0, 'E-8996-2015', 'Monica Aravena Letelier', 'santa lucinda 4', 'miraflores', 'Rural', '555', 3, 'ListoParaSubir16.xls', '', '2015-04-28 03:04:00'),
(45, 6, '2015-04-08', 'Oficio', 0, 'F-544-2015', 'Tigger Vergara Aravena', 'santa lucinda 5', 'linares', 'Urbano', '555', 3, 'ListoParaSubir16.xls', '', '2015-04-28 03:04:00'),
(46, 7, '2015-04-08', 'Carta Certificada', 0, 'G-123-2015', 'Alejandro Cabezas Unda', 'santa lucinda 6', 'linares', 'Urbano', '444', 3, 'ListoParaSubir16.xls', '', '2015-04-28 03:04:00'),
(47, 8, '2015-04-08', 'Art. 23', 0, 'H-456-2015', 'Elba Diaz Faundez', 'santa lucinda 7', 'linares', 'Urbano', '44', 3, 'ListoParaSubir16.xls', '', '2015-04-28 03:04:00'),
(48, 9, '2015-04-08', 'otro', 0, 'I-789-2015', 'Eduardo Vergara Hormazabal', 'santa lucinda 8', 'linares', 'Urbano', '54', 3, 'ListoParaSubir16.xls', '', '2015-04-28 03:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `ExcelCliente`
--

CREATE TABLE IF NOT EXISTS `ExcelCliente` (
  `Id_ExcelCliente` int(11) NOT NULL AUTO_INCREMENT,
  `NombreArchivo` varchar(150) NOT NULL,
  `FechaSubida` datetime NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Estado` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_ExcelCliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `ExcelCliente`
--

INSERT INTO `ExcelCliente` (`Id_ExcelCliente`, `NombreArchivo`, `FechaSubida`, `Id_Usuario`, `Estado`) VALUES
(1, 'ListoParaSubir5.xls', '2015-04-26 02:04:00', 3, 'HABILITADO'),
(2, 'ListoParaSubir6.xls', '2015-04-26 03:04:00', 3, 'HABILITADO'),
(3, 'ListoParaSubir7.xls', '2015-04-26 03:04:00', 3, 'HABILITADO'),
(4, 'ListoParaSubir8.xls', '2015-04-26 03:04:00', 3, 'HABILITADO'),
(5, 'ListoParaSubir9.xls', '2015-04-26 03:04:00', 3, 'HABILITADO'),
(6, 'ListoParaSubir10.xls', '2015-04-26 06:04:00', 3, 'HABILITADO'),
(7, 'ListoParaSubir11.xls', '2015-04-26 07:04:00', 3, 'HABILITADO'),
(8, 'ListoParaSubir12.xls', '2015-04-27 01:04:00', 3, 'HABILITADO'),
(9, 'ListoParaSubir13.xls', '2015-04-27 01:04:00', 3, 'HABILITADO'),
(10, 'ListoParaSubir14.xls', '2015-04-28 01:04:00', 3, 'HABILITADO'),
(11, 'ListoParaSubir15.xls', '2015-04-28 02:04:00', 3, 'HABILITADO'),
(12, 'ListoParaSubir16.xls', '2015-04-28 03:04:00', 3, 'HABILITADO');

-- --------------------------------------------------------

--
-- Table structure for table `ExcelSupervisor`
--

CREATE TABLE IF NOT EXISTS `ExcelSupervisor` (
  `Id_ExcelSupervisor` int(11) NOT NULL AUTO_INCREMENT,
  `NombreArchivo` varchar(150) NOT NULL,
  `FechaSubida` datetime NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Estado` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_ExcelSupervisor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ExcelSupervisor`
--

INSERT INTO `ExcelSupervisor` (`Id_ExcelSupervisor`, `NombreArchivo`, `FechaSubida`, `Id_Usuario`, `Estado`) VALUES
(1, 'ListoParaSubir21.xls', '2015-04-26 03:04:00', 1, 'HABILITADO');

-- --------------------------------------------------------

--
-- Table structure for table `Receptor`
--

CREATE TABLE IF NOT EXISTS `Receptor` (
  `id_receptor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `rut` varchar(10) NOT NULL,
  `firma` varchar(50) NOT NULL,
  `observacion` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_receptor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Rol`
--

CREATE TABLE IF NOT EXISTS `Rol` (
  `ID_r` int(11) NOT NULL AUTO_INCREMENT,
  `Perfil` varchar(20) NOT NULL,
  `Descripcion` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_r`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `Rol`
--

INSERT INTO `Rol` (`ID_r`, `Perfil`, `Descripcion`) VALUES
(1, 'Supervisor', ''),
(2, 'Vendedor', ''),
(3, 'Cliente', ''),
(4, 'ADMINISTRADOR', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `Sector`
--

CREATE TABLE IF NOT EXISTS `Sector` (
  `id_sector` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_sector` varchar(50) NOT NULL,
  `ciudad` int(11) NOT NULL,
  `observacion` varchar(100) NOT NULL,
  `estado` varchar(20) NOT NULL,
  PRIMARY KEY (`id_sector`),
  KEY `ciudad` (`ciudad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `TipoCarta`
--

CREATE TABLE IF NOT EXISTS `TipoCarta` (
  `id_tipoCarta` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Observacion` int(100) NOT NULL,
  `Estado` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tipoCarta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Traking`
--

CREATE TABLE IF NOT EXISTS `Traking` (
  `Id_Traking` int(11) NOT NULL AUTO_INCREMENT,
  `NombreEvento` varchar(150) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Json_Evento` varchar(500) NOT NULL,
  `AccionEvento` varchar(150) NOT NULL,
  PRIMARY KEY (`Id_Traking`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `Traking`
--

INSERT INTO `Traking` (`Id_Traking`, `NombreEvento`, `Id_Usuario`, `Fecha`, `Json_Evento`, `AccionEvento`) VALUES
(1, 'Subir Archivo', 0, '0000-00-00 00:00:00', 'caro1.jpg', ''),
(2, 'Subir Archivo', 0, '0000-00-00 00:00:00', 'Fotos/caro2.jpg', ''),
(3, 'Subir Archivo', 0, '0000-00-00 00:00:00', 'Fotos/caro3.jpg', ''),
(4, 'Subir Archivo', 0, '0000-00-00 00:00:00', 'Fotos/caro4.jpg', ''),
(5, 'Subir Archivo', 0, '0000-00-00 00:00:00', 'Fotos/Cambio_Costo_y_Precio_Santiago_25Mar2015.xlsx', ''),
(6, 'Subir Archivo', 0, '0000-00-00 00:00:00', 'Fotos/Detalle_Empleados_Vlacsa.xls', ''),
(7, 'Subir Archivo', 0, '0000-00-00 00:00:00', 'Fotos/Detalle_Empleados_Vlacsa7.xls', ''),
(8, 'Subir Archivo', 0, '0000-00-00 00:00:00', 'Fotos/Detalle_Empleados_Vlacsa8.xls', '');

-- --------------------------------------------------------

--
-- Table structure for table `Usuario`
--

CREATE TABLE IF NOT EXISTS `Usuario` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Rut` varchar(10) NOT NULL,
  `Login` varchar(50) NOT NULL,
  `Clave` varchar(50) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `Estado_U` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `id_rol` (`id_rol`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `Usuario`
--

INSERT INTO `Usuario` (`ID`, `Rut`, `Login`, `Clave`, `id_rol`, `Estado_U`) VALUES
(1, '1-1', '09348c20a019be0318387c08df7a783d', '09348c20a019be0318387c08df7a783d', 1, 'ACTIVO'),
(2, '2-2', '0407e8c8285ab85509ac2884025dcf42', '0407e8c8285ab85509ac2884025dcf42', 2, 'ACTIVO'),
(3, '3-3', '4983a0ab83ed86e0e7213c8783940193', '4983a0ab83ed86e0e7213c8783940193', 3, 'ACTIVO'),
(4, '18161467-6', '21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3', 4, 'ACTIVO');

-- --------------------------------------------------------

--
-- Table structure for table `Visitas`
--

CREATE TABLE IF NOT EXISTS `Visitas` (
  `id_visita` int(11) NOT NULL,
  `observacion` varchar(10000) NOT NULL,
  `hora` varchar(5) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id_visita`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Sector`
--
ALTER TABLE `Sector`
  ADD CONSTRAINT `Sector_ibfk_1` FOREIGN KEY (`ciudad`) REFERENCES `Ciudad` (`id_ciudad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Usuario`
--
ALTER TABLE `Usuario`
  ADD CONSTRAINT `Usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `Rol` (`ID_r`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
