-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2018 at 11:15 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_crmsense_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_items`
--

CREATE TABLE `tbl_items` (
  `id` int(11) NOT NULL,
  `item_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `invoices_id` int(11) NOT NULL,
  `item_tax_rate` decimal(10,2) NOT NULL DEFAULT '0.00',
  `item_tax_total` decimal(10,2) NOT NULL DEFAULT '0.00',
  `quantity` decimal(10,2) DEFAULT '0.00',
  `total_cost` decimal(10,2) DEFAULT '0.00',
  `item_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'Item Name',
  `item_desc` longtext COLLATE utf8_unicode_ci,
  `unit_cost` decimal(10,2) DEFAULT '0.00',
  `item_order` int(11) DEFAULT '0',
  `date_saved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sync_date_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `create_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `update_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` date NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_items`
--

INSERT INTO `tbl_items` (`id`, `item_id`, `invoices_id`, `item_tax_rate`, `item_tax_total`, `quantity`, `total_cost`, `item_name`, `item_desc`, `unit_cost`, `item_order`, `date_saved`, `sync_date_time`, `create_by`, `update_by`, `create_date`, `update_date`) VALUES
(1, '1532594824549', 0, '0.00', '0.00', '50.00', '0.00', 'product one', 'Test', '45000.00', 0, '2018-07-26 08:47:04', '2018-07-26 08:47:04', '', '', '0000-00-00', '0000-00-00'),
(2, '-277604210', 0, '0.00', '0.00', '100.00', '0.00', 'Test Product 2', 'Test', '12000.00', 0, '2018-07-26 09:03:28', '2018-07-26 09:03:28', '', '', '0000-00-00', '0000-00-00'),
(3, '-543209842', 0, '0.00', '0.00', '1.00', '0.00', 'demo item', 'sdfsdfdsgsg', '20.00', 0, '2018-07-27 06:26:10', '2018-07-27 06:26:10', '', '', '0000-00-00', '0000-00-00'),
(4, '-604074805', 0, '0.00', '0.00', '3.00', '0.00', 'pro1', '', '100.00', 0, '2018-07-27 06:50:54', '2018-07-27 06:50:54', '', '', '0000-00-00', '0000-00-00'),
(5, '1532682902745', 0, '0.00', '0.00', '10.00', '0.00', 'text_radha', 'mljhkljhk', '200.00', 0, '2018-07-27 09:15:02', '2018-07-27 09:15:02', '1', '0', '2018-07-27', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_items`
--
ALTER TABLE `tbl_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_items`
--
ALTER TABLE `tbl_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
