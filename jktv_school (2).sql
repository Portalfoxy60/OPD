-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 25 2024 г., 10:19
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `jktv_school`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Design'),
(2, 'Programming'),
(3, 'HTML & CSS'),
(4, 'News');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` date DEFAULT NULL COMMENT 'Date of Post Publication',
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `image`, `date`, `category_id`) VALUES
(1, 'Post 1', 'Description 1', 'image1.jpg', '2024-03-04', 1),
(2, 'Post 2', 'Description 2', 'image2.jpg', '2024-03-05', 2),
(3, 'Post 3', 'Description 3', 'image3.jpg', '2024-03-06', 1),
(4, 'Post 4', 'Description 4', 'image4.jpg', '2024-03-07', 3),
(5, 'Post 5', 'Description 5', 'image5.jpg', '2024-03-08', 2),
(6, 'Post 6', 'Description 6', 'image6.jpg', '2024-03-09', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `speciality`
--

CREATE TABLE `speciality` (
  `id` int(5) NOT NULL,
  `nameSpec` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Название специальности',
  `duration` int(2) DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `speciality`
--

INSERT INTO `speciality` (`id`, `nameSpec`, `duration`, `image`, `description`) VALUES
(1, 'Kokk', 3, 'https://images.pexels.com/photos/5558238/pexels-photo-5558238.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Commodo sed egestas egestas fringilla phasellus faucibus scelerisque. Scelerisque viverra mauris in aliquam. Egestas congue quisque egestas diam in arcu cursus euismod. Scelerisque purus semper eget duis at tellus at urna. '),
(2, 'Developers', 2, 'https://images.pexels.com/photos/6565875/pexels-photo-6565875.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Commodo sed egestas egestas fringilla phasellus faucibus scelerisque. Scelerisque viverra mauris in aliquam. Egestas congue quisque egestas diam in arcu cursus euismod. Scelerisque purus semper eget duis at tellus at urna. '),
(3, 'Electrician', 1, 'https://images.pexels.com/photos/4656725/pexels-photo-4656725.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Commodo sed egestas egestas fringilla phasellus faucibus scelerisque. Scelerisque viverra mauris in aliquam. Egestas congue quisque egestas diam in arcu cursus euismod. Scelerisque purus semper eget duis at tellus at urna. '),
(4, 'Designer', 4, 'https://images.pexels.com/photos/2505327/pexels-photo-2505327.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 'lorem ajdklasjdlkjasdflkhsdlfhalsdjfhljksadfhlkjsd'),
(5, 'Electrician', 5, 'https://images.pexels.com/photos/19054578/pexels-photo-19054578.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2', 'asfdasdfasfdasdfasdfsdffhsdafjklhalsdfhlkasdjhflkshadflkhasdlkfhlaksdhflkhsdflkhsldkfhladshflkhsdlfkja');

-- --------------------------------------------------------

--
-- Структура таблицы `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateBirth` date DEFAULT NULL,
  `gender` enum('m','n') CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  `mobil` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `specId` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `student`
--

INSERT INTO `student` (`id`, `firstName`, `dateBirth`, `gender`, `address`, `year`, `mobil`, `photo`, `specId`) VALUES
(1, 'Медведев', '2002-02-15', 'm', 'K-J', 2018, '55224477', '1.jpg', 2),
(2, 'Vorobjev', '2000-01-17', 'm', 'K-J', 2018, '58474747', '2.jpg', 2),
(3, 'Galkina', '1995-05-03', 'n', 'Narva', 2019, '53535353', '3.jpg', 1),
(4, 'Futkina', '2002-04-07', 'n', 'Toila', 2019, '54545454', '4.jpg', 1),
(5, 'Sinitsin', '2000-10-15', 'm', 'Jõhvi', 2018, '52525252', '5.jpg', 1),
(6, 'Lisitsin', '1994-01-25', 'm', 'Jõhvi', 2018, '55112233', '6.jpg', 3),
(7, 'Gosha', '2023-02-07', 'n', 'zzz', 2023, '1234567', '100.jpg', 1),
(8, '', '2024-03-06', 'n', 'Tallinna mnt. 34', 2023, '+37256879865', 'pexels-marcos-gabriel-moreira-7949632.jpg', 2),
(9, '', '2024-03-06', 'n', 'Tallinna mnt. 341', 2023, '+37256879865565', '101.jpg', 4),
(10, 'fsd', '2024-03-06', 'm', 'Tallinna mnt. 3454', 45454, '5+656', 'pexels-luke-miller-19711657 (1).jpg', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` enum('admin','moderator','user') CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `username`, `role`) VALUES
(1, 'admin@test.ee', '$2y$12$mjv/GPng4oQFohhkPl8RPucmgRDFVs/UCVP02US.r92ra09kK4d7u', 'Admin ', 'admin'),
(2, 'moderator@test.ee', '$2y$12$mjv/GPng4oQFohhkPl8RPucmgRDFVs/UCVP02US.r92ra09kK4d7u', 'Moderator', 'moderator'),
(3, 'user@test.ee', '$2y$12$mjv/GPng4oQFohhkPl8RPucmgRDFVs/UCVP02US.r92ra09kK4d7u', 'User', 'user');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Индексы таблицы `speciality`
--
ALTER TABLE `speciality`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `specId` (`specId`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `speciality`
--
ALTER TABLE `speciality`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Ограничения внешнего ключа таблицы `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`specId`) REFERENCES `speciality` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
