-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Pát 06. čen 2025, 22:52
-- Verze serveru: 10.4.32-MariaDB
-- Verze PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `wa_2025_ah_os`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `traditions`
--

CREATE TABLE `traditions` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `age` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `season` enum('jarní','letní','podzimní','zimní','sváteční','narozeninová','vánoční','valentýnská','velikonoční','hallowenská','dušičková','jiná','nesezónní') NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` varchar(25) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Vypisuji data pro tabulku `traditions`
--

INSERT INTO `traditions` (`id`, `name`, `age`, `description`, `season`, `link`, `images`, `created_at`, `role`, `user_id`) VALUES
(1, 'Topení látkové čarodejnice', 'Od prababičky', 'V naší rodině vždy na 17. března vyrobíme malou látkovou panenku, která reprezentuje Moranu, bohyni zimy a smrti, a hodíme ji do blízkého potoka - utopíme ji. Symbolicky touto tradicí vítáme jaro. Není to tradice unikátní jen pro naši rodinu, ale ani není tak rozšířená.', 'jarní', '', '[\"\\/public\\/images\\/profimedia-0690448947-1_900x598.jpg\"]', '2025-06-04 17:44:55', NULL, 1),
(2, 'cvbnm,', 'cvbnm', 'sdfghjklůlkjgfdfghjkllkjdfghjkkhgdasdfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 'dušičková', '', '[]', '2025-06-06 07:14:52', NULL, 1);

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `password_hash` varchar(100) NOT NULL,
  `role` enum('admin','user') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `name`, `surname`, `password_hash`, `role`) VALUES
(1, 'jméno', 'ghj@gmail.com', 'Jméno', 'př', '$2y$10$VnYRlJXaJknLZsZsgas6S.OwZrVXRg/W6q2yOOFyO8P3jv/GOdg3u', 'user');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `traditions`
--
ALTER TABLE `traditions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_traditions_user` (`user_id`);

--
-- Indexy pro tabulku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `traditions`
--
ALTER TABLE `traditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pro tabulku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Omezení pro exportované tabulky
--

--
-- Omezení pro tabulku `traditions`
--
ALTER TABLE `traditions`
  ADD CONSTRAINT `fk_traditions_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
