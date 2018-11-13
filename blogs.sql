-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2018 a las 23:59:19
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `veco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `description` mediumtext NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `text`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Veco en Varsovia', 'Tecno vuelve a ser otra vez una empresa de diseño que confirma su importancia en el mercado internacional. En su nueva sede de Varsovia, la empresa pone a disposición un espacio para recibir a clientes que deseen tener la opinión de un equipo de profesionales, arquitectos, desarrolladores y contratistas capaces de satisfacer los requisitos más variados. Se trata de un proyecto que entusiasma e implica al equipo de Tecno, la empresa que ha convertido el mundo del trabajo en el eje principal de su actividad de producción y que pretende seguir por esta senda, adecuando su oferta en una transformación que permita satisfacer plenamente las exigencias de un mercado profesional en constante evolución.\r\n\r\nLas ventajas principales de Polonia son, sobre todo, el volumen de mercado interno, la logística y la posibilidad de acceder a financiación pública. Además de servir de puente natural entre Europa Occidental y los mercados del Este, Tecno ha sido capaz de apreciar los valores de este ambicioso país, que sigue apoyando las inversiones productivas con recursos gubernamentales mediante iniciativas concretas y fondos para la innovación.', 'Veco vuelve a ser otra vez una empresa de diseño que confirma su importancia en el mercado internacional. En su nueva sede de Varsovia, la empresa pone a disposición un espacio para recibir a clientes que deseen tener la opinión de un equipo de profesionales', '2018-11-13', '2018-11-13');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
