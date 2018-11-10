-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2018 at 04:24 AM
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
-- Database: `taller`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(100) NOT NULL,
  `o_id` int(100) NOT NULL,
  `id` int(100) NOT NULL,
  `prod_id` int(100) NOT NULL,
  `sub_t_w_tax` int(100) NOT NULL,
  `total_tax` int(100) NOT NULL,
  `general_total` int(100) NOT NULL,
  `status` text COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `o_id`, `id`, `prod_id`, `sub_t_w_tax`, `total_tax`, `general_total`, `status`) VALUES
(11, 1, 22726563, 11, 5600, 896, 6496, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `bill_expense`
--

CREATE TABLE `bill_expense` (
  `b_id` int(100) NOT NULL,
  `concept` text COLLATE latin1_general_ci NOT NULL,
  `unit_price` int(100) NOT NULL,
  `n_elements` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `sub_t_w_tax` int(100) NOT NULL,
  `total_tax` int(100) NOT NULL,
  `general_total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `bill_expense`
--

INSERT INTO `bill_expense` (`b_id`, `concept`, `unit_price`, `n_elements`, `total`, `sub_t_w_tax`, `total_tax`, `general_total`) VALUES
(12, 'Hammer', 2000, 3, 6000, 6000, 960, 6960),
(13, 'Screw', 150, 10, 1500, 1500, 240, 1740),
(14, 'Oil', 700, 5, 3500, 3500, 560, 4060),
(15, 'bow', 21500, 1, 21500, 21500, 3440, 24940);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(100) NOT NULL,
  `name` text COLLATE latin1_general_ci NOT NULL,
  `surname` text COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `surname`, `email`, `phone`) VALUES
(19980241, 'Stefany', 'Berenguer', 'ingstefanyberenguer@gmail.com', ''),
(20982443, 'Jose', 'Berenguer', 'jlberenguerl@gmail.com', ''),
(22726563, 'Mariangel', 'Orono', 'mariangelcoa@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(100) NOT NULL,
  `concept` text COLLATE latin1_general_ci NOT NULL,
  `unit_price` int(100) NOT NULL,
  `n_elements` int(100) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `concept`, `unit_price`, `n_elements`, `total`) VALUES
(12, 'Hatches', 65000, 2, 150800),
(13, 'Crystal', 4000, 4, 18560),
(14, 'Hammer', 2000, 3, 6960),
(15, 'Screw', 150, 10, 1740),
(16, 'Oil', 700, 5, 4060),
(17, 'bow', 21500, 1, 24940);

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `order_id` int(100) NOT NULL,
  `cust_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `date` date NOT NULL,
  `state` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `branch` varchar(40) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`order_id`, `cust_id`, `product_id`, `date`, `state`, `branch`) VALUES
(100, 20982443, 12, '2018-11-09', 'Carabobo', 'Puerto Cabello');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `bill_expense`
--
ALTER TABLE `bill_expense`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `bill_expense`
--
ALTER TABLE `bill_expense`
  MODIFY `b_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22726564;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43325;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
