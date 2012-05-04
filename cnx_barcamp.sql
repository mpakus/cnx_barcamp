-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Май 04 2012 г., 14:58
-- Версия сервера: 5.0.26
-- Версия PHP: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mrakcom_barcamp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL,
  `provider` varchar(64) character set cp1251 NOT NULL,
  `identity` varchar(255) character set cp1251 NOT NULL,
  `first_name` varchar(255) character set cp1251 NOT NULL,
  `last_name` varchar(255) character set cp1251 default NULL,
  `email` varchar(255) character set cp1251 default NULL,
  `interest` varchar(512) default NULL,
  PRIMARY KEY  (`id`),
  KEY `uid` (`uid`,`provider`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `uid`, `provider`, `identity`, `first_name`, `last_name`, `email`, `interest`) VALUES
(6, 2147483647, 'http://www.facebook.com/', 'http://www.facebook.com/mpakus', 'Renat', 'Ibragimov', 'mrak69@gmail.com', 'Perl, PHP, Ruby, MySQL, MongoDB, HTML5, CSS3, JS, Web2.0, StartUps');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
