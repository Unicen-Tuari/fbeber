-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-11-2015 a las 12:35:35
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `smartkin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL,
  `email_admin` varchar(500) NOT NULL,
  `name_admin` varchar(200) NOT NULL,
  `pass_admin` varchar(200) NOT NULL,
  `img_admin` varchar(500) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_admin`, `email_admin`, `name_admin`, `pass_admin`, `img_admin`) VALUES
(1, 'admin@admin.com', 'admin', 'admin', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coleccion`
--

CREATE TABLE IF NOT EXISTS `coleccion` (
  `id_col` int(11) NOT NULL,
  `name_col` varchar(200) NOT NULL,
  `publico` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `coleccion`
--

INSERT INTO `coleccion` (`id_col`, `name_col`, `publico`) VALUES
(1, 'Futbol', 0),
(2, 'Futbol', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE IF NOT EXISTS `comentario` (
  `id_com` int(11) NOT NULL,
  `fk_id_user` int(11) NOT NULL,
  `fecha_com` date DEFAULT NULL,
  `comentario` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_com`, `fk_id_user`, `fecha_com`, `comentario`) VALUES
(1, 1, '2015-11-02', 'comentario de march'),
(2, 4, NULL, 'Este es un comentario de lisa'),
(3, 4, NULL, 'estes es un comentario viendo q onda el hidden'),
(4, 4, NULL, 'estes es un comentario viendo q onda el hidden');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favorito`
--

CREATE TABLE IF NOT EXISTS `favorito` (
  `id_fav` int(11) NOT NULL,
  `fk_id_user` int(11) NOT NULL,
  `fk_id_mod` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `favorito`
--

INSERT INTO `favorito` (`id_fav`, `fk_id_user`, `fk_id_mod`) VALUES
(4, 10, 3),
(5, 10, 3),
(6, 10, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_port`
--

CREATE TABLE IF NOT EXISTS `img_port` (
  `id_img_port` int(11) NOT NULL,
  `fk_id_port` int(11) NOT NULL,
  `img_port` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion`
--

CREATE TABLE IF NOT EXISTS `informacion` (
  `id_info` int(11) NOT NULL,
  `fk_id_admin` int(11) NOT NULL,
  `email_info` varchar(500) NOT NULL,
  `tel_info` int(20) DEFAULT NULL,
  `dir_info` varchar(200) DEFAULT NULL,
  `fb_info` varchar(500) DEFAULT NULL,
  `tw_info` varchar(200) DEFAULT NULL,
  `g_info` varchar(200) DEFAULT NULL,
  `mercado_info` varchar(200) DEFAULT NULL,
  `olx_info` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo`
--

CREATE TABLE IF NOT EXISTS `modelo` (
  `id_mod` int(11) NOT NULL,
  `fk_id_col` int(11) NOT NULL,
  `img_mod` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `modelo`
--

INSERT INTO `modelo` (`id_mod`, `fk_id_col`, `img_mod`) VALUES
(1, 1, '../images/564e539eb6ecaFB_IMG_1447523474060.jpg'),
(2, 1, '../images/564e539eb6fe6FB_IMG_1447523479402.jpg'),
(3, 1, '../images/564e539eb7095FB_IMG_1447523485094.jpg'),
(4, 2, '../images/564e5495ed63dFB_IMG_1447523474060.jpg'),
(5, 2, '../images/564e5495ed890FB_IMG_1447523479402.jpg'),
(6, 2, '../images/564e5495ed9feFB_IMG_1447523485094.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portfolio`
--

CREATE TABLE IF NOT EXISTS `portfolio` (
  `id_port` int(11) NOT NULL,
  `name_port` varchar(200) NOT NULL,
  `descrip_port` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_user` int(11) NOT NULL,
  `email_user` varchar(500) NOT NULL,
  `name_user` varchar(200) NOT NULL,
  `pass_user` varchar(200) NOT NULL,
  `img_user` varchar(500) DEFAULT 'images_sys/anonimo.jpg',
  `bloqueado` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_user`, `email_user`, `name_user`, `pass_user`, `img_user`, `bloqueado`) VALUES
(10, 'march@gmail.com', 'Marchita', '21232f297a57a5a743894a0e4a801fc3', 'images_sys/anonimo.jpg', 0),
(11, 'bart@gmail.com', 'Bartolomeo', 'f54146a3fc82ab17e5265695b23f646b', 'images_sys/anonimo.jpg', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `coleccion`
--
ALTER TABLE `coleccion`
  ADD PRIMARY KEY (`id_col`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_com`),
  ADD KEY `fk_id_user` (`fk_id_user`);

--
-- Indices de la tabla `favorito`
--
ALTER TABLE `favorito`
  ADD PRIMARY KEY (`id_fav`);

--
-- Indices de la tabla `img_port`
--
ALTER TABLE `img_port`
  ADD PRIMARY KEY (`id_img_port`),
  ADD KEY `fk_id_port` (`fk_id_port`);

--
-- Indices de la tabla `informacion`
--
ALTER TABLE `informacion`
  ADD PRIMARY KEY (`id_info`),
  ADD KEY `fk_id_admin` (`fk_id_admin`);

--
-- Indices de la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`id_mod`),
  ADD KEY `fk_id_col` (`fk_id_col`);

--
-- Indices de la tabla `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id_port`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `coleccion`
--
ALTER TABLE `coleccion`
  MODIFY `id_col` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_com` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `favorito`
--
ALTER TABLE `favorito`
  MODIFY `id_fav` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `img_port`
--
ALTER TABLE `img_port`
  MODIFY `id_img_port` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `informacion`
--
ALTER TABLE `informacion`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `modelo`
--
ALTER TABLE `modelo`
  MODIFY `id_mod` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id_port` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `fk_id_user` FOREIGN KEY (`fk_id_user`) REFERENCES `usuario` (`id_user`);

--
-- Filtros para la tabla `img_port`
--
ALTER TABLE `img_port`
  ADD CONSTRAINT `fk_id_port` FOREIGN KEY (`fk_id_port`) REFERENCES `portfolio` (`id_port`);

--
-- Filtros para la tabla `informacion`
--
ALTER TABLE `informacion`
  ADD CONSTRAINT `fk_id_admin` FOREIGN KEY (`fk_id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Filtros para la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD CONSTRAINT `fk_id_col` FOREIGN KEY (`fk_id_col`) REFERENCES `coleccion` (`id_col`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
