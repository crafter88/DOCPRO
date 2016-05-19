-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2016 at 06:50 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_docpro`
--
CREATE DATABASE IF NOT EXISTS `db_docpro` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_docpro`;

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `b_id` int(255) NOT NULL,
  `b_code` int(255) NOT NULL,
  `b_name` varchar(255) NOT NULL,
  `b_shortname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `business_partners_class`
--

CREATE TABLE `business_partners_class` (
  `bpc_id` int(255) NOT NULL,
  `bpc_code` int(255) NOT NULL,
  `bpc_class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_partners_class`
--

INSERT INTO `business_partners_class` (`bpc_id`, `bpc_code`, `bpc_class`) VALUES
(1, 11, 'Company/Branch'),
(2, 21, 'Customer'),
(3, 31, 'Supplier-Ordinary Goods'),
(4, 32, 'Supplier-Capital Goods'),
(5, 33, 'Supplier-Other Goods'),
(6, 34, 'Supplier-Services'),
(7, 41, 'Related Party'),
(8, 51, 'Stockholder/Owner'),
(9, 61, 'Others (Pls. Specify)'),
(10, 71, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `business_partners_type`
--

CREATE TABLE `business_partners_type` (
  `bpt_id` int(255) NOT NULL,
  `bpt_code` int(255) NOT NULL,
  `bpt_type` varchar(255) NOT NULL,
  `bpt_shortname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_partners_type`
--

INSERT INTO `business_partners_type` (`bpt_id`, `bpt_code`, `bpt_type`, `bpt_shortname`) VALUES
(1, 1, 'Individual', 'IND'),
(2, 2, 'Non-Individual', 'CO'),
(3, 3, 'Government', 'GOV');

-- --------------------------------------------------------

--
-- Table structure for table `company_branches`
--

CREATE TABLE `company_branches` (
  `cb_id` int(255) NOT NULL,
  `cb_code` int(255) DEFAULT NULL,
  `cb_class` varchar(255) NOT NULL,
  `cb_type` varchar(255) NOT NULL,
  `cb_name` varchar(255) NOT NULL,
  `cb_ind_name` varchar(255) NOT NULL,
  `cb_address` varchar(255) NOT NULL,
  `cb_tin` int(255) NOT NULL,
  `cb_tax_type` varchar(255) NOT NULL,
  `bpc_id` int(255) NOT NULL,
  `bpt_id` int(255) NOT NULL,
  `tt_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `di_id` int(255) NOT NULL,
  `di_code` int(255) NOT NULL,
  `di_name` varchar(255) NOT NULL,
  `di_shortname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`di_id`, `di_code`, `di_name`, `di_shortname`) VALUES
(1, 1, 'Trade Discount', 'TD'),
(2, 2, 'Senior Citizen Discount', 'SCD'),
(3, 3, 'Cash Discount', 'CD');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `d_id` int(255) NOT NULL,
  `d_code` int(255) NOT NULL,
  `d_class` varchar(255) NOT NULL,
  `d_name` varchar(255) NOT NULL,
  `d_shortname` varchar(255) NOT NULL,
  `d_journal_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

CREATE TABLE `journals` (
  `j_id` int(255) NOT NULL,
  `j_code` int(255) NOT NULL,
  `j_name` varchar(255) NOT NULL,
  `j_shortname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journals`
--

INSERT INTO `journals` (`j_id`, `j_code`, `j_name`, `j_shortname`) VALUES
(1, 1, 'Sales Journal', 'SJ'),
(2, 2, 'Receipts Journal', 'RJ'),
(3, 3, 'Purchases Journal', 'PJ'),
(4, 4, 'Collections Journal', 'CJ'),
(5, 5, 'Disbursements Journal', 'DJ'),
(6, 6, 'General Journal', 'GJ');

-- --------------------------------------------------------

--
-- Table structure for table `modes_of_payment`
--

CREATE TABLE `modes_of_payment` (
  `mop_id` int(255) NOT NULL,
  `mop_code` int(255) NOT NULL,
  `mop_name` varchar(255) NOT NULL,
  `mop_shortname` varchar(255) NOT NULL,
  `mop_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `p_id` int(255) NOT NULL,
  `p_fname` varchar(255) NOT NULL,
  `p_mname` varchar(255) NOT NULL,
  `p_lname` varchar(255) NOT NULL,
  `p_address` varchar(255) NOT NULL,
  `p_cno` varchar(255) NOT NULL,
  `p_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `p_cb`
--

CREATE TABLE `p_cb` (
  `p_id` int(255) NOT NULL,
  `cb_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

CREATE TABLE `taxes` (
  `t_id` int(255) NOT NULL,
  `t_code` int(255) DEFAULT NULL,
  `t_type` varchar(255) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `t_shortname` varchar(255) NOT NULL,
  `t_rate` varchar(255) NOT NULL,
  `t_base` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tax_types`
--

CREATE TABLE `tax_types` (
  `tt_id` int(255) NOT NULL,
  `tt_code` int(255) NOT NULL,
  `tt_name` varchar(255) NOT NULL,
  `tt_shortname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tax_types`
--

INSERT INTO `tax_types` (`tt_id`, `tt_code`, `tt_name`, `tt_shortname`) VALUES
(1, 1, 'Income Tax', 'IT'),
(2, 2, 'Value Added Tax', 'VAT'),
(3, 3, 'Percentage Tax', 'PT'),
(4, 4, 'Excise Tax', 'EXT'),
(5, 5, 'Expanded Withholding Tax', 'EWT'),
(6, 6, 'Final Withholding Tax', 'FWT'),
(7, 7, 'Special Tax', 'ST'),
(8, 8, 'No Value Added Tax', 'NV'),
(9, 9, 'Exempt Tax', 'ET');

-- --------------------------------------------------------

--
-- Table structure for table `types_of_payment`
--

CREATE TABLE `types_of_payment` (
  `top_id` int(255) NOT NULL,
  `top_code` int(255) NOT NULL,
  `top_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `types_of_payment`
--

INSERT INTO `types_of_payment` (`top_id`, `top_code`, `top_type`) VALUES
(1, 1, 'Cash'),
(2, 2, 'Credit');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(255) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_pass` varchar(255) NOT NULL,
  `u_pass_text` varchar(255) NOT NULL,
  `u_type` varchar(255) NOT NULL,
  `p_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_pass`, `u_pass_text`, `u_type`, `p_id`) VALUES
(1, 'super_admin', 'ed49c3fed75a513a79cb8bd1d4715d57', 'super_admin', 'Super Admin', 1),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Admin', 2),
(3, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'User', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `business_partners_class`
--
ALTER TABLE `business_partners_class`
  ADD PRIMARY KEY (`bpc_id`);

--
-- Indexes for table `business_partners_type`
--
ALTER TABLE `business_partners_type`
  ADD PRIMARY KEY (`bpt_id`);

--
-- Indexes for table `company_branches`
--
ALTER TABLE `company_branches`
  ADD PRIMARY KEY (`cb_id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`di_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`j_id`);

--
-- Indexes for table `modes_of_payment`
--
ALTER TABLE `modes_of_payment`
  ADD PRIMARY KEY (`mop_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `taxes`
--
ALTER TABLE `taxes`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `tax_types`
--
ALTER TABLE `tax_types`
  ADD PRIMARY KEY (`tt_id`);

--
-- Indexes for table `types_of_payment`
--
ALTER TABLE `types_of_payment`
  ADD PRIMARY KEY (`top_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `b_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `business_partners_class`
--
ALTER TABLE `business_partners_class`
  MODIFY `bpc_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `business_partners_type`
--
ALTER TABLE `business_partners_type`
  MODIFY `bpt_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `company_branches`
--
ALTER TABLE `company_branches`
  MODIFY `cb_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `di_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `d_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `journals`
--
ALTER TABLE `journals`
  MODIFY `j_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `modes_of_payment`
--
ALTER TABLE `modes_of_payment`
  MODIFY `mop_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `p_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `taxes`
--
ALTER TABLE `taxes`
  MODIFY `t_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tax_types`
--
ALTER TABLE `tax_types`
  MODIFY `tt_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `types_of_payment`
--
ALTER TABLE `types_of_payment`
  MODIFY `top_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
