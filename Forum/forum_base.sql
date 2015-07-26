-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июл 25 2015 г., 23:43
-- Версия сервера: 5.6.25
-- Версия PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `forum_base`
--

-- --------------------------------------------------------

--
-- Структура таблицы `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `Id` int(10) NOT NULL,
  `autor` text NOT NULL,
  `text` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=145 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `thems`
--

CREATE TABLE IF NOT EXISTS `thems` (
  `id` int(11) NOT NULL,
  `category` text NOT NULL,
  `atributes` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `thems`
--
ALTER TABLE `thems`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `forum`
--
ALTER TABLE `forum`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=145;
--
-- AUTO_INCREMENT для таблицы `thems`
--
ALTER TABLE `thems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
