-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2023 at 12:14 AM
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
-- Database: `rentalmate`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `Admin_user_name` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`Admin_user_name`, `Password`) VALUES
('admin', '$2y$10$owaKi1tr3A.WgsQzuyyMluhwM5tF/n7kr1Vtv5sdVTl1rb/b45A5W'),
('saif', '$2y$10$S/Vb7U4oP7mXuI5/kApcVush5jmWFK0RS3qngw203L8w2k6T2Z5vm');


-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `User_name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `First_name` varchar(25) DEFAULT NULL,
  `Last_name` varchar(25) DEFAULT NULL,
  `Password` varchar(255) NOT NULL,
  `Phone_number` varchar(25) DEFAULT NULL,
  `Profile_picture_path` varchar(255) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Birth_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `image_property`
--

CREATE TABLE `image_property` (
  `image_no` int(11) NOT NULL,
  `image` blob DEFAULT NULL,
  `Property_id` int(11) NOT NULL,
  `Image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `Location_id` int(11) NOT NULL,
  `City` varchar(25) DEFAULT NULL,
  `Country` varchar(25) DEFAULT NULL,
  `Street` varchar(25) DEFAULT NULL,
  `Longitude` varchar(255) DEFAULT NULL,
  `Latitude` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`Location_id`, `City`, `Country`, `Street`, `Longitude`, `Latitude`) VALUES
(2, 'Nablus', 'Palestine', 'Sabastia', '35.197098544266474', '32.27502524872256'),
(4, 'Nablus', 'Palestine', 'Sabatia', '35.200006374948316', '32.26197418860799'),
(5, 'Tulkarem', 'Palestine', '', '35.204568556430786', '32.268926740812994'),
(6, 'Nablus', 'Palestine', 'Sabastia', '35.203817537906616', '32.26541286864964'),
(7, 'Nablus', 'Palestine', 'Sabastia', '35.2026624', '32.2666496'),
(8, 'Der-Azzur', 'Syria', '', '35.20770137656018', '32.26822518684551'),
(9, 'Nablus', 'Palestine', 'Dawlat Sabastia', '35.20371024954602', '32.26835219270714'),
(10, 'Cairo', 'Egypt', '', '35.192675663809915', '32.274121326869384'),
(11, 'Tokio', 'Japan', 'Eren', '35.20804469931409', '32.26751153157848'),
(12, 'Nablus', 'Palestine', 'Sabastia', '35.20688598501965', '32.26673134267874');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `Owner_user_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `Property_id` int(11) NOT NULL,
  `Owner_user_name` varchar(255) DEFAULT NULL,
  `Location_id` int(11) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Beds` int(11) NOT NULL DEFAULT 2,
  `Description` varchar(10000) DEFAULT NULL,
  `Start_date` date NOT NULL,
  `End_date` date NOT NULL,
  `Image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `Property_id` int(11) NOT NULL,
  `Owner_user_name` varchar(255) NOT NULL,
  `Tenant_user_name` varchar(255) NOT NULL,
  `Start_date` date NOT NULL DEFAULT current_timestamp(),
  `End_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE `tenant` (
  `Tenant_user_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`Admin_user_name`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`User_name`);

--
-- Indexes for table `image_property`
--
ALTER TABLE `image_property`
  ADD PRIMARY KEY (`image_no`),
  ADD KEY `Property_id` (`Property_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`Location_id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`Owner_user_name`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`Property_id`),
  ADD KEY `fk_loc_id` (`Location_id`),
  ADD KEY `property_ibfk_1` (`Owner_user_name`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`Property_id`,`Owner_user_name`,`Tenant_user_name`),
  ADD KEY `rent_ibfk_2` (`Owner_user_name`),
  ADD KEY `rent_ibfk_3` (`Tenant_user_name`);

--
-- Indexes for table `tenant`
--
ALTER TABLE `tenant`
  ADD PRIMARY KEY (`Tenant_user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image_property`
--
ALTER TABLE `image_property`
  MODIFY `image_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `Location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `Property_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `image_property`
--
ALTER TABLE `image_property`
  ADD CONSTRAINT `image_property_ibfk_1` FOREIGN KEY (`Property_id`) REFERENCES `property` (`Property_id`);

--
-- Constraints for table `owner`
--
ALTER TABLE `owner`
  ADD CONSTRAINT `fk_owner_customer` FOREIGN KEY (`Owner_user_name`) REFERENCES `customer` (`User_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `fk_loc_id` FOREIGN KEY (`Location_id`) REFERENCES `location` (`Location_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `property_ibfk_1` FOREIGN KEY (`Owner_user_name`) REFERENCES `owner` (`Owner_user_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rent`
--
ALTER TABLE `rent`
  ADD CONSTRAINT `rent_ibfk_1` FOREIGN KEY (`Property_id`) REFERENCES `property` (`Property_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rent_ibfk_2` FOREIGN KEY (`Owner_user_name`) REFERENCES `owner` (`Owner_user_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rent_ibfk_3` FOREIGN KEY (`Tenant_user_name`) REFERENCES `tenant` (`Tenant_user_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tenant`
--
ALTER TABLE `tenant`
  ADD CONSTRAINT `fk_tenant_customer` FOREIGN KEY (`Tenant_user_name`) REFERENCES `customer` (`User_name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
