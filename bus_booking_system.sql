-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2023 at 07:22 PM
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
  `bus name` varchar(15) NOT NULL,
  `totalsits` int(6) NOT NULL,
  `booking` varchar(40) NOT NULL,
  `destination` varchar(40) NOT NULL,
  `departure` time NOT NULL,
  `arrival` time NOT NULL,
  `fare` int(6) NOT NULL
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
  `Bus_Ownership` varchar(14) NOT NULL,
  `booking` varchar(40) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `departure` time NOT NULL,
  `arrival` time NOT NULL,
  `fare` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bus_registration`
--

INSERT INTO `bus_registration` (`ID`, `Bus_Name`, `Number_Plate`, `Number_of_sits`, `Bus_Type`, `Log_Book`, `Bus_Condition`, `Bus_Ownership`, `booking`, `destination`, `departure`, `arrival`, `fare`) VALUES
(3, 'IGNITE MAIN', 'KBP268E', 40, 'ISUZU', 'KBTYG76T98J91W', 'NEW', 'COMPANY', 'Embu', 'Kwale', '08:00:00', '10:00:00', 560),
(31, 'MAMBO LEO', 'KCA456A', 51, 'ISUZU', 'FD5G7Y895358B', 'gergre', 'COMPANY', 'Kenya', 'Mbaere', '10:00:00', '11:00:00', 380),
(33, 'MAMBO LEO', 'KCA456A', 91, 'ISUZU', 'FD5G7Y895358B', 'gergre', 'COMPANY', 'Kiritiri', 'Embu', '12:00:00', '13:00:00', 500),
(37, 'EASY COACH', 'KCX257X', 30, 'ISUZU', 'QW1234FG6TC', 'OLD', 'COMPANY', 'Kismayu', 'Kwale', '09:00:00', '12:00:00', 1000),
(45, 'MAMBO LEO', 'KCA456A', 51, 'ISUZU', 'FD5G7Y895358B', 'NEW', 'COMPANY', 'Ukwala', 'Siakago', '12:30:00', '02:30:00', 250);

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
  `gender` varchar(50) NOT NULL,
  `Contact` int(50) NOT NULL,
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

INSERT INTO `customerdetails` (`ID`, `passport`, `First_Name`, `Middle_Name`, `Last_Name`, `gender`, `Contact`, `DOB`, `place`, `FirstName`, `MiddleName`, `LastName`, `relation`, `Emergency`) VALUES
(4, 43435345, 'Samwel', 'Njoroge', 'Karanja', 'Male', 793878068, '2023-06-20', 'EMBU', 'Samwel', 'Njoroge', 'Karanja', 'Sister', 758670508),
(5, 987654321, 'Joyce', 'Mwangi', 'Wamboi', 'Female', 721857092, '1999-06-12', 'Nakuru', 'James ', 'Opicho', 'Kamau', 'Sister', 704480323),
(7, 4454, 'tyhtt', 'ht', 'utytytu', 'Female', 4544455, '2020-06-09', 'ghghghg', 'Samwel', 'Njoroge', 'Karanja', 'Father', 758670508),
(9, 4454, 'tyhtt', 'ht', 'utytytu', 'Female', 4544455, '2020-06-09', 'ghghghg', 'Samwel', 'Njoroge', 'Karanja', 'Father', 758670508),
(11, 43435345, 'Samwel', 'Njoroge', 'Karanja', 'Male', 46354543, '2023-06-08', 'kenya', 'Njoroge', 'Njoroge', 'Karanja', 'Brother', 8900000),
(14, 98765432, 'Mercy', 'Njeri', 'Kamau', 'Female', 2147483647, '2000-01-04', 'MACHAKOS', 'Peter ', 'Kamau', 'Mwangi', 'Father', 2147483647),
(16, 98765432, 'Mercy', 'Njeri', 'Kamau', 'Female', 2147483647, '2000-01-04', 'MACHAKOS', 'Peter ', 'Kamau', 'Mwangi', 'Father', 2147483647),
(18, 41130808, 'Virginia', 'Wamoyo', 'Richu', 'Female', 567890123, '1999-02-02', 'KITALE', 'Jeremiah', 'Mwangi', 'Richu', 'Brother', 4586071),
(20, 41130808, 'Virginia', 'Wamoyo', 'Richu', 'Female', 567890123, '1999-02-02', 'KITALE', 'Jeremiah', 'Mwangi', 'Richu', 'Brother', 4586071),
(35, 1234567890, 'Ignatious', 'Koech', 'Mulumbi', 'Male', 2147483647, '1999-06-12', 'Eldorect', 'Evans', 'Makenna', 'Koech', 'Father', 76543234),
(38, 0, '', '', '', '', 0, '0000-00-00', '', '', '', '', '', 0),
(39, 43435345, 'Samwel', 'Njoroge', 'Karanja', 'Female', 46354543, '2023-06-30', 'EMBU', 'Samwel', 'Njoroge', 'Karanja', 'Sister', 8900000),
(40, 0, '', '', '', '', 0, '0000-00-00', '', '', '', '', '', 0),
(41, 43435345, 'Samwel', 'Njoroge', 'Karanja', 'Female', 46354543, '2023-06-30', 'EMBU', 'Samwel', 'Njoroge', 'Karanja', 'Sister', 8900000),
(42, 0, '', '', '', '', 0, '0000-00-00', '', '', '', '', '', 0),
(43, 987654321, 'Mkurugenzi', 'Allan', 'Mwema', 'Male', 1111111111, '1998-06-12', 'Tanzania', 'Edwin', 'Mbwema', 'Mwema', 'Sister', 2147483647),
(44, 987654321, 'Mkurugenzi', 'Allan', 'Mwema', 'Male', 1111111111, '1998-06-12', 'Tanzania', 'Edwin', 'Mbwema', 'Mwema', 'Sister', 2147483647),
(45, 43435345, 'Qwerty', 'Urembo', 'Akonayo', 'Female', 2147483647, '2023-06-06', 'kenya', 'Samwel', 'Njoroge', 'Karanja', 'Brother', 2147483647),
(46, 98765445, 'Mkenya', 'Mwema', 'Mletp', 'Male', 2147483647, '2000-01-03', 'kenya', 'Wambaje', 'Msemi', 'Tayari', 'Friend', 34567893);

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
  `National_ID` int(18) NOT NULL,
  `Licence_Number` varchar(25) NOT NULL,
  `Category` varchar(16) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driver_registration`
--

INSERT INTO `driver_registration` (`ID`, `First_Name`, `Middle_Name`, `Last_Name`, `National_ID`, `Licence_Number`, `Category`, `image`) VALUES
(1, 'Samwel', 'Njoroge', 'Karanja', 38229299, 'DL-1159969', 'CLASS B', 0x494d475f333430343520206d79206a616e65792e6a7067),
(2, 'Raymond', 'Karani', 'Mwangi', 39209279, 'DL-3465718', 'CLASS A3', 0x5f4d475f333331342e4a5047),
(3, 'hjghjhg', 'hjghj', 'hgjg', 0, 'DL-hjhgj', 'CLAShjghjS', '');

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
(6, '', '', '', '', 0, '', '', ''),
(7, '34565467', 'Jane', 'Ngari', 'janengari', 721857092, 'janengari', 'janengari', 'Local User'),
(8, '', '', '', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `User_Type` varchar(60) NOT NULL,
  `UserName` varchar(16) NOT NULL,
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
(28, 'M - Pesa', 793878068, 560, 0, 0, 0, 0),
(29, 'Master Card & VISA Card', 0, 0, 2147483647, 43434, 3434343, 343),
(30, 'M - Pesa', 793878068, 100, 0, 0, 0, 0);

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
(1, 'client', 'James ', 'Mkenya', 'MkenyaJames', 'mkenyajames@gmail.com', 721119005, 'mkenya', 'mkenya'),
(5, 'client', 'Samwel', 'Karanja', 'samwelnjroge', 'samwelnjoroge757@gmail.com', 2147483647, '123456789', '123456789'),
(6, '', '', '', '', '', 0, '', ''),
(7, 'client', 'Samwel', 'Karanja', 'comein', 'samwelnjoroge757@gmail.com', 2147483647, 'comein', 'comein'),
(8, '', '', '', '', '', 0, '', '');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `customerdetails`
--
ALTER TABLE `customerdetails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ticket_cancellation`
--
ALTER TABLE `ticket_cancellation`
  MODIFY `ID` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
