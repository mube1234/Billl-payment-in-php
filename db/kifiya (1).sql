-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2021 at 09:39 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kifiya`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `accountno` int(11) NOT NULL,
  `amount` double NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`accountno`, `amount`, `date`) VALUES
(1, 336, '2020-08-27 09:41:24'),
(33, 4356, '2019-07-29 15:09:21'),
(101, 500, '2019-04-03 06:06:45'),
(102, 80, '2019-04-03 07:04:51'),
(103, 200, '2019-04-03 08:38:47'),
(123, 712, '2019-04-01 23:20:48'),
(125, 6354, '2020-08-27 09:41:24'),
(1010, 1000, '2019-07-30 07:08:42'),
(1234, 480, '2019-07-29 08:42:36'),
(10001, 10, '2019-04-02 22:15:22');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `prev` double NOT NULL,
  `pres` double NOT NULL,
  `consumption` double NOT NULL,
  `price` double NOT NULL,
  `Amount` double NOT NULL,
  `month` varchar(255) NOT NULL,
  `duedate` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `prev`, `pres`, `consumption`, `price`, `Amount`, `month`, `duedate`, `status`) VALUES
(7, 66, 123, 57, 2, 114, 'March', '2020-07-17', 'paid'),
(8, 53, 250, 197, 2, 394, 'January', '0000-00-00', 'unpaid'),
(15, 9, 89, 80, 2, 160, 'January', '0000-00-00', 'unpaid'),
(18, 66, 99, 33, 2, 66, 'June', '2019-06-25', 'unpaid'),
(24, 89, 98, 9, 2, 18, 'January', '2019-04-01', 'paid'),
(26, 0, 10, 10, 2, 20, 'April', '2019-04-05', 'paid'),
(30, 66, 770, 704, 2, 1408, 'January', '0000-00-00', 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `comp_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `complain` varchar(2555) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`comp_id`, `photo`, `complain`, `date`) VALUES
(7, '', 'mun', '2020-09-08 15:05:08'),
(18, '', 'rygyguehfyrv\r\nvbhvdgfusicuydgv\r\nvjfhvudfhuigubjvb\r\njgyfgvufyv', '2019-03-28 23:21:13'),
(24, '', 'uytgfd', '2020-07-16 16:29:14');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `prev` double NOT NULL,
  `pres` double NOT NULL,
  `consumption` double NOT NULL,
  `price` double NOT NULL,
  `Amount` double NOT NULL,
  `month` double NOT NULL,
  `duedate` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `billno` int(255) NOT NULL,
  `houseno` int(255) NOT NULL,
  `bankacc` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `fname`, `lname`, `password`, `email`, `phone`, `billno`, `houseno`, `bankacc`, `address`, `role`) VALUES
(7, 'customer', 'Abdiii', 'Dastaa', 'e10adc3949ba59abbe56e057f20f883e', 'abdi@gmail.com', '098766544', 67, 76, 1, '67', 'customer'),
(8, 'admin1', 'Mubarik', 'Tamiru', 'e10adc3949ba59abbe56e057f20f883e', 'mubariktamiru435@gmail.com', '0941208840', 123, 435, 4, 'Adama', 'admin'),
(15, 'admin', 'Tolaa', 'Caalaa', '827ccb0eea8a706c4c34a16891f84e7b', 'tola@gmail.com', '096735443', 23, 0, 2, '23', 'customer'),
(18, 'muba', 'mubi', 'man', 'e10adc3949ba59abbe56e057f20f883e', 'kebede@gmail.com', '096546374647', 65, 87, 5, 'finfine', 'manager'),
(24, 'muda', 'Mudin', 'Misbah', 'e10adc3949ba59abbe56e057f20f883e', 'muda@gmail.com', '0987654321', 123, 87, 125, 'kebele 04', 'customer'),
(26, 'roba', 'Robera', 'Daniel', 'fcea920f7412b5da7be0cf42b8c93759', 'roba@gmail.com', '09876543876', 222, 456, 102, 'kebele 05', 'customer'),
(27, 'Naola', 'Naol ', 'Worku', 'e10adc3949ba59abbe56e057f20f883e', '', '', 898, 0, 0, 'adama', 'admin'),
(28, 'Naola', 'Naol ', 'Worku', 'e10adc3949ba59abbe56e057f20f883e', '', '', 898, 0, 0, 'adama', 'admin'),
(30, 'zz', 'tsion', 'belachew', '61dbc8b2ad463a8a6ffe78c4c71146de', 'zionbelzhhgg@gmail.com', '9988769', 33, 140, 33, 'kebele 08', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `user_bill`
--

CREATE TABLE `user_bill` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `billno` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`fname`, `lname`, `billno`) VALUES
('', '', 0),
('hu', 'tu', 20),
('tsion', 'belachew', 33),
('Mubarik', 'Tamiru', 78),
('k', 'j', 98),
('caalaa', 'baraka', 111),
('Mudin ', 'Misbah', 123),
('Robera', 'Daniel', 222),
('hatahu ', 'desisa', 238),
('j', 'l', 349);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`accountno`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user_bill`
--
ALTER TABLE `user_bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `frist` (`bill_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`billno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_bill`
--
ALTER TABLE `user_bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `complain`
--
ALTER TABLE `complain`
  ADD CONSTRAINT `complain_ibfk_1` FOREIGN KEY (`comp_id`) REFERENCES `users` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_bill`
--
ALTER TABLE `user_bill`
  ADD CONSTRAINT `frist` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_bill_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
