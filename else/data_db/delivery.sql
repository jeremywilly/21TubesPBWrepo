-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 02:24 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `delivery`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `customer_id`, `address`, `description`) VALUES
(1, 1, '61807 Cathryn Mount Suite 910\nAidaberg, WI 52113-0406', 'asperiores adipisci enim'),
(2, 1, '50895 Klein Course Suite 554\nNitzschechester, UT 82537-9918', 'iste et tempore'),
(3, 2, '84235 Rahul Forge\nNew Abraham, KS 29169-1012', 'nisi in deleniti'),
(4, 2, '825 Jeffery Drives\nAshleighbury, CO 20887', 'voluptatum quos hic'),
(5, 3, '310 Major Place\nSouth Frederickfurt, WV 90961-6251', 'ea minima rerum'),
(6, 3, '304 Allan Trail\nKrishaven, UT 71599', 'quia et reprehenderit'),
(7, 4, '85862 Amalia Junctions Apt. 703\nSouth Wallace, ND 29407-6396', 'aperiam exercitationem non'),
(8, 4, '8182 Lakin Mission\nEast Keanu, NE 22274', 'suscipit distinctio sed'),
(9, 5, '52653 Johnson Harbor\nKasandramouth, SC 09864', 'repellendus maxime perferendis'),
(10, 5, '21543 Stokes Rest Suite 451\nFraneckistad, IL 45247', 'nihil unde ratione'),
(11, 6, '654 Nico Hills\nKochhaven, DC 10775', 'animi architecto non'),
(12, 6, '1257 Hoeger Island Apt. 337\nTravisberg, NJ 09896', 'quis officia et'),
(13, 7, '9592 Kaylah Canyon\nNorvalburgh, SC 70899', 'vel nisi dicta'),
(14, 7, '68213 Keeling Fork Suite 848\nAlexandershire, UT 33988', 'pariatur officia et'),
(15, 8, '3108 Grimes Plaza\nNew Juvenal, NE 40583', 'et accusantium sequi'),
(16, 8, '57082 Halvorson Walk Apt. 951\nTreutelton, WI 56985', 'et cumque velit'),
(17, 9, '43339 Idella Pass\nLake Federico, DE 49012', 'ex saepe voluptas'),
(18, 9, '2683 Schoen Plains\nVolkmanland, MO 89446', 'suscipit sed natus'),
(19, 10, '41381 Bartoletti Manors\nGreenholtport, ME 12220', 'omnis quia eaque'),
(20, 10, '763 Ledner Ramp\nNorth Loriberg, MT 60602', 'aut qui blanditiis'),
(21, 11, '185 Padberg Harbors\nEast Daphne, NE 20199', 'quia architecto atque'),
(22, 11, '18636 Hickle Groves\nSouth Lura, RI 76319', 'tempore voluptas ipsum'),
(23, 12, '993 Dusty Well Apt. 767\nNorth Keyshawnland, NH 25670', 'cum et minima'),
(24, 12, '432 Eugenia Walk\nNew Roselyn, AL 51293-2305', 'aut recusandae voluptatem'),
(25, 13, '63019 Feest Extensions Suite 626\nSouth Tressiemouth, OR 51582-5232', 'sint veritatis cum'),
(26, 13, '282 Rupert Mills Apt. 413\nEugeneview, ME 17428-8591', 'voluptatem doloremque eveniet'),
(27, 14, '2991 Isidro Rapids\nNew Dalton, OH 28334-6534', 'aut voluptatem et'),
(28, 14, '27533 Frankie Plains\nSouth Natalieville, WI 48177-4685', 'perspiciatis sed laboriosam'),
(29, 15, '25898 Rene Plain\nElnorashire, IL 15132', 'nihil illum nisi'),
(30, 15, '620 Wilson Ford Apt. 396\nWest Stacy, HI 25356', 'cum et eum'),
(31, 16, '385 Elda Corner\nNew Hallieberg, MT 23501', 'magnam asperiores provident'),
(32, 16, '151 Blanca Creek Suite 341\nVanceview, UT 33148', 'libero sit sed'),
(33, 17, '69182 Becker Turnpike Apt. 300\nStantonbury, UT 13069', 'aut labore in'),
(34, 17, '55409 Oceane Overpass Suite 775\nDavontefurt, TN 73681', 'facilis maxime molestias'),
(35, 18, '5074 Emmerich Shores Suite 804\nLake Deloresside, SD 45707', 'nihil dolores eius'),
(36, 18, '54977 VonRueden Bridge\nNorth Christamouth, LA 78972-4168', 'possimus sit molestiae'),
(37, 19, '1848 Kutch Junctions Suite 781\nSouth Darrion, GA 27094-3179', 'atque eius neque'),
(38, 19, '956 Kertzmann Parkways Suite 528\nWest Carissa, TX 51432', 'tempora officia ipsum'),
(39, 20, '404 Stefanie Village Suite 024\nNew Destiney, MT 15829', 'maxime omnis et'),
(40, 20, '59966 Streich Plains\nBethanyton, NE 52820', 'non illo omnis'),
(41, 21, '72276 Mann Street\nWest Margarett, ME 42366-0418', 'quo aut et'),
(42, 21, '22069 Dietrich Pike\nMatteoview, RI 97515', 'nesciunt quis in'),
(43, 22, '1684 Jamal Radial\nSkilesburgh, AL 55225', 'id et culpa'),
(44, 22, '9927 Bosco Branch Suite 720\nDeckowfort, OH 42578', 'facilis autem unde'),
(45, 23, '2486 Ally Brooks\nEast Kailee, CT 00276-3221', 'eius mollitia illo'),
(46, 23, '48321 Kuphal Causeway\nConnberg, HI 17546', 'illo veritatis voluptas'),
(47, 24, '118 Hugh Avenue Apt. 220\nHagenesbury, PA 07283-7565', 'voluptas nam quas'),
(48, 24, '15240 Max Flat\nOttilieville, MN 17135', 'rem eum laborum'),
(49, 25, '103 Genevieve Roads\nBartonborough, NE 73999-7728', 'occaecati doloribus dolorum'),
(50, 25, '638 Collins Wells\nMraztown, WV 42961', 'dolores rem quibusdam'),
(51, 26, '49516 Schiller Track Apt. 050\nNoemietown, SD 84655-6477', 'similique quis voluptate'),
(52, 26, '745 Jeremie Garden Suite 819\nMireyaberg, SC 15477', 'natus enim et'),
(53, 27, '4815 Lemke Drives Apt. 750\nNew Alanna, AZ 10970', 'reprehenderit et corrupti'),
(54, 27, '9583 Noelia Road\nSouth Carleestad, DC 08192', 'sunt necessitatibus fuga'),
(55, 28, '14441 Abdiel Trail\nEast Meaghanbury, OR 91993', 'saepe delectus et'),
(56, 28, '878 Tomasa Junction\nNorth Tomas, MT 34185-6731', 'sit temporibus distinctio'),
(57, 29, '77464 McLaughlin Land Suite 872\nEast Danielle, OH 03130-9020', 'excepturi tempore deleniti'),
(58, 29, '1397 Jovan Prairie Suite 690\nWest Janyfort, MN 61624-8211', 'et et itaque'),
(59, 30, '1914 Carole Key Apt. 797\nEast Garry, HI 77139-6665', 'consequatur quaerat vero'),
(60, 30, '45645 Junior Plaza\nEast Antonia, IN 24044-9155', 'labore neque culpa'),
(61, 31, '13075 Elsie Harbor Suite 380\nCormierport, IL 70063-9107', 'alias quia beatae'),
(62, 31, '910 Ramiro Plain Apt. 164\nKeaganland, DC 77114', 'molestiae neque ipsam'),
(63, 32, '3734 Broderick Walk\nKeeblerberg, NC 28180', 'id quis explicabo'),
(64, 32, '762 Spinka Shoal\nLake Dwightstad, HI 15068', 'temporibus quam officiis'),
(65, 33, '8443 McGlynn Hills Apt. 065\nSouth Carolyne, NH 52293', 'praesentium aut ut'),
(66, 33, '1876 Dicki Port\nCasandraland, HI 09400-0912', 'eos aspernatur quaerat'),
(67, 34, '6449 Crona Center\nNew Lorenabury, IL 33986', 'necessitatibus ut qui'),
(68, 34, '322 Mosciski Highway\nSkylabury, OK 62767', 'similique earum placeat'),
(69, 35, '6222 Fritsch Lakes\nLeannechester, AL 22070-3920', 'eum autem excepturi'),
(70, 35, '3662 Cayla Mill Suite 113\nGiovannimouth, KS 55074', 'rerum sed enim'),
(71, 36, '87909 Marianna Heights Suite 898\nGreenfelderside, AZ 73042-4868', 'dolores id porro'),
(72, 36, '21566 Diana Loop\nSouth Christelleborough, LA 51359', 'ducimus vel voluptatem'),
(73, 37, '9129 Hintz Ferry\nMercedeschester, VA 66537-4653', 'animi ut alias'),
(74, 37, '35323 Thiel Groves Suite 431\nEast Kendall, CA 65527-9648', 'voluptatem atque quia'),
(75, 38, '73721 Connelly Lake\nKochton, MD 52926-8905', 'sit sed a'),
(76, 38, '62583 Hudson Trace\nWest Nona, ND 65705', 'tempore ut ullam'),
(77, 39, '19294 Johnathon Junction\nMoenhaven, SD 62634', 'non quibusdam eligendi'),
(78, 39, '9538 Lillie Path\nEast Nola, CT 50200-8214', 'accusamus sit odio'),
(79, 40, '4809 Dexter Parkways\nEast Devyn, NY 63805-1038', 'corrupti tempora ut'),
(80, 40, '117 Hagenes Highway\nAhmadburgh, OR 26393', 'dolor libero sint'),
(81, 41, '79292 Rutherford Mountain\nLake Angie, AL 87227', 'qui ut beatae'),
(82, 41, '8354 Isaias Creek\nRosalynport, NH 54211-3171', 'ab laudantium dolorum'),
(83, 42, '6018 Keshawn Ford\nNorth Elseville, KS 13121', 'error impedit ratione'),
(84, 42, '888 Hand Ford Suite 432\nStantonville, TX 62316', 'nostrum cumque qui'),
(85, 43, '18721 Monahan Corner Suite 118\nDameonfort, VA 36672', 'pariatur ab reprehenderit'),
(86, 43, '27492 Furman Drive Suite 468\nNew Kylerbury, IA 88816-5805', 'numquam aut sequi'),
(87, 44, '80481 Arthur Glen\nWest Noemieview, SD 86480-6545', 'nisi soluta qui'),
(88, 44, '8104 Hilma Hill\nAustynview, WA 24637-3522', 'itaque minima est'),
(89, 45, '3393 Purdy Crossing Apt. 882\nPort Marjolaine, AK 39439', 'recusandae nulla qui'),
(90, 45, '1653 Dennis Key Suite 230\nLake Chase, SD 16179', 'impedit sit accusantium'),
(91, 46, '224 Zemlak Village Apt. 145\nPort Jake, NY 87934-6420', 'voluptas qui repudiandae'),
(92, 46, '962 Mavis Villages\nNew Marilieborough, AL 94176', 'id aliquid dolorem'),
(93, 47, '364 Bogan Road\nEast Alta, MD 49653-8432', 'libero voluptatem molestiae'),
(94, 47, '347 Witting Terrace\nPort Vidaport, MD 23469', 'delectus occaecati qui'),
(95, 48, '61927 Derick Ramp\nProsaccomouth, VT 72099-8899', 'qui enim aspernatur'),
(96, 48, '34969 Robel Neck\nEast Myrtis, NV 19273', 'suscipit adipisci quia'),
(97, 49, '5296 Dietrich Burg Apt. 393\nEast Ellsworthview, WV 26343', 'est porro exercitationem'),
(98, 49, '474 Nienow Mount Apt. 413\nJaidachester, KS 24376-5953', 'ea cupiditate facere'),
(99, 50, '3939 Pfannerstill Avenue\nEmardfort, MT 04513', 'quas omnis voluptatum'),
(100, 50, '8909 Vern Fort\nNorth Dawn, KY 93009', 'nemo et dignissimos');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`) VALUES
(1, 'Elmo Batz'),
(2, 'Mr. Alexie Harris DVM'),
(3, 'Tomas Greenholt'),
(4, 'Roselyn Conroy'),
(5, 'Mr. Tito Abbott IV'),
(6, 'Dr. Vita Hahn III'),
(7, 'Aryanna Bode'),
(8, 'Brooke Hintz'),
(9, 'Tania Mann'),
(10, 'Ms. Elvera Kirlin V'),
(11, 'Dorian Harvey'),
(12, 'Martina Labadie'),
(13, 'Dr. Mervin Reilly DDS'),
(14, 'Noemy Hills'),
(15, 'Johnson O\'Keefe'),
(16, 'Darrion Stiedemann I'),
(17, 'Nikki Gislason'),
(18, 'Dr. Addie Shields MD'),
(19, 'Kaya Kuphal'),
(20, 'Hyman Parker'),
(21, 'Miss Camille Willms I'),
(22, 'Kenny Zulauf'),
(23, 'Lydia Ebert DVM'),
(24, 'Prof. Hope Dooley DDS'),
(25, 'Reinhold Lehner'),
(26, 'Prof. Jarrell Huel'),
(27, 'Elvera Mohr'),
(28, 'Leon Gottlieb'),
(29, 'Laurianne Hauck'),
(30, 'Osborne Keeling'),
(31, 'Lurline Hill'),
(32, 'Rae Skiles'),
(33, 'Eulalia Dicki'),
(34, 'Aaron Koss'),
(35, 'Jeanne Larson DVM'),
(36, 'Margot Kihn V'),
(37, 'Enola Parisian'),
(38, 'Ms. Kasey Grant'),
(39, 'Ms. Ruby Hill DVM'),
(40, 'Rowland Blanda'),
(41, 'Chelsie Ryan'),
(42, 'Miss Dejah Leuschke MD'),
(43, 'Felix Gleason'),
(44, 'Mrs. Antonina Quigley IV'),
(45, 'Mrs. Claudie Predovic III'),
(46, 'Monserrate Pagac Sr.'),
(47, 'Erick Mayert'),
(48, 'Catherine Mueller'),
(49, 'Braden Baumbach I'),
(50, 'Alvena O\'Kon');

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

CREATE TABLE `deliveries` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `destination_id` int(10) UNSIGNED NOT NULL,
  `driver_id` int(10) UNSIGNED NOT NULL,
  `scheduled_datetime` datetime NOT NULL,
  `start_datetime` datetime DEFAULT NULL,
  `end_datetime` datetime DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_details`
--

CREATE TABLE `delivery_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `delivery_id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_work_date` datetime NOT NULL,
  `end_work_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `name`, `start_work_date`, `end_work_date`) VALUES
(1, 'Rubye Stiedemann', '2018-11-07 03:40:26', NULL),
(2, 'Ms. Scarlett Nolan Jr.', '1997-05-13 04:16:24', NULL),
(3, 'Daisha Hickle', '2000-10-31 08:50:48', NULL),
(4, 'Moises Bode', '2008-02-03 00:02:00', NULL),
(5, 'Desmond Hilpert', '2007-03-21 23:38:31', NULL),
(6, 'Brenna Herman', '2000-10-15 00:06:10', NULL),
(7, 'Kaleb Morissette', '1986-11-20 22:17:34', NULL),
(8, 'Emmett Hills', '1996-09-27 11:09:07', NULL),
(9, 'Lavada West', '1974-05-05 18:58:02', NULL),
(10, 'Dina Bartell', '1999-08-08 13:05:48', NULL),
(11, 'Lowell Rempel DDS', '1978-07-14 17:06:29', NULL),
(12, 'Glenna Anderson Sr.', '2014-07-01 13:28:46', NULL),
(13, 'Cleveland Greenholt', '1991-02-19 20:21:21', NULL),
(14, 'Ms. Princess Aufderhar', '1988-12-11 08:08:40', NULL),
(15, 'Dr. Victor Carroll Jr.', '2001-02-17 10:30:22', NULL),
(16, 'Alexandria Murray', '2017-12-22 06:27:10', NULL),
(17, 'Jade Nicolas', '2003-01-04 12:45:21', NULL),
(18, 'Mr. Randal Bosco MD', '2016-01-28 08:02:00', NULL),
(19, 'Clarabelle Wilkinson', '2015-10-30 05:59:14', NULL),
(20, 'Jakayla Simonis', '2008-12-26 04:29:47', NULL),
(21, 'Prof. Monty Kreiger II', '2002-06-21 02:40:49', NULL),
(22, 'Lloyd Hayes', '2005-03-17 19:13:36', NULL),
(23, 'Eddie DuBuque IV', '2007-07-20 01:31:23', NULL),
(24, 'Sigurd Corwin', '1979-04-09 00:10:17', NULL),
(25, 'Prof. Freeman Buckridge Jr.', '1991-01-08 00:01:02', NULL),
(26, 'Carolina Hermiston', '1977-03-16 22:16:08', NULL),
(27, 'Lyda Keebler', '1999-07-29 05:41:06', NULL),
(28, 'Dorothy Kuhlman', '1992-05-12 11:45:56', NULL),
(29, 'Prof. Jeffrey Dietrich', '1975-01-08 23:19:12', NULL),
(30, 'Brant Erdman Sr.', '2002-04-10 05:39:25', NULL),
(31, 'Anne Gislason', '1975-10-11 13:57:32', NULL),
(32, 'Pauline Dach', '1978-10-06 01:50:38', NULL),
(33, 'Mozell Ankunding', '2012-06-16 08:30:43', NULL),
(34, 'Ramiro Bayer', '2006-04-25 10:18:41', NULL),
(35, 'Eloise Ankunding Sr.', '1980-06-26 19:11:15', NULL),
(36, 'Mr. Emory Cole IV', '2006-12-26 05:07:12', NULL),
(37, 'Cordie Adams DDS', '2000-01-20 01:47:35', NULL),
(38, 'Clinton Pouros', '1990-11-04 20:39:56', NULL),
(39, 'Paolo Bogisich', '1985-07-29 11:21:11', NULL),
(40, 'Loy Fritsch', '1993-06-05 05:44:52', NULL),
(41, 'Lynn Kuvalis', '1977-11-16 22:05:15', NULL),
(42, 'Prof. Verna Armstrong V', '1998-09-24 03:24:27', NULL),
(43, 'Mr. Isaac Hammes DDS', '1970-01-12 12:03:59', NULL),
(44, 'Prof. Jada Weimann V', '1995-01-13 12:04:42', NULL),
(45, 'D\'angelo Rohan MD', '1989-11-04 21:44:57', NULL),
(46, 'Allison Mitchell', '2013-06-09 19:49:58', NULL),
(47, 'Betsy Feeney IV', '1980-12-20 20:07:37', NULL),
(48, 'Garland Schaden', '1982-09-28 18:57:16', NULL),
(49, 'Marquis Harvey', '2006-10-15 03:39:44', NULL),
(50, 'Kariane Denesik', '2008-10-24 00:12:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `category`) VALUES
(1, 'Ayam', 'Food'),
(2, 'Sapi', 'Food'),
(3, 'Meja', 'Furniture'),
(4, 'Kursi', 'Furniture');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deliveries_destination_id_foreign` (`destination_id`),
  ADD KEY `deliveries_driver_id_foreign` (`driver_id`),
  ADD KEY `deliveries_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `delivery_details`
--
ALTER TABLE `delivery_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delivery_details_delivery_id_foreign` (`delivery_id`),
  ADD KEY `delivery_details_item_id_foreign` (`item_id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `delivery_details`
--
ALTER TABLE `delivery_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD CONSTRAINT `deliveries_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `deliveries_destination_id_foreign` FOREIGN KEY (`destination_id`) REFERENCES `addresses` (`id`),
  ADD CONSTRAINT `deliveries_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`id`);

--
-- Constraints for table `delivery_details`
--
ALTER TABLE `delivery_details`
  ADD CONSTRAINT `delivery_details_delivery_id_foreign` FOREIGN KEY (`delivery_id`) REFERENCES `deliveries` (`id`),
  ADD CONSTRAINT `delivery_details_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;