-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2016 at 08:34 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bls-dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `acl_phinxlog`
--

CREATE TABLE `acl_phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acl_phinxlog`
--

INSERT INTO `acl_phinxlog` (`version`, `migration_name`, `start_time`, `end_time`) VALUES
(20141229162641, 'DbAcl', '2016-08-17 01:32:24', '2016-08-17 01:32:25');

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE `acos` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 382),
(2, 1, NULL, NULL, 'Admins', 2, 13),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 1, NULL, NULL, 'Brands', 14, 25),
(9, 8, NULL, NULL, 'index', 15, 16),
(10, 8, NULL, NULL, 'view', 17, 18),
(11, 8, NULL, NULL, 'add', 19, 20),
(12, 8, NULL, NULL, 'edit', 21, 22),
(13, 8, NULL, NULL, 'delete', 23, 24),
(14, 1, NULL, NULL, 'Categories', 26, 37),
(15, 14, NULL, NULL, 'index', 27, 28),
(17, 14, NULL, NULL, 'add', 29, 30),
(18, 14, NULL, NULL, 'edit', 31, 32),
(19, 14, NULL, NULL, 'delete', 33, 34),
(20, 14, NULL, NULL, 'menu', 35, 36),
(21, 1, NULL, NULL, 'CategoryDetails', 38, 49),
(22, 21, NULL, NULL, 'index', 39, 40),
(23, 21, NULL, NULL, 'view', 41, 42),
(24, 21, NULL, NULL, 'add', 43, 44),
(25, 21, NULL, NULL, 'edit', 45, 46),
(26, 21, NULL, NULL, 'delete', 47, 48),
(27, 1, NULL, NULL, 'Colors', 50, 59),
(28, 27, NULL, NULL, 'index', 51, 52),
(29, 27, NULL, NULL, 'add', 53, 54),
(30, 27, NULL, NULL, 'edit', 55, 56),
(31, 27, NULL, NULL, 'delete', 57, 58),
(32, 1, NULL, NULL, 'Configrations', 60, 65),
(33, 32, NULL, NULL, 'index', 61, 62),
(34, 32, NULL, NULL, 'edit', 63, 64),
(35, 1, NULL, NULL, 'Countries', 66, 77),
(36, 35, NULL, NULL, 'index', 67, 68),
(37, 35, NULL, NULL, 'view', 69, 70),
(38, 35, NULL, NULL, 'add', 71, 72),
(39, 35, NULL, NULL, 'edit', 73, 74),
(40, 35, NULL, NULL, 'delete', 75, 76),
(41, 1, NULL, NULL, 'Dashboards', 78, 81),
(42, 41, NULL, NULL, 'index', 79, 80),
(43, 1, NULL, NULL, 'Groups', 82, 93),
(44, 43, NULL, NULL, 'index', 83, 84),
(45, 43, NULL, NULL, 'view', 85, 86),
(46, 43, NULL, NULL, 'add', 87, 88),
(47, 43, NULL, NULL, 'edit', 89, 90),
(48, 43, NULL, NULL, 'delete', 91, 92),
(49, 1, NULL, NULL, 'Logins', 94, 105),
(50, 49, NULL, NULL, 'index', 95, 96),
(51, 49, NULL, NULL, 'logout', 97, 98),
(52, 49, NULL, NULL, 'forget', 99, 100),
(53, 49, NULL, NULL, 'reset', 101, 102),
(54, 49, NULL, NULL, 'AfterForget', 103, 104),
(55, 1, NULL, NULL, 'Orders', 106, 117),
(56, 55, NULL, NULL, 'index', 107, 108),
(57, 55, NULL, NULL, 'view', 109, 110),
(58, 55, NULL, NULL, 'add', 111, 112),
(59, 55, NULL, NULL, 'edit', 113, 114),
(60, 55, NULL, NULL, 'delete', 115, 116),
(61, 1, NULL, NULL, 'OrderShippings', 118, 129),
(62, 61, NULL, NULL, 'index', 119, 120),
(63, 61, NULL, NULL, 'view', 121, 122),
(64, 61, NULL, NULL, 'add', 123, 124),
(65, 61, NULL, NULL, 'edit', 125, 126),
(66, 61, NULL, NULL, 'delete', 127, 128),
(67, 1, NULL, NULL, 'OrdersProducts', 130, 141),
(68, 67, NULL, NULL, 'index', 131, 132),
(69, 67, NULL, NULL, 'view', 133, 134),
(70, 67, NULL, NULL, 'add', 135, 136),
(71, 67, NULL, NULL, 'edit', 137, 138),
(72, 67, NULL, NULL, 'delete', 139, 140),
(73, 1, NULL, NULL, 'OrdersShippings', 142, 153),
(74, 73, NULL, NULL, 'index', 143, 144),
(75, 73, NULL, NULL, 'view', 145, 146),
(76, 73, NULL, NULL, 'add', 147, 148),
(77, 73, NULL, NULL, 'edit', 149, 150),
(78, 73, NULL, NULL, 'delete', 151, 152),
(79, 1, NULL, NULL, 'OrderStatuses', 154, 165),
(80, 79, NULL, NULL, 'index', 155, 156),
(81, 79, NULL, NULL, 'view', 157, 158),
(82, 79, NULL, NULL, 'add', 159, 160),
(83, 79, NULL, NULL, 'edit', 161, 162),
(84, 79, NULL, NULL, 'delete', 163, 164),
(85, 1, NULL, NULL, 'OrderUpdateStatuses', 166, 177),
(86, 85, NULL, NULL, 'index', 167, 168),
(87, 85, NULL, NULL, 'view', 169, 170),
(88, 85, NULL, NULL, 'add', 171, 172),
(89, 85, NULL, NULL, 'edit', 173, 174),
(90, 85, NULL, NULL, 'delete', 175, 176),
(91, 1, NULL, NULL, 'ProductsAttrs', 178, 189),
(92, 91, NULL, NULL, 'index', 179, 180),
(93, 91, NULL, NULL, 'view', 181, 182),
(94, 91, NULL, NULL, 'add', 183, 184),
(95, 91, NULL, NULL, 'edit', 185, 186),
(96, 91, NULL, NULL, 'delete', 187, 188),
(97, 1, NULL, NULL, 'ProductsCategories', 190, 201),
(98, 97, NULL, NULL, 'index', 191, 192),
(99, 97, NULL, NULL, 'view', 193, 194),
(100, 97, NULL, NULL, 'add', 195, 196),
(101, 97, NULL, NULL, 'edit', 197, 198),
(102, 97, NULL, NULL, 'delete', 199, 200),
(103, 1, NULL, NULL, 'Products', 202, 215),
(104, 103, NULL, NULL, 'index', 203, 204),
(105, 103, NULL, NULL, 'view', 205, 206),
(106, 103, NULL, NULL, 'add', 207, 208),
(107, 103, NULL, NULL, 'bulkadd', 209, 210),
(108, 103, NULL, NULL, 'edit', 211, 212),
(109, 103, NULL, NULL, 'delete', 213, 214),
(110, 1, NULL, NULL, 'ProductsImages', 216, 231),
(111, 110, NULL, NULL, 'index', 217, 218),
(112, 110, NULL, NULL, 'view', 219, 220),
(113, 110, NULL, NULL, 'add', 221, 222),
(114, 110, NULL, NULL, 'addimage', 223, 224),
(115, 110, NULL, NULL, 'edit', 225, 226),
(116, 110, NULL, NULL, 'delete', 227, 228),
(117, 110, NULL, NULL, 'deleteimage', 229, 230),
(118, 1, NULL, NULL, 'ProductsMarketingImages', 232, 247),
(119, 118, NULL, NULL, 'index', 233, 234),
(120, 118, NULL, NULL, 'view', 235, 236),
(121, 118, NULL, NULL, 'add', 237, 238),
(122, 118, NULL, NULL, 'addimage', 239, 240),
(123, 118, NULL, NULL, 'edit', 241, 242),
(124, 118, NULL, NULL, 'delete', 243, 244),
(125, 118, NULL, NULL, 'deleteimage', 245, 246),
(126, 1, NULL, NULL, 'ProductsPrices', 248, 259),
(127, 126, NULL, NULL, 'index', 249, 250),
(128, 126, NULL, NULL, 'view', 251, 252),
(129, 126, NULL, NULL, 'add', 253, 254),
(130, 126, NULL, NULL, 'edit', 255, 256),
(131, 126, NULL, NULL, 'delete', 257, 258),
(132, 1, NULL, NULL, 'ProductsPromos', 260, 271),
(133, 132, NULL, NULL, 'index', 261, 262),
(134, 132, NULL, NULL, 'view', 263, 264),
(135, 132, NULL, NULL, 'add', 265, 266),
(136, 132, NULL, NULL, 'edit', 267, 268),
(137, 132, NULL, NULL, 'delete', 269, 270),
(138, 1, NULL, NULL, 'ProductsRelateds', 272, 283),
(139, 138, NULL, NULL, 'index', 273, 274),
(140, 138, NULL, NULL, 'view', 275, 276),
(141, 138, NULL, NULL, 'add', 277, 278),
(142, 138, NULL, NULL, 'edit', 279, 280),
(143, 138, NULL, NULL, 'delete', 281, 282),
(144, 1, NULL, NULL, 'Roles', 284, 295),
(145, 144, NULL, NULL, 'index', 285, 286),
(146, 144, NULL, NULL, 'view', 287, 288),
(147, 144, NULL, NULL, 'add', 289, 290),
(148, 144, NULL, NULL, 'edit', 291, 292),
(149, 144, NULL, NULL, 'delete', 293, 294),
(150, 1, NULL, NULL, 'SliderImages', 296, 307),
(151, 150, NULL, NULL, 'index', 297, 298),
(152, 150, NULL, NULL, 'view', 299, 300),
(153, 150, NULL, NULL, 'add', 301, 302),
(154, 150, NULL, NULL, 'edit', 303, 304),
(155, 150, NULL, NULL, 'delete', 305, 306),
(156, 1, NULL, NULL, 'UserAddresses', 308, 319),
(157, 156, NULL, NULL, 'index', 309, 310),
(158, 156, NULL, NULL, 'view', 311, 312),
(159, 156, NULL, NULL, 'add', 313, 314),
(160, 156, NULL, NULL, 'edit', 315, 316),
(161, 156, NULL, NULL, 'delete', 317, 318),
(162, 1, NULL, NULL, 'UserDetails', 320, 331),
(163, 162, NULL, NULL, 'index', 321, 322),
(164, 162, NULL, NULL, 'view', 323, 324),
(165, 162, NULL, NULL, 'add', 325, 326),
(166, 162, NULL, NULL, 'edit', 327, 328),
(167, 162, NULL, NULL, 'delete', 329, 330),
(168, 1, NULL, NULL, 'Users', 332, 345),
(169, 168, NULL, NULL, 'index', 333, 334),
(170, 168, NULL, NULL, 'view', 335, 336),
(171, 168, NULL, NULL, 'add', 337, 338),
(172, 168, NULL, NULL, 'edit', 339, 340),
(173, 168, NULL, NULL, 'delete', 341, 342),
(174, 168, NULL, NULL, 'ChangeStatus', 343, 344),
(175, 1, NULL, NULL, '~Products', 346, 347),
(176, 1, NULL, NULL, 'MyProfile', 348, 355),
(177, 176, NULL, NULL, 'index', 349, 350),
(180, 176, NULL, NULL, 'edit', 351, 352),
(182, 176, NULL, NULL, 'changepass', 353, 354),
(183, 1, NULL, NULL, 'Wishlists', 356, 367),
(184, 183, NULL, NULL, 'index', 357, 358),
(185, 183, NULL, NULL, 'view', 359, 360),
(186, 183, NULL, NULL, 'add', 361, 362),
(187, 183, NULL, NULL, 'edit', 363, 364),
(188, 183, NULL, NULL, 'delete', 365, 366),
(189, 1, NULL, NULL, 'Promotions', 368, 381),
(190, 189, NULL, NULL, 'index', 369, 370),
(191, 189, NULL, NULL, 'view', 371, 372),
(192, 189, NULL, NULL, 'add', 373, 374),
(193, 189, NULL, NULL, 'edit', 375, 376),
(194, 189, NULL, NULL, 'delete', 377, 378),
(196, 189, NULL, NULL, 'addPromotion', 379, 380);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_dir` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `group_id`, `image`, `image_dir`, `dob`, `mobile`, `firstname`, `lastname`, `created`, `modified`) VALUES
(24, 'mukesh.kaushal@sdnainfotech.com', '$2y$10$bKtQgpy57TvVevDUGhgDPuguGlOOSUrFUNQ.joI8yVYYvk6ZnM2cu', 1, 'client-3.jpg', 'webroot\\img\\files\\Admins\\image\\', '2016-08-08', '9041160473', 'Mukesh', 'kaushal', '2016-08-17 09:35:37', '2016-08-17 13:09:14'),
(25, 'himani.arora@sdnainfotech.com', '$2y$10$6476QRWdKmSjycaYpR2GK.b7FpzootkQc8CB1oIcsvxlwCEnpecjG', 2, 'payment_logo.png', 'webroot\\img\\files\\Admins\\image\\', '2016-08-02', '9041160473', 'Himani', 'arora', '2016-08-17 09:36:09', '2016-08-17 13:30:22'),
(26, 'pradeep.danwal@sdnainfotech.com', '$2y$10$MtFvHnhcvkg9SFddGsr01uXkvKJoTTDHwQHTtAq.0q3o2BkpllDj2', 3, 'Penguins.jpg', 'webroot\\img\\files\\Admins\\image\\', '2016-08-08', '9041160473', 'Pradeep', 'dangwal', '2016-08-17 09:36:52', '2016-08-17 09:36:52');

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE `aros` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Groups', 1, NULL, 1, 4),
(2, NULL, 'Groups', 2, NULL, 5, 8),
(3, NULL, 'Groups', 3, NULL, 9, 12),
(4, 1, 'Admins', 24, NULL, 2, 3),
(5, 2, 'Admins', 25, NULL, 6, 7),
(6, 3, 'Admins', 26, NULL, 10, 11);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE `aros_acos` (
  `id` int(11) NOT NULL,
  `aro_id` int(11) NOT NULL,
  `aco_id` int(11) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1'),
(2, 2, 1, '-1', '-1', '-1', '-1'),
(3, 2, 168, '1', '1', '1', '1'),
(4, 2, 41, '1', '1', '1', '1'),
(5, 2, 49, '1', '1', '1', '1'),
(6, 3, 1, '-1', '-1', '-1', '-1'),
(7, 3, 49, '1', '1', '1', '1'),
(8, 3, 41, '1', '1', '1', '1'),
(9, 2, 176, '1', '1', '1', '1'),
(10, 2, 2, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_dir` varchar(255) NOT NULL,
  `templates` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `image`, `image_dir`, `templates`, `status`, `created`, `modified`) VALUES
(1, 'Nike', 'c4.jpg', 'webroot\\img\\files\\Brands\\image\\', '1', '0', '2016-07-21 07:14:58', '2016-08-18 12:28:17'),
(2, 'Dell', 'c1.jpg', 'webroot\\img\\files\\Brands\\image\\', '2', '1', '2016-07-21 07:21:35', '2016-08-03 05:23:01'),
(3, 'Acer', 'hot.png', 'webroot\\img\\files\\Brands\\image\\', '', '1', '2016-07-21 07:21:58', '2016-07-21 07:21:58'),
(4, 'Fruit', 'c3.jpg', 'webroot\\img\\files\\Brands\\image\\', '3', '1', '2016-07-22 12:42:39', '2016-07-25 12:13:20'),
(7, 'Motog', 'c6.jpg', 'webroot\\img\\files\\Brands\\image\\', '2', '1', '2016-07-25 12:23:38', '2016-07-25 12:23:38');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_comments` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart_products`
--

CREATE TABLE `cart_products` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_quantity` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart_shippings`
--

CREATE TABLE `cart_shippings` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT '',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `lft`, `rght`, `name`, `created`, `modified`) VALUES
(18, 24, 11, 44, 'Desktop Stationery', '2016-08-09 12:50:58', '2016-08-09 07:30:58'),
(19, 24, 11, 44, 'Office Furniture', '2016-08-09 12:50:58', '2016-08-09 07:31:50'),
(20, 24, 11, 44, 'Paper Products', '2016-08-09 12:50:58', '2016-08-09 07:32:30'),
(21, 24, 11, 44, 'Writing Instruments', '2016-08-09 12:50:58', '2016-08-09 07:33:36'),
(22, 24, 11, 44, 'Filing Accessories', '2016-08-09 12:50:58', '2016-08-09 07:34:31'),
(23, 24, 11, 44, 'Display Solutions', '2016-08-09 12:50:58', '2016-08-09 07:34:52'),
(24, NULL, 11, 44, 'My Categories', '2016-08-09 12:50:58', '2016-08-09 07:34:52'),
(33, 18, 14, 15, 'staplers & Staples', '2016-08-09 12:36:02', '2016-08-09 12:36:02'),
(34, 18, 16, 17, 'Staples Remover', '2016-08-09 12:40:10', '2016-08-09 12:40:10'),
(35, 18, 18, 19, 'calculators', '2016-08-09 12:40:44', '2016-08-09 12:40:44'),
(36, 18, 20, 21, 'Calculators Ink Roller/Ribbon', '2016-08-09 12:41:29', '2016-08-09 12:41:29'),
(37, 18, 22, 23, 'Drawing Tube', '2016-08-09 12:42:01', '2016-08-09 12:42:01'),
(38, 18, 24, 25, 'Namecard Storage', '2016-08-09 12:42:32', '2016-08-09 12:42:32'),
(39, 18, 26, 27, 'Cashbox', '2016-08-09 12:42:54', '2016-08-09 12:42:54'),
(40, 18, 28, 29, 'Whiteboard Eraser', '2016-08-09 12:43:32', '2016-08-09 12:43:32'),
(41, 18, 30, 31, 'Stamper & Ink', '2016-08-09 12:43:56', '2016-08-09 12:43:56'),
(42, 18, 32, 33, 'Puncher', '2016-08-09 12:47:20', '2016-08-09 12:47:20'),
(43, 19, 34, 35, 'chair', '2016-08-09 12:48:09', '2016-08-09 12:48:09'),
(44, 19, 36, 37, 'table', '2016-08-09 12:48:27', '2016-08-09 12:48:27'),
(45, 20, 38, 39, 'cup', '2016-08-09 12:48:50', '2016-08-09 12:48:50'),
(46, 20, 40, 41, 'colored ribbons', '2016-08-09 12:49:13', '2016-08-09 12:49:13'),
(47, 21, 42, 43, 'Electric Pen', '2016-08-18 07:39:46', '2016-08-18 07:39:46');

-- --------------------------------------------------------

--
-- Table structure for table `category_details`
--

CREATE TABLE `category_details` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_dir` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_details`
--

INSERT INTO `category_details` (`id`, `category_id`, `image`, `image_dir`, `created`, `modified`) VALUES
(4, 2, '1.jpg', 'webroot\\img\\files\\CategoryDetails\\image\\', '2016-07-25 09:42:21', '2016-07-25 09:42:21'),
(5, 3, '3.jpg', 'webroot\\img\\files\\CategoryDetails\\image\\', '2016-07-25 09:42:33', '2016-07-25 09:43:03'),
(6, 18, 'desktop.jpg', 'webroot\\img\\files\\CategoryDetails\\image\\', '2016-08-09 07:30:58', '2016-08-09 07:30:58'),
(7, 19, 'office.jpg', 'webroot\\img\\files\\CategoryDetails\\image\\', '2016-08-09 07:31:50', '2016-08-09 07:31:50'),
(8, 20, 'paper.jpg', 'webroot\\img\\files\\CategoryDetails\\image\\', '2016-08-09 07:32:30', '2016-08-09 07:32:30'),
(9, 21, 'writing.jpg', 'webroot\\img\\files\\CategoryDetails\\image\\', '2016-08-09 07:33:36', '2016-08-09 07:33:36'),
(10, 22, 'filling-accessories.jpg', 'webroot\\img\\files\\CategoryDetails\\image\\', '2016-08-09 07:34:31', '2016-08-09 07:34:31'),
(11, 23, 'DISPLAY.jpg', 'webroot\\img\\files\\CategoryDetails\\image\\', '2016-08-09 07:34:52', '2016-08-09 07:34:52'),
(12, 25, 'desktop.jpg', 'webroot\\img\\files\\CategoryDetails\\image\\', '2016-08-09 07:39:15', '2016-08-09 07:39:15'),
(13, 47, 'Chrysanthemum.jpg', 'webroot\\img\\files\\CategoryDetails\\image\\', '2016-08-18 07:39:46', '2016-08-18 07:39:46');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_dir` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `image`, `image_dir`, `created`, `modified`) VALUES
(2, 'azure', 'azure.png', 'webroot\\img\\files\\Colors\\image\\', '2016-07-26 05:56:47', '2016-07-26 05:56:47'),
(3, 'chartreuse', 'chartreuse.png', 'webroot\\img\\files\\Colors\\image\\', '2016-07-26 05:57:20', '2016-07-26 05:57:20'),
(4, 'coral', 'coral.png', 'webroot\\img\\files\\Colors\\image\\', '2016-07-26 05:57:34', '2016-07-26 05:57:34'),
(5, 'crimson', 'crimson.png', 'webroot\\img\\files\\Colors\\image\\', '2016-07-26 05:57:50', '2016-07-26 05:57:50'),
(6, 'forest green', 'forest_green.png', 'webroot\\img\\files\\Colors\\image\\', '2016-07-26 05:58:10', '2016-07-26 05:58:10'),
(7, 'golden', 'golden.png', 'webroot\\img\\files\\Colors\\image\\', '2016-07-26 05:58:24', '2016-07-26 05:58:24'),
(8, 'hot pink', 'hot_pink.png', 'webroot\\img\\files\\Colors\\image\\', '2016-07-26 05:58:41', '2016-07-26 05:58:41'),
(9, 'ivory', 'ivory.png', 'webroot\\img\\files\\Colors\\image\\', '2016-07-26 05:58:57', '2016-07-26 05:58:57'),
(10, 'lime', 'lime.png', 'webroot\\img\\files\\Colors\\image\\', '2016-07-26 05:59:09', '2016-07-26 05:59:09'),
(11, 'maroon', 'maroon.png', 'webroot\\img\\files\\Colors\\image\\', '2016-07-26 05:59:29', '2016-07-26 05:59:29'),
(12, 'medium blue', 'medium_blue.png', 'webroot\\img\\files\\Colors\\image\\', '2016-07-26 05:59:51', '2016-07-26 05:59:51'),
(13, 'navy', 'navy.png', 'webroot\\img\\files\\Colors\\image\\', '2016-07-26 06:00:05', '2016-07-26 06:00:05'),
(14, 'olive', 'olive.png', 'webroot\\img\\files\\Colors\\image\\', '2016-07-26 06:00:19', '2016-07-26 06:00:19'),
(15, 'royal blue', 'royal_blue.png', 'webroot\\img\\files\\Colors\\image\\', '2016-07-26 06:00:36', '2016-07-26 06:00:36'),
(16, 'salmon', 'salmon.png', 'webroot\\img\\files\\Colors\\image\\', '2016-07-26 06:00:52', '2016-07-26 06:00:52'),
(17, 'teal', 'teal.png', 'webroot\\img\\files\\Colors\\image\\', '2016-07-26 06:01:06', '2016-07-26 06:01:06'),
(18, 'wheat', 'wheat.png', 'webroot\\img\\files\\Colors\\image\\', '2016-07-26 06:01:20', '2016-07-26 06:01:20');

-- --------------------------------------------------------

--
-- Table structure for table `configrations`
--

CREATE TABLE `configrations` (
  `id` int(11) NOT NULL,
  `store_name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `logo_dir` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `facebook_link` varchar(255) NOT NULL,
  `twitter_link` varchar(255) NOT NULL,
  `home_link` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `delivery_charge` varchar(255) NOT NULL,
  `min_amt_free_delivery` varchar(255) NOT NULL,
  `adm_fdbk_email` varchar(255) NOT NULL,
  `min_amt_for_promotion` varchar(255) NOT NULL,
  `invoice_msg` text NOT NULL,
  `promo_page_1` varchar(255) NOT NULL,
  `promo_page_2` varchar(255) NOT NULL,
  `promo_page_3` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `configrations`
--

INSERT INTO `configrations` (`id`, `store_name`, `logo`, `logo_dir`, `title`, `facebook_link`, `twitter_link`, `home_link`, `currency`, `gst`, `delivery_charge`, `min_amt_free_delivery`, `adm_fdbk_email`, `min_amt_for_promotion`, `invoice_msg`, `promo_page_1`, `promo_page_2`, `promo_page_3`, `created`, `modified`) VALUES
(1, 'Boon Lay Stationary', 'back-top.png', 'webroot\\img\\files\\Configrations\\logo\\', 'BLS | Ecommerce', 'https://facebook.com/bls', 'https://twitter.com/bls', 'http://192.168.0.150:81/bls/', 'SGD', '7', '15', '60', 'admin@bls.com', '100', 'Hi, You got this promotion.', 'value plus', 'solo plus', 'pwp', '2016-07-18 06:44:20', '2016-08-08 06:35:11');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `code`, `status`, `created`, `modified`) VALUES
(1, 'India', 'IN', '0', '2016-07-21 08:56:47', '2016-07-26 11:07:34'),
(2, 'United States', 'US', '1', '2016-07-21 08:57:17', '2016-07-21 08:57:17');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Administrator', '2016-08-17 09:34:10', '2016-08-17 09:34:10'),
(2, 'System Processers', '2016-08-17 09:34:17', '2016-08-17 09:34:17'),
(3, 'Order Processers', '2016-08-17 09:34:26', '2016-08-17 09:34:26');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_addresses_id` int(11) NOT NULL,
  `user_comments` varchar(255) NOT NULL,
  `admin_comments` varchar(255) NOT NULL,
  `transactionCode` int(11) NOT NULL,
  `refrenceCode` int(11) NOT NULL,
  `invoiceCode` int(11) NOT NULL,
  `otherCode` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `user_addresses_id`, `user_comments`, `admin_comments`, `transactionCode`, `refrenceCode`, `invoiceCode`, `otherCode`, `created`, `modified`) VALUES
(1, 2, 1, 'dfg', 'fgdfg', 55, 656, 67676, 676756, '2016-07-19 00:00:00', '2016-07-28 17:28:11'),
(2, 4, 3, 'dummy', 'dummy', 445, 45, 45, 45, '0000-00-00 00:00:00', '2016-08-05 18:38:38');

-- --------------------------------------------------------

--
-- Table structure for table `orders_products`
--

CREATE TABLE `orders_products` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `discounted_price` varchar(255) NOT NULL,
  `final_price` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_products`
--

INSERT INTO `orders_products` (`id`, `order_id`, `product_id`, `product_quantity`, `price`, `discounted_price`, `final_price`, `created`, `modified`) VALUES
(1, 1, 4, 5, '65', '54', '678', '2016-07-13 00:00:00', '2016-07-28 17:28:41'),
(17, 1, 46, 0, '', '', '230', '2016-07-29 07:06:07', '2016-07-29 07:06:07'),
(18, 2, 46, 2, '23', '12', '12', '0000-00-00 00:00:00', '2016-08-05 18:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `orders_shippings`
--

CREATE TABLE `orders_shippings` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_shippings`
--

INSERT INTO `orders_shippings` (`id`, `order_id`, `firstname`, `lastname`, `email`, `street_address`, `city`, `country`, `pincode`, `phone`, `mobile`, `created`, `modified`) VALUES
(1, 1, 'dfgd', 'dfgfg', 'dfgfgdf@dfgdfg.com', '5t6vvbcb, fgfdsf', 'dsfdfs', 'dsff', '3455445', '43545434535', '43545453435', '2016-07-19 00:00:00', '2016-07-28 17:38:35');

-- --------------------------------------------------------

--
-- Table structure for table `order_statuses`
--

CREATE TABLE `order_statuses` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_statuses`
--

INSERT INTO `order_statuses` (`id`, `code`, `name`, `created`, `modified`) VALUES
(1, '1', 'Pending', '2016-07-30 00:00:00', '2016-07-30 13:22:39'),
(2, '2', 'Processing', '2016-07-30 00:00:00', '2016-07-30 13:22:39'),
(3, '3', 'Delivered', '2016-08-01 00:00:00', '2016-08-01 12:17:27'),
(4, '4', 'Completed', '2016-08-01 00:00:00', '2016-08-01 12:17:27');

-- --------------------------------------------------------

--
-- Table structure for table `order_update_statuses`
--

CREATE TABLE `order_update_statuses` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_status_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_update_statuses`
--

INSERT INTO `order_update_statuses` (`id`, `order_id`, `order_status_id`, `admin_id`, `created`, `modified`) VALUES
(2, 1, 2, 4, '2016-08-02 18:54:10', '2016-08-02 18:54:10'),
(11, 1, 3, 4, '2016-08-05 11:04:58', '2016-08-05 11:04:58'),
(14, 2, 2, 4, '2016-08-05 13:17:56', '2016-08-05 13:17:56'),
(15, 2, 2, 4, '2016-08-05 13:18:58', '2016-08-05 13:18:58'),
(21, 1, 4, 4, '2016-08-05 13:26:01', '2016-08-05 13:26:01'),
(22, 2, 2, 4, '2016-08-06 06:47:42', '2016-08-06 06:47:42'),
(23, 2, 4, 4, '2016-08-06 06:47:51', '2016-08-06 06:47:51'),
(24, 1, 2, 24, '2016-08-18 06:42:50', '2016-08-18 06:42:50');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `item_code` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `product_desc` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `item_code`, `title`, `product_desc`, `created`, `modified`, `status`) VALUES
(80, 'ITEM80', 'item', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.', '2016-08-01 07:03:26', '2016-08-11 18:27:58', ''),
(81, 'THIS81', 'This Product', '', '2016-08-01 10:48:26', '2016-08-01 10:48:26', ''),
(82, 'ITEM82', 'item 32', '', '2016-08-01 10:53:05', '2016-08-01 10:53:05', '1');

-- --------------------------------------------------------

--
-- Table structure for table `products_attrs`
--

CREATE TABLE `products_attrs` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `video_link` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `packaging` varchar(255) NOT NULL,
  `uom` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `main_promo_1` varchar(255) NOT NULL,
  `main_promo_2` varchar(255) NOT NULL,
  `main_promo_3` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_attrs`
--

INSERT INTO `products_attrs` (`id`, `product_id`, `brand_id`, `model`, `video_link`, `size`, `weight`, `packaging`, `uom`, `quantity`, `main_promo_1`, `main_promo_2`, `main_promo_3`, `created`, `modified`) VALUES
(33, 80, 3, 'AAB2', 'http://abc.dff.com', '23', '55lbs', '23fX34v', '56', 5, 'value plus', 'solo plus', '0', '2016-08-01 07:03:26', '2016-08-01 07:03:26'),
(34, 81, 2, '', '', '', '', '', '', 0, '0', '0', '0', '2016-08-01 10:48:26', '2016-08-01 10:48:26'),
(35, 82, 1, '', '', '', '', '', '', 0, '0', '0', '0', '2016-08-01 10:53:05', '2016-08-01 10:53:05');

-- --------------------------------------------------------

--
-- Table structure for table `products_categories`
--

CREATE TABLE `products_categories` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_categories`
--

INSERT INTO `products_categories` (`id`, `category_id`, `product_id`, `created`, `modified`) VALUES
(160, 36, 80, '2016-08-01 07:03:26', '2016-08-01 07:03:26'),
(162, 5, 81, '2016-08-01 10:48:26', '2016-08-01 10:48:26'),
(163, 10, 81, '2016-08-01 10:48:26', '2016-08-01 10:48:26'),
(164, 12, 81, '2016-08-01 10:48:26', '2016-08-01 10:48:26'),
(165, 1, 82, '2016-08-01 10:53:05', '2016-08-01 10:53:05'),
(166, 2, 82, '2016-08-01 10:53:05', '2016-08-01 10:53:05'),
(167, 3, 82, '2016-08-01 10:53:05', '2016-08-01 10:53:05'),
(168, 4, 82, '2016-08-01 10:53:05', '2016-08-01 10:53:05'),
(169, 5, 82, '2016-08-01 10:53:05', '2016-08-01 10:53:05'),
(170, 9, 82, '2016-08-01 10:53:05', '2016-08-01 10:53:05'),
(171, 10, 82, '2016-08-01 10:53:05', '2016-08-01 10:53:05'),
(172, 12, 82, '2016-08-01 10:53:05', '2016-08-01 10:53:05'),
(173, 13, 82, '2016-08-01 10:53:05', '2016-08-01 10:53:05'),
(174, 14, 82, '2016-08-01 10:53:05', '2016-08-01 10:53:05'),
(175, 15, 82, '2016-08-01 10:53:05', '2016-08-01 10:53:05'),
(176, 16, 82, '2016-08-01 10:53:05', '2016-08-01 10:53:05'),
(177, 17, 82, '2016-08-01 10:53:05', '2016-08-01 10:53:05');

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE `products_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_dir` varchar(255) NOT NULL,
  `color_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_images`
--

INSERT INTO `products_images` (`id`, `product_id`, `product_code`, `image`, `image_dir`, `color_id`, `status`, `created`, `modified`) VALUES
(32, 80, '', 'prod4.jpg', 'webroot\\img\\files\\ProductsImages\\image\\', 4, 0, '2016-08-01 07:03:26', '2016-08-01 07:03:26'),
(33, 80, '', 'prod5.jpg', 'webroot\\img\\files\\ProductsImages\\image\\', 4, 0, '2016-08-01 07:03:26', '2016-08-01 07:03:26'),
(34, 80, '', 'prod1.jpg', 'webroot\\img\\files\\ProductsImages\\image\\', 7, 0, '2016-08-01 07:03:26', '2016-08-01 07:03:26'),
(35, 80, '', 'prod2.jpg', 'webroot\\img\\files\\ProductsImages\\image\\', 7, 0, '2016-08-01 07:03:26', '2016-08-01 07:03:26'),
(36, 80, '', 'prod3.jpg', 'webroot\\img\\files\\ProductsImages\\image\\', 7, 0, '2016-08-01 07:03:26', '2016-08-01 07:03:26'),
(37, 81, '', 'Koala.jpg', 'webroot\\img\\files\\ProductsImages\\image\\', 8, 0, '2016-08-01 10:48:26', '2016-08-01 10:48:26'),
(38, 81, '', 'Lighthouse.jpg', 'webroot\\img\\files\\ProductsImages\\image\\', 8, 0, '2016-08-01 10:48:26', '2016-08-01 10:48:26'),
(39, 81, '', 'Penguins.jpg', 'webroot\\img\\files\\ProductsImages\\image\\', 8, 0, '2016-08-01 10:48:26', '2016-08-01 10:48:26'),
(40, 81, '', 'Tulips.jpg', 'webroot\\img\\files\\ProductsImages\\image\\', 8, 0, '2016-08-01 10:48:26', '2016-08-01 10:48:26'),
(41, 81, '', 'Chrysanthemum.jpg', 'webroot\\img\\files\\ProductsImages\\image\\', 10, 0, '2016-08-01 10:48:27', '2016-08-01 10:48:27'),
(42, 81, '', 'Desert.jpg', 'webroot\\img\\files\\ProductsImages\\image\\', 10, 0, '2016-08-01 10:48:27', '2016-08-01 10:48:27'),
(43, 81, '', 'Hydrangeas.jpg', 'webroot\\img\\files\\ProductsImages\\image\\', 10, 0, '2016-08-01 10:48:27', '2016-08-01 10:48:27'),
(44, 82, '', 'Hydrangeas.jpg', 'webroot\\img\\files\\ProductsImages\\image\\', 6, 0, '2016-08-01 10:53:05', '2016-08-01 10:53:05'),
(45, 82, '', 'Jellyfish.jpg', 'webroot\\img\\files\\ProductsImages\\image\\', 6, 0, '2016-08-01 10:53:05', '2016-08-01 10:53:05'),
(46, 82, '', 'Koala.jpg', 'webroot\\img\\files\\ProductsImages\\image\\', 6, 0, '2016-08-01 10:53:06', '2016-08-01 10:53:06'),
(48, 82, '', 'Penguins.jpg', 'webroot\\img\\files\\ProductsImages\\image\\', 6, 0, '2016-08-01 10:53:06', '2016-08-01 10:53:06'),
(49, 82, '', 'Tulips.jpg', 'webroot\\img\\files\\ProductsImages\\image\\', 6, 0, '2016-08-01 10:53:06', '2016-08-01 10:53:06'),
(50, 82, '', 'Chrysanthemum.jpg', 'webroot\\img\\files\\ProductsImages\\image\\', 11, 0, '2016-08-01 10:53:06', '2016-08-01 10:53:06'),
(51, 82, '', 'Desert.jpg', 'webroot\\img\\files\\ProductsImages\\image\\', 11, 0, '2016-08-01 10:53:06', '2016-08-01 10:53:06');

-- --------------------------------------------------------

--
-- Table structure for table `products_marketing_images`
--

CREATE TABLE `products_marketing_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_dir` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_marketing_images`
--

INSERT INTO `products_marketing_images` (`id`, `product_id`, `image`, `image_dir`, `created`) VALUES
(1, 80, 'prod5.jpg', 'sdfff/fgfgfg', '2016-08-11 00:00:00'),
(3, 80, 'transhk2.jpg', 'webroot\\img\\files\\ProductsMarketingImages\\image\\', '2016-08-25 05:35:10');

-- --------------------------------------------------------

--
-- Table structure for table `products_prices`
--

CREATE TABLE `products_prices` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `list_price` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_prices`
--

INSERT INTO `products_prices` (`id`, `product_id`, `list_price`, `created`, `modified`) VALUES
(36, 80, '522', '2016-08-01 07:03:26', '2016-08-01 16:13:42'),
(37, 81, '100', '2016-08-01 10:48:26', '2016-08-01 10:48:26'),
(38, 82, '67', '2016-08-01 10:53:05', '2016-08-01 10:53:05');

-- --------------------------------------------------------

--
-- Table structure for table `products_relateds`
--

CREATE TABLE `products_relateds` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `related_product_1` varchar(255) NOT NULL,
  `related_product_2` varchar(255) NOT NULL,
  `related_product_3` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_relateds`
--

INSERT INTO `products_relateds` (`id`, `product_id`, `related_product_1`, `related_product_2`, `related_product_3`, `created`, `modified`) VALUES
(1, 80, '81', '82', '', '2016-08-10 00:00:00', '2016-08-10 18:53:01');

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` int(11) NOT NULL,
  `promo_code` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `discounted_amount_parent` varchar(255) NOT NULL,
  `quantity_parent` int(11) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `associated_product` varchar(255) NOT NULL,
  `child_product_id` int(11) NOT NULL,
  `discounted_amount_child` varchar(255) NOT NULL,
  `quantity_child` int(11) NOT NULL,
  `discount_parent_in` varchar(255) NOT NULL,
  `discount_child_in` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`id`, `promo_code`, `product_id`, `discounted_amount_parent`, `quantity_parent`, `start_date`, `end_date`, `associated_product`, `child_product_id`, `discounted_amount_child`, `quantity_child`, `discount_parent_in`, `discount_child_in`, `created`, `modified`) VALUES
(1, 'CSHA100', 80, '10', 1, '2016-08-03', '2016-08-04', 'true', 81, '2', 1, '$', '%', '2016-08-19 00:00:00', '2016-08-19 17:30:43'),
(2, 'CASH400', 80, '34', 3, '2016-02-12', '2017-08-23', 'true', 81, '20', 2, '$', '$', '2016-08-23 05:59:19', '2016-08-23 05:59:19'),
(3, 'CASH4005', 81, '34', 4, '2016-08-03', '2016-09-03', 'true', 81, '20', 4, '$', '$', '2016-08-25 05:26:41', '2016-08-25 05:26:41'),
(4, 'CASH400', 80, '2', 2, '2016-08-03', '2016-09-03', '0', 80, '20', 4, '$', '$', '2016-08-25 05:27:55', '2016-08-25 05:27:55');

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

CREATE TABLE `slider_images` (
  `id` int(2) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image_dir` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider_images`
--

INSERT INTO `slider_images` (`id`, `image`, `image_dir`, `created`, `modified`) VALUES
(2, '6.jpg', 'webroot\\img\\files\\SliderImages\\image\\', '2016-08-11 00:00:00', '2016-08-12 11:57:45'),
(3, '4.jpg', 'webroot\\img\\files\\SliderImages\\image\\', '2016-08-12 11:52:03', '2016-08-12 11:52:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `status`, `password`, `created`, `modified`) VALUES
(9, 'pradeep.danwal@sdnainfotech.com', '1', '202cb962ac59075b964b07152d234b70', '2016-08-18 12:24:01', '2016-08-18 12:24:01');

-- --------------------------------------------------------

--
-- Table structure for table `user_addresses`
--

CREATE TABLE `user_addresses` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `postalcode` varchar(255) NOT NULL,
  `telephone` int(11) NOT NULL,
  `fax_no` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_addresses`
--

INSERT INTO `user_addresses` (`id`, `user_id`, `street_address`, `city`, `state`, `country`, `postalcode`, `telephone`, `fax_no`, `created`, `modified`) VALUES
(1, 9, '12/northway', 'newyork', 'newyork', 'United States', '160101', 0, 0, '2016-07-19 09:45:07', '2016-07-19 09:45:07'),
(2, 9, '23 northway nuw', 'new-york', 'newyork chan', 'United States', '160101', 0, 0, '2016-07-19 09:47:48', '2016-07-19 09:47:48');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_dir` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `blockno` varchar(255) NOT NULL,
  `unitno` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `firstname`, `lastname`, `image`, `image_dir`, `dob`, `gender`, `mobile`, `blockno`, `unitno`, `company`, `position`, `created`, `modified`) VALUES
(14, 9, 'pradeep', 'danwal', 'Koala.jpg', 'webroot\\img\\files\\UserDetails\\image\\', '08-12-1986', 'M', '1234567', 'dfg', '34', 'dfg', 'dfg', '2016-08-18 12:24:01', '2016-08-18 12:24:01');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acl_phinxlog`
--
ALTER TABLE `acl_phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `acos`
--
ALTER TABLE `acos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lft` (`lft`,`rght`),
  ADD KEY `alias` (`alias`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aros`
--
ALTER TABLE `aros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lft` (`lft`,`rght`),
  ADD KEY `alias` (`alias`);

--
-- Indexes for table `aros_acos`
--
ALTER TABLE `aros_acos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `aro_id` (`aro_id`,`aco_id`),
  ADD KEY `aco_id` (`aco_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_products`
--
ALTER TABLE `cart_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_shippings`
--
ALTER TABLE `cart_shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_details`
--
ALTER TABLE `category_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configrations`
--
ALTER TABLE `configrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_products`
--
ALTER TABLE `orders_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_shippings`
--
ALTER TABLE `orders_shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_statuses`
--
ALTER TABLE `order_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_update_statuses`
--
ALTER TABLE `order_update_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_attrs`
--
ALTER TABLE `products_attrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_categories`
--
ALTER TABLE `products_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_images`
--
ALTER TABLE `products_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_marketing_images`
--
ALTER TABLE `products_marketing_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_prices`
--
ALTER TABLE `products_prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_relateds`
--
ALTER TABLE `products_relateds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acos`
--
ALTER TABLE `acos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;
--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `aros`
--
ALTER TABLE `aros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `aros_acos`
--
ALTER TABLE `aros_acos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cart_products`
--
ALTER TABLE `cart_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cart_shippings`
--
ALTER TABLE `cart_shippings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `category_details`
--
ALTER TABLE `category_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `configrations`
--
ALTER TABLE `configrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders_products`
--
ALTER TABLE `orders_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `orders_shippings`
--
ALTER TABLE `orders_shippings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `order_statuses`
--
ALTER TABLE `order_statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `order_update_statuses`
--
ALTER TABLE `order_update_statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `products_attrs`
--
ALTER TABLE `products_attrs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `products_categories`
--
ALTER TABLE `products_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;
--
-- AUTO_INCREMENT for table `products_images`
--
ALTER TABLE `products_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `products_marketing_images`
--
ALTER TABLE `products_marketing_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products_prices`
--
ALTER TABLE `products_prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `products_relateds`
--
ALTER TABLE `products_relateds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_addresses`
--
ALTER TABLE `user_addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
