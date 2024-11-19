-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 11, 2023 at 05:16 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wildlife_safari`
--

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(3) NOT NULL,
  `title` varchar(100) NOT NULL,
  `type_` varchar(100) NOT NULL,
  `description_` varchar(500) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `title`, `type_`, `description_`, `price`) VALUES
(1, 'Pubudu', 'featured-courses', 'Dn weda bza', 100000),
(4, 'ARsh', 'featured-courses', 'Testing', 15000),
(5, 'supiri', 'Weekday package', 'gihilla balapan', 12500),
(7, 'supiri eka', 'undergraduate', 'http', 125001),
(8, 'supiri akk', '', 'sfghgh', 1253333),
(10, 'sanuja', 'featured-courses', 'super', 15000),
(11, 'supiri', 'Weekday package', 'fff', 12500),
(12, 'supiri', 'Weekday package', 'fff', 12500),
(16, 'Chamikara', 'Weekday package', 'rwfrfr', 100);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `res_id` int(20) NOT NULL,
  `salutation` varchar(32) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `phone_no` int(15) NOT NULL,
  `email` varchar(32) NOT NULL,
  `country` varchar(20) NOT NULL,
  `package` varchar(32) NOT NULL,
  `camera_option` varchar(32) NOT NULL,
  `date` date NOT NULL,
  `adults` int(15) NOT NULL,
  `child` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`res_id`, `salutation`, `first_name`, `last_name`, `phone_no`, `email`, `country`, `package`, `camera_option`, `date`, `adults`, `child`) VALUES
(1, 'Madam', 'kasuni', 'bandara', 777654321, 'fgff@gmail', 'Sri lanka', 'Weekdays package', 'Canon EOS R5', '2023-06-23', 1, 0),
(2, 'Miss', 'tregrh', 'cvsdv', 64846846, 'cgsg@gmail.com', 'China', 'Seasonal package', 'Fujifilm X-T200', '2023-06-09', 1, 2),
(3, 'Master', 'ef2f', 'ef24f24', 66575427, 'vvfv@gmail.com', 'Sri lanka', 'Seasonal package', 'Nikon Z6', '2023-06-16', 2, 3),
(4, 'Dr', 'efwrf', 'vrvrwv', 357357, 'fbfxb@gmail.cm', 'Australia', 'Seasonal package', 'Leica M10 ', '2023-06-10', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(12) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `country` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `f_name`, `l_name`, `gender`, `dob`, `nationality`, `address`, `phone`, `country`, `email`, `password`) VALUES
('20006581240', 'Kusalllll', 'Indika', 'Male', '2023-04-05', 'Sri Lankan', 'No.44 sadalle Haragama Road', 765432887, 'Sri Lanka', 'kusal@gmail.com', 'Kusal#123'),
('20016495433', 'Eranga', 'Bandara', 'Male', '2001-06-22', 'Sri Lankan', '64, Secon lane, Aruppoola Road, Kandy', 757353644, 'Sri lanka', 'eranga@gmail.com', 'Eranga#123'),
('20019938', 'Maleen', 'Rodrigo', 'Male', '2023-06-13', 'Se', 'piliyandalahuhkjhkj huhu;uho;houh; ihuiibhkbhbhb hbhbhbb', 774682238, 'Sri lanka', 'maleen.rodru@gmail.com', 'maleen123'),
('2002167', 'Udani', 'Imasha', 'Female', '2023-06-01', 'foreign', '20/12 Nalanda place medabowala kandy', 88775, 'srilvhg', 'chamikaudanira@gmail.com', 'chamikara123'),
('20023478', 'Udani', 'Bandara', 'Male', '2023-06-13', 'Sri Lanka', '54 jajkkmmKandy', 771463159, 'Sri Lanka', 'chamikara876@gmail.com', 'chamikara123'),
('20027657612', 'Dinuka', 'Karunaratne', 'Male', '2023-09-15', 'Sri Lankan', '20/19 Nalanda place, medabowala, kandy', 777635432, 'Sri lankan', 'dinuka@gmail.com', 'dinuka123'),
('2234', 'Imashi', 'Bandara', 'Female', '2023-06-05', 'Sri Lanka', '20/12 Nalanda place medabowala kandy', 76456322, 'Sri Lanka', 'chami5k3adra@gmail.com', 'chamikara'),
('234564', 'has', 'banad', 'Male', '2023-06-11', 'foreign', '20/12 Nalanda place medabowala kandy', 8828765, 'Sri Lanka', 'chamikawe3rra@gmail.com', 'chamikara123'),
('573224', 'ruwan', 'rsgsrg', 'Female', '2023-06-09', 'fbxfb', 'gdhtdh7', 9316745, 'vcngdndg', 'ruwan@gmail.com', 'zxcv'),
('58w24', 'uuuuwan', 'Imasha', 'Male', '2023-06-15', 'zvfsbsfb', '57ydhhfdh', 956258, 'bxdfbdb', 'chamikarathfds@gmail.com', '1234'),
('68538', 'ohoh', 'Imasha', 'Male', '2023-06-13', 'wfgfrwg', '20/12 Nalanda place medabowala kandy', 5793, 'Sri Lanka', 'chamiktttara@gmail.com', 'chamikara123'),
('967374', 'yysrrhsggs', 'sgrrh', 'Female', '2023-06-15', 'fxnfn', 'ggsgeg', 1475886, 'fbnxjn', 'fxhbfb@gmail.com', 'zxcv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `res_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
