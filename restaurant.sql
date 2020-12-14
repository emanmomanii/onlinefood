-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 07:05 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `allrestaurant`
--

CREATE TABLE `allrestaurant` (
  `r_ID` int(11) NOT NULL,
  `r_name` varchar(20) DEFAULT NULL,
  `r_descb` varchar(100) DEFAULT NULL,
  `r_img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allrestaurant`
--

INSERT INTO `allrestaurant` (`r_ID`, `r_name`, `r_descb`, `r_img`) VALUES
(2, 'Grill Mark', 'Burgers, Hot Dogs, Snacks', 'imgs/grillmark.jpg'),
(3, 'LoL Grill', 'Snacks, Sandwiches , Shawarma & Doner', 'imgs/lolgrill.jpg'),
(4, 'Eleven Eleven Bistro', 'Arabic, Burgers, Pizzas', 'imgs/elev.jpg'),
(5, 'Angry Buns', 'Burgers, Sandwiches , American', 'imgs/angry.jpg'),
(6, 'Shawerma Zarb', 'Arabic, Healthy Food, Shawarma & Doner', 'imgs/shazarb.jpg'),
(7, 'The Good Chick', 'American, Burgers, Sandwiches', 'imgs/goodch.jpg'),
(8, 'The Oven', 'American, Burgers, Sandwiches', 'imgs/theoven.jpg'),
(9, 'Lgymat W Karak', 'Desserts, Jordanian', 'imgs/LgymatKarak.jpg'),
(10, 'Al Kalha', 'Breakfast, Falafel', 'imgs/kalha.jpg'),
(11, 'Nar', 'Shawarma & Doner, American, Burgers', 'imgs/nar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `item_id` int(6) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `item_desc` varchar(50) NOT NULL,
  `item_img` varchar(100) NOT NULL,
  `r_ID` int(11) NOT NULL,
  `item_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`item_id`, `item_name`, `item_desc`, `item_img`, `r_ID`, `item_price`) VALUES
(1, 'Pizza Margherita', 'tomatoes, sliced mozzarella, basil, and olive oil.', 'imgs/margherita.jpg', 10, 2),
(2, 'Chicago Pizza', 'beef, sausage, pepperoni, onion, mushrooms.', 'imgs/Chicago.jpg ', 10, 2.5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(47, 'eman', 'noor', 'emanalmomani5@yahoo.com', 'Noor2014@'),
(48, 'eman', 'noor', 'emanalmomani5@yahoo.com', 'Noor2014@'),
(49, 'eman', 'noor', 'emanalmomani5@yahoo.com', 'Noor2014@'),
(50, 'eman', 'noor', 'emanalmomani5@yahoo.com', 'Noor2014@');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allrestaurant`
--
ALTER TABLE `allrestaurant`
  ADD PRIMARY KEY (`r_ID`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `r_ID` (`r_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allrestaurant`
--
ALTER TABLE `allrestaurant`
  MODIFY `r_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `item_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`r_ID`) REFERENCES `allrestaurant` (`r_ID`);
COMMIT;

