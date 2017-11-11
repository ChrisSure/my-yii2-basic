-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Лис 11 2017 р., 13:41
-- Версія сервера: 5.7.19
-- Версія PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `basic_test`
--

-- --------------------------------------------------------

--
-- Структура таблиці `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп даних таблиці `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('super_admin', '1', 1510386196);

-- --------------------------------------------------------

--
-- Структура таблиці `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп даних таблиці `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, NULL, NULL, NULL, 1510386196, 1510386196),
('super_admin', 1, NULL, NULL, NULL, 1510386196, 1510386196),
('user', 1, NULL, NULL, NULL, 1510386196, 1510386196);

-- --------------------------------------------------------

--
-- Структура таблиці `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп даних таблиці `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('super_admin', 'admin');

-- --------------------------------------------------------

--
-- Структура таблиці `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `keywords` text COLLATE utf8_unicode_ci,
  `lft` int(11) NOT NULL,
  `rgt` int(11) NOT NULL,
  `depth` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп даних таблиці `category`
--

INSERT INTO `category` (`id`, `slug`, `name`, `title`, `description`, `keywords`, `lft`, `rgt`, `depth`) VALUES
(1, 'root', '', NULL, NULL, NULL, 1, 10, 0),
(5, 'category_1', 'Category 1', '', '', '', 8, 9, 1);

-- --------------------------------------------------------

--
-- Структура таблиці `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `level` smallint(1) DEFAULT '1',
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `logs`
--

INSERT INTO `logs` (`id`, `text`, `file`, `level`, `created_at`) VALUES
(1, 'Спроба входу на сайт з невірними логіном або паролем', 'W:\\domains\\basic.loc\\logic\\services\\auth\\LoginServices.php', 4, 1510386872),
(2, 'Спроба входу на сайт з невірними логіном або паролем', 'W:\\domains\\basic.loc\\logic\\services\\auth\\LoginServices.php', 4, 1510386877),
(3, 'Спроба входу на сайт з невірними логіном або паролем', 'W:\\domains\\basic.loc\\logic\\services\\auth\\LoginServices.php', 4, 1510386983),
(4, 'Спроба входу на сайт з невірними логіном або паролем', 'W:\\domains\\basic.loc\\logic\\services\\auth\\LoginServices.php', 4, 1510386988),
(5, 'Спроба входу на сайт з невірними логіном або паролем', 'W:\\domains\\basic.loc\\logic\\services\\auth\\LoginServices.php', 4, 1510387032),
(6, 'Спроба входу на сайт з невірними логіном або паролем', 'W:\\domains\\basic.loc\\logic\\services\\auth\\LoginServices.php', 4, 1510387037),
(7, 'Спроба входу на сайт з невірними логіном або паролем', 'W:\\domains\\basic.loc\\logic\\services\\auth\\LoginServices.php', 4, 1510387114),
(8, 'Спроба входу на сайт з невірними логіном або паролем', 'W:\\domains\\basic.loc\\logic\\services\\auth\\LoginServices.php', 4, 1510387119);

-- --------------------------------------------------------

--
-- Структура таблиці `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1510386161),
('m130524_201442_init', 1510386163),
('m140506_102106_rbac_init', 1510386190),
('m170909_080040_create_security_table', 1510386163),
('m170909_080043_add_user_table', 1510386163),
('m170917_063757_create_pages_table', 1510386164),
('m171003_054754_create_category_table', 1510386164),
('m171101_103757_create_setting_table', 1510386165),
('m171106_081558_create_logs_table', 1510386165);

-- --------------------------------------------------------

--
-- Структура таблиці `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `keywords` text,
  `text` text,
  `status` smallint(1) DEFAULT '0',
  `sort` smallint(1) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `pages`
--

INSERT INTO `pages` (`id`, `slug`, `name`, `title`, `description`, `keywords`, `text`, `status`, `sort`, `created_at`, `updated_at`) VALUES
(4, 'page_1', 'Page 1', '', '', '', '', NULL, 1, 1510387114, 1510387114);

-- --------------------------------------------------------

--
-- Структура таблиці `security`
--

CREATE TABLE `security` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `count` smallint(6) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `security`
--

INSERT INTO `security` (`id`, `ip`, `count`, `created_at`, `updated_at`) VALUES
(9, NULL, 1, 1510387119, 1510387119);

-- --------------------------------------------------------

--
-- Структура таблиці `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `keywords` text,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `setting`
--

INSERT INTO `setting` (`id`, `title`, `description`, `keywords`, `address`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Basic_new', '', '', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп даних таблиці `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Taras', 'svrubF8fYXn2i532IqXVh-ilOnhvnp4K', '$2y$13$ENYPXWv0Y7HbcMlMtI1nruYUkDfS6H9AvnTiWJm9wP3GjPN9emeOm', NULL, 't@t.ua', 1, 1507802191, 1507802191);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Індекси таблиці `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Індекси таблиці `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Індекси таблиці `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Індекси таблиці `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idx-category-slug` (`slug`);

--
-- Індекси таблиці `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Індекси таблиці `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `security`
--
ALTER TABLE `security`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблиці `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблиці `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблиці `security`
--
ALTER TABLE `security`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблиці `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблиці `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Обмеження зовнішнього ключа таблиці `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Обмеження зовнішнього ключа таблиці `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
