-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2019 a las 10:02:05
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `anteproyecto1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anteproyecto`
--

CREATE TABLE `anteproyecto` (
  `antCodigo` int(11) NOT NULL,
  `antEstudiante` int(11) DEFAULT NULL,
  `antTitulo` varchar(45) DEFAULT NULL,
  `antObjetivo` varchar(150) DEFAULT NULL,
  `antTitpo` varchar(45) DEFAULT NULL,
  `antAsesor` int(11) DEFAULT NULL,
  `antArchivo` varchar(225) DEFAULT NULL,
  `antPrioridad` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `anteproyecto`
--

INSERT INTO `anteproyecto` (`antCodigo`, `antEstudiante`, `antTitulo`, `antObjetivo`, `antTitpo`, `antAsesor`, `antArchivo`, `antPrioridad`) VALUES
(4, 1, 'Sistema de Tesis', 'tesis de la univercidad tecnologica de panama', 'Teorico', 1, 'prueba1.pdf', '4');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anteproyecto`
--
ALTER TABLE `anteproyecto`
  ADD PRIMARY KEY (`antCodigo`),
  ADD KEY `fk_anteproyecto_antEstudiante` (`antEstudiante`),
  ADD KEY `fk_anteproyecto_antAsesor` (`antAsesor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anteproyecto`
--
ALTER TABLE `anteproyecto`
  MODIFY `antCodigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `anteproyecto`
--
ALTER TABLE `anteproyecto`
  ADD CONSTRAINT `fk_anteproyecto_antAsesor` FOREIGN KEY (`antAsesor`) REFERENCES `profesores` (`proCodigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_anteproyecto_antEstudiante` FOREIGN KEY (`antEstudiante`) REFERENCES `estudiantes` (`estCodigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
