-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 13-09-2023 a las 21:57:07
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `funciona`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id_area` int(11) NOT NULL,
  `nombre_area` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id_area`, `nombre_area`) VALUES
(1, ''),
(2, ''),
(3, 'sala de espera'),
(4, 'sala de espera'),
(5, 'quirofano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaciones`
--

CREATE TABLE `asignaciones` (
  `id_asignaciones` int(11) NOT NULL,
  `id_enfermeros` int(11) DEFAULT NULL,
  `id_paciente` int(11) DEFAULT NULL,
  `id_area` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfermeros`
--

CREATE TABLE `enfermeros` (
  `id_enfermeros` int(11) NOT NULL,
  `nombre_enfermero` varchar(11) NOT NULL,
  `id_paciente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `enfermeros`
--

INSERT INTO `enfermeros` (`id_enfermeros`, `nombre_enfermero`, `id_paciente`) VALUES
(2, 'raul', NULL),
(3, 'raul', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formas_llamado`
--

CREATE TABLE `formas_llamado` (
  `id_llamados` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `formas_llamado`
--

INSERT INTO `formas_llamado` (`id_llamados`, `nombre`) VALUES
(1, ''),
(2, ''),
(3, ''),
(4, 'ddd'),
(5, 'jjjj'),
(6, 'hgghvb');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id_paciente` int(11) NOT NULL,
  `id_area` int(11) DEFAULT NULL,
  `id_enfermeros` int(11) DEFAULT NULL,
  `nombre_paciente` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id_paciente`, `id_area`, `id_enfermeros`, `nombre_paciente`) VALUES
(1, NULL, NULL, 'fulanito'),
(2, NULL, NULL, 'fulanito');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `asignaciones`
--
ALTER TABLE `asignaciones`
  ADD PRIMARY KEY (`id_asignaciones`),
  ADD UNIQUE KEY `id_area` (`id_area`),
  ADD UNIQUE KEY `id_enfermeros` (`id_enfermeros`),
  ADD UNIQUE KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `enfermeros`
--
ALTER TABLE `enfermeros`
  ADD PRIMARY KEY (`id_enfermeros`),
  ADD UNIQUE KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `formas_llamado`
--
ALTER TABLE `formas_llamado`
  ADD PRIMARY KEY (`id_llamados`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id_paciente`),
  ADD UNIQUE KEY `id_enfermeros` (`id_enfermeros`),
  ADD UNIQUE KEY `id_area_2` (`id_area`),
  ADD KEY `id_area` (`id_area`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `asignaciones`
--
ALTER TABLE `asignaciones`
  MODIFY `id_asignaciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `enfermeros`
--
ALTER TABLE `enfermeros`
  MODIFY `id_enfermeros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `formas_llamado`
--
ALTER TABLE `formas_llamado`
  MODIFY `id_llamados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignaciones`
--
ALTER TABLE `asignaciones`
  ADD CONSTRAINT `asignaciones_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id_paciente`),
  ADD CONSTRAINT `asignaciones_ibfk_2` FOREIGN KEY (`id_enfermeros`) REFERENCES `enfermeros` (`id_enfermeros`),
  ADD CONSTRAINT `asignaciones_ibfk_3` FOREIGN KEY (`id_area`) REFERENCES `areas` (`id_area`);

--
-- Filtros para la tabla `enfermeros`
--
ALTER TABLE `enfermeros`
  ADD CONSTRAINT `enfermeros_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id_paciente`);

--
-- Filtros para la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD CONSTRAINT `pacientes_ibfk_1` FOREIGN KEY (`id_area`) REFERENCES `areas` (`id_area`),
  ADD CONSTRAINT `pacientes_ibfk_2` FOREIGN KEY (`id_enfermeros`) REFERENCES `enfermeros` (`id_enfermeros`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
