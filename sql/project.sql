-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2018 at 02:39 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.0.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `naming`
--

CREATE TABLE `naming` (
  `name_id` int(11) NOT NULL,
  `name` varchar(37) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `naming`
--

INSERT INTO `naming` (`name_id`, `name`) VALUES
(56, '0-cel-0.info'),
(27, '002200.info'),
(64, '020cbd.info'),
(63, '1-800hardwood.info'),
(2, '1-answer.info'),
(52, '10-bulls.info'),
(14, '10000villages.info'),
(59, '10024lovesong.info'),
(78, '100blacksolutions.info'),
(45, '100daybreak.info'),
(80, '1010saturn.info'),
(25, '1017centerst.info'),
(29, '1027hillside.info'),
(71, '102cranberryway.info'),
(84, '102nhowardst.info'),
(96, '1031exchangestrategy.info'),
(75, '1031parkingfund.info'),
(79, '1040taxcenter.info'),
(11, '1041nwinchester3.info'),
(9, '105parkerrd.info'),
(6, '106adlist.info'),
(94, '10kwiththeresa.info'),
(55, '10minutepharmacy.info'),
(10, '10stepstoyes.info'),
(90, '1111hotyoga.info'),
(88, '11128crestmont.info'),
(5, '11205w67th.info'),
(97, '1126bingay.info'),
(49, '11316upton.info'),
(38, '11558meadowrun.info'),
(28, '11ancestors.info'),
(37, '11pennplaza.info'),
(19, '11pm.info'),
(8, '11rodsway.info'),
(42, '1212velmamiles.info'),
(60, '1215regal.info'),
(66, '123-financeonline.info'),
(53, '123299.info'),
(91, '12332northfront.info'),
(70, '1238hermosa.info'),
(31, '123album.info'),
(74, '123glow.info'),
(87, '123onlinebiz.info'),
(21, '123systems.info'),
(4, '12betindia.info'),
(85, '12guagerevolver.info'),
(44, '12noonmusic.info'),
(22, '1340sdowningst.info'),
(3, '13521st.info'),
(17, '13860grandpointblvd.info'),
(20, '13910.info'),
(67, '139glendon.info'),
(47, '13rose.info'),
(16, '140news.info'),
(35, '1427.info'),
(41, '1433williamsunit1205.info'),
(58, '1490amkugr.info'),
(43, '1529ecoursedr.info'),
(69, '15f3c020.info'),
(62, '164metcalfln.info'),
(92, '17178.info'),
(93, '1745broadland.info'),
(89, '17a898dc.info'),
(54, '18-2.info'),
(57, '18002invest.info'),
(26, '1800localdoctor.info'),
(72, '1800nicesmile.info'),
(24, '1824ballybuniondrive.info'),
(77, '18wheels.info'),
(46, '1966fordmustang.info'),
(12, '1970gto.info'),
(99, '19handsdigital.info'),
(68, '1ad1dollar.info'),
(39, '1carhelpsheroes.info'),
(95, '1classoffice.info'),
(32, '1clever.info'),
(98, '1millionvotesfor2014.info'),
(23, '1passionatekiss.info'),
(18, '1readymoneypages.info'),
(51, '1sierra.info'),
(65, '1stepcashing.info'),
(81, '1stopmailshop.info'),
(15, '1stresponselink.info'),
(33, '1stsecurities.info'),
(48, '1to1financial.info'),
(40, '2005taxforms.info'),
(13, '2011rasmussen.info'),
(36, '2012forsythparklane.info'),
(86, '2018-80th.info'),
(50, '2020homevalue.info'),
(34, '2020lifestyles.info'),
(61, '2021birmingham.info'),
(73, '2029goldbuffalo.info'),
(83, '2040digital.info'),
(30, '205nalleydrlakeallatoona.info'),
(76, '2063cortabella.info'),
(1, '20minutesfromhome.info'),
(82, '52885.info'),
(7, '60b18d8bef590d5b5cb29fe44c7836b8.info'),
(102, 'google,org'),
(109, 'google.biz'),
(110, 'google.cc'),
(103, 'google.co'),
(106, 'google.co.in'),
(100, 'google.com'),
(137, 'google.firm.in'),
(105, 'google.in'),
(134, 'google.info'),
(104, 'google.io'),
(114, 'google.li'),
(113, 'google.ly'),
(108, 'google.me'),
(133, 'google.name'),
(101, 'google.net'),
(135, 'google.net.in'),
(132, 'google.org'),
(136, 'google.org.in'),
(112, 'google.tk'),
(111, 'google.tv'),
(107, 'google.us'),
(124, 'purse.biz'),
(126, 'purse.cc'),
(118, 'purse.co'),
(121, 'purse.co.in'),
(115, 'purse.com'),
(120, 'purse.in'),
(125, 'purse.info'),
(119, 'purse.io'),
(131, 'purse.it'),
(130, 'purse.li'),
(129, 'purse.ly'),
(123, 'purse.me'),
(116, 'purse.net'),
(117, 'purse.org'),
(128, 'purse.tk'),
(127, 'purse.tv'),
(122, 'purse.us');

-- --------------------------------------------------------

--
-- Table structure for table `post_job`
--

CREATE TABLE `post_job` (
  `Job_Id` int(11) NOT NULL,
  `Email` varchar(60) CHARACTER SET utf8 NOT NULL,
  `Company_Name` varchar(50) NOT NULL,
  `About_Company` varchar(1000) NOT NULL,
  `Job_Post` varchar(30) NOT NULL,
  `Job_Description` varchar(1000) NOT NULL,
  `No_of_Jobs_Available` int(2) NOT NULL,
  `Who_Can_Apply` varchar(500) NOT NULL,
  `Start_Date` date NOT NULL,
  `Apply_By` date NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Type_of_Job` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_job`
--

INSERT INTO `post_job` (`Job_Id`, `Email`, `Company_Name`, `About_Company`, `Job_Post`, `Job_Description`, `No_of_Jobs_Available`, `Who_Can_Apply`, `Start_Date`, `Apply_By`, `Location`, `Type_of_Job`) VALUES
(1, 'krima.shah@ves.ac.in', 'abc', ' abc ', 'manager', ' abc ', 1, 'abc ', '2018-04-16', '2018-03-06', 'mumbai', 'Work From Home,Full Time Job,Internship,'),
(2, 'krima.shah@gmail.com', 'xyz', ' xyz ', 'GET', ' xyz ', 1, 'xyz ', '2018-04-20', '2018-03-05', 'nasik', 'Work From Home,Full Time Job,'),
(5, 'bhavna.khatwani@ves.ac.in', 'axw', 'axs', '', 'dgsk', 2, 'sgs', '2018-03-30', '2018-03-29', 'mumbai', 'Full Time Job,'),
(6, 'dhiren@gmail.com', 'abcd', ' abcd abcd', '', ' abcd  ', 3, 'abcd ', '2018-04-09', '2018-04-03', 'Nasik', 'Work From Home,'),
(7, 'krima.shah@ves.ac.in', 'krima', 'krima', '', 'krima', 2, 'krima', '2018-04-18', '2018-04-03', 'nasik', 'Work From Home,');

-- --------------------------------------------------------

--
-- Table structure for table `predict`
--

CREATE TABLE `predict` (
  `predict_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `fashion` varchar(3) DEFAULT NULL,
  `sports` float DEFAULT NULL,
  `entartainment` float DEFAULT NULL,
  `health_and_care` float DEFAULT NULL,
  `food` float DEFAULT NULL,
  `education` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `predict`
--

INSERT INTO `predict` (`predict_id`, `name`, `fashion`, `sports`, `entartainment`, `health_and_care`, `food`, `education`) VALUES
(1, 'Bhavna', '4', 1, 5, 3, 1, 0),
(2, 'j', '1.2', 0, 0, 0, 0, 0),
(3, 'k', '1', 0, 0, 0, 0, 0),
(4, 'q', '1', 0, 0, 0, 0, 0),
(5, 'q', '5', 0, 0, 0, 0, 0),
(6, 'a', '', 1, 0, 0, 0, 0),
(7, 'b', '2', 0, 0, 0, 0, 0),
(8, 'c', '', 1, 0, 0, 0, 0),
(9, 'sid', '2', 2, 2, 2, 5, 0),
(10, 'krima', '2', 1, 3, 4, 2, 0),
(11, 'aaaa', '', 0, 0, 0, 0, 0),
(12, 'kkk', '3', 2, 3, 1, 3, 0),
(13, 'aaaaaa', '', 2, 0, 0, 0, 0),
(14, 'bbb', '', 1, 2, 2, 2, 0),
(15, 'ab', '1', 1, 0, 1, 1, 0),
(16, 'as', '', 1, 0, 0, 0, 0),
(17, 'ad', '', 1, 0, 0, 0, 0),
(18, '', '', 0, 0, 0, 0, 0),
(19, 'aas', '', 1, 0, 0, 0, 0),
(20, 'mkdhfi', '', 2, 0, 0, 0, 0),
(21, 'as', '', 1, 0, 0, 0, 0),
(22, 'sfm', '', 3, 0, 0, 0, 0),
(23, 'sojko', '', 1, 0, 0, 0, 0),
(24, 'ch', '', 0, 0, 0, 0, 0),
(25, 'sonia', '', 4, 0, 0, 0, 0),
(26, 'radhika', '2', 2, 3, 5, 0, 0),
(27, 'fdh', '', 1, 0, 0, 0, 0),
(28, 'pooja ', '2', 0, 2, 2, 0, 0),
(29, 'rashmi', '5', 1, 5, 3, 5, 0),
(30, 'rashmi', '5', 1, 5, 3, 5, 0),
(31, 'krima', '', 2, 0, 0, 0, 0),
(32, 'krima', '', 2, 0, 0, 0, 0),
(33, 'df', '', 0, 0, 0, 0, 0),
(34, 'xg', '', 0, 0, 0, 0, 0),
(35, 'shilpa', '', 5, 0, 0, 0, 0),
(36, 'g', '', 0, 0, 0, 0, 0),
(37, 'sonia', '', 1, 0, 0, 0, 0),
(38, 'k', '', 0, 0, 0, 0, 0),
(39, 'jayshree', '1', 4, 5, 1, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user_id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `type` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `username`, `email`, `contact`, `dob`, `type`, `password`) VALUES
(1, 'krima', 'krima.shah@ves.ac.in', '7894561320', '1996-04-23', 'Startup Planner', '$2y$10$yXUHWRM9NyKmO4sqPrPF.udklgCg4IYHBlC9ORPHy/EL1V7vi2aLO'),
(2, 'krima', 'krima.shah@gmail.com', '784596123', '1996-04-23', 'Intern', '$2y$10$Q4XXMUrzzWHgRLB5lYObrerNdcSrZT7HGEFX4gMlJyjQjWbWCq1r2'),
(3, 'bhavna', 'bhavna.khatwani@ves.ac.in', '8975641235', '1997-04-27', 'Intern', '$2y$10$RQ.BhJFrJm9xo4pGXQb8g.uAf63tZJ5QLDmLQ2uQrCBwYtHdlcHm.'),
(4, 'dhiren', 'dhiren@gmail.com', '5678945126', '1999-07-13', 'Startup Planner', '$2y$10$uc./aX5mCtuyT1djcJLvuugT1egFUykoym9mOXbMZQRqioDH5jFzO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `naming`
--
ALTER TABLE `naming`
  ADD PRIMARY KEY (`name_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `post_job`
--
ALTER TABLE `post_job`
  ADD PRIMARY KEY (`Job_Id`),
  ADD UNIQUE KEY `Email` (`Email`,`Job_Post`);

--
-- Indexes for table `predict`
--
ALTER TABLE `predict`
  ADD PRIMARY KEY (`predict_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `naming`
--
ALTER TABLE `naming`
  MODIFY `name_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
--
-- AUTO_INCREMENT for table `post_job`
--
ALTER TABLE `post_job`
  MODIFY `Job_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `predict`
--
ALTER TABLE `predict`
  MODIFY `predict_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `post_job`
--
ALTER TABLE `post_job`
  ADD CONSTRAINT `post_job_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `register` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
