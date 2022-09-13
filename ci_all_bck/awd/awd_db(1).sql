-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Apr 02, 2022 at 04:51 AM
-- Server version: 8.0.18
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `awd_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad_aircraft_link`
--

DROP TABLE IF EXISTS `ad_aircraft_link`;
CREATE TABLE IF NOT EXISTS `ad_aircraft_link` (
  `ad_aircraft_link` int(11) NOT NULL AUTO_INCREMENT,
  `ad_record_id` int(11) NOT NULL,
  `aircraft_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`ad_aircraft_link`),
  KEY `ref_c_user_id` (`created_by`),
  KEY `ref_u_user_id` (`updated_by`),
  KEY `ref_ad_record_id` (`ad_record_id`),
  KEY `ref_aircraft_id` (`aircraft_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad_aircraft_model_link`
--

DROP TABLE IF EXISTS `ad_aircraft_model_link`;
CREATE TABLE IF NOT EXISTS `ad_aircraft_model_link` (
  `ad_aircraft_model_link` int(11) NOT NULL AUTO_INCREMENT,
  `ad_record_id` int(11) NOT NULL,
  `aircraft_model_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`ad_aircraft_model_link`),
  KEY `ref_c_user_id` (`created_by`),
  KEY `ref_u_user_id` (`updated_by`),
  KEY `ref_ad_record_id` (`ad_record_id`),
  KEY `ref_aircraft_model_id` (`aircraft_model_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad_aircraft_type_link`
--

DROP TABLE IF EXISTS `ad_aircraft_type_link`;
CREATE TABLE IF NOT EXISTS `ad_aircraft_type_link` (
  `ad_aircraft_type_link` int(11) NOT NULL AUTO_INCREMENT,
  `ad_record_id` int(11) NOT NULL,
  `aircraft_type_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`ad_aircraft_type_link`),
  KEY `ref_c_user_id` (`created_by`),
  KEY `ref_u_user_id` (`updated_by`),
  KEY `ref_ad_record_id` (`ad_record_id`),
  KEY `ref_aircraft_type_id` (`aircraft_type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad_applicance_link`
--

DROP TABLE IF EXISTS `ad_applicance_link`;
CREATE TABLE IF NOT EXISTS `ad_applicance_link` (
  `ad_applicance_link` int(11) NOT NULL AUTO_INCREMENT,
  `ad_record_id` int(11) NOT NULL,
  `applicance_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`ad_applicance_link`),
  KEY `ref_c_user_id` (`created_by`),
  KEY `ref_u_user_id` (`updated_by`),
  KEY `ref_ad_record_id` (`ad_record_id`),
  KEY `ref_applicance_id` (`applicance_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad_engine_link`
--

DROP TABLE IF EXISTS `ad_engine_link`;
CREATE TABLE IF NOT EXISTS `ad_engine_link` (
  `ad_engine_link` int(11) NOT NULL AUTO_INCREMENT,
  `ad_record_id` int(11) NOT NULL,
  `engine_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`ad_engine_link`),
  KEY `ref_c_user_id` (`created_by`),
  KEY `ref_u_user_id` (`updated_by`),
  KEY `ref_ad_record_id` (`ad_record_id`),
  KEY `ref_engine_id` (`engine_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad_engine_model_link`
--

DROP TABLE IF EXISTS `ad_engine_model_link`;
CREATE TABLE IF NOT EXISTS `ad_engine_model_link` (
  `ad_engine_model_link` int(11) NOT NULL AUTO_INCREMENT,
  `ad_record_id` int(11) NOT NULL,
  `engine_model_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`ad_engine_model_link`),
  KEY `ref_c_user_id` (`created_by`),
  KEY `ref_u_user_id` (`updated_by`),
  KEY `ref_ad_record_id` (`ad_record_id`),
  KEY `ref_engine_model_id` (`engine_model_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad_engine_type_link`
--

DROP TABLE IF EXISTS `ad_engine_type_link`;
CREATE TABLE IF NOT EXISTS `ad_engine_type_link` (
  `ad_engine_type_link` int(11) NOT NULL AUTO_INCREMENT,
  `ad_record_id` int(11) NOT NULL,
  `engine_type_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`ad_engine_type_link`),
  KEY `ref_c_user_id` (`created_by`),
  KEY `ref_u_user_id` (`updated_by`),
  KEY `ref_ad_record_id` (`ad_record_id`),
  KEY `ref_engine_type_id` (`engine_type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad_file`
--

DROP TABLE IF EXISTS `ad_file`;
CREATE TABLE IF NOT EXISTS `ad_file` (
  `ad_applicance_link` int(11) NOT NULL AUTO_INCREMENT,
  `ad_record_id` int(11) NOT NULL,
  `file_name` varchar(150) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`ad_applicance_link`),
  KEY `ref_c_user_id` (`created_by`),
  KEY `ref_u_user_id` (`updated_by`),
  KEY `ref_ad_record_id` (`ad_record_id`),
  KEY `ref_applicance_id` (`file_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad_record`
--

DROP TABLE IF EXISTS `ad_record`;
CREATE TABLE IF NOT EXISTS `ad_record` (
  `ad_record_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_number` int(11) NOT NULL,
  `ad_type_id` int(11) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `issued_by_id` int(11) NOT NULL,
  `issue_date` int(11) NOT NULL,
  `effective_date` int(11) NOT NULL,
  `supersedes_ad_id` int(11) NOT NULL,
  `superseded_by_ad_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`ad_record_id`),
  KEY `ad_number` (`ad_number`),
  KEY `ref_ad_type_id` (`ad_type_id`),
  KEY `ad_subject` (`subject`),
  KEY `ref_aviation_authority` (`issued_by_id`),
  KEY `effective_date_index` (`effective_date`),
  KEY `ref_s1_ad_record_id` (`supersedes_ad_id`),
  KEY `ref_s2_ad_record_id` (`superseded_by_ad_id`),
  KEY `ref_c_user_id` (`created_by`),
  KEY `ref_u_user_id` (`updated_by`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ad_record`
--

INSERT INTO `ad_record` (`ad_record_id`, `ad_number`, `ad_type_id`, `subject`, `issued_by_id`, `issue_date`, `effective_date`, `supersedes_ad_id`, `superseded_by_ad_id`, `created_by`, `updated_by`, `created_on`, `updated_on`) VALUES
(1, 1, 0, 'AD Subject', 0, 0, 0, 1, 1, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 0, 'AD Subject', 0, 0, 0, 1, 1, 1, 0, '2022-03-07 00:34:08', '2022-03-07 00:34:08'),
(3, 1, 0, 'AD Subject', 0, 0, 0, 1, 1, 1, 0, '2022-03-09 01:22:38', '2022-03-09 01:22:38');

-- --------------------------------------------------------

--
-- Table structure for table `ad_type`
--

DROP TABLE IF EXISTS `ad_type`;
CREATE TABLE IF NOT EXISTS `ad_type` (
  `ad_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_type` varchar(50) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`ad_type_id`),
  KEY `ref_c_user_id` (`created_by`),
  KEY `ref_u_user_id` (`updated_by`),
  KEY `ad_type` (`ad_type`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ad_type`
--

INSERT INTO `ad_type` (`ad_type_id`, `ad_type`, `created_on`, `updated_on`, `created_by`, `updated_by`) VALUES
(1, 'Ad type One', '2022-03-15 02:11:22', '2022-03-15 02:11:22', 0, 0),
(2, 'Ad type One', '2022-03-15 02:11:45', '2022-03-15 02:11:45', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `aircraft`
--

DROP TABLE IF EXISTS `aircraft`;
CREATE TABLE IF NOT EXISTS `aircraft` (
  `aircraft_id` int(11) NOT NULL AUTO_INCREMENT,
  `manufacturer_id` int(11) NOT NULL,
  `aircraft_serial_number` varchar(25) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `aircraft_model_id` int(11) NOT NULL,
  `aircraft_type_id` int(11) NOT NULL,
  PRIMARY KEY (`aircraft_id`),
  KEY `ref_c_user_id` (`created_by`),
  KEY `ref_u_user_id` (`updated_by`),
  KEY `ref_manufacturer_id` (`manufacturer_id`),
  KEY `ref_aircraft_model_id` (`aircraft_model_id`),
  KEY `ref_aircraft_type_id` (`aircraft_type_id`),
  KEY `aircraft_serial_number` (`aircraft_serial_number`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `aircraft`
--

INSERT INTO `aircraft` (`aircraft_id`, `manufacturer_id`, `aircraft_serial_number`, `created_on`, `updated_on`, `created_by`, `updated_by`, `aircraft_model_id`, `aircraft_type_id`) VALUES
(1, 2, '', '2022-03-14 09:14:27', '2022-03-14 09:14:27', 0, 0, 4, 1),
(2, 3, 'aircraft-101', '2022-03-14 09:16:21', '2022-03-14 09:16:21', 0, 0, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `aircraft_model`
--

DROP TABLE IF EXISTS `aircraft_model`;
CREATE TABLE IF NOT EXISTS `aircraft_model` (
  `aircraft_model_id` int(11) NOT NULL AUTO_INCREMENT,
  `manufacturer_id` int(11) NOT NULL,
  `aircraft_model` varchar(50) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`aircraft_model_id`),
  KEY `ref_c_user_id` (`created_by`),
  KEY `ref_u_user_id` (`updated_by`),
  KEY `aircraft_model` (`aircraft_model`),
  KEY `ref_manufacturer_id` (`manufacturer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `aircraft_model`
--

INSERT INTO `aircraft_model` (`aircraft_model_id`, `manufacturer_id`, `aircraft_model`, `created_on`, `updated_on`, `created_by`, `updated_by`) VALUES
(1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(2, 0, 'Model-103', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(3, 0, 'Model-109', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(4, 0, 'model-110', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(5, 0, 'model-110', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(6, 0, 'model-110', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(7, 0, 'Model-108', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(8, 1, 'Model 111', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(9, 2, 'engine model one', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `aircraft_type`
--

DROP TABLE IF EXISTS `aircraft_type`;
CREATE TABLE IF NOT EXISTS `aircraft_type` (
  `aircraft_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `aircraft_model_id` int(11) NOT NULL,
  `aircraft_type` varchar(50) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`aircraft_type_id`),
  KEY `ref_c_user_id` (`created_by`),
  KEY `ref_u_user_id` (`updated_by`),
  KEY `aircraft_type` (`aircraft_type`),
  KEY `ref_manufacturer_id` (`aircraft_model_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `aircraft_type`
--

INSERT INTO `aircraft_type` (`aircraft_type_id`, `aircraft_model_id`, `aircraft_type`, `created_on`, `updated_on`, `created_by`, `updated_by`) VALUES
(1, 4, 'aircraft 101', '2022-03-14 07:11:54', '2022-03-14 07:11:54', 0, 0),
(2, 3, 'aircraft 102', '2022-03-14 09:12:41', '2022-03-14 09:12:41', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `applicance`
--

DROP TABLE IF EXISTS `applicance`;
CREATE TABLE IF NOT EXISTS `applicance` (
  `applicance_id` int(11) NOT NULL AUTO_INCREMENT,
  `manufacturer_id` int(11) NOT NULL,
  `applicance_serial_number` varchar(25) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `applicance_model_id` int(11) NOT NULL,
  `applicance_type_id` int(11) NOT NULL,
  PRIMARY KEY (`applicance_id`),
  KEY `ref_c_user_id` (`created_by`),
  KEY `ref_u_user_id` (`updated_by`),
  KEY `ref_manufacturer_id` (`manufacturer_id`),
  KEY `ref_applicance_model_id` (`applicance_model_id`),
  KEY `ref_applicance_type_id` (`applicance_type_id`),
  KEY `applicance_serial_number` (`applicance_serial_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `avaiation_authority`
--

DROP TABLE IF EXISTS `avaiation_authority`;
CREATE TABLE IF NOT EXISTS `avaiation_authority` (
  `avaiation_authority_id` int(11) NOT NULL AUTO_INCREMENT,
  `avaiation_authority` varchar(50) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`avaiation_authority_id`),
  KEY `ref_c_user_id` (`created_by`),
  KEY `ref_u_user_id` (`updated_by`),
  KEY `ad_type` (`avaiation_authority`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `avaiation_authority`
--

INSERT INTO `avaiation_authority` (`avaiation_authority_id`, `avaiation_authority`, `created_on`, `updated_on`, `created_by`, `updated_by`) VALUES
(1, 'Authority One', '2022-03-15 01:35:47', '2022-03-15 01:35:47', 0, 0),
(2, 'Authority Two', '2022-03-15 01:35:47', '2022-03-15 01:35:47', 0, 0),
(3, 'Authority Three', '2022-03-15 01:35:47', '2022-03-15 01:35:47', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `engine`
--

DROP TABLE IF EXISTS `engine`;
CREATE TABLE IF NOT EXISTS `engine` (
  `engine_id` int(11) NOT NULL AUTO_INCREMENT,
  `manufacturer_id` int(11) NOT NULL,
  `engine_serial_number` varchar(25) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `engine_model_id` int(11) NOT NULL,
  `engine_type_id` int(11) NOT NULL,
  PRIMARY KEY (`engine_id`),
  KEY `ref_c_user_id` (`created_by`),
  KEY `ref_u_user_id` (`updated_by`),
  KEY `ref_manufacturer_id` (`manufacturer_id`),
  KEY `ref_engine_model_id` (`engine_model_id`),
  KEY `ref_engine_type_id` (`engine_type_id`),
  KEY `engine_serial_number` (`engine_serial_number`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `engine`
--

INSERT INTO `engine` (`engine_id`, `manufacturer_id`, `engine_serial_number`, `created_on`, `updated_on`, `created_by`, `updated_by`, `engine_model_id`, `engine_type_id`) VALUES
(1, 2, 'Engine Serial Number', '2022-03-14 23:58:17', '2022-03-14 23:58:17', 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `engine_model`
--

DROP TABLE IF EXISTS `engine_model`;
CREATE TABLE IF NOT EXISTS `engine_model` (
  `engine_model_id` int(11) NOT NULL AUTO_INCREMENT,
  `manufacturer_id` int(11) NOT NULL,
  `engine_model` varchar(50) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`engine_model_id`),
  KEY `ref_c_user_id` (`created_by`),
  KEY `ref_u_user_id` (`updated_by`),
  KEY `engine_model` (`engine_model`),
  KEY `ref_manufacturer_id` (`manufacturer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `engine_model`
--

INSERT INTO `engine_model` (`engine_model_id`, `manufacturer_id`, `engine_model`, `created_on`, `updated_on`, `created_by`, `updated_by`) VALUES
(1, 3, 'Engine One', '2022-03-14 09:55:50', '2022-03-14 09:55:50', 0, 0),
(2, 2, 'Engine Two', '2022-03-14 09:56:11', '2022-03-14 09:56:11', 0, 0),
(3, 2, 'Engine Two', '2022-03-14 09:58:14', '2022-03-14 09:58:14', 0, 0),
(4, 2, '', '2022-03-14 23:56:30', '2022-03-14 23:56:30', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `engine_type`
--

DROP TABLE IF EXISTS `engine_type`;
CREATE TABLE IF NOT EXISTS `engine_type` (
  `engine_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `engine_model_id` int(11) NOT NULL,
  `engine_type` varchar(50) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`engine_type_id`),
  KEY `ref_c_user_id` (`created_by`),
  KEY `ref_u_user_id` (`updated_by`),
  KEY `engine_type` (`engine_type`),
  KEY `ref_manufacturer_id` (`engine_model_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `engine_type`
--

INSERT INTO `engine_type` (`engine_type_id`, `engine_model_id`, `engine_type`, `created_on`, `updated_on`, `created_by`, `updated_by`) VALUES
(1, 2, 'Engine Type 01', '2022-03-14 10:24:49', '2022-03-14 10:24:49', 0, 0),
(2, 2, 'Engine Type 01', '2022-03-14 10:25:19', '2022-03-14 10:25:19', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

DROP TABLE IF EXISTS `manufacturer`;
CREATE TABLE IF NOT EXISTS `manufacturer` (
  `manufacturer_id` int(11) NOT NULL AUTO_INCREMENT,
  `manufacturer_type_id` int(11) NOT NULL,
  `manufacturer_name` varchar(150) NOT NULL,
  `created_on` datetime NOT NULL,
  `update_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`manufacturer_id`),
  KEY `ref_c_user_id` (`created_by`),
  KEY `ref_u_user_id` (`updated_by`),
  KEY `ref_ad_type` (`manufacturer_type_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`manufacturer_id`, `manufacturer_type_id`, `manufacturer_name`, `created_on`, `update_on`, `created_by`, `updated_by`) VALUES
(1, 0, 'Boeing', '2022-03-13 10:07:55', '2022-03-13 10:07:55', 1, 0),
(2, 0, 'manufaturere one', '2022-03-13 22:27:49', '2022-03-13 22:27:49', 1, 0),
(3, 0, 'Manufacturer Three', '2022-03-13 22:32:39', '2022-03-13 22:32:39', 1, 0),
(4, 0, 'Manufacturer Three', '2022-03-13 22:41:34', '2022-03-13 22:41:34', 1, 0),
(5, 0, 'Manufacturer Three', '2022-03-14 01:48:57', '2022-03-14 01:48:57', 1, 0),
(6, 0, 'Boeing, ', '2022-03-14 05:50:14', '2022-03-14 05:50:14', 1, 0),
(7, 0, 'Boeing, ', '2022-03-14 05:51:28', '2022-03-14 05:51:28', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer_type`
--

DROP TABLE IF EXISTS `manufacturer_type`;
CREATE TABLE IF NOT EXISTS `manufacturer_type` (
  `manufacturer_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `manufacturer_type` varchar(50) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`manufacturer_type_id`),
  KEY `ref_c_user_id` (`created_by`),
  KEY `ref_u_user_id` (`updated_by`),
  KEY `manufacturer_type` (`manufacturer_type`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `manufacturer_type`
--

INSERT INTO `manufacturer_type` (`manufacturer_type_id`, `manufacturer_type`, `created_on`, `updated_on`, `created_by`, `updated_by`) VALUES
(1, 'Manufacturer One', '2022-03-09 05:51:41', '2022-03-09 05:51:41', 1, 0),
(2, 'Manufacturer Two', '2022-03-09 07:15:26', '2022-03-09 07:15:26', 1, 0),
(3, 'Manufacturer Three', '2022-03-09 07:15:36', '2022-03-09 07:15:36', 1, 0),
(4, '', '2022-03-13 08:50:57', '2022-03-13 08:50:57', 1, 0),
(5, ' manufacturer type four', '2022-03-28 21:41:35', '2022-03-28 21:41:35', 1, 0),
(6, ' manufacturer type four', '2022-03-28 21:45:06', '2022-03-28 21:45:06', 1, 0),
(7, ' manufacturer Type four', '2022-03-28 21:50:05', '2022-03-28 21:50:05', 1, 0),
(8, ' manufacturer type five', '2022-03-28 21:51:55', '2022-03-28 21:51:55', 1, 0),
(9, ' manufacturer type five', '2022-03-28 21:55:35', '2022-03-28 21:55:35', 1, 0),
(10, ' manufacturer type six', '2022-03-28 21:57:14', '2022-03-28 21:57:14', 1, 0),
(11, 'manufacturer type seven', '2022-03-28 22:02:41', '2022-03-28 22:02:41', 1, 0),
(12, 'manufacturer type eight', '2022-03-28 22:04:45', '2022-03-28 22:04:45', 1, 0),
(13, 'manufacturer type eight', '2022-03-28 22:05:24', '2022-03-28 22:05:24', 1, 0),
(14, 'Manfuacturer 10', '2022-04-01 00:58:06', '2022-04-01 00:58:06', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer_type_link`
--

DROP TABLE IF EXISTS `manufacturer_type_link`;
CREATE TABLE IF NOT EXISTS `manufacturer_type_link` (
  `manufacturer_type_link_id` int(11) NOT NULL AUTO_INCREMENT,
  `manufacturer_id` int(11) NOT NULL,
  `manufacturer_type_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`manufacturer_type_link_id`),
  KEY `ref_c_user_id` (`created_by`),
  KEY `ref_u_user_id` (`updated_by`),
  KEY `ref_ad_record_id` (`manufacturer_id`),
  KEY `ref_manufacturer_type_id` (`manufacturer_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `manufacturer_type_link`
--

INSERT INTO `manufacturer_type_link` (`manufacturer_type_link_id`, `manufacturer_id`, `manufacturer_type_id`, `created_on`, `updated_on`, `created_by`, `updated_by`) VALUES
(1, 5, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(2, 5, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(3, 5, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
