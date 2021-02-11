-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Лют 11 2021 р., 15:23
-- Версія сервера: 10.4.11-MariaDB
-- Версія PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблиці `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_headline` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_imagePath` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_imageAlignment` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `cat_id` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_headline`, `blog_imagePath`, `blog_imageAlignment`, `blog_content`, `blog_date`, `cat_id`, `usr_id`) VALUES
(126, 'Lorem ipsum dolor sit amet', NULL, 'align left', 'Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\r\n\r\nDonec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.\r\n\r\nNullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.', '2021-02-10 21:46:03', 1, 1),
(127, 'Aliquam lorem ante', NULL, 'align righ', 'Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.\r\n\r\nMaecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.\r\n\r\nDonec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.', '2021-02-10 21:46:43', 1, 1),
(129, 'Um ein triviales Beispiel zu nehmen', NULL, 'align righ', 'Auch gibt es niemanden, der den Schmerz an sich liebt, sucht oder wünscht, nur, weil er Schmerz ist, es sei denn, es kommt zu zufälligen Umständen, in denen Mühen und Schmerz ihm große Freude bereiten können. Um ein triviales Beispiel zu nehmen, wer von uns unterzieht sich je anstrengender körperlicher Betätigung, außer um Vorteile daraus zu ziehen?\r\n\r\nAber wer hat irgend ein Recht, einen Menschen zu tadeln, der die Entscheidung trifft, eine Freude zu genießen, die keine unangenehmen Folgen hat, oder einen, der Schmerz vermeidet, welcher keine daraus resultierende Freude nach sich zieht? Auch gibt es niemanden, der den Schmerz an sich liebt, sucht oder wünscht, nur, weil er Schmerz ist, es sei denn, es kommt zu zufälligen Umständen, in denen Mühen und Schmerz ihm große Freude bereiten können.', '2021-02-10 21:49:45', 1, 1),
(130, 'In den letzten Jahrzehnten', NULL, 'align left', 'Aber sie überwanden sich, umdrängten den Käfig und wollten sich gar nicht fortrühren.\r\n\r\nJemand musste Josef K. verleumdet haben, denn ohne dass er etwas Böses getan hätte, wurde er eines Morgens verhaftet. »Wie ein Hund! « sagte er, es war, als sollte die Scham ihn überleben.\r\n\r\nAls Gregor Samsa eines Morgens aus unruhigen Träumen erwachte, fand er sich in seinem Bett zu einem ungeheueren Ungeziefer verwandelt.\r\n\r\nUnd es war ihnen wie eine Bestätigung ihrer neuen Träume und guten Absichten, als am Ziele ihrer Fahrt die Tochter als erste sich erhob und ihren jungen Körper dehnte.', '2021-02-10 21:51:55', 2, 1),
(131, 'Jemand musste Josef K. ', NULL, 'align righ', 'Wie ein Hund! « sagte er, es war, als sollte die Scham ihn überleben.\r\n\r\nAls Gregor Samsa eines Morgens aus unruhigen Träumen erwachte, fand er sich in seinem Bett zu einem ungeheueren Ungeziefer verwandelt.\r\n\r\nUnd es war ihnen wie eine Bestätigung ihrer neuen Träume und guten Absichten, als am Ziele ihrer Fahrt die Tochter als erste sich erhob und ihren jungen Körper dehnte.\r\n\r\n»Es ist ein eigentümlicher Apparat«, sagte der Offizier zu dem Forschungsreisenden und überblickte mit einem gewissermaßen bewundernden Blick den ihm doch wohlbekannten Apparat.', '2021-02-10 21:52:53', 3, 1),
(132, 'In den letzten Jahrzehnten ist das Interesse ', NULL, 'align righ', 'Hungerkünstlern sehr zurückgegangen. Aber sie überwanden sich, umdrängten den Käfig und wollten sich gar nicht fortrühren. Jemand musste Josef K.\r\n\r\nverleumdet haben, denn ohne dass er etwas Böses getan hätte, wurde er eines Morgens verhaftet. »Wie ein Hund! « sagte er, es war, als sollte die Scham ihn überleben.\r\n\r\nAls Gregor Samsa eines Morgens aus unruhigen Träumen erwachte, fand er sich in seinem Bett zu einem ungeheueren Ungeziefer verwandelt.', '2021-02-10 21:53:37', 4, 1),
(133, 'Und es war ihnen wie eine Bestätigung', NULL, 'align righ', ' ihrer neuen Träume und guten Absichten, als am Ziele ihrer Fahrt die Tochter als erste sich erhob und ihren jungen Körper dehnte.\r\n\r\n»Es ist ein eigentümlicher Apparat«, sagte der Offizier zu dem Forschungsreisenden und überblickte mit einem gewissermaßen bewundernden Blick den ihm doch wohlbekannten Apparat. Sie hätten noch ins Boot springen können, aber der Reisende hob ein schweres, geknotetes Tau vom Boden, drohte ihnen damit und hielt sie dadurch von dem Sprunge ab.\r\n\r\nIn den letzten Jahrzehnten ist das Interesse an Hungerkünstlern sehr zurückgegangen. Aber sie überwanden sich, umdrängten den Käfig und wollten sich gar nicht fortrühren. Jemand musste Josef K. verleumdet haben, denn ohne dass er etwas Böses getan hätte, wurde er eines Morgens verhaftet. »Wie ein Hund! « sagte er, es war, als sollte die Scham ihn überleben.', '2021-02-10 21:54:40', 4, 1),
(134, 'Als Gregor Samsa eines Morgens', NULL, 'align left', 'Sie hätten noch ins Boot springen können, aber der Reisende hob ein schweres, geknotetes Tau vom Boden, drohte ihnen damit und hielt sie dadurch von dem Sprunge ab.\r\n\r\nIn den letzten Jahrzehnten ist das Interesse an Hungerkünstlern sehr zurückgegangen. Aber sie überwanden sich, umdrängten den Käfig und wollten sich gar nicht fortrühren. Jemand musste Josef K.\r\n\r\nverleumdet haben, denn ohne dass er etwas Böses getan hätte, wurde er eines Morgens verhaftet. »Wie ein Hund! « sagte er, es war, als sollte die Scham ihn überleben.\r\n\r\nAls Gregor Samsa eines Morgens aus unruhigen Träumen erwachte, fand er sich in seinem Bett zu einem ungeheueren Ungeziefer verwandelt.', '2021-02-10 21:55:55', 6, 1),
(142, '', NULL, 'align left', '', '2021-02-11 14:20:49', 1, 1),
(143, '', NULL, 'align left', '', '2021-02-11 14:20:49', 1, 1),
(144, '123456', NULL, 'align left', 'vbnmcxy', '2021-02-11 14:21:28', 5, 1),
(145, '123456', NULL, 'align left', 'vbnmcxy', '2021-02-11 14:21:28', 5, 1);

-- --------------------------------------------------------

--
-- Структура таблиці `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Snacks'),
(2, 'Pasta'),
(3, 'Cakes'),
(4, 'Pizza'),
(5, 'Salads'),
(6, 'Bread');

-- --------------------------------------------------------

--
-- Структура таблиці `user`
--

CREATE TABLE `user` (
  `usr_id` int(11) NOT NULL,
  `usr_firstname` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usr_lastname` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usr_email` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usr_city` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usr_password` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `user`
--

INSERT INTO `user` (`usr_id`, `usr_firstname`, `usr_lastname`, `usr_email`, `usr_city`, `usr_password`) VALUES
(1, 'Jack', 'Jackson', 'a@b.c', 'London', '1234');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `usr_id` (`usr_id`);

--
-- Індекси таблиці `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Індекси таблиці `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT для таблиці `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблиці `user`
--
ALTER TABLE `user`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`),
  ADD CONSTRAINT `blog_ibfk_2` FOREIGN KEY (`usr_id`) REFERENCES `user` (`usr_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
