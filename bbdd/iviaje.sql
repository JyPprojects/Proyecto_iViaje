-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-01-2021 a las 20:09:41
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

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
-- Estructura de tabla para la tabla `alojamiento`
--

CREATE TABLE `alojamiento` (
  `id_alojamiento` int(11) NOT NULL,
  `tipo_alojamiento` varchar(25) NOT NULL,
  `direccion_alojamiento` int(11) NOT NULL,
  `tlfn_estancia` int(10) DEFAULT NULL,
  `id_viaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_necesidades`
--

CREATE TABLE `catalogo_necesidades` (
  `id_necesidad` int(11) NOT NULL,
  `id_indice` int(11) NOT NULL,
  `nombre_necesidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogo_necesidades`
--

INSERT INTO `catalogo_necesidades` (`id_necesidad`, `id_indice`, `nombre_necesidad`) VALUES
(1, 1, 'Comida'),
(2, 1, 'Bebida'),
(3, 1, 'Utensilios'),
(4, 2, 'Medio de transporte'),
(5, 2, 'Combustible'),
(6, 3, 'Ubicación'),
(7, 3, 'Tipo_estancia'),
(8, 3, 'Direccion'),
(9, 3, 'Telefono');

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
(9, 'PRUEEEEBA', '$2y$10$oaSDHaXufgAWNeSKYt0GButYVc9i7G3vXn8lS4iWyrkY3RJtMhAqe', '241234@hotmail.com', '2020-11-26', 'Prueba1', 'prueba2'),
(14, 'gaoniS00009', '$2y$10$sQ/PKAIpSioww1zuGLR12OHiu634Yknee2O5P6m4arnTDSaq/1qmG', 'psdigj@gmail.com', '0001-01-01', 'psfpoj', 'pasdifnjpi'),
(35, 'prueba 6 millones', '', '', '0000-00-00', '', ''),
(36, 'prueba 7 millones', '', '', '0000-00-00', '', ''),
(37, 'PRUEBA 8 MILLONES', '', '', '0000-00-00', '', ''),
(38, 'PRUEBA 9 MILLONES', '', '', '0000-00-00', '', ''),
(39, 'Prueba42', '$2y$10$EVKvYJImTVpt6H55YZbALelhyKGveXGF32ATCySGKkfqz5iUvLYEq', 'prueba1@gmail.com', '0000-00-00', 'Alberto', 'prueba1'),
(40, 'espartaco', '$2y$10$CAOI9Nk8kXuIMAah3iq..OGAOEI962STH6.lKBjbq8mK7wNgVFWZS', 'sffg@gmail.com', '0000-00-00', 'espar', 'taco');

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
-- Estructura de tabla para la tabla `necesidades_viaje`
--

CREATE TABLE `necesidades_viaje` (
  `id_necesidad_viaje` int(11) NOT NULL,
  `id_viaje` int(11) NOT NULL,
  `id_necesidad` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `necesidad_viaje` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

CREATE TABLE `prueba` (
  `comida` varchar(25) NOT NULL,
  `usuarios` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prueba`
--

INSERT INTO `prueba` (`comida`, `usuarios`) VALUES
('aguacates', 'pablo'),
('hamburguesas', 'juanan'),
('pan_hamburguesa', 'sevi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transporte`
--

CREATE TABLE `transporte` (
  `id_transporte` int(11) NOT NULL,
  `tipo_transporte` varchar(25) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `combustible` varchar(25) DEFAULT NULL,
  `id_viaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(149, 2, 'Torrey34444', '0000-00-00', '0000-00-00', 0),
(150, 8, 'Tengoqueborraresto', '0000-00-00', '0000-00-00', 0),
(152, 40, 'Manuela565665735', '2020-12-01', '2020-12-09', 800),
(156, 9, 'Holabuenas4', '2021-01-20', '2021-01-15', 7568678);

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
-- Indices de la tabla `alojamiento`
--
ALTER TABLE `alojamiento`
  ADD PRIMARY KEY (`id_alojamiento`),
  ADD KEY `id_viaje` (`id_viaje`);

--
-- Indices de la tabla `catalogo_necesidades`
--
ALTER TABLE `catalogo_necesidades`
  ADD PRIMARY KEY (`id_necesidad`),
  ADD KEY `id_indice` (`id_indice`);

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
-- Indices de la tabla `necesidades_viaje`
--
ALTER TABLE `necesidades_viaje`
  ADD PRIMARY KEY (`id_necesidad_viaje`),
  ADD KEY `id_viaje` (`id_viaje`),
  ADD KEY `id_necesidad` (`id_necesidad`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `prueba`
--
ALTER TABLE `prueba`
  ADD PRIMARY KEY (`comida`);

--
-- Indices de la tabla `transporte`
--
ALTER TABLE `transporte`
  ADD PRIMARY KEY (`id_transporte`),
  ADD KEY `id_viaje` (`id_viaje`);

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
-- AUTO_INCREMENT de la tabla `alojamiento`
--
ALTER TABLE `alojamiento`
  MODIFY `id_alojamiento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `catalogo_necesidades`
--
ALTER TABLE `catalogo_necesidades`
  MODIFY `id_necesidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `datosusuario`
--
ALTER TABLE `datosusuario`
  MODIFY `id_usuario` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `lista_indice`
--
ALTER TABLE `lista_indice`
  MODIFY `id_indice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `necesidades_viaje`
--
ALTER TABLE `necesidades_viaje`
  MODIFY `id_necesidad_viaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `transporte`
--
ALTER TABLE `transporte`
  MODIFY `id_transporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `viajes`
--
ALTER TABLE `viajes`
  MODIFY `idviaje` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alojamiento`
--
ALTER TABLE `alojamiento`
  ADD CONSTRAINT `alojamiento_ibfk_1` FOREIGN KEY (`id_viaje`) REFERENCES `viajes` (`idviaje`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `catalogo_necesidades`
--
ALTER TABLE `catalogo_necesidades`
  ADD CONSTRAINT `catalogo_necesidades_ibfk_1` FOREIGN KEY (`id_indice`) REFERENCES `lista_indice` (`id_indice`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `necesidades_viaje`
--
ALTER TABLE `necesidades_viaje`
  ADD CONSTRAINT `necesidades_viaje_ibfk_2` FOREIGN KEY (`id_viaje`) REFERENCES `viajes` (`idviaje`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `necesidades_viaje_ibfk_4` FOREIGN KEY (`id_necesidad`) REFERENCES `catalogo_necesidades` (`id_necesidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `necesidades_viaje_ibfk_5` FOREIGN KEY (`id_usuario`) REFERENCES `datosusuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `transporte`
--
ALTER TABLE `transporte`
  ADD CONSTRAINT `transporte_ibfk_1` FOREIGN KEY (`id_viaje`) REFERENCES `viajes` (`idviaje`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
