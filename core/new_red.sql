-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 27 2017 г., 17:57
-- Версия сервера: 5.6.37
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `new_red`
--

-- --------------------------------------------------------

--
-- Структура таблицы `analitics`
--

CREATE TABLE `analitics` (
  `id` int(11) NOT NULL,
  `all_button` varchar(100) DEFAULT NULL,
  `all_seconds` varchar(150) DEFAULT NULL,
  `date_of_income` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `analitics`
--

INSERT INTO `analitics` (`id`, `all_button`, `all_seconds`, `date_of_income`) VALUES
(1, '0', '2163', '0000-00-00'),
(2, '0', '3', '0000-00-00'),
(3, '0', '6', '0000-00-00'),
(4, '0', '9', '0000-00-00'),
(5, '0', '12', '0000-00-00'),
(6, '0', '15', '0000-00-00'),
(7, '0', '18', '0000-00-00'),
(8, '0', '21', '0000-00-00'),
(9, '0', '24', '0000-00-00'),
(10, '0', '27', '0000-00-00'),
(11, '0', '175', '0000-00-00'),
(12, '0', '180', '0000-00-00'),
(13, '0', '185', '0000-00-00'),
(14, '0', '190', '0000-00-00'),
(15, '0', '195', '0000-00-00'),
(16, '0', '200', '0000-00-00'),
(17, '0', '205', '0000-00-00'),
(18, '0', '210', '0000-00-00'),
(19, '0', '215', '0000-00-00'),
(20, '0', '220', '0000-00-00'),
(635, '0', '225', '0000-00-00'),
(636, '0', '230', '0000-00-00');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` varchar(55) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `amount` varchar(80) DEFAULT NULL,
  `date_of_income` date DEFAULT NULL,
  `about` varchar(500) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `type`, `amount`, `date_of_income`, `about`, `price`) VALUES
(0, 'IPhone 6', '64GB+S', '60', '2017-12-19', 'I6. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2222'),
(1, 'IPhone 5', '64GB+S', '55', '2017-12-19', 'I5. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1111'),
(2, 'IPhone 4', '64GB+S', '48', '2017-12-19', 'I4. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1000'),
(3, 'IPhone 3', '64GB+S', '36', '2017-12-19', 'I3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '3000'),
(4, 'IPhone 2', '64GB+S', '28', '2017-12-19', 'I2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '3333'),
(5, 'IPhone 1', '64GB+S', '19', '2017-12-19', 'I1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '4000');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name` varchar(55) DEFAULT NULL,
  `value` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`) VALUES
(1, 'Facebook', 'https://www.facebook.com/ivan.nosiljevets.5'),
(2, 'Instagram', 'https://www.instagram.com'),
(3, 'mobile', '0666-11-33-68'),
(4, 'mobile2', '0650-77-88-99');

-- --------------------------------------------------------

--
-- Структура таблицы `subs`
--

CREATE TABLE `subs` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL DEFAULT '',
  `date_of_income` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `subs`
--

INSERT INTO `subs` (`id`, `email`, `date_of_income`) VALUES
(1, 'first@mail.ua', NULL),
(2, 'nosiljevets@gmail.com', NULL),
(3, 'Bdsff@mail.com', NULL),
(4, 'new2@mail.ru', '2017-12-25'),
(5, 'jhvbujrgb@mail.com', '2017-12-26'),
(6, 'jhvbujgb@mail.com', '2017-12-26'),
(7, 'jhvbub@mail.com', '2017-12-26'),
(8, 'dferg@mail.com', '2017-12-26');

-- --------------------------------------------------------

--
-- Структура таблицы `zakaz`
--

CREATE TABLE `zakaz` (
  `id` int(11) NOT NULL,
  `goods_id` int(11) NOT NULL,
  `dates` date DEFAULT NULL,
  `price` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `zakaz`
--

INSERT INTO `zakaz` (`id`, `goods_id`, `dates`, `price`) VALUES
(0, 0, '2023-09-20', '200$');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `analitics`
--
ALTER TABLE `analitics`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subs`
--
ALTER TABLE `subs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Индексы таблицы `zakaz`
--
ALTER TABLE `zakaz`
  ADD PRIMARY KEY (`id`),
  ADD KEY `goods_id` (`goods_id`);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `zakaz`
--
ALTER TABLE `zakaz`
  ADD CONSTRAINT `zakaz_ibfk_2` FOREIGN KEY (`goods_id`) REFERENCES `goods` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
