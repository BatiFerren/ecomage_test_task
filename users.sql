-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 27 2021 г., 15:19
-- Версия сервера: 10.4.18-MariaDB
-- Версия PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_encomage_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `create_date`, `update_date`) VALUES
(1, 'First1', 'Last1', 'some@maaaail.ru', '0000-00-00 00:00:00', '2021-03-26 18:54:20'),
(2, 'First2', 'Last2', 'som@mail.ru', '1970-01-01 00:00:00', '2021-03-26 18:46:44'),
(3, 'First3', 'Last3', 'some@mail.ru', '1970-01-01 00:00:00', '2021-03-26 18:31:40'),
(4, 'First4', 'Last4', 'soooooome@mail.ru', '1970-01-01 00:00:00', '2021-03-26 19:19:00'),
(5, 'First1', 'Last1', 'some@mail.ru', '2021-03-27 03:26:07', NULL),
(6, 'First1', 'Last1', 'some@mail.ru', '1970-01-01 00:00:00', NULL),
(7, 'First1', 'Last1', 'some@mail.ru', '1970-01-01 00:00:00', NULL),
(8, 'First8', 'Last8', 'some@email.ru', '0000-00-00 00:00:00', '2021-03-26 18:48:14'),
(9, 'First1', 'Last2', 'some@mail.ru', '0000-00-00 00:00:00', NULL),
(10, 'First10', 'Last1', 'some@mail.ru', '2021-03-26 18:28:42', NULL),
(11, 'First11', 'Last11', 'some@mail.ru', '0000-00-00 00:00:00', '2021-03-26 18:36:47'),
(12, 'First2', 'Last', 'some@mail.ru', '2021-03-25 21:02:09', NULL),
(13, 'First13', 'Last13', 'sme@mail.ru', '2021-03-25 21:03:22', '2021-03-26 18:39:34'),
(14, 'kjbgjlkhg', 'jgkjyu', 'some@mail.ru', '2021-03-26 18:01:45', NULL),
(15, 'пкетр', 'ывтпр', 'sme@mail.ru', '2021-03-27 14:50:19', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
