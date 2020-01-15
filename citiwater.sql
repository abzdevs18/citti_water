-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2020 at 08:39 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citiwater`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_signup`
--

CREATE TABLE `admin_signup` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(250) NOT NULL,
  `admin_email` varchar(250) NOT NULL,
  `admin_password` varchar(250) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_signup`
--

INSERT INTO `admin_signup` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_status`) VALUES
(3, 'james', 'james@gg.com', '$2y$10$r0bTvu7sFOJA7.94mZmyTeu0Q8v8W.MbxAuJGIPnNq2sSg.MFr2Mq', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `o_bottle` varchar(100) NOT NULL,
  `Lng` varchar(100) NOT NULL,
  `Lat` varchar(100) NOT NULL,
  `o_cost` varchar(250) NOT NULL,
  `date_of_order` varchar(100) NOT NULL,
  `time_of_delivery` varchar(100) NOT NULL,
  `seen` tinyint(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `user_id`, `o_bottle`, `Lng`, `Lat`, `o_cost`, `date_of_order`, `time_of_delivery`, `seen`, `status`) VALUES
(9, 14, '4', '123.29908847808838', '9.313112497329712', 'P80', 'Dec. 12, 2019', '05:08PM', 0, 0),
(10, 14, '1', '123.29912066459656', '9.313069581985474', 'P20', 'Dec. 12, 2019', '07:13PM', 0, 0),
(11, 14, '2', '123.29907774925232', '9.313123226165771', 'P40', 'Dec. 12, 2019', '06:44PM', 0, 0),
(12, 15, '2', '123.29912066459656', '9.313069581985474', 'P40', 'Dec. 12, 2019', '08:57AM', 0, 0),
(13, 15, '2', '123.30345806479382', '9.312452924395801', 'P40', 'Dec. 17, 2019', '01:53PM', 0, 0),
(14, 15, '2', '123.29913139343262', '9.313069581985474', 'P40', 'Dec. 20, 2019', '05:52PM', 0, 0),
(15, 15, '2', '123.29913139343262', '9.313069581985474', 'P40', 'Dec. 20, 2019', '05:53PM', 0, 0),
(16, 15, '6', '123.2991292', '9.3130671', 'P120', 'Dec. 21, 2019', '06:25PM', 0, 0),
(17, 15, '4', '123.29908847808838', '9.313133955001831', 'P80', 'Dec. 21, 2019', '03:20PM', 0, 0),
(18, 16, '3', '123.29909384250641', '9.313128590583801', 'P60', 'Dec. 21, 2019', '05:53AM', 0, 0),
(19, 16, '1', '123.29909384250641', '9.313128590583801', 'P20', 'Dec. 21, 2019', '11:20 AM', 0, 0),
(21, 17, '2', '123.2991292', '9.3130671', 'P40', 'Dec. 21, 2019', '06:00PM', 0, 0),
(22, 17, '2', '123.2991292', '9.3130671', 'P40', 'Dec. 21, 2019', '11:20 AM', 0, 0),
(23, 18, '2', '123.2990918', '9.3131308', 'P40', 'Dec. 21, 2019', '01:10AM', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `password`) VALUES
(1, 'johny', 'Clint?', '$2y$10$cYL/0Pgx4bh7xNUcF6EDq.koqyenWYw.lMgjK72TT1MV/8xPWUkLG'),
(2, 'johny', 'Clint?', '$2y$10$N8rqWU4RQ8X.WWeGjze8sOtwoS/zGlxKwcmcDrJmHMF3/BMIh7brK'),
(3, 'johny', 'Clint?', '$2y$10$cOQgFGjso.QshuEPrIncm.g2s86YRgKqDDGXPeHSMCTRUlLpPcyz.'),
(4, '', '', '$2y$10$wJ4v82TmkqyqvDAkPNn7wu94qNXlX00q2XHS/FNaduBwOSVq0WMmO'),
(5, '', '', '$2y$10$xdsH2Np8.rAQ41kH.doGae34hQJCZAieZXjGAL77MxOnQjg7RRxba'),
(6, 'nnn', 'nnn', '$2y$10$DhvAMhyKhFZUmnxoaR2zdehiWDcfYBQOk3kPpjVVu/NxPiCJJ6M2W'),
(7, 'nnn', 'nnn', '$2y$10$RgEVAbvwdiy5Rc/iSwHWXeMHTViBOuP97NjStivX3N5CDzlQa24aC'),
(8, 'nnnnmnmkhvv', 'nnn', '$2y$10$DEHHf2Zpit3.VhIWV8Jrzeiq8EnQ9suXC6iM.nb38Z8Bhu6HxQFK6'),
(9, 'cft', 'cf', '$2y$10$df1oA/27zu9nmiBXos.Az.6/NCjHmjGc1BmcP72PyuZizLSxDvj5W'),
(10, 'cft', 'cf', '$2y$10$AIC3tXq1KxjyYQM0yCrdc.elrLz2j/xyosqFX2baN0X4ox0U8P0Du'),
(11, 'h', 'h', '$2y$10$0RQlDUliKFMJiVuwNuTJfujzwugdBP8qrdc..SVieEiHqD68XlUoK'),
(12, 'h', 'h', '$2y$10$ybYZLGWW4PzsICPvk54c3ujfR7o/ikdhTHnLOL5kVdN2fBZXJID8m'),
(13, 'v', 'f', '$2y$10$ORF1ARK6TVlXmvip1uKMq.dbtBX6WWrVlDbGPXlCoJgIMSXNHXAga'),
(14, 'j', 'h', '$2y$10$YasjA8ARNylQMFz9i4eRu.D1XrIJZXD2hwBx3R.SXwU9TzFAHTwSi'),
(15, 'Hell', 'one', '$2y$10$QnDRovZ/51P6RLZzC1mnFux8NCOGkw/aq0C.kck.ggbdAh/hdOmPW'),
(16, '', '', '$2y$10$.qAnmOe3kio5jW9nmikNt.F69hdvWtY5moxqW8P6q2eGCL65Ten7G'),
(17, 'James', 'James', '$2y$10$EsnDIL.uBCOZ4lPkZBfR.OnydJchgegGPmazJkH145FwzDNemg04e'),
(18, 'james', 'james', '$2y$10$1i2DjWcJYsAXC.Qpjx/mvOJIKgsbl1GOkksMN8NB/oQsdTxzS/Jhe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_signup`
--
ALTER TABLE `admin_signup`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_signup`
--
ALTER TABLE `admin_signup`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
