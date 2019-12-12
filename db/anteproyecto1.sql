-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2019 a las 15:03:24
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asinacion`
--

CREATE TABLE `asinacion` (
  `idAsinacion` int(11) NOT NULL,
  `asiRevision` int(11) DEFAULT NULL,
  `asiProfesor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `idCargo` int(11) NOT NULL,
  `nombreCargo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`idCargo`, `nombreCargo`) VALUES
(1, 'Cordinador de Carrera'),
(2, 'Jefe de Departamento'),
(3, 'Decano'),
(4, 'Vicedecano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `idcarreras` int(11) NOT NULL,
  `nombreCarrera` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`idcarreras`, `nombreCarrera`) VALUES
(1, 'Desarrollo-de-Software'),
(2, 'Ingenieria-de-Sistemas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concejo`
--

CREATE TABLE `concejo` (
  `conCodigo` int(11) NOT NULL,
  `conNombre` varchar(45) DEFAULT NULL,
  `conApellido` varchar(45) DEFAULT NULL,
  `conCargo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `idDepartamentos` int(11) NOT NULL,
  `depNombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`idDepartamentos`, `depNombre`) VALUES
(1, 'Arquitectura y Redes de Computadoras'),
(2, 'Computación y Simulación de Sistemas'),
(3, 'Ingeniería de Software'),
(4, 'Programacion de Computadoras'),
(5, 'Sistemas de Información');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `codigoEstado` int(11) NOT NULL,
  `nombreEstado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `estCodigo` int(11) NOT NULL,
  `estNombre` varchar(45) DEFAULT NULL,
  `estApellido` varchar(45) DEFAULT NULL,
  `estCedula` varchar(45) DEFAULT NULL,
  `estNacimiento` date DEFAULT NULL,
  `estCorreo` varchar(45) DEFAULT NULL,
  `estSexo` char(1) DEFAULT NULL,
  `Estudiantescol` varchar(45) DEFAULT NULL,
  `estFoto` varchar(100) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `estCarrera` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`estCodigo`, `estNombre`, `estApellido`, `estCedula`, `estNacimiento`, `estCorreo`, `estSexo`, `Estudiantescol`, `estFoto`, `password`, `estCarrera`) VALUES
(1, 'Jesus ', 'Martinez', '20-14-4386', '1998-04-27', 'jmartinezp278@gmail.com', 'm', NULL, NULL, '12345', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivelacademico`
--

CREATE TABLE `nivelacademico` (
  `idNivelAcademico` int(11) NOT NULL,
  `nombreNivel` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nivelacademico`
--

INSERT INTO `nivelacademico` (`idNivelAcademico`, `nombreNivel`) VALUES
(1, 'Pregrado'),
(2, 'Maestria'),
(3, 'Doctorado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `proCodigo` int(11) NOT NULL,
  `proNombre` varchar(45) DEFAULT NULL,
  `proApellido` varchar(45) DEFAULT NULL,
  `proCedula` varchar(45) DEFAULT NULL,
  `proNacimiento` date DEFAULT NULL,
  `proSexo` char(1) DEFAULT NULL,
  `proCorreo` varchar(45) DEFAULT NULL,
  `proFoto` varchar(100) DEFAULT NULL,
  `proDepartamento` int(11) DEFAULT NULL,
  `proNivelAcademico` int(11) DEFAULT NULL,
  `proCargo` int(11) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`proCodigo`, `proNombre`, `proApellido`, `proCedula`, `proNacimiento`, `proSexo`, `proCorreo`, `proFoto`, `proDepartamento`, `proNivelAcademico`, `proCargo`, `password`) VALUES
(1, 'Juan', 'Zamora', '12234', '2019-11-03', 'm', 'jzamora@gmail.com', 'dist/img/profesores/pro1.jpg', 4, 2, 1, '12345'),
(2, 'Kexy', ' Rodriguez', '20202', '2019-11-04', 'M', 'jjj@gmail.com', 'dist/img/profesores/pro2.jpg', 4, 2, 1, '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revision`
--

CREATE TABLE `revision` (
  `revCoidgo` int(11) NOT NULL,
  `revFechal` date DEFAULT NULL,
  `revAnteproyecto` int(11) DEFAULT NULL,
  `revMensaje` varchar(45) DEFAULT NULL,
  `revEstado` int(11) DEFAULT NULL,
  `revConcejo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sustentacion`
--

CREATE TABLE `sustentacion` (
  `idsustentacion` int(11) NOT NULL,
  `fechaSustentacion` date DEFAULT NULL,
  `horaSustentacion` date DEFAULT NULL,
  `lugarSustentacion` varchar(45) DEFAULT NULL,
  `archivoSustentacion` varchar(100) DEFAULT NULL,
  `revisionSsute` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indices de la tabla `asinacion`
--
ALTER TABLE `asinacion`
  ADD PRIMARY KEY (`idAsinacion`),
  ADD KEY `fk_asignacion_revision` (`asiRevision`),
  ADD KEY `fk_asignacion_profesor` (`asiProfesor`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`idCargo`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`idcarreras`);

--
-- Indices de la tabla `concejo`
--
ALTER TABLE `concejo`
  ADD PRIMARY KEY (`conCodigo`),
  ADD KEY `fk_concejo_cargo` (`conCargo`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`idDepartamentos`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`codigoEstado`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`estCodigo`),
  ADD KEY `fk_carreras_idcarreras` (`estCarrera`);

--
-- Indices de la tabla `nivelacademico`
--
ALTER TABLE `nivelacademico`
  ADD PRIMARY KEY (`idNivelAcademico`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`proCodigo`),
  ADD KEY `fk_profesores_departamento` (`proDepartamento`),
  ADD KEY `fk_profesores_nivel` (`proNivelAcademico`),
  ADD KEY `fk_profesores_cargo` (`proCargo`);

--
-- Indices de la tabla `revision`
--
ALTER TABLE `revision`
  ADD PRIMARY KEY (`revCoidgo`),
  ADD KEY `fk_revision_revEstado` (`revEstado`),
  ADD KEY `fl_revision_revConcejo` (`revConcejo`),
  ADD KEY `fk_revision_revAnteproecto` (`revAnteproyecto`);

--
-- Indices de la tabla `sustentacion`
--
ALTER TABLE `sustentacion`
  ADD PRIMARY KEY (`idsustentacion`),
  ADD KEY `fk_sustentacion_revision` (`revisionSsute`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anteproyecto`
--
ALTER TABLE `anteproyecto`
  MODIFY `antCodigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `asinacion`
--
ALTER TABLE `asinacion`
  MODIFY `idAsinacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `idCargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `idcarreras` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `concejo`
--
ALTER TABLE `concejo`
  MODIFY `conCodigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `idDepartamentos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `codigoEstado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `estCodigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `nivelacademico`
--
ALTER TABLE `nivelacademico`
  MODIFY `idNivelAcademico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `proCodigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `revision`
--
ALTER TABLE `revision`
  MODIFY `revCoidgo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sustentacion`
--
ALTER TABLE `sustentacion`
  MODIFY `idsustentacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `anteproyecto`
--
ALTER TABLE `anteproyecto`
  ADD CONSTRAINT `fk_anteproyecto_antAsesor` FOREIGN KEY (`antAsesor`) REFERENCES `profesores` (`proCodigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_anteproyecto_antEstudiante` FOREIGN KEY (`antEstudiante`) REFERENCES `estudiantes` (`estCodigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `asinacion`
--
ALTER TABLE `asinacion`
  ADD CONSTRAINT `fk_asignacion_profesor` FOREIGN KEY (`asiProfesor`) REFERENCES `profesores` (`proCodigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_asignacion_revision` FOREIGN KEY (`asiRevision`) REFERENCES `revision` (`revCoidgo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `concejo`
--
ALTER TABLE `concejo`
  ADD CONSTRAINT `fk_concejo_cargo` FOREIGN KEY (`conCargo`) REFERENCES `cargo` (`idCargo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `fk_carreras_idcarreras` FOREIGN KEY (`estCarrera`) REFERENCES `carreras` (`idcarreras`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD CONSTRAINT `fk_profesores_cargo` FOREIGN KEY (`proCargo`) REFERENCES `cargo` (`idCargo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profesores_departamento` FOREIGN KEY (`proDepartamento`) REFERENCES `departamentos` (`idDepartamentos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profesores_nivel` FOREIGN KEY (`proNivelAcademico`) REFERENCES `nivelacademico` (`idNivelAcademico`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `revision`
--
ALTER TABLE `revision`
  ADD CONSTRAINT `fk_revision_revAnteproecto` FOREIGN KEY (`revAnteproyecto`) REFERENCES `anteproyecto` (`antCodigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_revision_revEstado` FOREIGN KEY (`revEstado`) REFERENCES `estado` (`codigoEstado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fl_revision_revConcejo` FOREIGN KEY (`revConcejo`) REFERENCES `concejo` (`conCodigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sustentacion`
--
ALTER TABLE `sustentacion`
  ADD CONSTRAINT `fk_sustentacion_revision` FOREIGN KEY (`revisionSsute`) REFERENCES `revision` (`revCoidgo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
