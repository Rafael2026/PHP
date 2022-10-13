-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2022 a las 17:30:32
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `todolist`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etiquetas`
--

CREATE TABLE `etiquetas` (
  `idEtq` bigint(20) UNSIGNED NOT NULL,
  `etiqueta` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `etiquetas`
--

INSERT INTO `etiquetas` (`idEtq`, `etiqueta`, `color`, `created_at`, `updated_at`) VALUES
(1, 'Suscipit qui ratione aut non.', 'Vitae.', '2022-06-20 09:43:08', '2022-06-20 09:43:08'),
(2, 'Sint rerum magni hic quia optio.', 'Et.', '2022-06-20 09:43:08', '2022-06-20 09:43:08'),
(3, 'Illo possimus velit iste quia.', 'Omnis.', '2022-06-20 09:43:08', '2022-06-20 09:43:08'),
(4, 'Aut corrupti ad nostrum deserunt.', 'Autem.', '2022-06-20 09:43:08', '2022-06-20 09:43:08'),
(5, 'Dolores tenetur quidem nulla officia asperiores.', 'Et.', '2022-06-20 09:43:08', '2022-06-20 09:43:08'),
(6, 'Aut ut vero sunt quia.', 'Qui.', '2022-06-20 09:43:08', '2022-06-20 09:43:08'),
(7, 'Ut ipsum vero sunt voluptates in.', 'Et.', '2022-06-20 09:43:08', '2022-06-20 09:43:08'),
(8, 'Earum aspernatur a aut est.', 'Aut.', '2022-06-20 09:43:08', '2022-06-20 09:43:08'),
(9, 'Nesciunt repudiandae qui et optio sit provident.', 'Nobis.', '2022-06-20 09:43:08', '2022-06-20 09:43:08'),
(10, 'Quaerat ex est architecto voluptas veniam.', 'Sunt.', '2022-06-20 09:43:08', '2022-06-20 09:43:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(50, '2014_10_12_000000_create_users_table', 1),
(51, '2014_10_12_100000_create_password_resets_table', 1),
(52, '2019_08_19_000000_create_failed_jobs_table', 1),
(53, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(54, '2022_06_13_125024_create_usuarios_table', 1),
(55, '2022_06_13_130625_create_tareas_table', 1),
(56, '2022_06_13_130646_create_etiquetas_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `idTar` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `completa` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`idTar`, `titulo`, `texto`, `fecha`, `completa`, `created_at`, `updated_at`) VALUES
(1, 'Mr.', 'Quaerat ullam sapiente enim in beatae voluptatem. Quo sed autem occaecati fugiat nesciunt enim nihil. Numquam asperiores est et quidem nisi. Cumque ea enim temporibus aut iste id sunt.', '2003-05-24', 0, '2022-06-20 09:43:08', '2022-06-20 09:43:08'),
(2, 'Prof.', 'Hic laudantium labore magni. Dolorem dolore sit est atque beatae est accusamus. Nisi dolores praesentium hic velit ut et fugit.', '2015-01-10', 0, '2022-06-20 09:43:08', '2022-06-20 09:43:08'),
(3, 'Dr.', 'Pariatur quia provident quia et iure fuga. Voluptatibus repellat sit nostrum ducimus at vel. Eos nemo esse ut libero quo.', '1986-03-21', 1, '2022-06-20 09:43:08', '2022-06-20 09:43:08'),
(4, 'Dr.', 'Ipsam porro dolore enim omnis. Fuga id in repellendus sed aut dolorum. Ut cum ullam molestiae. Voluptate et ex possimus pariatur eligendi.', '1976-06-14', 1, '2022-06-20 09:43:08', '2022-06-20 09:43:08'),
(5, 'Mr.', 'Enim minus ducimus itaque sequi recusandae temporibus suscipit. Voluptas autem est occaecati explicabo. Rerum dolorum impedit aperiam accusantium.', '2009-07-31', 0, '2022-06-20 09:43:08', '2022-06-20 09:43:08'),
(6, 'Prof.', 'Officiis ut eum nisi consequatur quo et. Esse tempora veritatis nostrum rerum placeat quos molestiae. Nihil quo delectus ut culpa eos. Assumenda facilis cupiditate animi rerum nesciunt.', '1992-01-10', 1, '2022-06-20 09:43:08', '2022-06-20 09:43:08'),
(7, 'Dr.', 'Labore molestias esse asperiores officiis magni iure. Cumque quia iure expedita ad quidem error recusandae. Consequuntur debitis voluptates eligendi enim. Tempore voluptatem est id.', '1994-01-31', 1, '2022-06-20 09:43:08', '2022-06-20 09:43:08'),
(8, 'Prof.', 'Autem omnis consequuntur error eveniet omnis magni. Sit illum nihil velit minima. Voluptas molestias blanditiis ea. Totam tempore non tempore soluta.', '2003-10-01', 1, '2022-06-20 09:43:08', '2022-06-20 09:43:08'),
(9, 'Prof.', 'Facilis rerum est esse. Similique enim non repellat suscipit nemo iste enim ipsa. Id magni quis consequatur reprehenderit. Cumque culpa consequatur et voluptatem ex.', '1979-09-26', 0, '2022-06-20 09:43:08', '2022-06-20 09:43:08'),
(10, 'Dr.', 'Quis error accusantium ut et corporis quo et. Et voluptatem facilis repellendus error vel voluptate. Quia deserunt explicabo iusto placeat.', '1973-08-06', 1, '2022-06-20 09:43:08', '2022-06-20 09:43:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tina Miller', 'cwalter@example.org', '2022-06-20 09:43:07', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YTsyXggRzL', '2022-06-20 09:43:07', '2022-06-20 09:43:07'),
(2, 'Charley Donnelly', 'hfadel@example.org', '2022-06-20 09:43:07', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5MRl6nMs5m', '2022-06-20 09:43:07', '2022-06-20 09:43:07'),
(3, 'Coralie Heaney Sr.', 'kovacek.damaris@example.com', '2022-06-20 09:43:07', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pF9h3dqXyJ', '2022-06-20 09:43:07', '2022-06-20 09:43:07'),
(4, 'Maritza Moore', 'beatty.gwen@example.org', '2022-06-20 09:43:07', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ErHjitI2BA', '2022-06-20 09:43:07', '2022-06-20 09:43:07'),
(5, 'Ms. Lyda Senger', 'erika.ward@example.com', '2022-06-20 09:43:07', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'KjxetA50b1', '2022-06-20 09:43:07', '2022-06-20 09:43:07'),
(6, 'Gage Lockman', 'dparisian@example.org', '2022-06-20 09:43:07', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'KcF3N9eJ9a', '2022-06-20 09:43:07', '2022-06-20 09:43:07'),
(7, 'Rey Kerluke IV', 'collins.rogelio@example.net', '2022-06-20 09:43:07', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xFnDOJB5gw', '2022-06-20 09:43:07', '2022-06-20 09:43:07'),
(8, 'Dr. Nicholas Marquardt MD', 'bhettinger@example.org', '2022-06-20 09:43:07', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'L8Gwvckgbk', '2022-06-20 09:43:07', '2022-06-20 09:43:07'),
(9, 'Mrs. Leora Jones PhD', 'sydnee95@example.net', '2022-06-20 09:43:07', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'X8KzRJIVRt', '2022-06-20 09:43:07', '2022-06-20 09:43:07'),
(10, 'Orville Nicolas', 'chauncey.feest@example.org', '2022-06-20 09:43:07', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8nTll4aq11', '2022-06-20 09:43:07', '2022-06-20 09:43:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsu` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` date NOT NULL,
  `apellidos` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsu`, `email`, `password`, `nombre`, `apellidos`, `created_at`, `updated_at`) VALUES
(1, 'vonrueden.jefferey@gmail.com', '$2y$10$bnENva7bPlaKOPZVu65Gmu8WOtJxjyy1VNiPzefcEBnvI45WuCNwe', '1991-10-09', 93777969, '2022-06-20 09:43:08', '2022-06-20 09:43:08'),
(2, 'doris.klocko@gmail.com', '$2y$10$yrMCccbuYKxYrh61TKP3GOd16QXO4fb8UcE9Wb5tYEKoh/W.oNl9W', '1976-11-13', 603114, '2022-06-20 09:43:08', '2022-06-20 09:43:08'),
(3, 'uhaley@hotmail.com', '$2y$10$7zIx6LEdCYtLM5KPgkGlteGqNgmbzLvkF33DdFPqbAC2XnJWaET5K', '1971-11-02', 809491, '2022-06-20 09:43:08', '2022-06-20 09:43:08'),
(4, 'roma.kilback@powlowski.org', '$2y$10$PuMCwHv7bvEw0w2sfat6K.KhHNHDx/jKoO/1ITTSkIWjNCS1E544K', '2010-10-06', 35899, '2022-06-20 09:43:08', '2022-06-20 09:43:08'),
(5, 'fberge@wilderman.com', '$2y$10$zt13cEnIoRkiVCnfhw8KS.lv.lKone6N9tARsXfYZHNf44lLJpN8q', '1995-06-13', 53820098, '2022-06-20 09:43:08', '2022-06-20 09:43:08'),
(6, 'cathrine78@hotmail.com', '$2y$10$j/eh0Z9jpGqbknILvoc2Geq5U/1OlPAgk/0fI1Eqz2A/LyTeFvO.a', '1991-07-17', 10, '2022-06-20 09:43:08', '2022-06-20 09:43:08'),
(7, 'zpowlowski@mertz.info', '$2y$10$0T50fUVdzY29hL1HmFZx9.MwWrNeXvwcbCLQNi.1pBtBaffhWWLLi', '1980-12-08', 7, '2022-06-20 09:43:08', '2022-06-20 09:43:08'),
(8, 'spencer.marianna@hotmail.com', '$2y$10$Zcv9HFyRRP9d0Xh5S5jxN.G.8yVxDUVo4rr.a40qoGV.GySgE8FH6', '1970-09-03', 34138468, '2022-06-20 09:43:08', '2022-06-20 09:43:08'),
(9, 'fziemann@emmerich.org', '$2y$10$/roehVcdbrij0/rsu37tReCmmdNPkDjDIzrXo3GVVm7nV/ZOKZOkO', '1983-02-26', 421433, '2022-06-20 09:43:08', '2022-06-20 09:43:08'),
(10, 'aida.gislason@hotmail.com', '$2y$10$WDS8yJgi1ejgcuQJVU8GzeMRo.Adh1/jp.wnrmK2mE9e.h53jxU7e', '1971-01-29', 13195807, '2022-06-20 09:43:08', '2022-06-20 09:43:08');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `etiquetas`
--
ALTER TABLE `etiquetas`
  ADD PRIMARY KEY (`idEtq`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`idTar`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `etiquetas`
--
ALTER TABLE `etiquetas`
  MODIFY `idEtq` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `idTar` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsu` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
