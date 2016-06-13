-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2016 a las 16:00:37
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_empl`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_employees`
--

CREATE TABLE `t_employees` (
  `EMPL_ID` int(11) NOT NULL,
  `OFFC_ID` int(11) NOT NULL,
  `KNLN_ID` int(11) DEFAULT NULL,
  `EMPL_FORNAME` varchar(50) NOT NULL,
  `EMPL_MIDDLE_NAME` varchar(50) DEFAULT NULL,
  `EMPL_SURNAME` varchar(50) NOT NULL,
  `EMPL_NUMBER` int(11) NOT NULL,
  `EMPL_HIRE_DATE` datetime NOT NULL,
  `EMPL_MENTOR_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_knowledge_lines`
--

CREATE TABLE `t_knowledge_lines` (
  `KNLN_ID` int(11) NOT NULL,
  `KNLN_NAME` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_knowledge_lines`
--

INSERT INTO `t_knowledge_lines` (`KNLN_ID`, `KNLN_NAME`) VALUES
(10, 'Java'),
(20, '.NET'),
(30, 'Mainframe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_offices`
--

CREATE TABLE `t_offices` (
  `OFFC_ID` int(11) NOT NULL,
  `OFFC_COUNTRY` varchar(30) NOT NULL,
  `OFFC_DESCRIPTION` varchar(100) DEFAULT NULL,
  `OFFC_CITY` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_offices`
--

INSERT INTO `t_offices` (`OFFC_ID`, `OFFC_COUNTRY`, `OFFC_DESCRIPTION`, `OFFC_CITY`) VALUES
(10, 'España', 'Oficina central', 'Madrid'),
(11, 'España', NULL, 'Madrid'),
(20, 'Chile', 'Oficina principal de Chile', 'Santiago'),
(30, 'Argentina', NULL, 'Buenos aires');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_employees`
--
ALTER TABLE `t_employees`
  ADD PRIMARY KEY (`EMPL_ID`);

--
-- Indices de la tabla `t_knowledge_lines`
--
ALTER TABLE `t_knowledge_lines`
  ADD PRIMARY KEY (`KNLN_ID`);

--
-- Indices de la tabla `t_offices`
--
ALTER TABLE `t_offices`
  ADD PRIMARY KEY (`OFFC_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_employees`
--
ALTER TABLE `t_employees`
  MODIFY `EMPL_ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
