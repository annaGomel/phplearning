-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 16 2019 г., 14:58
-- Версия сервера: 5.7.23
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yaticave_488893`
--

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
(12, '2019-05-07 21:00:00', 'Маска Oakley Canopy', 'Donec vel laoreet nibh, quis viverra sem. In hac habitasse platea dictumst. Maecenas ac urna tellus. Aenean diam metus, rutrum et dignissim quis, pharetra non lacus. Aenean a leo neque. Pellentesque eros metus, cursus id placerat vel, interdum sed libero. Nunc tincidunt porta metus, quis tristique ex. Nulla feugiat et lectus vel dignissim. Vestibulum rutrum nulla laoreet urna pulvinar, nec hendrerit eros iaculis.', 'lot-6.jpg', 5400, '2019-05-09 21:00:00', 1500, 2, 1, 6);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
