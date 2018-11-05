-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2018 a las 00:16:11
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
