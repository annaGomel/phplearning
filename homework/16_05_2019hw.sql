-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 02 2019 г., 00:03
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
