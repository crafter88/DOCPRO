-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2016 at 05:08 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

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
-- Table structure for table `account_category`
--

DROP TABLE IF EXISTS `account_category`;
CREATE TABLE `account_category` (
  `acc_cat_id` int(255) NOT NULL,
  `level1_code` int(255) NOT NULL,
  `level1_name` varchar(255) NOT NULL,
  `level2_code` int(255) NOT NULL,
  `level2_name` varchar(255) NOT NULL,
  `level3_code` int(255) DEFAULT NULL,
  `level3_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_category`
--

INSERT INTO `account_category` (`acc_cat_id`, `level1_code`, `level1_name`, `level2_code`, `level2_name`, `level3_code`, `level3_name`) VALUES
(1, 1, 'assets', 11, 'current assets', 0, ''),
(2, 1, 'Assets', 11, 'Current Assets', NULL, NULL),
(3, 1, 'assets', 12, 'non-current assets', NULL, NULL),
(4, 2, 'Liabilities', 21, 'Current Liabilities', NULL, NULL),
(5, 2, 'Liabilities', 22, 'Non-current Liabilities', NULL, NULL),
(6, 3, 'Equity', 31, 'Owner''s Capital', NULL, NULL),
(7, 3, 'Equity', 32, 'Partner''s Equity', NULL, NULL),
(8, 3, 'Equity', 33, 'Shareholder''s Equity', NULL, NULL),
(9, 3, 'Equity', 34, 'Members'' Contribution', NULL, NULL),
(10, 4, 'Revenues', 41, 'Sales', NULL, NULL),
(11, 4, 'Revenues', 42, 'Receipts', NULL, NULL),
(12, 4, 'Others', 43, 'Other Income', NULL, NULL),
(13, 5, 'Cost of Sales/Services/Goods Manufactured', 51, 'Cost of Sales', NULL, NULL),
(14, 5, 'Cost of Sales/Services/Goods Manufactured', 52, 'Cost of Good Manufactured and Sold', NULL, NULL),
(15, 6, 'Operating Expenses', 60, 'Operating Expenses', NULL, NULL),
(16, 1, 'Assets', 11, 'Current Assets', 111, 'Cash and Equivalents'),
(17, 1, 'Assets', 11, 'Current Assets', 112, 'Short Term Investments'),
(18, 1, 'Assets', 11, 'Current Assets', 113, 'Trade and Other Receivables'),
(19, 1, 'Assets', 11, 'Current Assets', 114, 'Inventories'),
(20, 1, 'Assets', 11, 'Current Assets', 115, 'Prepaid Expenses'),
(21, 1, 'Assets', 11, 'Current Assets', 116, 'Other Current Assets'),
(22, 1, 'Assets', 12, 'Non-current Assets', 121, 'Property and Equipments'),
(23, 1, 'Assets', 12, 'Non-current Assets', 122, 'Investment Properties'),
(24, 1, 'Assets', 12, 'Non-current Assets', 123, 'Investments'),
(25, 1, 'Assets', 12, 'Non-Current Assets', 124, 'Intangibles'),
(26, 1, 'Assets', 12, 'Non-current Assets', 125, 'Pension and Retirement Plans'),
(27, 1, 'Assets', 12, 'Non-current Assets', 126, 'Deffered Tax Assets'),
(28, 1, 'Assets', 12, 'Non-current Assets', 127, 'Other Non-current Assets'),
(29, 2, 'Liablilities', 21, 'Current Liabilities', 211, 'Trade and Other Payables'),
(30, 2, 'Liabilities', 21, 'Current Liabilities', 212, 'Other Accounts Payables'),
(31, 2, 'Liabilities', 21, 'Current Liabilities', 213, 'Related Party Payables'),
(32, 2, 'Liabilities', 21, 'Current Liabilities', 214, 'Provisions'),
(33, 2, 'Liabilities', 21, 'Current Liabilities', 215, 'Loans Payable-Current Portion'),
(34, 2, 'Liabilities', 22, 'Non-current Liabilities', 221, 'Loans Payable-Non-current Portion'),
(35, 2, 'Liabilities', 22, 'Non-current Liabilities', 222, 'Pension Liabilities'),
(36, 2, 'Liabilities', 22, 'Non-current Liabilities', 223, 'Defferred Tax Liabilities'),
(37, 2, 'Liabilities', 22, 'Non-current Liabilities', 224, 'Other Non-current Liabilities'),
(38, 3, 'Equity', 30, 'Equity', 300, 'Equity'),
(39, 3, 'Equity', 31, 'Owner''s Capital', 310, 'Owners''s Capital'),
(40, 3, 'Equity', 32, 'Partner''s Capital', 320, 'Partner''s Capital'),
(41, 3, 'Equity', 33, 'Shareholder''s Equity', 330, 'Shareholder''s Equity'),
(42, 3, 'Equity', 34, 'Members'' Contribution', 340, 'Members'' Contribution'),
(43, 4, 'Revenues', 41, 'Sales', 410, 'Revenues'),
(44, 4, 'Revenues', 42, 'Receipts', 420, 'Receipts'),
(45, 4, 'Revenues', 43, 'Other Income', 430, 'Other Income'),
(46, 6, 'Operating Expenses', 60, 'Operating Expenses', 600, 'Operating Expenses');

-- --------------------------------------------------------

--
-- Table structure for table `account_name_coa`
--

DROP TABLE IF EXISTS `account_name_coa`;
CREATE TABLE `account_name_coa` (
  `account_name_id` int(11) NOT NULL,
  `account_code` int(11) NOT NULL,
  `account_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_name_coa`
--

INSERT INTO `account_name_coa` (`account_name_id`, `account_code`, `account_name`) VALUES
(1, 111000, 'Cash and Cash Equivalents'),
(2, 111100, 'Cash'),
(3, 111110, 'Petty Cash Fund'),
(4, 111120, 'Cash On Hand'),
(5, 111130, 'Revolving Fund'),
(6, 111140, 'Cash in Bank'),
(7, 111150, 'Cash Clearing Account'),
(8, 111200, 'Cash Equivalents'),
(9, 111210, 'Time Deposits (3mos to maturity)'),
(10, 112000, 'Short Term Investments'),
(11, 112100, 'Money Market Instruments'),
(12, 112200, 'Investment through Profit or Loss'),
(13, 113000, 'Tade and Other Receivables'),
(14, 113100, 'Accounts Receivable-Trade'),
(15, 113200, 'Allowance for Doubtful Accounts - Others'),
(16, 113300, 'Accounts Receivable - Others'),
(17, 113310, 'Accounts Receivable - Employees'),
(18, 113320, 'Cash Advances'),
(19, 113400, 'Allowance for Doubtful Accounts - Trade'),
(20, 113500, 'Accounts Receivables - Non-Trade'),
(21, 113600, 'Allowance for Doubtful Accounts- Non-Trade'),
(22, 113700, 'Accrued Income'),
(23, 113800, 'Related Party Receivables'),
(24, 114000, 'Inventories'),
(25, 114100, 'Merchandise Inventory'),
(26, 114200, 'Raw Materials Inventory'),
(27, 114300, 'Goods in Process Inventory'),
(28, 114400, 'Finished Goods Inventory'),
(29, 115000, 'Prepaid Expenses'),
(30, 115100, 'Prepaid Insurance'),
(31, 115200, 'Prepaid Rent'),
(32, 115300, 'Other Prepaid Expenses'),
(33, 116000, 'Other Current Assets'),
(34, 116100, 'Unused Supplies'),
(35, 116200, 'Deferred Charges'),
(36, 116210, 'Excess Prior Years Income Tax'),
(37, 116220, 'Excess Input VAT'),
(38, 121000, 'Property Plant and Equipment'),
(39, 121100, 'Land'),
(40, 121200, 'Buildings'),
(41, 121300, 'Equipment'),
(42, 121400, 'Furnitures & Fixtures'),
(43, 121900, 'Accumulated Depreciation'),
(44, 121910, 'Accumulated Depreciation-Building'),
(45, 121920, 'Accumulated Depreciation-Equipments'),
(46, 121930, 'Accumulated Depreciation-Furnitures & Fixtures'),
(47, 122000, 'Investment Properties'),
(48, 122100, 'Investment Properties-Land'),
(49, 122200, 'Investment Properties-Buildings'),
(50, 122900, 'Accumulated Impairments'),
(51, 122910, 'Accumulated Impairments-Land'),
(52, 122920, 'Accumulated Impairments-Building'),
(53, 123000, 'Investments'),
(54, 123100, 'Bonds'),
(55, 123200, 'Stocks'),
(56, 123300, 'Investment through Other Comprehensive Income'),
(57, 123400, 'Others Investments'),
(58, 124000, 'Intangibles'),
(59, 124100, 'Lease Rights'),
(60, 124200, 'Franchises'),
(61, 124300, 'Copyrights'),
(62, 124400, 'Trademarks'),
(63, 124500, 'Softwares'),
(64, 124600, 'Patents'),
(65, 124700, 'Goodwill'),
(66, 125000, 'Pension and Retirement Plans'),
(67, 125100, 'Retirement Plan Assets'),
(68, 125200, 'Pension ASsets'),
(69, 126000, 'Deferred Tax Assets'),
(70, 126100, 'Deferred Tax Assets-Temporary Differences'),
(71, 126200, 'Deferred Tax Assets-Excess MCIT over RCIT'),
(72, 126300, 'Deferred Tax Assets-NOLCO'),
(73, 127000, 'Other Non-Current Assets'),
(74, 127100, 'Held for Sale Inventory'),
(75, 127200, 'Miscellaneous Assets'),
(76, 2110000, 'Trade and Other Payables'),
(77, 211100, 'Accounts Payable-Trade'),
(78, 212000, 'Other Accounts Payables'),
(79, 212100, 'SSS EC PHIC HDMF Payable(Payroll Deductions)'),
(80, 212110, 'SSS & EC Payable'),
(81, 212130, 'PHIC Payable'),
(82, 212140, 'HDMF Payable'),
(83, 212120, 'SSS Loans Payable'),
(84, 212150, 'Pag-ibig Loans Payable'),
(85, 212000, 'Withholding Tax Payable'),
(86, 212210, 'Withholding Tax Payable - Compensation'),
(87, 212220, 'Withholding Tax Payable - Expanded'),
(88, 212230, 'Withholding Tax Payable-Final'),
(89, 212300, 'VAT Payable'),
(90, 212310, 'VAT Output Tax'),
(91, 212320, 'VAT Input Tax'),
(92, 212330, 'VAT Withheld'),
(93, 212400, 'Income Tax Payable'),
(94, 212410, 'Creditable Income Tax Withheld'),
(95, 212420, 'Quarterly Income Tax Paid'),
(96, 212430, 'Quarterly Minimum Corporate Income Tax Paid'),
(97, 212500, 'Accrued Expenses'),
(98, 213000, 'Related Party Payables'),
(99, 213100, 'Related Party Payables'),
(100, 214000, 'Provisions'),
(101, 214100, 'Specify Name'),
(102, 215000, 'Loans Payable-Current Portion'),
(103, 215100, 'Specify Name'),
(104, 215000, 'Loans Payable-Current Portion'),
(105, 215100, 'Specify Name'),
(106, 221000, 'Loans Payable- Non-current Portion'),
(107, 221100, 'Specify Name'),
(108, 222000, 'Pension Liabilities'),
(109, 222100, 'Retirement Plan Liabilities'),
(110, 222200, 'Pension Liabilities'),
(111, 223000, 'Deferred Tax Liabilities'),
(112, 223100, 'Deferred Tax Liabilities-Temporary Differences'),
(113, 224000, 'Other Non-Current Liabilities'),
(114, 224100, 'Specify Name'),
(115, 300000, 'Equity'),
(116, 310000, 'Capital'),
(117, 311000, 'Additional Capital'),
(118, 311200, 'Drawings'),
(119, 320000, 'Shareholders'' Equity'),
(120, 321100, 'Share Capital'),
(121, 321200, 'Subscription Receivables'),
(122, 321300, 'Treasury Stock'),
(123, 321400, 'Reserves'),
(124, 322100, 'Retained Earnings'),
(125, 323100, 'Prior Period Adjustments'),
(126, 330000, 'Members'' Equity'),
(127, 331000, 'Members'' Contributions'),
(128, 332100, 'General Fund'),
(129, 332200, 'Special Fund'),
(130, 334000, 'Excess of Receipts over Disbursements'),
(131, 350000, 'Net Profit or (Loss)'),
(132, 410000, 'Revenues'),
(133, 410000, 'Sales'),
(134, 411000, 'Sales'),
(135, 412000, 'Sales Returns and Allowances'),
(136, 413000, 'Sales Discounts'),
(137, 414000, 'SC PWD Discount'),
(138, 420000, 'Fees'),
(139, 420000, 'Service Fees'),
(140, 430000, 'Other Income'),
(141, 430100, 'Interset Income'),
(142, 430200, 'Gain or (Loss) on Sale of Equipments'),
(143, 430300, 'Gain or (Loss) on Sale of Stocks'),
(144, 430400, 'Investment Income'),
(145, 430500, 'Miscellaneous Income'),
(146, 430600, 'Guaranteed Income'),
(147, 430700, 'Other support/incentives'),
(148, 510000, 'Cost of Sales'),
(149, 510100, 'Merchandise Inventory, Begginning'),
(150, 510200, 'Purchases'),
(151, 510300, 'Purchases Returns and Allowances'),
(152, 510400, 'Purchase Discounts'),
(153, 510500, 'Freight In'),
(154, 510600, 'Merchandise inventory, End'),
(155, 510700, 'Casualty Loss'),
(156, 520000, 'Cost of Good Manufactured and Sold'),
(157, 521100, 'Raw Materials Beginning'),
(158, 521300, 'Finished Goods Beginning'),
(159, 522000, 'Purchases-Raw Materials'),
(160, 523000, 'Raw Materials Used'),
(161, 524100, 'Raw Materials End'),
(162, 524200, 'Work in Process Ending'),
(163, 524300, 'Finished Goods Ending'),
(164, 525000, 'Direct Labor'),
(165, 526000, 'Factory Overhead'),
(166, 526100, 'Factory Overhead-Indirect Labor'),
(167, 526200, 'Factory Overhead-Indirect Materials'),
(168, 600000, 'Expenses'),
(169, 600100, 'Advertising and Promotions'),
(170, 600101, 'Advertising'),
(171, 600102, 'Promotions'),
(172, 600200, 'Amortization and Promotions'),
(173, 600101, 'Advertising'),
(174, 600102, 'Promotions'),
(175, 600200, 'Amortization Expense'),
(176, 600201, 'Amortization - Lease rights'),
(177, 600202, 'Amortization - Franchises'),
(178, 600203, 'Amortization - Copyrights'),
(179, 600204, 'Amortization - Trademarks'),
(180, 6002005, 'Amortization - Softwares'),
(181, 600206, 'Amortization - Patents'),
(182, 600207, 'Amortization - Goodwill'),
(183, 600300, 'Bad Debts Expense'),
(184, 600301, 'Bad Debts Expense - Trade Receivables'),
(185, 600302, 'Bad Debts Expense- Non-trade Receivables'),
(186, 600303, 'Bad Debts Expense - Related Party Receivables'),
(187, 600400, 'Charitable Contributions'),
(188, 600500, 'Comissions'),
(189, 600600, 'Communication, Light and Water'),
(190, 600601, 'Communications'),
(191, 600602, 'Light'),
(192, 600603, 'Water'),
(193, 600604, 'CUSA'),
(194, 600700, 'Depletion Expense'),
(195, 600701, 'Depletion - Water assets'),
(196, 600702, 'Depletion - Wasting assets'),
(197, 600800, 'Depreciation Expense'),
(198, 600801, 'Depreciation expense - Land improvements'),
(199, 600802, 'Depreciation expense - Building Improvements'),
(200, 600803, 'Depreciation expense - Machineries and Equipments'),
(201, 600804, 'Depreciation expense - Furnitures'),
(202, 600805, 'Depreciation expense - Motor Vehicles'),
(203, 600900, 'Director''s Fees - Non-employees'),
(204, 601000, 'Fringe Benefits'),
(205, 601100, 'Fuel and Oil'),
(206, 601200, 'Insurance'),
(207, 601300, 'Interest Expense'),
(208, 601301, 'Interest on Loans'),
(209, 601302, 'Interest on Blank Deposits'),
(210, 601400, 'Janitorial and Messengerial Services'),
(211, 601500, 'Losses'),
(212, 601501, 'Investment Losses'),
(213, 601502, 'FOREX Loss'),
(214, 601503, 'Loss on Sale of Equipments'),
(215, 601504, 'Casualty Losses'),
(216, 601600, 'Management and Consultancy Fee'),
(217, 601700, 'Miscellaneous Expenses'),
(218, 601701, 'Bank Charges'),
(219, 601702, 'Dues and Subscription'),
(220, 601800, 'Supplies'),
(221, 601801, 'Office Supplies'),
(222, 601802, 'Shop Supplies'),
(223, 601803, 'Photocopy'),
(224, 601804, 'Drinking Water'),
(225, 601900, 'Other Services'),
(226, 602001, 'Professional Fees'),
(227, 602001, 'Legal Fees'),
(228, 602002, 'Audit Fees'),
(229, 602003, 'Other Professional Fees'),
(230, 602100, 'Rent Expense'),
(231, 602101, 'Rent Expense - Real Properties'),
(232, 602102, 'Rent Expense - Personal Properties'),
(233, 602103, 'Rent Expense - Billboard Ads'),
(234, 602200, 'Repairs & Maintenance-Labor'),
(235, 602201, 'Office Repairs & Maintenance-Labor'),
(236, 602202, 'Shop Repairs & Maintenance-Labor'),
(237, 602203, 'Vehicles Repairs & Maintenance-Labor'),
(238, 602204, 'Equipments Repairs & Maintenance-Labor '),
(239, 602300, 'Repairs & Maintenance-Materials'),
(240, 602301, 'Office Repairs & Maintenance-Materials'),
(241, 602302, 'Shop Repairs & Maintenance-Materials'),
(242, 602303, 'Vehicles Repairs & Maintenance-Materials'),
(243, 602304, 'Equipments Repairs & Maintenance-Materials'),
(244, 602400, 'Representation and Entertainment'),
(245, 602500, 'Research and Development'),
(246, 602600, 'Royalties'),
(247, 602700, 'Salaries and Wages'),
(248, 602701, 'Salaries and Wages'),
(249, 602702, 'Benefits and Allowances'),
(250, 602703, '13th Month Pay'),
(251, 602704, 'Incentives and Bonuses'),
(252, 602705, 'Honorarium'),
(253, 602706, 'Director''s Fees-Employee'),
(254, 602707, 'De Minimis Benefits'),
(255, 602800, 'Security Services'),
(256, 602900, 'SSS PHHIC HDDMF and Other Contrions'),
(257, 602901, 'SSS EC Contributions'),
(258, 602902, 'PHIC Contributions'),
(259, 602903, 'HDMF Contributions'),
(260, 602904, 'Other Contributions'),
(261, 603000, 'Taxes and Licenses'),
(262, 603001, 'Taxes and Licenses-BIR'),
(263, 603002, 'Taxes and Licenses-LGU'),
(264, 603100, 'Tolling Fees'),
(265, 603200, 'Trainings and Seminars'),
(266, 603300, 'Transportaion and Travel'),
(267, 603400, 'Other Expenses(Specify)'),
(268, 603401, 'Illegal Acts'),
(269, 603402, 'Fines and Penalties'),
(270, 603500, 'Provision for Bad Debts'),
(271, 605000, 'Miscellaneous Provisions');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

DROP TABLE IF EXISTS `banks`;
CREATE TABLE `banks` (
  `bank_id` int(255) NOT NULL,
  `bank_code` int(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `bank_shortname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`bank_id`, `bank_code`, `bank_name`, `bank_shortname`) VALUES
(1, 2, 'Discount', 'Disc'),
(2, 2, 'Allied Bank', 'B'),
(3, 3, 'Bank of the Philippine Islands', 'BPI'),
(4, 4, 'Banco De Oro', 'BDO'),
(5, 1, 'Various', 'VV'),
(6, 5, 'Rang-ay Bank', 'RB');

-- --------------------------------------------------------

--
-- Table structure for table `bank_details`
--

DROP TABLE IF EXISTS `bank_details`;
CREATE TABLE `bank_details` (
  `bank_details_id` int(11) NOT NULL,
  `trans_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `cb_bank_id` int(11) NOT NULL,
  `bank_document` int(11) NOT NULL,
  `bank_amt` int(11) NOT NULL,
  `bank_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bir`
--

DROP TABLE IF EXISTS `bir`;
CREATE TABLE `bir` (
  `bir_id` int(255) NOT NULL,
  `bir_code` int(255) NOT NULL,
  `bir_acc_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bir`
--

INSERT INTO `bir` (`bir_id`, `bir_code`, `bir_acc_name`) VALUES
(1, 1101, 'Cash On Hand'),
(2, 1102, 'Cash On Bank'),
(3, 1103, 'Cash Equivalents'),
(4, 1104, 'Marketable Securities'),
(5, 1105, 'Trading Securities'),
(6, 1107, 'Trade Receivables'),
(7, 1108, 'Non-trade Receivables'),
(8, 1109, 'Non-trade Receivables'),
(9, 1110, 'Merchandising'),
(10, 1111, 'Manufacturing'),
(11, 1112, 'Prepaid Insurance'),
(12, 1113, 'Prepaid Rent'),
(13, 115, 'Other Prepaid Expenses'),
(14, 1116, 'Unused Supplies Inventory'),
(15, 1117, 'Defferred Charges'),
(16, 1201, 'Cost of PPE'),
(17, 1202, 'Accumulated Depreciation'),
(18, 1203, 'Cost of Investment Properties'),
(19, 1204, 'Accumulated Impairments'),
(20, 1205, 'Investment in Securites'),
(21, 1208, 'Lease Rights'),
(22, 1209, 'Franchises'),
(23, 1210, 'Copyrights'),
(24, 1211, 'Trademarks'),
(25, 1212, 'Softwares'),
(26, 1213, 'Patents'),
(27, 1214, 'Goodwill'),
(28, 1216, 'Retirement Plan Assets'),
(29, 1217, 'Pension Assets'),
(30, 1218, 'Deferred Tax Assets-Temporary Differences'),
(31, 1219, 'Deferred Tax Assets-Excess MCIT over RCIT'),
(32, 1220, 'Deferred Tax Assets-NOLCO'),
(33, 1221, 'Held for Sale Inventory'),
(34, 1222, 'Miscellaneous Assets'),
(35, 2101, 'Trade Payables'),
(36, 2102, 'Non-Trade Payables'),
(37, 2110, 'Related Party Payables'),
(38, 2120, 'Provisions'),
(39, 2130, 'Loans Payable-Current Portion'),
(40, 2201, 'Loans Payable-Non-current Portion'),
(41, 2210, 'Retirement Plan Liabilities'),
(42, 2211, 'Pension Liabilities'),
(43, 2220, 'Deferred Tax Liabilities-Temporary Differences'),
(44, 2230, 'Deferred Tax Liabilities-Temporary Differences'),
(45, 3100, 'Equity'),
(46, 4100, 'Revenue'),
(47, 4201, 'Interest Income'),
(48, 4202, 'Gain or (Loss) on Sale of Equipments'),
(49, 4203, 'Gain or (Loss) on Sale of Stocks'),
(50, 4204, 'Investment Income'),
(51, 4205, 'Miscellaneous Income'),
(52, 5101, 'Merchandise Inventory, Beginning'),
(53, 5102, 'Net Purchases'),
(54, 5103, 'Merchandise inventory, End'),
(55, 5104, 'Casualty Loss'),
(56, 5200, 'Manufacturing'),
(57, 6000, 'Advertising and Promotions'),
(58, 6001, 'Advertising and Promotions'),
(59, 6002, 'Amortization Specify'),
(60, 6003, 'Bad Debts'),
(61, 6004, 'Charitable Contributions'),
(62, 6005, 'Commissions'),
(63, 6006, 'Communication, Light and Water'),
(64, 6007, 'Depletion'),
(65, 6008, 'Deprecation'),
(66, 6009, 'Director''s Fees'),
(67, 6010, 'Fringe Benefits'),
(68, 6011, 'Fuel and Oil'),
(69, 6012, 'Insurance'),
(70, 6013, 'Interest'),
(71, 6014, 'Janitorial and Messengerial Services'),
(72, 6015, 'Losses'),
(73, 6016, 'Management and Consultancy Free'),
(74, 6017, 'Miscellaneous'),
(75, 6018, 'Supplies'),
(76, 6019, 'Other Services'),
(77, 6020, 'Professional Fees'),
(78, 6021, 'Rental'),
(79, 6022, 'Repairs and Maintenance-Labor'),
(80, 6023, 'Repairs and Maintenance-Materials'),
(81, 6024, 'Representation and Entertainment'),
(82, 6025, 'Research and Development'),
(83, 6026, 'Royalties'),
(84, 6027, 'Salaries and Allowances'),
(85, 6028, 'Security and Services'),
(86, 6029, 'SSS PHIC HDMF and Other Contributions'),
(87, 6030, 'Taxes and Licenses'),
(88, 6031, 'Tolling Fees'),
(89, 6032, 'Trainings and Seminars'),
(90, 6033, 'Transportaion and Travel'),
(91, 6034, 'Other Expenses (specify)'),
(92, 6035, 'Provision for Bad Debts'),
(93, 6050, 'Miscellaneous Provisions');

-- --------------------------------------------------------

--
-- Table structure for table `bp_type`
--

DROP TABLE IF EXISTS `bp_type`;
CREATE TABLE `bp_type` (
  `bp_type_id` int(255) NOT NULL,
  `bp_type_code` int(255) NOT NULL,
  `bp_type_name` varchar(255) NOT NULL,
  `bp_type_shortname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bp_type`
--

INSERT INTO `bp_type` (`bp_type_id`, `bp_type_code`, `bp_type_name`, `bp_type_shortname`) VALUES
(1, 1, 'Individual', 'IND'),
(2, 2, 'Non-Individual', 'CO'),
(3, 3, 'Government', 'GOV');

-- --------------------------------------------------------

--
-- Table structure for table `business_partners`
--

DROP TABLE IF EXISTS `business_partners`;
CREATE TABLE `business_partners` (
  `co_id` int(255) NOT NULL,
  `bp_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chart_of_accounts`
--

DROP TABLE IF EXISTS `chart_of_accounts`;
CREATE TABLE `chart_of_accounts` (
  `acc_id` int(255) NOT NULL,
  `acc_name_id` int(255) NOT NULL,
  `lvel1_code_id` int(11) NOT NULL,
  `level2_code_id` int(11) NOT NULL,
  `level3_code_id` int(11) NOT NULL,
  `bir_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_bank`
--

DROP TABLE IF EXISTS `company_bank`;
CREATE TABLE `company_bank` (
  `cb_bank_id` int(255) NOT NULL,
  `bank_acct_code` int(255) NOT NULL,
  `co_id` int(255) NOT NULL,
  `bank_id` int(255) NOT NULL,
  `seq` int(255) NOT NULL,
  `bank_acct_num` int(255) NOT NULL,
  `bank_acct_class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_branches`
--

DROP TABLE IF EXISTS `company_branches`;
CREATE TABLE `company_branches` (
  `co_id` int(255) NOT NULL,
  `co_seq` int(11) DEFAULT NULL,
  `co_class` varchar(255) NOT NULL,
  `co_name` varchar(255) NOT NULL,
  `co_ind_name` varchar(255) NOT NULL,
  `co_address` varchar(255) NOT NULL,
  `co_tin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_branches`
--

INSERT INTO `company_branches` (`co_id`, `co_seq`, `co_class`, `co_name`, `co_ind_name`, `co_address`, `co_tin`) VALUES
(1, 1, '', '', '', '', 0),
(2, NULL, '', '', '', '', 0),
(3, NULL, '', '', '', '', 0),
(4, NULL, '', '', '', '', 0),
(5, NULL, '', '', '', '', 0),
(6, NULL, '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `company_coa`
--

DROP TABLE IF EXISTS `company_coa`;
CREATE TABLE `company_coa` (
  `co_id` int(255) NOT NULL,
  `acc_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_disc`
--

DROP TABLE IF EXISTS `company_disc`;
CREATE TABLE `company_disc` (
  `co_id` int(255) NOT NULL,
  `disc_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_doc`
--

DROP TABLE IF EXISTS `company_doc`;
CREATE TABLE `company_doc` (
  `co_id` int(255) NOT NULL,
  `doc_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_mod_of_payment`
--

DROP TABLE IF EXISTS `company_mod_of_payment`;
CREATE TABLE `company_mod_of_payment` (
  `co_id` int(255) NOT NULL,
  `pay_mode_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_profile`
--

DROP TABLE IF EXISTS `company_profile`;
CREATE TABLE `company_profile` (
  `profile_id` int(255) NOT NULL,
  `co_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_profile`
--

INSERT INTO `company_profile` (`profile_id`, `co_id`) VALUES
(1, 1),
(1, 1),
(3, 0),
(4, 0),
(5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `company_tax`
--

DROP TABLE IF EXISTS `company_tax`;
CREATE TABLE `company_tax` (
  `co_id` int(255) NOT NULL,
  `tax_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE `departments` (
  `dept_id` int(255) NOT NULL,
  `dept_code` int(255) NOT NULL,
  `seq` int(255) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `dept_shortname` varchar(255) NOT NULL,
  `co_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

DROP TABLE IF EXISTS `discounts`;
CREATE TABLE `discounts` (
  `disc_id` int(255) NOT NULL,
  `disc_code` int(255) NOT NULL,
  `disc_name` varchar(255) NOT NULL,
  `disc_shortname` varchar(255) NOT NULL,
  `journ_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`disc_id`, `disc_code`, `disc_name`, `disc_shortname`, `journ_id`) VALUES
(1, 2, 'Discount', 'Disc', 0),
(2, 3, 'Discount', 'Disc', 0);

-- --------------------------------------------------------

--
-- Table structure for table `discounts_detail`
--

DROP TABLE IF EXISTS `discounts_detail`;
CREATE TABLE `discounts_detail` (
  `discount_detail_id` int(11) NOT NULL,
  `trans_id` int(11) NOT NULL,
  `disc_id` int(11) NOT NULL,
  `deduction_code` int(11) NOT NULL,
  `deduction` int(11) NOT NULL,
  `sc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
CREATE TABLE `documents` (
  `doc_id` int(255) NOT NULL,
  `doc_code` int(255) NOT NULL,
  `doc_seq` int(255) NOT NULL,
  `doc_class` varchar(255) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `doc_shortname` varchar(255) NOT NULL,
  `doc_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `journ_id` int(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`doc_id`, `doc_code`, `doc_seq`, `doc_class`, `doc_name`, `doc_shortname`, `doc_date`, `journ_id`, `date`) VALUES
(1, 312, 1, 'Class', '', '', '2016-05-03 05:14:43', 5, '2016-05-02'),
(2, 312, 0, 'Class', '', '', '2016-05-03 05:14:23', 2, '0000-00-00'),
(3, 3125, 0, 'Class', 'Document', 'Doc', '2016-05-03 04:23:50', 3, '0000-00-00'),
(4, 31256, 0, 'Class', 'Document', 'Doc', '2016-05-03 05:12:06', 0, '0000-00-00'),
(5, 312, 0, 'Class', 'asd', '', '2016-05-05 03:20:11', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `document_reference`
--

DROP TABLE IF EXISTS `document_reference`;
CREATE TABLE `document_reference` (
  `doc_ref_id` int(11) NOT NULL,
  `trans_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `gross_amt` int(11) NOT NULL,
  `net_invoice_amt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ewt_details`
--

DROP TABLE IF EXISTS `ewt_details`;
CREATE TABLE `ewt_details` (
  `ewt_details_id` int(11) NOT NULL,
  `trans_id` int(11) NOT NULL,
  `tax_id` int(11) NOT NULL,
  `tax_withheld` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fwt_details`
--

DROP TABLE IF EXISTS `fwt_details`;
CREATE TABLE `fwt_details` (
  `fwt_details_id` int(11) NOT NULL,
  `trans_id` int(11) NOT NULL,
  `tax_id` int(11) NOT NULL,
  `tax_withheld` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

DROP TABLE IF EXISTS `journals`;
CREATE TABLE `journals` (
  `journ_id` int(255) NOT NULL,
  `journ_code` int(255) NOT NULL,
  `journ_name` varchar(255) NOT NULL,
  `journ_shortname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journals`
--

INSERT INTO `journals` (`journ_id`, `journ_code`, `journ_name`, `journ_shortname`) VALUES
(1, 1, 'Others', 'Others'),
(2, 2, 'Collections', 'CRJ'),
(3, 3, 'Disbursements', 'CDJ'),
(4, 4, 'Purchases', 'PJ'),
(5, 5, 'Recceipts', 'RJ'),
(6, 6, 'Sales', 'SJ'),
(7, 7, 'Specials', 'S'),
(8, 8, 'General Journal', 'GJ');

-- --------------------------------------------------------

--
-- Table structure for table `level1_code_category`
--

DROP TABLE IF EXISTS `level1_code_category`;
CREATE TABLE `level1_code_category` (
  `level1_code_id` int(11) NOT NULL,
  `level1_code` int(11) NOT NULL,
  `level1_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `level2_code_category`
--

DROP TABLE IF EXISTS `level2_code_category`;
CREATE TABLE `level2_code_category` (
  `level2_code_id` int(11) NOT NULL,
  `level2_code` int(11) NOT NULL,
  `level2_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `level3_code_category`
--

DROP TABLE IF EXISTS `level3_code_category`;
CREATE TABLE `level3_code_category` (
  `level3_code_id` int(11) NOT NULL,
  `level3_code` int(11) NOT NULL,
  `level3_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mod_of_payment`
--

DROP TABLE IF EXISTS `mod_of_payment`;
CREATE TABLE `mod_of_payment` (
  `pay_mode_id` int(11) NOT NULL,
  `pay_mode_seq` int(11) DEFAULT NULL,
  `pay_mod_name` varchar(255) NOT NULL,
  `pay_mod_shortname` varchar(255) NOT NULL,
  `pay_type_code` varchar(255) NOT NULL,
  `pay_code` int(11) NOT NULL,
  `pay_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mod_of_payment`
--

INSERT INTO `mod_of_payment` (`pay_mode_id`, `pay_mode_seq`, `pay_mod_name`, `pay_mod_shortname`, `pay_type_code`, `pay_code`, `pay_type`) VALUES
(1, 0, 'Petty Cash Fund', 'PCF', '1', 1, 'Cash'),
(2, 0, 'Cash', 'C', 'CS', 1, 'Cash'),
(3, 0, 'Check', 'CK', 'CS', 1, 'Cash'),
(4, 0, 'Auto Debit', 'AD', 'CS', 1, 'Cash'),
(5, 0, 'Auto Credit', 'AC', 'CS', 1, 'Cash'),
(6, 0, 'Bank Transfer', 'BT', 'CS', 1, 'Cash'),
(7, 0, 'Credit Card', 'CC', 'OA', 2, 'Credit'),
(8, 0, 'Petty Cash Fund', 'PCF', 'CS', 1, 'Cash'),
(9, 0, 'Cash', 'C', 'CS', 1, 'Cash'),
(10, 0, 'Check', 'CK', 'CS', 1, 'Cash'),
(11, 0, 'Auto Debit', 'AD', 'CS', 1, 'Cash'),
(12, 0, 'Auto Credit', 'AC', 'CS', 1, 'Cash'),
(13, 0, 'Bank Transfer', 'BT', 'CS', 1, 'Cash'),
(14, 0, 'Credit Card', 'CC', 'OA', 2, 'Credit'),
(15, NULL, 'Petty Cash Fund', 'PCF', '1', 0, 'Credit'),
(16, NULL, 'Name', 'Shortname', '1', 0, 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

DROP TABLE IF EXISTS `other`;
CREATE TABLE `other` (
  `others_id` int(255) NOT NULL,
  `other_desc` varchar(255) NOT NULL,
  `co_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `other_details`
--

DROP TABLE IF EXISTS `other_details`;
CREATE TABLE `other_details` (
  `other_details_id` int(11) NOT NULL,
  `prepared_by` varchar(255) NOT NULL,
  `verified_by` varchar(255) NOT NULL,
  `approved_by` varchar(255) NOT NULL,
  `received_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `prod_id` int(255) NOT NULL,
  `prod_code` int(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_shortname` varchar(255) NOT NULL,
  `dept_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE `profile` (
  `profile_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `cnum` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profile_id`, `fname`, `mname`, `lname`, `address`, `cnum`, `email`) VALUES
(1, 'bonifacio', 'bayani', 'ugnasi', 'baguio city', 9103277796, 'bonifacio@sample.com'),
(2, 'ronald', 'ali', 'desiderio', 'la trinidad', 9194893989, 'ronald@sample.com'),
(3, 'Fernando', 'P', 'Fernando', 'Baguio City', 900000, 'Fernan'),
(4, '', '', '', '', 0, ''),
(5, '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `serv_id` int(255) NOT NULL,
  `serv_code` int(255) NOT NULL,
  `seq` int(255) NOT NULL,
  `serv_name` varchar(255) NOT NULL,
  `serv_shortname` varchar(255) NOT NULL,
  `dept_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

DROP TABLE IF EXISTS `taxes`;
CREATE TABLE `taxes` (
  `tax_id` int(255) NOT NULL,
  `tax_code` int(255) NOT NULL,
  `tax_type` varchar(255) NOT NULL,
  `tax_type_shortname` varchar(255) NOT NULL,
  `tax_seq` int(255) NOT NULL,
  `tax_name` varchar(255) NOT NULL,
  `tax_shortname` varchar(255) NOT NULL,
  `tax_rate` int(255) NOT NULL,
  `tax_base` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taxes`
--

INSERT INTO `taxes` (`tax_id`, `tax_code`, `tax_type`, `tax_type_shortname`, `tax_seq`, `tax_name`, `tax_shortname`, `tax_rate`, `tax_base`) VALUES
(1, 2, '', 'FWT', 0, 'Name', 'Shortname', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE `transaction` (
  `trans_id` int(255) NOT NULL,
  `trans_code` varchar(255) NOT NULL,
  `trans_date` date NOT NULL,
  `journ_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `acc_id` int(11) NOT NULL,
  `particulars` varchar(255) NOT NULL,
  `pay_mode_id` int(11) NOT NULL,
  `gross_amt` int(11) NOT NULL,
  `net_amt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_id` int(255) NOT NULL,
  `user_type` enum('super_admin','company_admin','branch_admin','user') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `profile_id`, `user_type`) VALUES
(1, 'super_admin', 'super_admin', 1, 'super_admin'),
(2, 'user', 'user', 2, 'user'),
(3, 'Fern', 'Fern', 3, 'user'),
(4, '', '', 4, 'user'),
(5, '', '', 5, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `vat_details`
--

DROP TABLE IF EXISTS `vat_details`;
CREATE TABLE `vat_details` (
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
-- Indexes for table `account_category`
--
ALTER TABLE `account_category`
  ADD PRIMARY KEY (`acc_cat_id`);

--
-- Indexes for table `account_name_coa`
--
ALTER TABLE `account_name_coa`
  ADD PRIMARY KEY (`account_name_id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD PRIMARY KEY (`bank_details_id`);

--
-- Indexes for table `bir`
--
ALTER TABLE `bir`
  ADD PRIMARY KEY (`bir_id`);

--
-- Indexes for table `bp_type`
--
ALTER TABLE `bp_type`
  ADD PRIMARY KEY (`bp_type_id`);

--
-- Indexes for table `chart_of_accounts`
--
ALTER TABLE `chart_of_accounts`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `company_bank`
--
ALTER TABLE `company_bank`
  ADD PRIMARY KEY (`cb_bank_id`);

--
-- Indexes for table `company_branches`
--
ALTER TABLE `company_branches`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`disc_id`);

--
-- Indexes for table `discounts_detail`
--
ALTER TABLE `discounts_detail`
  ADD PRIMARY KEY (`discount_detail_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `document_reference`
--
ALTER TABLE `document_reference`
  ADD PRIMARY KEY (`doc_ref_id`);

--
-- Indexes for table `ewt_details`
--
ALTER TABLE `ewt_details`
  ADD PRIMARY KEY (`ewt_details_id`);

--
-- Indexes for table `fwt_details`
--
ALTER TABLE `fwt_details`
  ADD PRIMARY KEY (`fwt_details_id`);

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`journ_id`);

--
-- Indexes for table `level1_code_category`
--
ALTER TABLE `level1_code_category`
  ADD PRIMARY KEY (`level1_code_id`);

--
-- Indexes for table `level2_code_category`
--
ALTER TABLE `level2_code_category`
  ADD PRIMARY KEY (`level2_code_id`);

--
-- Indexes for table `level3_code_category`
--
ALTER TABLE `level3_code_category`
  ADD PRIMARY KEY (`level3_code_id`);

--
-- Indexes for table `mod_of_payment`
--
ALTER TABLE `mod_of_payment`
  ADD PRIMARY KEY (`pay_mode_id`);

--
-- Indexes for table `other`
--
ALTER TABLE `other`
  ADD PRIMARY KEY (`others_id`);

--
-- Indexes for table `other_details`
--
ALTER TABLE `other_details`
  ADD PRIMARY KEY (`other_details_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serv_id`);

--
-- Indexes for table `taxes`
--
ALTER TABLE `taxes`
  ADD PRIMARY KEY (`tax_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`trans_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vat_details`
--
ALTER TABLE `vat_details`
  ADD PRIMARY KEY (`vat_details_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_category`
--
ALTER TABLE `account_category`
  MODIFY `acc_cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `account_name_coa`
--
ALTER TABLE `account_name_coa`
  MODIFY `account_name_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=272;
--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `bank_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `bank_details`
--
ALTER TABLE `bank_details`
  MODIFY `bank_details_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bir`
--
ALTER TABLE `bir`
  MODIFY `bir_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `bp_type`
--
ALTER TABLE `bp_type`
  MODIFY `bp_type_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `chart_of_accounts`
--
ALTER TABLE `chart_of_accounts`
  MODIFY `acc_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company_bank`
--
ALTER TABLE `company_bank`
  MODIFY `cb_bank_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company_branches`
--
ALTER TABLE `company_branches`
  MODIFY `co_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dept_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `disc_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `discounts_detail`
--
ALTER TABLE `discounts_detail`
  MODIFY `discount_detail_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `doc_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `document_reference`
--
ALTER TABLE `document_reference`
  MODIFY `doc_ref_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ewt_details`
--
ALTER TABLE `ewt_details`
  MODIFY `ewt_details_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fwt_details`
--
ALTER TABLE `fwt_details`
  MODIFY `fwt_details_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `journals`
--
ALTER TABLE `journals`
  MODIFY `journ_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `level1_code_category`
--
ALTER TABLE `level1_code_category`
  MODIFY `level1_code_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `level2_code_category`
--
ALTER TABLE `level2_code_category`
  MODIFY `level2_code_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `level3_code_category`
--
ALTER TABLE `level3_code_category`
  MODIFY `level3_code_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mod_of_payment`
--
ALTER TABLE `mod_of_payment`
  MODIFY `pay_mode_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `other`
--
ALTER TABLE `other`
  MODIFY `others_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `other_details`
--
ALTER TABLE `other_details`
  MODIFY `other_details_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serv_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `taxes`
--
ALTER TABLE `taxes`
  MODIFY `tax_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `trans_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `vat_details`
--
ALTER TABLE `vat_details`
  MODIFY `vat_details_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
