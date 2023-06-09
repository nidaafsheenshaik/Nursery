-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 06:28 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iiitdmj_nursery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(25) NOT NULL,
  `admin_password` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_password`) VALUES
('Bhargav_0105', '20BCS138'),
('MTK', '20BCS132'),
('VVSDC', '20BCS244');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` varchar(15) NOT NULL,
  `customer_password` varchar(15) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_contact` varchar(15) NOT NULL,
  `customer_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_password`, `customer_name`, `customer_contact`, `customer_address`) VALUES
('123', '200', 'NBC', '1254', 'california'),
('Bellari Babu', 'hero', 'bhashwanth', '200', 'bellari'),
('Bhargav_0105', 'NBC', 'Bhargav', '8974562', 'Kankatapalem, Bapatla'),
('Harry_potter', 'avadakadavra', 'Harry', '547103', 'Bellari'),
('Prabhas', 'darling', 'Prabhas Raju', '58741200', 'Jubliee Hills, Hyderabad'),
('roshan', 'roshan', 'Roshan Kumar', '587100', 'Gachibowli, Hyderabad'),
('Tarun_132', '132', 'Tarun Kumar', '124578690', 'Hyderabad, AP'),
('VS. Charan', '244', 'vvsd Charan', '123456', 'HYd'),
('VVSDC', '12345', 'V.Charan', '1245789', 'Hyderabad'),
('VVSDC_244', 'VVSDC', 'VVSD. Charan', '100', 'Hyderabad');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` varchar(5) NOT NULL,
  `customer_id` varchar(15) NOT NULL,
  `product_id` varchar(15) NOT NULL,
  `quantity` int(4) NOT NULL,
  `price` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `product_id`, `quantity`, `price`) VALUES
('3', 'VVSDC', '3', 1, 329);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` varchar(15) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_price` int(5) NOT NULL,
  `product_rating` int(1) NOT NULL,
  `product_stock` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_rating`, `product_stock`) VALUES
('1', 'Nimboo,Lemon plant', 399, 5, 101),
('10', 'Apple plant', 289, 5, 300),
('11', 'White Guava Plant', 399, 4, 1413),
('12', 'Anjeer Plant', 399, 5, 103),
('13', 'Black grapes plant', 499, 4, 123),
('14', 'Strawberry Plant', 349, 5, 31),
('15', 'Sitaphal Plant', 499, 4, 81),
('16', 'Desert Rose Plant', 729, 4, 131),
('17', 'Peach Orange Plant', 399, 5, 82),
('18', 'Hibiscus(Orange) Pla', 305, 5, 29),
('19', 'Canna Plant', 319, 4, 31),
('2', 'Jamun Tree', 299, 5, 62),
('20', 'Lxora Dwarf Plant', 399, 4, 89),
('21', 'Rose(Orange) Plant', 309, 5, 17),
('22', 'Techoma plant', 309, 4, 109),
('23', 'Marigold plant', 229, 4, 13),
('24', 'Poinsettia plant', 599, 4, 58),
('25', 'Lilium Plant', 549, 5, 32),
('26', 'Button Rose Plant', 299, 4, 39),
('27', 'Gazania Plant', 399, 4, 121),
('28', 'Germanium Ivy Plant', 399, 4, 92),
('29', 'Kalanchoe Plant', 449, 4, 72),
('3', 'Pomegranate Plant', 329, 5, 23),
('30', 'Zinnia Plant', 205, 5, 22),
('31', 'Tomato Seeds', 55, 4, 11),
('32', 'Balsam Rose Seeds', 145, 3, 61),
('33', 'Purple Orchid Seeds', 805, 4, 61),
('34', 'Brinjal(Round) Seeds', 55, 4, 19),
('35', 'Gomphrena Seeds', 55, 3, 81),
('36', 'Siris Seeds', 945, 4, 110),
('37', 'Chilli Seeds', 55, 4, 13),
('38', 'Broccholi Seeds', 149, 4, 73),
('39', 'Marigold Seeds', 229, 5, 2),
('4', 'Papaya, Papita', 329, 5, 39),
('40', 'Sunflower Seeds', 145, 4, 38),
('41', 'Eucalyptus Seeds', 89, 3, 32),
('42', 'Lavender Seeds', 145, 4, 29),
('43', 'Alyssum Seeds', 145, 4, 42),
('44', 'Palm seeds', 805, 4, 56),
('45', 'Capsicum Seeds', 55, 4, 28),
('5', 'Banana Plant', 399, 5, 8),
('6', 'Kaju Plant', 399, 5, 107),
('7', 'Coconut plant', 549, 5, 93),
('8', 'Sapota plant', 499, 4, 173),
('9', 'Sweet-lime Plant', 499, 4, 52);

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `order_id` varchar(5) NOT NULL,
  `customer_id` varchar(15) NOT NULL,
  `total_price` varchar(10) NOT NULL,
  `mode_of_pay` varchar(15) NOT NULL,
  `delivery_status` varchar(15) NOT NULL,
  `customer_contact` varchar(10) NOT NULL,
  `customer_address` varchar(100) NOT NULL,
  `DateofBuy` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`order_id`, `customer_id`, `total_price`, `mode_of_pay`, `delivery_status`, `customer_contact`, `customer_address`, `DateofBuy`) VALUES
('1', 'Bhargav_0105', '750', 'COD', 'Confirmed', '7995591502', 'Bapatla, Guntur(D.T)', '2020-11-26'),
('10', 'Bhargav_0105', '2198', 'COD', 'Confirmed', '12346', 'kkp', '2021-11-16'),
('2', 'Bhargav_0105', '250', 'Card', 'Confirmed', '125879456', 'Nellore', '2020-08-15'),
('3', 'VVSDC', '1127', 'COD', 'Confirmed', '012987', 'VIT Vellore', '2021-10-28'),
('4', 'VVSDC', '1995', 'COD', 'Confirmed', '12345', 'VHI', '0000-00-00'),
('5', 'VVSDC', '1995', 'COD', 'Confirmed', '12345', 'VHI', '2021-10-28'),
('6', 'Bhargav_0105', '1775', 'Card', 'Confirmed', '14578', 'IIITDMJ', '2021-11-15'),
('7', 'Bhargav_0105', '2558', 'COD', 'Confirmed', '124587996', 'IIITDMJ', '2021-11-15'),
('8', 'Tarun_132', '4101', 'COD', 'Confirmed', '1235788', 'Hyderabad', '2021-11-16'),
('9', 'Bhargav_0105', '1960', 'COD', 'Confirmed', '945786', 'IITDM Jabalpur', '2021-11-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`,`customer_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `purchases` (`order_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
