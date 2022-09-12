-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 01:24 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fkims`
--

-- --------------------------------------------------------

--
-- Table structure for table `dispenseitem`
--

CREATE TABLE `dispenseitem` (
  `dispenseID` int(11) NOT NULL,
  `adminID` varchar(20) NOT NULL,
  `itemID` varchar(20) NOT NULL,
  `quantityOut` int(11) NOT NULL,
  `StaffID` varchar(20) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dispenseitem`
--

INSERT INTO `dispenseitem` (`dispenseID`, `adminID`, `itemID`, `quantityOut`, `StaffID`, `Date`, `Time`) VALUES
(50, 'AD001', 'PP12', 50, 'STF02', '2021-06-12', '12:28'),
(51, 'AD001', 'M02', 2, 'STF01', '2021-06-05', '16:03'),
(52, 'AD001', 'CL12', 30, 'STF01', '2021-06-14', '19:20');

-- --------------------------------------------------------

--
-- Table structure for table `itemlist`
--

CREATE TABLE `itemlist` (
  `vendorID` varchar(30) NOT NULL,
  `itemType` varchar(30) NOT NULL,
  `itemID` varchar(30) NOT NULL,
  `itemName` varchar(50) NOT NULL,
  `itemBalance` int(5) NOT NULL,
  `itemPrice` float NOT NULL,
  `RegDate` varchar(11) NOT NULL,
  `RegTime` varchar(11) NOT NULL,
  `itemStatus` varchar(200) NOT NULL,
  `itemDesc` varchar(200) NOT NULL,
  `sectionID` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itemlist`
--

INSERT INTO `itemlist` (`vendorID`, `itemType`, `itemID`, `itemName`, `itemBalance`, `itemPrice`, `RegDate`, `RegTime`, `itemStatus`, `itemDesc`, `sectionID`) VALUES
('TRG30', 'Calendar', 'CL12', 'Event Calendar', 1070, 10, '1/6/2021', '5.13pm', 'Available', 'Calendar Tahunan', 'C11'),
('KEL90', 'Baju', 'CLTH10', 'KORPORAT FK', 50, 65, '1/6/2021', '5.13pm', 'Available', 'BAJU FAKULTI', 'C12'),
('KEL90', 'Baju', 'CLTH13', 'JACKET FAKULTI', 26, 80, '2021-05-13', '14:22', 'Available', 'JACKET FAKULTI 2021', 'C10'),
('PHG11', 'Marker', 'M01', 'White Board Marker', 100, 2, '2021-06-11', '20:08', 'Available', 'Whiteboard Marker Blue', 'C10'),
('PHG32', 'Marker', 'M02', 'Permanent Marker', 28, 2.1, '2021-06-14', '16:03', 'Available', 'Permanent Marker Black', 'C10'),
('KUL90', 'Paper', 'PP12', 'YELLOW A4', 55, 20, '22/12/2020', '8.50am', 'Available', 'A4 PAPER', 'C14');

-- --------------------------------------------------------

--
-- Table structure for table `managerequest`
--

CREATE TABLE `managerequest` (
  `RequestID` int(11) NOT NULL,
  `staffID` varchar(20) NOT NULL,
  `itemID` varchar(20) NOT NULL,
  `itemQuantity` int(200) NOT NULL,
  `dateRetrieve` varchar(20) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managerequest`
--

INSERT INTO `managerequest` (`RequestID`, `staffID`, `itemID`, `itemQuantity`, `dateRetrieve`, `comment`, `status`) VALUES
(1, 'STF01', 'CLTH10', 2, '2021-06-10', 'Size S', 'Accept'),
(4, 'STF02', 'CLTH13', 100, '2021-06-26', 'None', 'Accept'),
(5, 'STF02', 'CLTH13', 1, '2021-05-30', 'None', 'Pending'),
(6, 'STF02', 'CLTH13', 1, '2021-05-30', 'None', 'Pending'),
(12, 'STF01', 'M01', 2, '2021-06-12', 'None', 'Pending'),
(13, 'STF01', 'CLTH10', 5, '2021-06-14', 'M size', 'Pending'),
(15, 'STF01', 'CL12', 30, '2021-06-15', 'None', 'Accept');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `UserType` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `UserType`) VALUES
('AD001', 'AHMAD JAILANI SIDEK', 'abc123', 'Admin'),
('STF001', 'FAKHRUL RAZI BIN SAIDEN', 'password', 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_list`
--

CREATE TABLE `vendor_list` (
  `vendorID` varchar(20) NOT NULL,
  `vendor_name` varchar(100) NOT NULL,
  `vendor_email` varchar(50) NOT NULL,
  `vendor_address` varchar(100) NOT NULL,
  `vendor_phone` varchar(20) NOT NULL,
  `vendor_item` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_list`
--

INSERT INTO `vendor_list` (`vendorID`, `vendor_name`, `vendor_email`, `vendor_address`, `vendor_phone`, `vendor_item`) VALUES
('KEL90', 'Printing Sohor SDN.BHD', 'sohorprint@gmail.com', 'Pasir Mas, Kelantan.', '02-1920139', 'Baju Korporat'),
('KL19', 'Seksyen21 store', '21store@gmail.com', '23, Lorong Chow Kit, Kuala Lumpur', '04-9012901', 'Multi'),
('KUL90', 'Kedai Wahab', 'wahabpahang@gmail.com', '90,Taman Tas, Kuantan, Pahang.', '09-2390912', 'Stationary'),
('PHG11', 'Kuantan Stationary', 'statkuan@yahoo.com', '34,Taman Tas, Kuantan, Pahang', '09-81290212', 'Stationary'),
('PHG32', 'SchoolKuantan SDN BHD', 'kuantansch@yahoo.com', '32,Taman Makhota, Kuantan, Pahang', '07-2391022', 'Stationary'),
('TRG30', 'TerengganuHafiz Berhad', 'TrgHfz@gmail.com', 'Jalan 21, Gong Badak, Terengganu.', '06-2103201', 'Calendar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dispenseitem`
--
ALTER TABLE `dispenseitem`
  ADD PRIMARY KEY (`dispenseID`),
  ADD KEY `itemID` (`itemID`);

--
-- Indexes for table `itemlist`
--
ALTER TABLE `itemlist`
  ADD PRIMARY KEY (`itemID`),
  ADD KEY `vendorID` (`vendorID`);

--
-- Indexes for table `managerequest`
--
ALTER TABLE `managerequest`
  ADD PRIMARY KEY (`RequestID`),
  ADD KEY `itemID` (`itemID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_list`
--
ALTER TABLE `vendor_list`
  ADD PRIMARY KEY (`vendorID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dispenseitem`
--
ALTER TABLE `dispenseitem`
  MODIFY `dispenseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `managerequest`
--
ALTER TABLE `managerequest`
  MODIFY `RequestID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dispenseitem`
--
ALTER TABLE `dispenseitem`
  ADD CONSTRAINT `dispenseitem_ibfk_1` FOREIGN KEY (`itemID`) REFERENCES `itemlist` (`itemID`);

--
-- Constraints for table `itemlist`
--
ALTER TABLE `itemlist`
  ADD CONSTRAINT `itemlist_ibfk_1` FOREIGN KEY (`vendorID`) REFERENCES `vendor_list` (`vendorID`);

--
-- Constraints for table `managerequest`
--
ALTER TABLE `managerequest`
  ADD CONSTRAINT `managerequest_ibfk_1` FOREIGN KEY (`itemID`) REFERENCES `itemlist` (`itemID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
