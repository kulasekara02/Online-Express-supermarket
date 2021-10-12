-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2021 at 03:44 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sampath_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `baverages`
--

CREATE TABLE `baverages` (
  `id` int(255) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baverages`
--

INSERT INTO `baverages` (`id`, `name`, `price`, `details`, `image`) VALUES
(1, 'Maliban Malt', '400', '400g Promos included', 'BV03.png'),
(2, 'Fanta', '300', '1.5L', 'BV02.png'),
(3, 'Viva', '290', '800g', 'BV04.png'),
(4, 'Milo', '120', '400g', 'BV05.png'),
(5, 'Sparkling Juice', '300', '750ml', 'BV01.png'),
(6, 'Nestomalt', '290', '400g', 'BV06.png'),
(7, 'Fanta', '350', '2L', 'BV08.png'),
(8, 'Cordial', '450', '750ml', 'BV07.png'),
(9, 'Coca Cola', '300', '2L', 'BV10.png'),
(10, 'Sprite', '220', '2L', 'BV09.png'),
(11, 'Sprite Sugar Free', '150', '2L', 'BV09.png'),
(12, 'Fanta Cream Soda', '270', '1.5L', 'BV11.png');

-- --------------------------------------------------------

--
-- Table structure for table `cookingessential`
--

CREATE TABLE `cookingessential` (
  `id` int(255) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cookingessential`
--

INSERT INTO `cookingessential` (`id`, `name`, `price`, `details`, `image`) VALUES
(101, 'Cardamom', '35', '20g', 'CS01.png'),
(102, 'Garam Masala', '55', '50g', 'CS02.png'),
(103, 'Wheat Flour', '105', '1kg', 'CS12.png'),
(104, 'Spice Mix', '67', '50g', 'CS03.png'),
(105, 'Spice Blend Hot Curry', '100', '60g', 'CS04.png'),
(106, 'Spice Blend Jaffna Curry', '170', '60g', 'CS05.png'),
(107, 'Coconut Milk Powder', '240', '800g', 'CS06.png'),
(108, 'Seasoning', '100', '15g', 'CS07.png'),
(109, 'Sriracha', '144', '200ml', 'CS08.png'),
(110, 'Fish Sause', '220', '600ml', 'CS09.png'),
(111, 'Salad Dressing', '300', '295ml', 'CS10.png'),
(112, 'Chia Seeds', '220', '400g', 'CS11.png');

-- --------------------------------------------------------

--
-- Table structure for table `fruits`
--

CREATE TABLE `fruits` (
  `id` int(255) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fruits`
--

INSERT INTO `fruits` (`id`, `name`, `price`, `details`, `image`) VALUES
(10001, 'Kolikuttu', '230', '500g', 'FT01.png'),
(10002, 'Green Apple', '160', '700g', 'FT02.png'),
(10003, 'Imported Orange', '230', '600g', 'FT03.png'),
(10004, 'Sour Plantain', '90', '500', 'FT04.png'),
(10005, 'Imported Pomegranate', '300', '500g', 'FT05.png'),
(10006, 'Chinese Yellow Pears', '400', '850g', 'FT06.png'),
(10007, 'Imported Mandarin', '150', '600g', 'FT07.png'),
(10008, 'Imported Red Grapes', ' 340', '500g', 'FT08.png'),
(10009, 'Chinese Fuji Apple', '500', '600g', 'FT12.png'),
(10010, 'Imported Black Grapes', '290', '500g', 'FT09.png'),
(10011, 'USA Red Apple', '300', '700g', 'FT10.png'),
(10012, 'Royal Gala Apple', '400', '700g', 'FT11.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(255) NOT NULL,
  `admin_name` varchar(1000) NOT NULL,
  `admin_email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `admin_name`, `admin_email`, `password`) VALUES
(112, 'Malith', 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `CustomerID` int(100) NOT NULL,
  `CustomerName` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `PostalCode` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Email` varchar(1000) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`CustomerID`, `CustomerName`, `Address`, `City`, `PostalCode`, `Country`, `Email`, `password`) VALUES
(1, 'Malith Deshan Ranaweera', 'Kalutara', 'Central ', '12000001', 'Sri Lanka', 'Malithrana@gmail.com', '12345'),
(3, 'Vihaga Dasun', '544/4/9 Awisawella Road Angoda', 'Colombo', '10620', 'Sri Lanka', 'vihaga@gmail.com', '1234'),
(6, 'Himasha Wijesingha', '37/23A, Stanly Road, Ward Place', 'Panadura', '100010001', 'Sri Lanka', 'Himasha@gmail.com', '1234'),
(8, 'Chandana Sooriyabandara', 'Sinharaja', 'Sinharaja 44', '220022', 'Sri Lanka', 'Chandana@gmail.com', '1234'),
(9, 'asd', 'asd', 'asda', 'sd', 'asd', 'asd@asdfasd', '1233'),
(10, 'Tharusha De Silva', 'aaa', 'aaa', 'aaa', 'aaa', 'tharusha@gmail.com', '1234'),
(11, 'test', 'test', 'test', 'test', 'test', 'test@gmail.com', '1234'),
(12, 'malith', 'asd', 'asd', 'asd', 'asd', 'malith@gmail.com', '1234'),
(13, 'malith', 'Kalutara', 'Kalutara', 'Kalutara', 'Kalutara', 'malith@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(100) NOT NULL,
  `customer_id` int(100) NOT NULL,
  `creation_date` date NOT NULL,
  `order_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `creation_date`, `order_status`) VALUES
(134, 6, '2021-05-02', 'pending'),
(135, 6, '2021-05-02', 'pending'),
(136, 6, '2021-05-02', 'pending'),
(137, 10, '2021-05-02', 'pending'),
(138, 6, '2021-05-02', 'pending'),
(139, 6, '2021-05-02', 'pending'),
(140, 6, '2021-05-02', 'pending'),
(141, 11, '2021-05-04', 'pending'),
(142, 1, '2021-05-10', 'pending'),
(143, 12, '2021-06-06', 'pending'),
(144, 12, '2021-10-09', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`id`, `order_id`, `product_name`, `product_price`, `product_quantity`, `date`) VALUES
(50, 134, 'Red-Tshirt', 123, 2, '2021-05-02'),
(51, 134, 'White Dot New', 99, 1, '2021-05-02'),
(52, 134, 'white printed', 23, 5, '2021-05-02'),
(53, 134, 'Dark Blue-T', 90, 2, '2021-05-02'),
(54, 134, 'Round-Neck_Dark', 10, 1, '2021-05-02'),
(55, 134, 'Zeebra-01', 99, 1, '2021-05-02'),
(56, 134, 'Blue-Long sleeves', 80, 6, '2021-05-02'),
(57, 134, 'Design01', 99, 5, '2021-05-02'),
(58, 134, 'Blues Shade', 180, 5, '2021-05-02'),
(59, 134, 'Girls_MacdonaldDuck', 32, 2, '2021-05-02'),
(60, 134, 'Boys DragonBall Z Shirts', 100, 1, '2021-05-02'),
(61, 135, 'Red-Tshirt', 123, 8, '2021-05-02'),
(62, 135, 'Design01', 99, 1, '2021-05-02'),
(63, 135, 'white line New', 32, 1, '2021-05-02'),
(64, 135, 'White Dot New', 99, 2, '2021-05-02'),
(65, 135, 'Blue-Long sleeves', 80, 1, '2021-05-02'),
(66, 135, 'Dark Blue-T', 90, 1, '2021-05-02'),
(67, 135, 'Frock', 100, 4, '2021-05-02'),
(68, 135, 'Dark-Red Shirt', 35, 3, '2021-05-02'),
(69, 136, 'Black Shades', 137, 1, '2021-05-02'),
(70, 136, 'Girls_MacdonaldDuck', 32, 1, '2021-05-02'),
(71, 136, 'Zeebra-01', 99, 1, '2021-05-02'),
(72, 136, 'Dark-Red Shirt', 35, 1, '2021-05-02'),
(73, 137, 'Wheat Flour', 105, 7, '2021-05-02'),
(74, 137, 'Cardamom', 35, 3, '2021-05-02'),
(75, 137, 'Fanta', 300, 10, '2021-05-02'),
(76, 137, 'Milo', 120, 13, '2021-05-02'),
(77, 137, 'Spice Blend Hot Curry', 100, 35, '2021-05-02'),
(78, 137, 'Mukunuwenna', 50, 2, '2021-05-02'),
(79, 137, 'Tarragon', 70, 2, '2021-05-02'),
(80, 137, 'Lettuce', 90, 7, '2021-05-02'),
(81, 137, 'Leeks', 100, 1, '2021-05-02'),
(82, 137, 'Salad Dressing', 300, 2, '2021-05-02'),
(83, 137, 'Chia Seeds', 220, 2, '2021-05-02'),
(84, 137, 'Spring Onion', 140, 1, '2021-05-02'),
(85, 138, 'Maliban Malt', 400, 8, '2021-05-02'),
(86, 138, 'Cabbage', 200, 5, '2021-05-02'),
(87, 138, 'Kolikuttu', 230, 1, '2021-05-02'),
(88, 138, 'Cardamom', 35, 1, '2021-05-02'),
(89, 138, 'Fanta', 300, 1, '2021-05-02'),
(90, 138, 'Garam Masala', 55, 1, '2021-05-02'),
(91, 138, 'Green Apple', 160, 1, '2021-05-02'),
(92, 138, 'Big Onion', 244, 1, '2021-05-02'),
(93, 139, 'Maliban Malt', 400, 1, '2021-05-02'),
(94, 139, 'Fanta', 300, 3, '2021-05-02'),
(95, 139, 'Milo', 120, 1, '2021-05-02'),
(96, 139, 'Cordial', 450, 1, '2021-05-02'),
(97, 139, 'Cabbage Leaves', 100, 1, '2021-05-02'),
(98, 140, 'Red Onion', 100, 1, '2021-05-02'),
(99, 140, 'Carrot', 150, 1, '2021-05-02'),
(100, 140, 'Imported Pomegranate', 300, 1, '2021-05-02'),
(101, 141, 'Fanta', 300, 3, '2021-05-04'),
(102, 141, 'Viva', 290, 1, '2021-05-04'),
(103, 142, 'Viva', 290, 1, '2021-05-10'),
(104, 142, 'Fanta', 300, 1, '2021-05-10'),
(105, 142, 'Milo', 120, 1, '2021-05-10'),
(106, 143, 'Fanta', 300, 1, '2021-06-07'),
(107, 143, 'Wheat Flour', 105, 1, '2021-06-07'),
(108, 143, 'Sour Plantain', 90, 1, '2021-06-07'),
(109, 143, 'Imported Pomegranate', 300, 1, '2021-06-07'),
(110, 143, 'Spice Mix', 67, 1, '2021-06-07'),
(111, 143, 'Carrot', 150, 1, '2021-06-07'),
(112, 144, 'Milo', 120, 1, '2021-10-09'),
(113, 144, 'Viva', 290, 1, '2021-10-09'),
(114, 144, 'Sparkling Juice', 300, 1, '2021-10-09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sales`
--

CREATE TABLE `tbl_sales` (
  `id` int(255) NOT NULL,
  `year2019` varchar(1000) NOT NULL,
  `year2020` varchar(1000) NOT NULL,
  `year2021` varchar(1000) NOT NULL,
  `year2022` varchar(1000) NOT NULL,
  `year2023` varchar(1000) NOT NULL,
  `year2024` varchar(1000) NOT NULL,
  `year2025` varchar(1000) NOT NULL,
  `year2026` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sales`
--

INSERT INTO `tbl_sales` (`id`, `year2019`, `year2020`, `year2021`, `year2022`, `year2023`, `year2024`, `year2025`, `year2026`) VALUES
(100010001, '30000', '29000', '27495', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `vegetables`
--

CREATE TABLE `vegetables` (
  `id` int(255) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vegetables`
--

INSERT INTO `vegetables` (`id`, `name`, `price`, `details`, `image`) VALUES
(1001, 'Cabbage', '200', '500g', 'VGE01.png'),
(1002, 'Big Onion', '244', '500g', 'VGE02.png'),
(1003, 'Red Onion', '100', '500g', 'VGE03.png'),
(1004, 'Cabbage Leaves', '100', '300g', 'VGE04.png'),
(1005, 'Carrot', '150', '500g', 'VGE05.png'),
(1006, 'Mukunuwenna', '50', '350g', 'VGE06.png'),
(1007, 'Leeks', '100', '500g', 'VGE07.png'),
(1008, 'Spring Onion', '140', '300g', 'VGE08.png'),
(1009, 'Lettuce', '90', '250g', 'VGE09.png'),
(1010, 'Tarragon', ' 70', '30g', 'VGE010.png'),
(1011, 'Lemon Balm', '60', '30g', 'VGE011.png'),
(1012, 'Dill', '40', '30g', 'VGE012.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baverages`
--
ALTER TABLE `baverages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cookingessential`
--
ALTER TABLE `cookingessential`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fruits`
--
ALTER TABLE `fruits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `tbl_sales`
--
ALTER TABLE `tbl_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vegetables`
--
ALTER TABLE `vegetables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baverages`
--
ALTER TABLE `baverages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cookingessential`
--
ALTER TABLE `cookingessential`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `fruits`
--
ALTER TABLE `fruits`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100013;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `CustomerID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `tbl_sales`
--
ALTER TABLE `tbl_sales`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100010002;

--
-- AUTO_INCREMENT for table `vegetables`
--
ALTER TABLE `vegetables`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1014;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `tbl_customer` (`CustomerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD CONSTRAINT `tbl_order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `tbl_order` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
