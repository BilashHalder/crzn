-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 13, 2022 at 09:14 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creazione_crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `phone`, `email`, `image`, `pass`, `status`) VALUES
(1, 'Avishek Maity', '9073191111', 'avishek.maity@creazione.in', '', '827ccb0eea8a706c4c34a16891f84e7b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `agreement`
--

DROP TABLE IF EXISTS `agreement`;
CREATE TABLE IF NOT EXISTS `agreement` (
  `agreement_id` int(11) NOT NULL AUTO_INCREMENT,
  `invesment_id` int(11) NOT NULL,
  `upload_on` datetime DEFAULT CURRENT_TIMESTAMP,
  `file_url` varchar(100) NOT NULL,
  PRIMARY KEY (`agreement_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agreement`
--

INSERT INTO `agreement` (`agreement_id`, `invesment_id`, `upload_on`, `file_url`) VALUES
(1, 0, NULL, 'TestFile.pdf'),
(2, 1, '2022-09-10 13:13:53', '8c3df6dd5373fb7f76ac36217f6507e3#_#1662795833026.pdf'),
(3, 1, '2022-09-10 13:14:08', '8c3df6dd5373fb7f76ac36217f6507e3#_#1662795848633.pdf'),
(4, 1, '2022-09-10 13:20:50', '8c3df6dd5373fb7f76ac36217f6507e3#_#1662796250225.pdf'),
(5, 17, '2022-09-10 13:21:00', '8c3df6dd5373fb7f76ac36217f6507e3#_#1662796260283.pdf'),
(6, 17, '2022-09-10 13:23:59', '8c3df6dd5373fb7f76ac36217f6507e3#_#1662796439838.pdf'),
(7, 17, '2022-09-10 13:24:54', '8c3df6dd5373fb7f76ac36217f6507e3#_#1662796494888.pdf'),
(8, 70, '2022-09-10 13:25:38', '8c3df6dd5373fb7f76ac36217f6507e3#_#1662796538566.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `associate`
--

DROP TABLE IF EXISTS `associate`;
CREATE TABLE IF NOT EXISTS `associate` (
  `associate_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `gender` tinyint(4) NOT NULL COMMENT '0-male 1-female 2-others',
  `email` varchar(80) NOT NULL,
  `commission_rate` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL COMMENT '0-admin anyid-employee id',
  `phone` varchar(15) NOT NULL,
  `balance` double NOT NULL DEFAULT '0',
  `document_id` int(11) DEFAULT NULL,
  `pass` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1-active 0-not active',
  PRIMARY KEY (`associate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `associate`
--

INSERT INTO `associate` (`associate_id`, `name`, `gender`, `email`, `commission_rate`, `employee_id`, `phone`, `balance`, `document_id`, `pass`, `image`, `status`) VALUES
(9, 'supriya mondal', 0, 'rahul@gmail.com', 1, NULL, '9647157187', 0, NULL, '$2b$10$WQ8qziKncRhTNVoldag51Om0nzbuZUN7E7Jy2fff7ccDO7dHWxtee', '2ecf6cad2010d0402807802f0311fc8a__1663315731732.jpg', 1),
(10, 'Bilash Halder', 1, 'rahul@gmail.com', 5, 11, '9999888777', 0, NULL, '$2b$10$OMkQ23tt4y.NHr80oaY1PuysUE5VSwFVj2yK57FtxBpqX.OXdpxtS', '736ec0d93068fe61207fccff789a7e2e__1663397820351.jpg', 1),
(11, 'Lorem User', 2, 'nidobe3103@otodir.com', 1, 11, '87654331331', 51992726, 8, '827ccb0eea8a706c4c34a16891f84e7b', 'cefa85e42df01102fc84.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bank_account`
--

DROP TABLE IF EXISTS `bank_account`;
CREATE TABLE IF NOT EXISTS `bank_account` (
  `account_no` varchar(40) NOT NULL,
  `ifsc_code` varchar(40) NOT NULL,
  `branch` varchar(100) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` int(11) NOT NULL COMMENT '1-customer 2- associate 3-employee',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  UNIQUE KEY `account_no` (`account_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank_account`
--

INSERT INTO `bank_account` (`account_no`, `ifsc_code`, `branch`, `user_id`, `user_type`, `status`) VALUES
('123456', 'IFSC00001', 'America', 25, 1, 1),
('12345644', 'IFSC00', 'America New Branch', 25, 1, 1),
('12345678', 'IFSC1111', 'TEST TTSTSTTS', 28, 1, 1),
('2662626262', 'jaskjasjasjajs', NULL, 27, 1, 1),
('3535353535353', 'KKKAKAKAAKKA', NULL, 11, 2, 2),
('42327272727', 'UUAUUAUAU', NULL, 27, 1, 1),
('4545454563633', 'IGSGGSHHS', 'Mananan', 25, 1, 1),
('454554546', 'IFSC9929', 'Kolkata', 12, 1, 1),
('45455454633', 'IFSC9292929', 'Kolkata', 12, 1, 1),
('5363638282', 'UUAUUAUAU', NULL, 11, 2, 2),
('7277272727272', 'IIIIIIIIIIIIIIIIIPPPPPPPPPPPPPP', NULL, 11, 2, 1),
('90101001010', 'IGSGGSHHS', 'Mananan', 12, 1, 1),
('aaaaa', 'qmqmqm', NULL, 27, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `gender` tinyint(4) NOT NULL COMMENT '0-male 1-female 2-others',
  `email` varchar(80) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `balance` double NOT NULL DEFAULT '0',
  `document_id` int(11) DEFAULT NULL,
  `referred_by` varchar(20) DEFAULT NULL,
  `pass` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1-active 0-not active',
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `gender`, `email`, `phone`, `balance`, `document_id`, `referred_by`, `pass`, `image`, `status`) VALUES
(22, 'shaoli pandey', 0, 'rahul@gmail.com', '9647157187', 0, NULL, 'CRZNEMP25', '827ccb0eea8a706c4c34a16891f84e7b', 'avatar-1.png', 1),
(23, 'NILOTPAL PRASAD', 0, 'avishek.creazioneservices@gmail.com', '9073191111', 0, NULL, 'CRZNEMP25', '827ccb0eea8a706c4c34a16891f84e7b', 'avatar-2.png', 1),
(24, 'Bilash Halder', 0, 'nidobe3103@otodir.com', '9876543210', 0, NULL, '25', '827ccb0eea8a706c4c34a16891f84e7b', 'avatar-3.png', 1),
(25, 'Lorem User', 1, 'rahul@gmail.com', '9876090987', 0, 2, 'CRZNAST0001', '827ccb0eea8a706c4c34a16891f84e7b', 'avatar-4.png', 1),
(26, 'Lorem User', 1, 'lorem@user.com', '1234567890', 0, NULL, 'ADMIN', '827ccb0eea8a706c4c34a16891f84e7b', '5b9f84fb9e69b7b5959d.png', 1),
(27, 'Sample User', 1, 'sample@user.com', '9988776655', 0, NULL, 'ADMIN', '827ccb0eea8a706c4c34a16891f84e7b', 'f526a4ea245489c45a1e.jpg', 1),
(28, 'My Customer', 2, 'mycustomer@gmail.com', '117717171', 0, 5, 'CRZNEMP0018', '827ccb0eea8a706c4c34a16891f84e7b', 'a08b6fa1eea5c8b7cf63.png', 1),
(29, 'My Demo Customer', 2, 'my@my.com', '1298765432', 0, NULL, 'CRZNAST0011', '827ccb0eea8a706c4c34a16891f84e7b', 'a4a0a3d07d989abf9fbd.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

DROP TABLE IF EXISTS `designation`;
CREATE TABLE IF NOT EXISTS `designation` (
  `designation_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  PRIMARY KEY (`designation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designation_id`, `title`) VALUES
(20, 'Relationship Executive'),
(21, 'Relationship Manager'),
(22, 'Web Developer'),
(23, 'Web Designer ');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

DROP TABLE IF EXISTS `document`;
CREATE TABLE IF NOT EXISTS `document` (
  `document_id` int(11) NOT NULL AUTO_INCREMENT,
  `adhar_no` varchar(20) NOT NULL,
  `pan_no` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `adhar_verified` tinyint(1) NOT NULL,
  `pan_verified` tinyint(1) NOT NULL,
  PRIMARY KEY (`document_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`document_id`, `adhar_no`, `pan_no`, `address`, `adhar_verified`, `pan_verified`) VALUES
(1, '88282828282', 'ACD123456', 'DN 36, Collegemore, 36, Street Number 13, DN Block, Sector V, Bidhannagar, Kolkata, West Bengal 700091\n', 1, 1),
(2, '124343434343434', 'ADADDA111', 'Kolkataaaa', 1, 1),
(3, '5454474792992', 'ISPPS536W', 'DN 36, Collegemore, 36, Street Number 13, DN Block, Sector V, Bidhannagar, Kolkata, West Bengal 700091', 1, 1),
(4, '5454474792992', 'ISPPS536W', 'DN 36, Collegemore, 36, Street Number 13, DN Block, Sector V, Bidhannagar, Kolkata, West Bengal 700091', 1, 1),
(5, '12345556667771', 'NEWPAN12E', 'DN 36, Collegemore, 36, Street Number 13, DN Block, Sector V, Bidhannagar, Kolkata, West Bengal 700091', 1, 1),
(6, '123456789876', 'AIHJOP23', 'Test Address', 1, 1),
(7, '111111', 'kkakak', 'akakakka', 1, 1),
(8, '1222929', 'kskskskk', 'ksksksks', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `gender` tinyint(4) NOT NULL COMMENT '0-male 1-female 2-others',
  `email` varchar(80) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `balance` double NOT NULL DEFAULT '0',
  `document_id` int(11) DEFAULT NULL,
  `pass` varchar(100) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1-active 0-not active',
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `name`, `gender`, `email`, `phone`, `balance`, `document_id`, `pass`, `image`, `status`) VALUES
(18, 'Lorem User', 1, 'ibilashhalder@gmail.com', '87654331331', 0, NULL, '827ccb0eea8a706c4c34a16891f84e7b', 'eff9b2051ad84bdd4096.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

DROP TABLE IF EXISTS `employee_info`;
CREATE TABLE IF NOT EXISTS `employee_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `salary_id` int(11) NOT NULL,
  `leave_id` int(11) DEFAULT NULL,
  `dob` date NOT NULL,
  `report_to` int(11) DEFAULT NULL,
  `joining_date` date NOT NULL,
  `acceptance_file` varchar(100) DEFAULT NULL,
  `id_card` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`id`, `employee_id`, `designation_id`, `salary_id`, `leave_id`, `dob`, `report_to`, `joining_date`, `acceptance_file`, `id_card`) VALUES
(1, 7, 4, 4, 1, '2022-08-30', NULL, '2022-09-28', NULL, 0),
(2, 8, 4, 5, 1, '2022-09-28', NULL, '2022-09-20', NULL, 0),
(3, 9, 4, 6, 1, '1994-11-08', NULL, '2022-11-11', NULL, 0),
(4, 10, 4, 5, 1, '1999-11-11', NULL, '2022-11-11', NULL, 0),
(5, 11, 7, 10, 1, '2000-02-10', NULL, '2021-12-08', NULL, 0),
(6, 14, 20, 15, 1, '2022-09-01', 11, '2022-09-13', NULL, 0),
(7, 15, 20, 14, 1, '2022-09-15', 0, '2022-09-23', NULL, 0),
(8, 16, 22, 15, 1, '2011-06-29', 15, '2022-09-01', 'ea9cc89e2fff7038d71e.pdf', 0),
(9, 17, 20, 11, 1, '2022-10-20', 0, '2022-10-11', NULL, 0),
(10, 18, 21, 14, 2, '2022-10-04', 9, '2022-10-26', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

DROP TABLE IF EXISTS `holiday`;
CREATE TABLE IF NOT EXISTS `holiday` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `h_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `holiday`
--

INSERT INTO `holiday` (`id`, `title`, `h_date`) VALUES
(1, 'Holiday 2', '2022-10-20'),
(2, 'Durga Puja', '2022-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `investment`
--

DROP TABLE IF EXISTS `investment`;
CREATE TABLE IF NOT EXISTS `investment` (
  `investment_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `user_type` int(11) NOT NULL DEFAULT '1' COMMENT '1-customer 2-associate',
  `ammount` float NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `roi` float NOT NULL DEFAULT '5',
  `nominee_id` int(11) NOT NULL,
  `account_no` varchar(40) NOT NULL,
  `payment_id` varchar(100) DEFAULT NULL,
  `agreement_file` varchar(100) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0-pending 1-Active 2-withdraw 3-close',
  `withdrw_req_time` datetime DEFAULT NULL,
  PRIMARY KEY (`investment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investment`
--

INSERT INTO `investment` (`investment_id`, `user_id`, `user_type`, `ammount`, `date_time`, `roi`, `nominee_id`, `account_no`, `payment_id`, `agreement_file`, `status`, `withdrw_req_time`) VALUES
(1, 25, 1, 2000, '2022-09-14 04:59:54', 5, 1, '93993939393', 'YYYBSBSBBSBSBS', '1', 1, NULL),
(2, 25, 1, 3000, '2022-09-14 06:25:12', 5, 2, '454554546', '22929292929', 'c4d07b0da872ef406da5.png', 1, NULL),
(3, 28, 1, 25000, '2022-10-10 11:32:59', 5, 14, '12345678', NULL, NULL, 1, NULL),
(4, 28, 1, 100000, '2022-10-10 11:33:18', 1, 14, '12345678', NULL, '36da6dd1ff06e041e6e3.png', 1, '2022-10-12 14:30:21'),
(5, 28, 1, 50000, '2022-10-10 13:08:42', 5, 14, '12345678', NULL, NULL, 3, NULL),
(6, 11, 2, 200000, '2022-10-11 13:26:03', 5, 15, '3535353535353', NULL, NULL, 1, NULL),
(7, 11, 2, 800000, '2022-10-11 13:50:35', 5, 17, '5363638282', NULL, NULL, 1, NULL),
(8, 11, 2, 80000, '2022-10-11 13:52:57', 5, 16, '454554546', NULL, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `investment_withdraw`
--

DROP TABLE IF EXISTS `investment_withdraw`;
CREATE TABLE IF NOT EXISTS `investment_withdraw` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invesment_id` int(11) NOT NULL,
  `account_no` varchar(40) NOT NULL,
  `ifsc_code` varchar(40) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '2' COMMENT '0-rejected 1-success 2-pending',
  `req_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `investment_withdraw`
--

INSERT INTO `investment_withdraw` (`id`, `invesment_id`, `account_no`, `ifsc_code`, `status`, `req_time`) VALUES
(1, 1, '229929299292', '22222222', 2, '2022-09-30 11:54:31'),
(2, 2, '77789999', 'HAHj88a8', 2, '2022-09-30 11:54:31');

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

DROP TABLE IF EXISTS `leave`;
CREATE TABLE IF NOT EXISTS `leave` (
  `leave_id` int(11) NOT NULL AUTO_INCREMENT,
  `annual` int(11) NOT NULL,
  `casual` int(11) NOT NULL,
  `sick` int(11) NOT NULL,
  `maternity` int(11) NOT NULL,
  `bereavement` int(11) NOT NULL,
  `others` int(11) NOT NULL,
  PRIMARY KEY (`leave_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave`
--

INSERT INTO `leave` (`leave_id`, `annual`, `casual`, `sick`, `maternity`, `bereavement`, `others`) VALUES
(1, 3, 2, 11, 9, 9, 9),
(2, 4, 8, 10, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `leave_req`
--

DROP TABLE IF EXISTS `leave_req`;
CREATE TABLE IF NOT EXISTS `leave_req` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `type` varchar(50) NOT NULL,
  `file_url` varchar(100) DEFAULT NULL,
  `comment` varchar(100) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '2' COMMENT '0-reject 1-approve 2-pending',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_req`
--

INSERT INTO `leave_req` (`id`, `employee_id`, `from_date`, `to_date`, `type`, `file_url`, `comment`, `status`) VALUES
(1, 18, '2022-10-18', '2022-10-20', 'bereavement', '0be26220ed749b0b47c4.pdf', 'NNN', 2),
(2, 18, '2022-10-27', '2022-11-05', 'annual', '4a81a1be2482d3828d6a.jpg', 'Test Commentsyhsjk', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nominee`
--

DROP TABLE IF EXISTS `nominee`;
CREATE TABLE IF NOT EXISTS `nominee` (
  `nominee_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` int(11) NOT NULL COMMENT '1-customer 2-associate',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`nominee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nominee`
--

INSERT INTO `nominee` (`nominee_id`, `name`, `dob`, `user_id`, `user_type`, `status`) VALUES
(1, 'Nominee 1', '2014-09-09', 25, 1, 1),
(2, 'Lorem User', '2022-04-18', 25, 1, 1),
(4, 'Next nominee', '2022-09-05', 25, 1, 1),
(9, 'full_name', '2022-09-12', 25, 1, 1),
(10, 'phone_no', '2022-08-29', 12, 1, 1),
(11, 'Bilash Halder', '2022-10-07', 27, 1, 1),
(12, 'phone_no', '2022-10-28', 27, 1, 1),
(13, 'aaa aa', '2022-10-22', 27, 1, 1),
(14, 'My Nominee', '2022-10-19', 28, 1, 1),
(15, 'Bilash Halder', '2022-10-07', 11, 2, 1),
(16, 'New Nominee', '2022-10-20', 11, 2, 1),
(17, 'Test Nominee', '2022-10-06', 11, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `offline_transaction`
--

DROP TABLE IF EXISTS `offline_transaction`;
CREATE TABLE IF NOT EXISTS `offline_transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `customer_type` int(11) DEFAULT '1' COMMENT '1-customer 2-associate',
  `transaction_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `transaction_id` varchar(50) NOT NULL,
  `amount` double NOT NULL,
  `file_url` varchar(100) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0-pending 1-accepted 2-used 3-rejected',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offline_transaction`
--

INSERT INTO `offline_transaction` (`id`, `customer_id`, `customer_type`, `transaction_time`, `transaction_id`, `amount`, `file_url`, `status`) VALUES
(1, 25, 1, '2022-09-15 00:19:43', '788888yy888uu8', 80000, 'jppppkkkkk', 1),
(2, 25, 1, '2022-09-15 00:25:18', 'TRAN128282828', 89999, '8c3df6dd5373fb7f76ac36217f6507e3__1663181767914.pdf', 2),
(3, 25, 1, '2022-09-15 01:13:25', '2424424242', 12219, '8c3df6dd5373fb7f76ac36217f6507e3__1663184605123.pdf', 3),
(4, 25, 1, '2022-09-15 01:15:10', '25255252552525', 3393939, '8c3df6dd5373fb7f76ac36217f6507e3__1663184710849.pdf', 3),
(5, 12, 1, '2022-09-15 01:15:44', '25255252', 3393939, '8c3df6dd5373fb7f76ac36217f6507e3__1663184744754.pdf', 1),
(6, 27, 1, '2022-10-06 14:50:49', '25255252552525', 1000, 'c95efd3a8c0cb6534a24.jpg', 1),
(7, 27, 1, '2022-10-07 13:42:54', 'None', 2000, 'cfc56b9873233a098727.png', 3),
(8, 28, 1, '2022-10-10 10:32:13', '25255252552525', 2000, '3d27a8a0531b352fb342.jpg', 3),
(9, 11, 1, '2022-10-11 13:01:57', 'TZXN1282882', 30000, 'c445ce1db72ebba4e775.png', 1),
(10, 11, 2, '2022-10-11 13:04:03', 'TREANANTT', 90000, '4bd903c6f1785e356951.png', 3),
(11, 11, 2, '2022-10-11 13:05:03', 'JJAJAJJAJA', 7181818, '4674c50a07ff5f13ded9.png', 3);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `purpose` varchar(50) NOT NULL,
  `payment_mode` varchar(40) NOT NULL,
  `to_account` varchar(40) NOT NULL,
  `ammount` double NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1-success 0-failed 2-pending',
  `transaction_id` varchar(40) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `transaction_time`, `purpose`, `payment_mode`, `to_account`, `ammount`, `status`, `transaction_id`) VALUES
(1, '2022-09-11 02:03:14', 'salary', 'online', '333334444', 20000, 1, '788888yy888uu8'),
(2, '2022-09-11 02:11:11', 'invesment', 'cheque', '3838383838', 50000, 1, '63663638388383');

-- --------------------------------------------------------

--
-- Table structure for table `payout`
--

DROP TABLE IF EXISTS `payout`;
CREATE TABLE IF NOT EXISTS `payout` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invesment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` int(11) NOT NULL,
  `ammount` double NOT NULL,
  `date_credit` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payout`
--

INSERT INTO `payout` (`id`, `invesment_id`, `user_id`, `user_type`, `ammount`, `date_credit`) VALUES
(1, 4, 11, 2, 2000, '2022-10-10 10:39:09'),
(2, 4, 11, 2, 6000, '2022-10-11 14:38:07'),
(3, 22, 22, 2, 4000, '2022-10-11 14:38:07');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

DROP TABLE IF EXISTS `qualification`;
CREATE TABLE IF NOT EXISTS `qualification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `degree_name` varchar(100) NOT NULL,
  `year_of_pass` int(11) NOT NULL,
  `degree_from` varchar(100) NOT NULL,
  `marks` float NOT NULL,
  `document_url` varchar(100) NOT NULL,
  `employee_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`id`, `degree_name`, `year_of_pass`, `degree_from`, `marks`, `document_url`, `employee_id`) VALUES
(1, 'B.Tech', 2020, 'MAKAUT', 78, '', 1),
(2, 'Madhya', 2020, 'WBSppp', 100, '8c3df6dd5373fb7f76ac36217f6507e3#_#1662841482800.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `request_type` tinyint(4) NOT NULL COMMENT '1-csp 2-associate 3-others',
  `customer_id` int(11) NOT NULL,
  `request_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comments` varchar(200) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '2' COMMENT '0-reject 1-accepted 2-pending 3-others',
  PRIMARY KEY (`request_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `request_type`, `customer_id`, `request_date`, `comments`, `status`) VALUES
(3, 3, 2, '2022-09-11 15:49:44', 'Updated cmment', 1),
(4, 1, 27, '2022-10-07 13:31:39', NULL, 2),
(5, 2, 27, '2022-10-07 13:42:27', NULL, 2),
(6, 2, 28, '2022-10-10 10:31:45', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
CREATE TABLE IF NOT EXISTS `salary` (
  `salary_id` int(11) NOT NULL AUTO_INCREMENT,
  `basic` float NOT NULL DEFAULT '0',
  `hra` float NOT NULL DEFAULT '0',
  `conveyance` float NOT NULL DEFAULT '0',
  `medical` float NOT NULL DEFAULT '0',
  `special` float NOT NULL DEFAULT '0',
  `pf` float NOT NULL DEFAULT '0',
  `insurance` float NOT NULL DEFAULT '0',
  `tax` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`salary_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`salary_id`, `basic`, `hra`, `conveyance`, `medical`, `special`, `pf`, `insurance`, `tax`) VALUES
(10, 4500, 500, 1500, 999, 500, 150, 500, 10),
(11, 4000, 4000, 1000, 50, 500, 100, 100, 100),
(14, 10000, 2000, 2000, 12000, 10, 1000, 100, 200),
(15, 10000, 3000, 2000, 1000, 1000, 100, 120, 280);

-- --------------------------------------------------------

--
-- Table structure for table `salary_history`
--

DROP TABLE IF EXISTS `salary_history`;
CREATE TABLE IF NOT EXISTS `salary_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `salary_id` int(11) NOT NULL,
  `working_days` int(11) NOT NULL,
  `amount` double NOT NULL,
  `date_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary_history`
--

INSERT INTO `salary_history` (`id`, `employee_id`, `salary_id`, `working_days`, `amount`, `date_on`) VALUES
(1, 18, 3, 27, 20000, '2022-10-08 13:10:49');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw_request`
--

DROP TABLE IF EXISTS `withdraw_request`;
CREATE TABLE IF NOT EXISTS `withdraw_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_type` int(11) NOT NULL,
  `account_no` varchar(40) NOT NULL,
  `ammount` float NOT NULL,
  `request_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '2' COMMENT '0-rejected 1-success 2-pending',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `withdraw_request`
--

INSERT INTO `withdraw_request` (`id`, `user_id`, `user_type`, `account_no`, `ammount`, `request_time`, `status`) VALUES
(4, 5, 1, '999999', 100000, '2022-09-11 15:46:47', 2);

-- --------------------------------------------------------

--
-- Table structure for table `work_report`
--

DROP TABLE IF EXISTS `work_report`;
CREATE TABLE IF NOT EXISTS `work_report` (
  `report_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `report_to` int(11) DEFAULT NULL,
  `report_date` date NOT NULL,
  `start_time` time NOT NULL,
  `submit_time` time DEFAULT NULL,
  `report` varchar(1000) DEFAULT NULL,
  `document_url` varchar(100) DEFAULT NULL,
  `reject_for` varchar(200) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '2' COMMENT '1-accept 0-reject 2-pending 3-submitted',
  PRIMARY KEY (`report_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work_report`
--

INSERT INTO `work_report` (`report_id`, `employee_id`, `report_to`, `report_date`, `start_time`, `submit_time`, `report`, `document_url`, `reject_for`, `status`) VALUES
(5, 18, 18, '2022-10-08', '12:08:10', '12:08:37', 'This is My Work Report', 'db4dc46221b3418c8cac.pdf', 'This is reject', 0),
(6, 18, NULL, '2022-10-10', '14:12:33', NULL, NULL, NULL, NULL, 2),
(7, 18, NULL, '2022-10-12', '10:10:07', NULL, NULL, NULL, NULL, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
