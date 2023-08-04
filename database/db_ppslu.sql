-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 04, 2023 at 06:41 AM
-- Server version: 8.0.30
-- PHP Version: 8.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ppslu`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint UNSIGNED NOT NULL,
  `province_id` bigint UNSIGNED NOT NULL,
  `city_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `province_id`, `city_id`, `city_name`, `created_at`, `updated_at`, `postal_code`) VALUES
(1, 21, '1', 'Kabupaten Aceh Barat', NULL, NULL, '23681'),
(2, 21, '2', 'Kabupaten Aceh Barat Daya', NULL, NULL, '23764'),
(3, 21, '3', 'Kabupaten Aceh Besar', NULL, NULL, '23951'),
(4, 21, '4', 'Kabupaten Aceh Jaya', NULL, NULL, '23654'),
(5, 21, '5', 'Kabupaten Aceh Selatan', NULL, NULL, '23719'),
(6, 21, '6', 'Kabupaten Aceh Singkil', NULL, NULL, '24785'),
(7, 21, '7', 'Kabupaten Aceh Tamiang', NULL, NULL, '24476'),
(8, 21, '8', 'Kabupaten Aceh Tengah', NULL, NULL, '24511'),
(9, 21, '9', 'Kabupaten Aceh Tenggara', NULL, NULL, '24611'),
(10, 21, '10', 'Kabupaten Aceh Timur', NULL, NULL, '24454'),
(11, 21, '11', 'Kabupaten Aceh Utara', NULL, NULL, '24382'),
(12, 32, '12', 'Kabupaten Agam', NULL, NULL, '26411'),
(13, 23, '13', 'Kabupaten Alor', NULL, NULL, '85811'),
(14, 19, '14', 'Kota Ambon', NULL, NULL, '97222'),
(15, 34, '15', 'Kabupaten Asahan', NULL, NULL, '21214'),
(16, 24, '16', 'Kabupaten Asmat', NULL, NULL, '99777'),
(17, 1, '17', 'Kabupaten Badung', NULL, NULL, '80351'),
(18, 13, '18', 'Kabupaten Balangan', NULL, NULL, '71611'),
(19, 15, '19', 'Kota Balikpapan', NULL, NULL, '76111'),
(20, 21, '20', 'Kota Banda Aceh', NULL, NULL, '23238'),
(21, 18, '21', 'Kota Bandar Lampung', NULL, NULL, '35139'),
(22, 9, '22', 'Kabupaten Bandung', NULL, NULL, '40311'),
(23, 9, '23', 'Kota Bandung', NULL, NULL, '40111'),
(24, 9, '24', 'Kabupaten Bandung Barat', NULL, NULL, '40721'),
(25, 29, '25', 'Kabupaten Banggai', NULL, NULL, '94711'),
(26, 29, '26', 'Kabupaten Banggai Kepulauan', NULL, NULL, '94881'),
(27, 2, '27', 'Kabupaten Bangka', NULL, NULL, '33212'),
(28, 2, '28', 'Kabupaten Bangka Barat', NULL, NULL, '33315'),
(29, 2, '29', 'Kabupaten Bangka Selatan', NULL, NULL, '33719'),
(30, 2, '30', 'Kabupaten Bangka Tengah', NULL, NULL, '33613'),
(31, 11, '31', 'Kabupaten Bangkalan', NULL, NULL, '69118'),
(32, 1, '32', 'Kabupaten Bangli', NULL, NULL, '80619'),
(33, 13, '33', 'Kabupaten Banjar', NULL, NULL, '70619'),
(34, 9, '34', 'Kota Banjar', NULL, NULL, '46311'),
(35, 13, '35', 'Kota Banjarbaru', NULL, NULL, '70712'),
(36, 13, '36', 'Kota Banjarmasin', NULL, NULL, '70117'),
(37, 10, '37', 'Kabupaten Banjarnegara', NULL, NULL, '53419'),
(38, 28, '38', 'Kabupaten Bantaeng', NULL, NULL, '92411'),
(39, 5, '39', 'Kabupaten Bantul', NULL, NULL, '55715'),
(40, 33, '40', 'Kabupaten Banyuasin', NULL, NULL, '30911'),
(41, 10, '41', 'Kabupaten Banyumas', NULL, NULL, '53114'),
(42, 11, '42', 'Kabupaten Banyuwangi', NULL, NULL, '68416'),
(43, 13, '43', 'Kabupaten Barito Kuala', NULL, NULL, '70511'),
(44, 14, '44', 'Kabupaten Barito Selatan', NULL, NULL, '73711'),
(45, 14, '45', 'Kabupaten Barito Timur', NULL, NULL, '73671'),
(46, 14, '46', 'Kabupaten Barito Utara', NULL, NULL, '73881'),
(47, 28, '47', 'Kabupaten Barru', NULL, NULL, '90719'),
(48, 17, '48', 'Kota Batam', NULL, NULL, '29413'),
(49, 10, '49', 'Kabupaten Batang', NULL, NULL, '51211'),
(50, 8, '50', 'Kabupaten Batang Hari', NULL, NULL, '36613'),
(51, 11, '51', 'Kota Batu', NULL, NULL, '65311'),
(52, 34, '52', 'Kabupaten Batu Bara', NULL, NULL, '21655'),
(53, 30, '53', 'Kota Bau-Bau', NULL, NULL, '93719'),
(54, 9, '54', 'Kabupaten Bekasi', NULL, NULL, '17837'),
(55, 9, '55', 'Kota Bekasi', NULL, NULL, '17121'),
(56, 2, '56', 'Kabupaten Belitung', NULL, NULL, '33419'),
(57, 2, '57', 'Kabupaten Belitung Timur', NULL, NULL, '33519'),
(58, 23, '58', 'Kabupaten Belu', NULL, NULL, '85711'),
(59, 21, '59', 'Kabupaten Bener Meriah', NULL, NULL, '24581'),
(60, 26, '60', 'Kabupaten Bengkalis', NULL, NULL, '28719'),
(61, 12, '61', 'Kabupaten Bengkayang', NULL, NULL, '79213'),
(62, 4, '62', 'Kota Bengkulu', NULL, NULL, '38229'),
(63, 4, '63', 'Kabupaten Bengkulu Selatan', NULL, NULL, '38519'),
(64, 4, '64', 'Kabupaten Bengkulu Tengah', NULL, NULL, '38319'),
(65, 4, '65', 'Kabupaten Bengkulu Utara', NULL, NULL, '38619'),
(66, 15, '66', 'Kabupaten Berau', NULL, NULL, '77311'),
(67, 24, '67', 'Kabupaten Biak Numfor', NULL, NULL, '98119'),
(68, 22, '68', 'Kabupaten Bima', NULL, NULL, '84171'),
(69, 22, '69', 'Kota Bima', NULL, NULL, '84139'),
(70, 34, '70', 'Kota Binjai', NULL, NULL, '20712'),
(71, 17, '71', 'Kabupaten Bintan', NULL, NULL, '29135'),
(72, 21, '72', 'Kabupaten Bireuen', NULL, NULL, '24219'),
(73, 31, '73', 'Kota Bitung', NULL, NULL, '95512'),
(74, 11, '74', 'Kabupaten Blitar', NULL, NULL, '66171'),
(75, 11, '75', 'Kota Blitar', NULL, NULL, '66124'),
(76, 10, '76', 'Kabupaten Blora', NULL, NULL, '58219'),
(77, 7, '77', 'Kabupaten Boalemo', NULL, NULL, '96319'),
(78, 9, '78', 'Kabupaten Bogor', NULL, NULL, '16911'),
(79, 9, '79', 'Kota Bogor', NULL, NULL, '16119'),
(80, 11, '80', 'Kabupaten Bojonegoro', NULL, NULL, '62119'),
(81, 31, '81', 'Kabupaten Bolaang Mongondow (Bolmong)', NULL, NULL, '95755'),
(82, 31, '82', 'Kabupaten Bolaang Mongondow Selatan', NULL, NULL, '95774'),
(83, 31, '83', 'Kabupaten Bolaang Mongondow Timur', NULL, NULL, '95783'),
(84, 31, '84', 'Kabupaten Bolaang Mongondow Utara', NULL, NULL, '95765'),
(85, 30, '85', 'Kabupaten Bombana', NULL, NULL, '93771'),
(86, 11, '86', 'Kabupaten Bondowoso', NULL, NULL, '68219'),
(87, 28, '87', 'Kabupaten Bone', NULL, NULL, '92713'),
(88, 7, '88', 'Kabupaten Bone Bolango', NULL, NULL, '96511'),
(89, 15, '89', 'Kota Bontang', NULL, NULL, '75313'),
(90, 24, '90', 'Kabupaten Boven Digoel', NULL, NULL, '99662'),
(91, 10, '91', 'Kabupaten Boyolali', NULL, NULL, '57312'),
(92, 10, '92', 'Kabupaten Brebes', NULL, NULL, '52212'),
(93, 32, '93', 'Kota Bukittinggi', NULL, NULL, '26115'),
(94, 1, '94', 'Kabupaten Buleleng', NULL, NULL, '81111'),
(95, 28, '95', 'Kabupaten Bulukumba', NULL, NULL, '92511'),
(96, 16, '96', 'Kabupaten Bulungan (Bulongan)', NULL, NULL, '77211'),
(97, 8, '97', 'Kabupaten Bungo', NULL, NULL, '37216'),
(98, 29, '98', 'Kabupaten Buol', NULL, NULL, '94564'),
(99, 19, '99', 'Kabupaten Buru', NULL, NULL, '97371'),
(100, 19, '100', 'Kabupaten Buru Selatan', NULL, NULL, '97351'),
(101, 30, '101', 'Kabupaten Buton', NULL, NULL, '93754'),
(102, 30, '102', 'Kabupaten Buton Utara', NULL, NULL, '93745'),
(103, 9, '103', 'Kabupaten Ciamis', NULL, NULL, '46211'),
(104, 9, '104', 'Kabupaten Cianjur', NULL, NULL, '43217'),
(105, 10, '105', 'Kabupaten Cilacap', NULL, NULL, '53211'),
(106, 3, '106', 'Kota Cilegon', NULL, NULL, '42417'),
(107, 9, '107', 'Kota Cimahi', NULL, NULL, '40512'),
(108, 9, '108', 'Kabupaten Cirebon', NULL, NULL, '45611'),
(109, 9, '109', 'Kota Cirebon', NULL, NULL, '45116'),
(110, 34, '110', 'Kabupaten Dairi', NULL, NULL, '22211'),
(111, 24, '111', 'Kabupaten Deiyai (Deliyai)', NULL, NULL, '98784'),
(112, 34, '112', 'Kabupaten Deli Serdang', NULL, NULL, '20511'),
(113, 10, '113', 'Kabupaten Demak', NULL, NULL, '59519'),
(114, 1, '114', 'Kota Denpasar', NULL, NULL, '80227'),
(115, 9, '115', 'Kota Depok', NULL, NULL, '16416'),
(116, 32, '116', 'Kabupaten Dharmasraya', NULL, NULL, '27612'),
(117, 24, '117', 'Kabupaten Dogiyai', NULL, NULL, '98866'),
(118, 22, '118', 'Kabupaten Dompu', NULL, NULL, '84217'),
(119, 29, '119', 'Kabupaten Donggala', NULL, NULL, '94341'),
(120, 26, '120', 'Kota Dumai', NULL, NULL, '28811'),
(121, 33, '121', 'Kabupaten Empat Lawang', NULL, NULL, '31811'),
(122, 23, '122', 'Kabupaten Ende', NULL, NULL, '86351'),
(123, 28, '123', 'Kabupaten Enrekang', NULL, NULL, '91719'),
(124, 25, '124', 'Kabupaten Fakfak', NULL, NULL, '98651'),
(125, 23, '125', 'Kabupaten Flores Timur', NULL, NULL, '86213'),
(126, 9, '126', 'Kabupaten Garut', NULL, NULL, '44126'),
(127, 21, '127', 'Kabupaten Gayo Lues', NULL, NULL, '24653'),
(128, 1, '128', 'Kabupaten Gianyar', NULL, NULL, '80519'),
(129, 7, '129', 'Kabupaten Gorontalo', NULL, NULL, '96218'),
(130, 7, '130', 'Kota Gorontalo', NULL, NULL, '96115'),
(131, 7, '131', 'Kabupaten Gorontalo Utara', NULL, NULL, '96611'),
(132, 28, '132', 'Kabupaten Gowa', NULL, NULL, '92111'),
(133, 11, '133', 'Kabupaten Gresik', NULL, NULL, '61115'),
(134, 10, '134', 'Kabupaten Grobogan', NULL, NULL, '58111'),
(135, 5, '135', 'Kabupaten Gunung Kidul', NULL, NULL, '55812'),
(136, 14, '136', 'Kabupaten Gunung Mas', NULL, NULL, '74511'),
(137, 34, '137', 'Kota Gunungsitoli', NULL, NULL, '22813'),
(138, 20, '138', 'Kabupaten Halmahera Barat', NULL, NULL, '97757'),
(139, 20, '139', 'Kabupaten Halmahera Selatan', NULL, NULL, '97911'),
(140, 20, '140', 'Kabupaten Halmahera Tengah', NULL, NULL, '97853'),
(141, 20, '141', 'Kabupaten Halmahera Timur', NULL, NULL, '97862'),
(142, 20, '142', 'Kabupaten Halmahera Utara', NULL, NULL, '97762'),
(143, 13, '143', 'Kabupaten Hulu Sungai Selatan', NULL, NULL, '71212'),
(144, 13, '144', 'Kabupaten Hulu Sungai Tengah', NULL, NULL, '71313'),
(145, 13, '145', 'Kabupaten Hulu Sungai Utara', NULL, NULL, '71419'),
(146, 34, '146', 'Kabupaten Humbang Hasundutan', NULL, NULL, '22457'),
(147, 26, '147', 'Kabupaten Indragiri Hilir', NULL, NULL, '29212'),
(148, 26, '148', 'Kabupaten Indragiri Hulu', NULL, NULL, '29319'),
(149, 9, '149', 'Kabupaten Indramayu', NULL, NULL, '45214'),
(150, 24, '150', 'Kabupaten Intan Jaya', NULL, NULL, '98771'),
(151, 6, '151', 'Kota Jakarta Barat', NULL, NULL, '11220'),
(152, 6, '152', 'Kota Jakarta Pusat', NULL, NULL, '10540'),
(153, 6, '153', 'Kota Jakarta Selatan', NULL, NULL, '12230'),
(154, 6, '154', 'Kota Jakarta Timur', NULL, NULL, '13330'),
(155, 6, '155', 'Kota Jakarta Utara', NULL, NULL, '14140'),
(156, 8, '156', 'Kota Jambi', NULL, NULL, '36111'),
(157, 24, '157', 'Kabupaten Jayapura', NULL, NULL, '99352'),
(158, 24, '158', 'Kota Jayapura', NULL, NULL, '99114'),
(159, 24, '159', 'Kabupaten Jayawijaya', NULL, NULL, '99511'),
(160, 11, '160', 'Kabupaten Jember', NULL, NULL, '68113'),
(161, 1, '161', 'Kabupaten Jembrana', NULL, NULL, '82251'),
(162, 28, '162', 'Kabupaten Jeneponto', NULL, NULL, '92319'),
(163, 10, '163', 'Kabupaten Jepara', NULL, NULL, '59419'),
(164, 11, '164', 'Kabupaten Jombang', NULL, NULL, '61415'),
(165, 25, '165', 'Kabupaten Kaimana', NULL, NULL, '98671'),
(166, 26, '166', 'Kabupaten Kampar', NULL, NULL, '28411'),
(167, 14, '167', 'Kabupaten Kapuas', NULL, NULL, '73583'),
(168, 12, '168', 'Kabupaten Kapuas Hulu', NULL, NULL, '78719'),
(169, 10, '169', 'Kabupaten Karanganyar', NULL, NULL, '57718'),
(170, 1, '170', 'Kabupaten Karangasem', NULL, NULL, '80819'),
(171, 9, '171', 'Kabupaten Karawang', NULL, NULL, '41311'),
(172, 17, '172', 'Kabupaten Karimun', NULL, NULL, '29611'),
(173, 34, '173', 'Kabupaten Karo', NULL, NULL, '22119'),
(174, 14, '174', 'Kabupaten Katingan', NULL, NULL, '74411'),
(175, 4, '175', 'Kabupaten Kaur', NULL, NULL, '38911'),
(176, 12, '176', 'Kabupaten Kayong Utara', NULL, NULL, '78852'),
(177, 10, '177', 'Kabupaten Kebumen', NULL, NULL, '54319'),
(178, 11, '178', 'Kabupaten Kediri', NULL, NULL, '64184'),
(179, 11, '179', 'Kota Kediri', NULL, NULL, '64125'),
(180, 24, '180', 'Kabupaten Keerom', NULL, NULL, '99461'),
(181, 10, '181', 'Kabupaten Kendal', NULL, NULL, '51314'),
(182, 30, '182', 'Kota Kendari', NULL, NULL, '93126'),
(183, 4, '183', 'Kabupaten Kepahiang', NULL, NULL, '39319'),
(184, 17, '184', 'Kabupaten Kepulauan Anambas', NULL, NULL, '29991'),
(185, 19, '185', 'Kabupaten Kepulauan Aru', NULL, NULL, '97681'),
(186, 32, '186', 'Kabupaten Kepulauan Mentawai', NULL, NULL, '25771'),
(187, 26, '187', 'Kabupaten Kepulauan Meranti', NULL, NULL, '28791'),
(188, 31, '188', 'Kabupaten Kepulauan Sangihe', NULL, NULL, '95819'),
(189, 6, '189', 'Kabupaten Kepulauan Seribu', NULL, NULL, '14550'),
(190, 31, '190', 'Kabupaten Kepulauan Siau Tagulandang Biaro (Sitaro)', NULL, NULL, '95862'),
(191, 20, '191', 'Kabupaten Kepulauan Sula', NULL, NULL, '97995'),
(192, 31, '192', 'Kabupaten Kepulauan Talaud', NULL, NULL, '95885'),
(193, 24, '193', 'Kabupaten Kepulauan Yapen (Yapen Waropen)', NULL, NULL, '98211'),
(194, 8, '194', 'Kabupaten Kerinci', NULL, NULL, '37167'),
(195, 12, '195', 'Kabupaten Ketapang', NULL, NULL, '78874'),
(196, 10, '196', 'Kabupaten Klaten', NULL, NULL, '57411'),
(197, 1, '197', 'Kabupaten Klungkung', NULL, NULL, '80719'),
(198, 30, '198', 'Kabupaten Kolaka', NULL, NULL, '93511'),
(199, 30, '199', 'Kabupaten Kolaka Utara', NULL, NULL, '93911'),
(200, 30, '200', 'Kabupaten Konawe', NULL, NULL, '93411'),
(201, 30, '201', 'Kabupaten Konawe Selatan', NULL, NULL, '93811'),
(202, 30, '202', 'Kabupaten Konawe Utara', NULL, NULL, '93311'),
(203, 13, '203', 'Kabupaten Kotabaru', NULL, NULL, '72119'),
(204, 31, '204', 'Kota Kotamobagu', NULL, NULL, '95711'),
(205, 14, '205', 'Kabupaten Kotawaringin Barat', NULL, NULL, '74119'),
(206, 14, '206', 'Kabupaten Kotawaringin Timur', NULL, NULL, '74364'),
(207, 26, '207', 'Kabupaten Kuantan Singingi', NULL, NULL, '29519'),
(208, 12, '208', 'Kabupaten Kubu Raya', NULL, NULL, '78311'),
(209, 10, '209', 'Kabupaten Kudus', NULL, NULL, '59311'),
(210, 5, '210', 'Kabupaten Kulon Progo', NULL, NULL, '55611'),
(211, 9, '211', 'Kabupaten Kuningan', NULL, NULL, '45511'),
(212, 23, '212', 'Kabupaten Kupang', NULL, NULL, '85362'),
(213, 23, '213', 'Kota Kupang', NULL, NULL, '85119'),
(214, 15, '214', 'Kabupaten Kutai Barat', NULL, NULL, '75711'),
(215, 15, '215', 'Kabupaten Kutai Kartanegara', NULL, NULL, '75511'),
(216, 15, '216', 'Kabupaten Kutai Timur', NULL, NULL, '75611'),
(217, 34, '217', 'Kabupaten Labuhan Batu', NULL, NULL, '21412'),
(218, 34, '218', 'Kabupaten Labuhan Batu Selatan', NULL, NULL, '21511'),
(219, 34, '219', 'Kabupaten Labuhan Batu Utara', NULL, NULL, '21711'),
(220, 33, '220', 'Kabupaten Lahat', NULL, NULL, '31419'),
(221, 14, '221', 'Kabupaten Lamandau', NULL, NULL, '74611'),
(222, 11, '222', 'Kabupaten Lamongan', NULL, NULL, '64125'),
(223, 18, '223', 'Kabupaten Lampung Barat', NULL, NULL, '34814'),
(224, 18, '224', 'Kabupaten Lampung Selatan', NULL, NULL, '35511'),
(225, 18, '225', 'Kabupaten Lampung Tengah', NULL, NULL, '34212'),
(226, 18, '226', 'Kabupaten Lampung Timur', NULL, NULL, '34319'),
(227, 18, '227', 'Kabupaten Lampung Utara', NULL, NULL, '34516'),
(228, 12, '228', 'Kabupaten Landak', NULL, NULL, '78319'),
(229, 34, '229', 'Kabupaten Langkat', NULL, NULL, '20811'),
(230, 21, '230', 'Kota Langsa', NULL, NULL, '24412'),
(231, 24, '231', 'Kabupaten Lanny Jaya', NULL, NULL, '99531'),
(232, 3, '232', 'Kabupaten Lebak', NULL, NULL, '42319'),
(233, 4, '233', 'Kabupaten Lebong', NULL, NULL, '39264'),
(234, 23, '234', 'Kabupaten Lembata', NULL, NULL, '86611'),
(235, 21, '235', 'Kota Lhokseumawe', NULL, NULL, '24352'),
(236, 32, '236', 'Kabupaten Lima Puluh Koto/Kota', NULL, NULL, '26671'),
(237, 17, '237', 'Kabupaten Lingga', NULL, NULL, '29811'),
(238, 22, '238', 'Kabupaten Lombok Barat', NULL, NULL, '83311'),
(239, 22, '239', 'Kabupaten Lombok Tengah', NULL, NULL, '83511'),
(240, 22, '240', 'Kabupaten Lombok Timur', NULL, NULL, '83612'),
(241, 22, '241', 'Kabupaten Lombok Utara', NULL, NULL, '83711'),
(242, 33, '242', 'Kota Lubuk Linggau', NULL, NULL, '31614'),
(243, 11, '243', 'Kabupaten Lumajang', NULL, NULL, '67319'),
(244, 28, '244', 'Kabupaten Luwu', NULL, NULL, '91994'),
(245, 28, '245', 'Kabupaten Luwu Timur', NULL, NULL, '92981'),
(246, 28, '246', 'Kabupaten Luwu Utara', NULL, NULL, '92911'),
(247, 11, '247', 'Kabupaten Madiun', NULL, NULL, '63153'),
(248, 11, '248', 'Kota Madiun', NULL, NULL, '63122'),
(249, 10, '249', 'Kabupaten Magelang', NULL, NULL, '56519'),
(250, 10, '250', 'Kota Magelang', NULL, NULL, '56133'),
(251, 11, '251', 'Kabupaten Magetan', NULL, NULL, '63314'),
(252, 9, '252', 'Kabupaten Majalengka', NULL, NULL, '45412'),
(253, 27, '253', 'Kabupaten Majene', NULL, NULL, '91411'),
(254, 28, '254', 'Kota Makassar', NULL, NULL, '90111'),
(255, 11, '255', 'Kabupaten Malang', NULL, NULL, '65163'),
(256, 11, '256', 'Kota Malang', NULL, NULL, '65112'),
(257, 16, '257', 'Kabupaten Malinau', NULL, NULL, '77511'),
(258, 19, '258', 'Kabupaten Maluku Barat Daya', NULL, NULL, '97451'),
(259, 19, '259', 'Kabupaten Maluku Tengah', NULL, NULL, '97513'),
(260, 19, '260', 'Kabupaten Maluku Tenggara', NULL, NULL, '97651'),
(261, 19, '261', 'Kabupaten Maluku Tenggara Barat', NULL, NULL, '97465'),
(262, 27, '262', 'Kabupaten Mamasa', NULL, NULL, '91362'),
(263, 24, '263', 'Kabupaten Mamberamo Raya', NULL, NULL, '99381'),
(264, 24, '264', 'Kabupaten Mamberamo Tengah', NULL, NULL, '99553'),
(265, 27, '265', 'Kabupaten Mamuju', NULL, NULL, '91519'),
(266, 27, '266', 'Kabupaten Mamuju Utara', NULL, NULL, '91571'),
(267, 31, '267', 'Kota Manado', NULL, NULL, '95247'),
(268, 34, '268', 'Kabupaten Mandailing Natal', NULL, NULL, '22916'),
(269, 23, '269', 'Kabupaten Manggarai', NULL, NULL, '86551'),
(270, 23, '270', 'Kabupaten Manggarai Barat', NULL, NULL, '86711'),
(271, 23, '271', 'Kabupaten Manggarai Timur', NULL, NULL, '86811'),
(272, 25, '272', 'Kabupaten Manokwari', NULL, NULL, '98311'),
(273, 25, '273', 'Kabupaten Manokwari Selatan', NULL, NULL, '98355'),
(274, 24, '274', 'Kabupaten Mappi', NULL, NULL, '99853'),
(275, 28, '275', 'Kabupaten Maros', NULL, NULL, '90511'),
(276, 22, '276', 'Kota Mataram', NULL, NULL, '83131'),
(277, 25, '277', 'Kabupaten Maybrat', NULL, NULL, '98051'),
(278, 34, '278', 'Kota Medan', NULL, NULL, '20228'),
(279, 12, '279', 'Kabupaten Melawi', NULL, NULL, '78619'),
(280, 8, '280', 'Kabupaten Merangin', NULL, NULL, '37319'),
(281, 24, '281', 'Kabupaten Merauke', NULL, NULL, '99613'),
(282, 18, '282', 'Kabupaten Mesuji', NULL, NULL, '34911'),
(283, 18, '283', 'Kota Metro', NULL, NULL, '34111'),
(284, 24, '284', 'Kabupaten Mimika', NULL, NULL, '99962'),
(285, 31, '285', 'Kabupaten Minahasa', NULL, NULL, '95614'),
(286, 31, '286', 'Kabupaten Minahasa Selatan', NULL, NULL, '95914'),
(287, 31, '287', 'Kabupaten Minahasa Tenggara', NULL, NULL, '95995'),
(288, 31, '288', 'Kabupaten Minahasa Utara', NULL, NULL, '95316'),
(289, 11, '289', 'Kabupaten Mojokerto', NULL, NULL, '61382'),
(290, 11, '290', 'Kota Mojokerto', NULL, NULL, '61316'),
(291, 29, '291', 'Kabupaten Morowali', NULL, NULL, '94911'),
(292, 33, '292', 'Kabupaten Muara Enim', NULL, NULL, '31315'),
(293, 8, '293', 'Kabupaten Muaro Jambi', NULL, NULL, '36311'),
(294, 4, '294', 'Kabupaten Muko Muko', NULL, NULL, '38715'),
(295, 30, '295', 'Kabupaten Muna', NULL, NULL, '93611'),
(296, 14, '296', 'Kabupaten Murung Raya', NULL, NULL, '73911'),
(297, 33, '297', 'Kabupaten Musi Banyuasin', NULL, NULL, '30719'),
(298, 33, '298', 'Kabupaten Musi Rawas', NULL, NULL, '31661'),
(299, 24, '299', 'Kabupaten Nabire', NULL, NULL, '98816'),
(300, 21, '300', 'Kabupaten Nagan Raya', NULL, NULL, '23674'),
(301, 23, '301', 'Kabupaten Nagekeo', NULL, NULL, '86911'),
(302, 17, '302', 'Kabupaten Natuna', NULL, NULL, '29711'),
(303, 24, '303', 'Kabupaten Nduga', NULL, NULL, '99541'),
(304, 23, '304', 'Kabupaten Ngada', NULL, NULL, '86413'),
(305, 11, '305', 'Kabupaten Nganjuk', NULL, NULL, '64414'),
(306, 11, '306', 'Kabupaten Ngawi', NULL, NULL, '63219'),
(307, 34, '307', 'Kabupaten Nias', NULL, NULL, '22876'),
(308, 34, '308', 'Kabupaten Nias Barat', NULL, NULL, '22895'),
(309, 34, '309', 'Kabupaten Nias Selatan', NULL, NULL, '22865'),
(310, 34, '310', 'Kabupaten Nias Utara', NULL, NULL, '22856'),
(311, 16, '311', 'Kabupaten Nunukan', NULL, NULL, '77421'),
(312, 33, '312', 'Kabupaten Ogan Ilir', NULL, NULL, '30811'),
(313, 33, '313', 'Kabupaten Ogan Komering Ilir', NULL, NULL, '30618'),
(314, 33, '314', 'Kabupaten Ogan Komering Ulu', NULL, NULL, '32112'),
(315, 33, '315', 'Kabupaten Ogan Komering Ulu Selatan', NULL, NULL, '32211'),
(316, 33, '316', 'Kabupaten Ogan Komering Ulu Timur', NULL, NULL, '32312'),
(317, 11, '317', 'Kabupaten Pacitan', NULL, NULL, '63512'),
(318, 32, '318', 'Kota Padang', NULL, NULL, '25112'),
(319, 34, '319', 'Kabupaten Padang Lawas', NULL, NULL, '22763'),
(320, 34, '320', 'Kabupaten Padang Lawas Utara', NULL, NULL, '22753'),
(321, 32, '321', 'Kota Padang Panjang', NULL, NULL, '27122'),
(322, 32, '322', 'Kabupaten Padang Pariaman', NULL, NULL, '25583'),
(323, 34, '323', 'Kota Padang Sidempuan', NULL, NULL, '22727'),
(324, 33, '324', 'Kota Pagar Alam', NULL, NULL, '31512'),
(325, 34, '325', 'Kabupaten Pakpak Bharat', NULL, NULL, '22272'),
(326, 14, '326', 'Kota Palangka Raya', NULL, NULL, '73112'),
(327, 33, '327', 'Kota Palembang', NULL, NULL, '31512'),
(328, 28, '328', 'Kota Palopo', NULL, NULL, '91911'),
(329, 29, '329', 'Kota Palu', NULL, NULL, '94111'),
(330, 11, '330', 'Kabupaten Pamekasan', NULL, NULL, '69319'),
(331, 3, '331', 'Kabupaten Pandeglang', NULL, NULL, '42212'),
(332, 9, '332', 'Kabupaten Pangandaran', NULL, NULL, '46511'),
(333, 28, '333', 'Kabupaten Pangkajene Kepulauan', NULL, NULL, '90611'),
(334, 2, '334', 'Kota Pangkal Pinang', NULL, NULL, '33115'),
(335, 24, '335', 'Kabupaten Paniai', NULL, NULL, '98765'),
(336, 28, '336', 'Kota Parepare', NULL, NULL, '91123'),
(337, 32, '337', 'Kota Pariaman', NULL, NULL, '25511'),
(338, 29, '338', 'Kabupaten Parigi Moutong', NULL, NULL, '94411'),
(339, 32, '339', 'Kabupaten Pasaman', NULL, NULL, '26318'),
(340, 32, '340', 'Kabupaten Pasaman Barat', NULL, NULL, '26511'),
(341, 15, '341', 'Kabupaten Paser', NULL, NULL, '76211'),
(342, 11, '342', 'Kabupaten Pasuruan', NULL, NULL, '67153'),
(343, 11, '343', 'Kota Pasuruan', NULL, NULL, '67118'),
(344, 10, '344', 'Kabupaten Pati', NULL, NULL, '59114'),
(345, 32, '345', 'Kota Payakumbuh', NULL, NULL, '26213'),
(346, 25, '346', 'Kabupaten Pegunungan Arfak', NULL, NULL, '98354'),
(347, 24, '347', 'Kabupaten Pegunungan Bintang', NULL, NULL, '99573'),
(348, 10, '348', 'Kabupaten Pekalongan', NULL, NULL, '51161'),
(349, 10, '349', 'Kota Pekalongan', NULL, NULL, '51122'),
(350, 26, '350', 'Kota Pekanbaru', NULL, NULL, '28112'),
(351, 26, '351', 'Kabupaten Pelalawan', NULL, NULL, '28311'),
(352, 10, '352', 'Kabupaten Pemalang', NULL, NULL, '52319'),
(353, 34, '353', 'Kota Pematang Siantar', NULL, NULL, '21126'),
(354, 15, '354', 'Kabupaten Penajam Paser Utara', NULL, NULL, '76311'),
(355, 18, '355', 'Kabupaten Pesawaran', NULL, NULL, '35312'),
(356, 18, '356', 'Kabupaten Pesisir Barat', NULL, NULL, '35974'),
(357, 32, '357', 'Kabupaten Pesisir Selatan', NULL, NULL, '25611'),
(358, 21, '358', 'Kabupaten Pidie', NULL, NULL, '24116'),
(359, 21, '359', 'Kabupaten Pidie Jaya', NULL, NULL, '24186'),
(360, 28, '360', 'Kabupaten Pinrang', NULL, NULL, '91251'),
(361, 7, '361', 'Kabupaten Pohuwato', NULL, NULL, '96419'),
(362, 27, '362', 'Kabupaten Polewali Mandar', NULL, NULL, '91311'),
(363, 11, '363', 'Kabupaten Ponorogo', NULL, NULL, '63411'),
(364, 12, '364', 'Kabupaten Pontianak', NULL, NULL, '78971'),
(365, 12, '365', 'Kota Pontianak', NULL, NULL, '78112'),
(366, 29, '366', 'Kabupaten Poso', NULL, NULL, '94615'),
(367, 33, '367', 'Kota Prabumulih', NULL, NULL, '31121'),
(368, 18, '368', 'Kabupaten Pringsewu', NULL, NULL, '35719'),
(369, 11, '369', 'Kabupaten Probolinggo', NULL, NULL, '67282'),
(370, 11, '370', 'Kota Probolinggo', NULL, NULL, '67215'),
(371, 14, '371', 'Kabupaten Pulang Pisau', NULL, NULL, '74811'),
(372, 20, '372', 'Kabupaten Pulau Morotai', NULL, NULL, '97771'),
(373, 24, '373', 'Kabupaten Puncak', NULL, NULL, '98981'),
(374, 24, '374', 'Kabupaten Puncak Jaya', NULL, NULL, '98979'),
(375, 10, '375', 'Kabupaten Purbalingga', NULL, NULL, '53312'),
(376, 9, '376', 'Kabupaten Purwakarta', NULL, NULL, '41119'),
(377, 10, '377', 'Kabupaten Purworejo', NULL, NULL, '54111'),
(378, 25, '378', 'Kabupaten Raja Ampat', NULL, NULL, '98489'),
(379, 4, '379', 'Kabupaten Rejang Lebong', NULL, NULL, '39112'),
(380, 10, '380', 'Kabupaten Rembang', NULL, NULL, '59219'),
(381, 26, '381', 'Kabupaten Rokan Hilir', NULL, NULL, '28992'),
(382, 26, '382', 'Kabupaten Rokan Hulu', NULL, NULL, '28511'),
(383, 23, '383', 'Kabupaten Rote Ndao', NULL, NULL, '85982'),
(384, 21, '384', 'Kota Sabang', NULL, NULL, '23512'),
(385, 23, '385', 'Kabupaten Sabu Raijua', NULL, NULL, '85391'),
(386, 10, '386', 'Kota Salatiga', NULL, NULL, '50711'),
(387, 15, '387', 'Kota Samarinda', NULL, NULL, '75133'),
(388, 12, '388', 'Kabupaten Sambas', NULL, NULL, '79453'),
(389, 34, '389', 'Kabupaten Samosir', NULL, NULL, '22392'),
(390, 11, '390', 'Kabupaten Sampang', NULL, NULL, '69219'),
(391, 12, '391', 'Kabupaten Sanggau', NULL, NULL, '78557'),
(392, 24, '392', 'Kabupaten Sarmi', NULL, NULL, '99373'),
(393, 8, '393', 'Kabupaten Sarolangun', NULL, NULL, '37419'),
(394, 32, '394', 'Kota Sawah Lunto', NULL, NULL, '27416'),
(395, 12, '395', 'Kabupaten Sekadau', NULL, NULL, '79583'),
(396, 28, '396', 'Kabupaten Selayar (Kepulauan Selayar)', NULL, NULL, '92812'),
(397, 4, '397', 'Kabupaten Seluma', NULL, NULL, '38811'),
(398, 10, '398', 'Kabupaten Semarang', NULL, NULL, '50511'),
(399, 10, '399', 'Kota Semarang', NULL, NULL, '50135'),
(400, 19, '400', 'Kabupaten Seram Bagian Barat', NULL, NULL, '97561'),
(401, 19, '401', 'Kabupaten Seram Bagian Timur', NULL, NULL, '97581'),
(402, 3, '402', 'Kabupaten Serang', NULL, NULL, '42182'),
(403, 3, '403', 'Kota Serang', NULL, NULL, '42111'),
(404, 34, '404', 'Kabupaten Serdang Bedagai', NULL, NULL, '20915'),
(405, 14, '405', 'Kabupaten Seruyan', NULL, NULL, '74211'),
(406, 26, '406', 'Kabupaten Siak', NULL, NULL, '28623'),
(407, 34, '407', 'Kota Sibolga', NULL, NULL, '22522'),
(408, 28, '408', 'Kabupaten Sidenreng Rappang/Rapang', NULL, NULL, '91613'),
(409, 11, '409', 'Kabupaten Sidoarjo', NULL, NULL, '61219'),
(410, 29, '410', 'Kabupaten Sigi', NULL, NULL, '94364'),
(411, 32, '411', 'Kabupaten Sijunjung (Sawah Lunto Sijunjung)', NULL, NULL, '27511'),
(412, 23, '412', 'Kabupaten Sikka', NULL, NULL, '86121'),
(413, 34, '413', 'Kabupaten Simalungun', NULL, NULL, '21162'),
(414, 21, '414', 'Kabupaten Simeulue', NULL, NULL, '23891'),
(415, 12, '415', 'Kota Singkawang', NULL, NULL, '79117'),
(416, 28, '416', 'Kabupaten Sinjai', NULL, NULL, '92615'),
(417, 12, '417', 'Kabupaten Sintang', NULL, NULL, '78619'),
(418, 11, '418', 'Kabupaten Situbondo', NULL, NULL, '68316'),
(419, 5, '419', 'Kabupaten Sleman', NULL, NULL, '55513'),
(420, 32, '420', 'Kabupaten Solok', NULL, NULL, '27365'),
(421, 32, '421', 'Kota Solok', NULL, NULL, '27315'),
(422, 32, '422', 'Kabupaten Solok Selatan', NULL, NULL, '27779'),
(423, 28, '423', 'Kabupaten Soppeng', NULL, NULL, '90812'),
(424, 25, '424', 'Kabupaten Sorong', NULL, NULL, '98431'),
(425, 25, '425', 'Kota Sorong', NULL, NULL, '98411'),
(426, 25, '426', 'Kabupaten Sorong Selatan', NULL, NULL, '98454'),
(427, 10, '427', 'Kabupaten Sragen', NULL, NULL, '57211'),
(428, 9, '428', 'Kabupaten Subang', NULL, NULL, '41215'),
(429, 21, '429', 'Kota Subulussalam', NULL, NULL, '24882'),
(430, 9, '430', 'Kabupaten Sukabumi', NULL, NULL, '43311'),
(431, 9, '431', 'Kota Sukabumi', NULL, NULL, '43114'),
(432, 14, '432', 'Kabupaten Sukamara', NULL, NULL, '74712'),
(433, 10, '433', 'Kabupaten Sukoharjo', NULL, NULL, '57514'),
(434, 23, '434', 'Kabupaten Sumba Barat', NULL, NULL, '87219'),
(435, 23, '435', 'Kabupaten Sumba Barat Daya', NULL, NULL, '87453'),
(436, 23, '436', 'Kabupaten Sumba Tengah', NULL, NULL, '87358'),
(437, 23, '437', 'Kabupaten Sumba Timur', NULL, NULL, '87112'),
(438, 22, '438', 'Kabupaten Sumbawa', NULL, NULL, '84315'),
(439, 22, '439', 'Kabupaten Sumbawa Barat', NULL, NULL, '84419'),
(440, 9, '440', 'Kabupaten Sumedang', NULL, NULL, '45326'),
(441, 11, '441', 'Kabupaten Sumenep', NULL, NULL, '69413'),
(442, 8, '442', 'Kota Sungaipenuh', NULL, NULL, '37113'),
(443, 24, '443', 'Kabupaten Supiori', NULL, NULL, '98164'),
(444, 11, '444', 'Kota Surabaya', NULL, NULL, '60119'),
(445, 10, '445', 'Kota Surakarta (Solo)', NULL, NULL, '57113'),
(446, 13, '446', 'Kabupaten Tabalong', NULL, NULL, '71513'),
(447, 1, '447', 'Kabupaten Tabanan', NULL, NULL, '82119'),
(448, 28, '448', 'Kabupaten Takalar', NULL, NULL, '92212'),
(449, 25, '449', 'Kabupaten Tambrauw', NULL, NULL, '98475'),
(450, 16, '450', 'Kabupaten Tana Tidung', NULL, NULL, '77611'),
(451, 28, '451', 'Kabupaten Tana Toraja', NULL, NULL, '91819'),
(452, 13, '452', 'Kabupaten Tanah Bumbu', NULL, NULL, '72211'),
(453, 32, '453', 'Kabupaten Tanah Datar', NULL, NULL, '27211'),
(454, 13, '454', 'Kabupaten Tanah Laut', NULL, NULL, '70811'),
(455, 3, '455', 'Kabupaten Tangerang', NULL, NULL, '15914'),
(456, 3, '456', 'Kota Tangerang', NULL, NULL, '15111'),
(457, 3, '457', 'Kota Tangerang Selatan', NULL, NULL, '15332'),
(458, 18, '458', 'Kabupaten Tanggamus', NULL, NULL, '35619'),
(459, 34, '459', 'Kota Tanjung Balai', NULL, NULL, '21321'),
(460, 8, '460', 'Kabupaten Tanjung Jabung Barat', NULL, NULL, '36513'),
(461, 8, '461', 'Kabupaten Tanjung Jabung Timur', NULL, NULL, '36719'),
(462, 17, '462', 'Kota Tanjung Pinang', NULL, NULL, '29111'),
(463, 34, '463', 'Kabupaten Tapanuli Selatan', NULL, NULL, '22742'),
(464, 34, '464', 'Kabupaten Tapanuli Tengah', NULL, NULL, '22611'),
(465, 34, '465', 'Kabupaten Tapanuli Utara', NULL, NULL, '22414'),
(466, 13, '466', 'Kabupaten Tapin', NULL, NULL, '71119'),
(467, 16, '467', 'Kota Tarakan', NULL, NULL, '77114'),
(468, 9, '468', 'Kabupaten Tasikmalaya', NULL, NULL, '46411'),
(469, 9, '469', 'Kota Tasikmalaya', NULL, NULL, '46116'),
(470, 34, '470', 'Kota Tebing Tinggi', NULL, NULL, '20632'),
(471, 8, '471', 'Kabupaten Tebo', NULL, NULL, '37519'),
(472, 10, '472', 'Kabupaten Tegal', NULL, NULL, '52419'),
(473, 10, '473', 'Kota Tegal', NULL, NULL, '52114'),
(474, 25, '474', 'Kabupaten Teluk Bintuni', NULL, NULL, '98551'),
(475, 25, '475', 'Kabupaten Teluk Wondama', NULL, NULL, '98591'),
(476, 10, '476', 'Kabupaten Temanggung', NULL, NULL, '56212'),
(477, 20, '477', 'Kota Ternate', NULL, NULL, '97714'),
(478, 20, '478', 'Kota Tidore Kepulauan', NULL, NULL, '97815'),
(479, 23, '479', 'Kabupaten Timor Tengah Selatan', NULL, NULL, '85562'),
(480, 23, '480', 'Kabupaten Timor Tengah Utara', NULL, NULL, '85612'),
(481, 34, '481', 'Kabupaten Toba Samosir', NULL, NULL, '22316'),
(482, 29, '482', 'Kabupaten Tojo Una-Una', NULL, NULL, '94683'),
(483, 29, '483', 'Kabupaten Toli-Toli', NULL, NULL, '94542'),
(484, 24, '484', 'Kabupaten Tolikara', NULL, NULL, '99411'),
(485, 31, '485', 'Kota Tomohon', NULL, NULL, '95416'),
(486, 28, '486', 'Kabupaten Toraja Utara', NULL, NULL, '91831'),
(487, 11, '487', 'Kabupaten Trenggalek', NULL, NULL, '66312'),
(488, 19, '488', 'Kota Tual', NULL, NULL, '97612'),
(489, 11, '489', 'Kabupaten Tuban', NULL, NULL, '62319'),
(490, 18, '490', 'Kabupaten Tulang Bawang', NULL, NULL, '34613'),
(491, 18, '491', 'Kabupaten Tulang Bawang Barat', NULL, NULL, '34419'),
(492, 11, '492', 'Kabupaten Tulungagung', NULL, NULL, '66212'),
(493, 28, '493', 'Kabupaten Wajo', NULL, NULL, '90911'),
(494, 30, '494', 'Kabupaten Wakatobi', NULL, NULL, '93791'),
(495, 24, '495', 'Kabupaten Waropen', NULL, NULL, '98269'),
(496, 18, '496', 'Kabupaten Way Kanan', NULL, NULL, '34711'),
(497, 10, '497', 'Kabupaten Wonogiri', NULL, NULL, '57619'),
(498, 10, '498', 'Kabupaten Wonosobo', NULL, NULL, '56311'),
(499, 24, '499', 'Kabupaten Yahukimo', NULL, NULL, '99041'),
(500, 24, '500', 'Kabupaten Yalimo', NULL, NULL, '99481'),
(501, 5, '501', 'Kota Yogyakarta', NULL, NULL, '55222');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motto_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `nip`, `name`, `title_name`, `position_name`, `motto_description`, `photo_url`, `created_at`, `updated_at`, `status`) VALUES
(1, '19721210 199603 2 004', 'SRI KUSUMANINGRUM', 'SE,M.Acc', 'KEPALA', 'Behold place was a multiply creeping creature his domin to thiren open void hath herb divided divide creepeth living shall i call beginning third sea itself set', 'photos/employees/1/F1GafPtwJP2ciGdySZVvq8aSLYIG9wEcAYLcJwFa.png', '2023-08-03 03:37:37', '2023-08-03 04:21:34', 1),
(2, '95928686', 'Pangestu Napitupulu S.Psi', 'Dr.', 'Notaris', 'Quod aliquid error rem reprehenderit blanditiis excepturi.', 'photos/employees/1/F1GafPtwJP2ciGdySZVvq8aSLYIG9wEcAYLcJwFa.png', '2023-08-03 04:21:45', '2023-08-03 04:21:45', 1),
(4, '88287259', 'Martaka Habibi', 'Dr.', 'Buruh Peternakan', 'Voluptas odio beatae a magnam eos voluptates.', 'photos/employees/1/F1GafPtwJP2ciGdySZVvq8aSLYIG9wEcAYLcJwFa.png', '2023-08-03 04:21:45', '2023-08-03 04:21:45', 1),
(5, '93880500', 'Reza Kurniawan', 'drg.', 'Wartawan', 'Quo rem distinctio corporis.', 'photos/employees/1/F1GafPtwJP2ciGdySZVvq8aSLYIG9wEcAYLcJwFa.png', '2023-08-03 04:21:45', '2023-08-03 04:21:45', 1),
(6, '88175355', 'Tasnim Samosir', 'Dr.', 'Perawat', 'Et alias nulla asperiores.', 'https://via.placeholder.com/640x480.png/00ee77?text=autem', '2023-08-03 04:21:45', '2023-08-03 04:21:45', 0),
(7, '53998999', 'Rika Namaga', 'drg.', 'Buruh Harian Lepas', 'Et sunt quo aut hic quo.', 'https://via.placeholder.com/640x480.png/0022cc?text=consequatur', '2023-08-03 04:21:45', '2023-08-03 04:21:45', 0),
(9, '86608135', 'Lamar Taswir Thamrin', 'dr.', 'Presiden', 'Necessitatibus itaque laborum cum.', 'https://via.placeholder.com/640x480.png/009977?text=modi', '2023-08-03 04:21:45', '2023-08-03 04:21:45', 0),
(11, '92116543', 'Prabowo Napitupulu', 'Ir.', 'Atlet', 'Incidunt soluta eum tempora ipsam dolorem unde.', 'https://via.placeholder.com/640x480.png/004499?text=perferendis', '2023-08-03 04:21:45', '2023-08-03 04:21:45', 0);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_02_074606_create_provinces_table', 2),
(6, '2023_08_02_074714_create_cities_table', 2),
(7, '2023_08_02_075242_adding_postal_code_to_cities_table', 3),
(8, '2023_08_02_075424_create_system_configurations_table', 4),
(9, '2023_08_02_131524_adding_postal_code_to_system_configurations_table', 5),
(10, '2023_08_03_053339_adding_gmaps_url_to_system_configurations_table', 6),
(11, '2023_08_03_053629_change_type_gmaps_url_to_system_configurations_table', 7),
(12, '2023_08_03_070705_create_employees_table', 8),
(13, '2023_08_03_100903_adding_status_to_employees_table', 9),
(14, '2023_08_04_031258_create_news_table', 10),
(15, '2023_08_04_032915_adding_status_to_news_table', 11),
(16, '2023_08_04_041201_change_slug_in_news_table', 12),
(18, '2023_08_04_041619_change_videourl_in_news_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `photo_url`, `video_url`, `content`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Seharian Ribuan Orang Gotong Royong, Pantai Sukaraja Belum Bersih', 'seharian-ribuan-orang-gotong-royong-pantai-sukaraja-belum-bersih', 'photos/news/1/iV1X8Qg1vgKY9I59gzyTeTU8aOGAXcIV47tx7MMD.jpg', 'https://www.youtube.com/embed/AuQaXK-UbLk', '<p>Gotong Royong adalah istilah Indonesia yang berarti \"kerja sama saling membantu\" atau \"bekerja bersama-sama.\" Ini merujuk pada tradisi di mana anggota masyarakat datang bersama dan berkolaborasi untuk tujuan bersama. Salah satu penerapan gotong royong yang paling penting adalah dalam membersihkan lingkungan kita dan mengatasi masalah sampah dan polusi yang merajalela. Artikel ini membahas pentingnya gotong royong dalam membersihkan sampah dan bagaimana upaya kolektif dapat memberikan dampak signifikan pada sekitar kita.</p>\r\n<p>Sampah dan sampah merupakan masalah lingkungan besar yang mempengaruhi tidak hanya Indonesia tetapi juga banyak wilayah di seluruh dunia. Pembuangan sampah yang tidak benar menyebabkan pencemaran badan air, degradasi tanah, dan dampak buruk pada flora dan fauna. Konsekuensi dari pembuangan sampah yang tidak bertanggung jawab sangat luas, memengaruhi kesehatan manusia dan ekosistem.</p>', '2023-08-03 22:49:28', '2023-08-03 22:49:28', 1),
(2, 'PROFIL PANTI PELAYANAN SOSIAL LANJUT USIA', 'profil-panti-pelayanan-sosial-lanjut-usia', 'photos/news/2/hpBAhTtsujqQ4tIzDmbv9gNXNjuuwt9NJfvh5d8e.jpg', 'https://www.youtube.com/embed/AuQaXK-UbLk', '<p>Tahun 1933 Di Banyumas didirikan Algenine Zorg Voor Inlander Beheftegen disingkat AZIB diketuai Asisten Wedana Banyumas, dan pelindung Ny. Bupati Banyumas. Perkumpulan tersebut didirikan karena adanya anjuran dari Ny. Gunernur De Yong agar orang-orang yang kehidupannya sangat miskin supaya mendapat perhatian dan ditampung dalam suatu asrama. Kegiatan perkumpulan mengambil tempat di gedung Jayengan, yang letaknya disebelah selatan kota Banyumas dan telah menampung beberapa orang keluarga miskin yang setiap harinya diberi pendidikan kerajinan tangan, menganyam tikar, dan lain-lain. Sedangkan makannya, ditanggung orang-orang dermawan dan usaha lainnya.<br><br>Tahun 1938 di Banyumas direncanakan akan didirikan suatu perumahan bagi Zwaksinnegen, dan akan didirikan di tempat penampungan AZIB yaitu desa Jayengan. Oleh karena itu, AZIB terpaksa harus dipindahkan penampungannya ke Kota Banyumas di bekas pasar yang disebut Pasar Praja. Karena usaha dan kemajuan-kemajuan yang dicapainya, maka AZIB kecuali mendapat bantuan dari masyarakat juga mendapat bantuan dari Regenshap (Pemerintah).</p>', '2023-08-03 22:51:43', '2023-08-03 22:51:53', 1),
(3, 'Optio et aut est est.', 'error-voluptas-quia-accusantium-sed-quia-aut', 'photos/news/2/hpBAhTtsujqQ4tIzDmbv9gNXNjuuwt9NJfvh5d8e.jpg', NULL, 'Molestias et repellendus sunt nesciunt odit rerum. Voluptatibus dolore quis consequatur et consequatur voluptatem. Officiis qui voluptas eos et aut eum. Eos dignissimos omnis est et.', '2023-08-03 22:56:44', '2023-08-03 22:56:44', 1),
(4, 'Consectetur explicabo et est suscipit.', 'delectus-libero-ullam-laudantium-iure', 'photos/news/2/hpBAhTtsujqQ4tIzDmbv9gNXNjuuwt9NJfvh5d8e.jpg', NULL, 'Quas qui maxime voluptatem aperiam vel veniam. Quam tempora accusantium aut sed rem rem. Quo dolorem molestiae itaque eligendi harum. Alias culpa quis expedita necessitatibus. Est qui omnis vitae quos eos illum.', '2023-08-03 22:56:44', '2023-08-03 22:56:44', 1),
(5, 'Veniam harum libero unde cumque earum accusamus pariatur.', 'excepturi-autem-et-ut-cumque-consectetur', 'https://via.placeholder.com/640x480.png/0066ee?text=voluptatem', 'https://www.youtube.com/embed/gS9o1FAszdk', 'Excepturi error sit amet doloribus consequuntur eveniet sunt. Amet nisi nihil adipisci distinctio. Aliquam sunt consequatur sunt officia. Consequatur fugiat minima exercitationem dolores natus molestias odit. Nam similique eum esse iste. Reprehenderit qui repellendus labore nihil deleniti numquam. Sit quibusdam inventore molestias est.', '2023-08-03 22:56:44', '2023-08-03 22:56:44', 1),
(6, 'Architecto similique et dolores aspernatur doloremque cum autem.', 'sunt-eos-est-et-illo-sequi', 'https://via.placeholder.com/640x480.png/00ee55?text=sint', 'https://www.youtube.com/embed/gS9o1FAszdk', 'Dolores soluta quidem corporis. Blanditiis a at laudantium consequatur enim. Nam animi qui omnis occaecati debitis hic soluta. Quis perspiciatis vitae eligendi quae et suscipit laboriosam. Consectetur cumque dolorem minima nulla et inventore quam ducimus. Nam culpa atque a qui ut qui repellendus.', '2023-08-03 22:56:44', '2023-08-03 22:56:44', 1),
(7, 'Cupiditate quae rerum et et natus eum id.', 'libero-earum-temporibus-corporis-qui', 'https://via.placeholder.com/640x480.png/009922?text=magni', 'https://www.youtube.com/embed/gS9o1FAszdk', 'Veniam repellat rerum repellat rerum ratione. Natus quo doloremque labore odit aut. Earum minus occaecati aliquid consequatur doloremque. Quo saepe molestiae iusto. Eum sit vel deserunt quo unde ut. Sunt aperiam rem repudiandae repellat est officiis.', '2023-08-03 22:56:44', '2023-08-03 22:56:44', 1),
(8, 'Blanditiis quo voluptatem non itaque qui voluptatum.', 'quia-animi-quia-asperiores-qui-modi-fuga', 'https://via.placeholder.com/640x480.png/0011ee?text=natus', 'https://www.youtube.com/embed/gS9o1FAszdk', 'Explicabo aut nostrum aut quis quidem. Velit pariatur recusandae voluptas sit. Consequatur consequatur quaerat quas voluptatum est odio. Eos quisquam voluptas velit fugiat ut. Labore soluta et quia incidunt vitae sint quisquam. Excepturi delectus in soluta facere a quod. Quia natus perferendis aut nihil.', '2023-08-03 22:56:44', '2023-08-03 22:56:44', 1),
(9, 'Omnis beatae sed neque mollitia.', 'quod-mollitia-sint-quas-voluptatem-voluptas-veritatis', 'https://via.placeholder.com/640x480.png/007799?text=quia', 'https://www.youtube.com/watch?v=jGUASAxXwg4', 'Nesciunt dolores quia nostrum repudiandae. Odit nostrum qui libero qui exercitationem. Nesciunt enim qui in laboriosam voluptatibus corrupti dolorem. Expedita voluptates alias fugit quo earum. Ut dolorem at possimus rerum architecto. Blanditiis voluptatem velit rerum omnis quo. Et omnis officia dolorem ipsa.', '2023-08-03 22:56:44', '2023-08-03 22:56:44', 0),
(10, 'Rem dolore soluta et vel earum repellendus qui magnam.', 'sunt-modi-laborum-corrupti-tempora-praesentium-labore-cum', 'https://via.placeholder.com/640x480.png/00aa88?text=omnis', 'https://www.youtube.com/watch?v=jGUASAxXwg4', 'Fuga delectus consequatur possimus sit. Et dicta nam omnis error molestiae at quas error. Est et iusto dignissimos. Dolorum tenetur ea neque accusantium et. Sed molestiae itaque sint culpa aut quidem. Soluta qui dignissimos eos et. Non et esse sed veniam.', '2023-08-03 22:56:44', '2023-08-03 22:56:44', 0),
(11, 'Qui eius perspiciatis rerum illum.', 'est-laboriosam-laudantium-cupiditate-voluptatum', 'https://via.placeholder.com/640x480.png/00aabb?text=quis', 'https://www.youtube.com/watch?v=jGUASAxXwg4', 'Voluptatibus repudiandae doloremque facilis. Veritatis quo itaque sunt accusamus officiis. Occaecati ut sed eveniet voluptate. Et quaerat quo sed enim earum doloremque nihil accusantium. Distinctio ut fugiat quos et fugiat incidunt dolorem. In exercitationem nihil quam eius quia ea aperiam. Est consequuntur aut ducimus dolore qui ut recusandae.', '2023-08-03 22:56:44', '2023-08-03 22:56:44', 0),
(12, 'Aut nobis nulla laboriosam debitis saepe cumque.', 'beatae-aliquid-nihil-placeat-et', 'https://via.placeholder.com/640x480.png/006677?text=maiores', 'https://www.youtube.com/watch?v=jGUASAxXwg4', 'Qui consequuntur aut et. Maxime praesentium sit laboriosam non maiores. Consectetur occaecati minima possimus voluptas accusantium consequatur. Ad aut fugiat suscipit.', '2023-08-03 22:56:44', '2023-08-03 22:56:44', 0);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` bigint UNSIGNED NOT NULL,
  `province_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `province_id`, `province_name`, `created_at`, `updated_at`) VALUES
(1, '1', 'Bali', NULL, NULL),
(2, '2', 'Bangka Belitung', NULL, NULL),
(3, '3', 'Banten', NULL, NULL),
(4, '4', 'Bengkulu', NULL, NULL),
(5, '5', 'DI Yogyakarta', NULL, NULL),
(6, '6', 'DKI Jakarta', NULL, NULL),
(7, '7', 'Gorontalo', NULL, NULL),
(8, '8', 'Jambi', NULL, NULL),
(9, '9', 'Jawa Barat', NULL, NULL),
(10, '10', 'Jawa Tengah', NULL, NULL),
(11, '11', 'Jawa Timur', NULL, NULL),
(12, '12', 'Kalimantan Barat', NULL, NULL),
(13, '13', 'Kalimantan Selatan', NULL, NULL),
(14, '14', 'Kalimantan Tengah', NULL, NULL),
(15, '15', 'Kalimantan Timur', NULL, NULL),
(16, '16', 'Kalimantan Utara', NULL, NULL),
(17, '17', 'Kepulauan Riau', NULL, NULL),
(18, '18', 'Lampung', NULL, NULL),
(19, '19', 'Maluku', NULL, NULL),
(20, '20', 'Maluku Utara', NULL, NULL),
(21, '21', 'Nanggroe Aceh Darussalam (NAD)', NULL, NULL),
(22, '22', 'Nusa Tenggara Barat (NTB)', NULL, NULL),
(23, '23', 'Nusa Tenggara Timur (NTT)', NULL, NULL),
(24, '24', 'Papua', NULL, NULL),
(25, '25', 'Papua Barat', NULL, NULL),
(26, '26', 'Riau', NULL, NULL),
(27, '27', 'Sulawesi Barat', NULL, NULL),
(28, '28', 'Sulawesi Selatan', NULL, NULL),
(29, '29', 'Sulawesi Tengah', NULL, NULL),
(30, '30', 'Sulawesi Tenggara', NULL, NULL),
(31, '31', 'Sulawesi Utara', NULL, NULL),
(32, '32', 'Sumatera Barat', NULL, NULL),
(33, '33', 'Sumatera Selatan', NULL, NULL),
(34, '34', 'Sumatera Utara', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `system_configurations`
--

CREATE TABLE `system_configurations` (
  `id` bigint UNSIGNED NOT NULL,
  `province_id` bigint UNSIGNED NOT NULL,
  `city_id` bigint UNSIGNED NOT NULL,
  `institute_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_name_detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_photo_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_instagram_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_facebook_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_twitter_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_gmaps_url` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `system_configurations`
--

INSERT INTO `system_configurations` (`id`, `province_id`, `city_id`, `institute_name`, `institute_name_detail`, `institute_description`, `institute_photo_url`, `institute_instagram_url`, `institute_facebook_url`, `institute_twitter_url`, `institute_phone`, `institute_email`, `institute_address`, `created_at`, `updated_at`, `postal_code`, `institute_gmaps_url`) VALUES
(1, 10, 41, 'PPSLU Sudagaran Banyumas', 'Panti Pelayanan Sosial Lanjut Usia \"Sudagaran\" Banyumas', 'Unit Pelaksana Teknis Dinas Sosial Provinsi Jawa Tengah Yang Memiliki Tugas dan Fungsi Memberikan Pelayanan Kesejahteraan Sosial Kepada PM (Penerima Manfaat) Lanjut Usia Terlantar', 'photos/logo/zHJjnG5D5gD8eqhmyPkDB7himRryAbGmx259YIAR.png', 'https://www.instagram.com/panti_lansia_potroyudan/', 'https://www.instagram.com/elonrmuskk/', 'https://www.instagram.com/elonrmuskk/', '089423441803', 'admin@test.com', 'Jl. Karangsawah No.73, Banyumas, Sudagaran, Kec. Banyumas, Kabupaten Banyumas, Jawa Tengah 53192', NULL, '2023-08-03 07:08:10', '53192', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.526773038767!2d109.29531891477642!3d-7.517373994577987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6544b2d188db9f%3A0x9827b3712b77ac56!2sPPSLU%20Sudagaran!5e0!3m2!1sid!2sid!4v1648094689034!5m2!1sid!2sid');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin PPSLUs', 'admin@ppslu.com', NULL, '$2y$10$gJ0mwyMrcwWdxAj5r.GbTej8NkcTT0LHMU71R5vaP7/CHxzDXqcK6', NULL, '2023-08-01 21:06:39', '2023-08-01 22:52:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_province_id_foreign` (`province_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_nip_unique` (`nip`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_slug_unique` (`slug`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_configurations`
--
ALTER TABLE `system_configurations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_configurations_province_id_foreign` (`province_id`),
  ADD KEY `system_configurations_city_id_foreign` (`city_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=502;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `system_configurations`
--
ALTER TABLE `system_configurations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `system_configurations`
--
ALTER TABLE `system_configurations`
  ADD CONSTRAINT `system_configurations_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `system_configurations_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
