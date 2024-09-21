-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2023 at 10:02 PM
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
-- Database: `bus_booking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus_location`
--

CREATE TABLE `bus_location` (
  `ID` int(11) NOT NULL,
  `Booking_station` varchar(16) NOT NULL,
  `Destination` varchar(16) NOT NULL,
  `Date_of_travel` date NOT NULL,
  `Return_Day` date NOT NULL,
  `Departure_Time` datetime NOT NULL,
  `Arrival_Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bus_registration`
--

CREATE TABLE `bus_registration` (
  `ID` int(11) NOT NULL,
  `Bus_Name` varchar(14) NOT NULL,
  `Number_Plate` varchar(14) NOT NULL,
  `Number_of_sits` int(14) NOT NULL,
  `Bus_Type` varchar(14) NOT NULL,
  `Log_Book` varchar(60) NOT NULL,
  `Bus_Condition` varchar(15) NOT NULL,
  `Bus_Ownership` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bus_registration`
--

INSERT INTO `bus_registration` (`ID`, `Bus_Name`, `Number_Plate`, `Number_of_sits`, `Bus_Type`, `Log_Book`, `Bus_Condition`, `Bus_Ownership`) VALUES
(3, 'IGNITE MAIN', 'KBP268E', 40, 'ISUZU', 'KBTYG76T98J91W', 'NEW', 'COMPANY'),
(30, '', '', 0, '', '', '', ''),
(31, 'MAMBO LEO', 'KCA456A', 51, 'ISUZU', 'FD5G7Y895358B', 'gergre', 'COMPANY'),
(32, '', '', 0, '', '', '', ''),
(33, 'MAMBO LEO', 'KCA456A', 91, 'ISUZU', 'FD5G7Y895358B', 'gergre', 'COMPANY'),
(34, '', '', 0, '', '', '', ''),
(35, '', '', 0, '', '', '', ''),
(36, '', '', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customerdetails`
--

CREATE TABLE `customerdetails` (
  `ID` int(11) NOT NULL,
  `passport` int(60) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Middle_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `gender` int(50) NOT NULL,
  `DOB` date NOT NULL,
  `place` varchar(60) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `MiddleName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `relation` varchar(50) NOT NULL,
  `Emergency` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customerdetails`
--

INSERT INTO `customerdetails` (`ID`, `passport`, `First_Name`, `Middle_Name`, `Last_Name`, `gender`, `DOB`, `place`, `FirstName`, `MiddleName`, `LastName`, `relation`, `Emergency`) VALUES
(1, 0, '', '', '', 0, '0000-00-00', '', '', '', '', '', 0),
(2, 5, 'Samwelw', 'Njoroge', 'Karanja', 0, '2023-05-30', 'kenya', 'sammy', 'Njoroge', 'Karanja', 'Father', 1890),
(3, 43435345, 'Samwel', 'Njoroge', 'Karanja', 0, '2023-06-07', 'kenya', 'Samwel', 'Njoroge', 'Karanja', 'Father', 8900000);

-- --------------------------------------------------------

--
-- Table structure for table `driver_assign`
--

CREATE TABLE `driver_assign` (
  `ID` int(11) NOT NULL,
  `First_Name` varchar(40) NOT NULL,
  `Middle_Name` varchar(40) NOT NULL,
  `Last_Name` varchar(40) NOT NULL,
  `ID_Number` int(11) NOT NULL,
  `Car_Number` varchar(20) NOT NULL,
  `Number_of_sits` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driver_assign`
--

INSERT INTO `driver_assign` (`ID`, `First_Name`, `Middle_Name`, `Last_Name`, `ID_Number`, `Car_Number`, `Number_of_sits`) VALUES
(1, 'Samwel', 'Njoroge', 'Karanja', 38229299, 'KBP268E', 40),
(18, 'Jane', 'Ngari', 'Atieno', 38229299, 'KBP268E', 45454);

-- --------------------------------------------------------

--
-- Table structure for table `driver_registration`
--

CREATE TABLE `driver_registration` (
  `ID` int(11) NOT NULL,
  `First_Name` varchar(16) NOT NULL,
  `Middle_Name` varchar(16) NOT NULL,
  `Last_Name` varchar(15) NOT NULL,
  `National_ID` int(8) NOT NULL,
  `Licence_Number` varchar(20) NOT NULL,
  `Category` varchar(16) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driver_registration`
--

INSERT INTO `driver_registration` (`ID`, `First_Name`, `Middle_Name`, `Last_Name`, `National_ID`, `Licence_Number`, `Category`, `image`) VALUES
(1, 'Samwel', 'Njoroge', 'Karanja', 38229299, 'DL-1159969', 'CLASS B', 0x494d475f333430343520206d79206a616e65792e6a7067),
(2, 'Raymond', 'Karani', 'Mwangi', 39209279, 'DL-3465718', 'CLASS A3', 0x5f4d475f333331342e4a5047),
(3, 'hjghjhg', 'hjghj', 'hgjg', 0, 'DL-hjhgj', 'CLAShjghjS', ''),
(4, '', '', '', 0, '', '', ''),
(5, '', '', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `local_registration`
--

CREATE TABLE `local_registration` (
  `ID` int(11) NOT NULL,
  `ID_Passport_Number` varchar(16) NOT NULL,
  `First_Name` varchar(16) NOT NULL,
  `Last_Name` varchar(16) NOT NULL,
  `UserName` varchar(60) NOT NULL,
  `Phone_Number` int(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirm` varchar(20) NOT NULL,
  `User_Type` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `local_registration`
--

INSERT INTO `local_registration` (`ID`, `ID_Passport_Number`, `First_Name`, `Last_Name`, `UserName`, `Phone_Number`, `password`, `confirm`, `User_Type`) VALUES
(1, '12345678', 'John', 'Kamau', '', 987654321, '', '', 'Local User'),
(2, '38229299', 'Samwel', 'Karanja', '', 2147483647, 'samwel', 'samwel', 'Admin'),
(3, '', '', '', '', 0, '', '', ''),
(4, '', '', '', '', 0, '', '', ''),
(5, '38229299', 'Samwel', 'Karanja', 'samwelkaranja', 2147483647, 'samwel', 'samwel', 'Admin'),
(6, '', '', '', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `User_Type` varchar(60) NOT NULL,
  `User_Name` varchar(16) NOT NULL,
  `Password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `ID` int(11) NOT NULL,
  `Mode_of_payment` varchar(40) NOT NULL,
  `Phone_Number` int(15) NOT NULL,
  `Amount` int(16) NOT NULL,
  `Card_Number` int(40) NOT NULL,
  `Expiry_date` int(8) NOT NULL,
  `Card_Amount` int(40) NOT NULL,
  `Security_Code` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`ID`, `Mode_of_payment`, `Phone_Number`, `Amount`, `Card_Number`, `Expiry_date`, `Card_Amount`, `Security_Code`) VALUES
(1, 'Master Card & VISA Card', 793878068, 0, 2147483647, 7, 500, 321),
(2, '', 0, 0, 0, 0, 0, 0),
(3, 'Select Here', 0, 0, 0, 0, 0, 0),
(4, '', 0, 0, 0, 0, 0, 0),
(5, 'Select Here', 0, 0, 0, 0, 0, 0),
(6, '', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(11) NOT NULL,
  `User_Type` varchar(50) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone_Number` int(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Confirm_Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `User_Type`, `First_Name`, `Last_Name`, `User_Name`, `Email`, `Phone_Number`, `Password`, `Confirm_Password`) VALUES
(1, 'client', 'James ', 'Mkenya', 'MkenyaJames', 'mkenyajames@gmail.com', 721119005, 'mkenya', 'mkenya');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_cancellation`
--

CREATE TABLE `ticket_cancellation` (
  `ID` int(40) NOT NULL,
  `Ticket_Number` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_cancellation`
--

INSERT INTO `ticket_cancellation` (`ID`, `Ticket_Number`) VALUES
(1, '1234557');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus_location`
--
ALTER TABLE `bus_location`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bus_registration`
--
ALTER TABLE `bus_registration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customerdetails`
--
ALTER TABLE `customerdetails`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `driver_assign`
--
ALTER TABLE `driver_assign`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `driver_registration`
--
ALTER TABLE `driver_registration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `local_registration`
--
ALTER TABLE `local_registration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ticket_cancellation`
--
ALTER TABLE `ticket_cancellation`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus_location`
--
ALTER TABLE `bus_location`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bus_registration`
--
ALTER TABLE `bus_registration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `customerdetails`
--
ALTER TABLE `customerdetails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `driver_assign`
--
ALTER TABLE `driver_assign`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `driver_registration`
--
ALTER TABLE `driver_registration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `local_registration`
--
ALTER TABLE `local_registration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ticket_cancellation`
--
ALTER TABLE `ticket_cancellation`
  MODIFY `ID` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
