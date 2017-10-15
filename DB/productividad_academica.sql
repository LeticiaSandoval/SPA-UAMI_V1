-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2017 a las 04:07:14
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `productividad_academica`
--
CREATE DATABASE IF NOT EXISTS `productividad_academica` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `productividad_academica`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capitulo_libro`
--

CREATE TABLE `capitulo_libro` (
  `id_capituloLibro` int(11) NOT NULL,
  `titulo_capitulo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `autores` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `autoresExternos` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `estatus` varchar(15) NOT NULL,
  `título_del_libro` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `núm_del_capítulo` int(10) NOT NULL,
  `editores` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `editorial` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ISBN` int(8) NOT NULL,
  `año` year(4) NOT NULL,
  `país` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `paginas` int(10) NOT NULL,
  `URL` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `co-autores-ext-cap`
--

CREATE TABLE `co-autores-ext-cap` (
  `id_coautorCapituloLibro` int(11) NOT NULL,
  `apat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institucion` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `co-autores-ext-libro`
--

CREATE TABLE `co-autores-ext-libro` (
  `id_coautorLibro` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apat` varchar(30) NOT NULL,
  `amat` varchar(30) NOT NULL,
  `institución` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `co-autores-ext-mem`
--

CREATE TABLE `co-autores-ext-mem` (
  `id_coautorMemorias` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apat` varchar(30) NOT NULL,
  `amat` varchar(30) NOT NULL,
  `institución` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `co-autores-ext-rev`
--

CREATE TABLE `co-autores-ext-rev` (
  `id_coautorRevista` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apat` varchar(30) NOT NULL,
  `amat` varchar(30) NOT NULL,
  `institución` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `co-autores-rev`
--

CREATE TABLE `co-autores-rev` (
  `fk_id_artRev` int(11) NOT NULL,
  `fk_id_coautorRevistas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `co-autores_cap_libro`
--

CREATE TABLE `co-autores_cap_libro` (
  `fk_id_capituloLibro` int(11) NOT NULL,
  `fk_id_coautorCapituloLibro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `co-autores_libro`
--

CREATE TABLE `co-autores_libro` (
  `fk_id_libro` int(11) NOT NULL,
  `fk_id_coautorLibro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `co-autores_memoria`
--

CREATE TABLE `co-autores_memoria` (
  `fk_id_artMemorias` int(11) NOT NULL,
  `fk_id_coautorMemorias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escribe_capitulo_libro`
--

CREATE TABLE `escribe_capitulo_libro` (
  `fk_id_profesor` int(11) NOT NULL,
  `fk_id_capituloLibro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escribe_libro`
--

CREATE TABLE `escribe_libro` (
  `fk_id_profesor` int(11) NOT NULL,
  `fk_id_libro` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escribe_memorias`
--

CREATE TABLE `escribe_memorias` (
  `fk_id_profesor` int(11) NOT NULL,
  `fk_id_artMemorias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escribe_rev`
--

CREATE TABLE `escribe_rev` (
  `fk_id_profesor` int(11) NOT NULL,
  `fk_id_artRev` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `id_libro` int(10) NOT NULL,
  `título_del_libro` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `autores` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `autoresExternos` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `estatus` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `editorial` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `editores` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ISBN` int(13) NOT NULL,
  `año` int(5) NOT NULL,
  `país` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `páginas` int(10) DEFAULT NULL,
  `URL` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id_libro`, `título_del_libro`, `autores`, `autoresExternos`, `tipo`, `estatus`, `editorial`, `editores`, `ISBN`, `año`, `país`, `páginas`, `URL`) VALUES
(13, 'Computacion', 'victor ramos', 'jose', 'Docencia', 'Aceptado', 'Esfinge', 'Carlos', 0, 0, 'Mexico', 0, 'www.libros.com'),
(14, 'Redes', 'victor ramos', 'Carlos', 'Docencia', 'Publicado', 'Esfinge', 'Carlos', 0, 0, 'Francia', 0, 'www.libros.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `memorias`
--

CREATE TABLE `memorias` (
  `id_artMemorias` int(11) NOT NULL,
  `titulo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `autores` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `autoresExternos` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` enum('Docencia','Divulgación','Investigación') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `estatus` enum('Aceptado','En prensa','Publicado') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombreEvento` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `país` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `año` int(5) NOT NULL,
  `pág_ini` int(10) NOT NULL,
  `pág_fin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `id_profesor` int(11) NOT NULL,
  `num_empleado` int(15) NOT NULL,
  `nombres` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `apat` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `amat` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `telefono` int(10) NOT NULL,
  `ext_telefono` int(5) NOT NULL,
  `max_grado_academico` enum('L','M','D','') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `institucion_otorgante_del_grado` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `año_obtencion_grado` year(4) NOT NULL,
  `año_ingreso_UAM-I` year(4) NOT NULL,
  `departamento` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_cubiculo` int(5) DEFAULT NULL,
  `edificio_cubiculo` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_laboratorio` int(5) DEFAULT NULL,
  `edif_laboratorio` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono_laboratorio` int(20) DEFAULT NULL,
  `ext_tel_laboratorio` int(5) DEFAULT NULL,
  `categoria` enum('Técnico Académico','Asistente','Asociado','Titular') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nivel` enum('A','B','C','D','E') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiempo_dedicacion` enum('TC','MT','TP','') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_horas` int(5) NOT NULL,
  `plazo_contratacion` enum('Determinado','Indeterminado','','') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revista_articulo`
--

CREATE TABLE `revista_articulo` (
  `id_artRev` int(11) NOT NULL,
  `título` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `autores` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` enum('Docencia','Divulgación','Investigación') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `estatus` enum('Aceptado','En prensa','Publicado') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_revista` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `editor` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `volumen` int(5) NOT NULL,
  `ISSN(NN)` int(8) NOT NULL,
  `pág_ini` int(10) NOT NULL,
  `pág_fin` int(10) NOT NULL,
  `año` year(4) NOT NULL,
  `num_revista` int(10) NOT NULL,
  `autoresExternos` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contraseña` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `contraseña`) VALUES
(1, 'cecy@gmail.com', '1234'),
(2, 'cm@gmail.com', '5678');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_roles`
--

CREATE TABLE `usuario_roles` (
  `id_usuarioR` int(11) NOT NULL,
  `id_rolP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `capitulo_libro`
--
ALTER TABLE `capitulo_libro`
  ADD PRIMARY KEY (`id_capituloLibro`);

--
-- Indices de la tabla `co-autores-ext-cap`
--
ALTER TABLE `co-autores-ext-cap`
  ADD PRIMARY KEY (`id_coautorCapituloLibro`);

--
-- Indices de la tabla `co-autores-ext-libro`
--
ALTER TABLE `co-autores-ext-libro`
  ADD PRIMARY KEY (`id_coautorLibro`);

--
-- Indices de la tabla `co-autores-ext-mem`
--
ALTER TABLE `co-autores-ext-mem`
  ADD PRIMARY KEY (`id_coautorMemorias`);

--
-- Indices de la tabla `co-autores-ext-rev`
--
ALTER TABLE `co-autores-ext-rev`
  ADD PRIMARY KEY (`id_coautorRevista`);

--
-- Indices de la tabla `co-autores-rev`
--
ALTER TABLE `co-autores-rev`
  ADD KEY `fk_id_artRev` (`fk_id_artRev`,`fk_id_coautorRevistas`),
  ADD KEY `fk_id_coautorRevistas` (`fk_id_coautorRevistas`);

--
-- Indices de la tabla `co-autores_cap_libro`
--
ALTER TABLE `co-autores_cap_libro`
  ADD KEY `fk_id_capituloLibro` (`fk_id_capituloLibro`),
  ADD KEY `co-autores_cap_libro_ibfk_2` (`fk_id_coautorCapituloLibro`);

--
-- Indices de la tabla `co-autores_libro`
--
ALTER TABLE `co-autores_libro`
  ADD KEY `fk_id_artLibCapitulo` (`fk_id_libro`),
  ADD KEY `fk_id_artLibCapitulo_2` (`fk_id_libro`),
  ADD KEY `fk_id_coautorLibro` (`fk_id_coautorLibro`);

--
-- Indices de la tabla `co-autores_memoria`
--
ALTER TABLE `co-autores_memoria`
  ADD KEY `id_artRev` (`fk_id_artMemorias`),
  ADD KEY `id_CoAutorExt` (`fk_id_coautorMemorias`);

--
-- Indices de la tabla `escribe_capitulo_libro`
--
ALTER TABLE `escribe_capitulo_libro`
  ADD KEY `escribe_capitulo_libro_ibfk_1` (`fk_id_capituloLibro`),
  ADD KEY `escribe_capitulo_libro_ibfk_2` (`fk_id_profesor`);

--
-- Indices de la tabla `escribe_libro`
--
ALTER TABLE `escribe_libro`
  ADD KEY `fk_id_profesor` (`fk_id_profesor`),
  ADD KEY `fk_id_artLibCap` (`fk_id_libro`);

--
-- Indices de la tabla `escribe_memorias`
--
ALTER TABLE `escribe_memorias`
  ADD KEY `fk_id_profesor` (`fk_id_profesor`),
  ADD KEY `fk_id_artMemorias` (`fk_id_artMemorias`);

--
-- Indices de la tabla `escribe_rev`
--
ALTER TABLE `escribe_rev`
  ADD KEY `fk_id_profesor` (`fk_id_profesor`),
  ADD KEY `fk_id_artRev` (`fk_id_artRev`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id_libro`);

--
-- Indices de la tabla `memorias`
--
ALTER TABLE `memorias`
  ADD PRIMARY KEY (`id_artMemorias`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id_profesor`);

--
-- Indices de la tabla `revista_articulo`
--
ALTER TABLE `revista_articulo`
  ADD PRIMARY KEY (`id_artRev`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `usuario_roles`
--
ALTER TABLE `usuario_roles`
  ADD KEY `id_personaR` (`id_usuarioR`),
  ADD KEY `id_rolP` (`id_rolP`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `capitulo_libro`
--
ALTER TABLE `capitulo_libro`
  MODIFY `id_capituloLibro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `co-autores-ext-cap`
--
ALTER TABLE `co-autores-ext-cap`
  MODIFY `id_coautorCapituloLibro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `co-autores-ext-libro`
--
ALTER TABLE `co-autores-ext-libro`
  MODIFY `id_coautorLibro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `id_libro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `memorias`
--
ALTER TABLE `memorias`
  MODIFY `id_artMemorias` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id_profesor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `revista_articulo`
--
ALTER TABLE `revista_articulo`
  MODIFY `id_artRev` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `co-autores-rev`
--
ALTER TABLE `co-autores-rev`
  ADD CONSTRAINT `co-autores-rev_ibfk_1` FOREIGN KEY (`fk_id_artRev`) REFERENCES `revista_articulo` (`id_artRev`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `co-autores-rev_ibfk_2` FOREIGN KEY (`fk_id_coautorRevistas`) REFERENCES `co-autores-ext-rev` (`id_coautorRevista`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `co-autores_cap_libro`
--
ALTER TABLE `co-autores_cap_libro`
  ADD CONSTRAINT `co-autores_cap_libro_ibfk_1` FOREIGN KEY (`fk_id_capituloLibro`) REFERENCES `capitulo_libro` (`id_capituloLibro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `co-autores_cap_libro_ibfk_2` FOREIGN KEY (`fk_id_coautorCapituloLibro`) REFERENCES `co-autores-ext-cap` (`id_coautorCapituloLibro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `co-autores_libro`
--
ALTER TABLE `co-autores_libro`
  ADD CONSTRAINT `co-autores_libro_ibfk_1` FOREIGN KEY (`fk_id_coautorLibro`) REFERENCES `co-autores-ext-libro` (`id_coautorLibro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `co-autores_libro_ibfk_2` FOREIGN KEY (`fk_id_libro`) REFERENCES `libro` (`id_libro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `co-autores_memoria`
--
ALTER TABLE `co-autores_memoria`
  ADD CONSTRAINT `co-autores_memoria_ibfk_1` FOREIGN KEY (`fk_id_artMemorias`) REFERENCES `memorias` (`id_artMemorias`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `co-autores_memoria_ibfk_2` FOREIGN KEY (`fk_id_coautorMemorias`) REFERENCES `co-autores-ext-mem` (`id_coautorMemorias`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `escribe_capitulo_libro`
--
ALTER TABLE `escribe_capitulo_libro`
  ADD CONSTRAINT `escribe_capitulo_libro_ibfk_1` FOREIGN KEY (`fk_id_capituloLibro`) REFERENCES `capitulo_libro` (`id_capituloLibro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `escribe_capitulo_libro_ibfk_2` FOREIGN KEY (`fk_id_profesor`) REFERENCES `profesor` (`id_profesor`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `escribe_libro`
--
ALTER TABLE `escribe_libro`
  ADD CONSTRAINT `escribe_libro_ibfk_1` FOREIGN KEY (`fk_id_libro`) REFERENCES `libro` (`id_libro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `escribe_libro_ibfk_2` FOREIGN KEY (`fk_id_profesor`) REFERENCES `profesor` (`id_profesor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `escribe_memorias`
--
ALTER TABLE `escribe_memorias`
  ADD CONSTRAINT `escribe_memorias_ibfk_1` FOREIGN KEY (`fk_id_artMemorias`) REFERENCES `memorias` (`id_artMemorias`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `escribe_memorias_ibfk_2` FOREIGN KEY (`fk_id_profesor`) REFERENCES `profesor` (`id_profesor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `escribe_rev`
--
ALTER TABLE `escribe_rev`
  ADD CONSTRAINT `escribe_rev_ibfk_1` FOREIGN KEY (`fk_id_artRev`) REFERENCES `revista_articulo` (`id_artRev`),
  ADD CONSTRAINT `escribe_rev_ibfk_2` FOREIGN KEY (`fk_id_profesor`) REFERENCES `profesor` (`id_profesor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
