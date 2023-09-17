-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 15-09-2023 a las 23:32:54
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
-- Base de datos: `hospital_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id`, `nombre`) VALUES
(1, 'Emergencia'),
(2, 'Emergencia'),
(3, 'Emergencia'),
(4, 'Emergencia'),
(5, 'Pediatría'),
(6, 'Pediatría'),
(7, 'Emergencia'),
(8, 'Pediatría'),
(9, 'Pediatría'),
(10, 'Pediatría'),
(11, 'Pediatría'),
(12, 'Pediatría'),
(13, 'Emergencia'),
(14, 'Emergencia'),
(15, 'Emergencia'),
(16, 'Emergencia'),
(17, 'Emergencia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfermeros`
--

CREATE TABLE `enfermeros` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `area_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `enfermeros`
--

INSERT INTO `enfermeros` (`id`, `nombre`, `area_id`) VALUES
(1, 'manuelo', 1),
(2, 'lolo', 4),
(3, 'marcos', 9),
(4, 'marcos', 10),
(5, 'marcos', 11),
(6, 'marcos', 12),
(7, 'marcos', 13),
(8, 'marcos', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `area_id` int(11) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `dni` varchar(15) DEFAULT NULL,
  `estado_paciente` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `nombre`, `area_id`, `apellido`, `dni`, `estado_paciente`) VALUES
(1, 'lorenzo', 2, NULL, NULL, NULL),
(2, 'tete', 3, NULL, NULL, NULL),
(3, 'paola', 5, NULL, NULL, NULL),
(4, 'paola', 6, NULL, NULL, NULL),
(5, 'pamela', 7, NULL, NULL, NULL),
(6, 'pedro', 8, NULL, NULL, NULL),
(7, 'lara', 15, NULL, NULL, NULL),
(8, 'lara', 16, NULL, NULL, NULL),
(9, 'lara', 17, NULL, NULL, NULL),
(10, 'adolfo', NULL, 'risotto', '2022202', NULL),
(11, 'maria', NULL, 'risotto', '2022202', NULL),
(12, 'jose', NULL, 'risotto', '2022202', 'terminal');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `enfermeros`
--
ALTER TABLE `enfermeros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `area_id` (`area_id`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `area_id` (`area_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `enfermeros`
--
ALTER TABLE `enfermeros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `enfermeros`
--
ALTER TABLE `enfermeros`
  ADD CONSTRAINT `enfermeros_ibfk_1` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`);

--
-- Filtros para la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD CONSTRAINT `pacientes_ibfk_1` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
