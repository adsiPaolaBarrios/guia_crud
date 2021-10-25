-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2021 a las 23:19:42
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `autoescapes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL,
  `fecha_hora` datetime DEFAULT NULL,
  `placa` varchar(11) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `operario_id` int(5) NOT NULL,
  `valor` int(20) NOT NULL,
  `comision` int(20) NOT NULL,
  `observaciones` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `fecha_hora`, `placa`, `marca`, `producto`, `operario_id`, `valor`, `comision`, `observaciones`) VALUES
(1, '1000-01-01 00:00:00', 'AC662KV', 'optra', 'Silenciador 1347', 1, 220000, 30000, 'Pabón vecino 10-15'),
(2, '1000-01-01 00:00:00', 'DML892', 'spark', 'Tubo de escape', 1, 120000, 20000, 'ok'),
(22, '2021-10-10 23:04:00', '22', '22', '22', 1, 2, 2, '2'),
(66, '1000-01-01 00:00:00', '6', '6', '6', 1, 6, 6, '666'),
(666, '1000-01-01 00:00:00', '6', '6', '6', 1, 6, 6, 'ñññññ'),
(66666, '2021-10-15 11:11:00', '666', '666', '666', 2, 666, 6662, '6666');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operarios`
--

CREATE TABLE `operarios` (
  `id_operario` int(5) NOT NULL,
  `identificacion` varchar(20) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `observaciones` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `operarios`
--

INSERT INTO `operarios` (`id_operario`, `identificacion`, `nombres`, `apellidos`, `observaciones`) VALUES
(1, '1', 'Francisco', 'Gutierez', 'k'),
(2, '2', 'miguel', 'Gonzalez', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(5) NOT NULL,
  `identificacion` varchar(20) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `contrasena` varchar(30) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` varchar(15) NOT NULL,
  `rol` int(5) NOT NULL,
  `estado` varchar(10) DEFAULT NULL,
  `departamento` int(5) DEFAULT NULL,
  `ciudad` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `identificacion`, `nombres`, `apellidos`, `usuario`, `contrasena`, `email`, `telefono`, `rol`, `estado`, `departamento`, `ciudad`) VALUES
(1, '1090384538', 'Oscar Ivan', 'gonzalez peÃ±a', '1090384538', '1090384538', 'oscar@misena.edu.co', '3228858439', 1, '1', 54, 'CUCUTA');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`),
  ADD KEY `operario_id` (`operario_id`);

--
-- Indices de la tabla `operarios`
--
ALTER TABLE `operarios`
  ADD PRIMARY KEY (`id_operario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66668;

--
-- AUTO_INCREMENT de la tabla `operarios`
--
ALTER TABLE `operarios`
  MODIFY `id_operario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`operario_id`) REFERENCES `operarios` (`id_operario`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
