-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Aug 11, 2020 at 06:53 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infinity`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Query_type` varchar(30) NOT NULL,
  `org_name` varchar(50) DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `enquiry` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `Query_type`, `org_name`, `name`, `mobile`, `email`, `enquiry`) VALUES
(1, '', NULL, '', 0, '', ''),
(2, 'Product enquiry', '', '', 0, '', ''),
(3, 'General enquiry', '', '', 0, '', ''),
(4, 'General enquiry', 'jksbakjbs', 'ds,amd.', 2147483647, 'a@g.com', 'lkdlks'),
(5, 'General enquiry', '', 'aaa', 2147483647, 'a@g.com', 'lsnld'),
(6, 'General enquiry', '', 'aaa', 2147483647, 'a@g.com', 'lsnld'),
(7, 'General enquiry', '', 'aaa', 2147483647, 'a@g.com', 'lsnld'),
(8, 'General enquiry', '', 'aaa', 2147483647, 'a@g.com', 'lsnld'),
(9, 'General enquiry', '', 'aaa', 2147483647, 'a@g.com', 'lsnld'),
(10, 'General enquiry', '', 'aaa', 2147483647, 'a@g.com', 'lsnld'),
(11, 'Service enquiry', 'asa', 'ds,amd.', 2147483647, 'a@g.com', 'sasa'),
(12, 'Service enquiry', 'asa', 'ds,amd.', 2147483647, 'a@g.com', 'sasa'),
(13, 'Service enquiry', 'asa', 'ds,amd.', 2147483647, 'a@g.com', 'sasa'),
(14, 'Service enquiry', 'asa', 'ds,amd.', 2147483647, 'a@g.com', 'sasa'),
(15, 'Product enquiry', 'jksbakjbs', 'ds,amd.', 2147483647, 'a@g.com', 'sdsadas'),
(16, 'Product enquiry', 'jksbakjbs', 'ds,amd.', 2147483647, 'a@g.com', 'sdsadas'),
(17, 'Product enquiry', 'jksbakjbs', 'ds,amd.', 2147483647, 'a@g.com', 'sdsadas');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `orderNo` int(10) NOT NULL AUTO_INCREMENT,
  `pSerial` varchar(10) NOT NULL,
  `customer` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `addedOn` varchar(10) NOT NULL,
  PRIMARY KEY (`pSerial`),
  UNIQUE KEY `orderNo` (`orderNo`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderNo`, `pSerial`, `customer`, `phone`, `email`, `address`, `addedOn`) VALUES
(1, 'JDGS84DD', 'Anonymous', 'NULL', 'NULL', 'NULL', '10/08/2020'),
(2, '213JKDS1', 'Anonymous', 'NULL', 'NULL', 'NULL', '10/08/2020'),
(3, 'ASDHE212', 'Anonymous', 'NULL', 'NULL', 'NULL', '11/08/2020'),
(9, 'BSHAH15S', 'Anonymous', 'NULL', 'NULL', 'NULL', '11/08/2020'),
(8, 'HDS2DJS3', 'Anonymous', 'NULL', 'NULL', 'NULL', '11/08/2020'),
(7, 'KSJAF212', 'Anonymous', 'NULL', 'NULL', 'NULL', '11/08/2020');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `serialNo` varchar(12) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` varchar(800) NOT NULL,
  `img` varchar(100) NOT NULL,
  `warranty` varchar(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `addedOn` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  PRIMARY KEY (`serialNo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`serialNo`, `name`, `description`, `img`, `warranty`, `quantity`, `addedOn`, `price`) VALUES
('213JKDS1', 'MSI GeForce GT 1030 Graphic Ca', 'Ensures the best gaming experience by automatically updating users’ \r\n		game-ready drivers.\r\nAllows users to optimize the game settings to their PC with a single click.', 'assets/images/productImages/213JKDS1.jpg', '2', 16, '2020/08/09', '18,500'),
('HDS2DJS3', 'HP DeskJet 2130 Printer', 'Make your everyday printing, scanning, and copying \r\n	   easy with an HP DeskJet all-in-one that simply works—right out of the box.', 'assets\\\\images\\\\productImages\\\\HDS2DJS3.jpg', '2', 100, '2020/08/09', '10,500'),
('KSJAF212', 'Dell V214b 20.7-inch Monitor', 'Experience a vibrant Full HD 1920 x 1080 resolution image \r\n	   on an ample 20.7-inch diagonal screen with a quick 5ms response rate.', 'assets\\\\images\\\\productImages\\\\KSJAF212.jpg', '5', 42, '2020/08/09', '24,000'),
('ASDHE212', 'Seagate BarraCuda 1TB Harddisk', 'BarraCuda leads the industry with the highest capacities \r\n	   for desktops and mobile computers. With drives available up to 10 TB, the BarraCuda portfolio is a great option \r\n	   for upgrades at any price point. The uncompromising BarraCuda Pro marries industry-leading storage capacity with \r\n	   7,200-RPM spin speeds for snappy performance and load times when gaming or performing heavy workloads.', 'assets\\\\images\\\\productImages\\\\ASDHE212.jpg', '10', 120, '2020/08/09', '7,800'),
('2138SDFA', 'ADATA SU650 120GB Harddisk', 'ADATA SU650 incorporates next-generation 3D NAND Flash while \r\n	   generates virtually no noise, offering capacities up to 480GB. It delivers read/write performance up to 520/450 \r\n	   MB/s that is several times faster than traditional hard disk drives.', 'assets\\\\images\\\\productImages\\\\2138SDFA.jpg', '3', 150, '2020/08/09', '5,400'),
('3HSDFH3S', 'Lenovo V130 15\" Laptop', 'The Lenovo V130 15.6-inch laptop delivers great performance in a \r\n	   patterned, textured cover that bespeaks modern style.', 'assets\\\\images\\\\productImages\\\\3HSDFH3S.jpg', '2', 5, '2020/08/09', '89,000'),
('JDSH323D', 'Logitech Webcam C270 camera', 'You can be heard loud and clear thanks to a built-in microphone \r\n	   that reduces background noise.', 'assets\\\\images\\\\productImages\\\\JDSH323D.jpg', '2', 75, '2020/08/09', '13,200'),
('BSHAH15S', 'Xiaomi Bluetooth handsfree', 'Redmi AirDots TWS Bluetooth earbuds with 12h long battery life, Siri or Google voice assistant delivers impeccable user experience & flawless sound quality.', 'assets\\\\images\\\\productImages\\\\BSHAH15S.jpg', '1', 400, '2020/08/09', '2,700'),
('HFD8HF2S', 'Cougar Conquer 2 Gaming Case', 'COUGAR CONQUER 2 breaks away from traditional case designs with unique metal framing, sub-chassis and integrated ARGB lighting system.', 'assets\\\\images\\\\productImages\\\\HFD8HF2S.jpg', '4', 20, '2020/08/09', '69,000'),
('3DJSHFS3', 'HP 15-DA2W Notebook', 'Designed for long-lasting performance, this stylishly designed HP 39.6 cm (15.6\") laptop has a long-lasting battery that keeps you connected, entertained, and productive all day. Speed through tasks, or sit back and socialize – with an Intel® processor and a rich display. Do it all, all day.\r\n', 'assets\\\\images\\\\productImages\\\\3DJSHFS3.jpg', '5', 2, '2020/08/09', '109,900'),
('J99UDSD3', 'Acer NITRO 5 Gaming Laptop ', 'When heavy use requires an added boost, chill out with twin fans, Acer CoolBoost™ technology and a dual exhaust port design. CoolBoost™ increases fan speed by 10% and CPU/GPU cooling by 9% compared to auto mode. It manage your system in real time with NitroSense, covering temperatures, fan speeds and more.', 'assets\\\\images\\\\productImages\\\\J99UDSD3.jpg', '1', 1, '2020/08/09', '142,500'),
('47DSGH32', 'Lenovo Yoga C740-15IML Laptop', 'Combining heavyweight performance with lightweight portability, the Yoga C740’s 10th Gen Intel® Core™ processors enable longer battery life, high-speed connectivity, and ultra-responsive multi-tasking performance in a sleek package.', 'assets\\\\images\\\\productImages\\\\47DSGH32.jpg', '1', 80, '2020/08/09', '200,000'),
('932DF33D', 'Lenovo Ideapad C340-14IML Lapt', 'When inspiration strikes, turn to the powerful yet light IdeaPad C340. It has an all-day battery and you can use it as a laptop, tablet, and more. For extra privacy, it has a webcam shutter. And you can use a digital pen with it, too—giving you more ways to express yourself.', 'assets\\\\images\\\\productImages\\\\932DF33D.jpg', '5', 36, '2020/08/09', '125,600'),
('HF832DD3', 'Asus ROG STRIX Z490-H Gaming', 'ROG Strix Z490-H motherboard dons the classic red-and-black color scheme, and pairs it with futuristic cybertext for a new look.\r\n', 'assets\\\\images\\\\productImages\\\\HF832DD3.jpg', '2', 24, '2020/08/09', '42,000'),
('JSAJE34F', 'Hybrid Gaming Keyboard', 'The hybrid mechanical switches and the anti-ghosting technology join the mouse’s adjustable DPI and 1000 Hz polling rate to provide quick, accurate and reliable responses for your commands.\r\n', 'assets\\\\images\\\\productImages\\\\JSAJE34F.jpg', '3', 55, '2020/08/09', '11,000'),
('83HSA29D', 'Lenovo Ideapad L340 Laptop', 'Gaming is all about making enjoyable experiences. With this machine, you will be able to maximize the settings while playing GTA, COD etc.', 'assets/images/productImages/83HSA29D.jpg', '1', 2, '2020-08-09', '198,000'),
('JDGS84DD', 'Sapphire NITRO+ Radeon RX 590 ', 'Integrating the Dual-X radiator into the latest SAPPHIRE NITRO+ RX 500 series card is a brand new design.', 'assets/images/productImages/JDGS84DD.jpg', '5', 21, '2020-08-09', '49,500');

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

DROP TABLE IF EXISTS `product_review`;
CREATE TABLE IF NOT EXISTS `product_review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `title` varchar(40) NOT NULL,
  `review` text NOT NULL,
  `recommend` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product_review`
--

INSERT INTO `product_review` (`id`, `name`, `email`, `title`, `review`, `recommend`) VALUES
(1, '', '', '', '', ''),
(2, 's', 'a@g.com', 'das', 'dsa', 'yes'),
(3, 'aas', 'sa@g.com', 'ss', 'sa', 'yes'),
(4, 'aas', 'sa@g.com', 'ss', 'sa', 'yes'),
(5, 'haseeb', 'a@g.com', 'sa', 'sa', 'no'),
(6, 'haseeb', 'a@g.com', 'sa', 'sa', 'no'),
(7, 'haseeb', 'a@g.com', 'sa', 'sa', 'no'),
(8, 'haseeb', 'a@g.com', 'sa', 'sa', 'no'),
(9, 'haseeb', 'a@g.com', 'sa', 'sa', 'no'),
(10, 'haseeb', 'a@g.com', 'sa', 'sa', 'no'),
(11, 'haseeb', 'a@g.com', 'sa', 'sa', 'no'),
(12, 'haseeb', 'a@g.com', 'sa', 'sa', 'no'),
(13, 'haseeb', 'a@g.com', 'sa', 'sa', 'no'),
(14, 'haseeb', 'a@g.com', 'sa', 'sa', 'no'),
(15, 'haseeb', 'a@g.com', 'sa', 'sa', 'no'),
(16, 'haseeb', 'a@g.com', 'sa', 'sa', 'no'),
(17, 'aaadasd', 'sa@g.com', 'ASD', 'AD', 'yes'),
(18, 'aaadasd', 'sa@g.com', 'ASD', 'AD', 'yes'),
(19, 'AMEEN', 'sa@g.com', 'DAS', 'DAS', 'yes'),
(20, 'AMEEN', 'sa@g.com', 'DAS', 'DAS', 'yes'),
(21, 'ahmed', 'sa@g.com', 'Xc', 'sa', 'no'),
(22, 'ahmed', 'sa@g.com', 'Xc', 'sa', 'no'),
(23, 'ahmed', 'sa@g.com', 'Xc', 'sa', 'no'),
(24, 'aslam', 'sa@g.com', 'dsa', 'dsa', 'yes'),
(25, 'aslam', 'sa@g.com', 'dsa', 'dsa', 'yes'),
(26, 'dkshfsdkl', 'dns@gmail.com', 'jbjkdbfsd', 'sjkfbds', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `productSerial` varchar(10) NOT NULL,
  `custName` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `description` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `createdOn` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `productSerial`, `custName`, `phone`, `email`, `description`, `createdOn`) VALUES
(5, 'camera', 'hassan', '06465465132', 'hassan@gmail.com', 'Wow... Quick shopping...', '11/12/2020'),
(3, 'Keyboard', 'Saeed', '0326546546', 'saeed@gmail.com', 'My product is still not arrived.', '11/12/2020'),
(1, 'Laptop', 'Haseeb', '03454616132', 'ahseeb@gmail.com', 'This was the bad deal.', '11/12/2020'),
(2, 'Mobile', 'Ahmed', '0326546513', 'ahmed@gmail.com', 'This was the awesome site.', '11/12/2020'),
(22, '213JKDS1', 'Haseeb', 'NULL', 'has@gmail.co', 'Has: BLA BLALA. yes, I recommed this to friend', '11/08/2020'),
(23, 'J99UDSD3', 'Affaq', 'NULL', 'affaq@gmail.com', 'Best Laptop ever: I have purchased this laptop. Th', '11/08/2020'),
(24, '3DJSHFS3', 'Hassan', 'NULL', 'h@gmail.com', 'Bad customer experience.: This is not a good lapto', '11/08/2020'),
(25, '83HSA29D', 'Haseeb', 'NULL', 'h@gmail.com', 'Best Laptop ever: njnbsjabas asoi sa o. no, I recommed this to friend', '11/08/2020'),
(26, '2138SDFA', 'jk', 'NULL', 'h@gmail.com', 'Best Laptop ever: jhbjn. yes, I recommed this to friend', '11/08/2020');

-- --------------------------------------------------------

--
-- Table structure for table `signup_newsletter`
--

DROP TABLE IF EXISTS `signup_newsletter`;
CREATE TABLE IF NOT EXISTS `signup_newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `signup_newsletter`
--

INSERT INTO `signup_newsletter` (`id`, `name`, `email`) VALUES
(79, 'haseeb', 'ah@g.cp'),
(78, 'asad', 'a@g.com'),
(77, 'ameen', 'a@g.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `createdOn` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `phone`, `email`, `address`, `createdOn`) VALUES
(2, 'Haseeb Ahmed', 'has123', '03455488210', 'haseeb@gmail.com', 'Satellite Town Rawalpindi', '11/12/2020'),
(5, 'sheikh kjjl', 'Ameen1', 'NULL', 'a@g.com', 'NULL', '10/08/2020');

-- --------------------------------------------------------

--
-- Table structure for table `users_contact`
--

DROP TABLE IF EXISTS `users_contact`;
CREATE TABLE IF NOT EXISTS `users_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users_contact`
--

INSERT INTO `users_contact` (`id`, `name`, `email`, `message`) VALUES
(1, '', '', ''),
(2, 's', 'ASsASSDD', 'DASDAS'),
(3, 's', 'ASsASSDD', 'DASDAS'),
(4, 'sasa', 'sasas@g.com', 'sasdsa'),
(5, 'sasm', 'a@g.com', 'sjhgdcsakj'),
(6, 'sasm', 'a@g.com', 'sjhgdcsakj'),
(7, 'ameen', 'ASsASSDD@g.com', 'sasas'),
(8, 'asasa', 'sasas@g.com', 'sasas'),
(9, 'asasa', 'sasas@g.com', 'sasas'),
(10, 'asasa', 'sasas@g.com', 'sasas'),
(11, 'asasa', 'sasas@g.com', 'sasas'),
(12, 'asasa', 'sasas@g.com', 'sasas'),
(13, 'khbulb', 'aklnlk@g.com', 'jblnk.'),
(14, 'khbulb', 'aklnlk@g.com', 'jblnk.'),
(15, 'khbulb', 'aklnlk@g.com', 'jblnk.'),
(16, 'ameen', 'sasas@g.com', 'sadasd'),
(17, 'ameen', 'sasas@g.com', 'sadasd'),
(18, 'ameen', 'sasas@g.com', 'sadasd'),
(19, 'ameen', 'aklnlk@g.com', 'sadas'),
(20, 'sad', 'a@g.com', 'dsa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
