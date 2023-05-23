-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Maj 23, 2023 at 09:18 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `answers`
--

CREATE TABLE `answers` (
  `answersId` int(11) NOT NULL,
  `topic` varchar(200) DEFAULT NULL,
  `question` varchar(200) DEFAULT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`answersId`, `topic`, `question`, `userID`) VALUES
(199, 'pytanie', '', 0),
(200, 'pytanie', '', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `topic` varchar(200) DEFAULT NULL,
  `question` text DEFAULT NULL,
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `topic`, `question`, `userId`) VALUES
(191, 'Komputer', 'gegefgfgdfgfdgdfgdfgdfgdg', NULL),
(192, 'test pytania', 'Dziala!!!!!!!!!', NULL),
(193, 'Proba ', 'tresc', NULL),
(194, 'Proba ', 'tresc', NULL),
(195, 'Proba ', 'tresc', NULL),
(196, 'Programowanie', 'Programowanie jest super', NULL),
(199, 'TEST ', 'TEST TEST TEST', 2),
(200, 'TEST ', 'TEST TEST', 2),
(201, 'uzytkownik test', 'test1234', 1),
(202, 'Pytanie 2', 'TEST pytania', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(200) DEFAULT NULL,
  `usersEmail` varchar(200) DEFAULT NULL,
  `usersPwd` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersPwd`) VALUES
(1, 'test', 'mojemail@gmail.com', '1234'),
(2, 'root', 'root@gmail.com', '$12$'),
(3, '', '$2y$10$XAckvIX9DnjfpR1cEw7ZnOOdifgb8SyWG6ENpp9uv5JyH.1ouhRga', ''),
(4, '', '$2y$10$an3YtdFXvkMd0xH6URBm1.kMSqSOo56EpN4gz5u8zZ/wO5bGc1jeO', ''),
(5, '', '$2y$10$PHSHZXfQVHcQPzGLfgpkyOWdrNNOxZCUSzoiVtEGf1EjGwQYfASGS', '');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`answersId`);

--
-- Indeksy dla tabeli `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_usersId` (`userId`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `answersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `FK_usersId` FOREIGN KEY (`userId`) REFERENCES `users` (`usersId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
