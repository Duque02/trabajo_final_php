SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `licorera`
--
CREATE DATABASE IF NOT EXISTS `licorera` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `licorera`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebidas`
--

DROP TABLE IF EXISTS `bebidas`;
CREATE TABLE `bebidas` (
  `id` int(11) NOT NULL,
  `tipo_bebida` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebida_x_compra`
--

DROP TABLE IF EXISTS `bebida_x_compra`;
CREATE TABLE `bebida_x_compra` (
  `id` int(11) NOT NULL,
  `id_bebida` int(11) NOT NULL,
  `id_registro_compra` int(11) NOT NULL,
  `cantidad_bebida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_compra`
--

DROP TABLE IF EXISTS `registro_compra`;
CREATE TABLE `registro_compra` (
  `id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_bebida`
--

DROP TABLE IF EXISTS `tipo_bebida`;
CREATE TABLE `tipo_bebida` (
  `id` int(11) NOT NULL,
  `descripción` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cedula` varchar(30) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo_bebida` (`tipo_bebida`);

--
-- Indices de la tabla `bebida_x_compra`
--
ALTER TABLE `bebida_x_compra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bebida` (`id_bebida`),
  ADD KEY `id_registro_compra` (`id_registro_compra`);

--
-- Indices de la tabla `registro_compra`
--
ALTER TABLE `registro_compra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `tipo_bebida`
--
ALTER TABLE `tipo_bebida`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cédula` (`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `bebida_x_compra`
--
ALTER TABLE `bebida_x_compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro_compra`
--
ALTER TABLE `registro_compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_bebida`
--
ALTER TABLE `tipo_bebida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bebidas`
--
ALTER TABLE `bebidas`
  ADD CONSTRAINT `bebidas_ibfk_1` FOREIGN KEY (`tipo_bebida`) REFERENCES `tipo_bebida` (`id`);

--
-- Filtros para la tabla `bebida_x_compra`
--
ALTER TABLE `bebida_x_compra`
  ADD CONSTRAINT `bebida_x_compra_ibfk_1` FOREIGN KEY (`id_bebida`) REFERENCES `bebidas` (`id`),
  ADD CONSTRAINT `bebida_x_compra_ibfk_2` FOREIGN KEY (`id_registro_compra`) REFERENCES `registro_compra` (`id`);

--
-- Filtros para la tabla `registro_compra`
--
ALTER TABLE `registro_compra`
  ADD CONSTRAINT `registro_compra_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
