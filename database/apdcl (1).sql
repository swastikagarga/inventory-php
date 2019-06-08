-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2019 at 09:50 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apdcl`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `status` varchar(40) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `userid`, `description`, `status`, `time`) VALUES
(1, 5, 'A new record inserted in Material table', 'INSERT', '2019-05-22 09:43:45'),
(2, 5, 'A new record inserted into subdivision table', 'INSERT', '2019-05-23 05:08:12'),
(3, 5, 'A new record inserted into damage table and quanti', 'INSERT', '2019-05-23 07:31:56'),
(4, 5, 'A new record inserted into damage table and quanti', 'INSERT', '2019-05-23 07:32:58'),
(5, 5, 'A new record inserted into damage table and quanti', 'INSERT', '2019-05-23 07:33:48'),
(6, 5, 'A new record inserted in Material table', 'INSERT', '2019-05-23 10:50:14'),
(7, 0, 'A new record is updated in materials table', 'INSERT', '2019-05-23 17:15:48'),
(8, 0, 'A new record is updated in materials table', 'INSERT', '2019-05-23 17:18:54'),
(9, 5, 'A new record inserted into category table ', 'INSERT', '2019-05-23 17:22:09'),
(10, 5, 'A new record inserted in Material table', 'INSERT', '2019-05-23 19:05:57'),
(11, 5, 'A new record is updated in materials table', 'INSERT', '2019-05-24 06:59:23'),
(12, 5, 'A new record is updated in materials table', 'INSERT', '2019-05-24 06:59:52'),
(13, 5, 'A new record is updated in materials table', 'INSERT', '2019-05-24 07:01:18'),
(14, 5, 'password has been changed', 'INSERT', '2019-05-24 07:06:53'),
(15, 5, 'password has been changed', 'INSERT', '2019-05-24 07:13:30'),
(16, 5, 'A user has updated his pic', 'UPDATE', '2019-05-24 07:47:05'),
(17, 5, 'A user has updated his pic', 'UPDATE', '2019-05-24 07:47:18'),
(18, 5, 'A user has updated his pic', 'UPDATE', '2019-05-24 07:47:33'),
(19, 8, 'A user has updated his pic', 'UPDATE', '2019-05-24 08:40:28'),
(20, 0, 'A new record is updated in materials table', 'INSERT', '2019-05-24 08:44:57'),
(21, 5, 'A user has updated his pic', 'UPDATE', '2019-05-24 09:50:10'),
(22, 5, 'A new record inserted in Material table', 'INSERT', '2019-05-24 09:54:16'),
(23, 5, 'A new record inserted into damage table and quanti', 'INSERT', '2019-05-25 06:16:26'),
(24, 5, 'A new record inserted into damage table and quanti', 'INSERT', '2019-05-25 06:19:40'),
(25, 5, 'A new record inserted into damage table and quanti', 'INSERT', '2019-05-25 06:23:20'),
(26, 5, 'A new record inserted into damage table and quanti', 'INSERT', '2019-05-25 06:24:36'),
(27, 5, 'A new record inserted into damage table and quanti', 'INSERT', '2019-05-25 06:25:11'),
(28, 5, 'A new record inserted into damage table and quanti', 'INSERT', '2019-05-25 06:37:23'),
(29, 5, 'A new record inserted into damage table and quanti', 'INSERT', '2019-05-25 06:38:59'),
(30, 5, 'A new record inserted into damage table and quanti', 'UPDATE', '2019-05-25 07:25:01'),
(31, 5, 'A new record inserted into damage table and quanti', 'INSERT', '2019-06-06 09:01:32'),
(32, 5, 'A new record inserted into damage table and quanti', 'UPDATE', '2019-06-06 10:35:43'),
(33, 5, 'A new record inserted into damage table and quanti', 'UPDATE', '2019-06-06 10:40:25'),
(34, 5, 'A new record inserted into damage table and quanti', 'UPDATE', '2019-06-06 10:41:33'),
(35, 5, 'A new record inserted into damage table and quanti', 'UPDATE', '2019-06-06 10:43:43'),
(36, 5, 'A new record inserted into damage table and quanti', 'UPDATE', '2019-06-06 10:45:18'),
(37, 5, 'A new record inserted into damage table and quanti', 'UPDATE', '2019-06-06 10:47:28'),
(38, 5, 'A new record inserted into damage table and quanti', 'UPDATE', '2019-06-06 10:49:03'),
(39, 5, 'A new record inserted into damage table and quanti', 'UPDATE', '2019-06-06 10:51:38'),
(40, 5, 'A new record inserted into damage table and quanti', 'UPDATE', '2019-06-06 10:52:02'),
(41, 5, 'A new record inserted into damage table and quanti', 'UPDATE', '2019-06-06 10:54:36'),
(42, 5, 'A new record inserted into damage table and quanti', 'UPDATE', '2019-06-06 18:20:51'),
(43, 5, 'A new record inserted into damage table and quanti', 'INSERT', '2019-06-06 19:54:39'),
(44, 5, 'A new record inserted into damage table and quanti', 'INSERT', '2019-06-07 05:28:15'),
(45, 5, 'A new record is updated in materials table', 'INSERT', '2019-06-07 05:55:23'),
(46, 5, 'A new record inserted into damage table and quanti', 'INSERT', '2019-06-07 05:56:06'),
(47, 5, 'A new record inserted in Material table', 'INSERT', '2019-06-07 06:10:12'),
(48, 5, 'A new record inserted into damage table and quanti', 'INSERT', '2019-06-07 06:33:41'),
(49, 5, 'A new record inserted into damage table and quanti', 'UPDATE', '2019-06-07 08:24:17'),
(50, 5, 'A new record inserted into damage table and quanti', 'UPDATE', '2019-06-08 07:16:19'),
(51, 5, 'A new record inserted into damage table and quanti', 'UPDATE', '2019-06-08 07:18:56');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int(11) NOT NULL,
  `catname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catname`) VALUES
(1, 'AB'),
(2, 'C'),
(4, 'rest'),
(5, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `damage`
--

CREATE TABLE `damage` (
  `damid` int(11) NOT NULL,
  `mcode` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `damage`
--

INSERT INTO `damage` (`damid`, `mcode`, `quantity`) VALUES
(32, 9, 2),
(33, 10, 2),
(34, 10, 2),
(35, 10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `divid` int(11) NOT NULL,
  `divname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`divid`, `divname`) VALUES
(1, 'Jorhat Electrical Division1'),
(2, 'Jorhat Electrical Division2'),
(3, 'fgih');

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `iid` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `issuedto` int(11) DEFAULT NULL,
  `issuedfrom` int(11) DEFAULT NULL,
  `quantityofreq` int(11) NOT NULL,
  `issuequan` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `mid` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`iid`, `date`, `issuedto`, `issuedfrom`, `quantityofreq`, `issuequan`, `rate`, `amount`, `remarks`, `mid`, `status`) VALUES
(69, '2019-06-07 09:03:05', 2, 1, 1, 1, 1000, 1000, 'good', 10, 'approved'),
(70, '2019-06-07 09:05:17', 2, 1, 1, 1, 12000, 12000, 'good', 17, 'approved'),
(71, '2019-06-08 07:16:19', 2, 1, 2, 1, 1000, 1000, 'test', 10, 'pending'),
(72, '2019-06-08 07:18:49', 2, 1, 23, 5, 1000, 5000, '', 10, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `mid` int(11) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `make` varchar(40) NOT NULL,
  `t_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `remarks` varchar(40) NOT NULL,
  `catid` int(11) NOT NULL,
  `matcode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`mid`, `mname`, `make`, `t_id`, `remarks`, `catid`, `matcode`) VALUES
(9, 'transformer', 'Desd', 1, 'good', 1, 'db66'),
(10, 'raincoat', 'jesk', 9, 'nice1', 2, 'yu77'),
(11, 'gong', 'Desd', 8, 'nice1', 1, 'hk77'),
(12, 'screw', 'feer', 9, 'jhygjhy', 2, 'sc12'),
(15, 'wire', 'feer', 9, 'good', 2, 'hh99'),
(17, 'huit', 'desd', 7, 'ghg', 1, 'd007'),
(18, 'goood', 'TATA', 8, 'DONE', 1, 'fyyfut');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `usend` int(11) NOT NULL,
  `description` varchar(40) NOT NULL,
  `whom_to_notify` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `usend`, `description`, `whom_to_notify`, `time`) VALUES
(1, 5, 'there is a item in pending to be approve', 1, '2019-06-03 14:16:34'),
(2, 5, 'there is a item in pending to be approve', 1, '2019-06-06 10:35:43'),
(3, 5, 'there is a item in pending to be approve', 1, '2019-06-06 10:40:25'),
(4, 5, 'there is a item in pending to be approve', 1, '2019-06-06 10:41:33'),
(5, 5, 'there is a item in pending to be approve', 1, '2019-06-06 10:43:43'),
(6, 5, 'there is a item in pending to be approve', 1, '2019-06-06 10:45:18'),
(7, 5, 'there is a item in pending to be approve', 1, '2019-06-06 10:47:28'),
(8, 5, 'there is a item in pending to be approve', 1, '2019-06-06 10:49:03'),
(9, 5, 'there is a item in pending to be approve', 1, '2019-06-06 10:51:38'),
(10, 5, 'there is a item in pending to be approve', 1, '2019-06-06 10:52:02'),
(11, 5, 'there is a item in pending to be approve', 1, '2019-06-06 10:54:36'),
(12, 5, 'there is a item in pending to be approve', 1, '2019-06-06 18:20:51'),
(13, 5, 'there is a item in pending to be approve', 1, '2019-06-07 08:24:17'),
(14, 5, 'the item has been approved', 0, '2019-06-07 09:05:50'),
(15, 5, 'the item has been approved', 0, '2019-06-07 09:06:36'),
(16, 5, 'the item has been approved', 0, '2019-06-07 09:07:36'),
(17, 5, 'the item has been approved', 0, '2019-06-07 09:10:21'),
(18, 5, 'the item has been approved', 0, '2019-06-07 09:11:39'),
(19, 5, 'the item has been approved', 0, '2019-06-07 09:11:43'),
(20, 5, 'the item has been approved', 0, '2019-06-07 09:12:06'),
(21, 5, 'the item has been approved', 0, '2019-06-07 09:12:09'),
(22, 5, 'the item has been approved', 1, '2019-06-07 09:12:32'),
(23, 5, 'the item has been approved', 1, '2019-06-07 09:12:34'),
(24, 5, 'the item has been approved', 1, '2019-06-07 09:12:36'),
(25, 5, 'there is a item in pending to be approve', 1, '2019-06-08 07:16:19'),
(26, 5, 'there is a item in pending to be approve', 1, '2019-06-08 07:18:56');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `stockid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `grsno` int(11) NOT NULL,
  `mfgdate` date NOT NULL,
  `grsdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `expirydate` date NOT NULL,
  `rate` int(11) NOT NULL,
  `mid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`stockid`, `quantity`, `grsno`, `mfgdate`, `grsdate`, `expirydate`, `rate`, `mid`) VALUES
(1, 1, 233, '2019-05-01', '2019-05-06 18:30:00', '2019-07-02', 1000, 10),
(2, 9, 1, '2019-05-01', '2019-05-07 18:30:00', '2019-09-20', 12000, 17),
(3, 7, 12, '2019-05-01', '2019-05-24 09:54:16', '2019-05-08', 2000, 10),
(5, 10, 654, '2019-06-07', '2019-06-07 06:10:12', '2022-06-07', 12000, 11);

-- --------------------------------------------------------

--
-- Table structure for table `subdivision`
--

CREATE TABLE `subdivision` (
  `sdivid` int(11) NOT NULL,
  `sdivname` varchar(100) NOT NULL,
  `divid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subdivision`
--

INSERT INTO `subdivision` (`sdivid`, `sdivname`, `divid`) VALUES
(2, 'Jorhat ESD1', 1),
(3, 'Jorhat ESD2', 1),
(4, 'Jorhat ESD3', 1),
(5, 'Degaon ESD', 1),
(6, 'Mariani ESD', 2),
(7, 'Titabor ESD', 2),
(8, 'Majuli ESD', 2),
(9, 'jsd2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `system_set`
--

CREATE TABLE `system_set` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_set`
--

INSERT INTO `system_set` (`id`, `type`, `description`) VALUES
(1, 'email', 'email@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `type`) VALUES
(1, 'Rabit'),
(2, 'Weasel'),
(3, 'Raccon'),
(4, 'Wolf'),
(5, 'Panther'),
(6, 'Dog'),
(7, '11kv'),
(8, '33kv'),
(9, 'Not Available');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `usertypes` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userpic` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `dob` date NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `pincode` int(11) NOT NULL,
  `divid` int(11) NOT NULL,
  `designation` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `usertypes`, `username`, `password`, `userpic`, `firstname`, `lastname`, `gender`, `dob`, `phone`, `email`, `country`, `state`, `city`, `pincode`, `divid`, `designation`) VALUES
(5, 1, 'swastika', '$2y$10$01q.mGhEuOHtKcogaSGCyeynGUVE/s/W40QGYvulSqQoGbKa96fGa', 'uploads/IMG-20180611-WA0021.jpg', 'swastika', 'garg', 2, '1998-10-07', 8471923027, 'swas@gmail.com', 'india', 'assam', 'guwahati', 781028, 1, 'des'),
(8, 2, 'pallu', 'polo123', 'uploads/522x294.png', 'pallabi', 'devi', 2, '1998-11-18', 9956711465, 'polo@gmail.com', 'India', 'Assam', 'Jorhat', 781001, 1, 'software developer'),
(9, 1, 'dipankar', '$2y$10$IRtvXz3AMk4S4V/3NFk/PuO', '', 'deepankar', 'garg', 1, '1994-12-07', 7399898339, 'deep@gmail.com', 'India', 'Assam', 'Guwahati', 781028, 1, 'manager'),
(10, 1, 'test', '*94BDCEBE19083CE2A1F959FD02F96', '', '', '', 0, '0000-00-00', 0, '', '', '', '', 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `damage`
--
ALTER TABLE `damage`
  ADD PRIMARY KEY (`damid`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`divid`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`iid`),
  ADD KEY `sub_issue_id_fk` (`issuedto`),
  ADD KEY `div_issue_id_fk` (`issuedfrom`),
  ADD KEY `mat_issue_id_fk` (`mid`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`mid`),
  ADD KEY `cat_materials_id_fk` (`catid`),
  ADD KEY `types_materials_id_fk` (`t_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`stockid`),
  ADD UNIQUE KEY `grsno` (`grsno`),
  ADD KEY `stock_material_id_fk` (`mid`);

--
-- Indexes for table `subdivision`
--
ALTER TABLE `subdivision`
  ADD PRIMARY KEY (`sdivid`),
  ADD KEY `sub_div_id_fk` (`divid`);

--
-- Indexes for table `system_set`
--
ALTER TABLE `system_set`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type` (`type`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `use_division_id_fk` (`divid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `damage`
--
ALTER TABLE `damage`
  MODIFY `damid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `divid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `stockid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subdivision`
--
ALTER TABLE `subdivision`
  MODIFY `sdivid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `system_set`
--
ALTER TABLE `system_set`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `issue`
--
ALTER TABLE `issue`
  ADD CONSTRAINT `mat_issue_id_fk` FOREIGN KEY (`mid`) REFERENCES `materials` (`mid`) ON DELETE CASCADE;

--
-- Constraints for table `materials`
--
ALTER TABLE `materials`
  ADD CONSTRAINT `cat_materials_id_fk` FOREIGN KEY (`catid`) REFERENCES `category` (`catid`) ON DELETE CASCADE,
  ADD CONSTRAINT `types_materials_id_fk` FOREIGN KEY (`t_id`) REFERENCES `types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `stock_material_id_fk` FOREIGN KEY (`mid`) REFERENCES `materials` (`mid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
