-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2018 a las 20:50:30
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tbd2doparcial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `ciAdmin` int(11) NOT NULL,
  `nombreAdmin` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `apePaAdmin` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `apeMaAdmin` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `departamentoAdmin` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `paisAdmin` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `emailAdmin` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anunciador`
--

CREATE TABLE `anunciador` (
  `ciAnunciador` int(11) NOT NULL,
  `nombreAnun` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `apePaAnun` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `apeMaAnun` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `dptoAnun` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `paisAnun` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `emailAnun` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `anunciador`
--

INSERT INTO `anunciador` (`ciAnunciador`, `nombreAnun`, `apePaAnun`, `apeMaAnun`, `dptoAnun`, `paisAnun`, `emailAnun`) VALUES
(0, 'grillo', 'grillo', 'adsf', 'bolivia', 'jors', 'pepe@gmail.com'),
(123654, 'maria', 'nieves', 'nieves', 'bolivia', 'cocha', 'maria@gmail.com'),
(1234567, 'daniel', 'puña', 'arandia', 'bolivia', 'cochabamba', 'daniel@gmail.com'),
(8733918, 'jorge', 'delgadillo', 'quinteros', 'cochabamba', 'bolivia', 'coquito305@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncio`
--

CREATE TABLE `anuncio` (
  `nroAnuncio` int(11) NOT NULL,
  `nombreAnuncio` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `fechaPublicacion` date DEFAULT NULL,
  `direcion` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `estado` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `prioridad` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `codSubcategoria` int(11) DEFAULT NULL,
  `ciAnunciador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `codCategoria` int(11) NOT NULL,
  `nombreCategoria` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conversacion`
--

CREATE TABLE `conversacion` (
  `codigoConv` int(11) NOT NULL,
  `nroAnuncio` int(11) DEFAULT NULL,
  `ciAnunciador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE `cuenta` (
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `contrasena` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`email`, `contrasena`) VALUES
('coquito305@gmail.com', 'jorge'),
('daniel@gmail.com', 'daniel'),
('maria@gmail.com', 'maria'),
('pepe@gmail.com', 'pepe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guardar`
--

CREATE TABLE `guardar` (
  `nroGuardado` int(11) NOT NULL,
  `fechaGuardado` date DEFAULT NULL,
  `nroAnuncio` int(11) DEFAULT NULL,
  `ciAnunciador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `nroImagen` int(11) NOT NULL,
  `imagen` longblob,
  `nroAnuncio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `codigoMarca` int(11) NOT NULL,
  `nombreMarca` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE `mensaje` (
  `nroMensaje` int(11) NOT NULL,
  `mensaje` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `tipo` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `codConver` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo`
--

CREATE TABLE `modelo` (
  `codModelo` int(11) NOT NULL,
  `nombreModelo` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `codMarca` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motor_anuncio`
--

CREATE TABLE `motor_anuncio` (
  `codMotor` int(11) NOT NULL,
  `año` int(11) DEFAULT NULL,
  `condicion` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `kilometraje` mediumint(9) DEFAULT NULL,
  `nroAnuncio` int(11) DEFAULT NULL,
  `tipoVendedorMotor` int(11) DEFAULT NULL,
  `codModelo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `normal_anuncio`
--

CREATE TABLE `normal_anuncio` (
  `codigoNormal` int(11) NOT NULL,
  `nroAnuncio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `nroReporte` int(11) NOT NULL,
  `fechaReporte` date DEFAULT NULL,
  `observaciones` text COLLATE utf8_bin,
  `nroAnuncio` int(11) DEFAULT NULL,
  `ciAnun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria`
--

CREATE TABLE `subcategoria` (
  `codigoSubcategoria` int(11) NOT NULL,
  `nombreSubcategoria` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `codigoCategoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripcion`
--

CREATE TABLE `suscripcion` (
  `idSuscriptor` int(11) NOT NULL,
  `idAnunciador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_vendedor`
--

CREATE TABLE `tipo_vendedor` (
  `nroTipoVendedor` int(11) NOT NULL,
  `descripcionVendedor` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo`
--

CREATE TABLE `trabajo` (
  `nroTrabajo` int(11) NOT NULL,
  `nombreCia` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `expMin` int(11) DEFAULT NULL,
  `expMax` int(11) DEFAULT NULL,
  `salarioMin` int(11) DEFAULT NULL,
  `salarioMax` int(11) DEFAULT NULL,
  `nroAnuncio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor_motor`
--

CREATE TABLE `vendedor_motor` (
  `codMotor` int(11) NOT NULL,
  `tipoVendedor` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vivienda_anuncio`
--

CREATE TABLE `vivienda_anuncio` (
  `codigoVivienda` int(11) NOT NULL,
  `metrosCuadrados` int(11) DEFAULT NULL,
  `cuartosBaño` int(11) DEFAULT NULL,
  `estacionamientos` int(11) DEFAULT NULL,
  `amoblado` int(11) DEFAULT NULL,
  `habitaciones` int(11) DEFAULT NULL,
  `nroAnuncio` int(11) DEFAULT NULL,
  `tipoVendedor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`ciAdmin`),
  ADD KEY `FK_administrador_cuenta` (`emailAdmin`);

--
-- Indices de la tabla `anunciador`
--
ALTER TABLE `anunciador`
  ADD PRIMARY KEY (`ciAnunciador`),
  ADD KEY `FK_anunciador_cuenta` (`emailAnun`);

--
-- Indices de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`nroAnuncio`),
  ADD KEY `FK_anuncio_subcategoria` (`codSubcategoria`),
  ADD KEY `FK_anuncio_anunciador` (`ciAnunciador`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`codCategoria`);

--
-- Indices de la tabla `conversacion`
--
ALTER TABLE `conversacion`
  ADD PRIMARY KEY (`codigoConv`),
  ADD KEY `FK_conversacion_anuncio` (`nroAnuncio`),
  ADD KEY `FK_conversacion_anunciador` (`ciAnunciador`);

--
-- Indices de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `guardar`
--
ALTER TABLE `guardar`
  ADD PRIMARY KEY (`nroGuardado`),
  ADD KEY `FK_guardar_anuncio` (`nroAnuncio`),
  ADD KEY `FK_guardar_anunciador` (`ciAnunciador`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`nroImagen`),
  ADD KEY `FK_imagen_anuncio` (`nroAnuncio`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`codigoMarca`);

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`nroMensaje`),
  ADD KEY `FK_mensaje_conversacion` (`codConver`);

--
-- Indices de la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`codModelo`),
  ADD KEY `FK_modelo_marca` (`codMarca`);

--
-- Indices de la tabla `motor_anuncio`
--
ALTER TABLE `motor_anuncio`
  ADD PRIMARY KEY (`codMotor`),
  ADD KEY `FK_motor_anuncio_anuncio` (`nroAnuncio`),
  ADD KEY `FK_motor_anuncio_modelo` (`codModelo`),
  ADD KEY `FK_motor_anuncio_vendedor_motor` (`tipoVendedorMotor`);

--
-- Indices de la tabla `normal_anuncio`
--
ALTER TABLE `normal_anuncio`
  ADD PRIMARY KEY (`codigoNormal`),
  ADD KEY `FK_normal_anuncio_anuncio` (`nroAnuncio`);

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`nroReporte`),
  ADD KEY `FK_reporte_anuncio` (`nroAnuncio`),
  ADD KEY `FK_reporte_anunciador` (`ciAnun`);

--
-- Indices de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD PRIMARY KEY (`codigoSubcategoria`),
  ADD KEY `FK_subcategoria_categoria` (`codigoCategoria`);

--
-- Indices de la tabla `suscripcion`
--
ALTER TABLE `suscripcion`
  ADD PRIMARY KEY (`idSuscriptor`,`idAnunciador`),
  ADD KEY `FK_suscripcion_anunciador_2` (`idAnunciador`);

--
-- Indices de la tabla `tipo_vendedor`
--
ALTER TABLE `tipo_vendedor`
  ADD PRIMARY KEY (`nroTipoVendedor`);

--
-- Indices de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD PRIMARY KEY (`nroTrabajo`),
  ADD KEY `FK_trabajo_anuncio` (`nroAnuncio`);

--
-- Indices de la tabla `vendedor_motor`
--
ALTER TABLE `vendedor_motor`
  ADD PRIMARY KEY (`codMotor`);

--
-- Indices de la tabla `vivienda_anuncio`
--
ALTER TABLE `vivienda_anuncio`
  ADD PRIMARY KEY (`codigoVivienda`),
  ADD KEY `FK_viviendo_anuncio_anuncio` (`nroAnuncio`),
  ADD KEY `FK_vivienda_anuncio_tipo_vendedor` (`tipoVendedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  MODIFY `nroAnuncio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `codCategoria` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `conversacion`
--
ALTER TABLE `conversacion`
  MODIFY `codigoConv` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `guardar`
--
ALTER TABLE `guardar`
  MODIFY `nroGuardado` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `nroImagen` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `codigoMarca` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `nroMensaje` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `modelo`
--
ALTER TABLE `modelo`
  MODIFY `codModelo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `motor_anuncio`
--
ALTER TABLE `motor_anuncio`
  MODIFY `codMotor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `normal_anuncio`
--
ALTER TABLE `normal_anuncio`
  MODIFY `codigoNormal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `reporte`
--
ALTER TABLE `reporte`
  MODIFY `nroReporte` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `codigoSubcategoria` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_vendedor`
--
ALTER TABLE `tipo_vendedor`
  MODIFY `nroTipoVendedor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  MODIFY `nroTrabajo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `vendedor_motor`
--
ALTER TABLE `vendedor_motor`
  MODIFY `codMotor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `vivienda_anuncio`
--
ALTER TABLE `vivienda_anuncio`
  MODIFY `codigoVivienda` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `FK_administrador_cuenta` FOREIGN KEY (`emailAdmin`) REFERENCES `cuenta` (`email`);

--
-- Filtros para la tabla `anunciador`
--
ALTER TABLE `anunciador`
  ADD CONSTRAINT `FK_anunciador_cuenta` FOREIGN KEY (`emailAnun`) REFERENCES `cuenta` (`email`);

--
-- Filtros para la tabla `anuncio`
--
ALTER TABLE `anuncio`
  ADD CONSTRAINT `FK_anuncio_anunciador` FOREIGN KEY (`ciAnunciador`) REFERENCES `anunciador` (`ciAnunciador`),
  ADD CONSTRAINT `FK_anuncio_subcategoria` FOREIGN KEY (`codSubcategoria`) REFERENCES `subcategoria` (`codigoSubcategoria`);

--
-- Filtros para la tabla `conversacion`
--
ALTER TABLE `conversacion`
  ADD CONSTRAINT `FK_conversacion_anunciador` FOREIGN KEY (`ciAnunciador`) REFERENCES `anunciador` (`ciAnunciador`),
  ADD CONSTRAINT `FK_conversacion_anuncio` FOREIGN KEY (`nroAnuncio`) REFERENCES `anuncio` (`nroAnuncio`);

--
-- Filtros para la tabla `guardar`
--
ALTER TABLE `guardar`
  ADD CONSTRAINT `FK_guardar_anunciador` FOREIGN KEY (`ciAnunciador`) REFERENCES `anunciador` (`ciAnunciador`),
  ADD CONSTRAINT `FK_guardar_anuncio` FOREIGN KEY (`nroAnuncio`) REFERENCES `anuncio` (`nroAnuncio`);

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `FK_imagen_anuncio` FOREIGN KEY (`nroAnuncio`) REFERENCES `anuncio` (`nroAnuncio`);

--
-- Filtros para la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD CONSTRAINT `FK_mensaje_conversacion` FOREIGN KEY (`codConver`) REFERENCES `conversacion` (`codigoConv`);

--
-- Filtros para la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD CONSTRAINT `FK_modelo_marca` FOREIGN KEY (`codMarca`) REFERENCES `marca` (`codigoMarca`);

--
-- Filtros para la tabla `motor_anuncio`
--
ALTER TABLE `motor_anuncio`
  ADD CONSTRAINT `FK_motor_anuncio_anuncio` FOREIGN KEY (`nroAnuncio`) REFERENCES `anuncio` (`nroAnuncio`),
  ADD CONSTRAINT `FK_motor_anuncio_modelo` FOREIGN KEY (`codModelo`) REFERENCES `modelo` (`codModelo`),
  ADD CONSTRAINT `FK_motor_anuncio_vendedor_motor` FOREIGN KEY (`tipoVendedorMotor`) REFERENCES `vendedor_motor` (`codMotor`);

--
-- Filtros para la tabla `normal_anuncio`
--
ALTER TABLE `normal_anuncio`
  ADD CONSTRAINT `FK_normal_anuncio_anuncio` FOREIGN KEY (`nroAnuncio`) REFERENCES `anuncio` (`nroAnuncio`);

--
-- Filtros para la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD CONSTRAINT `FK_reporte_anunciador` FOREIGN KEY (`ciAnun`) REFERENCES `anunciador` (`ciAnunciador`),
  ADD CONSTRAINT `FK_reporte_anuncio` FOREIGN KEY (`nroAnuncio`) REFERENCES `anuncio` (`nroAnuncio`);

--
-- Filtros para la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD CONSTRAINT `FK_subcategoria_categoria` FOREIGN KEY (`codigoCategoria`) REFERENCES `categoria` (`codCategoria`);

--
-- Filtros para la tabla `suscripcion`
--
ALTER TABLE `suscripcion`
  ADD CONSTRAINT `FK_suscripcion_anunciador` FOREIGN KEY (`idSuscriptor`) REFERENCES `anunciador` (`ciAnunciador`),
  ADD CONSTRAINT `FK_suscripcion_anunciador_2` FOREIGN KEY (`idAnunciador`) REFERENCES `anunciador` (`ciAnunciador`);

--
-- Filtros para la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD CONSTRAINT `FK_trabajo_anuncio` FOREIGN KEY (`nroAnuncio`) REFERENCES `anuncio` (`nroAnuncio`);

--
-- Filtros para la tabla `vivienda_anuncio`
--
ALTER TABLE `vivienda_anuncio`
  ADD CONSTRAINT `FK_vivienda_anuncio_tipo_vendedor` FOREIGN KEY (`tipoVendedor`) REFERENCES `tipo_vendedor` (`nroTipoVendedor`),
  ADD CONSTRAINT `FK_viviendo_anuncio_anuncio` FOREIGN KEY (`nroAnuncio`) REFERENCES `anuncio` (`nroAnuncio`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
