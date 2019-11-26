-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2019 a las 22:44:50
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_carros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id_carrera` int(11) NOT NULL,
  `nombre_carrera` varchar(30) DEFAULT NULL,
  `ubicacion` varchar(20) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `numero_vueltas` int(10) DEFAULT NULL,
  `numero_competidores` int(10) NOT NULL,
  `id_vehi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id_carrera`, `nombre_carrera`, `ubicacion`, `fecha`, `numero_vueltas`, `numero_competidores`, `id_vehi`) VALUES
(300, 'prueba2', 'San buenvantura', '0000-00-00 00:00:00', 2, 2, NULL),
(307, 'prueba2', 'San buenvantura', '2019-11-12 00:00:00', 2, 2, NULL),
(308, 'prueba2', 'San buenvantura', '2019-11-12 19:42:00', 2, 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_cate` int(11) NOT NULL,
  `nombre_cat` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escala_vehiculo`
--

CREATE TABLE `escala_vehiculo` (
  `id_escala` int(10) NOT NULL,
  `tipo_escala` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha_tecnica`
--

CREATE TABLE `ficha_tecnica` (
  `id_ficha` int(11) NOT NULL,
  `motor` varchar(20) DEFAULT NULL,
  `chasis` varchar(20) DEFAULT NULL,
  `llantas` varchar(20) DEFAULT NULL,
  `cuadrante` varchar(30) DEFAULT NULL,
  `amortiguadores` varchar(30) DEFAULT NULL,
  `alimentacion` varchar(10) DEFAULT NULL,
  `material` varchar(15) DEFAULT NULL,
  `distacia_entre_ejes` varchar(15) DEFAULT NULL,
  `tijeras` varchar(20) DEFAULT NULL,
  `esc` varchar(10) DEFAULT NULL,
  `id_modi` int(11) DEFAULT NULL,
  `id_vehi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modificaciones`
--

CREATE TABLE `modificaciones` (
  `id_modi` int(11) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `motivo` varchar(200) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietario`
--

CREATE TABLE `propietario` (
  `ced` int(11) NOT NULL,
  `nompre_pro` varchar(50) DEFAULT NULL,
  `apellidos_pro` varchar(50) DEFAULT NULL,
  `correo` varchar(20) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `direccion` varchar(20) DEFAULT NULL,
  `id_documento` int(10) DEFAULT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `pass` varchar(10) DEFAULT NULL,
  `url_img` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `propietario`
--

INSERT INTO `propietario` (`ced`, `nompre_pro`, `apellidos_pro`, `correo`, `telefono`, `direccion`, `id_documento`, `usuario`, `pass`, `url_img`) VALUES
(11, 'aa', 'aa', 'asd@qwe.com', 222, 'sss', 0, 'x', 'xx', 'error macro.JPG'),
(1111, 'q', 'q', 'prueba_error@gmail.c', 1111, 'wwww', 0, 'aaa', 'as', '1f28e5f1f81c2d5e2e62273cc091d753.jpg'),
(12444, 'yesid', 'alvis', 'prueba_error@gmail.c', 22222, 'calle 129', 0, 'alvis', 'alvis123', 'desktop.jpg'),
(101334, 'Prueba', 'Prueba', 'prueba@hotmail.com', 31456, 'carrera 14 # 12-56', 0, 'prueba', 'prueba', ''),
(112233, 'alvis', 'alvis', 'prueba_error@gmail.c', 3345322, 'calle 129', 0, 'carlos', 'aaaaa', 'Esferas_Namekianas.png'),
(1233444444, 'final', 'final', 'prueba@hotmail.com', 123, 'aaa', 0, 'qqq', 'aaa', 'Esferas_Namekianas.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regis_rapi_vehiculo`
--

CREATE TABLE `regis_rapi_vehiculo` (
  `id_vehiculo` int(11) NOT NULL,
  `nombre_vehiculo` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `nombre_propietario` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `color` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `cedula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `regis_rapi_vehiculo`
--

INSERT INTO `regis_rapi_vehiculo` (`id_vehiculo`, `nombre_vehiculo`, `nombre_propietario`, `color`, `cedula`) VALUES
(100, 'Furia Roja', 'Fernando De Leon', 'Azul', 123456);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id_documento` int(10) NOT NULL,
  `nombre_documento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `id_vehi` int(11) NOT NULL,
  `marca` varchar(20) DEFAULT NULL,
  `tipo_vehi` varchar(20) DEFAULT NULL,
  `id_escala` int(10) DEFAULT NULL,
  `id_cate` int(11) DEFAULT NULL,
  `ced` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vueltas`
--

CREATE TABLE `vueltas` (
  `id_vueltas` int(11) NOT NULL,
  `numero_de_vueltas` int(11) DEFAULT NULL,
  `tiempo_recorrido` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id_carrera`),
  ADD KEY `carrera_vuelta_fk` (`numero_vueltas`),
  ADD KEY `FK_id_vehi` (`numero_competidores`),
  ADD KEY `id_vehi` (`id_vehi`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_cate`);

--
-- Indices de la tabla `escala_vehiculo`
--
ALTER TABLE `escala_vehiculo`
  ADD PRIMARY KEY (`id_escala`);

--
-- Indices de la tabla `ficha_tecnica`
--
ALTER TABLE `ficha_tecnica`
  ADD PRIMARY KEY (`id_ficha`),
  ADD KEY `ficha_mod_fk` (`id_modi`),
  ADD KEY `id_vehi` (`id_vehi`);

--
-- Indices de la tabla `modificaciones`
--
ALTER TABLE `modificaciones`
  ADD PRIMARY KEY (`id_modi`);

--
-- Indices de la tabla `propietario`
--
ALTER TABLE `propietario`
  ADD PRIMARY KEY (`ced`),
  ADD KEY `id_documento` (`id_documento`);

--
-- Indices de la tabla `regis_rapi_vehiculo`
--
ALTER TABLE `regis_rapi_vehiculo`
  ADD PRIMARY KEY (`id_vehiculo`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`id_vehi`),
  ADD KEY `vehiculo_cate_fk` (`id_cate`),
  ADD KEY `veh_pro_fk` (`ced`),
  ADD KEY `FK_id_escala` (`id_escala`);

--
-- Indices de la tabla `vueltas`
--
ALTER TABLE `vueltas`
  ADD PRIMARY KEY (`id_vueltas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id_carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=309;

--
-- AUTO_INCREMENT de la tabla `regis_rapi_vehiculo`
--
ALTER TABLE `regis_rapi_vehiculo`
  MODIFY `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD CONSTRAINT `carrera_ibfk_1` FOREIGN KEY (`id_vehi`) REFERENCES `regis_rapi_vehiculo` (`id_vehiculo`);

--
-- Filtros para la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `categoria_ibfk_1` FOREIGN KEY (`id_cate`) REFERENCES `vehiculo` (`id_cate`);

--
-- Filtros para la tabla `ficha_tecnica`
--
ALTER TABLE `ficha_tecnica`
  ADD CONSTRAINT `ficha_mod_fk` FOREIGN KEY (`id_modi`) REFERENCES `modificaciones` (`id_modi`),
  ADD CONSTRAINT `id_vehi` FOREIGN KEY (`id_vehi`) REFERENCES `vehiculo` (`id_vehi`);

--
-- Filtros para la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD CONSTRAINT `tipo_documento_ibfk_1` FOREIGN KEY (`id_documento`) REFERENCES `propietario` (`id_documento`);

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `vehiculo_ibfk_1` FOREIGN KEY (`id_escala`) REFERENCES `escala_vehiculo` (`id_escala`),
  ADD CONSTRAINT `vehiculo_ibfk_2` FOREIGN KEY (`ced`) REFERENCES `propietario` (`ced`),
  ADD CONSTRAINT `vehiculo_ibfk_3` FOREIGN KEY (`id_vehi`) REFERENCES `carrera` (`id_vehi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
