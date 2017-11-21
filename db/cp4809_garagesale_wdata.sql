-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 21, 2017 at 11:14 AM
-- Server version: 5.6.38
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cp4809_garagesale`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `sellerId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `body` varchar(1000) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `expiryDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('created','active','expired','deleted') NOT NULL DEFAULT 'created',
  `isToBeDisplayed` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `sellerId`, `categoryId`, `title`, `body`, `price`, `creationDate`, `expiryDate`, `status`, `isToBeDisplayed`) VALUES
(8, 3, 7, 'A great deal on a vintage car', 'This is an ad about a vintage car', '99999.98', '2017-11-06 15:15:42', '2017-11-06 15:15:42', 'active', 1),
(9, 3, 10, 'Blend it the way you want it', 'This great blender will give you the smoothest smoothies', '9.97', '2017-11-06 15:22:02', '2017-11-06 15:22:02', 'created', 0),
(10, 3, 9, 'Clean dishes at last', 'This dishwasher is better than any other you\'ve had', '499.99', '2017-11-06 15:30:54', '2017-11-06 15:30:54', 'expired', 0),
(11, 3, 6, 'A great deal on a used car', 'used car user car user car', '4999.99', '2017-11-06 15:49:14', '2017-11-06 15:49:14', 'created', 0),
(12, 8, 9, 'dishwasher', 'used for only 2years and almost new!!', '800.00', '2017-11-09 15:00:26', '2017-11-09 15:00:26', 'created', 0),
(13, 8, 10, 'Magic bullet', 'blender blender blender', '20.00', '2017-11-10 12:42:43', '2017-11-10 12:42:43', 'created', 0),
(14, 3, 9, 'Sparkling opportunity', 'All-around dishwasher. Good for you day-to-day dishes and once in a while for your diamonds', '499.99', '2017-11-10 15:23:39', '2017-11-10 15:23:39', 'created', 0),
(15, 19, 6, 'talking car', 'talking car talking car talking car', '100000.00', '2017-11-10 16:31:35', '2017-11-10 16:31:35', 'created', 0),
(16, 8, 6, 'car', 'Blindsided by a new generation of blazing-fast cars, the legendary Lighting McQueen finds himself pushed out of the sport that he loves. Hoping to get back in the game, he turns to Cruz Ramirez, an eager young technician who has her own plans for winning. ', '5000.00', '2017-11-10 16:36:20', '2017-11-10 16:36:20', 'created', 0),
(17, 8, 6, 'Beatup beaut', 'Beatup beautBeatup beautBeatup beautBeatup beautBeatup beautBeatup beaut', '3.33', '2017-11-10 18:50:04', '2017-11-10 18:50:04', 'created', 0),
(18, 7, 7, 'Red car', 'aleirbgaw c;AOWSNFC PIOJW EFahnsdfoi;', '500.00', '2017-11-11 04:23:40', '2017-11-11 04:23:40', 'created', 0),
(21, 3, 7, 'it\"s old', 'afgdsfgsdfgsdfgsadfgsdfgsdfgdsafgsdfgsdfg', '3.00', '2017-11-15 18:25:44', '2017-11-15 18:25:44', 'created', 0),
(22, 19, 6, 'car', 'red strong car', '2000.00', '2017-11-15 18:39:12', '2017-11-15 18:39:12', 'created', 0),
(23, 23, 6, 'asdtdfg', 'asdfedhaszetrh', '99.00', '2017-11-19 00:42:56', '2017-11-19 00:42:56', 'created', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `parentCategoryId` int(11) DEFAULT NULL,
  `noPosts` tinyint(1) NOT NULL,
  `shortName` varchar(50) NOT NULL,
  `fullName` varchar(500) NOT NULL,
  `urlSanitizedFullName` varchar(500) NOT NULL,
  `categoryDashedName` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parentCategoryId`, `noPosts`, `shortName`, `fullName`, `urlSanitizedFullName`, `categoryDashedName`, `description`) VALUES
(5, NULL, 1, 'Cars', 'Cars', 'cars', 'Cars', 'Cars'),
(6, 5, 0, 'Used', 'Cars / Used', 'cars_used', ' - Used', 'Used Cars'),
(7, 5, 0, 'Vintage', 'Cars / Vintage', 'cars_vintage', ' - Vintage', 'Vintage Cars'),
(8, NULL, 1, 'Appliances', 'Appliances', 'appliances', 'Appliances', 'Appliances'),
(9, 8, 0, 'dishwashers', 'Appliances / Dishwashers', 'appliances_dishwashers', ' - Dishwashers', 'Dishwasher Appliances'),
(10, 8, 0, 'Blenders', 'Appliances / Blenders', 'appliances_blenders', ' - Blenders', 'Blenders Appliances'),
(11, 8, 0, 'Microwaves', 'Appliances / Microwaves', 'appliances_microwaves', ' - Microwaves', 'Microwave ovens'),
(12, NULL, 1, 'Sports', 'Sports', 'sports', 'Sports', 'Sports'),
(13, 12, 0, 'Hockey', 'Sports/hockey', 'sports_hockey', '-Hockey', 'Hockey');

-- --------------------------------------------------------

--
-- Table structure for table `conversation`
--

CREATE TABLE `conversation` (
  `id` int(11) NOT NULL,
  `userOne` int(11) NOT NULL,
  `userTwo` int(11) NOT NULL,
  `creationTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `conversation`
--

INSERT INTO `conversation` (`id`, `userOne`, `userTwo`, `creationTime`) VALUES
(1, 19, 7, '2017-11-19 00:10:19'),
(5, 7, 23, '2017-11-19 01:05:43');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `senderId` int(11) NOT NULL,
  `conversationId` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `creationTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `senderId`, `conversationId`, `message`, `creationTime`) VALUES
(2, 19, 1, 'test', '2017-11-19 00:10:30'),
(3, 19, 1, 'how old is this??', '2017-11-19 00:12:45'),
(4, 19, 1, 'how old??', '2017-11-19 00:13:19'),
(5, 19, 1, 'Can I come to see next weekend?', '2017-11-19 00:16:03'),
(6, 19, 1, 'Are you available this Sunday??', '2017-11-19 00:17:51'),
(7, 23, 5, 'asdgaSG', '2017-11-19 01:05:43');

-- --------------------------------------------------------

--
-- Table structure for table `passresets`
--

CREATE TABLE `passresets` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `secretToken` varchar(100) NOT NULL,
  `expiryDateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `passresets`
--

INSERT INTO `passresets` (`id`, `userId`, `secretToken`, `expiryDateTime`) VALUES
(1, 7, 'wmy22GFeZVPySUPPavR9ADGI8yB5V0HsnfupVaEV6utYoiOzOF', '2017-11-11 03:13:09'),
(5, 15, 'Dj59SOSctC7Qb4gr8PHjBHKZht6vP4StoYDgMvtg8A6jFmLObs', '2017-11-11 18:08:58');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `adId` int(11) NOT NULL,
  `imagePath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `adId`, `imagePath`) VALUES
(5, 9, '/uploads/blender.jfif'),
(6, 10, '/uploads/dishwasher.jfif'),
(7, 11, '/uploads/usedcar.jfif'),
(8, 12, '/uploads/dishwasher.jfif'),
(9, 13, '/uploads/blender.jpg'),
(10, 14, '/uploads/dishwasher - Copy.jfif'),
(11, 8, '/uploads/vintage-cars-1 - Copy.jpg'),
(13, 15, '/uploads/cars.jpg'),
(14, 16, '/uploads/cars.jpg'),
(15, 16, '/uploads/cars2.jpg'),
(34, 17, '/uploads/vintage-cars-1 - Copy.jpg'),
(35, 18, '/uploads/cars.jpg'),
(36, 17, '/uploads/vintage-cars-1 - Copy - Copy.jpg'),
(37, 17, '/uploads/vintage-cars-1 - Copy.jpg'),
(38, 21, '/uploads/2870_cars.jpg'),
(39, 22, '/uploads/cars2.jpg'),
(41, 23, '/uploads/eco.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `fbId` varchar(30) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `fbId`, `username`) VALUES
(3, 'Drake', 'drake@example.com', '$2y$10$gY.Nui2GNu.Nma7a.fuqte/OxQfR82k63Xf5oawOl3iyPsxJiQiGW', NULL, ''),
(4, 'Norma', 'norma@example.com', '$2y$10$HVUZO79OclAHh9u680cJ6ecUKqYm5cUN7NDwhEJPmz7hFFPN1qTMK', NULL, ''),
(5, 'Anna', 'anna@anna.com', '$2y$10$bxxBAJ5f8ULtyS/39i2VOeTvg.c.sFcyT9sEwiaQ2iknfGnMDKrZa', NULL, ''),
(6, 'Nancy', 'nancy@example.com', '$2y$10$rEeMO6LpidjqirZLLl4fy.QvPjGNPCubBRd/ZQA8CtRKTuQwfknge', NULL, ''),
(7, 'Miho', '1695847@johnabbottcollege.net', '$2y$10$cyzBeTwhNLCv.FGqKBVaC.W24i3sSJR9XGZffJqvkUD2sP00Tc1n6', NULL, ''),
(8, 'John', 'test@test.ca', '$2y$10$gY.Nui2GNu.Nma7a.fuqte/OxQfR82k63Xf5oawOl3iyPsxJiQiGW', NULL, ''),
(15, 'Miguel', 'miguel.legault@johnabbottcollege.net', '$2y$10$Q8gZS27rfsU658oMVfx/zeG.2Zdfq.rmHk9nNLnY3vDKMEdUAWzJS', NULL, ''),
(19, 'Lara', 'lara@lara.com', '$2y$10$pgpZdYalOVhm9hi3GXgYE.OXSknVlxb3mg9uzPdID1Fw3Bj/8R9rK', NULL, ''),
(23, 'Miho  Akasaka', 'miffy-miffy-miffy-chan@hotmail.co.jp', NULL, '1349548405173255', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryId` (`categoryId`),
  ADD KEY `sellerId` (`sellerId`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parentCategoryId` (`parentCategoryId`);

--
-- Indexes for table `conversation`
--
ALTER TABLE `conversation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userOne` (`userOne`),
  ADD KEY `userTwo` (`userTwo`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `senderId` (`senderId`),
  ADD KEY `conversationId` (`conversationId`);

--
-- Indexes for table `passresets`
--
ALTER TABLE `passresets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `useId` (`userId`),
  ADD UNIQUE KEY `secretToken` (`secretToken`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productId` (`adId`),
  ADD KEY `adId` (`adId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `fbId` (`fbId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `conversation`
--
ALTER TABLE `conversation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `passresets`
--
ALTER TABLE `passresets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ads`
--
ALTER TABLE `ads`
  ADD CONSTRAINT `ads_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `ads_ibfk_2` FOREIGN KEY (`sellerId`) REFERENCES `users` (`id`);

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`parentCategoryId`) REFERENCES `categories` (`id`);

--
-- Constraints for table `conversation`
--
ALTER TABLE `conversation`
  ADD CONSTRAINT `conversation_ibfk_1` FOREIGN KEY (`userOne`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `conversation_ibfk_2` FOREIGN KEY (`userTwo`) REFERENCES `users` (`id`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`conversationId`) REFERENCES `conversation` (`id`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`senderId`) REFERENCES `users` (`id`);

--
-- Constraints for table `passresets`
--
ALTER TABLE `passresets`
  ADD CONSTRAINT `passresets_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Constraints for table `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `pictures_ibfk_1` FOREIGN KEY (`adId`) REFERENCES `ads` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
