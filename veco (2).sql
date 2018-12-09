-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2018 a las 16:14:56
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
(1, 'Veco en Varsovia', 'Tecno vuelve a ser otra vez una empresa de diseño que confirma su importancia en el mercado internacional. En su nueva sede de Varsovia, la empresa pone a disposición un espacio para recibir a clientes que deseen tener la opinión de un equipo de profesionales, arquitectos, desarrolladores y contratistas capaces de satisfacer los requisitos más variados. Se trata de un proyecto que entusiasma e implica al equipo de Tecno, la empresa que ha convertido el mundo del trabajo en el eje principal de su actividad de producción y que pretende seguir por esta senda, adecuando su oferta en una transformación que permita satisfacer plenamente las exigencias de un mercado profesional en constante evolución.\r\n\r\nLas ventajas principales de Polonia son, sobre todo, el volumen de mercado interno, la logística y la posibilidad de acceder a financiación pública. Además de servir de puente natural entre Europa Occidental y los mercados del Este, Tecno ha sido capaz de apreciar los valores de este ambicioso país, que sigue apoyando las inversiones productivas con recursos gubernamentales mediante iniciativas concretas y fondos para la innovación.', 'Veco vuelve a ser otra vez una empresa de diseño que confirma su importancia en el mercado internacional. En su nueva sede de Varsovia, la empresa pone a disposición un espacio para recibir a clientes que deseen tener la opinión de un equipo de profesionales', '2018-11-13', '2018-11-13'),
(2, 'Veco en Orgatec 2018', 'WORK SCENARIOS AT THE TECNO STAND\r\n\r\nDifferent working codes, new workplace behaviours but the person remains at the centre of these spaces: moving through the stand, which represents the ideal office building floor, enclosed by W80 partition walls, the visitor discovers multiform solutions that suggest free movement options, favouring collaboration and meeting, incorporating solutions for contemporary layout needs. \r\n\r\nThe areas, the workstations and the products are equipped with the pervasive io.T - The Intelligence of Tecno - offering the connection required to manage services, equipment, groups and workflows, improving overall user wellbeing.\r\n\r\nAt the entrance, comfortable P32 armchairs with Pons tables create traditional waiting areas, while the padded islands of the Archipelago series configure more relaxing and informal lounges.  \r\n\r\nIf a meeting has been scheduled, for more intimate discussion, modular RS2 benches dialogue with the Plau chairs and Nomos desk, as a conversation takes place around the Asymmetrical table with Vela chairs, awarded the Compasso D’Oro; the Asymmetrical collection features once more, this time developed with a large geometric top, perfect for taking part in a high-tech conference call seated comfortably on the slender S142 chairs.\r\n\r\nA series of different working activities take place throughout the day, with Tecno proposals fulfilling every need, creating configurations for dynamic exchange or individual focus, and the new products confirm Tecno\'s signature in functionality and customisability.\r\n\r\nClusters more focused on work are organised with Clavis tool free workstations - both standard and height adjustable or standing desks - combined with Linea, the new reconfigurable micro-architectural system designed by Zanon Architetti Associati and the Centro Progetti Tecno: the modules are occasional surfaces or seating, which transform into partitions or elements for archiving and storage.\r\n\r\nThese configurations that reflect open spaces or co-working situations also include Tecno\'s Aura armchairs, another novelty presented at Orgatec and designed by Rainlight and Centro Progetti Tecno, with an enveloping shape to create moments of privacy. The setting is further enriched by the Todo Modo sofa, the re-edition of a project by Jean-Michel Wilmotte for the Louvre, adapted for new uses.\r\n\r\nThe areas dedicated to management and cubicles workstation are more traditional, both updated by \"discordant\" elements by Jean-Michel Wilmotte: in the executive office - resolved with the Asymmetrical desk, the Cento storage system, the Vela and S142 chairs - the almost brutalist T50 table creates a visual contrast with the iconic D70 sofa, while the Hortus wooden benches complete the sequence of zones for intensive work, defined by the Multy sound-absorbing partition wall system.\r\n\r\nTecno\'s partner Viabizzuno has provided the lighting for the whole booth, with lighting points controlled by the io.T system positioned across the multiple connected areas.', 'At Orgatec, Tecno will present new scenarios that re-design the paradigms of work, with a language that talks of flexibility, customisation, comfort.Efficient, welcoming and responsive furnishings: in Cologne, the latest multifunctional proposals intera.', '2018-11-15', '2018-11-15'),
(7, 'Nomos30', 'Tecno - together with its partners - is celebrating this significant moment with an event dedicated to the product and to its designer, to design and to industrial production. An exhibition that guides visitors through the discovery of an important page in the story that the architect has put together with many of his works, whether macro buildings or - as in the case of Nomos – extraordinary objects.\r\n\r\n26/09 \r\nPARMA, Italy \r\nCavalca Linea Ufficio  Street La Spezia, 222 \r\nH 6:00 pm \r\n\r\n09/10\r\nROMA , Italy\r\nPianeta Ufficio \r\nStreet Del Banco di Santo Spirito, 42 \r\nH 7:00 pm', 'Nomos, the iconic table designed by Norman Foster and produced by Tecno, was launched thirty years ago, marking one of the fundamental milestones in the history of Industrial Design.', '2018-11-15', '2018-11-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pictures`
--

CREATE TABLE `pictures` (
  `picture` varchar(255) NOT NULL,
  `blog_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pictures`
--

INSERT INTO `pictures` (`picture`, `blog_id`, `project_id`, `created_at`, `updated_at`, `id`, `product_id`, `product_category_id`) VALUES
('1541724529.jpg', NULL, 5, '2018-11-09', '2018-11-09', 4, 0, 0),
('1541725318.jpg', NULL, 5, '2018-11-09', '2018-11-09', 5, 0, 0),
('1541725318.jpg', NULL, 5, '2018-11-09', '2018-11-09', 6, 0, 0),
('1541725319.jpg', NULL, 5, '2018-11-09', '2018-11-09', 7, 0, 0),
('1541725319.jpg', NULL, 5, '2018-11-09', '2018-11-09', 8, 0, 0),
('1541729480.jpg', NULL, 11, '2018-11-09', '2018-11-09', 25, 0, 0),
('1541729490.jpg', NULL, 11, '2018-11-09', '2018-11-09', 26, 0, 0),
('1541729500.jpg', NULL, 11, '2018-11-09', '2018-11-09', 27, 0, 0),
('1541729526.jpg', NULL, 11, '2018-11-09', '2018-11-09', 28, 0, 0),
('1542146942.jpg', NULL, 12, '2018-11-13', '2018-11-13', 29, 0, 0),
('1542147002.jpg', NULL, 12, '2018-11-13', '2018-11-13', 30, 0, 0),
('1542147002.jpg', NULL, 12, '2018-11-13', '2018-11-13', 31, 0, 0),
('1542147003.jpg', NULL, 12, '2018-11-13', '2018-11-13', 32, 0, 0),
('1542147003.jpg', NULL, 12, '2018-11-13', '2018-11-13', 33, 0, 0),
('1542148453.jpg', 1, NULL, '2018-11-13', '2018-11-13', 34, 0, 0),
('1542148453.jpg', 1, NULL, '2018-11-13', '2018-11-13', 35, 0, 0),
('1542148454.jpg', 1, NULL, '2018-11-13', '2018-11-13', 36, 0, 0),
('1542148454.jpg', 1, NULL, '2018-11-13', '2018-11-13', 37, 0, 0),
('1542319267.jpg', 2, NULL, '2018-11-15', '2018-11-15', 38, 0, 0),
('1542319268.jpg', 2, NULL, '2018-11-15', '2018-11-15', 39, 0, 0),
('1542319268.jpg', 2, NULL, '2018-11-15', '2018-11-15', 40, 0, 0),
('1542319268.jpg', 7, NULL, '2018-11-15', '2018-11-15', 41, 0, 0),
('1542319268.jpg', 7, NULL, '2018-11-15', '2018-11-15', 42, 0, 0),
('1542319353.jpg', 7, NULL, '2018-11-15', '2018-11-15', 43, 0, 0),
('1542319354.jpg', 7, NULL, '2018-11-15', '2018-11-15', 44, 0, 0),
('1542319354.jpg', 2, NULL, '2018-11-15', '2018-11-15', 45, 0, 0),
('1542319354.jpg', 2, NULL, '2018-11-15', '2018-11-15', 46, 0, 0),
('1542319381.jpg', 2, NULL, '2018-11-15', '2018-11-15', 47, 0, 0),
('1542319381.jpg', 2, NULL, '2018-11-15', '2018-11-15', 48, 0, 0),
('1542319382.jpg', 2, NULL, '2018-11-15', '2018-11-15', 49, 0, 0),
('1542319382.jpg', 2, NULL, '2018-11-15', '2018-11-15', 50, 0, 0),
('1542319500.jpg', 2, NULL, '2018-11-15', '2018-11-15', 51, 0, 0),
('1542319500.jpg', 2, NULL, '2018-11-15', '2018-11-15', 52, 0, 0),
('1542319500.jpg', 2, NULL, '2018-11-15', '2018-11-15', 53, 0, 0),
('1542319501.jpg', 2, NULL, '2018-11-15', '2018-11-15', 54, 0, 0),
('1542319511.jpg', 2, NULL, '2018-11-15', '2018-11-15', 55, 0, 0),
('1542319511.jpg', 2, NULL, '2018-11-15', '2018-11-15', 56, 0, 0),
('1542319511.jpg', 2, NULL, '2018-11-15', '2018-11-15', 57, 0, 0),
('1542319512.jpg', 2, NULL, '2018-11-15', '2018-11-15', 58, 0, 0),
('1542319585.jpg', 2, NULL, '2018-11-15', '2018-11-15', 59, 0, 0),
('1542319585.jpg', 2, NULL, '2018-11-15', '2018-11-15', 60, 0, 0),
('1542319586.jpg', 2, NULL, '2018-11-15', '2018-11-15', 61, 0, 0),
('1542319586.jpg', 2, NULL, '2018-11-15', '2018-11-15', 62, 0, 0),
('1543274521.jpg', NULL, 13, '2018-11-26', '2018-11-26', 63, 0, 0),
('1543274522.jpg', NULL, 13, '2018-11-26', '2018-11-26', 64, 0, 0),
('1543274571.jpg', NULL, 13, '2018-11-26', '2018-11-26', 65, 0, 0),
('1543274571.jpg', NULL, 13, '2018-11-26', '2018-11-26', 66, 0, 0),
('1543274616.jpg', NULL, 13, '2018-11-26', '2018-11-26', 67, 0, 0),
('1543274616.jpg', NULL, 13, '2018-11-26', '2018-11-26', 68, 0, 0),
('1543274707.jpg', NULL, 13, '2018-11-26', '2018-11-26', 69, 0, 0),
('15432778541.jpg', NULL, 40, '2018-11-27', '2018-11-27', 108, 0, 0),
('15432779141.jpg', NULL, 40, '2018-11-27', '2018-11-27', 109, 0, 0),
('15432779152.jpg', NULL, 40, '2018-11-27', '2018-11-27', 110, 0, 0),
('15432780111.jpg', NULL, 41, '2018-11-27', '2018-11-27', 111, 0, 0),
('15432780112.jpg', NULL, 41, '2018-11-27', '2018-11-27', 112, 0, 0),
('15432785331.png', NULL, 41, '2018-11-27', '2018-11-27', 113, 0, 0),
('15432785342.jpg', NULL, 41, '2018-11-27', '2018-11-27', 114, 0, 0),
('15432785343.jpg', NULL, 41, '2018-11-27', '2018-11-27', 115, 0, 0),
('15432795601.jpg', NULL, 47, '2018-11-27', '2018-11-27', 116, 0, 0),
('15432795602.jpg', NULL, 47, '2018-11-27', '2018-11-27', 117, 0, 0),
('15432795603.jpg', NULL, 47, '2018-11-27', '2018-11-27', 118, 0, 0),
('15432795701.jpg', NULL, 48, '2018-11-27', '2018-11-27', 119, 0, 0),
('15432795712.jpg', NULL, 48, '2018-11-27', '2018-11-27', 120, 0, 0),
('15432795713.jpg', NULL, 48, '2018-11-27', '2018-11-27', 121, 0, 0),
('15436723761.jpg', NULL, NULL, '2018-12-01', '2018-12-01', 122, NULL, 4),
('15436769551.jpg', NULL, NULL, '2018-12-01', '2018-12-01', 123, NULL, 2),
('15436783241.jpg', NULL, NULL, '2018-12-01', '2018-12-01', 124, NULL, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` mediumtext,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `created_at`, `updated_at`, `category_id`) VALUES
(2, 'Oficina 01', NULL, '2018-12-01', '2018-12-01', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products_categories`
--

CREATE TABLE `products_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `products_categories`
--

INSERT INTO `products_categories` (`id`, `name`, `created_at`, `updated_at`, `description`) VALUES
(4, 'Oficina', '2018-12-01', '2018-12-01', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dolorem error nulla quos sunt. Accusantium consectetur corporis delectus dolores eligendi, hic, illumor sit amet, consectetur adipisicing elit. Amet dolorem error nulla quos sunt. Accusantium consectetur corporis delectus dolores eligendi, hic, illum impedit natus nihil, non officiis quo sit tempore.'),
(5, 'Tienda', '2018-12-01', '2018-12-01', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dolorem error nulla quos sunt. Accusantium consectetur corporis delectus dolores eligendi, hic, illumor sit amet, consectetur adipisicing elit. Amet dolorem error nulla quos sunt. Accusantium consectetur corporis delectus dolores elige');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `maps` text NOT NULL,
  `place` varchar(255) NOT NULL,
  `client` varchar(255) NOT NULL,
  `arquitectes` varchar(255) NOT NULL,
  `date` varchar(11) NOT NULL,
  `production` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `text`, `maps`, `place`, `client`, `arquitectes`, `date`, `production`, `created_at`, `updated_at`) VALUES
(11, 'Porcelanosa', 'Con el buque insignia de Porcelanosa en Nueva York, Tecno colabora una vez más con el estudio Foster+Partners, responsable de la reforma de los interiores del edificio de principios del siglo XX ubicado en la intersección de Broadway y la Quinta Avenida.', 'El estudio se ha centrado en mantener la fachada neoclásica, rehabilitada estructuralmente para promover la máxima sostenibilidad ambiental del edificio y su actualización funcional y contemporánea, mientras que el interior se ha reformado por completo en términos de innovación y versatilidad del espacio. \r\n\r\nSe ha elegido Tecno para apoyar la fluidez y el dinamismo de las nuevas necesidades de exposición y de trabajo de la empresa. Para las estaciones operativas, se ha elegido Nomos, personalizado con Krion, el material más cálido y evocador de la piedra natural que caracteriza a Porcelanosa.', 'asdasd', 'New York', 'Porcelanosa', 'Foster + Partners', '2015 - 2016', 'Nomos Table', '2018-11-09', '2018-11-09'),
(12, 'BMW', 'Rigour, sobriety and rational organisation of space are a natural fit for the elegant austerity of the German BMW brand.', 'Overstepping the boundaries of sector has been in the DNA of design from its outset. The padded seating industry itself – Tecno is one example – owes much to applications from the automotive world.\r\n\r\nIt’s no coincidence that paths cross again in history and one of the most important automotive companies in the world, BMW, asked Tecno to fit out its entire Italian dealership network: sales area, reception, lounge, delivery, service and spare parts desks and bar furnishings.', 'asd', 'Italy', 'BMW', 'Arquitects', '2015 - 2017', 'Miami', '2018-11-13', '2018-11-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'user', 'User');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sinfoto.jpg',
  `phone` int(11) NOT NULL DEFAULT '0',
  `role_id` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `avatar`, `phone`, `role_id`) VALUES
(1, 'Julian Alexis Drets', 'juliandrets@gmail.com', '$2y$10$TW0bHi9xsmsh9plWgumMQuaMYOQfs6ChACWW/ucNF8q4fD6SrL/qq', 'HlhXD3DX2h5D96Dcf6AqIpWyoBMniiQKGm7EmBoClJ7tWETwoj2q8ChMNUrW', '2018-06-27 17:23:55', '2018-07-09 18:47:56', '1531151276.png', 1568830242, 1),
(12, 'Pedrito', 'asd@asd.asd', '$2y$10$f.V2diFMkebsDoAfVlntxOGnBo8h4Rgi4wK5/h4qNLxqY7FwoRkUu', 'GDrULvwtDMfJxJCWlzTQ4D3pkIDtaurKvWAF8RuZClWHv0xIVdROkqz57w6h', '2018-07-27 17:51:53', '2018-07-27 17:51:53', 'sinfoto.jpg', 0, 2),
(13, 'Veronica', 'verogenoni@hotmail.com', '$2y$10$ZW/LiCtatZwamn2wCPyVUeOmV802Pyg0yC.aA6tQLgjBSw9SK5DYK', NULL, '2018-08-04 03:00:20', '2018-08-04 03:00:20', 'sinfoto.jpg', 0, 2),
(14, 'Julian', 'aaaa@asd.asd', '$2y$10$jq4QpjqyYZrPULY6hJXAk.llCIUT6lt4C8AKskClxIFn8IVA2y23i', 'CjCPFCVDybe0zF3iGStcP70HeMwFJL46dNL3gW2XYgai9PKzUn9G7AESjfx3', '2018-10-26 03:36:48', '2018-10-26 03:36:48', 'sinfoto.jpg', 0, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products_categories`
--
ALTER TABLE `products_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `products_categories`
--
ALTER TABLE `products_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
