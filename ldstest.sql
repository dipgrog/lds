-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 05 2017 г., 15:06
-- Версия сервера: 10.1.25-MariaDB
-- Версия PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ldstest`
--

-- --------------------------------------------------------

--
-- Структура таблицы `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shortname` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `inn` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kpp` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adress` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `director` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contract` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `master` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opf` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `client`
--

INSERT INTO `client` (`id`, `name`, `shortname`, `inn`, `kpp`, `adress`, `telephone`, `director`, `contract`, `master`, `opf`) VALUES
(1, 'ЛДС', 'ЛДС', '1645007843', '16170001', 'г.Бугульма, ул.Гафиатуллина, д.32', '(85594) 6-25-28', 'Сунгатулин Э.М.', '№123', 'Сорокин Е.Ю.', 'ООО'),
(2, 'Технофонд', 'Технофонд', '1645003327', '164500012', 'г.Бугульма, ул.Гафиатуллина, д.32', '(85594) 6-25-28', 'Лукьянов Е.В.', '№323', 'Сорокин Е.Ю.', 'ООО'),
(4, 'ЛДС плюс', 'ЛДС плюс', '1645003344', '164500232', 'г.Бугульма, ул.Гафиатуллина, д.32', '(85594) 6-25-28', 'Дюкель А.Н.', '№928-1', 'Лысенко П.А.', 'ООО'),
(5, '', 'Иванов П.С.', '', '', '', '917-234-56-78', '', '', '', 'ФЛ'),
(6, 'ИП Семёнов А.Ф.', 'Семёнов А.Ф.', '1645872327', '', 'г.Бугульма, ул.Джалиля, д.18', '927-876-34-46', '', '', '', 'ИП'),
(7, '', 'Петров П.Н.', '', '', '', '919-345-23-54', '', '', '', 'ФЛ'),
(8, 'ИП Смирнов С.В.', 'Смирнов С.В.', '1645982983', '', 'г.Бугульма, ул.Горького, д.9', '937-827-63-84', '', '', '', 'ИП'),
(9, 'Бугульминский механический завод', 'БМЗ', '164538347', '164523001', 'г.Бугульма, ул.Ленина, д.156', '(85594) 7-12-12', 'Директоров Д.И.', '№7364', 'Лысенко П.А.', 'ООО'),
(10, 'Бугульманефтепродукт', 'Бугульманефтепродукт', '1645000491', '', 'г.Бугульма, ул.М.Джалиля, д.70', '(85594) 6-51-59', 'Махмутов Р. И.', '', '', 'ОАО'),
(11, 'Бугульминский комбинат хлебной продукции', 'БКХП №1', '1645014575', '', 'г.Бугульма, ул.14 Павших, д.56', '', 'Журавлев В.А.', '', '', 'ЗАО'),
(12, 'Бугульминский завод железобетонных изделий', 'БЗЖБИ', '1645000036', '', 'г.Бугульма, ул.Строительная, д.1', '(85594) 4-89-00', 'Тарасов В.И.', '', '', 'ОАО'),
(15, 'Макдоналдс', 'Макдоналдс', '', '', 'Гафиатуллина ', '', '', '', '', 'ООО'),
(16, '', 'Фёдоров Ф.Ф.', '', '', '', '962-326-54-96', '', '', '', 'ФЛ'),
(17, 'Воздушные мосты', 'Воздушные мосты', '', '', '', '3453451234', '', '', '', 'ООО');

-- --------------------------------------------------------

--
-- Структура таблицы `depart`
--

CREATE TABLE `depart` (
  `id` int(3) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `depart`
--

INSERT INTO `depart` (`id`, `name`) VALUES
(1, 'Контрольно-кассовой техники'),
(2, 'Копировально-множительной техники'),
(3, 'Теплотехники'),
(4, 'Внедрения новой техники');

-- --------------------------------------------------------

--
-- Структура таблицы `journal`
--

CREATE TABLE `journal` (
  `id` int(11) NOT NULL,
  `client` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `object` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `depart` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `master` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `summa` float DEFAULT NULL,
  `place` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `journal`
--

INSERT INTO `journal` (`id`, `client`, `object`, `reason`, `date`, `depart`, `master`, `summa`, `place`, `status`) VALUES
(1, 'ООО Контрагент', 'Картридж HP 1010', 'Заправка', '2017-09-22', 'КМТ', 'Пеньков И.А.', 250, '8', 'Готов'),
(2, 'ЗАО БКХП №1', 'Картридж SM ML1210', 'Заправка', '2017-09-24', 'КМТ', NULL, NULL, NULL, 'Новый');

-- --------------------------------------------------------

--
-- Структура таблицы `master`
--

CREATE TABLE `master` (
  `id` int(3) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `depart` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `master`
--

INSERT INTO `master` (`id`, `name`, `depart`) VALUES
(1, 'Пеньков И.А.', '2'),
(2, 'Драгун Е.В.', '4'),
(3, 'Сорокин Е.Ю.', '1'),
(4, 'Пеньков П.А.', '1'),
(5, 'Сунгатулин А.Э.', '3'),
(6, 'Бабрышев Р.А.', '3');

-- --------------------------------------------------------

--
-- Структура таблицы `model`
--

CREATE TABLE `model` (
  `id` int(3) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `model`
--

INSERT INTO `model` (`id`, `name`, `type`) VALUES
(1, 'HP CE285A 85A', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `opf`
--

CREATE TABLE `opf` (
  `id` int(3) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `opf`
--

INSERT INTO `opf` (`id`, `name`) VALUES
(6, 'ПАО'),
(7, 'ООО'),
(8, 'ИП'),
(9, 'ФЛ'),
(10, 'ОАО'),
(11, 'ЗАО');

-- --------------------------------------------------------

--
-- Структура таблицы `prof`
--

CREATE TABLE `prof` (
  `id` int(3) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `prof`
--

INSERT INTO `prof` (`id`, `name`) VALUES
(1, 'Техник ККТ'),
(2, 'Техник КМТ'),
(3, 'Техник ВТ'),
(4, 'Техник КИПиА');

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `id` int(3) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'Новый'),
(2, 'Готов'),
(4, 'Ожидает запчасть'),
(5, 'В работе'),
(7, 'Отказ от ремонта'),
(9, 'Ожидает оплаты');

-- --------------------------------------------------------

--
-- Структура таблицы `type`
--

CREATE TABLE `type` (
  `id` int(3) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `type`
--

INSERT INTO `type` (`id`, `name`) VALUES
(1, 'Касса'),
(2, 'Принтер'),
(3, 'Копир'),
(4, 'Картридж'),
(5, 'Компьютер'),
(6, 'Ноутбук'),
(7, 'Сканер');

-- --------------------------------------------------------

--
-- Структура таблицы `units`
--

CREATE TABLE `units` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sn` int(11) NOT NULL,
  `client` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `units`
--

INSERT INTO `units` (`id`, `name`, `sn`, `client`) VALUES
(1, 'Проверка', 123456, 'ЛДС');

-- --------------------------------------------------------

--
-- Структура таблицы `work`
--

CREATE TABLE `work` (
  `id` int(3) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `work`
--

INSERT INTO `work` (`id`, `name`) VALUES
(1, 'Диагностика'),
(2, 'Мелкий ремонт');

-- --------------------------------------------------------

--
-- Структура таблицы `zip`
--

CREATE TABLE `zip` (
  `id` int(3) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `zip`
--

INSERT INTO `zip` (`id`, `name`) VALUES
(1, 'Тонер HP 1010'),
(2, 'Тонер ML 1210'),
(3, 'Тонер HP 1200'),
(4, 'Фотобарабан HP 1005');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `depart`
--
ALTER TABLE `depart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `opf`
--
ALTER TABLE `opf`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `prof`
--
ALTER TABLE `prof`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zip`
--
ALTER TABLE `zip`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `depart`
--
ALTER TABLE `depart`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `journal`
--
ALTER TABLE `journal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `master`
--
ALTER TABLE `master`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `model`
--
ALTER TABLE `model`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `opf`
--
ALTER TABLE `opf`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `prof`
--
ALTER TABLE `prof`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `type`
--
ALTER TABLE `type`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `work`
--
ALTER TABLE `work`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `zip`
--
ALTER TABLE `zip`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
