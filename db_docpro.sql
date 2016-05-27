-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
<<<<<<< .mine
-- Generation Time: May 27, 2016 at 11:07 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5
||||||| .r33
-- Generation Time: May 20, 2016 at 08:50 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5
=======
-- Generation Time: May 27, 2016 at 11:04 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3
>>>>>>> .r38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_docpro`
--
CREATE DATABASE IF NOT EXISTS `db_docpro` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_docpro`;

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE IF NOT EXISTS `banks` (
`b_id` int(255) NOT NULL,
  `b_code` int(255) NOT NULL,
  `b_name` varchar(255) NOT NULL,
  `b_shortname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `business_partners_class`
--

CREATE TABLE IF NOT EXISTS `business_partners_class` (
`bpc_id` int(255) NOT NULL,
  `bpc_code` int(255) NOT NULL,
  `bpc_class` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `business_partners_type` (
`bpt_id` int(255) NOT NULL,
  `bpt_code` int(255) NOT NULL,
  `bpt_type` varchar(255) NOT NULL,
  `bpt_shortname` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

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

<<<<<<< .mine
CREATE TABLE `company_branches` (
  `cb_id` int(255) NOT NULL,
  `cb_code` int(255) NOT NULL,
||||||| .r33
CREATE TABLE `company_branches` (
  `cb_id` int(255) NOT NULL,
  `cb_code` int(255) DEFAULT NULL,
=======
CREATE TABLE IF NOT EXISTS `company_branches` (
`cb_id` int(255) NOT NULL,
  `cb_code` int(255) NOT NULL,
>>>>>>> .r38
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_branches`
--

INSERT INTO `company_branches` (`cb_id`, `cb_code`, `cb_class`, `cb_type`, `cb_name`, `cb_ind_name`, `cb_address`, `cb_tin`, `cb_tax_type`, `bpc_id`, `bpt_id`, `tt_id`) VALUES
(1, 11221, 'Company/Branch', 'Non-Individual', 'Document Processing Business Solutions Inc', 'DocPro', '4th Flr. GP Arcade Bldg. Mabini St., Baguio City', 1000000, 'VAT', 11, 2, 2),
(2, 2, '', '', '', '', '', 0, '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `co_modes_of_payment`
--

CREATE TABLE IF NOT EXISTS `co_modes_of_payment` (
`co_mop_id` int(255) NOT NULL,
  `co_mop_code` int(255) NOT NULL,
  `co_mop_name` varchar(255) NOT NULL,
  `co_mop_shortname` varchar(255) NOT NULL,
  `co_mop_type` varchar(255) NOT NULL,
  `co_top_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_branches`
--

INSERT INTO `company_branches` (`cb_id`, `cb_code`, `cb_class`, `cb_type`, `cb_name`, `cb_ind_name`, `cb_address`, `cb_tin`, `cb_tax_type`, `bpc_id`, `bpt_id`, `tt_id`) VALUES
(1, 11221, 'Company/Branch', 'Non-Individual', 'Document Processing Business Solutions Inc', 'DocPro', '4th Flr. GP Arcade Bldg. Mabini St., Baguio City', 1000000, 'VAT', 11, 2, 2);

-- --------------------------------------------------------

--
<<<<<<< .mine
-- Table structure for table `co_departments`
||||||| .r33
-- Table structure for table `discounts`
=======
-- Table structure for table `co_taxes`
--

CREATE TABLE IF NOT EXISTS `co_taxes` (
`co_t_id` int(255) NOT NULL,
  `co_t_code` int(255) NOT NULL,
  `co_t_type` varchar(255) NOT NULL,
  `co_t_name` varchar(255) NOT NULL,
  `co_t_shortname` varchar(255) NOT NULL,
  `co_t_rate` varchar(255) NOT NULL,
  `co_t_base` int(255) NOT NULL,
  `co_tt_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `co_tax_types`
--

CREATE TABLE IF NOT EXISTS `co_tax_types` (
`co_tt_id` int(255) NOT NULL,
  `co_tt_code` int(255) NOT NULL,
  `co_tt_name` varchar(255) NOT NULL,
  `co_tt_shortname` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `co_tax_types`
--

INSERT INTO `co_tax_types` (`co_tt_id`, `co_tt_code`, `co_tt_name`, `co_tt_shortname`) VALUES
(1, 1, 'Income Tax', 'IT'),
(2, 2, 'Value Added Tax', 'VAT'),
(3, 3, 'Percentage Tax', 'PT'),
(4, 4, 'Excise Tax', 'EXT'),
(5, 5, 'Expanded Withholding Tax', 'EWT'),
(6, 6, 'Final Withholding Tax', 'FWT'),
(7, 7, 'Special Tax', 'ST'),
(8, 8, 'Non-Value Added Tax', 'NV');

-- --------------------------------------------------------

--
-- Table structure for table `co_types_of_payment`
--

CREATE TABLE IF NOT EXISTS `co_types_of_payment` (
`co_top_id` int(255) NOT NULL,
  `co_top_code` int(255) NOT NULL,
  `co_top_type` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `co_types_of_payment`
--

INSERT INTO `co_types_of_payment` (`co_top_id`, `co_top_code`, `co_top_type`) VALUES
(1, 1, 'Cash'),
(2, 2, 'Credit');

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
>>>>>>> .r38
--

<<<<<<< .mine
CREATE TABLE `co_departments` (
  `co_de_id` int(255) NOT NULL,
  `co_de_code` int(255) NOT NULL,
  `co_de_name` varchar(255) NOT NULL,
  `co_de_shortname` varchar(255) NOT NULL
||||||| .r33
CREATE TABLE `discounts` (
  `di_id` int(255) NOT NULL,
  `di_code` int(255) NOT NULL,
  `di_name` varchar(255) NOT NULL,
  `di_shortname` varchar(255) NOT NULL
=======
CREATE TABLE IF NOT EXISTS `discounts` (
`di_id` int(255) NOT NULL,
  `di_code` int(255) NOT NULL,
  `di_name` varchar(255) NOT NULL,
  `di_shortname` varchar(255) NOT NULL
>>>>>>> .r38
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `co_modes_of_payment`
--

CREATE TABLE `co_modes_of_payment` (
  `co_mop_id` int(255) NOT NULL,
  `co_mop_code` int(255) NOT NULL,
  `co_mop_name` varchar(255) NOT NULL,
  `co_mop_shortname` varchar(255) NOT NULL,
  `co_mop_type` varchar(255) NOT NULL,
  `co_top_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
<<<<<<< .mine
-- Table structure for table `co_taxes`
||||||| .r33
-- Table structure for table `documents`
=======
-- Table structure for table `level_one`
>>>>>>> .r38
--

<<<<<<< .mine
CREATE TABLE `co_taxes` (
  `co_t_id` int(255) NOT NULL,
  `co_t_code` int(255) NOT NULL,
  `co_t_type` varchar(255) NOT NULL,
  `co_t_name` varchar(255) NOT NULL,
  `co_t_shortname` varchar(255) NOT NULL,
  `co_t_rate` varchar(255) NOT NULL,
  `co_t_base` int(255) NOT NULL,
  `co_tt_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
||||||| .r33
CREATE TABLE `documents` (
  `d_id` int(255) NOT NULL,
  `d_code` int(255) NOT NULL,
  `d_class` varchar(255) NOT NULL,
  `d_name` varchar(255) NOT NULL,
  `d_shortname` varchar(255) NOT NULL,
  `d_journal_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
=======
CREATE TABLE IF NOT EXISTS `level_one` (
`cat_one_id` int(11) NOT NULL,
  `cat_one_code` int(11) NOT NULL,
  `cat_one_name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
>>>>>>> .r38

--
-- Dumping data for table `level_one`
--

INSERT INTO `level_one` (`cat_one_id`, `cat_one_code`, `cat_one_name`) VALUES
(1, 1, 'Assets'),
(2, 2, 'Liabilities'),
(3, 3, 'Equity'),
(4, 4, 'Revenues'),
(5, 5, 'Cost of Sales/Services/Goods Manufactured'),
(6, 6, 'Operating Expenses');

-- --------------------------------------------------------

--
<<<<<<< .mine
-- Table structure for table `co_tax_types`
||||||| .r33
-- Table structure for table `journals`
=======
-- Table structure for table `level_three`
>>>>>>> .r38
--

<<<<<<< .mine
CREATE TABLE `co_tax_types` (
  `co_tt_id` int(255) NOT NULL,
  `co_tt_code` int(255) NOT NULL,
  `co_tt_name` varchar(255) NOT NULL,
  `co_tt_shortname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
||||||| .r33
CREATE TABLE `journals` (
  `j_id` int(255) NOT NULL,
  `j_code` int(255) NOT NULL,
  `j_name` varchar(255) NOT NULL,
  `j_shortname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
=======
CREATE TABLE IF NOT EXISTS `level_three` (
`cat_three_id` int(11) NOT NULL,
  `cat_three_code` int(11) NOT NULL,
  `cat_three_name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
>>>>>>> .r38

--
<<<<<<< .mine
-- Dumping data for table `co_tax_types`
||||||| .r33
-- Dumping data for table `journals`
=======
-- Dumping data for table `level_three`
>>>>>>> .r38
--

<<<<<<< .mine
INSERT INTO `co_tax_types` (`co_tt_id`, `co_tt_code`, `co_tt_name`, `co_tt_shortname`) VALUES
(1, 1, 'Income Tax', 'IT'),
(2, 2, 'Value Added Tax', 'VAT'),
(3, 3, 'Percentage Tax', 'PT'),
(4, 4, 'Excise Tax', 'EXT'),
(5, 5, 'Expanded Withholding Tax', 'EWT'),
(6, 6, 'Final Withholding Tax', 'FWT'),
(7, 7, 'Special Tax', 'ST'),
(8, 8, 'Non-Value Added Tax', 'NV');
||||||| .r33
INSERT INTO `journals` (`j_id`, `j_code`, `j_name`, `j_shortname`) VALUES
(1, 1, 'Sales Journal', 'SJ'),
(2, 2, 'Receipts Journal', 'RJ'),
(3, 3, 'Purchases Journal', 'PJ'),
(4, 4, 'Collections Journal', 'CJ'),
(5, 5, 'Disbursements Journal', 'DJ'),
(6, 6, 'General Journal', 'GJ');
=======
INSERT INTO `level_three` (`cat_three_id`, `cat_three_code`, `cat_three_name`) VALUES
(1, 1, 'Cash and Cash Equivalents'),
(2, 2, 'Short Term Investments'),
(3, 3, 'Trade and Other Receivables'),
(4, 4, 'Inventories'),
(5, 5, 'Prepaid Expenses'),
(6, 6, 'Other Current Assets'),
(7, 1, 'Property and Equipments'),
(8, 2, 'Investment Properties'),
(9, 3, 'Investments'),
(10, 4, 'Intangibles'),
(11, 5, 'Pension and Retirement Plans'),
(12, 6, 'Deffered Tax Assets'),
(13, 7, 'Other Non-Current Assets'),
(14, 1, 'Trade and Other Payables'),
(15, 2, 'Other Accounts Payables'),
(16, 3, 'Related Party Payables'),
(17, 4, 'Provisions'),
(18, 5, 'Loans Payable-Current Position'),
(19, 1, 'Loans Payable-Non-Current Portion'),
(20, 2, 'Pension Liabilities'),
(21, 3, 'Deffered Tax Liabilities'),
(22, 4, 'Other Non-Current Liabilities'),
(23, 0, 'Owner''s Capital'),
(24, 0, 'Partner''s Capital'),
(25, 0, 'Shareholder''s Equity'),
(26, 0, 'Members Contribution'),
(27, 0, 'Sales'),
(28, 0, 'Receipts'),
(29, 0, 'Other Income'),
(30, 0, 'Cost of Sales'),
(31, 0, 'Cost of Good Manufactured and Sold'),
(32, 0, 'Operating Expenses');
>>>>>>> .r38

-- --------------------------------------------------------

--
<<<<<<< .mine
-- Table structure for table `co_types_of_payment`
--

CREATE TABLE `co_types_of_payment` (
  `co_top_id` int(255) NOT NULL,
  `co_top_code` int(255) NOT NULL,
  `co_top_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `co_types_of_payment`
--

INSERT INTO `co_types_of_payment` (`co_top_id`, `co_top_code`, `co_top_type`) VALUES
(1, 1, 'Cash'),
(2, 2, 'Credit');

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
||||||| .r33
=======
-- Table structure for table `level_two`
--

CREATE TABLE IF NOT EXISTS `level_two` (
`cat_two_id` int(11) NOT NULL,
  `cat_two_code` int(11) NOT NULL,
  `cat_two_name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level_two`
--

INSERT INTO `level_two` (`cat_two_id`, `cat_two_code`, `cat_two_name`) VALUES
(1, 1, 'Current Assets'),
(2, 2, 'Non-Current Assets'),
(3, 1, 'Current Liabilities'),
(4, 2, 'Non-Current Liabilities'),
(5, 1, 'Owner''s Capital'),
(6, 2, 'Partner''s Capital'),
(7, 3, 'Shareholder''s Equity'),
(8, 4, 'Member''s Contribution'),
(9, 1, 'Sales'),
(10, 2, 'Receipts'),
(11, 3, 'Other Income'),
(12, 1, 'Cost of Sales'),
(13, 2, 'Cost of Good Manufactured and Sold'),
(14, 0, 'Operating Expenses');

-- --------------------------------------------------------

--
>>>>>>> .r38
-- Table structure for table `modes_of_payment`
--

CREATE TABLE IF NOT EXISTS `modes_of_payment` (
`mop_id` int(255) NOT NULL,
  `mop_code` int(255) NOT NULL,
  `mop_name` varchar(255) NOT NULL,
  `mop_shortname` varchar(255) NOT NULL,
  `mop_type` varchar(255) NOT NULL,
  `top_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
`p_id` int(255) NOT NULL,
  `p_fname` varchar(255) NOT NULL,
  `p_mname` varchar(255) NOT NULL,
  `p_lname` varchar(255) NOT NULL,
  `p_address` varchar(255) NOT NULL,
  `p_cno` varchar(255) NOT NULL,
  `p_email` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`p_id`, `p_fname`, `p_mname`, `p_lname`, `p_address`, `p_cno`, `p_email`) VALUES
(1, 'super_admin', 'super_admin', 'super_admin', 'super_admin', 'super_admin', 'super_admin');

-- --------------------------------------------------------

--
-- Table structure for table `p_cb`
--

CREATE TABLE IF NOT EXISTS `p_cb` (
  `p_id` int(255) NOT NULL,
  `cb_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_cb`
--

INSERT INTO `p_cb` (`p_id`, `cb_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

<<<<<<< .mine
CREATE TABLE `taxes` (
  `t_id` int(255) NOT NULL,
  `t_code` int(255) NOT NULL,
||||||| .r33
CREATE TABLE `taxes` (
  `t_id` int(255) NOT NULL,
  `t_code` int(255) DEFAULT NULL,
=======
CREATE TABLE IF NOT EXISTS `taxes` (
`t_id` int(255) NOT NULL,
  `t_code` int(255) NOT NULL,
>>>>>>> .r38
  `t_type` varchar(255) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `t_shortname` varchar(255) NOT NULL,
  `t_rate` varchar(255) NOT NULL,
  `t_base` int(255) NOT NULL,
  `tt_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tax_types`
--

CREATE TABLE IF NOT EXISTS `tax_types` (
`tt_id` int(255) NOT NULL,
  `tt_code` int(255) NOT NULL,
  `tt_name` varchar(255) NOT NULL,
  `tt_shortname` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

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
(8, 8, 'Non-Value Added Tax', 'NV');

-- --------------------------------------------------------

--
-- Table structure for table `types_of_payment`
--

CREATE TABLE IF NOT EXISTS `types_of_payment` (
`top_id` int(255) NOT NULL,
  `top_code` int(255) NOT NULL,
  `top_type` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `users` (
`u_id` int(255) NOT NULL,
  `u_code` int(255) NOT NULL,
  `u_code` int(255) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_pass` varchar(255) NOT NULL,
  `u_pass_text` varchar(255) NOT NULL,
  `u_type` varchar(255) NOT NULL,
  `p_id` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_code`, `u_name`, `u_pass`, `u_pass_text`, `u_type`, `p_id`) VALUES
(1, 1, 'super_admin', 'ed49c3fed75a513a79cb8bd1d4715d57', 'super_admin', 'Super Admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vat_details`
--

CREATE TABLE IF NOT EXISTS `vat_details` (
  `vat_details_id` int(11) NOT NULL,
  `tax_id` int(11) NOT NULL,
  `net_vat_amount` int(11) NOT NULL,
  `gross_amount` int(11) NOT NULL,
  `trans_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
<<<<<<< .mine
-- Indexes for table `co_departments`
||||||| .r33
-- Indexes for table `discounts`
=======
-- Indexes for table `co_modes_of_payment`
--
ALTER TABLE `co_modes_of_payment`
 ADD PRIMARY KEY (`co_mop_id`);

--
-- Indexes for table `co_taxes`
--
ALTER TABLE `co_taxes`
 ADD PRIMARY KEY (`co_t_id`);

--
-- Indexes for table `co_tax_types`
--
ALTER TABLE `co_tax_types`
 ADD PRIMARY KEY (`co_tt_id`);

--
-- Indexes for table `co_types_of_payment`
--
ALTER TABLE `co_types_of_payment`
 ADD PRIMARY KEY (`co_top_id`);

--
-- Indexes for table `discounts`
>>>>>>> .r38
--
<<<<<<< .mine
ALTER TABLE `co_departments`
  ADD PRIMARY KEY (`co_de_id`);
||||||| .r33
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`di_id`);
=======
ALTER TABLE `discounts`
 ADD PRIMARY KEY (`di_id`);
>>>>>>> .r38

--
<<<<<<< .mine
-- Indexes for table `co_modes_of_payment`
||||||| .r33
-- Indexes for table `documents`
=======
-- Indexes for table `level_one`
>>>>>>> .r38
--
<<<<<<< .mine
ALTER TABLE `co_modes_of_payment`
  ADD PRIMARY KEY (`co_mop_id`);
||||||| .r33
ALTER TABLE `documents`
  ADD PRIMARY KEY (`d_id`);
=======
ALTER TABLE `level_one`
 ADD PRIMARY KEY (`cat_one_id`);
>>>>>>> .r38

--
<<<<<<< .mine
-- Indexes for table `co_taxes`
||||||| .r33
-- Indexes for table `journals`
=======
-- Indexes for table `level_three`
>>>>>>> .r38
--
<<<<<<< .mine
ALTER TABLE `co_taxes`
  ADD PRIMARY KEY (`co_t_id`);
||||||| .r33
ALTER TABLE `journals`
  ADD PRIMARY KEY (`j_id`);
=======
ALTER TABLE `level_three`
 ADD PRIMARY KEY (`cat_three_id`);
>>>>>>> .r38

--
<<<<<<< .mine
-- Indexes for table `co_tax_types`
--
ALTER TABLE `co_tax_types`
  ADD PRIMARY KEY (`co_tt_id`);

--
-- Indexes for table `co_types_of_payment`
--
ALTER TABLE `co_types_of_payment`
  ADD PRIMARY KEY (`co_top_id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`di_id`);

--
||||||| .r33
=======
-- Indexes for table `level_two`
--
ALTER TABLE `level_two`
 ADD PRIMARY KEY (`cat_two_id`);

--
>>>>>>> .r38
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
-- Indexes for table `vat_details`
--
ALTER TABLE `vat_details`
 ADD PRIMARY KEY (`vat_details_id`);

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
MODIFY `bpc_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `business_partners_type`
--
ALTER TABLE `business_partners_type`
MODIFY `bpt_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `company_branches`
--
ALTER TABLE `company_branches`
<<<<<<< .mine
  MODIFY `cb_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
||||||| .r33
  MODIFY `cb_id` int(255) NOT NULL AUTO_INCREMENT;
=======
MODIFY `cb_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
>>>>>>> .r38
--
<<<<<<< .mine
-- AUTO_INCREMENT for table `co_departments`
||||||| .r33
-- AUTO_INCREMENT for table `discounts`
=======
-- AUTO_INCREMENT for table `co_modes_of_payment`
--
ALTER TABLE `co_modes_of_payment`
MODIFY `co_mop_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `co_taxes`
--
ALTER TABLE `co_taxes`
MODIFY `co_t_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `co_tax_types`
--
ALTER TABLE `co_tax_types`
MODIFY `co_tt_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `co_types_of_payment`
--
ALTER TABLE `co_types_of_payment`
MODIFY `co_top_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `discounts`
>>>>>>> .r38
--
<<<<<<< .mine
ALTER TABLE `co_departments`
  MODIFY `co_de_id` int(255) NOT NULL AUTO_INCREMENT;
||||||| .r33
ALTER TABLE `discounts`
  MODIFY `di_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
=======
ALTER TABLE `discounts`
MODIFY `di_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
>>>>>>> .r38
--
<<<<<<< .mine
-- AUTO_INCREMENT for table `co_modes_of_payment`
||||||| .r33
-- AUTO_INCREMENT for table `documents`
=======
-- AUTO_INCREMENT for table `level_one`
>>>>>>> .r38
--
<<<<<<< .mine
ALTER TABLE `co_modes_of_payment`
  MODIFY `co_mop_id` int(255) NOT NULL AUTO_INCREMENT;
||||||| .r33
ALTER TABLE `documents`
  MODIFY `d_id` int(255) NOT NULL AUTO_INCREMENT;
=======
ALTER TABLE `level_one`
MODIFY `cat_one_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
>>>>>>> .r38
--
<<<<<<< .mine
-- AUTO_INCREMENT for table `co_taxes`
||||||| .r33
-- AUTO_INCREMENT for table `journals`
=======
-- AUTO_INCREMENT for table `level_three`
>>>>>>> .r38
--
<<<<<<< .mine
ALTER TABLE `co_taxes`
  MODIFY `co_t_id` int(255) NOT NULL AUTO_INCREMENT;
||||||| .r33
ALTER TABLE `journals`
  MODIFY `j_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
=======
ALTER TABLE `level_three`
MODIFY `cat_three_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
>>>>>>> .r38
--
<<<<<<< .mine
-- AUTO_INCREMENT for table `co_tax_types`
--
ALTER TABLE `co_tax_types`
  MODIFY `co_tt_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `co_types_of_payment`
--
ALTER TABLE `co_types_of_payment`
  MODIFY `co_top_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `di_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
||||||| .r33
=======
-- AUTO_INCREMENT for table `level_two`
--
ALTER TABLE `level_two`
MODIFY `cat_two_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
>>>>>>> .r38
-- AUTO_INCREMENT for table `modes_of_payment`
--
ALTER TABLE `modes_of_payment`
MODIFY `mop_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
<<<<<<< .mine
  MODIFY `p_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
||||||| .r33
  MODIFY `p_id` int(255) NOT NULL AUTO_INCREMENT;
=======
MODIFY `p_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
>>>>>>> .r38
--
-- AUTO_INCREMENT for table `taxes`
--
ALTER TABLE `taxes`
MODIFY `t_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tax_types`
--
ALTER TABLE `tax_types`
MODIFY `tt_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `types_of_payment`
--
ALTER TABLE `types_of_payment`
MODIFY `top_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
<<<<<<< .mine
  MODIFY `u_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
||||||| .r33
  MODIFY `u_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
=======
MODIFY `u_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
>>>>>>> .r38
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
