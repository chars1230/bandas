-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-04-2022 a las 01:12:59
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bandas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listas_reproduccion`
--

CREATE TABLE `listas_reproduccion` (
  `id` int(4) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `imagenes` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `listas_reproduccion`
--

INSERT INTO `listas_reproduccion` (`id`, `nombre`, `imagenes`) VALUES
(1, 'Metalica', 'logo/metalik.png'),
(2, 'BLACK SABBATH', 'logo/black-sabbath.png'),
(6, 'the doors', 'logo/the-doors.png'),
(7, 'The Beatles', 'logo/the-beatles.png'),
(8, 'Guns N\' Roses', 'logo/Guns.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(4) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `correo` varchar(70) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `username`, `password`) VALUES
(1, 'Samir', 'csangulo1230@gmail.com', 'csangulo', '12301151');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` int(4) NOT NULL,
  `id_lista` int(4) NOT NULL,
  `nombre` varchar(90) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id`, `id_lista`, `nombre`, `url`) VALUES
(1, 2, 'Iron Man', '5s7_WbiR79E'),
(2, 1, 'The Unforgiven', 'DDGhKS6bSAE'),
(3, 1, 'Wherever I May Roam', 'dHUHxTiPFUU'),
(4, 1, 'Nothing Else Matters', 'tAGnKpE4NCI'),
(5, 6, 'Light My Fire', 'jKU74Uns9_0'),
(6, 6, 'People Are Strange', 'XZuj_xU-x0I'),
(7, 6, ' Gloria', 'Qf7vxx0Z_oQ'),
(8, 6, 'Riders On The Storm', 'iv8GW1GaoIc'),
(9, 7, 'Don\'t Let Me Down', 'NCtzkaL2t_Y'),
(10, 7, 'Help!', '2Q_ZzBGPdqE'),
(11, 8, ' It\'s So Easy', 'FMbl1ntpIXQ'),
(12, 8, 'Terminator', 'RHOUcqBVHlU'),
(13, 8, 'Welcome To The Jungle', 'o1tj2zJ2Wvg'),
(14, 8, 'November Rain', '8SbUC-UaAxE'),
(15, 8, 'Sweet Child O\' Mine ', '1w7OgIMMRc4'),
(16, 8, 'Don\'t Cry', 'zRIbf6JqkNc');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `listas_reproduccion`
--
ALTER TABLE `listas_reproduccion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `listas_reproduccion`
--
ALTER TABLE `listas_reproduccion`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
