-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2020 a las 15:33:55
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `iviaje`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_necesidades`
--

CREATE TABLE `catalogo_necesidades` (
  `id_necesidad` int(11) NOT NULL,
  `nombre_necesidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogo_necesidades`
--

INSERT INTO `catalogo_necesidades` (`id_necesidad`, `nombre_necesidad`) VALUES
(1, 'Comida'),
(2, 'Bebida'),
(3, 'Utensilios'),
(4, 'Medio de transporte'),
(5, 'Combustible'),
(6, 'Ubicación'),
(7, 'Estancia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosusuario`
--

CREATE TABLE `datosusuario` (
  `id_usuario` int(50) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contraseña` varchar(150) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datosusuario`
--

INSERT INTO `datosusuario` (`id_usuario`, `usuario`, `contraseña`, `correo`, `fecha`, `nombre`, `apellidos`) VALUES
(1, 'david', '$2y$10$h.H/6DbLP/66/Ssn.YuYfuGEnQvvsZ.0GYo5tKS96VYIFCKoyX9bW', 'tudavid@gmail.com', '1999-01-02', 'David', 'Muñoz'),
(2, 'gaonis', '$2y$10$LzhkZYe76xcpa405H6MW6eUbfHrKfLcS6gNOigr.WwkXRuxJE.mtu', 'srgaona1@gmail.com', '0000-00-00', 'Pablo', ''),
(3, 'gaonis007', '$2y$10$/uvrhHy1iqLztXw2S85oHOaCF10Kx81.Xp2YL9XmRuoHZuARwkM4e', 'tudavid@gmail.com', '0023-12-31', 'Juan Antonio', 'Rodriguez Martín'),
(4, 'gerar', '$2y$10$yVG87iP4LQ9H7kki5A8Fbu2Engho/6f./kjSp3Bga0wvCJgcv9hE6', 'g@gmail.com', '2313-02-10', 'gerardo', 'primero'),
(5, 'juanan', '$2y$10$Z9TQRhOCDpYIusNXykNsJecwIEKnhbTN4vjjuqM52Lv2400vFMD4q', 'tujuanilloloco@yahoo.es', '0000-00-00', '', ''),
(6, 'PAco', '$2y$10$ZhwGJf.9iVIqKXINl31C2OXZh7XjqCJE9m0Ozfa/fwYm51VgE/GJm', 'pago@gsdfnl.com', '0000-00-00', 'Paco', 'Gomes'),
(7, 'primo', '$2y$10$ruivUJBPvalpkVpXHSD1G.7pBJFyvjO.XJ5mFc3ntIwhXPW1v0nKC', 'tujuanilloloco@yahoo.es', '0000-00-00', '', ''),
(8, 'sevi', '$2y$10$/4kOYGlMlE2/JSa52yYEpeJ3tTAVGOCO/H1hAZk2nzUYDl.o.RyY2', 'tusevi@gmail.com', '0000-00-00', 'Alejandro', ''),
(9, 'PRUEEEEBA', '$2y$10$oaSDHaXufgAWNeSKYt0GButYVc9i7G3vXn8lS4iWyrkY3RJtMhAqe', '241234@hotmail.com', '2020-11-26', 'Prueba1', 'prueba2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_indice`
--

CREATE TABLE `lista_indice` (
  `id_indice` int(11) NOT NULL,
  `nombre_indice` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lista_indice`
--

INSERT INTO `lista_indice` (`id_indice`, `nombre_indice`) VALUES
(1, 'Necesidades'),
(2, 'Transporte'),
(3, 'Alojamiento'),
(4, 'Organización'),
(5, 'Fotos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viajes`
--

CREATE TABLE `viajes` (
  `idviaje` int(20) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre_viaje` varchar(150) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `bote` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `viajes`
--

INSERT INTO `viajes` (`idviaje`, `id_usuario`, `nombre_viaje`, `fecha_inicio`, `fecha_fin`, `bote`) VALUES
(1, 2, 'Mi Viaje a Torremolinos', '2020-11-04', '2020-11-12', 15),
(2, 2, 'Benalmadena', '2020-11-20', '2020-11-21', 200),
(3, 5, 'Viaje a Egipto', '2020-11-09', '2020-12-03', 5000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viajes_usuario`
--

CREATE TABLE `viajes_usuario` (
  `id_viaje` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogo_necesidades`
--
ALTER TABLE `catalogo_necesidades`
  ADD PRIMARY KEY (`id_necesidad`);

--
-- Indices de la tabla `datosusuario`
--
ALTER TABLE `datosusuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `lista_indice`
--
ALTER TABLE `lista_indice`
  ADD PRIMARY KEY (`id_indice`);

--
-- Indices de la tabla `viajes`
--
ALTER TABLE `viajes`
  ADD PRIMARY KEY (`idviaje`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `viajes_usuario`
--
ALTER TABLE `viajes_usuario`
  ADD PRIMARY KEY (`id_viaje`,`id_usuario`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogo_necesidades`
--
ALTER TABLE `catalogo_necesidades`
  MODIFY `id_necesidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `datosusuario`
--
ALTER TABLE `datosusuario`
  MODIFY `id_usuario` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `lista_indice`
--
ALTER TABLE `lista_indice`
  MODIFY `id_indice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `viajes`
--
ALTER TABLE `viajes`
  MODIFY `idviaje` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `viajes`
--
ALTER TABLE `viajes`
  ADD CONSTRAINT `viajes_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `datosusuario` (`id_usuario`);

--
-- Filtros para la tabla `viajes_usuario`
--
ALTER TABLE `viajes_usuario`
  ADD CONSTRAINT `viajes_usuario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `datosusuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `viajes_usuario_ibfk_2` FOREIGN KEY (`id_viaje`) REFERENCES `viajes` (`idviaje`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
