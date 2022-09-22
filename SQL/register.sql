-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- 생성 시간: 21-12-13 23:27
-- 서버 버전: 8.0.27-0ubuntu0.20.04.1
-- PHP 버전: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `register`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `members`
--

CREATE TABLE `members` (
  `id` char(15) NOT NULL,
  `pass` char(15) NOT NULL,
  `name` char(10) NOT NULL,
  `email` char(80) DEFAULT NULL,
  `regist_day` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- 테이블의 덤프 데이터 `members`
--

INSERT INTO `members` (`id`, `pass`, `name`, `email`, `regist_day`) VALUES
('admin', '1234', '1234', 'admin', '2021-11-29 (23:29)'),
('', '', '', '', '2021-12-05 (00:09)'),
('test', 'test123', 'test123', 'test@test.com', '2021-12-05 (22:56)'),
('imphp', '1', '1', 'imphp@php.net', '2021-12-13 (21:17)'),
('admin123', 'admin123', 'admin123', 'admin@test.com', '2021-12-13 (23:11)');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
