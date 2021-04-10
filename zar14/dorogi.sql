-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 31 2021 г., 14:32
-- Версия сервера: 5.7.29
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dorogi`
--

-- --------------------------------------------------------

--
-- Структура таблицы `svaz`
--

CREATE TABLE `svaz` (
  `id_them` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `them`
--

CREATE TABLE `them` (
  `id_them` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `them`
--

INSERT INTO `them` (`id_them`, `title`, `text`, `date`) VALUES
(5, 'Прорвало водопровод', 'прорвало водопровод на улице Пушкина', '2021-03-31'),
(6, 'Дорога сломана', 'Сломалась дорога на кольцевой', '2021-03-31'),
(7, 'Бешеные псы', 'Стая диких псов на улице Пушкина', '2021-03-31'),
(9, 'фвпаывпф\\', 'кфуамфупмвуфц', '2021-03-31'),
(10, 'говно', 'говно', '2021-03-31');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `root` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `password`, `root`, `status`) VALUES
(2, 'admin', 'admin@mail.ru', 'admin', 1, 'active');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `svaz`
--
ALTER TABLE `svaz`
  ADD KEY `id_them` (`id_them`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `them`
--
ALTER TABLE `them`
  ADD PRIMARY KEY (`id_them`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `root` (`root`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `them`
--
ALTER TABLE `them`
  MODIFY `id_them` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `svaz`
--
ALTER TABLE `svaz`
  ADD CONSTRAINT `svaz_ibfk_1` FOREIGN KEY (`id_them`) REFERENCES `them` (`id_them`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `svaz_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
