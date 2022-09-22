-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- 생성 시간: 21-12-13 23:26
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
-- 데이터베이스: `class`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `class`
--

CREATE TABLE `class` (
  `num` int NOT NULL,
  `sub` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 테이블의 덤프 데이터 `class`
--

INSERT INTO `class` (`num`, `sub`) VALUES
(3, 'Linux 서버실습'),
(3, '캡스톤디자인(1)'),
(3, '스프링프레임워크'),
(3, '안드로이드(2)'),
(3, 'JAVA프로젝트'),
(3, '웹앱개발'),
(3, '취창업포트폴리오인증'),
(3, 'IT 세미나'),
(3, '정보보안개론'),
(3, '캡스톤디자인(2)'),
(3, '빅데이터실무'),
(3, 'IOT 실습'),
(3, '현장실습'),
(1, '대학생활과 진로설계'),
(1, '영어회화(1)'),
(1, '새마을정신과 리더십'),
(1, 'OA실습'),
(1, '컴퓨터이해와 실습'),
(1, '알고리즘 기초'),
(1, '컴퓨팅사고와 이해'),
(1, '파이썬(1)'),
(1, 'HTML5/CSS3'),
(1, '영어회화(2)'),
(1, '일본어'),
(1, '정보통신개론'),
(1, '프레젠테이션기법'),
(1, '데이터베이스'),
(1, '파이썬(2)'),
(1, 'C프로그래밍(1)'),
(1, '자바스크립트'),
(2, 'TOEIC(1)'),
(2, '컴퓨터구조'),
(2, '시스템분석 및 설계'),
(2, '컴퓨터네트워크'),
(2, '데이터베이스응용'),
(2, '자바프로그래밍(1)'),
(2, 'C프로그래밍(2)'),
(2, 'JQuery'),
(2, 'TOEIC(2)'),
(2, '운영체제'),
(2, '자료구조실습'),
(2, 'JSP프로그래밍'),
(2, '안드로이드(1)'),
(2, '자바프로그래밍(2)'),
(2, 'PHP프로그래밍');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
