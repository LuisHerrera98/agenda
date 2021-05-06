-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2021 a las 13:20:25
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
-- Base de datos: `agendarm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domingo`
--

CREATE TABLE `domingo` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mes` varchar(200) NOT NULL,
  `dia` varchar(200) NOT NULL,
  `cinco` varchar(200) NOT NULL,
  `cincoM` varchar(200) NOT NULL,
  `seis` varchar(200) NOT NULL,
  `seisM` varchar(200) NOT NULL,
  `siete` varchar(200) NOT NULL,
  `sieteM` varchar(200) NOT NULL,
  `ocho` varchar(200) NOT NULL,
  `ochoM` varchar(200) NOT NULL,
  `nueve` varchar(200) NOT NULL,
  `nueveM` varchar(200) NOT NULL,
  `diez` varchar(200) NOT NULL,
  `diezM` varchar(200) NOT NULL,
  `once` varchar(200) NOT NULL,
  `onceM` varchar(200) NOT NULL,
  `doce` varchar(200) NOT NULL,
  `doceM` varchar(200) NOT NULL,
  `trece` varchar(200) NOT NULL,
  `treceM` varchar(200) NOT NULL,
  `catorce` varchar(200) NOT NULL,
  `catorceM` varchar(200) NOT NULL,
  `quince` varchar(200) NOT NULL,
  `quinceM` varchar(200) NOT NULL,
  `dieciseis` varchar(200) NOT NULL,
  `dieciseisM` varchar(200) NOT NULL,
  `diecisiete` varchar(200) NOT NULL,
  `diecisieteM` varchar(200) NOT NULL,
  `dieciocho` varchar(200) NOT NULL,
  `dieciochoM` varchar(200) NOT NULL,
  `diecinueve` varchar(200) NOT NULL,
  `diecinueveM` varchar(200) NOT NULL,
  `veinte` varchar(200) NOT NULL,
  `veinteM` varchar(200) NOT NULL,
  `veintiuno` varchar(200) NOT NULL,
  `veintiunoM` varchar(200) NOT NULL,
  `veintidos` varchar(200) NOT NULL,
  `veintidosM` varchar(200) NOT NULL,
  `veintitres` varchar(200) NOT NULL,
  `veintitresM` varchar(200) NOT NULL,
  `cero` varchar(200) NOT NULL,
  `ceroM` varchar(200) NOT NULL,
  `una` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `domingo`
--

INSERT INTO `domingo` (`id`, `user_id`, `mes`, `dia`, `cinco`, `cincoM`, `seis`, `seisM`, `siete`, `sieteM`, `ocho`, `ochoM`, `nueve`, `nueveM`, `diez`, `diezM`, `once`, `onceM`, `doce`, `doceM`, `trece`, `treceM`, `catorce`, `catorceM`, `quince`, `quinceM`, `dieciseis`, `dieciseisM`, `diecisiete`, `diecisieteM`, `dieciocho`, `dieciochoM`, `diecinueve`, `diecinueveM`, `veinte`, `veinteM`, `veintiuno`, `veintiunoM`, `veintidos`, `veintidosM`, `veintitres`, `veintitresM`, `cero`, `ceroM`, `una`) VALUES
(5, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 11, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 12, '', 'Domingo', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jueves`
--

CREATE TABLE `jueves` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mes` varchar(200) NOT NULL,
  `dia` varchar(200) NOT NULL,
  `cinco` varchar(200) NOT NULL,
  `cincoM` varchar(200) NOT NULL,
  `seis` varchar(200) NOT NULL,
  `seisM` varchar(200) NOT NULL,
  `siete` varchar(200) NOT NULL,
  `sieteM` varchar(200) NOT NULL,
  `ocho` varchar(200) NOT NULL,
  `ochoM` varchar(200) NOT NULL,
  `nueve` varchar(200) NOT NULL,
  `nueveM` varchar(200) NOT NULL,
  `diez` varchar(200) NOT NULL,
  `diezM` varchar(200) NOT NULL,
  `once` varchar(200) NOT NULL,
  `onceM` varchar(200) NOT NULL,
  `doce` varchar(200) NOT NULL,
  `doceM` varchar(200) NOT NULL,
  `trece` varchar(200) NOT NULL,
  `treceM` varchar(200) NOT NULL,
  `catorce` varchar(200) NOT NULL,
  `catorceM` varchar(200) NOT NULL,
  `quince` varchar(200) NOT NULL,
  `quinceM` varchar(200) NOT NULL,
  `dieciseis` varchar(200) NOT NULL,
  `dieciseisM` varchar(200) NOT NULL,
  `diecisiete` varchar(200) NOT NULL,
  `diecisieteM` varchar(200) NOT NULL,
  `dieciocho` varchar(200) NOT NULL,
  `dieciochoM` varchar(200) NOT NULL,
  `diecinueve` varchar(200) NOT NULL,
  `diecinueveM` varchar(200) NOT NULL,
  `veinte` varchar(200) NOT NULL,
  `veinteM` varchar(200) NOT NULL,
  `veintiuno` varchar(200) NOT NULL,
  `veintiunoM` varchar(200) NOT NULL,
  `veintidos` varchar(200) NOT NULL,
  `veintidosM` varchar(200) NOT NULL,
  `veintitres` varchar(200) NOT NULL,
  `veintitresM` varchar(200) NOT NULL,
  `cero` varchar(200) NOT NULL,
  `ceroM` varchar(200) NOT NULL,
  `una` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jueves`
--

INSERT INTO `jueves` (`id`, `user_id`, `mes`, `dia`, `cinco`, `cincoM`, `seis`, `seisM`, `siete`, `sieteM`, `ocho`, `ochoM`, `nueve`, `nueveM`, `diez`, `diezM`, `once`, `onceM`, `doce`, `doceM`, `trece`, `treceM`, `catorce`, `catorceM`, `quince`, `quinceM`, `dieciseis`, `dieciseisM`, `diecisiete`, `diecisieteM`, `dieciocho`, `dieciochoM`, `diecinueve`, `diecinueveM`, `veinte`, `veinteM`, `veintiuno`, `veintiunoM`, `veintidos`, `veintidosM`, `veintitres`, `veintitresM`, `cero`, `ceroM`, `una`) VALUES
(5, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 11, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 12, '', 'Jueves', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lunes`
--

CREATE TABLE `lunes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mes` varchar(200) NOT NULL,
  `dia` varchar(200) NOT NULL,
  `cinco` varchar(200) NOT NULL,
  `cincoM` varchar(200) NOT NULL,
  `seis` varchar(200) NOT NULL,
  `seisM` varchar(200) NOT NULL,
  `siete` varchar(200) NOT NULL,
  `sieteM` varchar(200) NOT NULL,
  `ocho` varchar(200) NOT NULL,
  `ochoM` varchar(200) NOT NULL,
  `nueve` varchar(200) NOT NULL,
  `nueveM` varchar(200) NOT NULL,
  `diez` varchar(200) NOT NULL,
  `diezM` varchar(200) NOT NULL,
  `once` varchar(200) NOT NULL,
  `onceM` varchar(200) NOT NULL,
  `doce` varchar(200) NOT NULL,
  `doceM` varchar(200) NOT NULL,
  `trece` varchar(200) NOT NULL,
  `treceM` varchar(200) NOT NULL,
  `catorce` varchar(200) NOT NULL,
  `catorceM` varchar(200) NOT NULL,
  `quince` varchar(200) NOT NULL,
  `quinceM` varchar(200) NOT NULL,
  `dieciseis` varchar(200) NOT NULL,
  `dieciseisM` varchar(200) NOT NULL,
  `diecisiete` varchar(200) NOT NULL,
  `diecisieteM` varchar(200) NOT NULL,
  `dieciocho` varchar(200) NOT NULL,
  `dieciochoM` varchar(200) NOT NULL,
  `diecinueve` varchar(200) NOT NULL,
  `diecinueveM` varchar(200) NOT NULL,
  `veinte` varchar(200) NOT NULL,
  `veinteM` varchar(200) NOT NULL,
  `veintiuno` varchar(200) NOT NULL,
  `veintiunoM` varchar(200) NOT NULL,
  `veintidos` varchar(200) NOT NULL,
  `veintidosM` varchar(200) NOT NULL,
  `veintitres` varchar(200) NOT NULL,
  `veintitresM` varchar(200) NOT NULL,
  `cero` varchar(200) NOT NULL,
  `ceroM` varchar(200) NOT NULL,
  `una` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lunes`
--

INSERT INTO `lunes` (`id`, `user_id`, `mes`, `dia`, `cinco`, `cincoM`, `seis`, `seisM`, `siete`, `sieteM`, `ocho`, `ochoM`, `nueve`, `nueveM`, `diez`, `diezM`, `once`, `onceM`, `doce`, `doceM`, `trece`, `treceM`, `catorce`, `catorceM`, `quince`, `quinceM`, `dieciseis`, `dieciseisM`, `diecisiete`, `diecisieteM`, `dieciocho`, `dieciochoM`, `diecinueve`, `diecinueveM`, `veinte`, `veinteM`, `veintiuno`, `veintiunoM`, `veintidos`, `veintidosM`, `veintitres`, `veintitresM`, `cero`, `ceroM`, `una`) VALUES
(7, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 11, '', 'Lunes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 12, '', 'Lunes', 'xD', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `martes`
--

CREATE TABLE `martes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mes` varchar(200) NOT NULL,
  `dia` varchar(200) NOT NULL,
  `cinco` varchar(200) NOT NULL,
  `cincoM` varchar(200) NOT NULL,
  `seis` varchar(200) NOT NULL,
  `seisM` varchar(200) NOT NULL,
  `siete` varchar(200) NOT NULL,
  `sieteM` varchar(200) NOT NULL,
  `ocho` varchar(200) NOT NULL,
  `ochoM` varchar(200) NOT NULL,
  `nueve` varchar(200) NOT NULL,
  `nueveM` varchar(200) NOT NULL,
  `diez` varchar(200) NOT NULL,
  `diezM` varchar(200) NOT NULL,
  `once` varchar(200) NOT NULL,
  `onceM` varchar(200) NOT NULL,
  `doce` varchar(200) NOT NULL,
  `doceM` varchar(200) NOT NULL,
  `trece` varchar(200) NOT NULL,
  `treceM` varchar(200) NOT NULL,
  `catorce` varchar(200) NOT NULL,
  `catorceM` varchar(200) NOT NULL,
  `quince` varchar(200) NOT NULL,
  `quinceM` varchar(200) NOT NULL,
  `dieciseis` varchar(200) NOT NULL,
  `dieciseisM` varchar(200) NOT NULL,
  `diecisiete` varchar(200) NOT NULL,
  `diecisieteM` varchar(200) NOT NULL,
  `dieciocho` varchar(200) NOT NULL,
  `dieciochoM` varchar(200) NOT NULL,
  `diecinueve` varchar(200) NOT NULL,
  `diecinueveM` varchar(200) NOT NULL,
  `veinte` varchar(200) NOT NULL,
  `veinteM` varchar(200) NOT NULL,
  `veintiuno` varchar(200) NOT NULL,
  `veintiunoM` varchar(200) NOT NULL,
  `veintidos` varchar(200) NOT NULL,
  `veintidosM` varchar(200) NOT NULL,
  `veintitres` varchar(200) NOT NULL,
  `veintitresM` varchar(200) NOT NULL,
  `cero` varchar(200) NOT NULL,
  `ceroM` varchar(200) NOT NULL,
  `una` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `martes`
--

INSERT INTO `martes` (`id`, `user_id`, `mes`, `dia`, `cinco`, `cincoM`, `seis`, `seisM`, `siete`, `sieteM`, `ocho`, `ochoM`, `nueve`, `nueveM`, `diez`, `diezM`, `once`, `onceM`, `doce`, `doceM`, `trece`, `treceM`, `catorce`, `catorceM`, `quince`, `quinceM`, `dieciseis`, `dieciseisM`, `diecisiete`, `diecisieteM`, `dieciocho`, `dieciochoM`, `diecinueve`, `diecinueveM`, `veinte`, `veinteM`, `veintiuno`, `veintiunoM`, `veintidos`, `veintidosM`, `veintitres`, `veintitresM`, `cero`, `ceroM`, `una`) VALUES
(5, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 11, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 12, '', 'Martes', 'f', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miercoles`
--

CREATE TABLE `miercoles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mes` varchar(200) NOT NULL,
  `dia` varchar(200) NOT NULL,
  `cinco` varchar(200) NOT NULL,
  `cincoM` varchar(200) NOT NULL,
  `seis` varchar(200) NOT NULL,
  `seisM` varchar(200) NOT NULL,
  `siete` varchar(200) NOT NULL,
  `sieteM` varchar(200) NOT NULL,
  `ocho` varchar(200) NOT NULL,
  `ochoM` varchar(200) NOT NULL,
  `nueve` varchar(200) NOT NULL,
  `nueveM` varchar(200) NOT NULL,
  `diez` varchar(200) NOT NULL,
  `diezM` varchar(200) NOT NULL,
  `once` varchar(200) NOT NULL,
  `onceM` varchar(200) NOT NULL,
  `doce` varchar(200) NOT NULL,
  `doceM` varchar(200) NOT NULL,
  `trece` varchar(200) NOT NULL,
  `treceM` varchar(200) NOT NULL,
  `catorce` varchar(200) NOT NULL,
  `catorceM` varchar(200) NOT NULL,
  `quince` varchar(200) NOT NULL,
  `quinceM` varchar(200) NOT NULL,
  `dieciseis` varchar(200) NOT NULL,
  `dieciseisM` varchar(200) NOT NULL,
  `diecisiete` varchar(200) NOT NULL,
  `diecisieteM` varchar(200) NOT NULL,
  `dieciocho` varchar(200) NOT NULL,
  `dieciochoM` varchar(200) NOT NULL,
  `diecinueve` varchar(200) NOT NULL,
  `diecinueveM` varchar(200) NOT NULL,
  `veinte` varchar(200) NOT NULL,
  `veinteM` varchar(200) NOT NULL,
  `veintiuno` varchar(200) NOT NULL,
  `veintiunoM` varchar(200) NOT NULL,
  `veintidos` varchar(200) NOT NULL,
  `veintidosM` varchar(200) NOT NULL,
  `veintitres` varchar(200) NOT NULL,
  `veintitresM` varchar(200) NOT NULL,
  `cero` varchar(200) NOT NULL,
  `ceroM` varchar(200) NOT NULL,
  `una` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `miercoles`
--

INSERT INTO `miercoles` (`id`, `user_id`, `mes`, `dia`, `cinco`, `cincoM`, `seis`, `seisM`, `siete`, `sieteM`, `ocho`, `ochoM`, `nueve`, `nueveM`, `diez`, `diezM`, `once`, `onceM`, `doce`, `doceM`, `trece`, `treceM`, `catorce`, `catorceM`, `quince`, `quinceM`, `dieciseis`, `dieciseisM`, `diecisiete`, `diecisieteM`, `dieciocho`, `dieciochoM`, `diecinueve`, `diecinueveM`, `veinte`, `veinteM`, `veintiuno`, `veintiunoM`, `veintidos`, `veintidosM`, `veintitres`, `veintitresM`, `cero`, `ceroM`, `una`) VALUES
(5, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 11, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 12, '', 'Miercoles', 'g', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sabado`
--

CREATE TABLE `sabado` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mes` varchar(200) NOT NULL,
  `dia` varchar(200) NOT NULL,
  `cinco` varchar(200) NOT NULL,
  `cincoM` varchar(200) NOT NULL,
  `seis` varchar(200) NOT NULL,
  `seisM` varchar(200) NOT NULL,
  `siete` varchar(200) NOT NULL,
  `sieteM` varchar(200) NOT NULL,
  `ocho` varchar(200) NOT NULL,
  `ochoM` varchar(200) NOT NULL,
  `nueve` varchar(200) NOT NULL,
  `nueveM` varchar(200) NOT NULL,
  `diez` varchar(200) NOT NULL,
  `diezM` varchar(200) NOT NULL,
  `once` varchar(200) NOT NULL,
  `onceM` varchar(200) NOT NULL,
  `doce` varchar(200) NOT NULL,
  `doceM` varchar(200) NOT NULL,
  `trece` varchar(200) NOT NULL,
  `treceM` varchar(200) NOT NULL,
  `catorce` varchar(200) NOT NULL,
  `catorceM` varchar(200) NOT NULL,
  `quince` varchar(200) NOT NULL,
  `quinceM` varchar(200) NOT NULL,
  `dieciseis` varchar(200) NOT NULL,
  `dieciseisM` varchar(200) NOT NULL,
  `diecisiete` varchar(200) NOT NULL,
  `diecisieteM` varchar(200) NOT NULL,
  `dieciocho` varchar(200) NOT NULL,
  `dieciochoM` varchar(200) NOT NULL,
  `diecinueve` varchar(200) NOT NULL,
  `diecinueveM` varchar(200) NOT NULL,
  `veinte` varchar(200) NOT NULL,
  `veinteM` varchar(200) NOT NULL,
  `veintiuno` varchar(200) NOT NULL,
  `veintiunoM` varchar(200) NOT NULL,
  `veintidos` varchar(200) NOT NULL,
  `veintidosM` varchar(200) NOT NULL,
  `veintitres` varchar(200) NOT NULL,
  `veintitresM` varchar(200) NOT NULL,
  `cero` varchar(200) NOT NULL,
  `ceroM` varchar(200) NOT NULL,
  `una` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sabado`
--

INSERT INTO `sabado` (`id`, `user_id`, `mes`, `dia`, `cinco`, `cincoM`, `seis`, `seisM`, `siete`, `sieteM`, `ocho`, `ochoM`, `nueve`, `nueveM`, `diez`, `diezM`, `once`, `onceM`, `doce`, `doceM`, `trece`, `treceM`, `catorce`, `catorceM`, `quince`, `quinceM`, `dieciseis`, `dieciseisM`, `diecisiete`, `diecisieteM`, `dieciocho`, `dieciochoM`, `diecinueve`, `diecinueveM`, `veinte`, `veinteM`, `veintiuno`, `veintiunoM`, `veintidos`, `veintidosM`, `veintitres`, `veintitresM`, `cero`, `ceroM`, `una`) VALUES
(5, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 11, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 12, '', 'Sabado', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(10, 'lucho', 'luchoherrerafernandez@gmail.com', 'mision2017'),
(11, 'lucho', 'luchoherrerafernandez2@gmail.com', '123'),
(12, 'lucho', 'lucho@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viernes`
--

CREATE TABLE `viernes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mes` varchar(200) NOT NULL,
  `dia` varchar(200) NOT NULL,
  `cinco` varchar(200) NOT NULL,
  `cincoM` varchar(200) NOT NULL,
  `seis` varchar(200) NOT NULL,
  `seisM` varchar(200) NOT NULL,
  `siete` varchar(200) NOT NULL,
  `sieteM` varchar(200) NOT NULL,
  `ocho` varchar(200) NOT NULL,
  `ochoM` varchar(200) NOT NULL,
  `nueve` varchar(200) NOT NULL,
  `nueveM` varchar(200) NOT NULL,
  `diez` varchar(200) NOT NULL,
  `diezM` varchar(200) NOT NULL,
  `once` varchar(200) NOT NULL,
  `onceM` varchar(200) NOT NULL,
  `doce` varchar(200) NOT NULL,
  `doceM` varchar(200) NOT NULL,
  `trece` varchar(200) NOT NULL,
  `treceM` varchar(200) NOT NULL,
  `catorce` varchar(200) NOT NULL,
  `catorceM` varchar(200) NOT NULL,
  `quince` varchar(200) NOT NULL,
  `quinceM` varchar(200) NOT NULL,
  `dieciseis` varchar(200) NOT NULL,
  `dieciseisM` varchar(200) NOT NULL,
  `diecisiete` varchar(200) NOT NULL,
  `diecisieteM` varchar(200) NOT NULL,
  `dieciocho` varchar(200) NOT NULL,
  `dieciochoM` varchar(200) NOT NULL,
  `diecinueve` varchar(200) NOT NULL,
  `diecinueveM` varchar(200) NOT NULL,
  `veinte` varchar(200) NOT NULL,
  `veinteM` varchar(200) NOT NULL,
  `veintiuno` varchar(200) NOT NULL,
  `veintiunoM` varchar(200) NOT NULL,
  `veintidos` varchar(200) NOT NULL,
  `veintidosM` varchar(200) NOT NULL,
  `veintitres` varchar(200) NOT NULL,
  `veintitresM` varchar(200) NOT NULL,
  `cero` varchar(200) NOT NULL,
  `ceroM` varchar(200) NOT NULL,
  `una` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `viernes`
--

INSERT INTO `viernes` (`id`, `user_id`, `mes`, `dia`, `cinco`, `cincoM`, `seis`, `seisM`, `siete`, `sieteM`, `ocho`, `ochoM`, `nueve`, `nueveM`, `diez`, `diezM`, `once`, `onceM`, `doce`, `doceM`, `trece`, `treceM`, `catorce`, `catorceM`, `quince`, `quinceM`, `dieciseis`, `dieciseisM`, `diecisiete`, `diecisieteM`, `dieciocho`, `dieciochoM`, `diecinueve`, `diecinueveM`, `veinte`, `veinteM`, `veintiuno`, `veintiunoM`, `veintidos`, `veintidosM`, `veintitres`, `veintitresM`, `cero`, `ceroM`, `una`) VALUES
(5, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 11, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 12, '', 'Viernes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `domingo`
--
ALTER TABLE `domingo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jueves`
--
ALTER TABLE `jueves`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lunes`
--
ALTER TABLE `lunes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `martes`
--
ALTER TABLE `martes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `miercoles`
--
ALTER TABLE `miercoles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sabado`
--
ALTER TABLE `sabado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `viernes`
--
ALTER TABLE `viernes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `domingo`
--
ALTER TABLE `domingo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `jueves`
--
ALTER TABLE `jueves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `lunes`
--
ALTER TABLE `lunes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `martes`
--
ALTER TABLE `martes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `miercoles`
--
ALTER TABLE `miercoles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `sabado`
--
ALTER TABLE `sabado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `viernes`
--
ALTER TABLE `viernes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
