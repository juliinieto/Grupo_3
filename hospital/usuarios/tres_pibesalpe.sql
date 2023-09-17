-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 15-09-2023 a las 23:46:35
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
-- Base de datos: `tres_pibesalpe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `nombre_usuario` varchar(1000) NOT NULL,
  `contraseña` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`nombre_usuario`, `contraseña`) VALUES
('pata', 'talleres'),
('001', '123\r\n'),
('coFran', 'instituto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login2`
--

CREATE TABLE `login2` (
  `id` int(11) NOT NULL,
  `nombre` varchar(1000) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login2`
--

INSERT INTO `login2` (`id`, `nombre`, `dni`, `telefono`, `usuario`, `contraseña`) VALUES
(1, 'Franco Salvatierra', '46309993', '3516808259', 'coFran', '12345'),
(2, 'Leonardo Villarreal', '46225351', '3513886298', 'Leo', '678910'),
(3, 'Camila Allende', '46225369', '3518149412', 'Camila', '1112131415'),
(4, 'Julieta Nieto', '46455659', '3518620514', 'Juli', '15161718');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login3`
--

CREATE TABLE `login3` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(1000) NOT NULL,
  `contraseña` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opi_usuarios`
--

CREATE TABLE `opi_usuarios` (
  `id_cliente` int(11) NOT NULL,
  `nom_ape` varchar(1000) NOT NULL,
  `opinion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `opi_usuarios`
--

INSERT INTO `opi_usuarios` (`id_cliente`, `nom_ape`, `opinion`) VALUES
(1, 'Franco Salvatierra', 'xd'),
(2, 'Leonardo Villarreal', 'me senti muy poco apreciado.'),
(3, 'Julieta Nieto', 'pesimo servicio'),
(4, 'Camila Allende', 'bien good xd'),
(5, 'Franco Salvatierra', 'xd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tres_pibesalpe`
--

CREATE TABLE `tres_pibesalpe` (
  `id_pibes` int(11) NOT NULL,
  `texto` varchar(1000) NOT NULL,
  `imagen` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tres_pibesalpe`
--

INSERT INTO `tres_pibesalpe` (`id_pibes`, `texto`, `imagen`) VALUES
(1, 'tres pibes al pedo.\r\nCuenta la historia de que 3 valerosos muchachos llamados \r\nPata,WAIO y coFran decidieron aventarse a un mundo desconocido.\r\nEstos jovenes', 'http://localhost/coFran2/img/trespibes.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login2`
--
ALTER TABLE `login2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login3`
--
ALTER TABLE `login3`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `opi_usuarios`
--
ALTER TABLE `opi_usuarios`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `tres_pibesalpe`
--
ALTER TABLE `tres_pibesalpe`
  ADD PRIMARY KEY (`id_pibes`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login2`
--
ALTER TABLE `login2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `login3`
--
ALTER TABLE `login3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `opi_usuarios`
--
ALTER TABLE `opi_usuarios`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tres_pibesalpe`
--
ALTER TABLE `tres_pibesalpe`
  MODIFY `id_pibes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
