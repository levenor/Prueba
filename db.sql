-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2017 a las 19:00:21
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fdj`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camp`
--

CREATE TABLE `camp` (
  `codigo` int(30) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apaterno` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `amaterno` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `rut` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `fechanacimiento` date NOT NULL,
  `sexo` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `comuna` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `region` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_responsable1` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fono_responsable1` int(15) NOT NULL,
  `mail_responsable1` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_responsable2` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fono_responsable2` int(15) NOT NULL,
  `mail_responsable2` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `con_quien_vive` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `ibolos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ibasal` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `DESCRIPCION` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `camp`
--

INSERT INTO `camp` (`codigo`, `nombre`, `apaterno`, `amaterno`, `rut`, `fechanacimiento`, `sexo`, `direccion`, `comuna`, `region`, `nombre_responsable1`, `fono_responsable1`, `mail_responsable1`, `nombre_responsable2`, `fono_responsable2`, `mail_responsable2`, `con_quien_vive`, `ibolos`, `ibasal`, `DESCRIPCION`) VALUES
(3, 'Jaime', 'Agurto', 'Palavecino', '18.123.131-9', '1992-09-08', 'hombre', 'osman perez freire 1600', 'Peñaflor', 'RM', '', 0, '', '', 0, '', '', 'Novorrapid', 'Lantus', ''),
(4, 'Maria Jose', 'Rodriguez', 'VÃ¡squez', '22.212.433-6', '2006-09-14', 'Femenino', 'Predio SeÃ±ora Magdalena s/n', 'Coihueco', 'Octava ', '', 0, '', '', 0, '', '', 'Humalog', 'Lantus', ''),
(5, 'CristiÃ¡n Patricio ', 'Contreras', 'Sandoval', '22.186.405-0', '2006-08-03', 'Masculin', 'Carlos Antunes 2581', 'Providencia', 'RM', '', 0, '', '', 0, '', '', 'Humalog', 'nph', ''),
(6, 'Alfonso Alejandro', 'Varela', 'LLanes', '21.736.425-6', '2004-12-24', 'Masculin', 'Los espinos de colmosur #175', 'ConCon', 'Quinta Region', '', 0, '', '', 0, '', '', 'Novorrapid', 'Levemir', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `camp`
--
ALTER TABLE `camp`
  ADD UNIQUE KEY `codigo` (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `camp`
--
ALTER TABLE `camp`
  MODIFY `codigo` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
