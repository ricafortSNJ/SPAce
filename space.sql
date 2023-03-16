-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2023 at 02:30 PM
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
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `professional_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `user_id`, `professional_id`, `date`, `time`, `status`) VALUES
(1, 1, 1, '2023-03-20', '13:00:00.000000', 'Pending'),
(2, 1, 1, '2023-03-17', '09:30:00.000000', 'Cancelled'),
(3, 1, 1, '2023-03-13', '20:00:00.000000', 'Approved'),
(4, 1, 1, '2023-03-06', '14:00:00.000000', 'Paid'),
(5, 1, 2, '2023-03-20', '09:30:00.000000', 'Pending'),
(6, 1, 1, '2023-03-20', '09:30:00.000000', 'Pending'),
(7, 1, 2, '2023-03-20', '09:30:00.000000', 'Pending'),
(8, 1, 3, '2023-03-20', '09:30:00.000000', 'Pending'),
(9, 1, 5, '2023-03-20', '09:30:00.000000', 'Pending');

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
(5, 'Quezon City', 'NCR', '14.676', '121.0437');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `booking_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `booking_id`, `amount`, `date`, `status`) VALUES
(1, 4, 1000, '2023-03-05 12:00:00.000000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `professionals`
--

CREATE TABLE `professionals` (
  `professional_id` int(10) NOT NULL,
  `profile_id` int(10) NOT NULL,
  `expertise` varchar(50) NOT NULL,
  `availability` varchar(50) NOT NULL,
  `rates` int(10) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `professionals`
--

INSERT INTO `professionals` (`professional_id`, `profile_id`, `expertise`, `availability`, `rates`, `location`) VALUES
(1, 2, 'Skin Care Specialist', 'MWF 8:00-18:00', 1000, 'Tondo, Manila'),
(2, 7, ' Reflexologist', 'MWF 8:00-18:00', 600, 'Batangas'),
(3, 8, ' Reiki Practitioner', 'MWF 8:00-18:00', 450, 'Manila City'),
(4, 9, ' Makeup Artist', 'TTh 8:00-18:00', 800, 'Makati City'),
(5, 10, ' Hairstylist', 'MTWThF 8:00-18:00', 500, 'Quezon City');

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
  `privacy_setting` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`profile_id`, `user_id`, `username`, `first_name`, `last_name`, `mobile_number`, `image_id`, `social_media`, `privacy_setting`) VALUES
(1, 1, 'customer123', 'Clyde', 'Abelanio', '9123456777', 1, 'https://www.facebook.com/clyde.abelanio/', 'ABCD'),
(2, 2, 'professional123', 'Adrian', 'Desquitado', '9123456777', 2, 'https://www.facebook.com/adrian.desquitado/', 'ABCD'),
(3, 3, 'sarahjohnson', 'Sarah', 'Johnson', '9925087128', 3, 'https://www.facebook.com/sarahjohnson', 'ABCD'),
(4, 4, 'lilynguyen', 'Lily', 'Nguyen', '9788483703', 4, 'https://www.facebook.com/lilynguyen', 'ABCD'),
(5, 5, 'michaeldavis', 'Michael', 'Davis', '9902640738', 5, 'https://www.facebook.com/michaeldavis', 'ABCD'),
(6, 6, 'mariahernandez', 'Maria', 'Hernandez', '9287789823', 6, 'https://www.facebook.com/mariahernandez', 'ABCD'),
(7, 7, 'markwilson', 'Mark', 'Wilson', '9319558628', 7, 'https://www.facebook.com/markwilson', 'ABCD'),
(8, 8, 'emilykim', 'Emily', 'Kim', '9709963867', 8, 'https://www.facebook.com/emilykim', 'ABCD'),
(9, 9, 'victorialee', 'Victoria', 'Lee', '9659782783', 9, 'https://www.facebook.com/victorialee', 'ABCD'),
(10, 10, 'jessicamartin', 'Jessica', 'Martin', '9271589455', 10, 'https://www.facebook.com/jessicamartin', 'ABCD'),
(11, 16, 'acemalakas', 'Ace', 'of Spades', '9123456888', 3, 'https://www.facebook.com/aceofspades/', 'ABCD');

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
(1, 1, 1, 2, 1, 'Lalong nangati ang aking balat at sumama ang pakiramdam ko matapos ang aming session. Not recommended.', '2023-03-14 19:22:30.431851'),
(2, 2, 1, 2, 5, 'Tanggal ang sakit ng aking balakang! ', '2023-03-14 19:22:36.170868'),
(3, 3, 1, 2, 3, 'Insert Review Here - hs82dk2', '2023-03-14 19:22:41.284192'),
(4, 1, 2, 1, 3, 'Insert Review Here - 8sh27gg6', '2023-03-14 19:22:45.571507'),
(5, 2, 2, 1, 4, 'Insert Review Here - y28h3usdbn', '2023-03-14 19:22:50.582074'),
(6, 3, 2, 1, 4, 'Insert Review Here - 9823bds', '2023-03-06 15:50:00.336000');

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
(0, 'adminspace@gmail.com', '$2y$10$LJaW69bAb4VkYnBwNvrg/OSa3BS5a8f0W0zgeAUYKQKH.6ornwJKi', 'admin'),
(1, 'user3@gmail.com', '$2y$10$qWSzwVH575YUT8m0jLsQHe4K8pQlD4A5nydsMeU.RKGPZcNQ.IHyq', 'customer'),
(2, 'user4@gmail.com', '$2y$10$SFKBOxn0ANjxGHVu2JmnXO5TTRg86.9HBUVSPPFUeAZfEKMs0Bfme', 'professional');

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
(2, 2, '202303030955000000masahista.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`location_id`);

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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `location_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `professionals`
--
ALTER TABLE `professionals`
  MODIFY `professional_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `profile_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_images`
--
ALTER TABLE `user_images`
  MODIFY `image_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
