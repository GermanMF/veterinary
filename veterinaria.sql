-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-12-2016 a las 05:38:42
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `veterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

CREATE TABLE `color` (
  `idColor` int(2) UNSIGNED ZEROFILL NOT NULL,
  `color` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `idConsulta` int(7) UNSIGNED ZEROFILL NOT NULL,
  `idMascota` int(6) UNSIGNED ZEROFILL NOT NULL,
  `temp` double(5,2) NOT NULL,
  `frecC` int(3) DEFAULT NULL,
  `frecR` int(3) DEFAULT NULL,
  `pesoCons` double(5,2) NOT NULL,
  `motivo` varchar(500) DEFAULT NULL,
  `dx` varchar(500) DEFAULT NULL,
  `tx` varchar(500) DEFAULT NULL,
  `fechaCons` date NOT NULL,
  `observ` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desp`
--

CREATE TABLE `desp` (
  `idDesp` int(7) UNSIGNED ZEROFILL NOT NULL,
  `idMascota` int(6) UNSIGNED ZEROFILL NOT NULL,
  `fechaDesp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estetica`
--

CREATE TABLE `estetica` (
  `idEstetica` int(7) UNSIGNED ZEROFILL NOT NULL,
  `idMascota` int(6) UNSIGNED ZEROFILL NOT NULL,
  `servicio` enum('baño','corte') NOT NULL,
  `observ` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `idMascota` int(6) UNSIGNED ZEROFILL NOT NULL,
  `idPropietario` int(5) UNSIGNED ZEROFILL NOT NULL,
  `idRaza` int(3) UNSIGNED ZEROFILL NOT NULL,
  `idColor` int(2) UNSIGNED ZEROFILL NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `especie` enum('perro','gato') NOT NULL,
  `sexo` enum('macho','hembra') NOT NULL,
  `fechaNac` date DEFAULT NULL,
  `peso` double(5,2) DEFAULT NULL,
  `observ` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pension`
--

CREATE TABLE `pension` (
  `idPension` int(7) UNSIGNED ZEROFILL NOT NULL,
  `idMascota` int(6) UNSIGNED ZEROFILL NOT NULL,
  `fechaLl` date NOT NULL,
  `fechaSal` date NOT NULL,
  `observ` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietario`
--

CREATE TABLE `propietario` (
  `idPropietario` int(5) UNSIGNED ZEROFILL NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `apellidoP` varchar(15) DEFAULT NULL,
  `apellidoM` varchar(15) DEFAULT NULL,
  `calle` varchar(30) DEFAULT NULL,
  `colonia` varchar(30) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `observ` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raza`
--

CREATE TABLE `raza` (
  `idRaza` int(3) UNSIGNED ZEROFILL NOT NULL,
  `raza` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(2) UNSIGNED ZEROFILL NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `password` char(40) NOT NULL,
  `fechaLog` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `password`, `fechaLog`) VALUES
(01, 'Germán', 'fbd5c4e21f715ae152acdd465b3e5bcf3077d0fd', '2016-12-21 04:30:28'),
(02, 'Cecilia', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2016-12-21 05:30:27'),
(03, 'Karina', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2016-12-21 05:36:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacuna`
--

CREATE TABLE `vacuna` (
  `idVacuna` int(2) UNSIGNED ZEROFILL NOT NULL,
  `vacuna` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacuna2`
--

CREATE TABLE `vacuna2` (
  `idVacuna2` int(7) UNSIGNED ZEROFILL NOT NULL,
  `idMascota` int(6) UNSIGNED ZEROFILL NOT NULL,
  `idVacuna` int(2) UNSIGNED ZEROFILL NOT NULL,
  `fechaVac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`idColor`);

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`idConsulta`),
  ADD KEY `idMascota` (`idMascota`);

--
-- Indices de la tabla `desp`
--
ALTER TABLE `desp`
  ADD PRIMARY KEY (`idDesp`),
  ADD KEY `idMascota` (`idMascota`);

--
-- Indices de la tabla `estetica`
--
ALTER TABLE `estetica`
  ADD PRIMARY KEY (`idEstetica`),
  ADD KEY `idMascota` (`idMascota`);

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`idMascota`),
  ADD KEY `idPropietario` (`idPropietario`),
  ADD KEY `idRaza` (`idRaza`),
  ADD KEY `idColor` (`idColor`);

--
-- Indices de la tabla `pension`
--
ALTER TABLE `pension`
  ADD PRIMARY KEY (`idPension`),
  ADD KEY `idMascota` (`idMascota`);

--
-- Indices de la tabla `propietario`
--
ALTER TABLE `propietario`
  ADD PRIMARY KEY (`idPropietario`);

--
-- Indices de la tabla `raza`
--
ALTER TABLE `raza`
  ADD PRIMARY KEY (`idRaza`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `vacuna`
--
ALTER TABLE `vacuna`
  ADD PRIMARY KEY (`idVacuna`);

--
-- Indices de la tabla `vacuna2`
--
ALTER TABLE `vacuna2`
  ADD PRIMARY KEY (`idVacuna2`),
  ADD KEY `idMascota` (`idMascota`),
  ADD KEY `idVacuna` (`idVacuna`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `color`
--
ALTER TABLE `color`
  MODIFY `idColor` int(2) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `idConsulta` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `desp`
--
ALTER TABLE `desp`
  MODIFY `idDesp` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estetica`
--
ALTER TABLE `estetica`
  MODIFY `idEstetica` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `idMascota` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pension`
--
ALTER TABLE `pension`
  MODIFY `idPension` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `propietario`
--
ALTER TABLE `propietario`
  MODIFY `idPropietario` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `raza`
--
ALTER TABLE `raza`
  MODIFY `idRaza` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(2) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `vacuna`
--
ALTER TABLE `vacuna`
  MODIFY `idVacuna` int(2) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `vacuna2`
--
ALTER TABLE `vacuna2`
  MODIFY `idVacuna2` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `consulta_ibfk_1` FOREIGN KEY (`idMascota`) REFERENCES `mascota` (`idMascota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `desp`
--
ALTER TABLE `desp`
  ADD CONSTRAINT `desp_ibfk_1` FOREIGN KEY (`idMascota`) REFERENCES `mascota` (`idMascota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `estetica`
--
ALTER TABLE `estetica`
  ADD CONSTRAINT `estetica_ibfk_1` FOREIGN KEY (`idMascota`) REFERENCES `mascota` (`idMascota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD CONSTRAINT `mascota_ibfk_1` FOREIGN KEY (`idPropietario`) REFERENCES `propietario` (`idPropietario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mascota_ibfk_2` FOREIGN KEY (`idRaza`) REFERENCES `raza` (`idRaza`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mascota_ibfk_3` FOREIGN KEY (`idColor`) REFERENCES `color` (`idColor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pension`
--
ALTER TABLE `pension`
  ADD CONSTRAINT `pension_ibfk_1` FOREIGN KEY (`idMascota`) REFERENCES `mascota` (`idMascota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vacuna2`
--
ALTER TABLE `vacuna2`
  ADD CONSTRAINT `vacuna2_ibfk_1` FOREIGN KEY (`idMascota`) REFERENCES `mascota` (`idMascota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vacuna2_ibfk_2` FOREIGN KEY (`idVacuna`) REFERENCES `vacuna` (`idVacuna`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
