-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 12 2019 г., 23:37
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
-- База данных: `technomart`
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
