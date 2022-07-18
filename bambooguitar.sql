-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 18, 2022 lúc 12:00 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bambooguitar`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `topic` varchar(200) NOT NULL,
  `content` mediumtext NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id`, `topic`, `content`, `image`, `date`) VALUES
(1, 'BENEFITS OF US SUPER FOOD', 'The high levels of vitamins and minerals found in superfoods can help your body prevent disease and keep you healthier.<br><br>\r\n\r\nWhen incorporated into a balanced diet, these foods can promote heart health, lose weight, improve energy levels and even reduce the effects of aging.<br><br>\r\n\r\nAntioxidants found in many superfoods may help prevent cancer, while healthy fats may reduce the risk of heart disease.<br><br>\r\n\r\nFiber, also found in many superfoods, can help prevent diabetes and digestive problems while phytochemicals have many health benefits including reducing the risk of developing cardiovascular diseases. .<br><br>\r\n\r\nSuperfoods are also known to protect your organs from toxins, help lower cholesterol, regulate metabolism and reduce inflammation.', 'blog1.jpg', '2022-07-06'),
(3, 'WHAT IS A SUPERFOOD?', 'To date, there is no standard definition of a superfood. According to Wikipedia, Superfood is a term used by marketers to describe foods with many health benefits. Superfoods are packed with nutrients and can provide your body with the vitamins and minerals you need to maintain, grow and feel healthier.\r\n<br><br>\r\nHowever, the term superfood is not commonly used by nutritionists and nutrition scientists\r\n<br><br>\r\nThe Macmillan Dictionary defines a superfood as \"food that is considered very good for your health and may even help certain medical conditions\".\r\n<br><br>\r\nThe effects of Superfood also do not stop at supplementing general health. Some nutrient-rich foods are good for your skin and hair.', 'blog2.jpg', '2022-07-06'),
(4, 'AMAZING PRODUCTS FROM CACAO', 'Today, most of the chocolate you find in stores is high in calories and contains a lot of sugar and animal products like milk or butter.<br><br>\r\n\r\nIf you remove all the traditional chocolate bars from the sugar and animal products like butter or milk, you\'ll be left with only one ingredient that really good for you: CACAO<br><br>\r\n\r\nBut what is cocoa and where does it come from? Is cocoa really good for health? And what is the best way to eat cocoa?<br><br>\r\n\r\nCacao comes from the Theobroma cacao tree, which in Greek means \"food of the gods\". The Aztecs really believed that cocoa was a gift from the gods.<br><br>\r\n\r\nCocoa consumption can be traced back 4,000 years to the Maya, Toltec and Aztec civilizations. The Aztecs not only used cocoa beans as currency, but also as a drink for the rich and elite. <br><br>\r\n\r\nRaw cocoa contains 4 times more antioxidants than regular dark chocolate and even 20 times more than blueberries. Furthermore, research the antioxidant content in cocoa which is even more beneficial for your health than tea.<br><br>\r\n\r\nHere are 03 cocoa products that are highly appreciated by health-conscious users.<br><br>\r\n\r\nCocoa Nibs (Cacao nibs)<br><br>\r\n\r\nAfter harvesting, cocoa beans are pulled from the pods, fermented and dried. Cacao Nibs are simply crushed crumbs from those raw cacao beans<br><br>\r\n\r\nThey are among the least processed cocoa products on the market and are significantly lower in sugar than other chocolate products, making them a healthier alternative to chocolate. chocolate lovers.<br><br>\r\n\r\nCocoa Powder Raw <br><br>\r\n\r\nCompared with chocolate powder, natural cocoa powder has a light brown color, is acidic, and has a very strong chocolate smell. For unalkali-treated cocoa powder: characteristic bitter taste, sometimes slightly sour taste<br><br>\r\n\r\nCocoa powder is one of the richest sources of polyphenols. It is especially high in flavanols, which have strong antioxidant and anti-inflammatory effects. They all have positive health effects, like better blood circulation, lower blood pressure, and improved cholesterol and blood sugar levels<br><br>\r\n\r\nDark Chocolate<br><br>\r\n\r\nDark chocolate is rich in minerals, such as iron, magnesium, and zinc. The cocoa in dark chocolate also contains antioxidants called flavonoids, which may offer a number of health benefits.<br><br>\r\n\r\nDark chocolate is like a lot of chocolate available in the market in bar form. But the point here is to choose quality dark chocolate with 70% or higher cocoa content.<br><br>\r\n\r\nCocoa has captivated the world for thousands of years and is an important part of modern cuisine in the form of chocolate. Remember that chocolate still contains significant amounts of sugar and fat, so if you\'re going to use it, stick to it in moderation and combine it with a healthy balanced diet.<br>< br>', 'blog3.jpg', '2022-07-14'),
(5, 'NATURAL \"SUPERFOODS\" BENEFITS OF FOOD', 'In terms of nutrition, there is no such thing as a specific food called a \"superfood\", because we cannot get all the nutrients our bodies need to regenerate and maintain energy from just one dish.\r\nHowever, in nature, there are still food groups with outstanding nutritional content and positive effects on health, so when combining them in a balanced diet, it helps to strengthen immunity and has health benefits. can prevent some chronic diseases.\r\nDark green vegetables: kale, kale, spinach, cruciferous vegetables… are a great source of nutrients including folate, zinc, calcium, iron, magnesium, vitamin C and fiber. . <br><br>\r\n\r\nBerries: Strawberries, grapes, blueberries, raspberries… provide vitamins, minerals, fiber and antioxidants, which have been linked to a reduced risk of heart disease, cancer and improved digestion. <br><br>\r\n\r\nGreen tea is rich in antioxidants with many health benefits, including the ability to prevent cancer. One of the most common antioxidants in green tea is the catechin epigallocatechin gallate, or EGCG.<br><br>\r\n\r\nLegumes are a good source of B vitamins, various minerals, protein and fiber. Many studies show that they help improve type 2 diabetes, as well as lower blood pressure and cholesterol.<br><br>\r\n\r\nNuts and seeds are high in fiber and heart-healthy fats. Interestingly, despite being high in calories, they can aid weight loss when included in the right diet.<br><br>\r\n\r\nKefir/Yogurt contains protein, calcium, B vitamins, potassium and probiotics. Fermented and probiotic-rich foods offer many health benefits such as lowering cholesterol, lowering blood pressure, improving digestion and anti-inflammatory effects<br><br>\r\n\r\nThe spice garlic – ginger – turmeric is effective in lowering cholesterol and blood pressure, as well as supporting immune function<br><br>\r\n\r\nSeaweed contains a lot of vitamin K, folate and especially iodine – nutrients that are difficult to find in other terrestrial plants.<br><br>\r\n\r\nSweet potato: despite its sweet taste, sweet potato does not raise blood sugar, on the contrary it has high nutritional value thanks to its potassium, fiber and vitamins A and C.<br><br>\r\n\r\nIn addition, some other foods such as mushrooms, eggs, olive oil, salmon, avocados... are also very good to include in the daily menu.', 'blog4.jpg', '2022-06-30'),
(6, 'SUPER FOODS | SUPER FOOD BENEFITS YOU KNOW?', 'Superfoods are packed with nutrients and can provide your body with the vitamins and minerals you need to maintain, grow and feel healthier.<br>\r\nThere is no exact definition of what constitutes a \"superfood\". However, superfoods are considered nutritional powerhouses that provide large amounts of antioxidants, phytochemicals (chemicals in plants responsible for color and smell), vitamins and minerals.<br>\r\nYou probably already know that Western or Eastern medicine mostly uses ingredients derived from plants rich in nutrients and vitamins. And most superfoods are mostly plant-based, but some are fish and dairy…<br>\r\nThe high levels of vitamins and minerals found in superfoods can help your body prevent disease and keep you healthier.<br>\r\nWhen incorporated into a balanced diet, these foods can promote heart health, lose weight, improve energy levels and even reduce the effects of aging.<br>\r\nAntioxidants found in many superfoods may help prevent cancer, while healthy fats may reduce your risk of heart disease.\r\nFiber, also found in many superfoods, can help prevent diabetes and digestive problems while phytochemicals have many health benefits including reducing the risk of developing cardiovascular diseases. <br>\r\nSuperfoods are also known to protect your organs from toxins, help lower cholesterol, regulate metabolism and reduce inflammation.<br>\r\nThese are all great reasons why you might want to add one or more superfoods to your routine.<br>', 'blog1.jpg', '2022-06-09'),
(7, 'ALMONDY LAND | INTERESTING FACTS', 'Ground almonds also known as Tiger Nuts. It\'s not actually seeds, they\'re actually edible bulbs. <br><br>\r\n\r\nTiger nuts are also known as bear berries, Chufa nuts, Yellow Nutsedge and Ground Almonds.<br><br>\r\n\r\nThey have a sweet flavor that provides a luxurious, rich and nutritious…, nutty flavor and they can be roasted, dried or baked.<br><br>\r\n\r\nTiger Nuts were first cultivated by the ancient Egyptians and are now extremely popular in Spain. The place is widely used and is the main ingredient of Horchata drink. An extremely famous drink of this country of Gaur.<br><br>\r\n\r\nIn addition, Tiger Seed milk is also an extremely nutritious and delicious drink that you must try once in your life.<br><br>\r\n\r\nWhat about the use of Tiger Nuts – What about this earthy almond?<br><br>\r\n\r\nThanks to its multitude of health benefits, Tiger Nuts is back, gaining increasing popularity in the market since the last few years.<br><br>\r\n\r\nTiger Nuts are tubers rich in fiber, vitamins, minerals and other beneficial plant compounds, which are beneficial compounds that help protect your body against aging and diseases like cancer and heart disease. <br>\r\nTiger Nuts are a good source of insoluble fiber, which can prevent constipation and keep your digestion smooth.<br>\r\nTiger Nuts are rich in fiber and arginine, both of which may contribute to lower blood sugar.<br>\r\nTiger Nuts are rich in heart-healthy fats. Tiger seeds may contribute to strengthening the immune system.<br>', 'blog6.jpg', '2022-05-18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Acoustic Guitar'),
(2, 'Classic Guitar'),
(3, 'Electric Guitar'),
(4, 'Bass Guitar'),
(5, 'Accessory');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `comment` varchar(200) DEFAULT NULL,
  `staff_id` varchar(128) DEFAULT NULL,
  `reply` varchar(200) DEFAULT NULL,
  `created_DateRep` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `product_id`, `member_id`, `created_date`, `comment`, `staff_id`, `reply`, `created_DateRep`) VALUES
(1, 5, 10, '2022-07-05 23:32:36', 'Good!', 'Admin', 'Thanks for your respond!', '2022-07-06 11:00:00'),
(2, 5, 1, '2022-07-05 23:46:17', 'So good!', NULL, NULL, NULL),
(3, 5, 3, '2022-07-06 00:17:26', 'GREAT !!!', NULL, NULL, NULL),
(4, 29, 10, '2022-07-06 16:25:23', 'Good !', NULL, NULL, NULL),
(5, 30, 10, '2022-07-06 16:25:39', 'Not bad!', NULL, NULL, NULL),
(7, 16, 1, '2022-07-06 16:40:51', 'So good!', NULL, NULL, NULL),
(8, 14, 10, '2022-07-07 22:14:25', 'So bad!', 'Admin', 'Thanks for your respond! We will try to modify.', '2022-07-07 22:15:02'),
(9, 12, 10, '2022-07-11 00:23:34', 'So good!', 'Admin', 'Thanks for your respond!', '2022-07-11 00:23:50'),
(10, 110, 10, '2022-07-13 13:40:22', 'GREAT !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! however so cheap !!!', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `picture` varchar(200) DEFAULT NULL,
  `fullname` varchar(200) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `members`
--

INSERT INTO `members` (`id`, `email`, `password`, `picture`, `fullname`, `tel`, `address`, `active`) VALUES
(1, 'abc@gmail.com', '123', 'avatar.png', 'abcd', '0123456789', '0123456789', 1),
(2, 'abc1@gmail.com', '1234', 'avatar04.png', 'abc', '0123456789', '0123456789', 1),
(3, 'abc2@gmail.com', '123', 'avatar.png', 'abc2', '01234567896', 'tp hcm', 1),
(8, 'abc4@gmail.com', '123', 'avatar2.png', 'abc4', '1212121222', 'Da Nang', 1),
(10, 'dinhducn7@gmail.com', '0909', 'avt2.jpeg', 'Ducvippro', '0909090909', 'tp hcm', 1),
(11, '2112312ss@gmail.com', 'Trangha18', 'img1.png', 'Trần Quang Thái Phụng', '0393445013', '481/7A Trường Chinh, Tân Bình', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `date` datetime NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'waiting',
  `total_amount` decimal(10,2) NOT NULL,
  `shipping_name` varchar(100) DEFAULT NULL,
  `shipping_mobile` varchar(15) DEFAULT NULL,
  `shipping_email` varchar(200) DEFAULT NULL,
  `shipping_address` varchar(200) NOT NULL,
  `payment_term` tinyint(4) NOT NULL,
  `staff_id` varchar(200) DEFAULT NULL,
  `delivered_date` date DEFAULT NULL,
  `shipping_fee` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `member_id`, `date`, `status`, `total_amount`, `shipping_name`, `shipping_mobile`, `shipping_email`, `shipping_address`, `payment_term`, `staff_id`, `delivered_date`, `shipping_fee`, `updated_at`, `created_at`) VALUES
(52, NULL, '2022-07-01 20:20:11', 'waiting', '2.00', NULL, NULL, 'haquangduy322@gmail.com', 'Đông Nai', 0, 'staff1', NULL, NULL, '2022-07-01 13:20:27', '2022-07-01 13:20:27'),
(53, NULL, '2022-07-01 20:23:23', 'waiting', '2.00', NULL, NULL, 'Hoangnhu270503@gmail.com', 'Đông Nai', 0, NULL, NULL, NULL, '2022-07-01 13:23:37', '2022-07-01 13:23:37'),
(54, NULL, '2022-07-01 20:38:02', 'waiting', '2.00', NULL, NULL, 'laitrang06062003@gmail.com', 'Dong Nai', 0, NULL, NULL, NULL, '2022-07-01 13:38:18', '2022-07-01 13:38:18'),
(55, NULL, '2022-07-01 20:52:44', 'waiting', '2.00', NULL, NULL, 'smphucnguyen@gmail.com', 'Đồng Nai', 0, NULL, NULL, NULL, '2022-07-01 13:52:56', '2022-07-01 13:52:56'),
(58, 10, '2022-07-02 18:58:45', 'confirm', '2.00', 'Duc', '0937655080', 'dinhducn7@gmail.com', '491/5 Lê Văn Sỹ, Phường 12, Quận 3, TP HCM', 0, 'staff2', '2022-07-16', 0, '2022-07-02 11:58:48', '2022-07-02 11:58:48'),
(59, 10, '2022-07-02 19:01:17', 'confirm', '16.00', 'Duc', '0937655080', 'dinhducn7@gmail.com', '491/5 Lê Văn Sỹ, Phường 12, Quận 3, TP HCM', 0, 'staff1', '2022-07-22', 0, '2022-07-02 12:01:22', '2022-07-02 12:01:22'),
(60, NULL, '2022-07-02 19:39:45', 'waiting', '20.00', NULL, NULL, 'nguyenvuminhthu977@gmail.com', 'Đồng Nai', 0, NULL, NULL, NULL, '2022-07-02 12:40:01', '2022-07-02 12:40:01'),
(61, NULL, '2022-07-03 19:39:15', 'waiting', '4.00', NULL, NULL, 'vydang19102003@gmail.com', 'Đồng Nai', 0, NULL, NULL, NULL, '2022-07-03 12:39:34', '2022-07-03 12:39:34'),
(68, 10, '2022-07-04 10:20:26', 'waiting', '2.00', NULL, NULL, 'dinhducn7@gmail.com', '491/5 Lê Văn Sỹ, Phường 12, Quận 3, TP HCM', 0, NULL, NULL, NULL, '2022-07-04 03:20:29', '2022-07-04 03:20:29'),
(70, 10, '2022-07-04 10:27:41', 'waiting', '3.00', NULL, NULL, 'dinhducn7@gmail.com', '491/5 Lê Văn Sỹ, Phường 12, Quận 3, TP HCM', 0, NULL, NULL, NULL, '2022-07-04 03:27:44', '2022-07-04 03:27:44'),
(71, 10, '2022-07-13 13:38:23', 'waiting', '200002.00', NULL, NULL, 'dinhducn7@gmail.com', '491/5 Lê Văn Sỹ, Phường 12, Quận 3, TP HCM', 0, NULL, NULL, NULL, '2022-07-13 06:38:40', '2022-07-13 06:38:40'),
(72, 11, '2022-07-18 16:59:25', 'waiting', '229.48', NULL, NULL, '2112312ss@gmail.com', '481/7A Trường Chinh, Tân Bình', 0, NULL, NULL, NULL, '2022-07-18 09:59:32', '2022-07-18 09:59:32'),
(73, 11, '2022-07-18 16:59:25', 'waiting', '229.48', NULL, NULL, '2112312ss@gmail.com', '481/7A Trường Chinh, Tân Bình', 0, NULL, NULL, NULL, '2022-07-18 09:59:32', '2022-07-18 09:59:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_item`
--

CREATE TABLE `order_item` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(4) NOT NULL,
  `price` int(11) NOT NULL,
  `amt` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order_item`
--

INSERT INTO `order_item` (`id`, `order_id`, `product_id`, `qty`, `price`, `amt`, `updated_at`, `created_at`) VALUES
(50, 52, 5, 1, 2, 2, '2022-07-01 13:20:27', '2022-07-01 13:20:27'),
(51, 53, 5, 1, 2, 2, '2022-07-01 13:23:37', '2022-07-01 13:23:37'),
(52, 54, 5, 1, 2, 2, '2022-07-01 13:38:18', '2022-07-01 13:38:18'),
(53, 55, 5, 1, 2, 2, '2022-07-01 13:52:56', '2022-07-01 13:52:56'),
(56, 58, 5, 1, 2, 2, '2022-07-02 11:58:48', '2022-07-02 11:58:48'),
(57, 59, 5, 1, 2, 2, '2022-07-02 12:01:22', '2022-07-02 12:01:22'),
(58, 59, 21, 1, 2, 2, '2022-07-02 12:01:22', '2022-07-02 12:01:22'),
(59, 59, 30, 1, 2, 2, '2022-07-02 12:01:22', '2022-07-02 12:01:22'),
(60, 59, 29, 1, 3, 3, '2022-07-02 12:01:22', '2022-07-02 12:01:22'),
(61, 59, 49, 1, 3, 3, '2022-07-02 12:01:22', '2022-07-02 12:01:22'),
(62, 59, 47, 1, 4, 4, '2022-07-02 12:01:22', '2022-07-02 12:01:22'),
(63, 60, 5, 10, 2, 20, '2022-07-02 12:40:01', '2022-07-02 12:40:01'),
(64, 61, 5, 2, 2, 4, '2022-07-03 12:39:34', '2022-07-03 12:39:34'),
(72, 68, 5, 1, 2, 2, '2022-07-04 03:20:30', '2022-07-04 03:20:30'),
(74, 70, 29, 1, 3, 3, '2022-07-04 03:27:44', '2022-07-04 03:27:44'),
(75, 71, 200, 100003, 2, 200006, '2022-07-13 06:38:40', '2022-07-13 06:38:40'),
(76, 71, 13, 6, 3, 18, '2022-07-13 06:38:40', '2022-07-13 06:38:40'),
(77, 71, 109, -2, 11, -22, '2022-07-13 06:38:40', '2022-07-13 06:38:40'),
(78, 72, 2, 1, 68, 68, '2022-07-18 09:59:32', '2022-07-18 09:59:32'),
(79, 72, 1, 1, 161, 161, '2022-07-18 09:59:32', '2022-07-18 09:59:32'),
(80, 73, 2, 1, 68, 68, '2022-07-18 09:59:32', '2022-07-18 09:59:32'),
(81, 73, 1, 1, 161, 161, '2022-07-18 09:59:32', '2022-07-18 09:59:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` mediumtext NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(128) NOT NULL,
  `inventory_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `description`, `category_id`, `image`, `inventory_qty`) VALUES
(1, 'Mitchell O120CESB Auditorium Acoustic Guitar 3-Color Sunburst', '161.49', 'The auditorium-sized Mitchell O120CESB cutaway acoustic-electric guitar is perfect for musicians looking to expand their arsenal or for those who find larger guitars less comfortable. It features a select spruce top and mahogany back and sides for great tone and remarkably loud volume. Multi-ply body binding, abalone soundhole rosette and a high-gloss vintage sunburst finish add to its stunning good looks, giving it the classic vibe of a timeless instrument. The O120CESB auditorium also features a beautifully bound fingerboard and sealed, die-cast tuners for easy and stable tuning. Plus, built-in top-grade electronics with 3-band EQ and tuner let you tailor your sound then amplify it through any instrument amplifier or PA system.', 1, 'img1.png', 200),
(2, 'Rogue RA-090 Dreadnought Acoustic Guitar Sunburst', '67.99', 'From Rogue comes this amazing deal in the RA-090 gloss-finished dreadnought acoustic guitar. The Rogue RA-090 is an ideal instrument for the beginner, or young musician. The body depth and width bring out balanced tone and plenty of projection to be heard from across the room. This ultra-affordable dreadnought acoustic guitar features a whitewood body, which brings out lots of mid-range punch. The nato neck adds sustain without losing any strength in tone. The painted maple bridge and fingerboard add clarity to each note, and a striking look to the front of the guitar. The RA-090s C-shape neck, 1-2/3 nut width and 16 radius help with intricate fretboard movements when running up and down the 20 frets. The RA-090 also features nickel hardware and covered tuners. This Rogue acoustic guitar will certainly get the job done, at a price that anybody can afford.', 1, 'img2.png', 250),
(3, 'Rogue RD80 Dreadnought Acoustic Guitar Sunburst', '93.49', 'The Rogue RD80 dreadnought acoustic guitar is an epic bargain you can not beat the features you get for the price. Mahogany stained back and sides with a bound blonde basswood top. The RD80 also features a nato neck with a bound sonokelin fingerboard and bridge. Top it all off with chrome hardware and you have a great starter guitar at a killer price.', 1, 'img3.png', 100),
(4, 'Rogue Starter Acoustic Guitar Blue Burst', '67.99', 'The small-bodied Rogue Starter Acoustic Guitar is an amazing deal for a starter guitar. Its smaller profile (7/8 scale) makes it very playable for kids or aspiring guitarists with smaller body frames and hands. It has a maple neck and select hardwood fretboard which produce an exquisite tone.', 1, 'img4.png', 50),
(5, 'Fender FA-135CE Concert Acoustic-Electric Guitar Black', '249.99', 'The Fender FA-135CE Concert acoustic-electric guitar is built on the concert-style platform for a sleek, modern design. The laminated spruce top features X-bracing for bright, punchy tone, ideal for lead guitar. The neck is nato, and the back and sides are laminated basswood—both tonewoods known for letting the mid and high frequencies sing out. Thanks to the basswood back and sides, the Fender FA-135CE is very light, avoiding strain to your neck or back during prolonged playing. The chrome tuners offer precision tuning. The guitar also comes with an impressive electronics system, featuring the Fishman ION-T preamp and built-in chromatic tuner, which provides lightning-fast tuning and amplification. The preamp features a volume dial, phase and contour buttons, and a tuner power button.', 1, 'img5.jpg', 50),
(6, 'RainSong Black Ice Series BI-WS1000N2 Graphite Acoustic-Electric Guitar Carbon', '3.10', 'The RainSong Black Ice Series BI-WS1000N2 is an acoustic-electric guitar that embodies artistry in every graphite fiber from which it constructed. The soundboard on this RainSong guitar is meticulously crafted individually to make every Black Ice guitar unique, aesthetically pleasing, but not overbuilt. The BI-WS1000N2 is a wonderfully versatile guitar. Combining the best qualities of large- and small-bodied guitars, this body shape is ideally suited for a variety of musical situations. A large, deep chamber gives the WS strong projection and rich bass. The narrow waist and tight upper bout encourage ringing treble, good balance and clear definition of individual notes. Overall, RainSong WS guitars are impeccably balanced. The shapely curves and light weight make this RainSong Black Ice Guitar comfortable to cradle or to stand with. The RainSong Black Ice guitar extra-deep cutaway encourages playing up the fretboard.', 1, 'img7.jpg', 20),
(7, 'Mitchell MX430QABNAT Exotic Series Acoustic-Electric Quilted Ash Burl Quilted Ash Burl Natural', '407.99', 'The Mitchell MX430QABNAT Grand Auditorium Acoustic-Electric Guitar offers superior playability and comfort, along with a head-urning exotic finish that looks great on stage and in your living room. The MX430QABNAT\'s top, back, and sides are crafted from exquisite, highly-figured quilted ash burl, complemented by a lush, custom abalone rosette and attractive multi-ply binding. The comfortable, shallow body with Venetian cutaway is ideal for demanding players who prefer the comfort of a smaller instrument with easy access to higher frets. The MX430QABNAT features top-grade Fishman Presys electronics including preamp and pickup, with a convenient, built-in tuner and 3-band EQ that allows you to dial in the perfect tone for every venue. Comes complete with sealed, die-cast black nickel tuners, compensated bridge, and a two-way truss rod for reliable performance. Includes premium Addario EXP16 .012–.053 strings. Available in gorgeous Midnight Black Edge Burst and Quilted Ash Burl Natural finishes.', 1, 'img7.jpg', 10),
(8, 'Lucero LC100 Classical Guitar Black', '135.99', 'The Lucero LC100 Classical Guitar features a laminated spruce top and mahogany back and sides. An excellent guitar for the beginner. Case sold separately.', 1, 'img8.jpg', 200),
(9, 'Mitchell D120 Dreadnought Acoustic Guitar Black', '127.49', 'The workhorse of the Mitchell acoustic line, the D120 Dreadnought acoustic guitar features a select spruce top with a lighter finish, and a mahogany neck and jatoba fretboard. Its mahogany back and sides, thinner finish and advanced, forward-shifted scalloped bracing give the D120 a solid, rich tone and outstanding projection that is ideal for stage and studio. A modern, slim-profile neck design makes the D120 a breeze to play on any position on the neck, ideal for both chording and solo work. The attractive, multi-ply binding on the neck and body, and chrome, high-ratio tuners complete the outstanding looks of this traditional instrument. Comes complete with a limited lifetime warranty.', 1, 'img9.jpg', 50),
(10, 'Rogue Starter Acoustic Guitar Blue Burst', '67.99', 'The small-bodied Rogue Starter Acoustic Guitar is an amazing deal for a starter guitar. Its smaller profile  makes it very playable for kids or aspiring guitarists with smaller body frames and hands. It has a maple neck and select hardwood fretboard which produce an exquisite tone.', 1, 'img10.jpg', 100),
(11, 'Rogue RA-090 Concert Acoustic Guitar Black', '76.49', 'The super-affordable Rogue RA-090 Concert Acoustic Guitar is an excellent entry-level 25.4 in. scale guitar with laminate whitewood body and top finished off by a natural gloss to keep it in peak condition for years. Other features include a nato C-shaped neck, simulated rosewood fingerboard, simulated belly bridge, and an ivory color plastic saddle and nut.', 1, 'img11.jpg', 60),
(12, 'Yamaha F335 Acoustic Guitar Black', '144.49', 'Yamaha\'s F335 gives you that classic dreadnought shape and sound at a price that won\'t break your bank. The F335 tonewood combination includes a laminate spruce top, rosewood fingerboard and bridge, and meranti back and sides. Gold die-cast tuners provide smooth and accurate tuning while a tortoise-pattern pickguard gives a bit more style.', 1, 'img12.jpg', 300),
(13, 'TANGLEWOOD TWCR DCE CROSSROADS DREADNOUGHT ACOUSTIC', '156.00', 'Crossroads displays homage to the style and sound of classical American musical instruments from the 1930s. The 30s were a difficult time across America with the great depression of the community on its knees and the war and pain of the poor and the famine recorded in journals and diaries and all . is in the song, across the country. Some of the people who are considered the best and most influential musicians in the world created a rhythmic sound all the time and sang their troubles, a sound we think today. is blues music.', 1, 'img13.jpg', 50),
(14, 'Taylor 214CE', '1.14', 'Belonging to the 200 series made of Sitka spruce to help balance the tone, the Taylor 214CE Guitar stands out even more with its sharp white border on an all-black body. Built around the basics, the Venetian cross section expands the tonal range to create a guitar that delivers a great experience, clear tones and tones, and a balanced and realistic sound. Don\'t miss it if you\'re looking for a guitar that perfect in style and quality, especially the premium Tobacco sunburst 214CE-SB and 214CE-BLK series.', 1, 'img14.jpg', 20),
(15, 'Taylor AD17E', '1.79', 'With the American-made acoustic guitar series in American Dream, Bob Taylor and Andy Powers opened a new chapter in Taylor\'s value and performance. It has never been so affordable to own an American-made Taylor guitar with top features. A Grand Pacific AD17e sloping shoulder dreadnought crafted from solid tonewood (spruce, ovangkol and mahogany). Taylor\'s V-Class Bracing gives the AD17e impressive durability and a clear, pure tone that stands out even in the studio. Overall, the American Dream Taylor AD17e is a professional instrument at a price that guarantees you won not be afraid to take it on the road. The onboard Taylor ES2 electronics - a hallmark - make the AD17e a great choice for plug-and-play recording and performance.', 1, 'img15.png', 30),
(16, 'Taylor PS14ce, Macassar', '11.09', 'The pinnacle of the Taylor series is the Presentation series presented with the highest level of craftsmanship. Like its brothers in the series, the Grand Auditorium\'s body shape becomes extremely prominent with Indonesian Macassar ebony grain on the back and sides combined with high-grade Sitka spruce on the front. A meticulously carved ebony armrest combined with beautiful inlaid notes provides a very pleasant feeling to play. In addition, there are many other subtle details including: vibrant paua rim, Macassar ebony backtrap, and a Nouveau vine-shaped fretboard that adds elegance with a shiny top. and bridge motifs, a Gotoh Gold string tuner, a bone comb and bridge, a Venetian cutaway and Taylor\'s Expression System 2 electronics.', 1, 'img16.jpg', 10),
(17, 'Greg Bennett D-1CE NAT', '565.99', 'The Greg Bennett D-1CE is an electro acoustic guitar with a smooth mahogany sound and a dreadnought shape and profile that allows access to the highest frets. Combined with 20 keys on a rosewood keyboard, rosewood and bone bridge, PPS nut, high-quality electronics, and chrome tuners give the D- 1CE has a very nice tone, has a smooth look with a very attractive natural lacquer finish.', 1, 'img17.jpg', 20),
(18, 'Takamine GD93CE-NAT', '555.08', 'The Takamine GD93CE Guitar is a distinct dreadnought guitar with a sophisticated and modern look. The GD93CE features a solid wood front panel and an unusual three-piece back design that gives it a premium look and distinct sound. The guitar gives players a sense of enjoyment because of this difference and personalization.', 1, 'img18.jpg', 50),
(19, 'Takamine GD51', '336.04', 'The combination of solid spruce on the front, rosewood on the back, and on the sides gives the GD51 guitar the big sound and powerful bass you expect from a guitar. Dreadnought guitar. The slender mahogany neck with a 12-inch radius neck curvature that secures the rosewood keys gives the player a great feel and is also easy to play in a variety of styles. The rosewood split horseback design allows the player to hit high chords and deliver sweet sounds when playing single-note.', 1, 'img19.jpg', 70),
(20, 'Fender CD-60SCE', '377.88', 'The Fender CD-60SCE Dreadnought cutaway Acoustic guitar boasts features you expect on much more expensive versions, with a solid spruce top and three versions to choose from: Sunburst, Black and Natural.', 1, 'img20.jpg', 30),
(21, 'Cordoba 55FCE Negra - Ziricote W/C', '2.16', '55FCE Negra adds an extra layer of exotic zircote on the back and sides to the stage-ready 55FCE. The 55FCE Negra\'s slim, feedback-resistant body is handcrafted, making this Spain-made guitar an essential tool in the performing musician\'s arsenal. Gipsy Kings of choice, its solid European spruce top is combined with ziricote, delivering rich, smooth sound that fills the room.', 2, 'img21.jpg', 40),
(22, 'Takamine TC132SC', '1.45', 'This nylon-string classical guitar adheres to the design of the traditional instrument and adheres to the original drawing by Antonio Torres. It is the first choice of traditional latin and jazz musicians when pure nylon string tones are needed at amplified volumes. Full-grain cedar top for rich, warm tones with plenty of dynamic range. The rosewood back panel resonates well and makes the sound quality superb. Mahogany neck with truss rod pair for perfect playing in any environment.', 2, 'img22.jpg', 30),
(23, 'Takamine TC135SC', '1.77', 'Takamine Japanese Guitars offer a wider selection of styles, colors and woods than many others. See Japanese guitar prices on Viet Thuong. Takamne is designed and assembled under the supervision of leading luthiers.', 2, 'img23.jpg', 50),
(24, 'Takamine GC3', '268.57', 'The Takamine GC3-NAT guitar is a solidly built classical guitar with a top top, glossy finish, and great nylon string sound that lives up to expectations from classical guitar players like Takamine.', 2, 'img24.jpg', 50),
(25, 'Kapok LC-18', '84.97', 'The Kapok LC-18 4/4 Classic Guitar with a cheap price, sleek design, good sound will be the number one choice of classical guitar beginners.', 2, 'img25.jpg', 50),
(26, 'Takamine C132S', '1.04', 'The Takamine C132S Guitar is a classic but has many outstanding advantages from features to design. The C132S guitar is handcrafted in the professional facilities of Takamine - where it was born. variety of high-quality musical instruments over the past five decades.', 2, 'img26.jpg', 60),
(27, 'Cordoba C3M', '262.60', 'Cordoba C3M is one of the most popular guitars. Light and very pleasant to play. The C3M is constructed of Solid Cedar Top, Mahogany Back And Sides wood with a matte finish. Hand-assembled according to the classic Spanish trend. The fan bracing design provides a beautiful, soft and balanced tone. Features a Rosewood bridge and fretboard with rose inlay hole and Savarez strings.', 2, 'img27.jpg', 50),
(28, 'Takamine TH90', '2.03', 'The Takamine TH90 is a prime example of luthier art, the Master Luthier Mass Hirade classical guitar is hand crafted in the Takamine facility in Japan. Delivering the perfect sound, in a stylish design', 2, 'img28.jpg', 50),
(29, 'Suzuki SNG-6', '98.00', 'Suzuki SNG 6 NL with Soundboard (Top) made of Spruce, Back and Sides are made of Linden, creating a clear and warm sound, Neck is made of Catalpa Wood so the depth of the sound when playing the strings.', 2, 'img29.jpg', 40),
(30, 'Cordoba GK Studio', '797.18', 'Cordoba GK Studio được tích hợp hệ thống Fishman Presys Blend kết hợp với Cutaway-Electric Style Neck giúp canh chỉnh âm thanh chính xác và nhanh chóng . Đồng thời, cũng giúp âm thanh vang, sáng, giai điệu đa dạng hơn nhờ vào thiết kế mới của sound-board.', 2, 'img30.jpg', 50),
(31, 'Takamine P3FCN', '1.27', 'Takamine Pro Series Acoustic-electric P3FCN FXC nylon string guitar will delight you with its sweet sound, beautiful looks, and varied playability. Pick up the guitar, let your hands touch the comfortable mahogany neck and be entertained with the warm, rich echoes of the solid cedar front panel. Play single notes and let your fingers glide over the rosewood frets that are fastened to the neck with the sophistication of this Venetian cutout of this P3FCN. Plug in an amplifier to amplify the sound of the guitar, and you will have a clearer experience of the attractive nylon strings. As people say about P3FCN – playing is love.', 2, 'img31.jpg', 80),
(32, 'Takamine GC3CE', '405.21', 'The Takamine GC3CE-NAT guitar is a solidly built classical guitar with a top top, glossy finish, and great nylon string sound that lives up to expectations from classical guitar players like Takamine. Perfect for any player looking for a classical guitar, with the GC3 combining solid spruce and mahogany backing, resonating for a rich sound.', 2, 'img32.jpg', 90),
(33, 'ORTEGA R121', '223.74', 'Otega is a brand known for producing classic Spanish-style acoustic guitars. R121 - a Nylon stringed Calssic guitar is no exception to that general flow. The guitar is designed with a large body, completely finished in mahogany, with a glossy satin finish for a thick, loud and warm sound. The external beauty of the R121 is also an outstanding advantage. The neck is designed to be easy to hold, with 12 keys, making it convenient for players of all ages and playing purposes.', 2, 'img33.jpg', 50),
(34, 'ORTEGA R131SN', '298.46', 'The R131SN is part of Ortega\'s Family Series, focused on new level players and their comfort. If you\'re interested in a beginner-friendly guitar, definitely check out some of their other instruments as they come in all sizes and shapes and forms.', 2, 'img34.jpg', 50),
(35, 'Fender CN-140SCE', '365.76', 'Classic Design CN models combine the easy playability and distinct tone of nylon strings with the comfort of steel string spacing. Fender has replaced the wide neck commonly found on classical guitars with an easy-to-play slim neck profile that provides a more comfortable feel. The CN-140SCE uses solid cedar for the top, along with rosewood back and sides for a warm and mellow tone.', 2, 'img35.jpg', 50),
(36, 'Taylor 114CE-N', '1.01', 'With a flexible and popular body shape, the Grand Auditorium is a mid-sized evolution of the Dreadnought and Grand Concert forms. Traditionally, if the Dreadnought has been seen as a guitar for flatpickers, and the smaller Grand Concert is for fingerstyle players, the GA is designed for both styles. This design produces an original sound loud enough to handle mid-force plucking and fanning, but with an impressive balance in the spectrum, especially in the mid-range, helping to create notes. clear, suitable for both fan ball and fingerstyle play. The GA is overall shape is well suited to other instruments both in the audio studio and on stage, and singer-songwriters have taken advantage of the Taylor 114ce Guitar\'s utility in composing and traveling. with a guitar. Many people want a multi-style guitar, which is why the GA continues to be our bestseller. If you want a great all-purpose guitar, the Grand Auditorium won\'t let you down.', 2, 'img36.jpg', 70),
(37, 'Taylor Academy A12E-N', '828.35', 'The Taylor Academy A12E-N Guitar is the newest 2017 model from the Taylor guitar brand, featuring a sleek design and plenty of advanced features. Taylor Academy A12E-N is the product that will help you develop the musical abilities of a true artist. Taylor brings together an amazing line of Academy guitars with years of experience and meticulous craftsmanship. And the Academy A12E-N guitar is a great acoustic design at an incredibly affordable price point, ensuring both sound quality and affordability. The Academy A12E-N is made with premium materials to give you the ultimate acoustic instrument experience.', 2, 'img37.jpg', 60),
(38, 'Cordoba Protégé C1 Matiz - AQUA', '283.52', 'Featuring the fresh aesthetic of nylon string guitars, the Matiz line combines traditional toned maple and wood accents in four eye-catching colors: Aqua, Coral, Pale Sky and Classic Blue. Spruce top and back and mahogany backing bring shine and warmth to the nylon-string guitar, while a full-blown maple top, bridge, and neck give the C1 Matiz a whole new look with vivid tonal response. A satin polyurethane finish provides a layer of protection against cracks and scratches, while the ghost rosette pattern, designed in our traditional wooden asterisk pattern, allows for an eye-catching colored top. of C1 Matiz shines and takes center stage.', 2, 'img38.jpg', 50),
(39, 'Fender CN-60S, Black', '254.06', 'Fender CN-60S Classical Black lets people experience the convenience of nylon strings and the sound of steel strings', 2, 'img39.jpg', 10),
(40, 'Taylor 214CE-N', '1.46', 'The Taylor 214CE-N Series 200 Guitars are made from laminated rosewood, engineered with the basics to create a guitar that delivers a great experience, clear, balanced tone and tone and honest. This nylon guitar is the perfect fit for players looking for a different sound. The 214CE-N is packed full of features ready to fascinate guitarists with inspiring tone, playability, comfort and aesthetic appeal.', 2, 'img40.jpg', 50),
(41, 'Fender SQ Classic Vibe 70s Stratocaster HSS', '497.44', 'Part of the Strat models that were produced in the 1970s, the Classic Vibe 70s Stratocaster plays to the amazingly polite tone of the Fender-designed Pickup Single-Coil and 1 Humbucker Alnico duo. Player-friendly features include a slim, comfortable \"C\" neck profile with an easy-to-play 9.5\" neck and narrow frets, as well as a vintage-style tremolo system for a percussion effect. emotion. This old Squier series also takes inspiration from the 1970s, rich-looking nickel-plated hardware and a gloss finish for a vintage feel.', 3, 'img41.jpg', 50),
(42, 'Fender Player Plus Telecaster MN CMJ', '1.21', 'The Push-Pull switch keeps both highs on at the same time, resulting in higher body power and tone. The satin Tele Modern “C” Player Plus neck fits comfortably in your hand, with smooth-rolled edges for maximum comfort. The 12-inch radius key surface and 22 Medium Jumbo keys facilitate Lead and Bend sentences. The solid steel 6-Point Bridge section adds brightness and provides accurate intonation, and the locking tuner provides solid adjustment for quick, easy string changes. With classic Fender styling, advanced features and stunning new overlays, Player Plus Telecaster is the perfect tool to spark your creativity and stand out from the crowd.', 3, 'img42.jpg', 60),
(43, 'Fender SQ mustang bullet LRL', '202.82', 'Designed for players looking for an affordable, stylish and versatile instrument, the Bullet Mustang HH is an outstanding instrument. Highlights include a slim and lightweight body, an easy-to-play “C” neck, and a short 24” proportional length suitable for small hands. This model also boasts a pair of Pickups with three-way switching for tonal diversity and a Bridge 6 Saddle for dependable tuning stability.', 3, 'img43.jpg', 30),
(44, 'Fender Player Plus Stratocaster', '1.21', 'Combining a classic Fender design with exciting new overlays and player aids, Player Plus Stratocaster offers great playability and unmistakable style. At the heart of this Series is the trio of Pickup Player Plus Noiseless - bright, responsive, they deliver classic Strat tunes without the noise. An additional Push/Pull button on the tone control switches positions 1 and 2 for two sounds not commonly found on the Strat. The sleek satin modern “C” Player Plus Strat lever fits comfortably in your hand, with smooth-rolled edges for maximum comfort. The 12-inch radius keyboard and 22 medium jumbo frets facilitate smooth Slide and Bend skills, the 2-point tremolo lever provides classic vibrato, the locking tuner provides solid tuning and Make wire changes quick and easy. With classic Fender styling, cutting-edge features and stunning new finishes, Player Plus Stratocaster is the perfect tool to spark your creativity and stand out from the crowd.', 3, 'img44.jpg', 50),
(45, 'Squier AFFINITY SERIES™ STRATOCASTER® FMT HSS', '337.32', 'The Squier® Affinity Series™ Stratocaster® FMT HSS brings legendary design and quintessential tone to today aspiring guitarists. This Strat® look features a number of player-friendly innovations such as the slim and lightweight Flame Maple Top body, a slim and comfortable “C” Neck, a 2-point tremolo Bridge for superior vibrating action and a wind-up buckle with split axis for smooth, precise adjustment and easy editing. Equipped with a Squier Humbucker Pickup and 2 Singlecoils with 5-position switching for a wide variety of sounds, this guitar is ready to accompany any player at any stage.', 3, 'img45.jpg', 90),
(46, 'Squier CLASSIC VIBE 60S JAZZMASTER®', '483.59', 'The Classic Vibe \'60s Jazzmaster® is a faithful and striking homage to Fender\'s iconic love affair, creating the undeniable Jazzmaster tone of Fender-designed Singcold Pickup cars. Player-friendly features include a slim, comfortable \"C\" neck with an easy-to-play 9.5\" neck and narrow high frets, and a vintage-style tremolo system for expressive string-bending effects. Sensor and Bridge Saddle stabilize the wire firmly. This old Squier model also features 1960s-inspired markings, rich-looking nickel-plated hardware, and a sleek vintage-tinted antique finish for a vintage feel.', 3, 'img46.jpg', 20),
(47, 'Squier PARANORMAL OFFSET TELECASTER®', '486.76', 'The Paranormal Offset Telecaster® is the quintessential Fender fusion of features, combining the components of the iconic Tele® with the comfort and style of the Jazzmaster® shape. With Pickup Singlecoil lnico is designed by Fender 1 pair. This guitar is versatile timbre will last. Other pieces include the slim “C”-shaped Neck, the glossy finish for a sleek feel, and the chrome-plated buckle buckle that is sure to attract attention.', 3, 'img47.jpg', 40),
(48, 'Squier AFFINITY SERIES™ STRATOCASTER® HH', '290.35', 'Squier® Affinity Series™ Stratocaster® HH brings legendary design and quintessential tone to today aspiring guitar player. This Strat® look features a number of player-friendly innovations such as a slim and light body, a slim and comfortable “C” Neck, a 2-point tremolo Bridge for superior string vibration action and a winding buckle with split shaft for smooth, precise adjustment and easy editing. Equipped with a pair of Squier Pickups with 3-position switching for a wide variety of sounds, this guitar is ready to accompany any player at any stage.', 3, 'img48.jpg', 40),
(49, 'Squier AFFINITY SERIES™ JAZZMASTER®', '307.43', 'Squier® Affinity Series™ Jazzmaster® brings legendary design and quintessential tone to today aspiring guitarist. This Jazzmaster® build features a number of player-friendly innovations such as a slim and light body, a slim and comfortable “C” Neck, a 2-point bridge tremolo for superior string action and a winding buckle with split shaft for smooth, precise adjustment and easy editing. Equipped with a pair of Squier Singlecoil Pickups with 3-position switching for a wide variety of sounds, this guitar is ready to accompany any player at any stage.', 3, 'img49.jpg', 70),
(50, 'Fender SQ BULLET STRAT HT LRL', '1.29', 'Designed for players looking for an affordable, stylish and versatile instrument, the Bullet® embodies the classic look and tone that has become one of the most popular guitars of all time.', 3, 'img50.jpg', 80),
(51, 'FENDER AMERICAN ULTRA STRATOCASTER® HSS-RW-ULTRABURST', '2.24', 'American Ultra is our top-of-the-line guitar and bass line for discerning players who demand the ultimate in precision, performance, and tone. The American Ultra Stratocaster HSS features a unique “modern D” neck style with super-rolled keyboard edges for long hours of play comfort and a tapered heel that allows easy hitting the highest register. A quick 10”-14\" match radius fingerboard with 22 medium keys for easy and precise soloing, Ultra Noiseless™ and Ultra Double Tap™ Pickup, along with advanced string options, deliver tone Endless possibilities - no noise. The rear body contours are beautifully sculpted as if they were in action. This versatile, modern instrument will inspire you to take your playing to the next level.', 3, 'img51.jpg', 10),
(52, 'FENDER EOB SUSTAINER STRATOCASTER®', '1.47', 'Ed O\'Brien\'s enveloping, ethereal guitar style is an essential part of the sonic identity of \"Radiohead\". We teamed up with this famous guitarist to create the Ed O Brien Stratocaster - a unique instrument that embodies his sound. This inspirational guitar is perfect for creating lush, layered tonal landscapes and finding your own creative timbre.', 3, 'img52.jpg', 50),
(53, 'Fender SQ Bass J Affinity SLS', '251.92', 'A superb gateway into the timeless Fender® family, the Squier® Affinity Series™ Jazz Bass® brings legendary design and quintessential tone to today aspiring bassist. The J Bass® features a number of player-friendly innovations such as a slim and comfortable “C”-shaped neck, a 4-saddle Bridge for solid string stability, and a classic tuner buckle for smooth, precise tuning. Equipped with 2 J Bass Pickups and a Squier voice coil for a wide variety of timbres, this Series is ready to help lay the groundwork for any player at any stage.', 3, 'img53.jpg', 30),
(54, 'Fender B1 LTD 1962 STRAT MPL BT JRN - SFASNB', '1.52', 'At first glance, the Limited Edition 1962 Stratocaster seems to be a real classical instrument played and loved on stages for many years. However, upon closer inspection, players will find this creation is filled with hidden gems for a great playing experience. A select two-piece body features a Journeyman Relic lacquer finish, while a stain-slotted maple neck features a comfortable 60-style \"C-oval\", with a flat laminated maple fingerboard. prototype.', 3, 'img54.jpg', 10),
(55, 'Jackson JS SERIES DINKY™ JS12, AMARANTH FINGERBOARD', '2.45', 'The JS Series Dinky™ JS12 features a poplar stem, screwed maple speed lever with graphite reinforcement for rock-solid stability, and a 12”-radius amaranth neck with 24 jumbo frets and dotted inlays. white. The flat radius allows for easier selection, feels great in rhythm play, and handles fast troupes well. A pair of Jackson high-powered humbucking with ceramic magnets produce clear sound with multiple perimeters and can be shaped with a three-way toggle switch and single tone and volume controls. The JS12 features all-black hardware, including a synchronized tremolo bridge, molded tuners, and standard strap buttons.', 3, 'img55.jpg', 10),
(56, 'JS SERIES KELLY™ JS32T, AMARANTH FINGERBOARD', '3.72', 'The JS Series Kelly™ JS32T features a offset poplar body and a screwed maple rod with graphite reinforcement for rock-solid stability. Storing 24 jumbo frets and pear shark fin inlays, the 12”-16” compound radius fully adhesive amaranth creates the ideal playing surface for lightning-fast songs and solos. A pair of Jackson high power humbucking pickups with ceramic magnets produce clear sound with multiple perimeters and can be shaped with a three-way toggle switch and single tone and volume controls. The Kelly JS32T also has a chain adjuster and an adjustable die.', 3, 'img56.jpg', 10),
(57, 'JS SERIES KING V™ JS32T, AMARANTH FINGERBOARD, GLOSS BLACK', '3.79', 'The JS Series King V™ JS32T offers one of the most regal looks of our stellar performers at an affordable price point. The JS32T King V features a poplar body, screwed maple neck with graphite reinforcement, and a 12”-16” compound radius Fingerboard with 24 jumbo and inlay frets. Other features include Jackson dual high-power humbucking receivers with ceramic magnets and a three-way toggle switch.', 3, 'img57.jpg', 5),
(58, 'Fender Jcks Pro SL3M RAINBOW', '2.80', 'Pro SL3M premium features include a resonating basswood body and a maple rod throughout the body with a rim joint and graphite-reinforced bars that provide rigidity and stability to protect against bending and warping caused by heat and humidity. Hosted by 24 jumbo keys and inlaid with black piranha teeth, the 12”-16” combination radius maple fingerboard with 24 jumbo keys is designed for playing at high technical speed — curved by the nut for chords Comfortable, it flattens out as you move up the lever for increasingly fast play speeds and wide flexes without worry.', 3, 'img58.jpg', 20),
(59, 'JS SERIES WARRIOR™ JS32T, AMARANTH FINGERBOARD, NATURAL OIL', '3.23', 'The formidable Warrior™ JS32T features a nato body and screwed maple rod with graphite reinforcement for rock-solid stability. Storing 24 jumbo frets and shark fin inlays, the 12\"-16\" compound radius creates the ideal playing surface for songs and for lightning-fast solos. A pair of Jackson high-powered humbucking with ceramic magnets produce clear sound with multiple perimeters and can be shaped with a three-way toggle switch and single tone and volume controls.', 3, 'img59.jpg', 20),
(60, 'JACKSON JS SERIES RHOADS JS32T', '3.79', 'Bursting, ecstatic, and incredibly affordable, Jackson JS Series guitars take a giant leap forward, making it easy to play a variety of classic tunes, styles, and performance possibilities. more than ever. Some upgrades such as outstanding looks, premium ceramic magnetic pickup, graphite-reinforced maple neck, sturdy top and top, and black hardware provide a great experience. The JS32T Rhoads features a sleek basswood body, graphite-reinforced maple bolt-on neck, 12\"-16\" radius solid rosewood keyboard with 24 jumbo frets and styled inlays pearloid shark fins, and sturdy headboard Other features include two premium double humbucker Jackson pickups with ceramic magnets and 3-position switch, adjustable bridge, Black hardware and chrome tuner Available in white with black bevel and satin black.', 3, 'img60.jpg', 15),
(61, 'Squier AFFINITY SERIES™ PRECISION BASS® PJ', '333.90', 'The Squier® Affinity Series™ Precision Bass® PJ brings legendary design and quintessential tone to today aspiring bassists. This P Bass® features a number of player-friendly innovations such as a slim and lightweight body, a slim and comfortable “C” neck, and a vintage-style tuning buckle for smooth, precise tuning. Equipped with Neck P Bass Singlecoil Pickup. This model is ready to help lay the groundwork for any player at any stage.', 4, 'img61.jpg', 30),
(62, 'SQUIER VINTAGE MODIFIED JAZZ BASS', '371.90', 'Squier Vintage Modified Jazz Bass offers great Jazz bass sound with enhanced features a maple \"C\" shaped neck for player comfort and a professional snappy-sounding Fender® system for players. Best sound in perfect design.', 4, 'img62.jpg', 30),
(63, 'SQUIER AFFINITY J BASS', '241.25', 'Representing the best value in bass guitar design today, the Affinity Series Jazz Bass delivers powerful sound and responsive feel. The Affinity Series Jazz Bass is known for its comfortable playing, eye-catching looks, and full-featured versatility in one instrument. Strong, sturdy maple one-piece neck enhances vibrating movement from the strings. Rosewood used for the fretboard brings comfort to the player and gives the guitar a bright, soft, mellow, warm sound that is easy to enter into the heart.', 4, 'img63.jpg', 30),
(64, 'SQUIER CV 60s JAZZ BASS LRL 3TS', '454.74', 'A tribute to the decade of its birth, the Classic Vibe ‘60s Jazz Bass combines the luxurious playability that made it famous with the versatility and massive tone of its dual Fender-Designed alnico single-coil pickups. Player-friendly features include a slim and comfortable “C”-shaped neck profile with an easy-playing 9.5”-radius fingerboard and narrow-tall frets, as well as a vintage-style bridge with threaded saddles. This throwback Squier model also features 1960s inspired headstock markings, nickel-plated hardware and a slick vintage-tinted gloss neck finish for an old-school aesthetic vibe.', 4, 'img64.jpg', 20),
(65, 'SQUIER AFF J BASS V LRL BSB', '279.68', 'The Affinity Series™ Jazz Bass® V (five-string) is a value-priced version of the world famous Fender® Jazz Bass® guitar. It has the look and tone that everyone knows and loves, at an ultra-economical price point. Features include a one-piece maple neck with rosewood fingerboard, die-cast tuners, top-load bridge and single-coil Jazz Bass V pickups.', 4, 'img65.jpg', 30),
(66, 'Fender SQ BASS J AFFINITY', '258.33', 'A superb gateway into the timeless Fender® family, the Squier® Affinity Series™ Jazz Bass® brings legendary design and quintessential tone to today aspiring bassist. This J Bass® features a number of player-friendly innovations such as a slim and comfortable “C”-shaped neck, a 4-seat Bridge for solid string stability and a classic open-shifting tuner for smooth tuning. , exactly. Equipped with two J Bass grips and a Squier voice coil for a wide variety of tones, this model is ready to help lay the groundwork for any player at any stage.', 4, 'img66.jpg', 10),
(67, 'SQUIER CV 70s JAZZ BASS MN NAT', '497.44', 'The Classic Vibe 70s Jazz Bass® is a mash-up of the 1970s evolution of J Bass®, combining the luxurious playability that has made it famous with the versatility and big timbre of these guitars. Singlecoil Pickup designed by Fender. Player-friendly features include a slim, comfortable “C” neck with an easy-to-play 9.5” neck and narrow frets, as well as a classic-style Bridge. This old Squier model also features 1970s inspiration, rich-looking nickel-plated hardware and a glossy finish for a vintage feel.', 4, 'img67.jpg', 30),
(68, 'SQUIER AFFINITY J BASS V', '167.78', 'The Affinity Series™ Jazz Bass® V (five strings) is a quality and high-value version of the popular Fender electric guitars. With an eye-catching and familiar look, and a pleasing sound, it is the ideal choice for those looking for a quality electric guitar at an affordable price point. Affinity Series ™Jazz Bass® V (five strings) is especially suitable for modern bass players who practice for amateur or semi-professional purposes.', 4, 'img68.jpg', 20),
(69, 'Squier Affinity Series Precision Bass PJ BK', '241.25', 'Squier Affinity Series™ brings you the best of the guitar world. The Affinity Series Precision Bass PJ hits hard on the classic rock tone and feel, and the 2013 release features a new headstock logo design, black/white/black 3-layer pickguard, Jazz Bass® single-coil bridge pickup, plus traditional single-coil Precision Bass pickup, individual volume control for each pickup, available in Olympic White, Black and Metallic Red versions', 4, 'img69.jpg', 35),
(70, 'SQUIER CV 70s JAZZ BASS MN 3TS', '529.46', 'The Classic Vibe ‘70s Jazz Bass® is a nod to the 1970s evolution of the J Bass®, combining the luxurious playability that made it famous with the versatility and massive tone of its dual Fender-Designed alnico single-coil pickups. Player-friendly features include a slim, comfortable “C”-shaped neck profile with an easy-playing 9.5”-radius fingerboard and narrow-tall frets, as well as a vintage-style bridge with slotted barrel saddles for solid string stability. This throwback Squier model also features 1970s-inspired headstock markings, rich-looking nickel-plated hardware and a slick vintage-tint gloss neck finish for an old-school vibe.', 4, 'img70.jpg', 20),
(71, 'Fender PLAYER JAZZ BASS', '918.02', 'With a dual Singlecoil Pickup and smooth playing feel, the Player Jazz Bass is an inspiring instrument with high classical style and authentic Fender bass. It is a strong, rumbling, tight sound; The growl sound matches the smooth, fast play feel for creative inspiration. Ready for action in the studio or on stage, Player Jazz Bass can do anything you can think of — and everything you have not.', 4, 'img71.jpg', 15),
(72, 'Fender Player Jazz Bass Guitar V', '932.96', 'With a dual Singlecoil Pickup and smooth playing feel, the Player Jazz Bass is an inspiring instrument with high classical style and authentic Fender bass. It is a strong, rumbling, tight sound; The growl sound matches the smooth, fast play feel for creative inspiration. Ready for action in the studio or on stage, Player Jazz Bass can do anything you can think of — and everything you haven not.', 4, 'img72.jpg', 34),
(73, 'FENDER AM PRO JAZZ BASS RW', '1.75', 'At Fender, we live with the instrument. We work non-stop – to the limit of craftsmanship, we design, test and never stop testing to make the best instruments on the planet. Jazz Bass, a refinement of the concept first introduced into Precision Bass, is the earliest example of this philosophy in action. Invented for today musician, the professional American Jazz Professional combines modern features and materials with Fender craftsmanship and expertise to produce truly modern bass.', 4, 'img73.jpg', 22),
(74, 'Fender Am Pro P Bass V RW', '1.90', 'Fender American Professional Precision Bass Rosewood 5 Strings are classically designed with modern features like V-Mod pickups, combined with the warm sound of rosewood for a sound that is as great as ever!', 4, 'img74.jpg', 41),
(75, 'FENDER AM ELITE JAZZ BASS RW', '2.07', 'Packed with our revolutionary latest innovations, the American Elite Jazz Bass V is a 5-string electric guitar for the modern bassist who demands cutting-edge electronic music and fast fan style. and unlimited, gives a very feel. Its versatile sound is easy to adapt to any playing style, from picked, plucked or slap-and-pop and still stands out with the Fender style, very fresh.', 4, 'img75.jpg', 23),
(76, 'FENDER AM PRO JAZZ BASS V RW', '1.82', 'At Fender, we live with the instrument. We work non-stop – to the limit of craftsmanship, we design, test and never stop testing to make the best instruments on the planet. Jazz Bass, a refinement of the concept first introduced into Precision Bass, is the earliest example of this philosophy in action. Invented for today musician, the Left-Handed American Professional Jazz Bass combines modern features and materials with Fender craftsmanship and expertise to create truly modern bass.', 4, 'img76.jpg', 27),
(77, 'FENDER AM PRO JAZZ BASS MN', '1.75', 'At Fender, we live with the instrument. We work non-stop – to the limit of craftsmanship, we design, test and never stop testing to make the best instruments on the planet. Jazz Bass, a refinement of the concept first introduced into Precision Bass, is the earliest example of this philosophy in action. Invented for today musician, the professional American Jazz Professional combines modern features and materials with Fender craftsmanship and expertise to produce truly modern bass.', 4, 'img77.jpg', 21),
(78, 'Fender Am Pro P Bass RW', '1.75', 'The Fender Professional P Bass is one of the bass guitars loved by many artists. Classic looks and great sound combined with meticulous design for player comfort make the P Bass a familiar instrument for most bass guitarists.', 4, 'img78.jpg', 17),
(79, 'Guitar Bass Yamaha BB434M', '589.24', 'When the Yamaha BB Bass Guitars hit the market in the late 70s. The bass guitar world quickly took notice. Many professional caliber players have used these unique instruments. The recognizable appearance keeps these Bass Guitars at the forefront of a variety of genres. The BB434 is one of the newest additions to this commendable line of instruments.', 4, 'img79.jpg', 14),
(80, 'Guitar Bass Cort Action Bass Plus', '939.37', 'The Yamaha TRB1004J is the result of Yamaha countless innovation efforts, the TRB has enjoyed the support of many professional musicians since its debut in 1989 and has become an icon in the bass guitar world.', 4, 'img80.jpg', 11),
(81, 'Alice A406 Acoustic Guitar String', '2.13', 'This type of string is suitable for students.', 5, 'img81.jpg', 200),
(82, 'Elixir Nanoweb Acoustic Strings', '20.00', 'Elixir\'s Nanoweb acoustic guitar strings offer brilliantly long-lasting performance that far exceeds the majority of uncoated strings available. We\'ve heard players stating that these strings have survived regular play for six months.', 5, 'img82.jpg', 200),
(83, 'Martin Authentic Acoustic 80/20 Strings', '8.00', 'When you\'ve been making guitars for 180 years, it\'s probably safe to assume you know a thing or two about making strings as well. With Martin Guitars Authentic Acoustic strings, you\'re getting time-tested experience and quality when you string your acoustic guitar.', 5, 'img83.jpg', 200),
(84, 'Ernie Ball Earthwood Acoustic Strings', '9.00', 'Although Ernie Ball is primarily known for its \'Slinky\' electric guitar string brand, the company also makes excellent strings for the acoustic guitar players out there. Combining years of experience manufacturing strings with some of the best materials available, these are a great choice for any kind of guitar player.', 5, 'img84.jpg', 100),
(85, 'D Addario XT Silver Plated Copper Classical Guitar Strings (XTC44)', '15.99', 'XT classical strings feature an extended lifespan treatment on every wound string in the set, preserving the natural tone and feel of uncoated strings. XT classical string sets utilize the proprietary composite basses and the precisely intonated trebles of D Addario legendary pro-art strings, combining dynamic responsiveness with long-lasting performance.', 5, 'img85.jpg', 100),
(86, 'D Addario Guitar Strings - Classic Nylon Guitar Strings - EJ27N Classical Guitar Strings', '18.00', 'CLASSICAL GUITAR STRINGS - D\'Addario\'s Classic Nylon guitar strings are great for beginners, students and professionals alike that are known for the optimal balance of warm and projecting, long lasting tone.', 5, 'img86.jpg', 70),
(87, 'D Addario Guitar Strings - Pro-Arte Classical Guitar Strings - EJ44', '10.99', 'THE CHOICE OF NYLON STRING PLAYERS– The world\'s most popular choice for nylon string players, D\'Addario Pro-Arte nylon string set for classical guitar combines high quality materials with the unparalleled manufacturing consistency of D Addario. Every player can experience a balance of volume and comfortable resistance with warm, full-bodied tone and consistent intonation.', 5, 'img87.jpg', 60),
(88, 'D Addario Guitar Strings - Folk Nylon Guitar Strings - EJ33 Classical Guitar Strings', '10.99', 'FOLK GUITAR STRINGS - D Addario Folk Nylon strings feature 80/20 bronze basses, nylon trebles, and D Addario ball ends to accommodate a variety of guitars and string changing options. FOLK, FINGERSTYLE - D Addario Folk Guitar Strings are ideal for folk style and fingerstyle guitar playing.', 5, 'img88.jpg', 50),
(89, 'Ernie Ball Slinky Electric Guitar Strings', '12.99', 'We have gone for perhaps the most well-known packet of strings in existence to begin with. Controversial or what? But there is a reason why the Ernie Ball Slinky sets are among the best-selling strings globally. These nickel-plated strings marry up performance, durability, sound, and price into a package which ticks a lot of boxes.', 5, 'img89.jpg', 100),
(90, 'Elixir Optiweb Electric Guitar Strings', '10.66', 'Some string brands opt to use different coatings in an effort to prolong the life of their strings. Elixir is one such brand, utilising their patented Optiweb treatment onto the strings. Coating strings is not without controversy; some players feel the treatment takes out some of the strings natural resonance. ', 5, 'img90.jpg', 80),
(91, 'D Addario XL', '5.12', 'Next up is the only true rival to Ernie Ball, certainly in terms of the range on offer. The D Addario XL range incorporates six different construction methods, each with its own characteristics. ', 5, 'img91.jpg', 40),
(92, 'D\'Addario XT Electric Guitar Strings', '12.96', 'These premium electric guitar strings combine some of D\'Addario\'s finest technology. Featuring the high-carbon steel core seen in the NYXL series, as well as a thin, hydrophobic coating, the D\'Addario XT sets retain that fresh string sound for longer. From our testing, we also found that they deliver amazing break resistance and hold their tuning better than most.', 5, 'img92.jpg', 50),
(93, 'Ernie Ball 2834 Super Slinky Nickel Wound Electric Bass Guitar Strings', '19.99', 'Ernie Ball strings have been a top choice for players of all types since the early 1960s, when guitarists came into Ernie Ball\'s music store, customizing their string gauges to make their axes easier to play. After fruitless attempts to interest major guitar manufacturers in a lighter set of strings, Ernie Ball decided to start making his own. When you open a pack of his strings today, you know you\'re getting a quality set of strings designed to give you great tone, reliable performance, and long life. You can not go wrong when you string up with Ernie Ball strings!', 5, 'img93.jpg', 40),
(94, 'La Bella 760FS Deep Talkin Bass Flatwound Bass Guitar Strings', '42.95', 'La Bella\'s Flatwound Deep Talkin\' Bass strings became a top choice for professional bass players all the way back in the 1950s, and their popularity has never wavered. Made from hand-polished stainless steel, these flatwound bass strings deliver a profoundly deep and vibrant tone with all the sustain you could ask for — and they retain their tone well after standard flatwounds have gone dead. No strings on the market play as smooth on a standard electric bass, and they feel absolutely luxurious on a fretless bass. If you\'re in the market for superior flatwound strings, then La Bella\'s Flatwound Deep Talkin Bass strings are it.', 5, 'img94.jpg', 30),
(94, 'La Bella 760FS Deep Talkin Bass Flatwound Bass Guitar Strings', '42.95', 'La Bella\'s Flatwound Deep Talkin\' Bass strings became a top choice for professional bass players all the way back in the 1950s, and their popularity has never wavered. Made from hand-polished stainless steel, these flatwound bass strings deliver a profoundly deep and vibrant tone with all the sustain you could ask for — and they retain their tone well after standard flatwounds have gone dead. No strings on the market play as smooth on a standard electric bass, and they feel absolutely luxurious on a fretless bass. If you\'re in the market for superior flatwound strings, then La Bella\'s Flatwound Deep Talkin Bass strings are it.', 5, 'img94.jpg', 30);
INSERT INTO `product` (`id`, `name`, `price`, `description`, `category_id`, `image`, `inventory_qty`) VALUES
(95, 'Basics Guitar Bag for 41-42 Inch Acoustic Guitar - 0.5-inch Sponge Padded, Waterproof', '25.11', 'Rugged soft-sided guitar bag for storing or transporting a 41- to 42-inch acoustic guitar, Made of durable, waterproof, 600D polyester material in a sleek black color; 0.5-inch padding and a rubber shockproof base for added protection', 5, 'img95.jpg', 100),
(96, 'Fender FA405 Dreadnought Acoustic Guitar Gig Bag', '37.95', 'Fender\'s F405 Series cases are sleek and affordable, helping to keep acoustic dreadnoughts safe on the go. The durable outer surface is constructed from 400 Denier thick polyester, which protects the guitar from impact and resists scratches and rips. The inner surface is padded with 5mm thick soft velvet, keeping the guitar neat and safe, avoiding damage to the guitar\'s coating. The F405 case has an ergonomic backpack-style handle and strap, so you can carry it with ease. Furthermore, there is a sliding front pocket for small accessories.', 5, 'img96.jpg', 200),
(97, 'Ibanez IAB541-BE Powerpad Designer Collection Acoustic Guitar Bag, Beige', '39.86', 'The 541 Power pad series cases are available in a variety of colors. Please choose the color you like. With padded bottom and side panels, the Ibanez POWERPAD case protects the guitar safely from bumps and scratches that can occur during travel. There are four large compartments for laptops, tablets, strings, headphones, tuners or other items and you have got everything you need. With a sleek and masculine design, heavy duty zippers and matching colors, the IAB541 will always stand out in the sea of ​​black canvas bags.', 5, 'img97.jpg', 100),
(98, 'MONO Vertigo Electric Guitar Case, Black — M80-VEG-BLK', '220.64', 'An interesting feature that you will love. Vertigo™ does not unfold like a traditional guitar case. The case design allows you to quickly pull open the case and retrieve the guitar from the headboard thanks to a hidden, diagonal hinge on the front of the case. When pulling the lock, the case will open naturally towards the right. No need to put the guitar case on the floor. Can be opened in a standing position.', 5, 'img98.jpg', 100),
(99, 'Marshall MG15G Gold Series 15W Guitar Combo Amplifier — M31-MG15G-E', '107.87', 'Compact 15w amps possess great power. The 8\" speaker unit delivers superb sound quality while maintaining sound quality even in small spaces. The amps deliver extra bass and low-end. The wide selection of tones is sure to fit any room. which style.', 5, 'img99.jpg', 30),
(100, 'Amplifier Fender Frontman 10G, Combo', '78.02', 'For the beginner electric guitarist or anyone who wants a compact, easy-to-use practice amp with quality sound and a great price, the Frontman 10G caters to them all. Conveniently compact and Fender classic style, outputs sound from 6\" speakers with gain control and overdrive knobs, rocking guitar sound from simulated tube overdrive to super-saturated and intense distortion—love it. suitable for blues, metal and the famous clean Fender sound.', 5, 'img100.jpg', 40),
(101, 'FISHMAN LOUDBOX ARTIST PRO-LBT-EU6', '720.53', 'The Fishman Loudbox Artist features 2 versatile channels with either microphone or guitar jacks for a variety of playing styles and effortless transitions. This is a very popular high-end amplifier used by street artists, you can easily find Fishman Loudbox Artist in places where you can freely perform with guitar, microphone or even violin player. With a capacity of 120 Watt, Loudbox Artist is suitable for 150m2 sound space, providing super clear sound. The Loudbox Artist amp has a clean and bright acoustic sound, warm and thick bass with a two-stage amplifier.', 5, 'img101.jpg', 20),
(102, 'ACUS ONE5TSIMONWOOD', '826.69', 'The Acus One 5T Simon wood amp is an improved version of the One 5T with a darker wood case, a beveled design for upward sound, and a black chrome grille. With 75 watts of power and equipped with a 5\" woofer and compression tweeter, the Amp Acus One 5T Simon wood is perfect for recording, practicing and even performing. The dual channel design allows you to plug in your acoustic instrument and add a microphone at the same time. Acus One Forstrings 5T Simon Woo owns 2 individual channels including Input Microphone and Line with custom buttons Gain/Volume, High Middle, Low, Effects and Master Volume. AUX port is used to connect to play music or metronome with buttons Customize Volume for AUX. Finally, the Balance Out port for a larger sound system.', 5, 'img102.jpg', 10),
(103, 'Dunlop Tortex Standard Plectrum', '6.00', 'First intended as a replacement for tortoiseshell (hence the tortoise design) Tortex picks were launched way back in 1981. Their durability, flexibility and bright attack have ensured they remain the industry standard today. They offer a balanced tone and comfortable grip. Dunlop\'s colour-coding system makes it easy to find replacements for your preferred gauge, which range from .50mm (red) up to 1.14mm (purple).', 5, 'img103.jpg', 100),
(104, 'Fender 551 Shape Classic Celluloid', '5.99', 'Fender makes a surprisingly wide range of picks in a host of sizes, shapes and thicknesses, but the majority make use of celluloid. This material provides a warmer tone than many other pick types. The 551 takes Fender\'s traditional 451 shape and serves up a wider body and sharper tip, making it great for rapid-fire single-note licks.', 5, 'img104.jpg', 100),
(105, 'Dunlop Nylon Jazz III Guitar Pick', '4.65', 'The clue is in the name with this long-standing classic: a small profile, quick-release moulded edge and sharp tip provide the agility to see the Jazz III through the speediest of runs with ultimate precision. Two versions are available: the warm-sounding Red Nylon or brighter, sharper response of the Black Stiffo.', 5, 'img105.jpg', 100),
(106, 'D\'Addario DuraGrip', '10.00', 'The DuraGrip design, from guitar string and accessory giant D\'Addario, is made from Duralin, which promises to highlight the bright \'click\' of the pick hitting the string, whether that\'s playing chords on acoustic, laying down speedy single-note runs on electric or hitting a bass hard. Add in a stamped grip design, enhanced durability and choice of seven different gauges, and the DuraGrip is worth picking up. It\'s available in Wide, Jazz, Sharp and Standard shapes.', 5, 'img106.jpg', 100),
(107, 'Dava Control Picks', '4.64', 'Guitar players usually have to make the choice between lighter-gauge picks for strumming and heavier gauges for single-note picking, but Dava allows guitarists to possess both in a single pick - depending on where you hold them across the Control Region, Control Picks can provide a soft or hard response. There\'s a choice of three materials, too: Delrin, Nylon and Gels.', 5, 'img107.jpg', 100),
(108, 'Gravity Picks', '5.99', '  An acrylic construction affords Gravity Picks a different sound and feel to a lot of other plectrums on the market. Besides offering increased grip for your fingers, they seem to \'glide\' across the strings - great for string skipping and sweeping - and deliver a brighter tone to boot. 1,000s of variations are available, and you can easily order customised versions, too. Sizes range from 1.5mm to 3.0mm.', 5, 'img108.jpg', 100),
(109, 'Fender Guitar Mono leather blk', '54.62', 'Fender is most recognizable strap now features a nylon underside for an ultra-comfortable fit and six different color options to give Fender even more personality.', 5, 'img109.jpg', 100),
(110, 'ERNIEBALL P04147', '17.07', 'Short-spun comfortable polyester fabric feels like soft cotton. The ends are stitched with machined leather for added durability and the strap length is fully adjustable from 41\" to 72\" for short or long applications.', 5, 'img110.jpg', 100),
(111, 'FENDER STRAP, CUSTOM MONO, DAPHNE BLUE', '20.91', 'Strap DAPHNE BLUE', 5, 'img111.jpg', 100),
(112, 'TAYLOR Strap GUITAR 4004-20', '43.10', 'Taylor Academy Jacquard leather guitar straps provide comfort and support with an organic, earthy look woven from premium cotton. This unique strap features a jacquard pattern with genuine suede end buckles and an embossed gold Taylor logo. At 2\" wide, it offers comfortable support on the shoulder with enough freedom to move around while you play. Taylor Academy straps come in either white and brown or white and black. Made in the USA.', 5, 'img112.jpg', 100),
(113, 'ORTEGA OSS2-BK guitar straps', '39.68', 'Fancy designed, with a wide version that varies by section, suitable for guitar players with a flexible style.', 5, 'img113.jpg', 100),
(114, 'D Addario 50 MM STRAP, CHOPPER', '20.06', 'Planet Waves guitar straps let you play in comfort and style! give you peace of mind when you wear your favorite guitar or bass. These straps are available in a variety of materials, including leather, suede, and polypropylene. Whether you are looking for comfort, need an eye-catching accessory or want a classic look to match your classical instrument, Planet Waves guitar straps are the ideal choice.', 5, 'img114.jpg', 100),
(115, 'Jim Dunlop Body & Fingerboard Cleaning Kit (6503)', '29.87', 'Kit Includes: 1 - Formula 65 Polish (4oz) 1 - Fretboard 65 Ultimate Lemon Oil (4oz), 2 - Polish Cloths, Country of Origin: United States', 5, 'img115.jpg', 300),
(116, 'Conditioner 2 oz (MN105)', '16.34', '100% natural oils ultra-refined to clean, condition, and protect. Completely free of lemon extracts, so it is safe on all unfinished fretboards: rosewood, ebony and Maple. Premium quality Cleaner and conditioner used by high-end repair shops. Contains no petroleum, wax, detergents, or water. Dries fast but maintains conditioning for months. Proudly Made in the USA', 5, 'img116.jpg', 100),
(117, 'MusicNomad The Nomad Tool Set - The Original Nomad Tool & The Nomad Slim (MN204)', '12.99', 'Works on all stringed instruments, amps, drums, keyboards, pedals, computers. Cleans dust & grime from hard to reach areas. All in one cleaning tool set with no cleaning solution needed. Prolongs the life & preserves the tone of strings. The Nomad slim gets between pick-ups & under floating bridges, floating Pick guards, strings on your headstock & more', 5, 'img117.jpg', 100),
(118, 'D Addario Accessories Planet Waves XLR8 String Lubricant/Cleaner', '4.94', 'Planet Waves XLR8 lubricates and cleans your strings for faster playing and longer life. Simply wipe the easy to use applicator up and down your strings and enjoy the frictionless feel of the strings allowing you to play faster while also experiencing less finger noise and enhanced tone. Packaged in an airtight metal tin that will prevent XLR8 from drying out prematurely. Planet Waves, part of the D Addario family of brands, is known for innovative, problem-solving, quality musical accessories. Planet Waves offers a complete line of award-winning accessories including cables, picks, tuners, capos, straps, humidifiers, maintenance tools and more.', 5, 'img118.jpg', 100),
(119, 'D-Addario Guitar Capo – NS Tri Action - For 6-String Electric and Acoustic Guitars', '21.99', 'TUNED IN: Designed for use on 6-string electric and acoustic guitars, the micrometer tension adjustment on the black Tri-Action Capo ensures the proper force is being applied to the neck of the guitar for buzz-free, in-tune performance at any fret. TRI-ACTION GEOMETRY: Tri-Action geometry reduces the force required to open and close the capo and applies even tension regardless of neck profile.', 5, 'img119.jpg', 100),
(120, 'GUITARX X3 Capo for Acoustic Guitar, Electric Guitar Capo', '18.97', 'BUILT TO LAST: The X3 capo is made of premium zinc alloy. Perfect for electric guitar, acoustic guitar, bass, mandolin, ukulele, and banjo. MAKE QUICK CHANGES: Easily slide it between frets to change position. Must-have among guitar gear and accessories. Great gift idea!. NO SCRATCHES: High-quality pad protects your instrument against damage.', 5, 'img120.jpg', 100),
(121, 'Jim Dunlop Acoustic Trigger, Curved, Black Guitar Capo (83CB)', '17.99', 'Ergonomic shape and padded handle make fret positioning easy. The strong spring action clamps it firmly in place. Aircraft quality aluminum. Made in the USA. For 6 and 12 string guitars', 5, 'img121.jpg', 90),
(122, 'D Addario Guitar Cable - Guitar Lead - Geo-Tip Technology for Improved Fit - 10 Feet/3.05 Meters - Straight Ends - 1 Pack', '32.99', 'American Stage cables are built to ensure that your tone comes through exactly the way you want it. The 10-foot length is ideal for shorter runs, such as guitar-to-pedal board, and smaller stages. Planet Waves American Stage Series cables are designed with audiophile quality wire, made in the USA, designed to reproduce the natural tones of your instrument with zero interference. The low 28pF/ft. capacitance is the sweet-spot for uncolored tone and the 22AWG oxygen-free copper conductor provides exceptional signal transfer. American Stage cables reject interference and avoid handling noise with 100% shielded coverage and 95% tinned copper braiding.', 5, 'img122.jpg', 50),
(123, 'Amazon Basics 1/4 Inch Tweed Cloth Jacket Straight Instrument Cable - 20 Foot (Black & Gray)', '17.93', 'Ideal for connecting an electric guitar, bass, or keyboard to an amplifier or PA system, 23 AWG oxygen-free copper (OFC) center conductor for improved signal clarity. OFC spiral shield and conductive PVC shield to block interference from outside sources. 1/4-Inch Straight-to-Straight connectors; High-quality, noise-free, high-fidelity performance', 5, 'img123.jpg', 40);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staff`
--

CREATE TABLE `staff` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(11) NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `staff`
--

INSERT INTO `staff` (`username`, `password`, `role`, `active`) VALUES
('Admin', '123', 2, 1),
('staff1', '123', 1, 1),
('staff2', '123', 1, 1),
('staff3', '123', 1, 1),
('staff4', '123', 1, 1),
('staff5', '123', 1, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT cho bảng `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
