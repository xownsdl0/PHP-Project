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
-- 데이터베이스: `todo`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `todo`
--

CREATE TABLE `todo` (
  `ID` int DEFAULT NULL,
  `TASK` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sub` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 테이블의 덤프 데이터 `todo`
--

INSERT INTO `todo` (`ID`, `TASK`, `sub`) VALUES
(NULL, 'JS', '자바스크립트'),
(NULL, 'test', 'JAVA프로젝트'),
(NULL, 'CRUD 테스트', ''),
(NULL, 'closure', '자바스크립트'),
(NULL, '프로그래머스', '알고리즘 기초'),
(NULL, 'layout', 'HTML5/CSS3'),
(NULL, 'Grid', 'HTML5/CSS3'),
(NULL, 'flex-box', 'HTML5/CSS3'),
(NULL, 'callback', '자바스크립트'),
(NULL, 'GET/POST', 'PHP프로그래밍'),
(NULL, 'Ajax', 'JQuery'),
(NULL, 'Ajax', 'JQuery'),
(NULL, '배열', 'C프로그래밍(1)');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
