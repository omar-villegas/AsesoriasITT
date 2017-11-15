-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 15-11-2017 a las 01:51:17
-- Versión del servidor: 5.6.35
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `tutorias6`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `carreraid` int(2) NOT NULL DEFAULT '0',
  `descripC` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`carreraid`, `descripC`) VALUES
(1, 'Arquitectura'),
(2, 'Contador Publico'),
(3, 'Ing. Ambiental'),
(4, 'Ing. Biomedia'),
(5, 'Ing. Bioquimica'),
(6, 'Ing. Civil'),
(7, 'Ing. Electromecanica'),
(8, 'Ing. Electronica'),
(9, 'Ing. en Aeronautica'),
(10, 'Ing. en Diseño Industrial'),
(11, 'Ing. Gestion Empresarial'),
(12, 'Ing. Informatica'),
(13, 'Ing. en Logistica'),
(14, 'Ing. en Nanotecnologia'),
(15, 'Ing. Sistemas Computacionales'),
(16, 'Ing. en Tecnologias de la Informacion y Comunicaciones'),
(17, 'Ing. Industrial'),
(18, 'Ing. Quimica'),
(19, 'Ing. Mecanica'),
(20, 'Lic. en Administracion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutorias`
--

CREATE TABLE `tutorias` (
  `id_tutoria` int(11) NOT NULL,
  `id_maestro` int(6) DEFAULT NULL,
  `nombreT` varchar(60) DEFAULT NULL,
  `horaE` time DEFAULT NULL,
  `horaS` time DEFAULT NULL,
  `Salon` varchar(60) DEFAULT NULL,
  `limite` int(2) DEFAULT NULL,
  `descripTuto` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `numcontrol` int(8) NOT NULL DEFAULT '0',
  `nombres` varchar(40) DEFAULT NULL,
  `apellidos` varchar(40) DEFAULT NULL,
  `semestre` int(2) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `id_carrera` int(2) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`numcontrol`, `nombres`, `apellidos`, `semestre`, `telefono`, `id_carrera`, `correo`, `password`) VALUES
(13211106, 'Omar', 'Villegas Castillo', 7, '6647142963', 15, 'villegasOmar@gmail.com', '12345'),
(13211137, 'Luis Fernando', 'Ramirez Vasquez', 7, '6646031852', 15, 'ramirezFernando@gmail.com', '12345'),
(14210423, 'Miguel Angel', 'Pasillas Luis', 6, '6646031852', 15, 'pasillasAngel@gmail.com', '12345'),
(14210427, 'Evans Josue', 'Munive Saldaña', 6, '6647142963', 15, 'muniveEvans@gmail.com', '12345'),
(14210448, 'Josue Adrian', 'Mendoza Lorenzo', 6, '6645120741', 15, 'mendozaJosue@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_tutorias`
--

CREATE TABLE `usuarios_tutorias` (
  `ida` int(11) DEFAULT NULL,
  `idt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`carreraid`);

--
-- Indices de la tabla `tutorias`
--
ALTER TABLE `tutorias`
  ADD PRIMARY KEY (`id_tutoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`numcontrol`);

--
-- Indices de la tabla `usuarios_tutorias`
--
ALTER TABLE `usuarios_tutorias`
  ADD KEY `fk_a` (`ida`),
  ADD KEY `fk_t` (`idt`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tutorias`
--
ALTER TABLE `tutorias`
  MODIFY `id_tutoria` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios_tutorias`
--
ALTER TABLE `usuarios_tutorias`
  ADD CONSTRAINT `usuarios_tutorias_ibfk_1` FOREIGN KEY (`ida`) REFERENCES `usuario` (`numcontrol`),
  ADD CONSTRAINT `usuarios_tutorias_ibfk_2` FOREIGN KEY (`idt`) REFERENCES `tutorias` (`id_tutoria`);
