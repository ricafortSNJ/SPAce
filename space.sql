-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2023 at 12:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `space`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointment_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `request_date` varchar(20) NOT NULL,
  `request_time` varchar(20) NOT NULL,
  `service` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointment_id`, `name`, `email_address`, `request_date`, `request_time`, `service`, `date`, `time`) VALUES
(1, 'Jonas', 'ace43@gmail.com', '2023-03-21 00:00:00', '2023-03-18 05:30:00', '1', '2023-03-19', '02:36:47');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `professional_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `user_id`, `professional_id`, `date`, `time`, `status`) VALUES
(1, 1, 1, '2023-03-01', '09:30:00', 'Paid'),
(2, 1, 2, '2023-03-02', '10:30:00', 'Paid'),
(3, 1, 3, '2023-03-03', '11:30:00', 'Paid'),
(4, 1, 4, '2023-03-04', '12:30:00', 'Paid'),
(5, 1, 5, '2023-03-05', '13:30:00', 'Paid'),
(6, 1, 1, '2023-03-06', '14:30:00', 'Paid'),
(7, 1, 2, '2023-03-07', '15:30:00', 'Paid'),
(8, 1, 3, '2023-03-08', '09:00:00', 'Paid'),
(9, 1, 4, '2023-03-09', '10:00:00', 'Paid'),
(10, 76, 5, '2023-03-10', '11:00:00', 'Paid'),
(11, 77, 1, '2023-03-11', '12:00:00', 'Paid'),
(12, 78, 2, '2023-03-12', '13:00:00', 'Paid'),
(13, 79, 3, '2023-03-13', '14:00:00', 'Paid'),
(14, 80, 4, '2023-03-14', '09:30:00', 'Paid'),
(15, 81, 5, '2023-03-15', '10:30:00', 'Paid'),
(16, 82, 1, '2023-03-16', '11:30:00', 'Paid'),
(17, 83, 2, '2023-03-17', '12:30:00', 'Paid'),
(18, 84, 3, '2023-03-01', '13:30:00', 'Paid'),
(19, 85, 4, '2023-03-02', '14:30:00', 'Paid'),
(20, 86, 5, '2023-03-03', '15:30:00', 'Paid'),
(21, 87, 1, '2023-03-04', '09:00:00', 'Paid'),
(22, 88, 2, '2023-03-05', '10:00:00', 'Paid'),
(23, 89, 3, '2023-03-06', '11:00:00', 'Paid'),
(24, 90, 4, '2023-03-07', '12:00:00', 'Paid'),
(25, 91, 5, '2023-03-08', '13:00:00', 'Paid'),
(26, 92, 1, '2023-03-09', '14:00:00', 'Paid'),
(27, 93, 2, '2023-03-10', '09:30:00', 'Paid'),
(28, 94, 3, '2023-03-11', '10:30:00', 'Paid'),
(29, 95, 4, '2023-03-12', '11:30:00', 'Paid'),
(30, 96, 5, '2023-03-13', '12:30:00', 'Paid'),
(31, 97, 1, '2023-03-14', '13:30:00', 'Paid'),
(32, 98, 2, '2023-03-15', '14:30:00', 'Paid'),
(33, 99, 3, '2023-03-16', '15:30:00', 'Paid'),
(34, 100, 4, '2023-03-17', '09:00:00', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `query_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(140) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`query_id`, `name`, `email_address`, `subject`, `message`, `date`, `time`) VALUES
(1, 'sada', 'ace43@gmail.com', '213', '21312312', '2023-03-19', '03:33:17');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `location_id` int(10) NOT NULL,
  `location` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lng` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`location_id`, `location`, `region`, `lat`, `lng`) VALUES
(1, 'Tondo, Manila', 'NCR', '14.6211', '120.9614'),
(2, 'Batangas', 'Region IV-A', '13.7563', '121.0583'),
(3, 'Manila City', 'NCR', '14.5995', '120.9842'),
(4, 'Makati CIty', 'NCR', '14.5547', '121.0244'),
(5, 'Quezon City', 'NCR', '14.676', '121.0437'),
(6, 'Binondo, Manila', 'NCR', '14.6079', '121.0006'),
(7, 'Mandaluyong', 'NCR', '14.5794', '121.0327'),
(8, 'Taguig', 'NCR', '14.5336', '121.0672'),
(9, 'Cubao, Quezon City', 'NCR', '14.6597', '121.0289'),
(10, 'Eastwood, Quezon City', 'NCR', '14.6568', '121.0649'),
(11, 'Ortigas, Pasig City', 'NCR', '14.5832', '121.0636'),
(12, 'Marikina City', 'NCR', '14.6084', '121.0811'),
(13, 'San Juan City', 'NCR', '14.6238', '121.0337'),
(14, 'Greenhills, San Juan City', 'NCR', '14.5716', '121.0509'),
(15, 'Alabang, Muntinlupa City', 'NCR', '14.5007', '121.0442'),
(16, 'Filinvest, Alabang', 'NCR', '14.4576', '121.045'),
(17, 'Parañaque City', 'NCR', '14.4329', '121.0322'),
(18, 'Bonifacio Global City, Taguig', 'NCR', '14.5176', '121.0685'),
(19, 'Shaw Boulevard, Mandaluyong', 'NCR', '14.5754', '121.0505'),
(20, 'Ayala, Makati', 'NCR', '14.5429', '121.0191'),
(21, 'Legazpi Village, Makati', 'NCR', '14.5512', '121.0263'),
(22, 'Newport City, Pasay City', 'NCR', '14.5366', '121.0034'),
(23, 'Laoag City', 'Region I', '18.1967', '120.5953'),
(24, 'Vigan City', 'Region I', '17.5707', '120.3865'),
(25, 'San Fernando City', 'Region I', '16.6189', '120.3192'),
(26, 'Batac City', 'Region I', '18.0557', '120.5669'),
(27, 'Pagudpud', 'Region I', '18.5628', '120.7869'),
(28, 'Tuguegarao City', 'Region II', '17.6139', '121.7265'),
(29, 'Ilagan City', 'Region II', '17.1439', '121.8892'),
(30, 'Santiago City', 'Region II', '16.6886', '121.5475'),
(31, 'Aparri', 'Region II', '18.3566', '121.6425'),
(32, 'Santa Ana', 'Region II', '18.5206', '122.0719'),
(33, 'Angeles City', 'Region III', '15.1446', '120.5889'),
(34, 'San Fernando City', 'Region III', '15.0326', '120.6843'),
(35, 'Olongapo City', 'Region III', '14.8388', '120.2841'),
(36, 'Balanga City\'', 'Region III', '14.6766', '120.536'),
(37, 'Meycauayan City', 'Region III', '14.7408', '120.9605'),
(38, 'Cabanatuan City', 'Region III', '15.5023', '120.9614'),
(39, 'Tagaytay City', 'Region IV-A', '14.1152', '120.9624'),
(40, 'Lucena City', 'Region IV-A', '13.9361', '121.6172'),
(41, 'Lipa City', 'Region IV-A', '13.9408', '121.1597'),
(42, 'Tanauan City', 'Region IV-A', '14.0867', '121.1482'),
(43, 'San Pablo City', 'Region IV-A', '14.0649', '121.3236'),
(44, 'Biñan City', 'Region IV-A', '14.3417', '121.0797'),
(45, 'El Nido, Palawan', 'Region IV-B', '11.1917', '119.4194'),
(46, 'Puerto Princesa, Palawan', 'Region IV-B', '9.9672', '118.7854'),
(47, 'Coron, Palawan', 'Region IV-B', '11.998', '120.2021'),
(48, 'Calapan, Oriental Mindoro', 'Region IV-B', '13.4092', '121.1802'),
(49, 'San Jose, Occidental Mindoro', 'Region IV-B', '12.3528', '121.067'),
(50, 'Legazpi, Albay', 'Region V', '13.1396', '123.735'),
(51, 'Sorsogon City, Sorsogon', 'Region V', '12.9752', '123.999'),
(52, 'Daet, Camarines Norte', 'Region V', '14.1125', '122.9565'),
(53, 'Iriga, Camarines Sur', 'Region V', '13.4315', '123.4134'),
(54, 'Masbate City, Masbate', 'Region V', '12.3667', '123.6167'),
(55, 'Virac, Catanduanes', 'Region V', '13.584', '124.2379'),
(56, 'Boracay Island, Malay, Aklan', 'Region VI', '10.7144', '122.5504'),
(57, 'Iloilo City, Iloilo', 'Region VI', '11.0041', '122.537'),
(58, 'Bacolod City, Negros Occidental', 'Region VI', '10.0971', '123.446'),
(59, 'San Jose de Buenavista, Antique', 'Region VI', '11.5434', '122.753'),
(60, 'Lambunao, Iloilo', 'Region VI', '11.2512', '123.009'),
(61, 'Cebu City, Cebu', 'Region VII', '10.3157', '123.8854'),
(62, 'Tagbilaran City, Bohol', 'Region VII', '9.6543', '123.856'),
(63, 'Camiguin Island, Camiguin', 'Region VII', '9.9672', '124.2402'),
(64, 'Ormoc City, Leyte', 'Region VII', '10.6364', '124.0454'),
(65, 'Oslob, Cebu', 'Region VII', '9.3137', '123.3052'),
(66, 'Larena, Siquijor', 'Region VII', '9.6923', '123.6247'),
(67, 'Tacloban City, Leyte', 'Region VIII', '11.2455', '125.0035'),
(68, 'Calbayog City, Samar', 'Region VIII', '11.0567', '124.002'),
(69, 'Borongan City, Eastern Samar', 'Region VIII', '11.3233', '124.5108'),
(70, 'Palo, Leyte', 'Region VIII', '11.243', '125.0096'),
(71, 'Catbalogan City, Samar', 'Region VIII', '10.9586', '125.0262'),
(72, 'Zamboanga City, Zamboanga del Sur', 'Region IX', '6.9155', '122.079'),
(73, 'Pagadian City, Zamboanga del Sur', 'Region IX', '7.2157', '124.246'),
(74, 'Isabela City, Basilan', 'Region IX', '7.8083', '123.3632'),
(75, 'Dipolog City, Zamboanga del Norte', 'Region IX', '6.7448', '122.191'),
(76, 'Dapitan City, Zamboanga del Norte', 'Region IX', '7.9046', '122.5945'),
(77, 'Cagayan de Oro City, Misamis Oriental', 'Region X', '8.481', '124.6437'),
(78, 'Butuan City, Agusan del Norte', 'Region X', '8.9503', '125.5414'),
(79, 'Balingasag, Misamis Oriental', 'Region X', '8.228', '124.245'),
(80, 'Tagum City', 'Region XI', '7.7567', '125.7881'),
(81, 'Panabo City', 'Region XI', '7.6886', '125.881'),
(82, 'Island Garden City of Samal', 'Region XI', '7.4507', '125.8072'),
(83, 'Mati City', 'Region XI', '7.1372', '126.4525'),
(84, 'Lupon', 'Region XI', '6.8719', '126.0645'),
(85, 'Malita', 'Region XI', '6.4902', '125.5377'),
(86, 'Digos City', 'Region XI', '6.7506', '125.3578'),
(87, 'Davao City Hall', 'Region XI', '7.1907', '125.4553'),
(88, 'Tugbok District', 'Region XI', '7.0682', '125.598'),
(89, 'Koronadal City', 'Region XII', '6.5036', '124.8467'),
(90, 'General Santos City', 'Region XII', '6.1164', '125.1716'),
(91, 'Cotabato City', 'Region XII', '7.2092', '124.2413'),
(92, 'Marawi City', 'BARMM', '8.0031', '124.2833'),
(93, 'Basilan City', 'BARMM', '6.5031', '121.9923'),
(94, 'Lamitan City', 'BARMM', '6.6616', '122.1375'),
(95, 'Jolo', 'BARMM', '6.0502', '121.0025'),
(96, 'Baguio City', 'CAR', '16.4023', '120.596'),
(97, 'La Trinidad', 'CAR', '16.4494', '120.5902'),
(98, 'Bontoc', 'CAR', '17.0895', '120.9786'),
(99, 'Tabuk City', 'CAR', '17.4014', '121.2774'),
(100, 'Tuguegarao City', 'CAR', '17.6133', '121.726');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(10) NOT NULL,
  `sender_id` int(10) NOT NULL,
  `receiver_id` int(10) NOT NULL,
  `content` varchar(560) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `sender_id`, `receiver_id`, `content`, `date`, `time`) VALUES
(1, 1, 2, 'Magandang araw po! Gusto ko po sanang magtanong tungkol sa inyong therapy services. Ano po ang inyong mga serbisyo?', '2023-03-01', '10:30:00.000000'),
(2, 1, 3, 'Mayroon po ba kayong available na slot para sa isang therapy session? Magkano po ang bayad at gaano katagal ito?', '2023-03-02', '11:30:00.000000'),
(3, 1, 4, 'Maari po bang magtanong kung anong uri ng therapy ang nararapat sa akin? Mayroon po ba kayong free consultation?', '2023-03-03', '12:30:00.000000'),
(4, 1, 5, 'Nais ko po sanang malaman kung ano ang inyong kwalipikasyon bilang isang therapist at kung mayroon kayong mga rekomendasyon mula sa mga naging kliyente ninyo.', '2023-03-04', '13:30:00.000000'),
(5, 1, 6, 'Salamat po sa inyong mga serbisyo. Mayroon po ba kayong discounts o promos sa inyong mga regular na kliyente?', '2023-03-05', '14:30:00.000000'),
(6, 2, 1, 'Kumusta po! Ako po ay isang lisensyadong propesyunal sa larangan ng therapy at handa po akong magbigay ng serbisyo sa inyo.', '2023-03-06', '15:30:00.000000'),
(7, 3, 1, 'Kung kayo po ay naghahanap ng solusyon sa mga personal o pamilya ninyong problema, nandito po ako para tulungan kayo.', '2023-03-07', '16:30:00.000000'),
(8, 4, 1, 'Mayroon po ba kayong nararamdaman na hindi maipaliwanag? Ako po ay handang makinig sa inyong kwento at magbigay ng suporta sa inyo.', '2023-03-08', '08:00:00.000000'),
(9, 5, 1, 'Kung kayo po ay nakakaranas ng depression, anxiety, o iba pang mental health issues, ako po ay nandito para tulungan kayo.', '2023-03-09', '09:00:00.000000'),
(10, 6, 1, 'Nag-aalala po ba kayo tungkol sa mga relationship problems ninyo? Ako po ay handang makipagtulungan sa inyo upang masolusyunan ito.', '2023-03-01', '10:00:00.000000'),
(11, 2, 1, 'Sa pamamagitan ng therapy, maaari po nating matuklasan ang mga bagay na nagiging hadlang sa inyong pagkamit ng mga pangarap at mga layunin sa buhay.', '2023-03-02', '11:00:00.000000'),
(12, 3, 1, 'Huwag po kayong mag-alala tungkol sa mga judgmental na pananaw sa therapy. Ako po ay handang makinig sa inyong mga kwento nang walang paghuhusga.', '2023-03-03', '12:00:00.000000'),
(13, 4, 1, 'Ako po ay mayroong mga specialized na teknik at approach sa therapy upang masigurado na ang inyong mga kailangan ay nasusunod.', '2023-03-04', '13:00:00.000000'),
(14, 5, 1, 'Maaari po akong magbigay ng tulong sa inyong pagtitiwala sa sarili, pagkakaroon ng mas malalim na relasyon sa mga mahal sa buhay, at marami pa.', '2023-03-05', '14:00:00.000000'),
(15, 6, 1, 'Nagbibigay po ako ng malasakit, pagsuporta, at pag-intindi sa bawat kliyente.', '2023-03-06', '15:00:00.000000'),
(16, 2, 1, 'Kung kayo po ay naghahanap ng makakausap tungkol sa inyong mga problema, ako po ay handa na makinig sa inyo.', '2023-03-07', '13:30:00.000000'),
(17, 3, 1, 'Napakahalaga po ng kalidad ng kalusugan sa isip at damdamin. Handa po akong magtulungan sa inyo upang mapanatili ang inyong kalusugang ito.', '2023-03-08', '14:30:00.000000'),
(18, 4, 1, 'Sa pamamagitan ng therapy, maaari po nating matutunan kung paano harapin ang stress at mga pagsubok sa buhay.', '2023-03-09', '15:30:00.000000'),
(19, 5, 1, 'Kung kayo po ay may mga pagkabahala o takot sa mga bagay-bagay sa buhay, ako po ay handang magbigay ng tulong upang malampasan ito.', '2023-03-01', '16:30:00.000000'),
(20, 6, 1, 'Maaari po tayong magtrabaho upang mapabuti ang inyong pakikitungo sa mga taong mahalaga sa inyo.', '2023-03-02', '08:00:00.000000'),
(21, 2, 1, 'Ang therapy ay hindi lamang para sa mga may malalang problema. Maaari itong magbigay ng suporta at paglinaw sa kahit anong sitwasyon sa buhay.', '2023-03-03', '09:00:00.000000'),
(22, 3, 1, 'Kung kayo po ay may mga katanungan tungkol sa therapy, huwag po kayong mag-alinlangan na magtanong. Handa po akong magbigay ng impormasyon.', '2023-03-04', '15:30:00.000000'),
(23, 4, 1, 'Sa pamamagitan ng therapy, maaari po tayong magtrabaho upang maipaglaban ang inyong mga adhikain at pangarap sa buhay.', '2023-03-05', '16:30:00.000000'),
(24, 5, 1, 'Ako po ay isang propesyunal sa larangan ng therapy at nais kong magbigay ng tulong sa inyo. Huwag po kayong mag-atubiling lumapit sa akin.', '2023-03-06', '17:30:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `email_id` int(10) NOT NULL,
  `email_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`email_id`, `email_address`) VALUES
(1, 'ace@gmail.com'),
(2, 'ace43@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `booking_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `booking_id`, `user_id`, `amount`, `date`, `time`, `status`) VALUES
(1, 1, 1, 1000, '2023-03-01', '08:30:00', 1),
(2, 2, 1, 600, '2023-03-02', '09:30:00', 1),
(3, 3, 1, 450, '2023-03-03', '10:30:00', 1),
(4, 4, 1, 800, '2023-03-04', '11:30:00', 1),
(5, 5, 1, 500, '2023-03-05', '12:30:00', 1),
(6, 6, 1, 1000, '2023-03-06', '13:30:00', 1),
(7, 7, 1, 600, '2023-03-07', '14:30:00', 1),
(8, 8, 1, 450, '2023-03-08', '08:15:00', 1),
(9, 9, 1, 800, '2023-03-09', '09:15:00', 1),
(10, 10, 76, 500, '2023-03-10', '10:15:00', 1),
(11, 11, 77, 1000, '2023-03-11', '11:15:00', 1),
(12, 12, 78, 600, '2023-03-12', '12:15:00', 1),
(13, 13, 79, 450, '2023-03-13', '13:15:00', 1),
(14, 14, 80, 800, '2023-03-14', '09:25:00', 1),
(15, 15, 81, 500, '2023-03-15', '10:25:00', 1),
(16, 16, 82, 1000, '2023-03-16', '11:25:00', 1),
(17, 17, 83, 600, '2023-03-17', '12:25:00', 1),
(18, 18, 84, 450, '2023-03-01', '13:25:00', 1),
(19, 19, 85, 800, '2023-03-02', '14:25:00', 1),
(20, 20, 86, 500, '2023-03-03', '15:25:00', 1),
(21, 21, 87, 1000, '2023-03-04', '07:00:00', 1),
(22, 22, 88, 600, '2023-03-05', '08:00:00', 1),
(23, 23, 89, 450, '2023-03-06', '09:00:00', 1),
(24, 24, 90, 800, '2023-03-07', '10:00:00', 1),
(25, 25, 91, 500, '2023-03-08', '11:00:00', 1),
(26, 26, 92, 1000, '2023-03-09', '12:00:00', 1),
(27, 27, 93, 600, '2023-03-10', '09:30:00', 1),
(28, 28, 94, 450, '2023-03-11', '10:30:00', 1),
(29, 29, 95, 800, '2023-03-12', '11:30:00', 1),
(30, 30, 96, 500, '2023-03-13', '12:30:00', 1),
(31, 31, 97, 1000, '2023-03-14', '13:30:00', 1),
(32, 32, 98, 600, '2023-03-15', '14:30:00', 1),
(33, 33, 99, 450, '2023-03-16', '15:30:00', 1),
(34, 34, 100, 800, '2023-03-17', '09:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `professionals`
--

CREATE TABLE `professionals` (
  `professional_id` int(10) NOT NULL,
  `profile_id` int(10) NOT NULL,
  `expertise` varchar(50) NOT NULL,
  `availability` varchar(50) NOT NULL,
  `rates` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `professionals`
--

INSERT INTO `professionals` (`professional_id`, `profile_id`, `expertise`, `availability`, `rates`) VALUES
(1, 2, 'Acupuncturist', '8:00-18:00', 1000),
(2, 3, 'Aromatherapist', '8:00-18:00', 600),
(3, 4, 'Chiropractor', '8:00-18:00', 450),
(4, 5, 'Massage Therapist', '8:00-18:00', 800),
(5, 6, 'Fitness Instructor', '8:00-18:00', 500),
(6, 7, 'Hairstylist', '8:00-18:00', 210),
(7, 8, 'Makeup Artist', '8:00-18:00', 2920),
(8, 9, 'Massage Therapist', '8:00-18:00', 1810),
(9, 10, 'Meditation Coach', '8:00-18:00', 270),
(10, 11, 'Nail Technician', '8:00-18:00', 1180),
(11, 12, 'Nutritionist', '8:00-18:00', 2490),
(12, 13, 'Personal Trainer', '8:00-18:00', 2160),
(13, 14, 'Pilates Instructor', '8:00-18:00', 210),
(14, 15, 'Reflexologist', '8:00-18:00', 2810),
(15, 16, 'Reiki Practitioner', '8:00-18:00', 2020),
(16, 17, 'Sound Therapist', '8:00-18:00', 2540),
(17, 18, 'Spa Consultant', '8:00-18:00', 670),
(18, 19, 'Tai Chi Instructor', '8:00-18:00', 2980),
(19, 20, 'Yoga Instructor', '8:00-18:00', 2120),
(20, 21, 'Acupuncturist', '8:00-18:00', 1130),
(21, 22, 'Aromatherapist', '8:00-18:00', 960),
(22, 23, 'Chiropractor', '8:00-18:00', 1870),
(23, 24, 'Esthetician', '8:00-18:00', 1750),
(24, 25, 'Fitness Instructor', '8:00-18:00', 1200),
(25, 26, 'Hairstylist', '8:00-18:00', 2890),
(26, 27, 'Makeup Artist', '8:00-18:00', 1790),
(27, 28, 'Massage Therapist', '8:00-18:00', 1300),
(28, 29, 'Meditation Coach', '8:00-18:00', 1630),
(29, 30, 'Nail Technician', '8:00-18:00', 1030),
(30, 31, 'Nutritionist', '8:00-18:00', 2950),
(31, 32, 'Personal Trainer', '8:00-18:00', 770),
(32, 33, 'Pilates Instructor', '8:00-18:00', 1130),
(33, 34, 'Reflexologist', '8:00-18:00', 460),
(34, 35, 'Reiki Practitioner', '8:00-18:00', 1570),
(35, 36, 'Sound Therapist', '8:00-18:00', 410),
(36, 37, 'Spa Consultant', '8:00-18:00', 1960),
(37, 38, 'Tai Chi Instructor', '8:00-18:00', 2900),
(38, 39, 'Yoga Instructor', '8:00-18:00', 630),
(39, 40, 'Acupuncturist', '8:00-18:00', 2640),
(40, 41, 'Aromatherapist', '8:00-18:00', 780),
(41, 42, 'Chiropractor', '8:00-18:00', 2880),
(42, 43, 'Esthetician', '8:00-18:00', 1060),
(43, 44, 'Fitness Instructor', '8:00-18:00', 2600),
(44, 45, 'Hairstylist', '8:00-18:00', 2120),
(45, 46, 'Makeup Artist', '8:00-18:00', 1240),
(46, 47, 'Massage Therapist', '8:00-18:00', 2470),
(47, 48, 'Meditation Coach', '8:00-18:00', 2700),
(48, 49, 'Nail Technician', '8:00-18:00', 690),
(49, 50, 'Nutritionist', '8:00-18:00', 1120),
(50, 51, 'Personal Trainer', '8:00-18:00', 1830),
(51, 52, 'Pilates Instructor', '8:00-18:00', 1900),
(52, 53, 'Reflexologist', '8:00-18:00', 1410),
(53, 54, 'Reiki Practitioner', '8:00-18:00', 1600),
(54, 55, 'Sound Therapist', '8:00-18:00', 2090),
(55, 56, 'Spa Consultant', '8:00-18:00', 1030),
(56, 57, 'Tai Chi Instructor', '8:00-18:00', 1860),
(57, 58, 'Yoga Instructor', '8:00-18:00', 1370),
(58, 59, 'Acupuncturist', '8:00-18:00', 540),
(59, 60, 'Aromatherapist', '8:00-18:00', 510),
(60, 61, 'Chiropractor', '8:00-18:00', 650),
(61, 62, 'Esthetician', '8:00-18:00', 2290),
(62, 63, 'Fitness Instructor', '8:00-18:00', 2730),
(63, 64, 'Hairstylist', '8:00-18:00', 1470),
(64, 65, 'Makeup Artist', '8:00-18:00', 2550),
(65, 66, 'Massage Therapist', '8:00-18:00', 2620),
(66, 67, 'Meditation Coach', '8:00-18:00', 2470),
(67, 68, 'Nail Technician', '8:00-18:00', 1420),
(68, 69, 'Nutritionist', '8:00-18:00', 2740),
(69, 70, 'Personal Trainer', '8:00-18:00', 770),
(70, 71, 'Pilates Instructor', '8:00-18:00', 2070),
(71, 72, 'Reflexologist', '8:00-18:00', 2030),
(72, 73, 'Reiki Practitioner', '8:00-18:00', 1750),
(73, 74, 'Sound Therapist', '8:00-18:00', 2540),
(74, 75, 'Spa Consultant', '8:00-18:00', 1250);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `profile_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `image_id` int(10) NOT NULL,
  `social_media` varchar(50) DEFAULT NULL,
  `privacy_setting` varchar(10) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`profile_id`, `user_id`, `username`, `first_name`, `last_name`, `mobile_number`, `image_id`, `social_media`, `privacy_setting`, `location`) VALUES
(1, 1, 'jomarsmith', 'Jomar', 'Smith', '639123237887', 1, 'https://www.facebook.com/Jomar.smith/', 'ABCD', 'Tondo, Manila'),
(2, 2, 'adrianbrown', 'Adrian', 'Brown', '639123879112', 2, 'https://www.facebook.com/adrian.brown/', 'ABCD', 'Batangas'),
(3, 3, 'sarahjohnson', 'Sarah', 'Johnson', '639925087128', 3, 'https://www.facebook.com/sarahjohnson', 'ABCD', 'Manila City'),
(4, 4, 'lilynguyen', 'Lily', 'Nguyen', '639788483703', 4, 'https://www.facebook.com/lilynguyen', 'ABCD', 'Makati CIty'),
(5, 5, 'michaeldavis', 'Michael', 'Davis', '639902640738', 5, 'https://www.facebook.com/michaeldavis', 'ABCD', 'Quezon City'),
(6, 6, 'mariahernandez', 'Maria', 'Hernandez', '639287789823', 6, 'https://www.facebook.com/mariahernandez', 'ABCD', 'Binondo, Manila'),
(7, 7, 'markwilson', 'Mark', 'Wilson', '639319558628', 7, 'https://www.facebook.com/markwilson', 'ABCD', 'Mandaluyong'),
(8, 8, 'emilykim', 'Emily', 'Kim', '639709963867', 8, 'https://www.facebook.com/emilykim', 'ABCD', 'Taguig'),
(9, 9, 'victorialee', 'Victoria', 'Lee', '639659782783', 9, 'https://www.facebook.com/victorialee', 'ABCD', 'Cubao, Quezon City'),
(10, 10, 'jessicamartin', 'Jessica', 'Martin', '639271589455', 10, 'https://www.facebook.com/jessicamartin', 'ABCD', 'Eastwood, Quezon City'),
(11, 11, 'rachelchen', 'Rachel', 'Chen', '639655890850', 11, 'https://www.facebook.com/rachelchen', 'ABCD', 'Ortigas, Pasig City'),
(12, 12, 'davidgarcia', 'David', 'Garcia', '639527029107', 12, 'https://www.facebook.com/davidgarcia', 'ABCD', 'Marikina City'),
(13, 13, 'samanthathompson', 'Samantha', 'Thompson', '639681060461', 13, 'https://www.facebook.com/samanthathompson', 'ABCD', 'San Juan City'),
(14, 14, 'johnsmith', 'John', 'Smith', '639203695597', 14, 'https://www.facebook.com/johnsmith', 'ABCD', 'Greenhills, San Juan City'),
(15, 15, 'lisagreen', 'Lisa', 'Green', '639316401432', 15, 'https://www.facebook.com/lisagreen', 'ABCD', 'Alabang, Muntinlupa City'),
(16, 16, 'kimberlyjones', 'Kimberly', 'Jones', '639671789228', 16, 'https://www.facebook.com/kimberlyjones', 'ABCD', 'Filinvest, Alabang'),
(17, 17, 'brianlee', 'Brian', 'Lee', '639349254685', 17, 'https://www.facebook.com/brianlee', 'ABCD', 'Parañaque City'),
(18, 18, 'amandataylor', 'Amanda', 'Taylor', '639885488621', 18, 'https://www.facebook.com/amandataylor', 'ABCD', 'Bonifacio Global City, Taguig'),
(19, 19, 'taylorevans', 'Taylor', 'Evans', '639339448236', 19, 'https://www.facebook.com/taylorevans', 'ABCD', 'Shaw Boulevard, Mandaluyong'),
(20, 20, 'rachellee', 'Rachel', 'Lee', '639432326166', 20, 'https://www.facebook.com/rachellee', 'ABCD', 'Ayala, Makati'),
(21, 21, 'davidbrown', 'David', 'Brown', '639503602436', 21, 'https://www.facebook.com/davidbrown', 'ABCD', 'Legazpi Village, Makati'),
(22, 22, 'jameskim', 'James', 'Kim', '639379518961', 22, 'https://www.facebook.com/jameskim', 'ABCD', 'Newport City, Pasay City'),
(23, 23, 'sophialee', 'Sophia', 'Lee', '639636813619', 23, 'https://www.facebook.com/sophialee', 'ABCD', 'Laoag City'),
(24, 24, 'angelacruz', 'Angela', 'Cruz', '639344018877', 24, 'https://www.facebook.com/angelacruz', 'ABCD', 'Vigan City'),
(25, 25, 'ericrodriguez', 'Eric', 'Rodriguez', '639259516477', 25, 'https://www.facebook.com/ericrodriguez', 'ABCD', 'San Fernando City'),
(26, 26, 'andreagarcia', 'Andrea', 'Garcia', '639311801476', 26, 'https://www.facebook.com/andreagarcia', 'ABCD', 'Batac City'),
(27, 27, 'clairepark', 'Claire', 'Park', '639307307725', 27, 'https://www.facebook.com/clairepark', 'ABCD', 'Pagudpud'),
(28, 28, 'kevinsantos', 'Kevin', 'Santos', '639367622359', 28, 'https://www.facebook.com/kevinsantos', 'ABCD', 'Tuguegarao City'),
(29, 29, 'mariareyes', 'Maria', 'Reyes', '639895644447', 29, 'https://www.facebook.com/mariareyes', 'ABCD', 'Ilagan City'),
(30, 30, 'jasminetan', 'Jasmine', 'Tan', '639296857166', 30, 'https://www.facebook.com/jasminetan', 'ABCD', 'Santiago City'),
(31, 31, 'monicadela', 'Monica', 'Dela', '639199468131', 31, 'https://www.facebook.com/monicadela', 'ABCD', 'Aparri'),
(32, 32, 'carloslim', 'Carlos', 'Lim', '639930893874', 32, 'https://www.facebook.com/carloslim', 'ABCD', 'Santa Ana'),
(33, 33, 'steventan', 'Steven', 'Tan', '639100319569', 33, 'https://www.facebook.com/steventan', 'ABCD', 'Angeles City'),
(34, 34, 'michellechua', 'Michelle', 'Chua', '639466693991', 34, 'https://www.facebook.com/michellechua', 'ABCD', 'San Fernando City'),
(35, 35, 'andreaperez', 'Andrea', 'Perez', '639697580816', 35, 'https://www.facebook.com/andreaperez', 'ABCD', 'Olongapo City'),
(36, 36, 'katarinatan', 'Katarina', 'Tan', '639531400586', 36, 'https://www.facebook.com/katarinatan', 'ABCD', 'Balanga City\''),
(37, 37, 'luisasantos', 'Luisa', 'Santos', '639992568442', 37, 'https://www.facebook.com/luisasantos', 'ABCD', 'Meycauayan City'),
(38, 38, 'danielreyes', 'Daniel', 'Reyes', '639274093498', 38, 'https://www.facebook.com/danielreyes', 'ABCD', 'Cabanatuan City'),
(39, 39, 'patriciaong', 'Patricia', 'Ong', '639348798541', 39, 'https://www.facebook.com/patriciaong', 'ABCD', 'Tagaytay City'),
(40, 40, 'robertlim', 'Robert', 'Lim', '639260419560', 40, 'https://www.facebook.com/robertlim', 'ABCD', 'Lucena City'),
(41, 41, 'manuelgarcia', 'Manuel', 'Garcia', '639822420026', 41, 'https://www.facebook.com/manuelgarcia', 'ABCD', 'Lipa City'),
(42, 42, 'kathleentan', 'Kathleen', 'Tan', '639196283659', 42, 'https://www.facebook.com/kathleentan', 'ABCD', 'Tanauan City'),
(43, 43, 'sarahkim', 'Sarah', 'Kim', '639925087128', 43, 'https://www.facebook.com/sarahkim', 'ABCD', 'San Pablo City'),
(44, 44, 'lilylee', 'Lily', 'Lee', '639788483703', 44, 'https://www.facebook.com/lilylee', 'ABCD', 'Biñan City'),
(45, 45, 'michaelcruz', 'Michael', 'Cruz', '639902640738', 45, 'https://www.facebook.com/michaelcruz', 'ABCD', 'El Nido, Palawan'),
(46, 46, 'mariarodriguez', 'Maria', 'Rodriguez', '639287789823', 46, 'https://www.facebook.com/mariarodriguez', 'ABCD', 'Puerto Princesa, Palawan'),
(47, 47, 'markgarcia', 'Mark', 'Garcia', '639319558628', 47, 'https://www.facebook.com/markgarcia', 'ABCD', 'Coron, Palawan'),
(48, 48, 'emilypark', 'Emily', 'Park', '639709963867', 48, 'https://www.facebook.com/emilypark', 'ABCD', 'Calapan, Oriental Mindoro'),
(49, 49, 'victoriasantos', 'Victoria', 'Santos', '639659782783', 49, 'https://www.facebook.com/victoriasantos', 'ABCD', 'San Jose, Occidental Mindoro'),
(50, 50, 'jessicareyes', 'Jessica', 'Reyes', '639271589455', 50, 'https://www.facebook.com/jessicareyes', 'ABCD', 'Legazpi, Albay'),
(51, 51, 'racheltan', 'Rachel', 'Tan', '639655890850', 51, 'https://www.facebook.com/racheltan', 'ABCD', 'Sorsogon City, Sorsogon'),
(52, 52, 'daviddela', 'David', 'Dela', '639527029107', 52, 'https://www.facebook.com/daviddela', 'ABCD', 'Daet, Camarines Norte'),
(53, 53, 'samanthalim', 'Samantha', 'Lim', '639681060461', 53, 'https://www.facebook.com/samanthalim', 'ABCD', 'Iriga, Camarines Sur'),
(54, 54, 'johntan', 'John', 'Tan', '639203695597', 54, 'https://www.facebook.com/johntan', 'ABCD', 'Masbate City, Masbate'),
(55, 55, 'lisachua', 'Lisa', 'Chua', '639316401432', 55, 'https://www.facebook.com/lisachua', 'ABCD', 'Virac, Catanduanes'),
(56, 56, 'kimberlyperez', 'Kimberly', 'Perez', '639671789228', 56, 'https://www.facebook.com/kimberlyperez', 'ABCD', 'Boracay Island, Malay, Aklan'),
(57, 57, 'briantan', 'Brian', 'Tan', '639349254685', 57, 'https://www.facebook.com/briantan', 'ABCD', 'Iloilo City, Iloilo'),
(58, 58, 'amandasantos', 'Amanda', 'Santos', '639885488621', 58, 'https://www.facebook.com/amandasantos', 'ABCD', 'Bacolod City, Negros Occidental'),
(59, 59, 'taylorreyes', 'Taylor', 'Reyes', '639339448236', 59, 'https://www.facebook.com/taylorreyes', 'ABCD', 'San Jose de Buenavista, Antique'),
(60, 60, 'kevinong', 'Kevin', 'Ong', '639432326166', 60, 'https://www.facebook.com/kevinong', 'ABCD', 'Lambunao, Iloilo'),
(61, 61, 'marialim', 'Maria', 'Lim', '639503602436', 61, 'https://www.facebook.com/marialim', 'ABCD', 'Cebu City, Cebu'),
(62, 62, 'jasminegarcia', 'Jasmine', 'Garcia', '639379518961', 62, 'https://www.facebook.com/jasminegarcia', 'ABCD', 'Tagbilaran City, Bohol'),
(63, 63, 'monicatan', 'Monica', 'Tan', '639636813619', 63, 'https://www.facebook.com/monicatan', 'ABCD', 'Camiguin Island, Camiguin'),
(64, 64, 'carlosjohnson', 'Carlos', 'Johnson', '639344018877', 64, 'https://www.facebook.com/carlosjohnson', 'ABCD', 'Ormoc City, Leyte'),
(65, 65, 'stevennguyen', 'Steven', 'Nguyen', '639259516477', 65, 'https://www.facebook.com/stevennguyen', 'ABCD', 'Oslob, Cebu'),
(66, 66, 'michelledavis', 'Michelle', 'Davis', '639311801476', 66, 'https://www.facebook.com/michelledavis', 'ABCD', 'Larena, Siquijor'),
(67, 67, 'andreahernandez', 'Andrea', 'Hernandez', '639307307725', 67, 'https://www.facebook.com/andreahernandez', 'ABCD', 'Tacloban City, Leyte'),
(68, 68, 'katarinawilson', 'Katarina', 'Wilson', '639367622359', 68, 'https://www.facebook.com/katarinawilson', 'ABCD', 'Calbayog City, Samar'),
(69, 69, 'luisakim', 'Luisa', 'Kim', '639895644447', 69, 'https://www.facebook.com/luisakim', 'ABCD', 'Borongan City, Eastern Samar'),
(70, 70, 'daniellee', 'Daniel', 'Lee', '639296857166', 70, 'https://www.facebook.com/daniellee', 'ABCD', 'Palo, Leyte'),
(71, 71, 'patriciamartin', 'Patricia', 'Martin', '639199468131', 71, 'https://www.facebook.com/patriciamartin', 'ABCD', 'Catbalogan City, Samar'),
(72, 72, 'robertchen', 'Robert', 'Chen', '639930893874', 72, 'https://www.facebook.com/robertchen', 'ABCD', 'Zamboanga City, Zamboanga del Sur'),
(73, 73, 'manuelgarcia', 'Manuel', 'Garcia', '639100319569', 73, 'https://www.facebook.com/manuelgarcia', 'ABCD', 'Pagadian City, Zamboanga del Sur'),
(74, 74, 'kathleenthompson', 'Kathleen', 'Thompson', '639466693991', 74, 'https://www.facebook.com/kathleenthompson', 'ABCD', 'Isabela City, Basilan'),
(75, 75, 'davidsmith', 'David', 'Smith', '639697580816', 75, 'https://www.facebook.com/davidsmith', 'ABCD', 'Dipolog City, Zamboanga del Norte'),
(76, 76, 'jamesgreen', 'James', 'Green', '639531400586', 76, 'https://www.facebook.com/jamesgreen', 'ABCD', 'Dapitan City, Zamboanga del Norte'),
(77, 77, 'sophiajones', 'Sophia', 'Jones', '639992568442', 77, 'https://www.facebook.com/sophiajones', 'ABCD', 'Cagayan de Oro City, Misamis Oriental'),
(78, 78, 'angelalee', 'Angela', 'Lee', '639274093498', 78, 'https://www.facebook.com/angelalee', 'ABCD', 'Butuan City, Agusan del Norte'),
(79, 79, 'erictaylor', 'Eric', 'Taylor', '639348798541', 79, 'https://www.facebook.com/erictaylor', 'ABCD', 'Balingasag, Misamis Oriental'),
(80, 80, 'andreaevans', 'Andrea', 'Evans', '639260419560', 80, 'https://www.facebook.com/andreaevans', 'ABCD', 'Tagum City'),
(81, 81, 'clairelee', 'Claire', 'Lee', '639822420026', 81, 'https://www.facebook.com/clairelee', 'ABCD', 'Panabo City'),
(82, 82, 'kevinbrown', 'Kevin', 'Brown', '639196283659', 82, 'https://www.facebook.com/kevinbrown', 'ABCD', 'Island Garden City of Samal'),
(83, 83, 'mariakim', 'Maria', 'Kim', '639925087128', 83, 'https://www.facebook.com/mariakim', 'ABCD', 'Mati City'),
(84, 84, 'jasminelee', 'Jasmine', 'Lee', '639788483703', 84, 'https://www.facebook.com/jasminelee', 'ABCD', 'Lupon'),
(85, 85, 'monicacruz', 'Monica', 'Cruz', '639902640738', 85, 'https://www.facebook.com/monicacruz', 'ABCD', 'Malita'),
(86, 86, 'carlosrodriguez', 'Carlos', 'Rodriguez', '639287789823', 86, 'https://www.facebook.com/carlosrodriguez', 'ABCD', 'Digos City'),
(87, 87, 'stevengarcia', 'Steven', 'Garcia', '639319558628', 87, 'https://www.facebook.com/stevengarcia', 'ABCD', 'Davao City Hall'),
(88, 88, 'sarahpark', 'Sarah', 'Park', '639709963867', 88, 'https://www.facebook.com/sarahpark', 'ABCD', 'Tugbok District'),
(89, 89, 'lilysantos', 'Lily', 'Santos', '639659782783', 89, 'https://www.facebook.com/lilysantos', 'ABCD', 'Koronadal City'),
(90, 90, 'michaelreyes', 'Michael', 'Reyes', '639271589455', 90, 'https://www.facebook.com/michaelreyes', 'ABCD', 'General Santos City'),
(91, 91, 'mariatan', 'Maria', 'Tan', '639655890850', 91, 'https://www.facebook.com/mariatan', 'ABCD', 'Cotabato City'),
(92, 92, 'markdela', 'Mark', 'Dela', '639527029107', 92, 'https://www.facebook.com/markdela', 'ABCD', 'Marawi City'),
(93, 93, 'emilyhernandez', 'Emily', 'Hernandez', '639681060461', 93, 'https://www.facebook.com/emilyhernandez', 'ABCD', 'Basilan City'),
(94, 94, 'victoriawilson', 'Victoria', 'Wilson', '639203695597', 94, 'https://www.facebook.com/victoriawilson', 'ABCD', 'Lamitan City'),
(95, 95, 'jessicakim', 'Jessica', 'Kim', '639316401432', 95, 'https://www.facebook.com/jessicakim', 'ABCD', 'Jolo'),
(96, 96, 'rachellee', 'Rachel', 'Lee', '639671789228', 96, 'https://www.facebook.com/rachellee', 'ABCD', 'Baguio City'),
(97, 97, 'davidmartin', 'David', 'Martin', '639349254685', 97, 'https://www.facebook.com/davidmartin', 'ABCD', 'La Trinidad'),
(98, 98, 'andreachen', 'Andrea', 'Chen', '639885488621', 98, 'https://www.facebook.com/andreachen', 'ABCD', 'Bontoc'),
(99, 99, 'katarinagarcia', 'Katarina', 'Garcia', '639339448236', 99, 'https://www.facebook.com/katarinagarcia', 'ABCD', 'Tabuk City'),
(100, 100, 'luisathompson', 'Luisa', 'Thompson', '639432326166', 100, 'https://www.facebook.com/luisathompson', 'ABCD', 'Tuguegarao City');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(10) NOT NULL,
  `booking_id` int(10) NOT NULL,
  `reviewer_id` int(10) NOT NULL,
  `reviewee_id` int(10) NOT NULL,
  `rating` int(10) NOT NULL,
  `review` varchar(500) DEFAULT NULL,
  `last_update` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `booking_id`, `reviewer_id`, `reviewee_id`, `rating`, `review`, `last_update`) VALUES
(1, 1, 1, 2, 5, 'Sobrang galing ng serbisyo ng masahe dito! Talagang nabawasan ang sakit ng aking likod.', '2023-03-09 19:22:30.000000'),
(2, 2, 1, 3, 3, 'Ang linis at maayos ng lugar, nakakarelax ang ambiance at talagang worth it ang bayad sa masahe.', '2023-03-10 19:22:30.000000'),
(3, 3, 1, 4, 4, 'Napaka-professional ng mga therapist dito, talagang nakakawala ng stress at pahinga ang katawan.', '2023-03-11 19:22:30.000000'),
(4, 4, 1, 5, 4, 'Sulit ang bawat sentimo sa masahe dito, ang galing ng pagpapamasahe at nakakawala ng sakit sa katawan.', '2023-03-12 19:22:30.000000'),
(5, 5, 1, 6, 4, 'Mababait at magagaling ang mga therapist dito, talagang nakakatanggal ng pagod at stress.', '2023-03-13 19:22:30.000000'),
(6, 6, 1, 7, 5, 'Ang sarap ng pakiramdam pagkatapos ng masahe dito, talagang nabawasan ang tensyon sa katawan.', '2023-03-14 19:22:30.000000'),
(7, 7, 1, 8, 3, 'Highly recommended ang masahe dito, talagang magaling sila sa pagpapamasahe at napakarelax ng ambiance.', '2023-03-15 19:22:30.000000'),
(8, 8, 1, 9, 5, 'Talagang nakakatanggal ng sakit sa katawan ang masahe dito, sulit na sulit ang bayad.', '2023-03-16 19:22:30.000000'),
(9, 9, 1, 10, 4, 'Sobrang linis at maayos ng lugar, nakakawala ng stress ang ambiance at nakaka-relax ng katawan ang masahe.', '2023-03-17 19:22:30.000000'),
(10, 1, 2, 1, 4, 'Salamat po sa pagtitiwala sa akin bilang inyong therapist. Natutuwa ako at nakatulong ako sa inyong pagpapagaan ng pakiramdam.', '2023-03-07 20:22:30.000000'),
(11, 2, 3, 1, 4, 'Masaya ako na nakapagbigay ako sa inyo ng tamang presyon at tamang teknik sa inyong masahe. Salamat po sa pagtitiwala sa aking serbisyo.', '2023-03-08 20:22:30.000000'),
(12, 3, 4, 1, 3, 'Nakatutulong po talaga sa atin ang regular na masahe para maalis ang tensyon at kirot sa katawan. Salamat po sa pagpapahalaga sa inyong kalusugan.', '2023-03-09 20:22:30.000000'),
(13, 4, 5, 1, 4, 'Salamat po sa magandang feedback. Inaalagaan ko talaga ang kalidad ng aking serbisyo para maibigay ang relaxation at healing na kailangan ng aking mga kliyente.', '2023-03-10 20:22:30.000000'),
(14, 5, 6, 1, 4, 'Masaya ako na naging kumportable kayo sa aking serbisyo. Maraming salamat po sa pagtitiwala sa akin at sa pagpapakita ng respeto sa aking propesyon.', '2023-03-11 20:22:30.000000'),
(15, 6, 7, 1, 4, 'Natutuwa ako na nakapagbigay ako sa inyo ng tamang masahe para maalis ang stress at tension sa katawan. Salamat po sa pagtitiwala sa aking serbisyo.', '2023-03-12 20:22:30.000000'),
(16, 7, 8, 1, 3, 'Salamat po sa magandang karanasan sa aking serbisyo. Nais ko pong magbigay ng pinakamahusay na serbisyo para sa inyo.', '2023-03-13 20:22:30.000000'),
(17, 8, 9, 1, 5, 'Masarap po sa pakiramdam na nakatulong ako sa inyo sa pamamagitan ng aking masahe. Salamat po sa pagtitiwala sa aking kakayahan.', '2023-03-14 20:22:30.000000'),
(18, 9, 10, 1, 4, 'Nakatutulong po talaga sa atin ang magpa-masahe para maibsan ang mga sakit at kirot sa katawan. Salamat po sa pagpapahalaga sa inyong kalusugan.', '2023-03-15 20:22:30.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email_address`, `password`, `user_type`) VALUES
(1, 'jomarsmith@gmail.com', '$2y$10$qWSzwVH575YUT8m0jLsQHe4K8pQlD4A5nydsMeU.RKGPZcNQ.IHyq', 'customer'),
(2, 'adrianbrown@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(3, 'sarahjohnson@gmail.com', '$2y$10$U0bHZvKKKF9ZtT5JtqMTwu3fCr5QoofqtkEfaW/XgZidyoO2hu6om', 'professional'),
(4, 'lilynguyen@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(5, 'michaeldavis@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(6, 'mariahernandez@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(7, 'markwilson@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(8, 'emilykim@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(9, 'victorialee@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(10, 'jessicamartin@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(11, 'rachelchen@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(12, 'davidgarcia@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(13, 'samanthathompson@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(14, 'johnsmith@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(15, 'lisagreen@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(16, 'kimberlyjones@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(17, 'brianlee@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(18, 'amandataylor@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(19, 'taylorevans@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(20, 'rachellee@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(21, 'davidbrown@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(22, 'jameskim@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(23, 'sophialee@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(24, 'angelacruz@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(25, 'ericrodriguez@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(26, 'andreagarcia@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(27, 'clairepark@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(28, 'kevinsantos@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(29, 'mariareyes@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(30, 'jasminetan@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(31, 'monicadela@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(32, 'carloslim@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(33, 'steventan@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(34, 'michellechua@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(35, 'andreaperez@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(36, 'katarinatan@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(37, 'luisasantos@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(38, 'danielreyes@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(39, 'patriciaong@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(40, 'robertlim@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(41, 'manuelgarcia@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(42, 'kathleentan@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(43, 'sarahkim@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(44, 'lilylee@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(45, 'michaelcruz@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(46, 'mariarodriguez@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(47, 'markgarcia@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(48, 'emilypark@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(49, 'victoriasantos@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(50, 'jessicareyes@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(51, 'racheltan@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(52, 'daviddela@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(53, 'samanthalim@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(54, 'johntan@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(55, 'lisachua@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(56, 'kimberlyperez@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(57, 'briantan@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(58, 'amandasantos@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(59, 'taylorreyes@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(60, 'kevinong@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(61, 'marialim@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(62, 'jasminegarcia@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(63, 'monicatan@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(64, 'carlosjohnson@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(65, 'stevennguyen@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(66, 'michelledavis@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(67, 'andreahernandez@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(68, 'katarinawilson@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(69, 'luisakim@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(70, 'daniellee@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(71, 'patriciamartin@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(72, 'robertchen@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(73, 'manuelgarcia@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(74, 'kathleenthompson@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(75, 'davidsmith@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional'),
(76, 'jamesgreen@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'customer'),
(77, 'sophiajones@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'customer'),
(78, 'angelalee@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'customer'),
(79, 'erictaylor@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'customer'),
(80, 'andreaevans@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'customer'),
(81, 'clairelee@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'customer'),
(82, 'kevinbrown@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'customer'),
(83, 'mariakim@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'customer'),
(84, 'jasminelee@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'customer'),
(85, 'monicacruz@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'customer'),
(86, 'carlosrodriguez@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'customer'),
(87, 'stevengarcia@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'customer'),
(88, 'sarahpark@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'customer'),
(89, 'lilysantos@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'customer'),
(90, 'michaelreyes@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'customer'),
(91, 'mariatan@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'customer'),
(92, 'markdela@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'customer'),
(93, 'emilyhernandez@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'customer'),
(94, 'victoriawilson@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'customer'),
(95, 'jessicakim@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'customer'),
(96, 'rachellee@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'customer'),
(97, 'davidmartin@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'customer'),
(98, 'andreachen@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'customer'),
(99, 'katarinagarcia@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'customer'),
(100, 'luisathompson@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'customer'),
(101, 'adminspace@gmail.com', '$2y$10$LJaW69bAb4VkYnBwNvrg/OSa3BS5a8f0W0zgeAUYKQKH.6ornwJKi', 'admin'),
(102, 'ace44@gmail.com', '$2y$10$l4VYjGS8xp0.Sr2fqBtDB.wsl/eAgE0l9VAWk7hXNw1up2woBAJy.', 'customer'),
(103, 'customer12@gmail.com', '$2y$10$zT9c9h6wrMIs26GZj631hOJDqqbl8g5LkuVBlESODwxuXCgZtj74S', 'customer'),
(104, 'ace45@gmail.com', '$2y$10$0QWu.GSWVklhZQ2J07QaxOv8Pxoj/Q/T6v5AZPTsVg8dSlDMj/biC', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `user_images`
--

CREATE TABLE `user_images` (
  `image_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_images`
--

INSERT INTO `user_images` (`image_id`, `user_id`, `image`) VALUES
(1, 1, '202303030855000000mrpogi.png'),
(2, 2, '202303030955000000masahista.png'),
(3, 3, '1'),
(4, 4, '1'),
(5, 5, '1'),
(6, 6, '1'),
(7, 7, '1'),
(8, 8, '1'),
(9, 9, '1'),
(10, 10, '1'),
(11, 11, '1'),
(12, 12, '1'),
(13, 13, '1'),
(14, 14, '1'),
(15, 15, '1'),
(16, 16, '1'),
(17, 17, '1'),
(18, 18, '1'),
(19, 19, '1'),
(20, 20, '1'),
(21, 21, '1'),
(22, 22, '1'),
(23, 23, '1'),
(24, 24, '1'),
(25, 25, '1'),
(26, 26, '1'),
(27, 27, '1'),
(28, 28, '1'),
(29, 29, '1'),
(30, 30, '1'),
(31, 31, '1'),
(32, 32, '1'),
(33, 33, '1'),
(34, 34, '1'),
(35, 35, '1'),
(36, 36, '1'),
(37, 37, '1'),
(38, 38, '1'),
(39, 39, '1'),
(40, 40, '1'),
(41, 41, '1'),
(42, 42, '1'),
(43, 43, '1'),
(44, 44, '1'),
(45, 45, '1'),
(46, 46, '1'),
(47, 47, '1'),
(48, 48, '1'),
(49, 49, '1'),
(50, 50, '1'),
(51, 51, '1'),
(52, 52, '1'),
(53, 53, '1'),
(54, 54, '1'),
(55, 55, '1'),
(56, 56, '1'),
(57, 57, '1'),
(58, 58, '1'),
(59, 59, '1'),
(60, 60, '1'),
(61, 61, '1'),
(62, 62, '1'),
(63, 63, '1'),
(64, 64, '1'),
(65, 65, '1'),
(66, 66, '1'),
(67, 67, '1'),
(68, 68, '1'),
(69, 69, '1'),
(70, 70, '1'),
(71, 71, '1'),
(72, 72, '1'),
(73, 73, '1'),
(74, 74, '1'),
(75, 75, '1'),
(76, 76, '1'),
(77, 77, '1'),
(78, 78, '1'),
(79, 79, '1'),
(80, 80, '1'),
(81, 81, '1'),
(82, 82, '1'),
(83, 83, '1'),
(84, 84, '1'),
(85, 85, '1'),
(86, 86, '1'),
(87, 87, '1'),
(88, 88, '1'),
(89, 89, '1'),
(90, 90, '1'),
(91, 91, '1'),
(92, 92, '1'),
(93, 93, '1'),
(94, 94, '1'),
(95, 95, '1'),
(96, 96, '1'),
(97, 97, '1'),
(98, 98, '1'),
(99, 99, '1'),
(100, 100, '1'),
(101, 1, '20230319073200000057t6gy7huy78jikko.png'),
(102, 1, '202303190743000000T6Y7U8IJ9KOLP.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`query_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `professionals`
--
ALTER TABLE `professionals`
  ADD PRIMARY KEY (`professional_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_images`
--
ALTER TABLE `user_images`
  ADD PRIMARY KEY (`image_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `query_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `location_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `email_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `professionals`
--
ALTER TABLE `professionals`
  MODIFY `professional_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `profile_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `user_images`
--
ALTER TABLE `user_images`
  MODIFY `image_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
