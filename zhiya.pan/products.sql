-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 14, 2024 at 08:15 AM
-- Server version: 10.11.7-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u798619714_ZhiyaPan`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `category`, `thumbnail`, `images`) VALUES
(1, 'Dust Monster Friends Brown', 'Double-layer material to reinforce durability\r\nSpecial texture fabric dogs like to chew and play\r\nA squeaky ball is inside the toy\r\nPowerful beeping sound\r\nSize: 12 x 12 cm\r\nMaterial: polyester ', '11.50', 'toy', 'img/Products/toy_Monster_thumb.png', 'img/Products/toy_Monster_1.png,toy_Monster_2.png'),
(2, 'L’Escape croissant', 'A crinkling, delicious L’Escape croissant nose work toy \r\nA savory butter squeaker is inside a crinkly croissant.\r\nHide a snack inside the croissant nose work pocket and put in the butter to up the level of difficulty.\r\nCroissant. Milk. Coffee, egg, and fruit! A European Brunch is now ready. Our doggos can enjoy together with us.\r\n', '14.00', 'toy', 'img/Products/toy_croissant_thumb.png', 'img/Products/toy_croissant_1.png'),
(3, 'Eobuba My Sibling_Brown', 'Gift your dog a little cute sibling with a nose work baby blanket.\r\nGive a piggyback ride to a cute little sibling dog with a squeaker using a nose work baby blanket!\r\n\r\nDogs are going to love this soft sibling toy and baby blanket. The baby blanket has a hidden nose work mat in the back so you can hide snacks in it.\r\n\r\nEobuba is a Korean word referring to saddling a baby in a baby blanket and giving a piggyback ride.\r\nThis product has a brown color sibling toy. \r\n', '26.00', 'toy', 'img/Products/toy_Sibling_thumb.png', 'img/Products/toy_Sibling_1.png'),
(4, 'Jeju Mandarin Orange', 'Get ready for CNY 2022!\r\nPrepare Mandarin orange for your dogs too\r\nPerfect gift for your furry friends\r\nOne set: 2 squeak toy + 1 nosework toy\r\nOrange Size: 6 cm x 4.5cm each\r\nKorean brand\r\n', '23.00', 'toy', 'img/Products/toy_Orange_thumb.png', 'img/Products/toy_Orange_1.png'),
(5, 'Every Morning Toast Nosework', 'Thinking of getting some bread? what about My fluffy crinkle bread loaf?\r\n\r\nHide treats into the 5 pockets! Rolled up the treats with the long cloth and level up the fun!', '22.00', 'toy', 'img/Products/toy_Toast_thumb.png', 'img/Products/toy_Toast_1.png'),
(6, 'Korean Strawberry', 'Soft, elastic and durable rope\r\nCrinkle & beeping strawberries and leaves', '36.80', 'toy', 'img/Products/toy_Straawberry_thumb.png', 'img/Products/toy_Straawberry_1.png'),
(7, 'Eggslut Fairfax Burger', 'Eggslut has arrived! a mouthwatering Fairfax burger nosework toy.\r\nFairfax – Eggslut’s signature menu, made from animal welfare approved eggs. Feel the richness of cloud-like, soft scrambled eggs that doggos will also enjoy.\r\nFunctions as nosework and squeaker toy! Our doggo friends won’t be able to resist.', '17.00', 'toy', 'img/Products/toy_Eggslut_thumb.png', 'img/Products/toy_Eggslut_1.png'),
(8, 'Happy Bark Day Cake', '3 IN ONE: Birthday cake/ Birthday Hat/ Toy\r\nSuch a cute birthday gift for furry friends!\r\nEnjoy the squeaker and crinkle paper inside the cake\r\nDelivery within 1-3 working days!', '24.00', 'toy', 'img/Products/toy_cake_thumb.png', 'img/Products/toy_cake_1.png'),
(9, 'Paldo Cup Noodle', 'Enjoy delicious Korean cup noodle!\r\nA nose work crinkling cup noodle with squeaky ramen powder', '24.00', 'toy', 'img/Products/toy_cupNoddle_thumb.png', 'img/Products/toy_cupNoddle_1.png'),
(10, 'My Little Animal Friends toy', 'Bite Me Little Animal Friends Dog Toy Looking for some soft and cute plushie for cuddle? Bite Me has 3 cute little friends for you! ', '12.99', 'toy', 'img/Products/toy_LittleAnimal_thumb.png', 'img/Products/toy_LittleAnimal_1.png'),
(11, 'Hole In One', 'Enjoy an exciting golf game with your doggo friends.\r\nIt\'s an all-in-one toy that not only has a nose work green but also a squeaky golf ball. Plus a nose work crinkling hole-in-one flag.', '22.00', 'toy', 'img/Products/toy_Golf_thumb.png', 'img/Products/toy_Golf_1.png'),
(12, 'Bite Me - Mushroom Nosework Toy', 'Dogs wanna have some fun too! Test your dogs\' sniffing skills or keep them entertained with Bite Me!\r\n\r\nThey say don\'t eat mushrooms that are bright colored. Don\'t worry, this mushroom should be safe... somewhat. Hide the snacks in the red mushroom!', '15.00', 'toy', 'img/Products/toy_Mashroom_thumb.png', 'img/Products/toy_Mashroom_1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
