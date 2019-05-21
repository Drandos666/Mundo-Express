-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2019 a las 17:23:13
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--  
-- Base de datos: `me`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--
CREATE DATABASE me;

USE me;




CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Apellido` varchar(40) NOT NULL,
  `Fecha` date NOT NULL,
  `Edad` int(11) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `Telefono` varchar(11) NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Mensaje` varchar(255) NOT NULL,
  `Sexo` varchar(10) NOT NULL,
  `kuy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `Nombre`, `Apellido`, `Fecha`, `Edad`, `correo`, `senha`, `Telefono`, `Direccion`, `Mensaje`, `Sexo`, `kuy`) VALUES
(1, 'David', 'Avila', '1994-11-15', 24, 'davidaosorio@gmail.com', '$2y$10$C/AOjf0mTRVw/xJxbY2NNeDc4bnZaubz1X3aLg5IaQTA571c1dX/6', '0424-2710203', 'Caracas, Capuchinos', 'Creador', 'Hombre', 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
