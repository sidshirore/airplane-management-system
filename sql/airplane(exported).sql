-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 27, 2020 at 08:05 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11
create database airport;
use airport;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airport`
--

-- --------------------------------------------------------

--
-- Table structure for table `AIRLINE`
--

CREATE TABLE `AIRLINE` (
  `AIRLINEID` varchar(3) NOT NULL,
  `AL_NAME` varchar(50) DEFAULT NULL,
  `THREE_DIGIT_CODE` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `AIRLINE`
--

INSERT INTO `AIRLINE` (`AIRLINEID`, `AL_NAME`, `THREE_DIGIT_CODE`) VALUES
('9W', 'Jet Airways', '589'),
('AA', 'American Airlines', '001'),
('AI', 'Air India Limited', '098'),
('BA', 'British Airways', '125'),
('EK', 'Emirates', '176'),
('EY', 'Ethiad Airways', '607'),
('LH', 'Lufthansa', '220'),
('QR', 'Qatar Airways', '157');

-- --------------------------------------------------------

--
-- Table structure for table `AIRPORT`
--

CREATE TABLE `AIRPORT` (
  `AP_NAME` varchar(100) NOT NULL,
  `STATE` varchar(15) DEFAULT NULL,
  `COUNTRY` varchar(30) DEFAULT NULL,
  `CNAME` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `AIRPORT`
--

INSERT INTO `AIRPORT` (`AP_NAME`, `STATE`, `COUNTRY`, `CNAME`) VALUES
('Chandigarh International Airport', 'Chandigarh', 'India', 'Chandigarh'),
('Chhatrapati Shivaji International Airport', 'Maharashtra', 'India', 'Mumbai'),
('Dallas/Fort Worth International Airport', 'Texas', 'United States', 'Fort Worth'),
('Frankfurt Airport', 'Hesse', 'Germany', 'Frankfurt'),
('George Bush Intercontinental Airport', 'Texas', 'United States', 'Houston'),
('Indira GandhiInternational Airport', 'Delhi', 'India', 'Delhi'),
('John F. Kennedy International Airport', 'New York', 'United States', 'New York City'),
('Louisville International Airport', 'Kentucky', 'United States', 'Louisville'),
('San Francisco International Airport', 'California', 'United States', 'San Francisco'),
('Tampa International Airport', 'Florida', 'United States', 'Tampa');

-- --------------------------------------------------------

--
-- Table structure for table `CITY`
--

CREATE TABLE `CITY` (
  `CNAME` varchar(15) NOT NULL,
  `STATE` varchar(15) DEFAULT NULL,
  `COUNTRY` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `CITY`
--

INSERT INTO `CITY` (`CNAME`, `STATE`, `COUNTRY`) VALUES
('Chandigarh', 'Chandigarh', 'India'),
('Delhi', 'Delhi', 'India'),
('Fort Worth', 'Texas', 'United States'),
('Frankfurt', 'Hesse', 'Germany'),
('Houston', 'Texas', 'United States'),
('Louisville', 'Kentucky', 'United States'),
('Mumbai', 'Maharashtra', 'India'),
('New York City', 'New York', 'United States'),
('San Francisco', 'California', 'United States'),
('Tampa', 'Florida', 'United States');

-- --------------------------------------------------------

--
-- Table structure for table `CONTAINS`
--

CREATE TABLE `CONTAINS` (
  `AIRLINEID` varchar(3) NOT NULL,
  `AP_NAME` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `CONTAINS`
--

INSERT INTO `CONTAINS` (`AIRLINEID`, `AP_NAME`) VALUES
('AA', 'George Bush Intercontinental Airport'),
('AA', 'John F. Kennedy International Airport'),
('AA', 'Louisville International Airport'),
('AA', 'San Francisco International Airport'),
('AA', 'Tampa International Airport'),
('AI', 'Chandigarh International Airport'),
('AI', 'Chhatrapati Shivaji International Airport'),
('AI', 'Dallas/Fort Worth International Airport'),
('AI', 'George Bush Intercontinental Airport'),
('AI', 'Indira GandhiInternational Airport'),
('BA', 'Chandigarh International Airport'),
('BA', 'Chhatrapati Shivaji International Airport'),
('BA', 'Frankfurt Airport'),
('BA', 'John F. Kennedy International Airport'),
('BA', 'San Francisco International Airport'),
('LH', 'Chhatrapati Shivaji International Airport'),
('LH', 'Dallas/Fort Worth International Airport'),
('LH', 'Frankfurt Airport'),
('LH', 'John F. Kennedy International Airport'),
('LH', 'San Francisco International Airport'),
('QR', 'Chhatrapati Shivaji International Airport'),
('QR', 'Dallas/Fort Worth International Airport'),
('QR', 'John F. Kennedy International Airport'),
('QR', 'Louisville International Airport'),
('QR', 'Tampa International Airport');

-- --------------------------------------------------------

--
-- Table structure for table `EMPLOYEE1`
--

CREATE TABLE `EMPLOYEE1` (
  `SSN` int(11) NOT NULL,
  `FNAME` varchar(20) DEFAULT NULL,
  `M` varchar(1) DEFAULT NULL,
  `LNAME` varchar(20) DEFAULT NULL,
  `ADDRESS` varchar(100) DEFAULT NULL,
  `PHONE` bigint(20) DEFAULT NULL,
  `AGE` int(11) DEFAULT NULL,
  `SEX` varchar(1) DEFAULT NULL,
  `JOBTYPE` varchar(30) DEFAULT NULL,
  `ASTYPE` varchar(30) DEFAULT NULL,
  `ETYPE` varchar(30) DEFAULT NULL,
  `SHIFT` varchar(20) DEFAULT NULL,
  `POSITION` varchar(30) DEFAULT NULL,
  `AP_NAME` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `EMPLOYEE1`
--

INSERT INTO `EMPLOYEE1` (`SSN`, `FNAME`, `M`, `LNAME`, `ADDRESS`, `PHONE`, `AGE`, `SEX`, `JOBTYPE`, `ASTYPE`, `ETYPE`, `SHIFT`, `POSITION`, `AP_NAME`) VALUES
(65826792, 'Nitin', 'V', 'Pitre', 'K5/6', 9767480909, 47, 'M', 'TRAFFIC MONITOR', '', '', 'Night', 'Manager', 'George Bush Intercontinental Airport'),
(125478909, 'PRATIK', 'T', 'GOMES', '334 VITRUVIAN PARK, ALBANY, NY', 4444678903, 56, 'M', 'TRAFFIC MONITOR', '', 'DAY', '', '', 'John F. Kennedy International Airport'),
(324567897, 'ADIT', 'P', 'DESAI', '987 SOMNATH, CHANDIGARH, INDIA', 2244658909, 36, 'M', 'TRAFFIC MONITOR', '', 'DAY', '', '', 'Chandigarh International Airport'),
(333445555, 'JOHNY', 'N', 'PAUL', '638 Voss, Houston, TX', 9834561995, 40, 'M', 'ADMINISTRATIVE SUPPORT', 'SECRETARY', '', '', '', 'Louisville International Airport'),
(453453453, 'RAJ', 'B', 'SHARMA', '345 FLOYDS, MUMBAI,INDIA', 4326789031, 35, 'M', 'AIRPORT AUTHORITY', '', '', '', 'MANAGER', 'Chhatrapati Shivaji International Airport'),
(987654321, 'SHERLOCK', 'A', 'HOLMES', '123 TOP HILL, SAN Francisco,CA', 8089654321, 47, 'M', 'TRAFFIC MONITOR', '', '', 'DAY', '', 'San Francisco International Airport'),
(987987987, 'NIKITA', 'C', 'PAUL', '110 SYNERGY PARK, DALLAS,TX', 5678904325, 33, 'F', 'ENGINEER', '', 'AIRPORT CIVIL ENGINEER', '', '', 'Dallas/Fort Worth International Airport'),
(999887777, 'JAMES', 'P', 'BOND', '3321 Castle, Spring, TX', 9834666995, 50, 'M', 'ENGINEER', '', 'RADIO ENGINEER', '', '', 'Louisville International Airport');

-- --------------------------------------------------------

--
-- Table structure for table `EMPLOYEE2`
--

CREATE TABLE `EMPLOYEE2` (
  `JOBTYPE` varchar(30) NOT NULL,
  `SALARY` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `EMPLOYEE2`
--

INSERT INTO `EMPLOYEE2` (`JOBTYPE`, `SALARY`) VALUES
('ADMINISTRATIVE SUPPORT', 50000),
('AIRPORT AUTHORITY', 90000),
('ENGINEER', 6),
('TRAFFIC MONITOR', 80000);

-- --------------------------------------------------------

--
-- Table structure for table `FLIGHT`
--

CREATE TABLE `FLIGHT` (
  `FLIGHT_CODE` varchar(10) NOT NULL,
  `SOURCE` varchar(3) DEFAULT NULL,
  `DESTINATION` varchar(3) DEFAULT NULL,
  `ARRIVAL` varchar(10) DEFAULT NULL,
  `DEPARTURE` varchar(10) DEFAULT NULL,
  `STATUS` varchar(10) DEFAULT NULL,
  `DURATION` varchar(30) DEFAULT NULL,
  `FLIGHTTYPE` varchar(10) DEFAULT NULL,
  `LAYOVER_TIME` varchar(30) DEFAULT NULL,
  `NO_OF_STOPS` int(11) DEFAULT NULL,
  `AIRLINEID` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `FLIGHT`
--

INSERT INTO `FLIGHT` (`FLIGHT_CODE`, `SOURCE`, `DESTINATION`, `ARRIVAL`, `DEPARTURE`, `STATUS`, `DURATION`, `FLIGHTTYPE`, `LAYOVER_TIME`, `NO_OF_STOPS`, `AIRLINEID`) VALUES
('AH789', 'BOM', 'IXC', '23:00', '20:00', 'On-Time', '3hrs', 'Non-stop', '0', 0, 'AA'),
('AS787', 'IAH', 'IXC', '8:00', '6:00', 'On-Time', '2hrs', 'Non-stop', '0', 0, 'BA'),
('GH666', 'IAH', 'FRA', '8:00', '5:00', 'On-Time', '3hrs', 'Non-stop', '0', 0, 'LH'),
('JH888', 'JFK', 'SFO', '8:00', '7:00', 'On-Time', '1hr', 'Non-stop', '0', 0, 'AI'),
('PI000', 'JFK', 'IXC', '00:00', '7:00', 'On-Time', '7hrs', 'Non-stop', '0', 0, '9W'),
('PO899', 'BOM', 'SFO', '7:00', '1:00', 'On-Time', '13hrs', 'Non-stop', '0', 0, 'EY'),
('QW767', 'JFK', 'FRA', '9:00', '6:00', 'On-Time', '3hrs', 'Non-stop', '0', 0, '9W'),
('UJ675', 'BOM', 'FRA', '9:00', '3:00', 'On-Time', '6hrs', 'Non-stop', '0', 0, 'AA'),
('WE897', 'IAH', 'SFO', '3:00', '1:00', 'On-Time', '2hrs', 'Non-stop', '0', 0, '9W');

-- --------------------------------------------------------

--
-- Table structure for table `LOGIN`
--

CREATE TABLE `LOGIN` (
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `LOGIN`
--

INSERT INTO `LOGIN` (`USERNAME`, `PASSWORD`) VALUES
('priya123', 'password'),
('sid', 'p@ssword');

-- --------------------------------------------------------

--
-- Table structure for table `PASSENGER1`
--

CREATE TABLE `PASSENGER1` (
  `PID` int(11) NOT NULL,
  `PASSPORTNO` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `PASSENGER1`
--

INSERT INTO `PASSENGER1` (`PID`, `PASSPORTNO`) VALUES
(1, 'A1234568'),
(2, 'B9876541'),
(3, 'C2345698'),
(4, 'D1002004'),
(5, 'X9324666'),
(6, 'B8765430'),
(7, 'J9801235'),
(8, 'A1122334'),
(9, 'Q1243567'),
(10, 'S1243269'),
(11, 'E3277889'),
(12, 'K3212322'),
(13, 'P3452390'),
(14, 'W7543336'),
(15, 'R8990566');

-- --------------------------------------------------------

--
-- Table structure for table `PASSENGER2`
--

CREATE TABLE `PASSENGER2` (
  `PASSPORTNO` varchar(10) NOT NULL,
  `FNAME` varchar(20) DEFAULT NULL,
  `M` varchar(1) DEFAULT NULL,
  `LNAME` varchar(20) DEFAULT NULL,
  `ADDRESS` varchar(100) DEFAULT NULL,
  `PHONE` bigint(20) DEFAULT NULL,
  `AGE` int(11) DEFAULT NULL,
  `SEX` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `PASSENGER2`
--

INSERT INTO `PASSENGER2` (`PASSPORTNO`, `FNAME`, `M`, `LNAME`, `ADDRESS`, `PHONE`, `AGE`, `SEX`) VALUES
('A1122334', 'MANAN', 'S', 'LAKHANI', '5589 CHTHAM REFLECTIONS, APT 349 HOUSTON, TX', 9004335126, 25, 'F'),
('A1234568', 'ALEN', 'M', 'SMITH', '2230 NORTHSIDE, APT 11, ALBANY, NY', 8080367290, 30, 'M'),
('B8765430', 'LAKSHMI', 'P', 'SHARMA', '1110 FIR HILLS, APT 903, AKRON, OH', 7666190505, 30, 'F'),
('B9876541', 'ANKITA', 'V', 'AHIR', '3456 VIKAS APTS, APT 102,DOMBIVLI, INDIA', 8080367280, 26, 'F'),
('C2345698', 'KHYATI', 'A', 'MISHRA', '7820 MCCALLUM COURTS, APT 234, AKRON, OH', 8082267280, 30, 'F'),
('D1002004', 'ANKITA', 'S', 'PATIL', '7720 MCCALLUM BLVD, APT 1082, DALLAS, TX', 9080367266, 23, 'F'),
('E3277889', 'John', 'A', 'GATES', '1234 BAKER APTS, APT 59, HESSE, GERMANY', 9724569986, 10, 'M'),
('J9801235', 'AKHILESH', 'D', 'JOSHI', '345 CHATHAM COURTS, APT 678, MUMBAI, INDIA', 9080369290, 29, 'M'),
('K3212322', 'SARA', 'B', 'GOMES', '6785 SPLITSVILLA, APT 34, MIAMI, FL', 9024569226, 15, 'F'),
('P3452390', 'ALIA', 'V', 'BHAT', '548 MARKET PLACE, SAN Francisco, CA', 9734567800, 10, 'F'),
('Q1243567', 'KARAN', 'M', 'MOTANI', '4444 FRANKFORD VILLA, APT 77, GUILDERLAND, NY', 9727626643, 22, 'M'),
('R8990566', 'RIA', 'T', 'GUPTA', '3355 PALENCIA, APT 2065, MUMBAI, INDIA', 4724512343, 10, 'M'),
('S1243269', 'ROM', 'A', 'SOLANKI', '7720 MCCALLUM BLVD, APT 2087, DALLAS, TX', 9004568903, 60, 'M'),
('W7543336', 'JOHN', 'P', 'SMITH', '6666 ROCK HILL, APT 2902, TAMPA, FL', 4624569986, 55, 'M'),
('X9324666', 'TEJASHREE', 'B', 'PANDIT', '9082 ESTAES OF RICHARDSON, RICHARDSON, TX', 9004360125, 28, 'F');

-- --------------------------------------------------------

--
-- Table structure for table `PASSENGER3`
--

CREATE TABLE `PASSENGER3` (
  `PID` int(11) NOT NULL,
  `FLIGHT_CODE` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `PASSENGER3`
--

INSERT INTO `PASSENGER3` (`PID`, `FLIGHT_CODE`) VALUES
(41, 'AH789');

-- --------------------------------------------------------

--
-- Table structure for table `SERVES`
--

CREATE TABLE `SERVES` (
  `SSN` int(11) NOT NULL,
  `PID` int(11) NOT NULL,
  `PASSPORTNO` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `SERVES`
--

INSERT INTO `SERVES` (`SSN`, `PID`, `PASSPORTNO`) VALUES
(333445555, 12, 'K3212322');

-- --------------------------------------------------------

--
-- Table structure for table `TICKET1`
--

CREATE TABLE `TICKET1` (
  `TICKET_NUMBER` bigint(20) NOT NULL,
  `SOURCE` varchar(3) DEFAULT NULL,
  `DESTINATION` varchar(3) DEFAULT NULL,
  `DATE_OF_BOOKING` date DEFAULT NULL,
  `DATE_OF_TRAVEL` date DEFAULT NULL,
  `CLASS` varchar(15) DEFAULT NULL,
  `DATE_OF_CANCELLATION` date DEFAULT NULL,
  `PID` int(11) DEFAULT NULL,
  `PASSPORTNO` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `TICKET1`
--

INSERT INTO `TICKET1` (`TICKET_NUMBER`, `SOURCE`, `DESTINATION`, `DATE_OF_BOOKING`, `DATE_OF_TRAVEL`, `CLASS`, `DATE_OF_CANCELLATION`, `PID`, `PASSPORTNO`) VALUES
(11234111122, 'BOM', 'DFW', '2016-05-11', '2016-12-15', 'ECONOMY', NULL, 1, 'A1234568'),
(984567222299, 'JFK', 'BOM', '2016-06-11', '2016-12-20', 'ECONOMY', '2016-12-10', 2, 'B9876541'),
(1768901333273, 'IAH', 'DEL', '2016-08-21', '2016-12-25', 'BUSINESS', NULL, 3, 'C2345698'),
(5890987441464, 'IXC', 'IAH', '2016-08-10', '2017-01-12', 'FIRST-CLASS', NULL, 4, 'D1002004'),
(1577654664266, 'JFK', 'TPA', '2016-06-13', '2016-12-10', 'ECONOMY', NULL, 5, 'X9324666'),
(2206543545545, 'BOM', 'DFW', '2016-11-11', '2016-02-12', 'ECONOMY', NULL, 6, 'B8765430'),
(7064321779737, 'IAH', 'DEL', '2016-11-15', '2016-12-25', 'FIRST-CLASS', NULL, 7, 'J9801235'),
(1571357215116, 'SFO', 'FRA', '2016-10-15', '2016-12-18', 'ECONOMY', NULL, 8, 'A1122334'),
(1570864987655, 'IXC', 'IAH', '2016-11-12', '2016-12-30', 'ECONOMY', NULL, 9, 'Q1243567'),
(1579283997799, 'BOM', 'SFO', '2016-01-22', '2016-12-15', 'ECONOMY', NULL, 10, 'S1243269'),
(1255701876107, 'FRA', 'DEL', '2016-10-19', '2016-12-31', 'ECONOMY', NULL, 11, 'E3277889'),
(1251334499699, 'IXC', 'IAH', '2016-11-20', '2017-01-12', 'ECONOMY', NULL, 12, 'K3212322'),
(1258776199490, 'BOM', 'DFW', '2016-05-13', '2016-12-15', 'ECONOMY', '2016-05-25', 13, 'P3452390'),
(5891155114477, 'FRA', 'DEL', '2016-06-26', '2016-12-23', 'ECONOMY', NULL, 14, 'W7543336'),
(5893069766787, 'BOM', 'DFW', '2016-08-11', '2016-12-22', 'ECONOMY', NULL, 15, 'R8990566'),
(1330130482, 'BOM', 'SFO', '2020-10-12', '2020-10-14', 'ECONOMY', NULL, 1, 'A1234568');

-- --------------------------------------------------------

--
-- Table structure for table `TICKET2`
--

CREATE TABLE `TICKET2` (
  `DATE_OF_BOOKING` date NOT NULL,
  `SOURCE` varchar(3) NOT NULL,
  `DESTINATION` varchar(3) NOT NULL,
  `CLASS` varchar(15) NOT NULL,
  `PRICE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `TICKET2`
--

INSERT INTO `TICKET2` (`DATE_OF_BOOKING`, `SOURCE`, `DESTINATION`, `CLASS`, `PRICE`) VALUES
('2016-01-22', 'BOM', 'SFO', 'ECONOMY', 45000),
('2016-05-11', 'BOM', 'DFW', 'ECONOMY', 95000),
('2016-05-13', 'BOM', 'DFW', 'ECONOMY', 65000),
('2016-06-11', 'JFK', 'BOM', 'ECONOMY', 100000),
('2016-06-26', 'FRA', 'DEL', 'ECONOMY', 80000),
('2016-08-10', 'IXC', 'IAH', 'FIRST-CLASS', 150000),
('2016-08-11', 'BOM', 'DFW', 'ECONOMY', 98000),
('2016-08-13', 'JFK', 'TPA', 'ECONOMY', 98000),
('2016-08-15', 'SFO', 'FRA', 'ECONOMY', 170000),
('2016-08-19', 'FRA', 'DEL', 'ECONOMY', 100000),
('2016-08-21', 'IAH', 'DEL', 'BUSINESS', 200000),
('2016-11-11', 'BOM', 'DFW', 'ECONOMY', 125000),
('2016-11-12', 'IXC', 'IAH', 'ECONOMY', 140000),
('2016-11-15', 'IAH', 'DEL', 'FIRST-CLASS', 195000),
('2016-11-20', 'IXC', 'IAH', 'ECONOMY', 120000),
('2020-10-06', 'bom', 'ixc', 'business', 75000),
('2020-10-12', 'BOM', 'SFO', 'ECONOMY', 25000),
('2020-10-27', 'BOM', 'SFO', 'BUSINESS', 75000),
('2020-10-27', 'BOM', 'SFO', 'ECONOMY', 25000),
('2020-10-27', 'BOM', 'SFO', 'FIRSTCLASS', 50000),
('2020-10-27', 'BOM', 'SFO', 'BUSINESS', 75000),
('2020-10-06', 'BOM', 'IXC', 'BUSINESS', 75000),
('2020-10-05', 'BOM', 'IXC', 'FIRSTCLASS', 50000),
('2020-10-14', 'BOM', 'SFO', 'ECONOMY', 25000),
('2020-10-21', 'BOM', 'SFO', 'BUSINESS', 75000),
('2020-10-05', 'BOM', 'IXC', 'BUSINESS', 75000),
('2020-10-06', 'BOM', 'SFO', 'ECONOMY', 25000),
('2020-10-27', 'BOM', 'SFO', 'FIRSTCLASS', 50000),
('2020-10-05', 'BOM', 'IXC', 'ECONOMY', 25000),
('2020-10-05', 'BOM', 'IXC', 'ECONOMY', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `TICKET3`
--

CREATE TABLE `TICKET3` (
  `DATE_OF_CANCELLATION` date NOT NULL,
  `SURCHARGE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `TICKET3`
--

INSERT INTO `TICKET3` (`DATE_OF_CANCELLATION`, `SURCHARGE`) VALUES
('2016-05-25', 25000),
('2016-12-10', 75000),
('2020-10-27', 15000),
('2020-10-27', 15000),
('2020-10-27', 15000),
('2020-10-27', 15000),
('2020-10-27', 15000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AIRLINE`
--
ALTER TABLE `AIRLINE`
  ADD PRIMARY KEY (`AIRLINEID`);

--
-- Indexes for table `AIRPORT`
--
ALTER TABLE `AIRPORT`
  ADD PRIMARY KEY (`AP_NAME`),
  ADD KEY `CNAME` (`CNAME`);

--
-- Indexes for table `CITY`
--
ALTER TABLE `CITY`
  ADD PRIMARY KEY (`CNAME`);

--
-- Indexes for table `CONTAINS`
--
ALTER TABLE `CONTAINS`
  ADD PRIMARY KEY (`AIRLINEID`,`AP_NAME`),
  ADD KEY `AP_NAME` (`AP_NAME`);

--
-- Indexes for table `EMPLOYEE1`
--
ALTER TABLE `EMPLOYEE1`
  ADD PRIMARY KEY (`SSN`),
  ADD KEY `AP_NAME` (`AP_NAME`);

--
-- Indexes for table `EMPLOYEE2`
--
ALTER TABLE `EMPLOYEE2`
  ADD PRIMARY KEY (`JOBTYPE`);

--
-- Indexes for table `FLIGHT`
--
ALTER TABLE `FLIGHT`
  ADD PRIMARY KEY (`FLIGHT_CODE`),
  ADD KEY `AIRLINEID` (`AIRLINEID`);

--
-- Indexes for table `LOGIN`
--
ALTER TABLE `LOGIN`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Indexes for table `PASSENGER1`
--
ALTER TABLE `PASSENGER1`
  ADD PRIMARY KEY (`PID`,`PASSPORTNO`);

--
-- Indexes for table `PASSENGER2`
--
ALTER TABLE `PASSENGER2`
  ADD PRIMARY KEY (`PASSPORTNO`);

--
-- Indexes for table `PASSENGER3`
--
ALTER TABLE `PASSENGER3`
  ADD PRIMARY KEY (`PID`),
  ADD KEY `FLIGHT_CODE` (`FLIGHT_CODE`);

--
-- Indexes for table `SERVES`
--
ALTER TABLE `SERVES`
  ADD PRIMARY KEY (`SSN`,`PID`,`PASSPORTNO`),
  ADD KEY `PID` (`PID`,`PASSPORTNO`);

--
-- Indexes for table `TICKET1`
--
ALTER TABLE `TICKET1`
  ADD KEY `PID` (`PID`,`PASSPORTNO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `PASSENGER1`
--
ALTER TABLE `PASSENGER1`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `AIRPORT`
--
ALTER TABLE `AIRPORT`
  ADD CONSTRAINT `AIRPORT_ibfk_1` FOREIGN KEY (`CNAME`) REFERENCES `CITY` (`CNAME`) ON DELETE CASCADE;

--
-- Constraints for table `CONTAINS`
--
ALTER TABLE `CONTAINS`
  ADD CONSTRAINT `CONTAINS_ibfk_1` FOREIGN KEY (`AIRLINEID`) REFERENCES `AIRLINE` (`AIRLINEID`) ON DELETE CASCADE,
  ADD CONSTRAINT `CONTAINS_ibfk_2` FOREIGN KEY (`AP_NAME`) REFERENCES `AIRPORT` (`AP_NAME`) ON DELETE CASCADE;

--
-- Constraints for table `EMPLOYEE1`
--
ALTER TABLE `EMPLOYEE1`
  ADD CONSTRAINT `EMPLOYEE1_ibfk_1` FOREIGN KEY (`AP_NAME`) REFERENCES `AIRPORT` (`AP_NAME`) ON DELETE CASCADE;

--
-- Constraints for table `FLIGHT`
--
ALTER TABLE `FLIGHT`
  ADD CONSTRAINT `FLIGHT_ibfk_1` FOREIGN KEY (`AIRLINEID`) REFERENCES `AIRLINE` (`AIRLINEID`) ON DELETE CASCADE;

--
-- Constraints for table `PASSENGER3`
--
ALTER TABLE `PASSENGER3`
  ADD CONSTRAINT `PASSENGER3_ibfk_1` FOREIGN KEY (`FLIGHT_CODE`) REFERENCES `FLIGHT` (`FLIGHT_CODE`) ON DELETE CASCADE;

--
-- Constraints for table `SERVES`
--
ALTER TABLE `SERVES`
  ADD CONSTRAINT `SERVES_ibfk_1` FOREIGN KEY (`SSN`) REFERENCES `EMPLOYEE1` (`SSN`) ON DELETE CASCADE,
  ADD CONSTRAINT `SERVES_ibfk_2` FOREIGN KEY (`PID`,`PASSPORTNO`) REFERENCES `PASSENGER1` (`PID`, `PASSPORTNO`) ON DELETE CASCADE;

--
-- Constraints for table `TICKET1`
--
ALTER TABLE `TICKET1`
  ADD CONSTRAINT `TICKET1_ibfk_1` FOREIGN KEY (`PID`,`PASSPORTNO`) REFERENCES `PASSENGER1` (`PID`, `PASSPORTNO`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
