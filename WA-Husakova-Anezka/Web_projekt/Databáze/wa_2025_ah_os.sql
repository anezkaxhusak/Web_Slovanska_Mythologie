-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Sob 07. čen 2025, 21:34
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
-- Struktura tabulky `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `tradition_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Vypisuji data pro tabulku `comments`
--

INSERT INTO `comments` (`id`, `content`, `user_id`, `tradition_id`, `created_at`, `updated_at`, `is_active`) VALUES
(1, 'Co?', 1, 2, '2025-06-06 21:51:35', '2025-06-06 21:51:35', 1),
(3, 'Ne, nevynášíme :(', 2, 3, '2025-06-06 22:34:31', '2025-06-06 22:34:31', 1);

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
(2, 'cvbnm,', 'cvbnm', 'sdfghjklůlkjgfdfghjkllkjdfghjkkhgdasdffffffffffffffffffFDS\r\nsdagfdFFVDertjuhgrfjhtgrfedws', 'velikonoční', '', '[]', '2025-06-06 07:14:52', NULL, 1),
(3, 'Topení látkové čarodejnice', 'Co si pamatuji', 'V naší rodině vždy na den jarní rovnodennosti vyrobíme malou látkovou panenku, která reprezentuje Moranu, bohyni zimy a smrti, a hodíme ji do blízkého potoka - utopíme ji. Symbolicky touto tradicí vítáme jaro. Není to tradice unikátní jen pro naši rodinu, ale co vím, tak ani není tolik rozšířená. Alespoň u nás ,ve Středočeském kraji, ne. Co vy? Vynášíte na jarě Moranu?', 'jarní', '', '[\"public\\/images\\/1749249071_vynaseni-morany-reka.jpg\"]', '2025-06-06 22:31:11', NULL, 1);

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
(1, 'jméno', 'ghj@gmail.com', 'Jméno', 'př', '$2y$10$VnYRlJXaJknLZsZsgas6S.OwZrVXRg/W6q2yOOFyO8P3jv/GOdg3u', 'user'),
(2, 'Uživatel2', 'uziv@gmail.com', 'Uživatel', 'Druhý', '$2y$10$GIQ5o4I90Ih5Zg7nF4o/XOifPfFimoSzuKhlmqnmC21Rnjvj1QRKm', 'user');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comments_user` (`user_id`),
  ADD KEY `fk_comments_tradition` (`tradition_id`),
  ADD KEY `idx_tradition_comments` (`tradition_id`,`is_active`),
  ADD KEY `idx_created_at` (`created_at`);

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
-- AUTO_INCREMENT pro tabulku `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pro tabulku `traditions`
--
ALTER TABLE `traditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pro tabulku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Omezení pro exportované tabulky
--

--
-- Omezení pro tabulku `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comments_tradition` FOREIGN KEY (`tradition_id`) REFERENCES `traditions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_comments_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Omezení pro tabulku `traditions`
--
ALTER TABLE `traditions`
  ADD CONSTRAINT `fk_traditions_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
