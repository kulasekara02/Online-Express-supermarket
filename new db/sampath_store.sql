-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2021 at 05:29 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

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
(1, 'Maliban Malt', '400', 'A malted food drink powder for energy boosting and active life. *Images for illustration purposes only. Product received may vary.', 'BV03.png'),
(2, 'Fanta Orange - 1.50 l', '300', 'ubbly, fruity, orange soft drink. 100% natural flavours, caffeine free *Images for illustration purposes only. Product received may vary.', 'BV02.png'),
(3, 'Viva Malted Food Drink Pouch - 800.00 g', '290', 'The rich creaminess and your favourite malt taste in Viva makes your cup of tea thick, creamy and flavourful. *Images for illustration purposes only. Product received may vary.', 'BV04.png'),
(4, 'Milo Packet - 400.00 g', '380', 'Milo is a globally recognized chocolate malt food drink made from the goodness of malt extract and the finest cocoa beans. *Images for illustration purposes only. Product received may vary.', 'BV05.png'),
(6, 'Nestomalt Malted Beverage  - 400.00 g', '290', 'From its unique aroma to its iconic taste, NESTOMALT provides a perfect start to the day for the whole family. It is formulated with the golden goodness of malted barley and the renowned nutrition of milk, to provide your Mind and Body with Power, Strength, and Energy.*Images for illustration purposes only. Product received may vary.', 'BV06.png'),
(7, 'Fanta Orange - 2.00 l', '350', 'Bright, bubbly and popular, Fanta is the soft drink that intensifies fun. Introduced in 1940, Fanta is the second oldest brand of The Coca-Cola Company *Images for illustration purposes only. Product received may vary.', 'BV08.png'),
(8, 'Edinborough Nelli Cordial - 750.00 ml', '450', 'A sweet drink flavoured with Gooseberry. An excellent source of Vitamin C that boosts immunity. *Images for illustration purposes only. Product received may vary', 'BV07.png'),
(9, 'Coca Cola - 2.00 l', '300', 'A popular classic. Carbonated cola drink. *Images for illustration purposes only. Product received may vary.', 'BV10.png'),
(10, 'Sprite - 2.00 l', '220', 'Sprite is a lemon-lime flavoured soft drink with a crisp, clean taste that gives you the ultimate cut-through refreshment *Images for illustration purposes only. Product received may vary.', 'BV90636_1.png'),
(11, 'Sprite Sugar Free', '200', 'Sprite Zero is a diet Sprite with no sugar. *Images for illustration purposes only. Product received may vary.', 'BV09.png'),
(17, 'Coca Cola - 1.50 l', '200', 'A popular classic. Carbonated cola drink. *Images for illustration purposes only. Product received may vary.', 'BVE0011_1.png'),
(18, 'Horlicks Malt  - 400.00 g', '400', 'Horlicks is a nourishing malt beverage that contains 23 vital nutrients important for your child’s growth. Nutrients in Horlicks are known to support bone health, muscle health, normal blood formation and immune function', 'BVE0378_1.png'),
(19, 'Fit O Flavored Mango Drink - 1.00 l', '270', 'Elephant House Fit-O is a delicious treat that suits your lifestyle. *Images for illustration purposes only. Product received may vary.', 'BVE0070_1.png'),
(20, 'Olu Mineral - 625.00 ml', '300', 'Ideal solution for quick hydration on the Go. Olu Tropical Water is bottled in high quality, screw-capped glass bottles. The revolutionary introduction of this glass bottle range ', 'BVE0034_1.png'),
(21, 'Red Bull Energy Drink - 4.00 pcs', '1500', 'Pack of 4 cans of Red Bull Energy Drink.*Images for illustration purposes only. Product recieved may vary.', 'BV94803_1.png'),
(22, 'Coca Cola Light Can - 325.00 m', '350', 'Sugar-free and no-calorie soft drink. *Images for illustration purposes only. Product received may vary.', 'BV90613_1.png'),
(23, 'Fontana Mango Juice - 1.00 l', '270', 'Fontana is a popular juice brand that celebrates a healthy and fresh lifestyle, Fontana is made from concentrates naturally derived from the finest fresh fruits and contains no added sugar, colours or preservatives. *Images for illustration purposes only. Product received may vary.', 'BV76506_1.png'),
(24, 'Horlicks  - 400.00 g', '300', 'Horlicks is a nourishing malt beverage that contains 23 vital nutrients important for your child’s growth. Nutrients in Horlicks are known to support bone health, muscle health, normal blood formation and immune function *Images for illustration purposes only. Product received may vary.', 'BV30706_1.png'),
(25, 'Zero Can - 330.00 ml', '300', 'Great Coca-Cola taste with no sugar. Enjoy Coca-Cola’s delicious taste with meals or on the go. Create moments for yourself with your own can of refreshing Diet Coke. Best served chilled. *Images for illustration purposes only. Product received may vary.', 'BV90603_1.png'),
(26, 'Lion Ginger Beer', '300', 'Lion Ginger Beer gives you that zesty punchy, through the crisp refreshing taste of real ginger *Images for illustration purposes only. Product received may vary.', 'BVE0290_1.png'),
(27, 'Pepsi - 500.00 ml', '150', 'Pepsi-the bold, refreshing, robust cola *Images for illustration purposes only. Product received may vary.', 'BV91210_1.png'),
(28, 'Sunquick Mango ', '500', 'Made with fruit. No artificial flavours, colours or sweeteners. Contains vitamin C. *Images for illustration purposes only. Product received may vary.', 'BV61157_1.png'),
(29, 'Lion Club Soda', '300', 'Lion Soda makes some of the fizziest, tastiest sparkling water with a local touch that gives you extra punch *Images for illustration purposes only. Product received may vary.', 'BVE0286_1.png'),
(30, 'Fontana Passion Fruit', '300', 'Sweet and sour passionfruit juice. *Images for illustration purposes only. Product received may vary.', 'BVE0173_1.png');

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
(101, 'Cardamom', '35', 'Cardamoms add an intense, slightly sweet flavour that could somewhat be compared to mint. *Images for illustration purposes only. Product received may vary.', 'CS01.png'),
(102, 'Garam Masala', '55', 'Finely ground garam masala powder. *Images for illustration purposes only. Product received may vary.', 'CS02.png'),
(103, 'Wheat Flour', '105', 'Prima Family Wheat Flour is a high quality wheat flour which is freshly milled. *Images for illustration purposes only. Product received may vary.', 'CS12.png'),
(104, 'Spice Mix', '67', 'A must-have in every kitchen - chicken curry mix. In addition to a delicious chicken curry can be also used to create kottu and other curry based dishes. Proudly manufactured and packed in Sri Lanka. *Images for illustration purposes only. Product received may vary.', 'CS03.png'),
(105, 'Spice Blend Hot Curry', '100', 'A delectable blend of spices combined to create a hot and flavourful curry. Can be used for vegetables, chicken and all types of meat. Proudly manufactured and packed in Sri Lanka. *Images for illustration purposes only. Product received may vary.', 'CS04.png'),
(106, 'Spice Blend Jaffna Curry', '170', 'Flavours from Northern Sri Lanka. This curry paste is made with handpicked spices from the premier spice gardens in Sri Lanka. Proudly manufactured and packed in Sri Lanka. *Images for illustration purposes only. Product received may vary.', 'CS05.png'),
(108, 'Seasoning', '100', 'An age perfected recipe containing real chicken, onion, garlic, celery and other spices to add that exquisite flavour and aroma to your everyday dishes. *Images for illustration purposes only. Product received may vary.', 'CS07.png'),
(109, 'Sriracha', '144', 'Suree Sriracha Chilli Sauce is a made from a blend of chillies and garlic. Perfect as a dip with a Dim sum. Alternatively, use as an ingredient to spice up your stir fry. Suree Sriracha Chilli Sauce is also suitable for vegetarians and vegans. *Images for illustration purposes only. Product received may vary.', 'CS08.png'),
(110, 'Fish Sause', '220', 'Intensely flavoured, it is usually used in moderation or mixed with water. This sauce can be used as a dipping condiment for fish, shrimp and meat of any kind, but also as a marinade that will give your meat and vegetables a unique Asian twist. *Images for illustration purposes only. Product received may vary.', 'CS09.png'),
(111, 'Salad Dressing', '300', 'Green salad dressing is made from green chilli, sugar and garlic. Does not contain artificial colours or preservatives. It is sweet, mild and slightly spicy in taste. *Images for illustration purposes only. Product received may vary.', 'CS10.png'),
(112, 'Chia Seeds', '220', 'Ideal for salads, smoothies, mueslis and cereals. *Images for illustration purposes only. Product received may vary.', 'CS11.png'),
(114, 'Maggi Coconut Milk Powder - 800.00 g', '1200', 'MAGGI Coconut Milk Powder is made from the finest and freshest Sri Lankan coconuts. *Images for illustration purposes only. Product received may vary.', 'CS15505_1.png'),
(115, 'Silvermill Pure Coconut Oil', '560', 'Enjoy the delicious flavour that this tropical oil adds to your food along with the many health benefits it contributes. Pure coconut oil is being re-discovered by the health-conscious consumers of today.*Images for illustration purposes only. Product recieved may vary.', 'CSE0429_1.png');

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
(10001, 'Kolikuttu', '230', 'Bananas are a popular fruit that happens to provide numerous health benefits. Among other things, they may boost digestive and heart health due to their fiber and antioxidant content. They may even aid weight loss, as they\'re relatively low-calorie and nutrient-dense', 'FT01.png'),
(10002, 'Green Apple', '160', 'Apples are incredibly good for you, and eating them is linked to a lower risk of many major diseases, including diabetes and cancer. What’s more, its soluble fiber content may promote weight loss and gut health. A medium apple equals 1.5 cups of fruit — which is 3/4 of the 2-cup daily recommendation for fruit. For the greatest benefits, eat the whole fruit — both skin and flesh', 'FT02.png'),
(10003, 'Imported Orange', '230', 'There are many reasons to eat citrus fruits. They\'re nutritious and contain plant compounds that can protect against a variety of diseases, including cancer, heart disease, brain dysfunction and kidney stones. But aim to consume whole fruits, rather than a lot of fruit juice, as its high sugar content can lead to problems.', 'FT03.png'),
(10004, 'Sour Plantain', '90', 'Bananas are a popular fruit that happens to provide numerous health benefits. Among other things, they may boost digestive and heart health due to their fiber and antioxidant content. They may even aid weight loss, as they\'re relatively low-calorie and nutrient-dense. Ripe bananas are a great way to satisfy your sweet tooth. What’s more, both yellow and green bananas can keep you healthy and feeling full', 'FT04.png'),
(10005, 'Imported Pomegranate', '300', 'Pomegranates are one of the healthiest foods on the planet, packed with nutrients and powerful plant compounds. They have wide-ranging benefits and may help reduce your risk of various serious illnesses, including heart disease, cancer, arthritis and other inflammatory conditions. What’s more, they may boost your memory and exercise performance.', 'FT05.png'),
(10006, 'Chinese Yellow Pears', '400', 'Pears are a powerhouse fruit, packing fiber, vitamins, and beneficial plant compounds. These nutrients are thought to fight inflammation, promote gut and heart health, protect against certain diseases, and even aid weight loss. Just be sure to eat the peel, as it harbors many of this fruit’s nutrients.', 'FT06.png'),
(10007, 'Imported Mandarin', '150', 'There are many reasons to eat citrus fruits. They\'re nutritious and contain plant compounds that can protect against a variety of diseases, including cancer, heart disease, brain dysfunction and kidney stones. But aim to consume whole fruits, rather than a lot of fruit juice, as its high sugar content can lead to problems. Overall, citrus fruits are healthy, low in calories and convenient to eat. Most people could benefit from adding more citrus to their diet. ', 'FT07.png'),
(10008, 'Imported Red Grapes', ' 340', 'Grapes contain several important nutrients and powerful plant compounds that benefit your health. Though they contain sugar, they have a low glycemic index and don’t appear to raise blood sugar levels. Antioxidants in grapes, such as resveratrol, reduce inflammation and may help protect against cancer, heart disease and diabetes. Grapes are easy to incorporate into your diet, whether fresh, frozen, as juice or wine.', 'FT08.png'),
(10009, 'Chinese Fuji Apple', '500', 'Apples are incredibly good for you, and eating them is linked to a lower risk of many major diseases, including diabetes and cancer. What’s more, its soluble fiber content may promote weight loss and gut health. A medium apple equals 1.5 cups of fruit — which is 3/4 of the 2-cup daily recommendation for fruit. For the greatest benefits, eat the whole fruit — both skin and flesh. [Source: www.healthline.com] Disclaimer: Please note that the image is used for presentation purposes only. Actual product may slightly defer. ', 'FT12.png'),
(10010, 'Imported Black Grapes', '290', 'Grapes contain several important nutrients and powerful plant compounds that benefit your health. Though they contain sugar, they have a low glycemic index and don’t appear to raise blood sugar levels. Antioxidants in grapes, such as resveratrol, reduce inflammation and may help protect against cancer, heart disease and diabetes. Grapes are easy to incorporate into your diet, whether fresh, frozen, as juice or wine.', 'FT09.png'),
(10011, 'USA Red Apple', '300', 'Apples are incredibly good for you, and eating them is linked to a lower risk of many major diseases, including diabetes and cancer. What’s more, its soluble fiber content may promote weight loss and gut health. A medium apple equals 1.5 cups of fruit — which is 3/4 of the 2-cup daily recommendation for fruit. For the greatest benefits, eat the whole fruit — both skin and flesh.', 'FT11.png'),
(100013, 'Red Banana - 500.00 g', '180', 'These are soft bananas that have a sweet flavour when ripe. They’re particularly rich in potassium, vitamin C and vitamin B6 and contain a fair amount of fiber. *Images for illustration purposes only. Product received may vary.', 'FTE0096_1.png'),
(100014, 'Villard Mango', '400', 'Villard amba are beautiful to look at, small, firm with red/orange/yellow/green patches. The flesh is juicy but not too sweet and not too overpowering or fragrant. There is a lightness to the taste and it is almost citrus like in flavour without being sour.', 'FTE0098_1.png'),
(100015, 'Ambun Large', '250', 't has a dominating banana flavour with additional tropical fruit nuances and a bright green colour.', 'FTE0085_1.png'),
(100016, 'King Coconut', '80', 'Bright orange variety of coconut, native to Sri Lanka. The clear refreshing water inside is sweet and delicious.', 'FTE0089_1.png'),
(100017, 'Rambutan ', '200', 'Rambutan is appreciated for the exotic flavour of its juicy and sweet pThe fruit is related to the lychee and longan fruits and has a similar appearance when peeled. Its translucent white flesh has a sweet yet creamy taste and contains a seed in its middle. Rambutan is very nutritious and may offer health benefits ranging from weight loss and better digestion to increased resistance to infections.ulp', 'FTE0095_1.png'),
(100018, 'Narang Large', '100', 'Sour fruit with a pleasant smell. Loaded with vitamin C. *Images for illustration purposes only. Product received may vary.', 'FTE0093_1.png'),
(100019, 'Donga ', '50', 'Donga fruits range in flavour from sour to very sweet, depending on maturity and variety. The sweetest Donga fruits have a candy-like taste with mild peach and apple notes, while in the sour varieties, a strong aftertaste may linger on the palate. *Images for illustration purposes only. Product received may vary.', 'FTE0086_1.png');

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
(112, 'Kulasekara', 'admin@gmail.com', '1234');

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
(27, 'chandima kulathunga', 'angoda junction', 'colombo', '10620', 'Sri Lanka', 'chandima123@hotmail.com', '1234'),
(28, 'kavya eliptiya', 'angoda junction', 'colombo', '10620', 'Sri Lanka', 'kavya123@outlook.com', '1234'),
(29, 'uttari', 'Anogoda', 'colombo', '10620', 'sri lanka', 'damith@gmail.com', '1234');

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
(152, 28, '2021-10-13', 'pending'),
(153, 28, '2021-10-13', 'pending'),
(154, 27, '2021-10-14', 'pending'),
(155, 27, '2021-10-14', 'pending'),
(156, 27, '2021-10-14', 'pending'),
(157, 27, '2021-10-14', 'pending'),
(158, 27, '2021-10-14', 'pending'),
(159, 27, '2021-10-23', 'pending');

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
(130, 152, 'Viva', 290, 1, '2021-10-13'),
(131, 152, 'Maliban Malt', 400, 12, '2021-10-13'),
(132, 153, 'Cabbage Leaves', 100, 1, '2021-10-13'),
(133, 153, 'Carrot', 150, 1, '2021-10-13'),
(134, 154, 'Milo', 120, 1, '2021-10-14'),
(135, 154, 'Sparkling Juice', 300, 1, '2021-10-14'),
(136, 154, 'Nestomalt', 290, 1, '2021-10-14'),
(137, 155, 'Sour Plantain', 90, 1, '2021-10-14'),
(138, 155, 'Imported Orange', 230, 1, '2021-10-14'),
(139, 155, 'Green Apple', 160, 1, '2021-10-14'),
(140, 156, 'Cabbage Leaves', 100, 1, '2021-10-14'),
(141, 156, 'Spice Mix', 67, 1, '2021-10-14'),
(142, 156, 'Wheat Flour', 105, 1, '2021-10-14'),
(143, 156, 'Garam Masala', 55, 1, '2021-10-14'),
(144, 157, 'Maliban Malt', 400, 1, '2021-10-14'),
(145, 157, 'Fanta', 300, 1, '2021-10-14'),
(146, 157, 'Milo', 120, 1, '2021-10-14'),
(147, 157, 'Spice Mix', 67, 1, '2021-10-14'),
(148, 157, 'Sour Plantain', 90, 1, '2021-10-14'),
(149, 157, 'Carrot', 150, 1, '2021-10-14'),
(150, 157, 'Red Onion', 100, 1, '2021-10-14'),
(151, 157, 'Cabbage', 200, 1, '2021-10-14'),
(152, 157, 'Lettuce', 90, 1, '2021-10-14'),
(153, 158, 'Maliban Malt', 400, 1, '2021-10-14'),
(154, 158, 'Milo', 120, 1, '2021-10-14'),
(155, 158, 'Sparkling Juice', 300, 1, '2021-10-14'),
(156, 158, 'Nestomalt', 290, 1, '2021-10-14'),
(157, 158, 'Fanta', 300, 1, '2021-10-14'),
(158, 158, 'Coca Cola', 300, 1, '2021-10-14'),
(159, 159, 'Maliban Malt', 400, 2, '2021-10-23'),
(160, 159, 'Cardamom', 35, 2, '2021-10-23'),
(161, 159, 'Kolikuttu', 230, 1, '2021-10-23'),
(162, 159, 'Cabbage', 200, 1, '2021-10-23'),
(163, 159, 'USA Red Apple', 300, 1, '2021-10-23'),
(164, 159, 'Imported Pomegranate', 300, 1, '2021-10-23');

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
(100010001, '25000', '10000', '29000', '', '', '', '', '');

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
(1001, 'Cabbage - 500.00 g', '200', 'Our very own range of SL-GAP (SL- Good Agricultural Practices) Certified Vegetables and Fruits. Helps with metabolism and nervous system functions. Source of powerful antioxidants. Contains - Vitamin: Folate (B9), Riboflavin (B2), C, K Minerals: Manganese, Potassium, Calcium, Magnesium. Disclaimer: Please note that the image is used for presentation purposes only.', 'VGE01.png'),
(1002, 'Big Onion', '244', 'The health benefits related to onions are quite impressive. These nutrient-packed vegetables contain powerful compounds that may decrease your risk of heart disease and certain cancers. Onions have antibacterial properties and promote digestive health, which may improve immune function. What’s more, they’re versatile and can be used to heighten the flavor of any savory dish. Adding more onions to your diet is an easy way to benefit your overall health.', 'VGE02.png'),
(1003, 'Red Onion', '100', 'he health benefits related to onions are quite impressive. These nutrient-packed vegetables contain powerful compounds that may decrease your risk of heart disease and certain cancers. Onions have antibacterial properties and promote digestive health, which may improve immune function. What’s more, they’re versatile and can be used to heighten the flavor of any savory dish. Adding more onions to your diet is an easy way to benefit your overall health.', 'VGE03.png'),
(1004, 'Cabbage Leaves', '100', 'Cabbage is an exceptionally healthy food. It has an outstanding nutrient profile and is especially high in vitamins C and K. In addition, eating cabbage may even help lower the risk of certain diseases, improve digestion and combat inflammation. Plus, cabbage leaves ( also known as leafy cabbage) makes a tasty and inexpensive addition to a number of recipes. With so many potential health benefits, it is easy to see why cabbage leaves deserves some time in the spotlight and some room on your plate. Disclaimer: Please note that the image is used for presentation purposes only. Actual product may slightly defer.', 'VGE04.png'),
(1005, 'Carrot', '150', 'Carrots are the perfect snack — crunchy, full of nutrients, low in calories, and sweet. They’re associated with heart and eye health, improved digestion, and even weight loss. This root vegetable comes in several colors, sizes, and shapes, all of which are great additions to a healthy diet.', 'VGE05.png'),
(1006, 'Mukunuwenna', '50', 'Our very own range of SL-GAP (SL- Good Agricultural Practices) Certified Vegetables and Fruits. Used to treat stomach disorders, diarrhoea and dysentery. Good for eye sight and skin. Facilitates bowel movement. Contains - Vitamin: A, C Minerals: Potassium, Magnesium, Calcium, Sodium, Zinc, Iron. Disclaimer: Please note that the image is used for presentation purposes only. Actual product may slightly defer.', 'VGE06.png'),
(1007, 'Bee Safe Leeks ', '100', 'Good for vision, immune function, reproduction and cell communication. Aids tissue repair and promotes thyroid health. Contains - Vitamin: A, K, C, B6 Minerals: Manganese, Copper, Iron. Disclaimer: Please note that the image is used for presentation purposes only. Actual product may slightly defer.', 'VGE07.png'),
(1008, 'Spring Onion', '140', 'The health benefits related to onions are quite impressive. These nutrient-packed vegetables contain powerful compounds that may decrease your risk of heart disease and certain cancers. Onions have antibacterial properties and promote digestive health, which may improve immune function. What’s more, they’re versatile and can be used to heighten the flavor of any savory dish. Adding more onions to your diet is an easy way to benefit your overall health.', 'VGE08.png'),
(1009, 'Lettuce', '90', 'ed leaf lettuce is a highly nutritious food. It’s especially rich in antioxidants and vitamins A and K. Additionally, it may help lower blood pressure, aid weight loss, and boost heart health. Red leaf lettuce can easily be added to your favorite salads or sandwiches for extra flavor and nutrients.', 'VGE09.png'),
(1010, 'Tarragon', ' 70', 'Tarragon has many impressive health benefits, including the potential to reduce blood sugar, inflammation and pain, while improving sleep, appetite and heart health. Not to mention, it’s versatile and can be added to a variety of foods — whether you use fresh or dried varieties. Disclaimer: Please note that the image is used for presentation purposes only. Actual product may slightly defer.', 'VGE010.png'),
(1011, 'Lemon Balm', '60', 'Lemon balm (Melissa officinalis) is a lemon-scented herb that comes from the same family as mint. The herb is native to Europe, North Africa, and West Asia, but it’s grown around the world. Disclaimer: Please note that the image is used for presentation purposes only.', 'VGE011.png'),
(1014, 'Lemon - 500.00 g', '100', 'Lemons contain a high amount of vitamin C, soluble fiber, and plant compounds that give them a number of health benefits. Lemons may aid weight loss and reduce your risk of heart disease, anemia, kidney stones, digestive issues, and cancer.', 'VGE0297_1.png');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `cookingessential`
--
ALTER TABLE `cookingessential`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `fruits`
--
ALTER TABLE `fruits`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100020;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `CustomerID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `tbl_sales`
--
ALTER TABLE `tbl_sales`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100010002;

--
-- AUTO_INCREMENT for table `vegetables`
--
ALTER TABLE `vegetables`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1015;

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
