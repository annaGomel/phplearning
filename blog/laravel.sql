-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 16 2019 г., 17:05
-- Версия сервера: 5.6.41
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `16.05.2019hw`
--
CREATE DATABASE IF NOT EXISTS `16.05.2019hw` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `16.05.2019hw`;

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
                          `id` int(11) NOT NULL,
                          `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'детектив'),
(2, 'роман'),
(3, 'проза'),
(4, 'фентези');

-- --------------------------------------------------------

--
-- Структура таблицы `page`
--

CREATE TABLE `page` (
                      `id` int(11) NOT NULL,
                      `name` text NOT NULL,
                      `category_id` int(11) NOT NULL,
                      `sub_category_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `page`
--

INSERT INTO `page` (`id`, `name`, `category_id`, `sub_category_id`) VALUES
(1, 'Война и Мир', 2, '1'),
(2, 'Анна Коренина', 2, '2'),
(3, 'Капитанская дочь', 3, '2'),
(4, 'Звездные воины', 4, '2');

-- --------------------------------------------------------

--
-- Структура таблицы `sub_category`
--

CREATE TABLE `sub_category` (
                              `id` int(11) NOT NULL,
                              `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sub_category`
--

INSERT INTO `sub_category` (`id`, `name`) VALUES
(1, 'военная тематика'),
(2, 'приключенческая тематика'),
(3, 'рецепты'),
(4, 'документалистика');

-- --------------------------------------------------------

--
-- Структура таблицы `tovary`
--

CREATE TABLE `tovary` (
                        `id` int(11) NOT NULL,
                        `name` text NOT NULL,
                        `prace` double NOT NULL,
                        `count` int(11) NOT NULL,
                        `sub_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tovary`
--

INSERT INTO `tovary` (`id`, `name`, `prace`, `count`, `sub_category_id`) VALUES
(1, 'пекинская капуста', 2.3, 100, 1),
(2, 'морковь корейская', 1.5, 50, 3),
(3, 'помидоры черри', 0.7, 12, 2),
(4, 'кальмар мелкий', 50, 10, 5),
(5, 'кальмар мороженный', 150, 5, 5),
(6, 'горбуша морская', 3.5, 12, 6),
(7, 'горбуша  речная', 120, 80, 6),
(8, 'свинина домашняя', 7, 6, 7),
(9, 'белокачанная  капуста', 5.8, 6, 1),
(10, 'телятина парная', 13.7, 5, 8),
(11, 'говядина домашняя', 11, 80, 8),
(12, 'помидоры херсонские', 9, 30, 2),
(13, 'помидоры краснодарские', 8.5, 20, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `tovary_category`
--

CREATE TABLE `tovary_category` (
                                 `id` int(11) NOT NULL,
                                 `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tovary_category`
--

INSERT INTO `tovary_category` (`id`, `name`) VALUES
(1, 'овощи'),
(2, 'мясо'),
(3, 'морепродукты');

-- --------------------------------------------------------

--
-- Структура таблицы `tovary_sub_category`
--

CREATE TABLE `tovary_sub_category` (
                                     `id` int(11) NOT NULL,
                                     `name` text NOT NULL,
                                     `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tovary_sub_category`
--

INSERT INTO `tovary_sub_category` (`id`, `name`, `category_id`) VALUES
(1, 'капуста', 1),
(2, 'помидоры', 1),
(3, 'морковь', 1),
(4, 'лосось', 3),
(5, 'кальмар ', 3),
(6, 'горбуша ', 3),
(7, 'свинина', 2),
(8, 'говядина', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `workers`
--

CREATE TABLE `workers` (
                         `id` int(11) NOT NULL,
                         `worker` text NOT NULL,
                         `login` text NOT NULL,
                         `salary` int(11) NOT NULL,
                         `age` int(3) NOT NULL,
                         `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `workers`
--

INSERT INTO `workers` (`id`, `worker`, `login`, `salary`, `age`, `date`) VALUES
(1, 'Kolya', 'ggg', 800, 20, '2019-05-14'),
(2, 'Sasha', '', 1100, 20, '2019-05-24'),
(3, 'Maria', '', 2000, 27, '2019-05-17'),
(4, 'Daniil', '', 300, 27, '2019-05-30'),
(5, 'Olga', '', 680, 39, '2019-05-26'),
(6, 'Pavel', 'eee', 1400, 41, '2019-05-25'),
(7, 'Katya', '', 17000, 41, '2019-05-18'),
(8, 'Stanisav', '', 350, 33, '2019-05-21'),
(9, 'Lena', 'zzz', 680, 58, '2019-05-31'),
(10, 'Gena', '', 1340, 61, '2019-05-23');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tovary`
--
ALTER TABLE `tovary`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tovary_category`
--
ALTER TABLE `tovary_category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tovary_sub_category`
--
ALTER TABLE `tovary_sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `tovary`
--
ALTER TABLE `tovary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `tovary_category`
--
ALTER TABLE `tovary_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `tovary_sub_category`
--
ALTER TABLE `tovary_sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- База данных: `16.05.2019hw2`
--
CREATE DATABASE IF NOT EXISTS `16.05.2019hw2` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `16.05.2019hw2`;

-- --------------------------------------------------------

--
-- Структура таблицы `brand`
--

CREATE TABLE `brand` (
                       `id` int(11) NOT NULL,
                       `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brand`
--

INSERT INTO `brand` (`id`, `name`) VALUES
(1, 'zara'),
(2, 'colins'),
(3, 'h&m');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
                          `id` int(11) NOT NULL,
                          `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'штаны'),
(2, 'юбки'),
(3, 'блузки');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
                          `id` int(11) NOT NULL,
                          `vopros` text NOT NULL,
                          `otvet` text NOT NULL,
                          `status` text NOT NULL,
                          `poluchatel_id` int(11) NOT NULL,
                          `otpravitel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `vopros`, `otvet`, `status`, `poluchatel_id`, `otpravitel_id`) VALUES
(1, 'Ваш любимый цвет?', 'белый', 'Прочитано', 1, 4),
(2, 'Ваш любимый город?', 'Нью Йорк', 'Прочитано', 4, 1),
(3, 'Ваше любимое животное?', '', 'Не прочитано', 1, 2),
(4, 'Ваш любимый фильм?', '', 'Не прочитано', 1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `stok`
--

CREATE TABLE `stok` (
                      `id` int(11) NOT NULL,
                      `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `stok`
--

INSERT INTO `stok` (`id`, `name`) VALUES
(1, 'склад 1'),
(2, 'склад 2'),
(3, 'склад 3');

-- --------------------------------------------------------

--
-- Структура таблицы `tovar`
--

CREATE TABLE `tovar` (
                       `id` int(11) NOT NULL,
                       `name` text NOT NULL,
                       `brand_id` int(11) NOT NULL,
                       `category_id` int(11) NOT NULL,
                       `stok_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tovar`
--

INSERT INTO `tovar` (`id`, `name`, `brand_id`, `category_id`, `stok_id`) VALUES
(1, 'Блуза с аборкой Zara', 1, 3, 1),
(2, 'бриджи colins', 2, 1, 2),
(3, 'Блуза с аборкой  белая', 3, 3, 1),
(4, 'бриджи черные', 1, 1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
                       `id` int(11) NOT NULL,
                       `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`) VALUES
(1, 'Аня'),
(2, 'Рома'),
(3, 'Света'),
(4, 'Игорь'),
(5, 'Даша'),
(6, 'Петя'),
(7, 'Саша'),
(8, 'Коля');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `otpravitel_id` (`otpravitel_id`),
  ADD KEY `poluchatel_id` (`poluchatel_id`);

--
-- Индексы таблицы `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tovar`
--
ALTER TABLE `tovar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `stok_id` (`stok_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `stok`
--
ALTER TABLE `stok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `tovar`
--
ALTER TABLE `tovar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`otpravitel_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`poluchatel_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `tovar`
--
ALTER TABLE `tovar`
  ADD CONSTRAINT `tovar_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`),
  ADD CONSTRAINT `tovar_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `tovar_ibfk_3` FOREIGN KEY (`stok_id`) REFERENCES `stok` (`id`);
--
-- База данных: `laravel`
--
CREATE DATABASE IF NOT EXISTS `laravel` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `laravel`;

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
                          `id` int(10) UNSIGNED NOT NULL,
                          `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
                          `created_at` timestamp NULL DEFAULT NULL,
                          `updated_at` timestamp NULL DEFAULT NULL,
                          `deleted_at` timestamp NULL DEFAULT NULL,
                          `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'none'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `text`, `created_at`, `updated_at`, `deleted_at`, `title`) VALUES
(1, 'Anneta88', '2019-06-15 21:51:30', '2019-06-15 21:51:30', NULL, 'Blog Post Title 121'),
(2, 'Anneta88', '2019-06-15 22:10:55', '2019-06-15 22:10:55', NULL, 'АККУМУЛЯТОРНЫЙ УДАРНЫЙ ВИНТОВЕРТ RYOBI R 18 ID 3-0 ONE   12'),
(3, 'Raman', '2019-06-15 22:14:29', '2019-06-16 09:46:07', '2019-06-16 09:46:07', 'Blog Post Title 1freyrj'),
(4, 'clara-str@mail.ru', '2019-06-16 10:13:05', '2019-06-16 10:13:05', NULL, 'Blog Post Title 121');

-- --------------------------------------------------------

--
-- Структура таблицы `article_user`
--

CREATE TABLE `article_user` (
                              `id` int(10) UNSIGNED NOT NULL,
                              `created_at` timestamp NULL DEFAULT NULL,
                              `updated_at` timestamp NULL DEFAULT NULL,
                              `user_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
                              `article_id` int(10) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `article_user`
--

INSERT INTO `article_user` (`id`, `created_at`, `updated_at`, `user_id`, `article_id`) VALUES
(2, '2019-06-15 22:10:55', '2019-06-15 22:10:55', 2, 2),
(5, '2019-06-16 10:13:05', '2019-06-16 10:13:05', 4, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
                            `id` int(10) UNSIGNED NOT NULL,
                            `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                            `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_16_100001_create_articles_table', 1),
(4, '2019_06_16_100002_create_article_user_table', 1),
(5, '2019_06_16_100003_change_article_user_table', 1),
(6, '2019_06_16_100004_change_user_table', 1),
(7, '2019_06_16_100005_change_users_field_options_table', 2),
(8, '2019_06_16_100006_change_articles_fiel_text_table', 2),
(9, '2019_06_16_100007_change_article_soft_table', 2),
(10, '2019_06_16_100008_change_article_add_title_table', 2),
(11, '2019_06_16_100009_change_user_add_experience_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
                                 `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('anneta.plus88@gmail.com', '$2y$10$Qr5ZWYTt5X5O3Pcmy8wSpeVMNGEKtPhXODCUjrNAfLq5owqjgLXkq', '2019-06-15 22:09:13');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
                       `id` int(10) UNSIGNED NOT NULL,
                       `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                       `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                       `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                       `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                       `created_at` timestamp NULL DEFAULT NULL,
                       `updated_at` timestamp NULL DEFAULT NULL,
                       `nickname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                       `surname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                       `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                       `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                       `sex` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'male',
                       `show_phone` tinyint(1) NOT NULL DEFAULT '0',
                       `experience` int(10) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `nickname`, `surname`, `avatar`, `phone`, `sex`, `show_phone`, `experience`) VALUES
(2, 'Анна', 'anneta.plus88@gmail.com', '$2y$10$nh40cvOAIvFATrNxPxSeHug8Lz3d3fc/8tPUOVf9fOJ2QGWiJLjSC', NULL, '2019-06-15 22:10:27', '2019-06-16 09:59:29', 'Anneta', 'Шидловская', '15606475182014-06-07 07.23.08.jpg', '+375297351857', 'female', 0, 1),
(4, NULL, 'Clara-srt@gmail.com', '$2y$10$RhIvijlZQFG0Y9nsFFRQ4OnJ38BWk.omkIKcHuZAfyxhseOc8jjUC', NULL, '2019-06-16 10:12:50', '2019-06-16 10:12:50', 'Clara', NULL, NULL, NULL, 'male', 0, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `article_user`
--
ALTER TABLE `article_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_user_user_id_foreign` (`user_id`),
  ADD KEY `article_user_article_id_foreign` (`article_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `nickname` (`nickname`),
  ADD UNIQUE KEY `users_nickname_unique` (`nickname`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `article_user`
--
ALTER TABLE `article_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `article_user`
--
ALTER TABLE `article_user`
  ADD CONSTRAINT `article_user_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `article_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
--
-- База данных: `lesson12`
--
CREATE DATABASE IF NOT EXISTS `lesson12` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `lesson12`;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
                            `id` int(11) NOT NULL,
                            `name` varchar(60) NOT NULL,
                            `code` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `code`) VALUES
(2, 'services', 'serv'),
(3, 'contact1', 'con1'),
(5, 'Rewiews', 'rw'),
(6, 'Rewiews', 'rw'),
(7, 'Edwin', 'hp');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
                       `id` int(11) NOT NULL,
                       `title` varchar(60) NOT NULL,
                       `author` varchar(60) NOT NULL,
                       `created_at` date NOT NULL,
                       `content` text NOT NULL,
                       `image` varchar(60) NOT NULL,
                       `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `author`, `created_at`, `content`, `image`, `cat_id`) VALUES
(3, 'Blog Post Title 3', 'Start Bootstrap', '2019-04-25', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, t', 'http://placehold.it/900x300', 3),
(4, '1', '', '2019-05-08', '2', '3', 0),
(5, 'некупрнгшнщггш', '', '2019-05-08', 'щшгнопека', '.зжщнгопек', 0),
(6, 'Test name', '', '2019-06-12', 'Test description', 'image', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- База данных: `lesson14`
--
CREATE DATABASE IF NOT EXISTS `lesson14` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `lesson14`;

-- --------------------------------------------------------

--
-- Структура таблицы `cathegory`
--

CREATE TABLE `cathegory` (
                           `id` int(11) NOT NULL,
                           `name` char(255) NOT NULL,
                           `code` char(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cathegory`
--

INSERT INTO `cathegory` (`id`, `name`, `code`) VALUES
(1, 'Доски и лыжи', 'boards'),
(2, 'Крепления', 'attachment'),
(3, 'Ботинки', 'boots'),
(4, 'Одежда', 'clothing'),
(5, 'Инструменты', 'tools'),
(6, 'Разное', 'other');

-- --------------------------------------------------------

--
-- Структура таблицы `lots`
--

CREATE TABLE `lots` (
                      `id` int(11) NOT NULL,
                      `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
                      `title` char(255) NOT NULL,
                      `description` text,
                      `picture` char(255) DEFAULT NULL,
                      `start_price` int(10) NOT NULL,
                      `end_date` timestamp NULL DEFAULT NULL,
                      `staf_step` int(3) NOT NULL,
                      `user_id` int(11) NOT NULL,
                      `winner_id` int(11) DEFAULT NULL,
                      `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `lots`
--

INSERT INTO `lots` (`id`, `create_date`, `title`, `description`, `picture`, `start_price`, `end_date`, `staf_step`, `user_id`, `winner_id`, `category_id`) VALUES
(7, '2019-05-11 21:00:00', '2014 Rossignol District Snowboard', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur varius accumsan ante sodales vulputate. Donec ornare orci eu aliquet molestie. Vivamus vestibulum porttitor rhoncus. Integer ultricies pharetra pulvinar. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lobortis in quam eget elementum. Integer quis nibh vel metus fermentum finibus. Nulla facilisi. Etiam nulla velit, maximus id facilisis nec, ornare sit amet turpis. Phasellus placerat condimentum sapien vitae semper. Pellentesque a diam cursus, luctus nunc eget, consequat odio. Ut consectetur risus sit amet commodo interdum. Nullam scelerisque volutpat nunc ut ultrices.', 'lot-1.jpg', 10999, '2019-05-13 21:00:00', 12000, 2, NULL, 1),
(8, '2019-05-10 21:00:00', 'DC Ply Mens 2016/2017 Snowboard', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur varius accumsan ante sodales vulputate. Donec ornare orci eu aliquet molestie. Vivamus vestibulum porttitor rhoncus. Integer ultricies pharetra pulvinar. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lobortis in quam eget elementum. Integer quis nibh vel metus fermentum finibus. Nulla facilisi. Etiam nulla velit, maximus id facilisis nec, ornare sit amet turpis. Phasellus placerat condimentum sapien vitae semper. Pellentesque a diam cursus, luctus nunc eget, consequat odio. Ut consectetur risus sit amet commodo interdum. Nullam scelerisque volutpat nunc ut ultrices.', 'lot-2.jpg', 159999, '2019-05-13 21:00:00', 50000, 1, NULL, 1),
(9, '2019-05-11 21:00:00', 'Крепления Union Contact Pro 2015 года размер L/XL', 'Donec ornare orci eu aliquet molestie. Vivamus vestibulum porttitor rhoncus. Integer ultricies pharetra pulvinar.', 'lot-3.jpg', 8000, '2019-05-13 21:00:00', 1000, 1, NULL, 2),
(10, '2019-05-08 21:00:00', 'Ботинки для сноуборда DC Mutiny Charocal', 'Mauris sed egestas quam. Phasellus sed purus condimentum, pretium justo sed, fermentum est. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec feugiat orci sit amet facilisis cursus.', 'lot-4.jpg', 10999, '2019-05-14 21:00:00', 2000, 3, NULL, 3),
(11, '2019-05-08 21:00:00', 'Куртка для сноуборда DC Mutiny Charocal', 'Praesent ac ultricies nulla, non tristique sapien. Donec imperdiet nisl blandit magna bibendum, eget ornare neque pellentesque. Nulla sagittis tristique ultri', 'lot-5.jpg', 7500, '2019-05-11 21:00:00', 2500, 2, 2, 4),
(12, '2019-05-07 21:00:00', 'Маска Oakley Canopy', 'Donec vel laoreet nibh, quis viverra sem. In hac habitasse platea dictumst. Maecenas ac urna tellus. Aenean diam metus, rutrum et dignissim quis, pharetra non lacus. Aenean a leo neque. Pellentesque eros metus, cursus id placerat vel, interdum sed libero. Nunc tincidunt porta metus, quis tristique ex. Nulla feugiat et lectus vel dignissim. Vestibulum rutrum nulla laoreet urna pulvinar, nec hendrerit eros iaculis.', 'lot-6.jpg', 5400, '2019-05-09 21:00:00', 1500, 2, 1, 6),
(150, '2019-06-09 21:17:39', 'книга', 'Тест', '', 100, '0000-00-00 00:00:00', 20, 0, NULL, 1),
(151, '2019-06-09 21:24:21', 'книга', 'Инфа', '', 100, '0000-00-00 00:00:00', 20, 0, NULL, 3),
(152, '2019-06-09 21:24:39', 'книга', 'Итн', '2014-06-07 07.23.08.jpg', 100, '0000-00-00 00:00:00', 20, 0, NULL, 1),
(153, '2019-06-09 21:43:43', 'книга1234', 'сли экипровка не найдена выводим  ошибки 404 -  страница не найдена', '2014-06-07 07.23.08.jpg', 100, '0000-00-00 00:00:00', 20, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
                       `id` int(11) NOT NULL,
                       `date_registration` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
                       `email` char(128) NOT NULL,
                       `name` char(128) NOT NULL,
                       `password` char(64) NOT NULL,
                       `avatar` char(255) DEFAULT NULL,
                       `contact` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `date_registration`, `email`, `name`, `password`, `avatar`, `contact`) VALUES
(7, '2019-05-12 21:00:00', 'coolalexnov@gmail.com', 'Alex Novikov', '$2y$10$46Do2fH41dOEXN8XDwUkOutXtbjxGSp3cnI2KKxgTPXjFMsO3zmq2', 'avatar.jpg', '+375441111111');

-- --------------------------------------------------------

--
-- Структура таблицы `user_staf`
--

CREATE TABLE `user_staf` (
                           `id` int(11) NOT NULL,
                           `staf_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
                           `amount` int(10) NOT NULL,
                           `user_id` int(11) DEFAULT NULL,
                           `lot_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_staf`
--

INSERT INTO `user_staf` (`id`, `staf_date`, `amount`, `user_id`, `lot_id`) VALUES
(10, '2019-05-13 11:30:18', 24000, 7, 7);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cathegory`
--
ALTER TABLE `cathegory`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `code` (`code`),
  ADD KEY `c_name` (`name`);

--
-- Индексы таблицы `lots`
--
ALTER TABLE `lots`
  ADD PRIMARY KEY (`id`),
  ADD KEY `l_title` (`title`);
ALTER TABLE `lots` ADD FULLTEXT KEY `lot_search` (`title`,`description`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `u_name` (`name`);

--
-- Индексы таблицы `user_staf`
--
ALTER TABLE `user_staf`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cathegory`
--
ALTER TABLE `cathegory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `lots`
--
ALTER TABLE `lots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `user_staf`
--
ALTER TABLE `user_staf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- База данных: `technomart`
--
CREATE DATABASE IF NOT EXISTS `technomart` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `technomart`;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
                            `id` int(11) NOT NULL,
                            `name` text NOT NULL,
                            `description` text NOT NULL,
                            `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `code`) VALUES
(1, 'Материалы', 'Строительные материалы', 'mtls'),
(3, 'Инструмент', 'Строительный  инструмент', 'inst'),
(5, 'Техника', 'Строительная техника', 'tech'),
(6, 'АВТОТОВАРЫ', 'Автомобильные товары', 'avto');

-- --------------------------------------------------------

--
-- Структура таблицы `order_list`
--

CREATE TABLE `order_list` (
                            `id` int(11) NOT NULL,
                            `product_id` int(11) NOT NULL,
                            `user_id` int(11) NOT NULL,
                            `count` int(11) NOT NULL,
                            `cost` float NOT NULL,
                            `create_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
                          `id` int(11) NOT NULL,
                          `name` text NOT NULL,
                          `description` text NOT NULL,
                          `price` float NOT NULL,
                          `category_id` int(11) NOT NULL,
                          `create_date` date NOT NULL,
                          `update_date` date NOT NULL,
                          `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `category_id`, `create_date`, `update_date`, `image`) VALUES
(1, 'ШУРУПОВЕРТ АККУМУЛЯТОРНЫЙ BOSCH GSR 12V-15 КАРТОН', '', 0, 0, '0000-00-00', '2019-05-12', 'https://ksk.by/image/cache/data/product/000087868_p_l-250x250.jpg'),
(3, 'ДРЕЛЬ УДАРНАЯ BOSCH GSB 13 RE (ПАТРОН/КЛЮЧ)', 'ДРЕЛЬ УДАРНАЯ BOSCH GSB 13 RE (ПАТРОН/КЛЮЧ)\r\nХарактеристики:\r\nМощность: 600 Вт\r\nВыходная мощность: 301 Вт\r\nКрутящий момент: 1.8 нм\r\nСкорость вращения: 0 - 2.800 об/мин\r\nЧастота ударов: 44.800 уд/мин\r\nВес: 1.8 кг\r\nОтверстия в бетоне: 13 мм\r\nОтверстия в стали: 10 мм\r\nОтверстия в кирпиче: 15 мм\r\nОтверстия в древесине: 25 мм\r\nОписание:\r\nОчень компактная: размером с перчатку и весит всего 1,6 кг\r\nРукоятка с мягкой накладкой для надёжного хвата\r\nНадежный двухкулачковый быстрозажимной металлический сверлильный патрон для быстрой смены рабочего инструмента\r\nЭлектроника обеспечивает точное начало сверления\r\nВыбор числа оборотов с помощью регулировочного колесика\r\nРеверс', 143, 3, '0000-00-00', '0000-00-00', 'https://ksk.by/image/cache/data/product/000082501_p_l-250x250.jpg'),
(4, 'ПЫЛЕСОС СУХОЙ И ВЛАЖНОЙ УБОРКИ КЕРХЕР WD 3 P', 'Хозяйственный пылесос Karcher MV 3 P оснащен 17 литровым контейнером и розеткой для электроинструмента с автоматичсеким включением. Оснащен специальным картридж-фильтром для уборки влажного и сухого мусора без замены фильтра, инновационная насадка для пола и всасывающий шланг - для максимального удобства в работе, для уборки влажного или сухого мусора, мелкого или крупного.\r\n\r\nTехнические характеристики:\r\nПотребляемая мощность (Вт): 1000\r\nДлина кабеля (м): 4\r\nНоминальная ширина аксессуаров (мм): 35\r\nЕмкость контейнера/Объем материала л: 17\r\nНапряжение (В): 220 - 240\r\nВес (кг): 5,7\r\nГабариты (длина х ширина х высота) (мм): 388 x 340 x 502', 324, 3, '0000-00-00', '0000-00-00', 'https://ksk.by/image/cache/data/product/000075093_p_l-250x250.jpg'),
(5, 'КАМЕНЬ ДЕКОРАТИВНЫЙ КОЛОТЫЙ 1 СТОРОНА БЕТОННЫЙ М200 \"ГРАФИТОВЫЙ\" 250X98X65ММ (312ШТ)', 'Высокопрочный бетонный материал – достойная альтернатива распространенным керамическим изделиям. Полнотелые бетонные кирпичи для фундамента обладают низкими показателями влагопоглощения, гарантированной устойчивостью к температурным перепадам, сильным заморозкам, деформационным воздействиям и осадочным процессам.\r\n\r\nКирпич бетонный облицовочный стандартного размера может использоваться в комбинации с различными конструкционными материалами при возведении эстетически привлекательных и практичных строений. Универсальный облицовочный кирпич в Беларуси обеспечивает респектабельное декорирование фасадов и полноценную защиту пенобетонных блоков несущих стен от атмосферных осадков.', 0.78, 1, '0000-00-00', '0000-00-00', 'https://ksk.by/image/cache/data/product/000081529_p_l-250x250.jpg'),
(6, 'КЛЕЕВОЙ СОСТАВ ДЛЯ КЛАДКИ БЛОКОВ \"ТАЙФУН №18\" 25КГ', 'Клеевой состав «Тайфун Мастер» №18 (18М) применяется для кладки стен и перегородок из газосиликатных, пенобетонных, керамзитобетонных блоков и других штучных стеновых материалов. Также применяется для заполнения выбоин, сколов и трещин в кладке.\r\n\r\nПодготовка поверхности: Поверхность материалов для кладки должна быть очищенной от пыли, грязи и других веществ и образований, препятствующих адгезии материала. При производстве работ при отрицательных температурах избавиться от обледенения, если это имеется, путем прогрева поверхности с последующим просушиванием.', 6.25, 1, '0000-00-00', '0000-00-00', 'https://ksk.by/image/cache/data/product/000051146_p_l-250x250.jpg'),
(7, '1', '2', 3, 4, '2019-05-12', '2019-05-12', 'https://ksk.by/image/cache/data/product/000082427_p_l-250x250.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `shoping_cart`
--

CREATE TABLE `shoping_cart` (
                              `id` int(11) NOT NULL,
                              `product_id` int(11) NOT NULL,
                              `user_id` int(11) NOT NULL,
                              `caunt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shoping_cart`
--

INSERT INTO `shoping_cart` (`id`, `product_id`, `user_id`, `caunt`) VALUES
(1, 4, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
                       `id` int(11) NOT NULL,
                       `first_name` text NOT NULL,
                       `last_name` text NOT NULL,
                       `login` text NOT NULL,
                       `create_date` date NOT NULL,
                       `password` text NOT NULL,
                       `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `login`, `create_date`, `password`, `update_date`) VALUES
(1, 'Anna', 'Ivanova', 'AnnaIvanova', '2019-05-09', '123654789', '2019-05-09'),
(2, 'Marya', 'Sydorenco', 'MaryaSy', '2019-05-09', '987jhyui', '2019-05-09');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `shoping_cart`
--
ALTER TABLE `shoping_cart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `order_list`
--
ALTER TABLE `order_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `shoping_cart`
--
ALTER TABLE `shoping_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- База данных: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Структура таблицы `catalogs`
--

CREATE TABLE `catalogs` (
                          `id` int(11) NOT NULL,
                          `name` tinytext NOT NULL,
                          `pos` int(11) NOT NULL,
                          `is_active` tinyint(1) NOT NULL DEFAULT '1',
                          `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `catalogs`
--

INSERT INTO `catalogs` (`id`, `name`, `pos`, `is_active`, `parent_id`) VALUES
(1, 'Материнские платы', 1, 1, 0),
(2, 'Жесткие диски', 2, 1, 0),
(3, 'Видеокарты', 3, 1, 0),
(4, 'Процессоры', 4, 1, 0),
(5, 'ASUS', 1, 1, 1),
(6, 'Biostar', 2, 1, 1),
(7, 'Foxconn', 3, 1, 1),
(8, 'GIGABYTE', 4, 1, 1),
(9, 'Intel', 5, 1, 1),
(10, 'MSI', 6, 1, 1),
(11, 'Supermicro', 7, 1, 1),
(12, 'Hitachi', 1, 1, 2),
(13, 'Samsung', 2, 1, 2),
(14, 'Seagate', 3, 1, 2),
(15, 'Western Digital', 4, 1, 2),
(16, 'ASUS', 1, 1, 3),
(17, 'GIGABYTE', 2, 1, 3),
(18, 'MSI', 3, 1, 3),
(19, 'Sapphire', 4, 1, 3),
(20, 'AMD', 1, 1, 4),
(21, 'Intel', 2, 1, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
                          `id` int(11) NOT NULL,
                          `nickname` tinytext NOT NULL,
                          `content` text NOT NULL,
                          `created_at` datetime NOT NULL,
                          `is_visible` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `nickname`, `content`, `created_at`, `is_visible`) VALUES
(1, 'ere344', 'jyhtgrew', '2019-06-12 21:54:21', 1),
(2, 'ere3uytre44', 'jyhtgtyrewrew', '2019-06-12 21:54:28', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `products_list`
--

CREATE TABLE `products_list` (
                               `id` int(11) NOT NULL,
                               `product_name` varchar(60) NOT NULL,
                               `product_desc` text NOT NULL,
                               `product_code` varchar(60) NOT NULL,
                               `product_image` varchar(60) NOT NULL,
                               `product_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `products_list`
--

INSERT INTO `products_list` (`id`, `product_name`, `product_desc`, `product_code`, `product_image`, `product_price`) VALUES
(1, 'Cool T-shirt', 'Cool T-shirt, Cotton Fabric. Wash in normal water with mild detergent.', 'TSH1', 'tshirt-1.jpg', '8.50'),
(2, 'HBD T-Shirt', 'Cool Happy Birthday printed T-shirt.Crafted from light, breathable cotton.', 'TSH2', 'tshirt-2.jpg', '7.40'),
(3, 'Survival of Fittest', 'Yellow t-shirt makes the perfect addition to your casual wardrobe.', 'TSH3', 'tshirt-3.jpg', '9.50'),
(4, 'Love Hate T-shirt', 'Stylish and trendy, this crew neck short sleeved t-shirt is made with 100% pure cotton.', 'TSH4', 'tshirt-4.jpg', '10.80');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
                       `id` int(11) NOT NULL,
                       `name` tinytext NOT NULL,
                       `pass` tinytext NOT NULL,
                       `email` tinytext NOT NULL,
                       `first_name` tinytext NOT NULL,
                       `last_name` tinytext NOT NULL,
                       `created_at` datetime NOT NULL,
                       `is_block` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `pass`, `email`, `first_name`, `last_name`, `created_at`, `is_block`) VALUES
(1, 'd.koterov', 'pass', 'dmitry.koterov@gmail.com', 'Дмитрий', 'Котеров', '2016-01-04 19:22:41', 0),
(2, 'i.simdyanov', 'pass', 'igorsimdyanov@gmail.com', 'Игорь', 'Симдянов', '2016-01-04 19:40:01', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalogs`
--
ALTER TABLE `catalogs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalogs`
--
ALTER TABLE `catalogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
