-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 24-02-2024 a las 20:44:44
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `kit-dev`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apps`
--

CREATE TABLE `apps` (
  `id_app` int NOT NULL,
  `img_app` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `nombre_app` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `descripcion_app` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `link_app` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `fecha_crea` datetime DEFAULT NULL,
  `fecha_actu` datetime DEFAULT NULL,
  `fecha_elim` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias_cursos`
--

CREATE TABLE `categorias_cursos` (
  `id_categoria` int NOT NULL,
  `nombre_categoria` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `descripcion_categoria` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `fecha_crea` datetime DEFAULT NULL,
  `fecha_actu` datetime DEFAULT NULL,
  `fecha_elim` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int NOT NULL,
  `nombre_curso` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `descripcion_curso` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `img_curso` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `link_curso` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `fecha_crea` datetime DEFAULT NULL,
  `fecha_actu` datetime DEFAULT NULL,
  `fecha_elim` datetime DEFAULT NULL,
  `categoria_curso` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id_libro` int NOT NULL,
  `nombre_libro` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `img_libro` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `link_libro` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `fecha_crea` datetime DEFAULT NULL,
  `fecha_actu` datetime DEFAULT NULL,
  `fecha_elim` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int NOT NULL,
  `nombre_rol` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `estado_rol` int DEFAULT NULL,
  `fecha_crea` datetime DEFAULT NULL,
  `fecha_actu` datetime DEFAULT NULL,
  `fecha_elim` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_docs`
--

CREATE TABLE `tipos_docs` (
  `id_tipo_doc` int NOT NULL,
  `nombre_tip_doc` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `estado_tip_doc` int DEFAULT NULL,
  `fecha_crea` datetime DEFAULT NULL,
  `fecha_actu` datetime DEFAULT NULL,
  `fecha_elim` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usu` int NOT NULL,
  `img_usu` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `tip_doc_usu` int DEFAULT NULL,
  `doc_usu` bigint DEFAULT NULL,
  `nombre_usu` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `apellido_usu` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `correo_usu` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `pwd_usu` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `tel_usu` bigint DEFAULT NULL,
  `fecha_crea` datetime DEFAULT NULL,
  `fecha_actu` datetime DEFAULT NULL,
  `fecha_elim` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`id_app`);

--
-- Indices de la tabla `categorias_cursos`
--
ALTER TABLE `categorias_cursos`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tipos_docs`
--
ALTER TABLE `tipos_docs`
  ADD PRIMARY KEY (`id_tipo_doc`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usu`),
  ADD UNIQUE KEY `doc_usu` (`doc_usu`),
  ADD UNIQUE KEY `correo_usu` (`correo_usu`),
  ADD UNIQUE KEY `tel_usu` (`tel_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `apps`
--
ALTER TABLE `apps`
  MODIFY `id_app` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categorias_cursos`
--
ALTER TABLE `categorias_cursos`
  MODIFY `id_categoria` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipos_docs`
--
ALTER TABLE `tipos_docs`
  MODIFY `id_tipo_doc` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usu` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
