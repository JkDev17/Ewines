-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: localhost
-- Χρόνος δημιουργίας: 16 Μάη 2021 στις 17:41:40
-- Έκδοση διακομιστή: 10.4.17-MariaDB
-- Έκδοση PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `eshop`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(100) NOT NULL,
  `notification_email` varchar(100) NOT NULL,
  `total_cost` decimal(10,2) NOT NULL,
  `products` varchar(100) NOT NULL,
  `way_of_payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `orders`
--

INSERT INTO `orders` (`id`, `order_date`, `status`, `notification_email`, `total_cost`, `products`, `way_of_payment`) VALUES
(1, '2021-05-09 20:34:19', 'finished', 'gkap@gmail.com', '19.99', 'SAUVIGNON BLANC', 'paypal'),
(13, '2021-05-13 16:27:36', 'finished', 'jimkapadoukas@gmail.com', '49.98', 'NOBILO JACOBS', 'credit card'),
(14, '2021-05-13 16:40:21', 'finished', 'jimkapadoukas@gmail.com', '49.98', 'NOBILO JACOBS', 'paypal'),
(15, '2021-05-13 16:43:37', 'finished', 'jimkapadoukas@gmail.com', '149.97', 'NOBILO JACOBS BERINGER', 'paypal'),
(16, '2021-05-13 16:44:02', 'finished', 'jimkapadoukas@gmail.com', '149.97', 'NOBILO JACOBS', 'paypal'),
(17, '2021-05-13 16:44:24', 'finished', 'jimkapadoukas@gmail.com', '89.98', 'NOBILO CASTILLO', 'paypal'),
(19, '2021-05-11 09:28:49', 'finished', 'jimkapadoukas@gmail.com', '49.98', 'NOBILO JACOBS', 'credit card'),
(22, '2021-05-13 06:53:16', 'finished', 'jimkapadoukas@gmail.com', '99.98', 'JACOBS CASTILLO', 'paypal'),
(23, '2021-05-14 11:47:21', 'finished', 'jimkapadoukas@gmail.com', '29.99', 'JACOBS', 'paypal'),
(24, '2021-05-15 09:54:52', 'finished', 'jimkapadoukas@gmail.com', '99.98', 'NOBILO JACOBS CASTILLO', 'paypal'),
(40, '2021-05-15 13:47:14', 'on-process', 'jimkapadoukas@gmail.com', '69.99', 'CASTILLO', 'paypal'),
(41, '2021-05-15 13:50:22', 'on-process', 'jimkapadoukas@gmail.com', '69.99', 'NOBILO JACOBS CASTILLO', 'paypal'),
(43, '2021-05-16 07:16:58', 'on-process', 'jimkapadoukas@gmail.com', '49.98', 'NOBILO JACOBS', 'paypal'),
(44, '2021-05-16 07:18:16', 'finished', 'jimkapadoukas@gmail.com', '49.98', 'NOBILO JACOBS', 'paypal'),
(45, '2021-05-16 07:19:11', 'finished', 'jimkapadoukas@gmail.com', '49.98', 'NOBILO JACOBS', 'paypal'),
(46, '2021-05-16 14:31:53', 'on-process', 'jimkapadoukas@gmail.com', '49.98', 'NOBILO JACOBS CASTILLO', 'paypal'),
(47, '2021-05-16 14:40:16', 'on-process', 'jimkapadoukas@gmail.com', '49.98', 'NOBILO JACOBS CASTILLO', 'paypal');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `order_has_products`
--

CREATE TABLE `order_has_products` (
  `id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `order_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `order_has_products`
--

INSERT INTO `order_has_products` (`id`, `product_id`, `order_id`) VALUES
(1, 2, 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `products`
--

CREATE TABLE `products` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`) VALUES
(1, 'SAUVIGNON BLANC', 'Our Nobilo Sauvignon Blanc boasts fresh, vivid classic flavors that consistently showcase the diverse qualities of our Marlborough vineyards, year after year.', '19.99'),
(2, 'SHIRAZ CABERNET', 'From the humble cottage of William Jacob set along the banks of a small creek to the legacy of the Gramp family, we have over 150 years of winemaking tradition flowing through our vineyards. From vine to glass, the people whose dedication to craft and place can be tasted in every bottle.', '29.99'),
(3, 'CASTILLO YGAY RIOJA', 'The 1942 Castillo Ygay Gran Reserva Especial from a great Rioja vintage spent a mind-boggling 40 years in American oak barriques before it was bottled in 1983.', '49.99'),
(4, 'BERINGER PRIVATE RESERVE', 'The Beringer reserve vineyards offer Cabernet Sauvignon of such quality that a minimalist approach to winemaking has long defined this special blend. Each vineyard is vinified separately and monitored carefully from the moment the fruit comes into the winery at Harvest.', '99.99'),
(5, 'CRETE VINEYARD', 'The Crete Estate is a family winery which has been producing high quality wines since 1966 with a strong focus on rare local varieties and producing single variety wines.Surrounded by the idyllic setting of the vineyards and the Lassithi mountains we offer you the opportunity to enjoy nature and discover local varieties abd wines distinguished by the uniqueness of their origin and heritage.Art , a very important aspect of Greek history, across all generations during war and peace times and in al', '1.99'),
(6, 'SAMOS VINEYARD', 'The SAMOS Estate is a family winery which has been producing high quality wines since 1966 with a strong focus on rare local varieties and producing single variety wines.Surrounded by the idyllic setting of the vineyards and the Lassithi mountains we offer you the opportunity to enjoy nature and discover local varieties abd wines distinguished by the uniqueness of their origin and heritage.Art , a very important aspect of Greek history, across all generations during war and peace times and in al', '2.99');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`id`, `user_email`, `fullname`, `age`, `phone`, `password`) VALUES
(1, 'somethingRandom@gmail.com', 'Random name', 25, '2222222221', 'ff4453dgdgk35646gdktkylld6464643'),
(3, 'g.kapadoukas@yahoo.com', 'Alex', 34324, '4342353532', 'd57587b0f5bbb0c3fe9d8cb16e97b0fe'),
(4, 'jones@fgmail.com', 'John Bones Jones', 21, '4342353532', '5ff90447ed219f62413acb4a1e217745'),
(5, 'james@gmail.com', 'james', 31, '2222222231', '5d93ceb70e2bf5daa84ec3d0cd2c731a'),
(7, 'adaWong@gmail.com', 'AdaWong', 21, '2222222222', '553e83ca69693b33ef73958c04b7a315'),
(8, 'aexTerrible@gmail.com', 'AlexTerrible', 29, '2222222222', '5d93ceb70e2bf5daa84ec3d0cd2c731a'),
(9, 'alex@gmail.com', 'Alex', 34324, '2222222222', 'd57587b0f5bbb0c3fe9d8cb16e97b0fe'),
(10, 'christina@gmail.com', 'Christina', 21, '2222222222', 'd57587b0f5bbb0c3fe9d8cb16e97b0fe'),
(11, 'george@gmail.com', 'george', 2434, '3652653563', '22c0c5ee36af17378b2d1f1a4a01b344'),
(17, 'james14@gmail.com', 'james', 214, '222222222', 'd57587b0f5bbb0c3fe9d8cb16e97b0fe'),
(19, 'james13@gmail.com', 'james13', 22, '2222222222', 'd57587b0f5bbb0c3fe9d8cb16e97b0fe'),
(20, 'alexJones3@gmail.com', 'Alex Jones1', 222, '6241642621', 'd57587b0f5bbb0c3fe9d8cb16e97b0fe'),
(22, 'anna@gmail.com', 'Anna', 21, '2222222222', 'd57587b0f5bbb0c3fe9d8cb16e97b0fe'),
(23, 'jimkapadoukas@gmail.com', 'jim', 25, '6983336667', 'd57587b0f5bbb0c3fe9d8cb16e97b0fe');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `user_has_role`
--

CREATE TABLE `user_has_role` (
  `id` int(11) NOT NULL,
  `user_id` bigint(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `user_has_role`
--

INSERT INTO `user_has_role` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 2),
(3, 20, 2),
(4, 9, 1),
(5, 3, 1),
(6, 22, 2),
(7, 23, 2);

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `order_has_products`
--
ALTER TABLE `order_has_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_fk` (`product_id`),
  ADD KEY `order_fk` (`order_id`);

--
-- Ευρετήρια για πίνακα `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Ευρετήρια για πίνακα `user_has_role`
--
ALTER TABLE `user_has_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_fk` (`role_id`),
  ADD KEY `user_fk` (`user_id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT για πίνακα `order_has_products`
--
ALTER TABLE `order_has_products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT για πίνακα `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT για πίνακα `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT για πίνακα `user_has_role`
--
ALTER TABLE `user_has_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `order_has_products`
--
ALTER TABLE `order_has_products`
  ADD CONSTRAINT `order_fk` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `product_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Περιορισμοί για πίνακα `user_has_role`
--
ALTER TABLE `user_has_role`
  ADD CONSTRAINT `role_fk` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
