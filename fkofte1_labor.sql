-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Авг 25 2017 г., 22:38
-- Версия сервера: 10.0.31-MariaDB-cll-lve
-- Версия PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fkofte1_labor`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Структура таблицы `categoryEvent`
--

CREATE TABLE `categoryEvent` (
  `id_categoryEvent` int(11) NOT NULL,
  `categoryEventName` varchar(55) NOT NULL,
  `id_src` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categoryEvent`
--

INSERT INTO `categoryEvent` (`id_categoryEvent`, `categoryEventName`, `id_src`) VALUES
(1, 'Программирование', 1),
(2, 'Рисование', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `categoryStock`
--

CREATE TABLE `categoryStock` (
  `id_categoryStock` int(11) NOT NULL,
  `categoryStockName` varchar(55) NOT NULL,
  `id_src` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categoryStock`
--

INSERT INTO `categoryStock` (`id_categoryStock`, `categoryStockName`, `id_src`) VALUES
(1, 'Кино', 4),
(2, 'Игры', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `city`
--

CREATE TABLE `city` (
  `id_city` int(11) NOT NULL,
  `cityName` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `city`
--

INSERT INTO `city` (`id_city`, `cityName`) VALUES
(1, 'Москва'),
(2, 'Санкт-Петербург'),
(3, 'Ростов-на-Дону');

-- --------------------------------------------------------

--
-- Структура таблицы `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `description1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `data`
--

INSERT INTO `data` (`id`, `description`, `description1`) VALUES
(1, 'hello1', 'http://avotarov.net/picture/avatarki/23/kartinki/25-3.jpg'),
(2, 'hello2', 'http://avotarov.net/picture/avatarki/23/kartinki/25-3.jpg'),
(3, 'hello3', 'http://avotarov.net/picture/avatarki/23/kartinki/25-3.jpg'),
(4, 'hello4', 'http://avotarov.net/picture/avatarki/23/kartinki/25-3.jpg'),
(5, 'hello5', 'http://avotarov.net/picture/avatarki/23/kartinki/25-3.jpg'),
(6, 'hello6', 'http://avotarov.net/picture/avatarki/23/kartinki/25-3.jpg'),
(7, 'hello7', 'http://avotarov.net/picture/avatarki/23/kartinki/25-3.jpg'),
(8, 'hello8', 'http://avotarov.net/picture/avatarki/23/kartinki/25-3.jpg'),
(9, 'hello9', 'http://avotarov.net/picture/avatarki/23/kartinki/25-3.jpg'),
(10, 'hello10', 'http://avotarov.net/picture/avatarki/23/kartinki/25-3.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `department`
--

CREATE TABLE `department` (
  `id_department` int(11) NOT NULL,
  `departmentName` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `department`
--

INSERT INTO `department` (`id_department`, `departmentName`) VALUES
(1, 'Учебный отдел'),
(2, 'Студпрофком'),
(3, 'Новостник');

-- --------------------------------------------------------

--
-- Структура таблицы `dialog`
--

CREATE TABLE `dialog` (
  `id` int(11) NOT NULL,
  `public` int(11) NOT NULL,
  `hash` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dialog`
--

INSERT INTO `dialog` (`id`, `public`, `hash`, `userid`, `title`) VALUES
(1, 1496875968, 'Tpb2wcRg', 4, ''),
(2, 1496876178, 'vMZYKCTd', 4, ''),
(3, 1497036464, 'Vd3TxbJz', 11, ''),
(4, 1497037478, 'HNm9dPfJ', 11, ''),
(5, 1497037516, 'nPJbyH2M', 11, ''),
(6, 1497051463, '2npMqXZh', 11, ''),
(7, 1497058748, 'pgqzkRVY', 11, ''),
(8, 1497134642, 'xVnpJkft', 11, ''),
(9, 1497479234, 'rGCx92qX', 4, 'Беседа123');

-- --------------------------------------------------------

--
-- Структура таблицы `discipline`
--

CREATE TABLE `discipline` (
  `id_discipline` int(11) NOT NULL,
  `disciplineName` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `discipline`
--

INSERT INTO `discipline` (`id_discipline`, `disciplineName`) VALUES
(1, 'Мобильная разработка'),
(2, 'Технология разработки программного обеспечения');

-- --------------------------------------------------------

--
-- Структура таблицы `division`
--

CREATE TABLE `division` (
  `id_division` int(11) NOT NULL,
  `divisionName` varchar(55) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `division`
--

INSERT INTO `division` (`id_division`, `divisionName`, `id_user`) VALUES
(1, 'Информационные технологии', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `establishment`
--

CREATE TABLE `establishment` (
  `id_establishment` int(11) NOT NULL,
  `establishmentName` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `establishment`
--

INSERT INTO `establishment` (`id_establishment`, `establishmentName`) VALUES
(1, 'Колледж'),
(2, 'ВУЗ');

-- --------------------------------------------------------

--
-- Структура таблицы `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `eventTitle` varchar(55) NOT NULL,
  `eventText` varchar(535) NOT NULL,
  `eventPoints` int(11) NOT NULL,
  `eventStart` int(11) DEFAULT NULL,
  `eventStop` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `eventDate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `event`
--

INSERT INTO `event` (`id_event`, `eventTitle`, `eventText`, `eventPoints`, `eventStart`, `eventStop`, `id_user`, `eventDate`) VALUES
(1, 'Олимпиада по программированию', 'Необходимы знания по языкам:', 45, 1476733501, 1477353600, 3, 1476733501),
(4, 'Рисунок на тему \"Весна\"', 'Подать стул в 350 ауд.', 30, 1476921600, 1477353600, 4, 1476733501),
(31, 'Литературный вечер', '2', 15, 1477180800, 1477353600, 11, 1476733501),
(41, 'Хакатон', 'dsfdvd', 25, NULL, NULL, 2, 1476733501),
(42, 'Купить чай', 'Купить чай в пирамидках', 45, NULL, NULL, 11, 1476733501),
(50, 'Студенты и преподаватели', 'Сделать возможность размещения заданий для преподавателей Сделать возможность размещения заданий для преподавателей Сделать возможность размещения заданий для преподавателей Сделать возможность размещения заданий для преподавателей Сделать возможность размещения заданий для преподавателей Сделать возможность размещения заданий для преподавателей Сделать возможность размещения заданий для преподавателей ', 100, NULL, NULL, 4, 1476733501);

-- --------------------------------------------------------

--
-- Структура таблицы `eventCandidate`
--

CREATE TABLE `eventCandidate` (
  `id_taskCandidate` bigint(20) NOT NULL,
  `taskCandidateText` text NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `task_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `eventCandidate`
--

INSERT INTO `eventCandidate` (`id_taskCandidate`, `taskCandidateText`, `user_id`, `task_id`) VALUES
(1, 'Я ГОТОВ!', 4, 42),
(2, '123123123', 4, 42),
(3, '50', 4, 50),
(4, 'sdfsdf', 11, 50);

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE `groups` (
  `id_group` int(11) NOT NULL,
  `id_specialty` int(11) NOT NULL,
  `groupNumber` int(11) NOT NULL,
  `groupStart` int(11) NOT NULL,
  `groupDuration` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`id_group`, `id_specialty`, `groupNumber`, `groupStart`, `groupDuration`, `id_user`) VALUES
(1, 2, 1, 2014, 4, 0),
(2, 2, 2, 2014, 4, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `institution`
--

CREATE TABLE `institution` (
  `id_institution` int(11) NOT NULL,
  `institutionName` varchar(55) NOT NULL,
  `id_establishment` int(11) NOT NULL,
  `id_city` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `institution`
--

INSERT INTO `institution` (`id_institution`, `institutionName`, `id_establishment`, `id_city`) VALUES
(1, 'РКСИ', 1, 3),
(2, 'РГСУ', 2, 3),
(3, 'ЮФУ', 0, 0),
(4, 'ДГСУ', 5, 3),
(5, 'kjk', 3, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `public` int(11) NOT NULL,
  `senderid` int(11) NOT NULL,
  `dialogid` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `message`
--

INSERT INTO `message` (`id`, `message`, `public`, `senderid`, `dialogid`, `status`) VALUES
(1, 'Привет!', 1496875968, 4, 1, 0),
(2, 'Привет!', 1496876122, 4, 1, 0),
(3, 'Привет!', 1496876123, 4, 1, 0),
(4, 'Привет!', 1496876124, 4, 1, 0),
(5, 'Привет!', 1496876141, 4, 1, 0),
(6, 'Привет!', 1496876142, 4, 1, 0),
(7, 'Привет!', 1496876158, 4, 1, 0),
(8, 'Привет!', 1496876160, 4, 1, 0),
(9, 'Привет!', 1496876168, 4, 1, 0),
(10, 'Привет!', 1496876168, 4, 1, 0),
(11, 'Привет!', 1496876169, 4, 1, 0),
(12, 'Привет!', 1496876170, 4, 1, 0),
(13, 'Привет!', 1496876170, 4, 1, 0),
(14, 'Привет!', 1496876178, 4, 2, 0),
(15, 'Привет!', 1496876185, 4, 2, 0),
(16, 'Привет!', 1496876187, 4, 2, 0),
(17, 'Привет!', 1496876341, 4, 2, 0),
(18, 'Привет!', 1496876394, 4, 2, 0),
(19, 'sdfds', 1497036464, 11, 3, 0),
(20, 'dffd', 1497037361, 11, 3, 0),
(21, 'dfd', 1497037461, 11, 3, 0),
(22, 'sdsd', 1497037478, 11, 4, 0),
(23, 'sds', 1497037498, 11, 3, 0),
(24, 'dsds', 1497037516, 11, 5, 0),
(25, 'Дратути', 1497037551, 11, 1, 0),
(26, 'хэллоу', 1497037579, 11, 1, 0),
(27, 'fgfdg', 1497040336, 11, 3, 0),
(28, 'fgfg', 1497040401, 11, 3, 0),
(29, 'fdf', 1497040541, 11, 3, 0),
(30, 'вап', 1497040786, 11, 3, 0),
(31, 'dsfdsf', 1497051463, 11, 6, 0),
(32, 'gdf', 1497052227, 11, 5, 0),
(33, 'jnl', 1497052388, 11, 5, 0),
(34, 'dfdf', 1497054558, 11, 5, 0),
(35, 'привет', 1497054570, 11, 5, 0),
(36, 'выаыв', 1497054637, 11, 5, 0),
(37, 'dfg', 1497056264, 11, 5, 0),
(38, 'vcf', 1497056314, 11, 5, 0),
(39, 'dfgf', 1497057203, 11, 5, 0),
(40, 'dgd', 1497058098, 11, 5, 0),
(41, 'dsfdsf', 1497058748, 11, 7, 0),
(42, 'bbfgf', 1497060676, 11, 7, 0),
(43, 'werwr', 1497134642, 11, 8, 0),
(44, 'essdfdsf', 1497144948, 11, 8, 0),
(45, 'dsfsdf', 1497144989, 11, 8, 0),
(46, 'dfgdf', 1497145092, 11, 8, 0),
(47, 'Привет всем в этом чатике!', 1497479234, 4, 9, 0),
(48, 'fdsfs', 1497486866, 11, 8, 0),
(49, 'авыав', 1497486943, 11, 8, 0),
(50, 'ва', 1497487053, 11, 8, 0),
(51, 'ва', 1497487058, 11, 8, 0),
(52, 'Привет!', 1497487107, 232395, 9, 0),
(53, 'вапвап', 1497487454, 11, 8, 0),
(54, 'аывава', 1497487500, 11, 8, 0),
(55, 'привет)', 1497487619, 11, 9, 0),
(56, 'привет)', 1497487620, 11, 9, 0),
(57, 'привет)', 1497487622, 11, 9, 0),
(58, 'Привет!!!!!!!!', 1497487661, 232395, 9, 0),
(59, 'dfgf', 1497487717, 11, 9, 0),
(60, 'd12342556', 1497490224, 4, 9, 0),
(61, 'fgfg', 1497492349, 11, 7, 0),
(62, 'fdf', 1497492448, 11, 6, 0),
(63, 'dfgdfg', 1497493022, 11, 7, 0),
(64, 'gdfg', 1497493186, 11, 7, 0),
(65, 'вапа', 1497497244, 11, 8, 0),
(66, 'вапа', 1497497251, 11, 8, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `message_to_user`
--

CREATE TABLE `message_to_user` (
  `id` int(11) NOT NULL,
  `messageid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `message_to_user`
--

INSERT INTO `message_to_user` (`id`, `messageid`, `userid`, `status`) VALUES
(1, 1, 11, 1),
(2, 1, 4, 1),
(3, 2, 11, 1),
(4, 2, 4, 1),
(5, 3, 11, 1),
(6, 3, 4, 1),
(7, 4, 11, 1),
(8, 4, 4, 1),
(9, 5, 11, 1),
(10, 5, 4, 1),
(11, 6, 11, 1),
(12, 6, 4, 1),
(13, 7, 11, 1),
(14, 7, 4, 1),
(15, 8, 11, 1),
(16, 8, 4, 1),
(17, 9, 11, 1),
(18, 9, 4, 1),
(19, 10, 11, 1),
(20, 10, 4, 1),
(21, 11, 11, 1),
(22, 11, 4, 1),
(23, 12, 11, 1),
(24, 12, 4, 1),
(25, 13, 11, 1),
(26, 13, 4, 1),
(27, 14, 10, 0),
(28, 14, 4, 1),
(29, 15, 10, 0),
(30, 15, 4, 1),
(31, 16, 10, 0),
(32, 16, 4, 1),
(33, 17, 10, 0),
(34, 17, 4, 1),
(35, 18, 10, 0),
(36, 18, 4, 1),
(37, 19, 232372, 0),
(38, 19, 11, 1),
(39, 20, 232372, 0),
(40, 20, 11, 1),
(41, 21, 232372, 0),
(42, 21, 11, 1),
(43, 22, 56, 0),
(44, 22, 11, 1),
(45, 23, 232372, 0),
(46, 23, 11, 1),
(47, 24, 1, 0),
(48, 24, 11, 1),
(49, 25, 11, 1),
(50, 25, 4, 1),
(51, 26, 11, 1),
(52, 26, 4, 1),
(53, 27, 232372, 0),
(54, 27, 11, 1),
(55, 28, 232372, 0),
(56, 28, 11, 1),
(57, 29, 232372, 0),
(58, 29, 11, 1),
(59, 30, 232372, 0),
(60, 30, 11, 1),
(61, 31, 57, 0),
(62, 31, 11, 1),
(63, 32, 1, 0),
(64, 32, 11, 1),
(65, 33, 1, 0),
(66, 33, 11, 1),
(67, 34, 1, 0),
(68, 34, 11, 1),
(69, 35, 1, 0),
(70, 35, 11, 1),
(71, 36, 1, 0),
(72, 36, 11, 1),
(73, 37, 1, 0),
(74, 37, 11, 1),
(75, 38, 1, 0),
(76, 38, 11, 1),
(77, 39, 1, 0),
(78, 39, 11, 1),
(79, 40, 1, 0),
(80, 40, 11, 1),
(81, 41, 58, 0),
(82, 41, 11, 1),
(83, 42, 58, 0),
(84, 42, 11, 1),
(85, 43, 232373, 0),
(86, 43, 11, 1),
(87, 44, 232373, 0),
(88, 44, 11, 1),
(89, 45, 232373, 0),
(90, 45, 11, 1),
(91, 46, 232373, 0),
(92, 46, 11, 1),
(93, 47, 1, 0),
(94, 47, 4, 1),
(95, 48, 232373, 0),
(96, 48, 11, 1),
(97, 49, 232373, 0),
(98, 49, 11, 1),
(99, 50, 232373, 0),
(100, 50, 11, 1),
(101, 51, 232373, 0),
(102, 51, 11, 1),
(103, 52, 1, 0),
(104, 52, 4, 1),
(105, 52, 11, 1),
(106, 52, 232395, 1),
(107, 53, 232373, 0),
(108, 53, 11, 1),
(109, 54, 232373, 0),
(110, 54, 11, 1),
(111, 55, 1, 0),
(112, 55, 4, 1),
(113, 55, 11, 1),
(114, 55, 232395, 1),
(115, 56, 1, 0),
(116, 56, 4, 1),
(117, 56, 11, 1),
(118, 56, 232395, 1),
(119, 57, 1, 0),
(120, 57, 4, 1),
(121, 57, 11, 1),
(122, 57, 232395, 1),
(123, 58, 1, 0),
(124, 58, 4, 1),
(125, 58, 11, 1),
(126, 58, 232395, 1),
(127, 59, 1, 0),
(128, 59, 4, 1),
(129, 59, 11, 1),
(130, 59, 232395, 1),
(131, 60, 1, 0),
(132, 60, 4, 1),
(133, 60, 11, 1),
(134, 60, 232395, 0),
(135, 61, 58, 0),
(136, 61, 11, 1),
(137, 62, 57, 0),
(138, 62, 11, 0),
(139, 63, 58, 0),
(140, 63, 11, 1),
(141, 64, 58, 0),
(142, 64, 11, 1),
(143, 65, 232373, 0),
(144, 65, 11, 1),
(145, 66, 232373, 0),
(146, 66, 11, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `msgGroup`
--

CREATE TABLE `msgGroup` (
  `id_msgGroup` int(11) NOT NULL,
  `id_user1` int(11) NOT NULL,
  `id_user2` int(11) NOT NULL,
  `id_user3` int(11) NOT NULL,
  `id_user4` int(11) NOT NULL,
  `id_user5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `msgGroup`
--

INSERT INTO `msgGroup` (`id_msgGroup`, `id_user1`, `id_user2`, `id_user3`, `id_user4`, `id_user5`) VALUES
(1, 1, 11, 4, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `newsTitle` varchar(111) NOT NULL,
  `newsText` varchar(535) NOT NULL,
  `newsDate` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `photoUrl` text NOT NULL,
  `photoType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id_news`, `newsTitle`, `newsText`, `newsDate`, `id_user`, `photoUrl`, `photoType`) VALUES
(1, 'dsdesdsdesdsdesdfewfewdfewfewdfewfewdsdesdfewfewdsdesdfewfewdsdesdfewfewdsdesdfewfew', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1476294665, 4, '', ''),
(4, 'Любимые', 'Студенты, преподаватели и сотрудники нашего колледжа приняли участие в торжественном открытии монумента «Связистам Дона».', 1476312215, 11, '', ''),
(20, 'dfsfdf', 'sdfsdf', 1495910326, 0, '', ''),
(21, 'У НАС ЧП! СБЕЖАЛ АГРЕССИВНЫЙ СТУДЕНТ!', 'Как сообщают очевидцы, с шараги сбежал опасный студент по кличке &quot;беззубый&quot;. В колледже введен военный режим!', 1496177451, 0, '', ''),
(22, 'йцу', 'йцу', 1496186253, 4, '', ''),
(23, 'Заголовок', 'Текст', 1496311973, 11, '', ''),
(24, 'qwaedtfgyjhkl', 'edtrfyuhj', 1496406150, 4, '', ''),
(25, 'ывапролпавыфвапролрпавыфвапролопавыфвапролорпавыфывпролорпав', 'ывапролпавыфвапролрпавыфвапролопавыфвапролорпавыфывпролорпав', 1496747209, 11, '', ''),
(26, '', 'ывапролпавыфвапролрпавыфв ывапролпавыфвапролрпавыфв', 1496747247, 11, '', ''),
(27, '', 'ывапролпавыфвапролрпавыфвывапролпавыфвапролрпавыфв ывапролпавыфвапролрпавыфв', 1496747257, 11, '', ''),
(28, 'fsd', 'sdfs', 1496842652, 11, '', ''),
(29, 'dwdwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww', 'wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww', 1496842708, 11, '', ''),
(30, 'wwwwwwwwwwwwwwwwwwwwwwwwwwwwww', 'wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww', 1496842761, 11, '', ''),
(31, 'wwwwwwwwwwwwwwwwwwww', 'dsad', 1496842789, 11, '', ''),
(32, 'wwwwwwwwwwwwwwwwwwww', 'dsad', 1496842789, 11, '', ''),
(33, 'qwe qweqwrewwe qwree', 'wqe  wewqe wqwwe wer wrewe rewerwer werer we wrwer qwe qwr rwerw qwew', 1496843018, 11, '', ''),
(34, 'eerr ete wetre ew ewrter w wetw rwe r tert werwe w', 'wqe  wewqe wqwwe wer wrewe rewerwer werer we wrwer qwe qwr rwerw qwew', 1496843043, 11, '', ''),
(35, 'eerr ete wetre ew ewrter w wetw rwe r tert werwe wfsdf sfs df werwe rf', 'wqe  wewqe wqwwe wer wrewe rewerwer werer we wrwer qwe qwr rwerw qwew', 1496843187, 11, '', ''),
(36, 'eerr ete wetre ew ewrter w wetw rwe r tert werwe wfsdf sfs df werwe rfsfse erwer ewr werrrrrrrewr we', 'wqe  wewqe wqwwe wer wrewe rewerwer werer we wrwer qwe qwr rwerw qwew', 1496843215, 11, '', ''),
(37, 'eerr ete wetre ew ewrter w wetw rwe r tert werwe wfsdf sfs df werwe rfsfse erwer', 'wqe  wewqe wqwwe wer wrewe rewerwer werer we wrwer qwe qwr rwerw qwew', 1496843254, 11, '', ''),
(38, 'eerr ete wetre ew ewrter w wetw rwe r tert werwe wfsdf sfs df werwe rfsfse erwer', 'wqe  wewqe wqwwe wer wrewe rewerwer werer we wrwer qwe qwr rwerw qwew', 1496892963, 11, '', ''),
(39, 'wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww', 'wqe  wewqe wqwwe wer wrewe rewerwer werer we wrwer qwe qwr rwerw qwew', 1496892992, 11, '', ''),
(40, 'eerr ete wetre ew ewrter w wetw rwe r tert werwe wfsdf sfs df werwe rfsfseerwer', 'wqe  wewqe wqwwe wer wrewe rewerwer werer we wrwer qwe qwr rwerw qwew', 1496893042, 11, '', ''),
(41, 'eerr ete wetre ew ewrter w wetw rwe r tert werwe wfsdf sfs df werwe rfsfse erwer', ';ko;', 1496893053, 11, '', ''),
(42, 'fsdf', 'dsfdf', 1496937630, 11, '', ''),
(43, 'Йви', 'Моо', 1496956673, 11, '', ''),
(44, 'смсчм', 'чсмчс', 1497009558, 11, '', ''),
(46, 'dfgdfg', 'dfgdfg', 1497485966, 232395, '', ''),
(47, '\'&gt;alert(0);', '\'&gt;alert(0);', 1497486011, 232395, '', ''),
(48, '&quot;&gt;alert(0);', '&quot;&gt;alert(0);', 1497486026, 232395, '', ''),
(49, 'bvb', 'vbvc', 1497486108, 11, '', ''),
(50, 'vdfv', 'dfvdf', 1497495543, 11, '', ''),
(51, 'ав', 'вапв', 1497496973, 11, '', ''),
(52, 'вав', 'вав', 1497498305, 11, '', ''),
(53, 'alert(&quot;ok&quot;)', 'alert(&quot;ok&quot;)', 1497513107, 232403, '', ''),
(54, 'alert(&quot;ok&quot;)', 'alert(&quot;ok&quot;)', 1497513132, 232403, '', ''),
(55, 'alert(&quot;ok&quot;)', 'alert(&quot;ok&quot;)', 1497513133, 232403, '', ''),
(56, 'alert(&quot;ok&quot;)', 'alert(&quot;ok&quot;)', 1497513133, 232403, '', ''),
(57, 'sasa', 'aaa', 1497513138, 232403, '', ''),
(58, 'sasa', 'aaa', 1497513139, 232403, '', ''),
(59, 'sasa', 'aaa', 1497513139, 232403, '', ''),
(60, 'sasa', 'aaa', 1497513139, 232403, '', ''),
(61, 'sasa', 'aaa', 1497513139, 232403, '', ''),
(62, 'sasa', 'aaa', 1497513140, 232403, '', ''),
(63, 'sasa', 'aaa', 1497513140, 232403, '', ''),
(64, 'test', 'test', 1497513283, 232403, '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `position`
--

CREATE TABLE `position` (
  `id_position` int(11) NOT NULL,
  `positionName` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `position`
--

INSERT INTO `position` (`id_position`, `positionName`) VALUES
(1, 'Студент'),
(2, 'Учитель/Преподаватель'),
(3, 'Иные');

-- --------------------------------------------------------

--
-- Структура таблицы `schedule`
--

CREATE TABLE `schedule` (
  `id_schedule` int(11) NOT NULL,
  `id_institution` int(11) NOT NULL,
  `scheduleLink` varchar(535) NOT NULL,
  `scheduleStart` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `schedule`
--

INSERT INTO `schedule` (`id_schedule`, `id_institution`, `scheduleLink`, `scheduleStart`, `id_user`) VALUES
(1, 1, '/rasp/2016-10-19.xlsx', 20161019, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `specialty`
--

CREATE TABLE `specialty` (
  `id_specialty` int(11) NOT NULL,
  `specialtyName` varchar(55) NOT NULL,
  `specialtyFullName` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `specialty`
--

INSERT INTO `specialty` (`id_specialty`, `specialtyName`, `specialtyFullName`) VALUES
(1, 'БД', 'Банковское дело'),
(2, 'ИБ', 'Информационная безопасность'),
(5, 'ПОКС', 'Программирование в КС');

-- --------------------------------------------------------

--
-- Структура таблицы `src`
--

CREATE TABLE `src` (
  `id_src` int(11) NOT NULL,
  `srcLink` varchar(111) NOT NULL,
  `srcFormat` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `src`
--

INSERT INTO `src` (`id_src`, `srcLink`, `srcFormat`) VALUES
(1, '/img/1.jpg', 'JPG'),
(2, '/img/2.jpg', 'jpg'),
(3, '/img/3.jpg', 'jpg'),
(4, '/img/4.jpg', 'jpg'),
(5, '/img/5.jpg', 'jpg'),
(6, '/img/6.jpg', 'jpg'),
(7, '/img/7.jpg', 'jpg'),
(8, '/img/8.jpg', 'jpg'),
(9, '/img/9.jpg', 'jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `stock`
--

CREATE TABLE `stock` (
  `id_stock` int(11) NOT NULL,
  `stockText` varchar(535) NOT NULL,
  `stockStart` int(11) NOT NULL,
  `stockStop` int(11) NOT NULL,
  `id_categoryStock` int(11) NOT NULL,
  `stockDate` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `isFree` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `stock`
--

INSERT INTO `stock` (`id_stock`, `stockText`, `stockStart`, `stockStop`, `id_categoryStock`, `stockDate`, `id_user`, `isFree`) VALUES
(1, '50% скидка на билеты в кино!', 20160913, 20160929, 1, 34534532, 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_institution` int(11) DEFAULT NULL,
  `surName` varchar(255) NOT NULL,
  `firstName` varchar(55) DEFAULT NULL,
  `secondName` varchar(55) DEFAULT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `photoUrl` text,
  `photoType` varchar(255) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '0',
  `group` int(11) DEFAULT NULL,
  `groupNumber` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `id_institution`, `surName`, `firstName`, `secondName`, `email`, `password`, `photoUrl`, `photoType`, `isActive`, `group`, `groupNumber`) VALUES
(1, 1, 'Иванов', 'Илья', 'Иванович', 'q@ya.ru', '76d80224611fc919a5d54f0ff9fba446', '', '', 1, 0, 0),
(2, 1, 'Лозовой', 'Петр', 'Петрович', 'w@ya.ru', '76d80224611fc919a5d54f0ff9fba446', '', '', 0, 0, 0),
(3, 1, 'Приходько', 'Сидор', 'Сидорович', 'e@ya.ru', '76d80224611fc919a5d54f0ff9fba446', '', '', 0, 0, 0),
(4, 1, 'Карпович', 'Антон', 'Сергеевич', 'uzakkk777@ya.ru', '8473149ddf8ea3f34731e2e5e20bcfff', './uploadFiles/topImg.jpg', 'image/jpeg', 1, 1, 2),
(11, 2, 'Вернигорова', 'Екатерина', 'Клубникович', 'fkofte@mail.ru', '76d80224611fc919a5d54f0ff9fba446', './uploadFiles/Screenshot_4.png', 'image/png', 0, 0, 0),
(49, 1, 'Георгиевич', 'Марк', 'Чолак', 'cholak1@yandex.ru', '171997fd66ee838efa7e037e43b751d5', '', '', 0, 0, 0),
(56, NULL, 'Дмитриев', 'Тема', 'Asus', 'qwerty111@gmail.com', '8f036369a5cd26454949e594fb9e0a2d', '', '', 0, 0, 0),
(57, 1, 'Анищенко', 'Костя', 'Skibko', 'skibko2013@yandex.ru', 'bf083d4ab960620b645557217dd59a49', '', '', 0, 0, 0),
(58, NULL, 'Вернигорова', 'Екатерина', 'Sjsjdj', 'lol123@gmail.com', '8f036369a5cd26454949e594fb9e0a2d', '', '', 0, 0, 0),
(232400, NULL, '', NULL, NULL, 'jija@mail.ru', '8f036369a5cd26454949e594fb9e0a2d', NULL, NULL, 0, NULL, NULL),
(232401, NULL, '', NULL, NULL, 'poi@mail.ru', '8f036369a5cd26454949e594fb9e0a2d', NULL, NULL, 0, NULL, NULL),
(232402, NULL, 'Карпович', 'Антон', 'Сергеевич', 'qwerty@ya.ru', 'd8578edf8458ce06fbc5bb76a58c5ca4', NULL, NULL, 1, 2, 1),
(232404, NULL, '', NULL, NULL, 'skynine@hotmail.ru', '789a45b504885c5cdf315b2b3ca97d89', './uploadFiles/mashable-house-silicon-valley-sxsw-20140309-jesse-knish-390277998665-1024x576.jpg', 'image/jpeg', 0, NULL, NULL),
(232405, NULL, '', NULL, NULL, 'test1@mail.ru', '8f036369a5cd26454949e594fb9e0a2d', NULL, NULL, 0, NULL, NULL),
(232406, NULL, '', NULL, NULL, 'myemail@gmail.com', '8f036369a5cd26454949e594fb9e0a2d', NULL, NULL, 0, NULL, NULL),
(232407, NULL, '', NULL, NULL, 'testmail@mail.ru', '8f036369a5cd26454949e594fb9e0a2d', NULL, NULL, 0, NULL, NULL),
(232408, NULL, '', NULL, NULL, 'qwerty@mail.ru', '8f036369a5cd26454949e594fb9e0a2d', NULL, NULL, 0, NULL, NULL),
(232409, NULL, '', NULL, NULL, 'djsnjdn@djjkdn.ru', 'ec47b6530a3f37b7b2a57b23c71c7555', './uploadFiles/mil-otkaz-1.jpg', 'image/jpeg', 0, NULL, NULL),
(232410, NULL, '', NULL, NULL, 'testreg@mail.ru', '8f036369a5cd26454949e594fb9e0a2d', NULL, NULL, 0, NULL, NULL),
(232411, NULL, 'rt', 'rt', 'rt', 't@mail.ru', 'e358efa489f58062f10dd7316b65649e', NULL, NULL, 1, 1, 1),
(232412, NULL, '', NULL, NULL, 'r@test.ru', 'e358efa489f58062f10dd7316b65649e', NULL, NULL, 0, NULL, NULL),
(232413, NULL, '', NULL, NULL, 'dot2masx@gmail.com', 'a055ec3b5715fa0bd6a0e0e7a36a9ebf', NULL, NULL, 0, NULL, NULL),
(232414, NULL, '', NULL, NULL, 'sdsdsd@djhsdjhds.ru', '849f533d83e4e6cd5430c0a250796e99', NULL, NULL, 0, NULL, NULL),
(232415, NULL, 'gfdlgj', 'feledgj', 'lsfdjl', 'kfdsljf@lsfjds.ru', 'c674d1027eb340f3362746da2627227f', NULL, NULL, 1, 1, 2),
(232416, NULL, '', NULL, NULL, 'lolita228@mail.ru', '8f036369a5cd26454949e594fb9e0a2d', NULL, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `userDepartment`
--

CREATE TABLE `userDepartment` (
  `id_userDepartment` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_department` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `userDiscipline`
--

CREATE TABLE `userDiscipline` (
  `id_userDiscipline` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_discipline` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `userEvent`
--

CREATE TABLE `userEvent` (
  `id_userEvent` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `userGroup`
--

CREATE TABLE `userGroup` (
  `id_userGroup` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_group` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `userImage`
--

CREATE TABLE `userImage` (
  `id_userImage` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_src` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `userPosition`
--

CREATE TABLE `userPosition` (
  `id_userPosition` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `user_to_dialog`
--

CREATE TABLE `user_to_dialog` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `dialogid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_to_dialog`
--

INSERT INTO `user_to_dialog` (`id`, `userid`, `dialogid`) VALUES
(1, 11, 1),
(2, 4, 1),
(3, 10, 2),
(4, 4, 2),
(5, 232372, 3),
(6, 11, 3),
(7, 56, 4),
(8, 11, 4),
(9, 1, 5),
(10, 11, 5),
(11, 57, 6),
(12, 11, 6),
(13, 58, 7),
(14, 11, 7),
(15, 232373, 8),
(16, 11, 8),
(17, 1, 9),
(18, 4, 9),
(19, 11, 9),
(20, 232395, 9);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categoryEvent`
--
ALTER TABLE `categoryEvent`
  ADD PRIMARY KEY (`id_categoryEvent`);

--
-- Индексы таблицы `categoryStock`
--
ALTER TABLE `categoryStock`
  ADD PRIMARY KEY (`id_categoryStock`);

--
-- Индексы таблицы `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id_city`);

--
-- Индексы таблицы `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id_department`);

--
-- Индексы таблицы `dialog`
--
ALTER TABLE `dialog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `discipline`
--
ALTER TABLE `discipline`
  ADD PRIMARY KEY (`id_discipline`);

--
-- Индексы таблицы `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`id_division`);

--
-- Индексы таблицы `establishment`
--
ALTER TABLE `establishment`
  ADD PRIMARY KEY (`id_establishment`);

--
-- Индексы таблицы `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Индексы таблицы `eventCandidate`
--
ALTER TABLE `eventCandidate`
  ADD PRIMARY KEY (`id_taskCandidate`);

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id_group`);

--
-- Индексы таблицы `institution`
--
ALTER TABLE `institution`
  ADD PRIMARY KEY (`id_institution`);

--
-- Индексы таблицы `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `message_to_user`
--
ALTER TABLE `message_to_user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `msgGroup`
--
ALTER TABLE `msgGroup`
  ADD PRIMARY KEY (`id_msgGroup`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Индексы таблицы `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id_position`);

--
-- Индексы таблицы `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id_schedule`);

--
-- Индексы таблицы `specialty`
--
ALTER TABLE `specialty`
  ADD PRIMARY KEY (`id_specialty`);

--
-- Индексы таблицы `src`
--
ALTER TABLE `src`
  ADD PRIMARY KEY (`id_src`);

--
-- Индексы таблицы `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id_stock`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Индексы таблицы `userDiscipline`
--
ALTER TABLE `userDiscipline`
  ADD PRIMARY KEY (`id_userDiscipline`);

--
-- Индексы таблицы `userEvent`
--
ALTER TABLE `userEvent`
  ADD PRIMARY KEY (`id_userEvent`);

--
-- Индексы таблицы `userGroup`
--
ALTER TABLE `userGroup`
  ADD PRIMARY KEY (`id_userGroup`);

--
-- Индексы таблицы `userImage`
--
ALTER TABLE `userImage`
  ADD PRIMARY KEY (`id_userImage`);

--
-- Индексы таблицы `userPosition`
--
ALTER TABLE `userPosition`
  ADD PRIMARY KEY (`id_userPosition`);

--
-- Индексы таблицы `user_to_dialog`
--
ALTER TABLE `user_to_dialog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `categoryEvent`
--
ALTER TABLE `categoryEvent`
  MODIFY `id_categoryEvent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `categoryStock`
--
ALTER TABLE `categoryStock`
  MODIFY `id_categoryStock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `city`
--
ALTER TABLE `city`
  MODIFY `id_city` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `department`
--
ALTER TABLE `department`
  MODIFY `id_department` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `dialog`
--
ALTER TABLE `dialog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `discipline`
--
ALTER TABLE `discipline`
  MODIFY `id_discipline` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `division`
--
ALTER TABLE `division`
  MODIFY `id_division` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `establishment`
--
ALTER TABLE `establishment`
  MODIFY `id_establishment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT для таблицы `eventCandidate`
--
ALTER TABLE `eventCandidate`
  MODIFY `id_taskCandidate` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `id_group` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `institution`
--
ALTER TABLE `institution`
  MODIFY `id_institution` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT для таблицы `message_to_user`
--
ALTER TABLE `message_to_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;
--
-- AUTO_INCREMENT для таблицы `msgGroup`
--
ALTER TABLE `msgGroup`
  MODIFY `id_msgGroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT для таблицы `position`
--
ALTER TABLE `position`
  MODIFY `id_position` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id_schedule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `specialty`
--
ALTER TABLE `specialty`
  MODIFY `id_specialty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `src`
--
ALTER TABLE `src`
  MODIFY `id_src` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `stock`
--
ALTER TABLE `stock`
  MODIFY `id_stock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232417;
--
-- AUTO_INCREMENT для таблицы `userDiscipline`
--
ALTER TABLE `userDiscipline`
  MODIFY `id_userDiscipline` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `userEvent`
--
ALTER TABLE `userEvent`
  MODIFY `id_userEvent` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `userGroup`
--
ALTER TABLE `userGroup`
  MODIFY `id_userGroup` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `userImage`
--
ALTER TABLE `userImage`
  MODIFY `id_userImage` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `userPosition`
--
ALTER TABLE `userPosition`
  MODIFY `id_userPosition` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `user_to_dialog`
--
ALTER TABLE `user_to_dialog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
