-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2019 at 10:33 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citcoopdb`
--
CREATE DATABASE IF NOT EXISTS `citcoopdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `citcoopdb`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advisors`
--

CREATE TABLE `tbl_advisors` (
  `Id` char(36) NOT NULL,
  `Code` varchar(191) NOT NULL,
  `LastName` varchar(191) NOT NULL,
  `MiddleName` varchar(191) NOT NULL,
  `FirstName` varchar(191) NOT NULL,
  `Suffix` varchar(10) NOT NULL,
  `Birthdate` date NOT NULL,
  `Birthplace` varchar(1000) NOT NULL,
  `CivilStatus` varchar(100) NOT NULL,
  `Nationality` int(11) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `TelNo` varchar(191) NOT NULL,
  `MobileNo` varchar(191) NOT NULL,
  `PersonalEmail` varchar(191) NOT NULL,
  `HouseNo` varchar(10) NOT NULL,
  `Address1` varchar(191) NOT NULL,
  `Address2` varchar(191) NOT NULL,
  `Address3` varchar(191) NOT NULL,
  `Address4` varchar(191) NOT NULL,
  `Address5` varchar(191) NOT NULL,
  `Address6` varchar(191) NOT NULL,
  `CityId` int(11) NOT NULL,
  `ProvinceId` int(11) NOT NULL,
  `ZipCode` varchar(191) NOT NULL,
  `VersionNo` int(11) NOT NULL DEFAULT '1',
  `Photopath` varchar(191) NOT NULL,
  `Migrated` tinyint(1) NOT NULL,
  `CreatedById` varchar(191) NOT NULL,
  `CreatedAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedById` varchar(191) NOT NULL,
  `ModifiedAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Remarks` longtext NOT NULL,
  `Status` varchar(100) NOT NULL,
  `VersionNum` int(11) NOT NULL DEFAULT '1',
  `IsActive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_advisors`
--

INSERT INTO `tbl_advisors` (`Id`, `Code`, `LastName`, `MiddleName`, `FirstName`, `Suffix`, `Birthdate`, `Birthplace`, `CivilStatus`, `Nationality`, `Gender`, `TelNo`, `MobileNo`, `PersonalEmail`, `HouseNo`, `Address1`, `Address2`, `Address3`, `Address4`, `Address5`, `Address6`, `CityId`, `ProvinceId`, `ZipCode`, `VersionNo`, `Photopath`, `Migrated`, `CreatedById`, `CreatedAt`, `ModifiedById`, `ModifiedAt`, `Remarks`, `Status`, `VersionNum`, `IsActive`) VALUES
('1a1f7483-3805-37ce-b070-0ed331b42f6c', 'ilrj', 'Greenfelder', 'non', 'Emilia', 'II', '1982-10-27', '', 'Libero illo facilis modi cum voluptas. At inventore ad illum voluptatibus earum doloribus assumenda.', 0, '', '', '', 'bill.wisoky@example.org', '', '9594 Gerhold Flat\nLake Roslyn, SC 65084-5893', '', '', '', '', '', 1, 1, 'akmt', 3, '', 1, '', '1991-08-31 12:25:28', '', '2008-03-30 19:52:35', 'Ut repudiandae excepturi omnis ut. Voluptas illum ea iure quis reprehenderit. Tempora repudiandae quam tempore dolores.', 'Sunt atque et eos adipisci fuga voluptatem quidem. Ea ad illum ad blanditiis qui nam. Officia archit', 1, 0),
('3d13ce88-d7dd-35d8-9d0b-84a88581a247', 'agqa', 'Rempel', 'odio', 'Mariana', 'I', '2010-05-23', '', 'Consectetur adipisci culpa nostrum. Fugiat mollitia impedit consequuntur itaque ea aut neque. Eligen', 0, '', '', '', 'ospencer@example.org', '', '07678 Neil Center Apt. 699\nLake Brenthaven, RI 76944-1310', '', '', '', '', '', 5, 2, 'fkws', 4, '', 1, '', '1980-12-14 20:24:17', '', '2006-03-16 06:35:23', 'Veritatis aut et ad id. Dolor nihil omnis repellendus nihil beatae. Et maxime laborum inventore facilis rem.', 'Quia sint quis ipsum quis aperiam quas qui. Minus minima nihil dolor iusto velit sit. Sit aut sit qu', 1, 1),
('69a372ef-5183-3586-aeee-e9c3c5e87a32', 'sgnl', 'Gleichner', 'aliquam', 'Korbin', 'III', '1983-10-14', '', 'Quia aut voluptatibus sunt dignissimos. Qui sed qui voluptates ad quia dolorem. Sed dolores nobis ex', 0, '', '', '', 'rosalia.collins@example.net', '', '5460 Kelvin Ville Apt. 102\nSouth Maximilian, AZ 80546-7030', '', '', '', '', '', 2, 0, 'glvi', 2, '', 1, '', '1995-11-26 04:40:00', '', '1995-01-16 09:14:15', 'Natus quae est ut rerum et quis. Illo voluptates reiciendis velit neque. Molestiae quisquam sunt sit nisi sint doloremque recusandae inventore.', 'Perferendis porro quis eum quo. Dolores animi iure sit saepe enim autem doloribus. Minima dicta temp', 1, 0),
('a132e80c-5b9a-3127-872b-7f25cbf17925', 'vjvg', 'Smitham', 'voluptates', 'Gabrielle', 'MD', '1991-10-23', '', 'Perferendis at exercitationem rem recusandae magni tempore molestiae. Voluptatem exercitationem porr', 0, '', '', '', 'nichole34@example.com', '', '62635 Lilyan Extensions\nEast Alexander, KS 38993', '', '', '', '', '', 2, 0, 'vhjb', 0, '', 1, '', '1970-02-20 08:27:51', '', '2005-11-04 15:46:36', 'Beatae saepe et doloribus quaerat repellendus voluptas praesentium dolorem. Ut dolore dolore velit. Optio exercitationem illum et distinctio tempora. Aut nam hic sequi architecto.', 'Quae veritatis temporibus hic natus sit aperiam. Et et occaecati eum natus ipsum.', 1, 0),
('d984462b-e096-3f21-be3a-d486c71fe13d', 'zkwl', 'Reinger', 'nulla', 'Isabelle', 'III', '1985-05-22', '', 'Et qui qui dolor saepe et est. Aut accusamus labore rerum nisi qui voluptas nisi. Iste sunt ad liber', 0, '', '', '', 'miracle.hintz@example.com', '', '1889 Elfrieda Mountain\nNorth Harrisonport, UT 59649', '', '', '', '', '', 4, 7, 'ylgw', 0, '', 1, '', '1991-11-12 13:31:17', '', '1991-12-19 07:54:50', 'Consequuntur dignissimos ut blanditiis excepturi eius necessitatibus neque accusamus. Eos quisquam repellendus eos perferendis tenetur doloribus.', 'Eos non nobis omnis sint error et. Velit nihil rerum debitis aut voluptatem qui. Neque eum deserunt ', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cities`
--

CREATE TABLE `tbl_cities` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Code` varchar(100) NOT NULL,
  `Name` varchar(191) NOT NULL,
  `Remarks` varchar(1000) NOT NULL,
  `Active` tinyint(1) NOT NULL,
  `CreatedById` varchar(191) NOT NULL,
  `ModifiedById` varchar(191) NOT NULL,
  `CreatedAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `VersionNo` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_cities`
--

INSERT INTO `tbl_cities` (`Id`, `Code`, `Name`, `Remarks`, `Active`, `CreatedById`, `ModifiedById`, `CreatedAt`, `ModifiedAt`, `VersionNo`) VALUES
(1, '850671', 'Alaminos City, Pangasinan', '', 1, '', '', '2018-08-01 11:58:18', '2018-08-01 11:58:18', 1),
(2, '574943', 'Angeles City, Pampanga', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:18', '2018-08-01 11:58:18', 1),
(3, '290565', 'Antipolo City, Rizal', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:18', '2018-08-01 11:58:18', 1),
(4, '71386', 'Bacolod City, Negros Occidental', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:18', '2018-08-01 11:58:18', 1),
(5, '904843', 'Bacoor City, Cavite', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:18', '2018-08-01 11:58:18', 1),
(6, '49932', 'Bago City, Negros Occidental', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(7, '38693', 'Baguio City, Benguet', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(8, '403651', 'Bais City, Negros Oriental', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(9, '222585', 'Balanga City, Bataan', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(10, '403761', 'Batac City, Ilocos Norte', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(11, '396945', 'Batangas City City, Batangas', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(12, '47619', 'Bayawan City, Negros Oriental', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(13, '75', 'Baybay City, Leyte', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(14, '860424', 'Bayugan City, Agusan del Sur', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(15, '810466', 'Biñan City, Laguna', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(16, '256320', 'Bislig City, Surigao del Sur', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(17, '752540', 'Bogo City, Cebu', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(18, '633907', 'Borongan City, Eastern Samar', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(19, '38976', 'Butuan City, Agusan del Norte', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(20, '123217', 'Cabadbaran City, Agusan del Norte', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(21, '386906', 'Cabanatuan City, Nueva Ecija', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(22, '731867', 'Cabuyao City, Laguna', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(23, '650629', 'Cadiz City, Negros Occidental', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(24, '795458', 'Cagayan de Oro City, Misamis Oriental', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(25, '816108', 'Calamba City, Laguna', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(26, '925733', 'Calapan City, Oriental Mindoro', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(27, '490632', 'Calbayog City, Samar', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(28, '737503', 'Caloocan City, Metro Manila', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(29, '959731', 'Candon City, Ilocos Sur', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(30, '892498', 'Canlaon City, Negros Oriental', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(31, '683762', 'Carcar City, Cebu', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(32, '388613', 'Catbalogan City, Samar', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(33, '289901', 'Cauayan City, Isabela', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(34, '273514', 'Cavite City City, Cavite', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(35, '91284', 'Cebu City City, Cebu', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(36, '826984', 'Cotabato City City, Maguindanao', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(37, '686429', 'Dagupan City, Pangasinan', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(38, '157393', 'Danao City, Cebu', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(39, '973584', 'Dapitan City, Zamboanga del Norte', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(40, '163145', 'Dasmariñas City, Cavite', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(41, '615853', 'Davao City City, Davao del Sur', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(42, '162804', 'Digos City, Davao del Sur', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(43, '629747', 'Dipolog City, Zamboanga del Norte', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(44, '501105', 'Dumaguete City, Negros Oriental', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(45, '524562', 'El Salvador City, Misamis Oriental', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(46, '106541', 'Escalante City, Negros Occidental', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(47, '708794', 'Gapan City, Nueva Ecija', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(48, '565528', 'General Santos City, South Cotabato', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(49, '724527', 'General Trias City, Cavite', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(50, '22547', 'Gingoog City, Misamis Oriental', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(51, '428868', 'Guihulngan City, Negros Oriental', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(52, '570142', 'Himamaylan City, Negros Occidental', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(53, '243416', 'Ilagan City, Isabela', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(54, '852495', 'Iligan City, Lanao del Norte', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(55, '973146', 'Iloilo City City, Iloilo', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(56, '627721', 'Imus City, Cavite', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(57, '381146', 'Iriga City, Camarines Sur', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(58, '297662', 'Isabela City, Basilan', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(59, '345830', 'Kabankalan City, Negros Occidental', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(60, '44420', 'Kidapawan City, Cotabato', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(61, '150476', 'Koronadal City, South Cotabato', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(62, '674162', 'La Carlota City, Negros Occidental', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(63, '783116', 'Lamitan City, Basilan', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(64, '822683', 'Laoag City, Ilocos Norte', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(65, '259982', 'Lapu‑Lapu City, Cebu', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(66, '921984', 'Las Piñas City, Metro Manila', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(67, '761381', 'Legazpi City, Albay', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(68, '345125', 'Ligao City, Albay', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(69, '125123', 'Lipa City, Batangas', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(70, '659997', 'Lucena City, Quezon', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(71, '518258', 'Maasin City, Southern Leyte', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(72, '986793', 'Mabalacat City, Pampanga', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(73, '267446', 'Makati City, Metro Manila', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(74, '82517', 'Malabon City, Metro Manila', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(75, '82452', 'Malaybalay City, Bukidnon', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(76, '986586', 'Malolos City, Bulacan', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(77, '246782', 'Mandaluyong City, Metro Manila', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(78, '189647', 'Mandaue City, Cebu', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(79, '35546', 'Manila City, Metro Manila', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(80, '670911', 'Marawi City, Lanao del Sur', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(81, '682212', 'Marikina City, Metro Manila', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(82, '903229', 'Masbate City City, Masbate', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(83, '208765', 'Mati City, Davao Oriental', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(84, '416907', 'Meycauayan City, Bulacan', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(85, '922279', 'Muñoz City, Nueva Ecija', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(86, '182952', 'Muntinlupa City, Metro Manila', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(87, '187523', 'Naga City, Camarines Sur', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(88, '612367', 'Naga City, Cebu', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(89, '5521', 'Navotas City, Metro Manila', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(90, '176484', 'Olongapo City, Zambales', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(91, '710664', 'Ormoc City, Leyte', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(92, '12263', 'Oroquieta City, Misamis Occidental', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(93, '904981', 'Ozamiz City, Misamis Occidental', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(94, '482880', 'Pagadian City, Zamboanga del Sur', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(95, '275985', 'Palayan City, Nueva Ecija', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(96, '1000375', 'Panabo City, Davao del Norte', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(97, '80988', 'Parañaque City, Metro Manila', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(98, '51842', 'Pasay City, Metro Manila', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(99, '206822', 'Pasig City, Metro Manila', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(100, '870535', 'Passi City, Iloilo', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(101, '553904', 'Puerto Princesa City, Palawan', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(102, '864724', 'Quezon City, Metro Manila', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(103, '686517', 'Roxas City, Capiz', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(104, '300772', 'Sagay City, Negros Occidental', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(105, '683202', 'Samal City, Davao del Norte', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(106, '530723', 'San Carlos City, Negros Occidental', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(107, '571420', 'San Carlos City, Pangasinan', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(108, '781526', 'San Fernando City, La Union', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(109, '11925', 'San Fernando City, Pampanga', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(110, '3512', 'San Jose City, Nueva Ecija', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(111, '795127', 'San Jose del Monte City, Bulacan', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(112, '915651', 'San Juan City, Metro Manila', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(113, '30984', 'San Pablo City, Laguna', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(114, '564671', 'San Pedro City, Laguna', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(115, '422542', 'Santa Rosa City, Laguna', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(116, '143358', 'Santiago City, Isabela', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(117, '60997', 'Silay City, Negros Occidental', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(118, '538722', 'Sipalay City, Negros Occidental', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(119, '877610', 'Sorsogon City City, Sorsogon', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(120, '49933', 'Surigao City City, Surigao del Norte', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(121, '747734', 'Tabaco City, Albay', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(122, '207632', 'Tabuk City, Kalinga', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(123, '874854', 'Tacloban City, Leyte', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(124, '678397', 'Tacurong City, Sultan Kudarat', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(125, '182158', 'Tagaytay City, Cavite', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(126, '830521', 'Tagbilaran City, Bohol', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(127, '346982', 'Taguig City, Metro Manila', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(128, '39134', 'Tagum City, Davao del Norte', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(129, '987408', 'Talisay City, Cebu', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(130, '8236', 'Talisay City, Negros Occidental', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(131, '349514', 'Tanauan City, Batangas', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(132, '862430', 'Tandag City, Surigao del Sur', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(133, '646400', 'Tangub City, Misamis Occidental', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(134, '184564', 'Tanjay City, Negros Oriental', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(135, '15183', 'Tarlac City, Tarlac', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(136, '819475', 'Tayabas City, Quezon', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(137, '52779', 'Toledo City, Cebu', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(138, '119167', 'Trece Martires City, Cavite', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(139, '221629', 'Tuguegarao City, Cagayan', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(140, '75276', 'Urdaneta City, Pangasinan', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(141, '30158', 'Valencia City, Bukidnon', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(142, '7437', 'Valenzuela City, Metro Manila', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(143, '756792', 'Victorias City, Negros Occidental', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(144, '88725', 'Vigan City, Ilocos Sur', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1),
(145, '678554', 'Zamboanga City, Zamboanga del Sur [ii]', '', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-08-01 11:58:19', '2018-08-01 11:58:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_companies`
--

CREATE TABLE `tbl_companies` (
  `Id` int(11) NOT NULL,
  `CompanyName` varchar(200) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `Website` varchar(100) NOT NULL,
  `CreatedById` varchar(50) NOT NULL,
  `CreatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedById` varchar(50) NOT NULL,
  `ModifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `VersionNum` int(11) NOT NULL DEFAULT '1',
  `IsActive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courses`
--

CREATE TABLE `tbl_courses` (
  `Id` int(11) NOT NULL,
  `Code` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `CreatedById` varchar(50) NOT NULL,
  `CreatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedbyId` varchar(50) NOT NULL,
  `ModifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `VersionNum` int(11) NOT NULL DEFAULT '1',
  `IsActive` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courses`
--

INSERT INTO `tbl_courses` (`Id`, `Code`, `Name`, `Description`, `CreatedById`, `CreatedAt`, `ModifiedbyId`, `ModifiedAt`, `VersionNum`, `IsActive`) VALUES
(1, 'BSIT', 'BS Information Technology', '', 'ADMIN', '2019-01-13 13:30:15', 'ADMIN', '2019-01-13 13:30:15', 1, 1),
(2, 'FoodTech', 'Food Technology', '', 'ADMIN', '2019-01-13 13:30:15', 'ADMIN', '2019-01-13 13:30:15', 1, 1),
(3, 'AutoTech', 'Automotive Technology ', '', 'ADMIN', '2019-01-13 13:30:15', 'ADMIN', '2019-01-13 13:30:15', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_documents`
--

CREATE TABLE `tbl_documents` (
  `Id` varchar(50) NOT NULL,
  `Prerequisite` varchar(50) NOT NULL,
  `Code` varchar(100) NOT NULL,
  `DocumentName` varchar(100) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `CreatedById` varchar(50) NOT NULL,
  `CreatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedById` varchar(50) NOT NULL,
  `ModifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `VersionNum` int(11) NOT NULL DEFAULT '1',
  `IsActive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_documents`
--

INSERT INTO `tbl_documents` (`Id`, `Prerequisite`, `Code`, `DocumentName`, `Description`, `CreatedById`, `CreatedAt`, `ModifiedById`, `ModifiedAt`, `VersionNum`, `IsActive`) VALUES
('5497257b-4c63-340f-8fff-1181fa2242d0', '', 'orcr', 'Application Letter', 'Libero alias sit quis consequuntur. Aut iure minus aliquam aut incidunt sapiente. Iure id earum eveniet ut.', 'Administrator', '1984-06-29 22:49:05', 'Administrator', '1982-09-18 23:35:31', 1, 1),
('6c1c34cc-47ee-3134-a433-8eac670fc278', '6c1c34cc-47ee-3134-a433-8eac670fc278', 'bjzt', 'Endorsement Letter', 'Et ut ipsam ut sunt corporis animi officiis a. Consequatur eos repellendus tempore veniam animi earum amet. Ut fuga distinctio dolorem ducimus.', 'Administrator', '1983-02-21 19:17:21', 'Administrator', '1977-04-28 00:18:19', 1, 1),
('adcfdbe8-3c95-3d21-9504-715e0879bcb6', '6c1c34cc-47ee-3134-a433-8eac670fc278', 'elsy', 'Acceptance Letter', 'Omnis non atque omnis illo nemo voluptas. Et reiciendis ut minus temporibus odit quia. Fugit tempore nobis aut distinctio. Nemo eveniet quibusdam ut incidunt id.', 'Administrator', '1981-09-03 13:28:55', 'Administrator', '2013-11-16 01:28:36', 1, 1),
('d5298b09-3144-3493-922d-d06fae51ae42', 'adcfdbe8-3c95-3d21-9504-715e0879bcb6', 'eayz', 'Memorandum of Agreement', 'Deserunt porro excepturi odit sit quia consequatur. Perspiciatis at doloremque veritatis possimus perferendis deserunt. Doloribus ducimus minus non sed accusamus et voluptas. Repellat qui enim maxime ex voluptatem minus.', 'Administrator', '1996-07-09 21:28:57', 'Administrator', '1992-09-03 07:28:52', 1, 1),
('d9b22e66-da62-3c3a-aa03-e9295768f0ca', 'adcfdbe8-3c95-3d21-9504-715e0879bcb6', 'oopl', 'Waiver', 'Ea aperiam est repudiandae tempora itaque odit qui. Provident quia minus architecto voluptatum. Vel sit quo aut reiciendis qui ex.', 'Administrator', '1985-02-21 12:41:32', 'Administrator', '2002-04-04 08:11:57', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nationalities`
--

CREATE TABLE `tbl_nationalities` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Active` tinyint(1) NOT NULL,
  `Remarks` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `CreatedById` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ModifiedById` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CreatedAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `VersionNo` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_nationalities`
--

INSERT INTO `tbl_nationalities` (`Id`, `Code`, `Name`, `Active`, `Remarks`, `CreatedById`, `ModifiedById`, `CreatedAt`, `ModifiedAt`, `VersionNo`) VALUES
(1, '54021479', 'Filipino', 1, 'Migrated', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 04:32:16', '2018-04-08 04:32:16', 1),
(2, '204866410', 'Non-Filipino', 1, 'Migrated', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 04:32:18', '2018-04-08 04:32:18', 1),
(5, 'Afghan', 'Afghan', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(6, 'Albanian', 'Albanian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(7, 'Algerian', 'Algerian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(8, 'American', 'American', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(9, 'Andorran', 'Andorran', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(10, 'Angolan', 'Angolan', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(11, 'Antiguans', 'Antiguans', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(12, 'Argentinean', 'Argentinean', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(13, 'Armenian', 'Armenian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(14, 'Australian', 'Australian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(15, 'Austrian', 'Austrian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(16, 'Azerbaijani', 'Azerbaijani', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(17, 'Bahamian', 'Bahamian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(18, 'Bahraini', 'Bahraini', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(19, 'Bangladeshi', 'Bangladeshi', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(20, 'Barbadian', 'Barbadian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(21, 'Barbudans', 'Barbudans', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(22, 'Batswana', 'Batswana', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(23, 'Belarusian', 'Belarusian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(24, 'Belgian', 'Belgian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(25, 'Belizean', 'Belizean', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(26, 'Beninese', 'Beninese', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(27, 'Bhutanese', 'Bhutanese', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(28, 'Bolivian', 'Bolivian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(29, 'Bosnian', 'Bosnian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(30, 'Brazilian', 'Brazilian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(31, 'British', 'British', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(32, 'Bruneian', 'Bruneian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(33, 'Bulgarian', 'Bulgarian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(34, 'Burkinabe', 'Burkinabe', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(35, 'Burmese', 'Burmese', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(36, 'Burundian', 'Burundian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(37, 'Cambodian', 'Cambodian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(38, 'Cameroonian', 'Cameroonian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(39, 'Canadian', 'Canadian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(40, 'Cape Verdean', 'Cape Verdean', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(41, 'Central African', 'Central African', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(42, 'Chadian', 'Chadian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(43, 'Chilean', 'Chilean', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(44, 'Chinese', 'Chinese', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(45, 'Colombian', 'Colombian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(46, 'Comoran', 'Comoran', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(47, 'Congolese', 'Congolese', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(48, 'Costa Rican', 'Costa Rican', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(49, 'Croatian', 'Croatian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(50, 'Cuban', 'Cuban', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(51, 'Cypriot', 'Cypriot', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(52, 'Czech', 'Czech', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(53, 'Danish', 'Danish', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(54, 'Djibouti', 'Djibouti', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(55, 'Dominican', 'Dominican', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(56, 'Dutch', 'Dutch', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(57, 'East Timorese', 'East Timorese', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(58, 'Ecuadorean', 'Ecuadorean', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(59, 'Egyptian', 'Egyptian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(60, 'Emirian', 'Emirian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(61, 'Equatorial Guinean', 'Equatorial Guinean', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(62, 'Eritrean', 'Eritrean', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(63, 'Estonian', 'Estonian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(64, 'Ethiopian', 'Ethiopian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(65, 'Fijian', 'Fijian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(67, 'Finnish', 'Finnish', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(68, 'French', 'French', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(69, 'Gabonese', 'Gabonese', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(70, 'Gambian', 'Gambian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(71, 'Georgian', 'Georgian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(72, 'German', 'German', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(73, 'Ghanaian', 'Ghanaian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(74, 'Greek', 'Greek', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(75, 'Grenadian', 'Grenadian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(76, 'Guatemalan', 'Guatemalan', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(77, 'Guinea-Bissauan', 'Guinea-Bissauan', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(78, 'Guinean', 'Guinean', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(79, 'Guyanese', 'Guyanese', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(80, 'Haitian', 'Haitian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(81, 'Herzegovinian', 'Herzegovinian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(82, 'Honduran', 'Honduran', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(83, 'Hungarian', 'Hungarian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(84, 'I-Kiribati', 'I-Kiribati', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(85, 'Icelander', 'Icelander', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(86, 'Indian', 'Indian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(87, 'Indonesian', 'Indonesian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(88, 'Iranian', 'Iranian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(89, 'Iraqi', 'Iraqi', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(90, 'Irish', 'Irish', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(91, 'Israeli', 'Israeli', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(92, 'Italian', 'Italian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(93, 'Ivorian', 'Ivorian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(94, 'Jamaican', 'Jamaican', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(95, 'Japanese', 'Japanese', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(96, 'Jordanian', 'Jordanian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(97, 'Kazakhstani', 'Kazakhstani', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(98, 'Kenyan', 'Kenyan', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(99, 'Kittian and Nevisian', 'Kittian and Nevisian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(100, 'Kuwaiti', 'Kuwaiti', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(101, 'Kyrgyz', 'Kyrgyz', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(102, 'Laotian', 'Laotian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(103, 'Latvian', 'Latvian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(104, 'Lebanese', 'Lebanese', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(105, 'Liberian', 'Liberian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(106, 'Libyan', 'Libyan', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(107, 'Liechtensteiner', 'Liechtensteiner', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(108, 'Lithuanian', 'Lithuanian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(109, 'Luxembourger', 'Luxembourger', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(110, 'Macedonian', 'Macedonian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(111, 'Malagasy', 'Malagasy', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(112, 'Malawian', 'Malawian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(113, 'Malaysian', 'Malaysian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(114, 'Maldivian', 'Maldivian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(115, 'Malian', 'Malian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(116, 'Maltese', 'Maltese', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(117, 'Marshallese', 'Marshallese', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(118, 'Mauritanian', 'Mauritanian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(119, 'Mauritian', 'Mauritian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(120, 'Mexican', 'Mexican', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(121, 'Micronesian', 'Micronesian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(122, 'Moldovan', 'Moldovan', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(123, 'Monacan', 'Monacan', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(124, 'Mongolian', 'Mongolian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(125, 'Moroccan', 'Moroccan', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(126, 'Mosotho', 'Mosotho', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(127, 'Motswana', 'Motswana', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(128, 'Mozambican', 'Mozambican', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(129, 'Namibian', 'Namibian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(130, 'Nauruan', 'Nauruan', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(131, 'Nepalese', 'Nepalese', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(132, 'New Zealander', 'New Zealander', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(133, 'Ni-Vanuatu', 'Ni-Vanuatu', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(134, 'Nicaraguan', 'Nicaraguan', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(135, 'Nigerian', 'Nigerian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(136, 'Nigerien', 'Nigerien', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(137, 'North Korean', 'North Korean', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(138, 'Northern Irish', 'Northern Irish', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(139, 'Norwegian', 'Norwegian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(140, 'Omani', 'Omani', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(141, 'Pakistani', 'Pakistani', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(142, 'Palauan', 'Palauan', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(143, 'Panamanian', 'Panamanian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(144, 'Papua New Guinean', 'Papua New Guinean', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(145, 'Paraguayan', 'Paraguayan', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:51', '2018-04-08 11:14:51', 1),
(146, 'Peruvian', 'Peruvian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(147, 'Polish', 'Polish', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(148, 'Portuguese', 'Portuguese', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(149, 'Qatari', 'Qatari', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(150, 'Romanian', 'Romanian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(151, 'Russian', 'Russian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(152, 'Rwandan', 'Rwandan', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(153, 'Saint Lucian', 'Saint Lucian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(154, 'Salvadoran', 'Salvadoran', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(155, 'Samoan', 'Samoan', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(156, 'San Marinese', 'San Marinese', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(157, 'Sao Tomean', 'Sao Tomean', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(158, 'Saudi', 'Saudi', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(159, 'Scottish', 'Scottish', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(160, 'Senegalese', 'Senegalese', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(161, 'Serbian', 'Serbian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(162, 'Seychellois', 'Seychellois', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(163, 'Sierra Leonean', 'Sierra Leonean', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(164, 'Singaporean', 'Singaporean', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(165, 'Slovakian', 'Slovakian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(166, 'Slovenian', 'Slovenian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(167, 'Solomon Islander', 'Solomon Islander', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(168, 'Somali', 'Somali', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(169, 'South African', 'South African', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(170, 'South Korean', 'South Korean', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(171, 'Spanish', 'Spanish', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(172, 'Sri Lankan', 'Sri Lankan', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(173, 'Sudanese', 'Sudanese', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(174, 'Surinamer', 'Surinamer', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(175, 'Swazi', 'Swazi', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(176, 'Swedish', 'Swedish', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(177, 'Swiss', 'Swiss', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(178, 'Syrian', 'Syrian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(179, 'Taiwanese', 'Taiwanese', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(180, 'Tajik', 'Tajik', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(181, 'Tanzanian', 'Tanzanian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(182, 'Thai', 'Thai', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(183, 'Togolese', 'Togolese', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(184, 'Tongan', 'Tongan', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(185, 'Trinidadian', 'Trinidadian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(186, 'Tunisian', 'Tunisian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(187, 'Turkish', 'Turkish', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(188, 'Tuvaluan', 'Tuvaluan', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(189, 'Ugandan', 'Ugandan', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(190, 'Ukrainian', 'Ukrainian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(191, 'Uruguayan', 'Uruguayan', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(192, 'Uzbekistani', 'Uzbekistani', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(193, 'Venezuelan', 'Venezuelan', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(194, 'Vietnamese', 'Vietnamese', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(195, 'Welsh', 'Welsh', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(196, 'Yemenite', 'Yemenite', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(197, 'Zambian', 'Zambian', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(198, 'Zimbabwean', 'Zimbabwean', 1, '', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-08 11:14:52', '2018-04-08 11:14:52', 1),
(199, '1395942929', 'Guatemaltica', 1, 'Migrated', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '12606ac0-2765-11e8-84f1-b7d93b2b9334', '2018-04-11 03:19:11', '2018-04-11 03:19:11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ojt_applications`
--

CREATE TABLE `tbl_ojt_applications` (
  `Id` int(11) NOT NULL,
  `CompanyId` varchar(50) NOT NULL,
  `StudentId` varchar(50) NOT NULL,
  `LabelDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ContactPerson` varchar(100) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `CompanyName` varchar(100) NOT NULL,
  `CompanyAddress` varchar(300) NOT NULL,
  `CreatedById` varchar(50) NOT NULL,
  `CreatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedById` varchar(50) NOT NULL,
  `ModifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `VersionNum` int(11) NOT NULL DEFAULT '1',
  `IsActive` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_progress_value`
--

CREATE TABLE `tbl_progress_value` (
  `Id` int(11) NOT NULL,
  `DocumentId` varchar(50) NOT NULL,
  `ProgressValue` decimal(9,2) NOT NULL,
  `ProgressTotal` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_provinces`
--

CREATE TABLE `tbl_provinces` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RegionId` int(11) NOT NULL,
  `Active` tinyint(1) NOT NULL,
  `CreatedById` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ModifiedById` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CreatedAt` timestamp NULL DEFAULT NULL,
  `ModifiedAt` timestamp NULL DEFAULT NULL,
  `VersionNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_regions`
--

CREATE TABLE `tbl_regions` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Active` tinyint(1) NOT NULL,
  `CreatedById` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ModifiedById` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CreatedAt` timestamp NULL DEFAULT NULL,
  `ModifiedAt` timestamp NULL DEFAULT NULL,
  `VersionNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_regions`
--

INSERT INTO `tbl_regions` (`Id`, `Code`, `Name`, `Active`, `CreatedById`, `ModifiedById`, `CreatedAt`, `ModifiedAt`, `VersionNo`) VALUES
(1, 'Region1', 'Region 1 - Ilocos', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-03-12 20:11:13', '2018-03-12 20:11:13', 1),
(2, 'Region2', 'Region 2 - Cagayan Valley', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-03-12 20:11:13', '2018-03-12 20:11:13', 1),
(3, 'Region3', 'Region 3 - Central Luzon', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-03-12 20:11:13', '2018-03-12 20:11:13', 1),
(4, 'Region4a', 'Region 4a - Calabarzon', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-03-12 20:11:13', '2018-03-12 20:11:13', 1),
(5, 'Region4b', 'Region 4b - Mimaropa', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-03-12 20:11:13', '2018-03-12 20:11:13', 1),
(6, 'Region5', 'Region 5 - Bicol', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-03-12 20:11:13', '2018-03-12 20:11:13', 1),
(7, 'Region6', 'Region 6 - Western Visayas', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-03-12 20:11:13', '2018-03-12 20:11:13', 1),
(8, 'Region7', 'Region 7 - Central Visayas', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-03-12 20:11:13', '2018-03-12 20:11:13', 1),
(9, 'Region8', 'Region 8 - Eastern Visayas', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-03-12 20:11:13', '2018-03-12 20:11:13', 1),
(10, 'Region9', 'Region 9 - Zamboanga Peninsula', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-03-12 20:11:13', '2018-03-12 20:11:13', 1),
(11, 'Region10', 'Region 10 - Northern Mindanao', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-03-12 20:11:13', '2018-03-12 20:11:13', 1),
(12, 'Region11', 'Region 11 - Davao', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-03-12 20:11:13', '2018-03-12 20:11:13', 1),
(13, 'Region12', 'Region 12 - Soccsksargen', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-03-12 20:11:13', '2018-03-12 20:11:13', 1),
(14, 'Region13', 'Region 13 - Caraga', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-03-12 20:11:13', '2018-03-12 20:11:13', 1),
(15, 'Region14', 'Region 14 - Cordillera Administrative Region(CAR)', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-03-12 20:11:13', '2018-03-12 20:11:13', 1),
(16, 'Region15', 'Region 15 - Autonomous Region of Muslim Mindanao (ARMM)', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-03-12 20:11:13', '2018-03-12 20:11:13', 1),
(17, 'Region16', 'Region 16 - National Capital Region (NCR)', 1, '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '71d62210-22b0-11e8-87c4-47d00c4ae6d6', '2018-03-12 20:11:13', '2018-03-12 20:11:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school_levels`
--

CREATE TABLE `tbl_school_levels` (
  `Id` int(11) NOT NULL,
  `Code` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `CreatedById` varchar(50) NOT NULL,
  `CreatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedbyId` varchar(50) NOT NULL,
  `ModifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `VersionNum` int(11) NOT NULL DEFAULT '1',
  `IsActive` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_school_levels`
--

INSERT INTO `tbl_school_levels` (`Id`, `Code`, `Name`, `Description`, `CreatedById`, `CreatedAt`, `ModifiedbyId`, `ModifiedAt`, `VersionNum`, `IsActive`) VALUES
(1, 'I', 'First Year', '', 'ADMIN', '2019-01-13 13:34:59', 'ADMIN', '2019-01-13 13:34:59', 1, 1),
(2, 'II', 'Second Year', '', 'ADMIN', '2019-01-13 13:34:59', 'ADMIN', '2019-01-13 13:34:59', 1, 1),
(3, 'III', 'Third Year', '', 'ADMIN', '2019-01-13 13:34:59', 'ADMIN', '2019-01-13 13:34:59', 1, 1),
(4, 'IV', 'Fourth Year', '', 'ADMIN', '2019-01-13 13:34:59', 'ADMIN', '2019-01-13 13:34:59', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sections`
--

CREATE TABLE `tbl_sections` (
  `Id` int(11) NOT NULL,
  `Code` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `CreatedById` varchar(50) NOT NULL,
  `CreatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedbyId` varchar(50) NOT NULL,
  `ModifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `VersionNum` int(11) NOT NULL DEFAULT '1',
  `IsActive` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sections`
--

INSERT INTO `tbl_sections` (`Id`, `Code`, `Name`, `Description`, `CreatedById`, `CreatedAt`, `ModifiedbyId`, `ModifiedAt`, `VersionNum`, `IsActive`) VALUES
(1, 'Section1', 'Section 1', '', 'ADMIN', '2019-01-13 13:32:41', 'ADMIN', '2019-01-13 13:32:41', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semesters`
--

CREATE TABLE `tbl_semesters` (
  `Id` int(11) NOT NULL,
  `Code` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `CreatedById` varchar(50) NOT NULL,
  `CreatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedbyId` varchar(50) NOT NULL,
  `ModifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `VersionNum` int(11) NOT NULL DEFAULT '1',
  `IsActive` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_semesters`
--

INSERT INTO `tbl_semesters` (`Id`, `Code`, `Name`, `Description`, `CreatedById`, `CreatedAt`, `ModifiedbyId`, `ModifiedAt`, `VersionNum`, `IsActive`) VALUES
(1, 'FirstSem', 'First Semester', '', 'ADMIN', '2019-01-13 13:33:15', 'ADMIN', '2019-01-13 13:33:15', 1, 1),
(2, 'SecondSem', 'Second Semester', '', 'ADMIN', '2019-01-13 13:33:15', 'ADMIN', '2019-01-13 13:33:15', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sessions`
--

CREATE TABLE `tbl_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sessions`
--

INSERT INTO `tbl_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('042frcj1ga6rh3tfmfp6s50m3jtun7lb', '::1', 1548052522, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383035323532323b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('0bij58fsivf4hgo70796dqu5i39jaleg', '::1', 1547362874, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373336323837343b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('0msvgulhsftp5qer65rmk7dgto8q2ohk', '::1', 1547458849, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373435383639333b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('0oo4m6hp2u0lq46i8npm4n0mhk2f98kn', '::1', 1547364675, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373336343637353b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('204phrd2hsqnfiktac5gshjh2gfaes99', '::1', 1547363707, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373336333730373b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('2473tmd0q2ue32ubdov199pb1keil2nb', '::1', 1548049125, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383034393132353b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('2oeg4l9bi5m2keqvgtg8f0pt4tl6p8tm', '::1', 1547348945, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373334383934353b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('3q88uvh8mcs4ddehrcv11u4ipf5p0ri2', '::1', 1548061795, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383036313739353b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('430haettvpagh3a34ac6quvpj49th7ku', '::1', 1547363284, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373336333238343b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('4e7s3jj4auh2ans62l4bm3i1sf5ui794', '::1', 1548058497, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383035383439373b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('4f74qhnvfr7ipedlvnb92vkaoni22q5q', '::1', 1547370085, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373337303038353b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('57ojpacp8k7aldmdq9s29furrg7lsq7p', '::1', 1547359826, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373335393832363b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('5fja68tgnl19rv3uh0vcrkrnvs3gkoov', '::1', 1548051339, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383035313333393b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('5kln8bgjd3b7d6ane83dcbl415g7uq93', '::1', 1548055846, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383035353834363b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('60tigo8k82tnhmbtblm5tpn4mgpsl5jo', '::1', 1548053588, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383035333538383b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('6bcl6fq18uk12h5sim204804p8qi02sh', '::1', 1547368359, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373336383335393b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('87shb30g4tcv2kbbpakcuv8fhs3bnk7e', '::1', 1547358677, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373335383637373b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('8e4p9o5btleski9jpc07velb8gr5mihr', '::1', 1548059732, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383035393733323b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('8mggcqrnh02j1kk2f1ffof7eq426ui9v', '::1', 1548061472, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383036313437323b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('8qlnfihjd3pgoasfg8j516ssm46gnqt1', '::1', 1547362355, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373336323335353b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('8r6gfgdjdnacd57q8crtp8ovci8ajiod', '::1', 1547364983, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373336343938333b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('97prrepndt3bdmplqt118d1g9oihl19d', '::1', 1547385624, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373338353632343b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('9ckc83d4unfiib60jsj4s6vqee8crbv4', '::1', 1548053256, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383035333235363b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('ac4bull2dk33vb5ojfai4r6mrpg4k1i8', '::1', 1547354636, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373335343633363b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('at994lebp3i2osghsoke18q0quik8jur', '::1', 1547370871, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373337303837313b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('auv7jehnthkbfin0k37715n9bkvtinr8', '::1', 1547360135, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373336303133353b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('b3iprobm53n4hlbmaschli61c6o4k2p9', '::1', 1547364374, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373336343337343b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('b6bgsnrcg90ave3u4hudkf0uvtvdqn94', '::1', 1547383019, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373338333031393b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('bcfcag65hlkk7j3ihiv4k7egqpktimtv', '::1', 1547356479, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373335363437393b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('bmub97u6rei4cuint9rh3mqslra8lepm', '::1', 1547355600, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373335353630303b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('btv0hoeff7sbdcb30agns9t8j9r2epic', '::1', 1547351811, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373335313831313b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('c87fasgd5uqe8s2kn4k6s4ttogbnqid0', '::1', 1547373619, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373337333631393b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('codhk8eaq4f1no7g9kel5kv8sckq5ush', '::1', 1547383634, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373338333633343b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('d6c4ir7mcjbi2h6ndjim7adfo3g6hgba', '::1', 1548062589, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383036323535373b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('dr1tsn685vj27cth4n7jp4j76ev12nqf', '::1', 1548059203, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383035393230333b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('fq4u4bk0gpq6spcqg9n5qr86cgn7pb8e', '::1', 1547366399, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373336363339393b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('g26jci87els0fq7ie8ulv6pp59jj9run', '::1', 1547367419, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373336373431393b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('gkf28r46uuhpi4dt5gh8kmsba1uc7428', '::1', 1548060038, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383036303033383b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('gq38rci84sb9m3v228170uvh5u7ji4mj', '::1', 1547457368, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373435373336383b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('gti1nc468b67gkbl993e0g5pbut8fh53', '::1', 1547620226, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373632303038353b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('h4c24fgq2bdvaf9rr4ck5lf9ovluc8a2', '::1', 1547458392, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373435383339323b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('htsh2s5ltaeedlpeijggoeah62kr7ijl', '::1', 1548058163, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383035383136333b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('huaricr9036k137ufmbal49fpm8v1vna', '::1', 1547364054, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373336343035343b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('i137nc1tef8b0b1ihueo28qo9sks49p1', '::1', 1547354252, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373335343235323b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('i3dtougjj0tsdoqddoq24a4tek4tu82v', '::1', 1547359012, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373335393031323b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('j23c21hkj575h45ilusnt2tiqa1316rd', '::1', 1547385014, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373338353031343b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('j62p19o2pu1lcun8bv3ch6j7olqja648', '::1', 1548048686, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383034383638363b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('j6llb92tkcuaotc2esd6n1ml9p83us41', '::1', 1548041999, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383034313939393b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('j7dvlne1kgs64ets98q9qvp81pb5oc53', '::1', 1547367995, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373336373939353b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('jvoka3r2861ghp7dglveoldoku96j1qc', '::1', 1548056725, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383035363732353b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('k39l0i19u6fvc3pff7betujaj29a3bum', '::1', 1547356143, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373335363134333b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('kjqegfm21bpaobugb1kg8tb7sr0b93hi', '::1', 1547373623, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373337333631393b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('kqr8799gt4v07m8oovas1vdio981s36c', '::1', 1548040859, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383034303835393b),
('l4k8ts7cqrlhapoufvqk248a3bf2lfsh', '::1', 1547458693, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373435383639333b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('lbiebvec6ftcc28852j0osuqm8ni3mv1', '::1', 1547620085, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373632303038353b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('m1nuagpuhc92upap0dsg18aco30rfih4', '::1', 1547371278, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373337313237383b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('mdf7sne8eai5uiuaq8fia13p958qu5sr', '::1', 1547365652, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373336353635323b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('mq97b8ftehg88i0rir5lb51g6smvpd4j', '::1', 1547349460, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373334393436303b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('mrp01vin1d11des21a3mq3oa1qrurtl4', '::1', 1547353495, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373335333439353b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('nmcan9ba6q3mjdg8vc16k1n6m13u90fo', '::1', 1548041687, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383034313638373b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('o4647h371c74kjthb019v63g6oq1egbs', '::1', 1547434808, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373433343734343b),
('ol6pv1p6co7l8ffhot4mb7smsi1r24ms', '::1', 1547358112, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373335383131323b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('pbgceu3q32ip0rs3tb0j5f4nbk50srrc', '::1', 1548061059, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383036313035393b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('pbu9gof980m4bivh55v48ha0r5asf8gs', '::1', 1547357115, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373335373131353b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('pmm8nshcelliai10jcsg3n09lj7m44uf', '::1', 1547352261, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373335323236313b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('q8s7g197jkbceljhofp369nqlda90qdh', '::1', 1547385895, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373338353632343b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('qnrpq76f5s2seede8ilf507pq5ceishh', '::1', 1548052914, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383035323931343b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('rrp254o52osghbqlj28bio25qhmr797g', '::1', 1548062108, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383036323130383b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('s3ksa4dp9bkpii2um7d520t15gof8okb', '::1', 1548052062, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383035323036323b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('s63updsvn3iuq2aa5nnhqi1puatsbtol', '::1', 1548049478, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383034393437383b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('sbgqup05m5n4ethlp3rukfd0sq0f8ake', '::1', 1547362019, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373336323031393b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('uaaj4auuln858uj25tmhn1kgqlbc7j2t', '::1', 1547384662, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373338343636323b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('uapb0vgec0c4i69gsbprhiaeji83ra52', '::1', 1547619660, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534373631393635393b),
('vmi6qeprmugelblh91lae53uet9cjg5d', '::1', 1548062557, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383036323535373b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('vr5n4rhvgqqeq8ftrp3jf9lqbs2pt92v', '::1', 1548060381, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383036303338313b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('vve075fjdrvmjrab8v8po7mok0trvk57', '::1', 1548058798, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534383035383739383b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE `tbl_students` (
  `Id` char(36) NOT NULL,
  `Code` varchar(191) NOT NULL,
  `LastName` varchar(191) NOT NULL,
  `MiddleName` varchar(191) NOT NULL,
  `FirstName` varchar(191) NOT NULL,
  `Suffix` varchar(10) NOT NULL,
  `Birthdate` date NOT NULL,
  `Birthplace` varchar(1000) NOT NULL,
  `CivilStatus` varchar(100) NOT NULL,
  `Nationality` int(11) NOT NULL,
  `SectionId` int(11) NOT NULL,
  `CourseId` int(11) NOT NULL,
  `YearLevelId` int(11) NOT NULL,
  `SemesterId` int(11) NOT NULL,
  `Advisor` varchar(200) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `TelNo` varchar(191) NOT NULL,
  `MobileNo` varchar(191) NOT NULL,
  `PersonalEmail` varchar(191) NOT NULL,
  `HouseNo` varchar(10) NOT NULL,
  `Address1` varchar(191) NOT NULL,
  `Address2` varchar(191) NOT NULL,
  `Address3` varchar(191) NOT NULL,
  `Address4` varchar(191) NOT NULL,
  `Address5` varchar(191) NOT NULL,
  `Address6` varchar(191) NOT NULL,
  `CityId` int(11) NOT NULL,
  `ProvinceId` int(11) NOT NULL,
  `ZipCode` varchar(191) NOT NULL,
  `VersionNo` int(11) NOT NULL DEFAULT '1',
  `Photopath` text NOT NULL,
  `BannerPath` text NOT NULL,
  `Migrated` tinyint(1) NOT NULL,
  `CreatedById` varchar(191) NOT NULL,
  `CreatedAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedById` varchar(191) NOT NULL,
  `ModifiedAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Remarks` longtext NOT NULL,
  `Status` varchar(100) NOT NULL,
  `VersionNum` int(11) NOT NULL DEFAULT '1',
  `IsActive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`Id`, `Code`, `LastName`, `MiddleName`, `FirstName`, `Suffix`, `Birthdate`, `Birthplace`, `CivilStatus`, `Nationality`, `SectionId`, `CourseId`, `YearLevelId`, `SemesterId`, `Advisor`, `Gender`, `TelNo`, `MobileNo`, `PersonalEmail`, `HouseNo`, `Address1`, `Address2`, `Address3`, `Address4`, `Address5`, `Address6`, `CityId`, `ProvinceId`, `ZipCode`, `VersionNo`, `Photopath`, `BannerPath`, `Migrated`, `CreatedById`, `CreatedAt`, `ModifiedById`, `ModifiedAt`, `Remarks`, `Status`, `VersionNum`, `IsActive`) VALUES
('5dc2460b-3ebc-4959-a7e4-5f6345486156', '', 'Carpio', 'Iglesia', 'John Perry', '', '1993-02-20', '', 'Single', 1, 1, 3, 1, 1, '69a372ef-5183-3586-aeee-e9c3c5e87a32', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 1, 'uploads/public/Photo9.jpg', 'uploads/public/TP_New_Branding_Wallpapers-04.jpg', 0, 'Administrator', '2019-01-21 06:48:23', 'Administrator', '0000-00-00 00:00:00', '', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students2`
--

CREATE TABLE `tbl_students2` (
  `Id` char(36) NOT NULL,
  `Code` varchar(191) NOT NULL,
  `LastName` varchar(191) NOT NULL,
  `MiddleName` varchar(191) NOT NULL,
  `FirstName` varchar(191) NOT NULL,
  `Suffix` varchar(10) NOT NULL,
  `Birthdate` date NOT NULL,
  `Birthplace` varchar(1000) NOT NULL,
  `CivilStatus` varchar(100) NOT NULL,
  `Nationality` int(11) NOT NULL,
  `SectionId` int(11) NOT NULL,
  `CourseId` int(11) NOT NULL,
  `YearLevelId` int(11) NOT NULL,
  `SemesterId` int(11) NOT NULL,
  `Advisor` varchar(200) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `TelNo` varchar(191) NOT NULL,
  `MobileNo` varchar(191) NOT NULL,
  `PersonalEmail` varchar(191) NOT NULL,
  `HouseNo` varchar(10) NOT NULL,
  `Address1` varchar(191) NOT NULL,
  `Address2` varchar(191) NOT NULL,
  `Address3` varchar(191) NOT NULL,
  `Address4` varchar(191) NOT NULL,
  `Address5` varchar(191) NOT NULL,
  `Address6` varchar(191) NOT NULL,
  `CityId` int(11) NOT NULL,
  `ProvinceId` int(11) NOT NULL,
  `ZipCode` varchar(191) NOT NULL,
  `VersionNo` int(11) NOT NULL DEFAULT '1',
  `Photopath` blob NOT NULL,
  `BannerPath` blob NOT NULL,
  `Migrated` tinyint(1) NOT NULL,
  `CreatedById` varchar(191) NOT NULL,
  `CreatedAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedById` varchar(191) NOT NULL,
  `ModifiedAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Remarks` longtext NOT NULL,
  `Status` varchar(100) NOT NULL,
  `VersionNum` int(11) NOT NULL DEFAULT '1',
  `IsActive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_students2`
--

INSERT INTO `tbl_students2` (`Id`, `Code`, `LastName`, `MiddleName`, `FirstName`, `Suffix`, `Birthdate`, `Birthplace`, `CivilStatus`, `Nationality`, `SectionId`, `CourseId`, `YearLevelId`, `SemesterId`, `Advisor`, `Gender`, `TelNo`, `MobileNo`, `PersonalEmail`, `HouseNo`, `Address1`, `Address2`, `Address3`, `Address4`, `Address5`, `Address6`, `CityId`, `ProvinceId`, `ZipCode`, `VersionNo`, `Photopath`, `BannerPath`, `Migrated`, `CreatedById`, `CreatedAt`, `ModifiedById`, `ModifiedAt`, `Remarks`, `Status`, `VersionNum`, `IsActive`) VALUES
('00fd66cf-4126-3a06-87ef-dbc57df417ae', 'rrmr', 'Lind', 'ut', 'Bernie', 'V', '1988-03-17', '10418 Wisozk Radial\nArmstrongmouth, RI 68698-1522', 'Velit ut perspiciatis nesciunt sit totam. Et delectus totam illum.', 0, 1, 2, 3, 2, 'Prof. Madie Oberbrunner', '', '', '', 'alanis.donnelly@example.org', '', '60706 Satterfield Trail\nLake Jordy, SC 86718', '', '', '', '', '', 3, 3, 'msse', 1, 0x6173736574732f696d672f617661746172362e706e67, '', 0, '', '1995-06-04 02:54:48', '', '2014-12-04 22:12:21', 'Error soluta deleniti mollitia adipisci. Ex nemo ut ut iure quod perferendis ut. Magni aut blanditiis quia doloribus sed. Impedit accusantium provident consequatur eius necessitatibus.', 'Praesentium odio voluptatem voluptas possimus id nemo qui minus. Id numquam non sunt aliquam. Reicie', 1, 1),
('21658803-2bfb-3f6b-a676-5e987cf833c2', 'sbsq', 'Murazik', 'laudantium', 'Amira', 'I', '2008-11-06', '6920 Letitia Key\nDejuanville, DE 64072-3541', 'Eius voluptatum blanditiis aliquid dolor quod. Quo ea optio minus delectus. Quo incidunt aliquid des', 0, 1, 1, 3, 2, 'Louie Littel', '', '', '', 'schiller.brenna@example.net', '', '2983 Tom Inlet Apt. 851\nEast Kane, MT 17112', '', '', '', '', '', 3, 7, 'zhxf', 1, 0x6173736574732f696d672f617661746172362e706e67, '', 0, '', '1980-05-27 15:40:02', '', '2004-12-25 02:37:00', 'Laboriosam aut ducimus dolore culpa impedit error maxime esse. Dolor quia et enim voluptas alias. Optio qui et delectus recusandae.', 'Expedita placeat et aut nam accusantium et. Corrupti veritatis assumenda accusantium odit sunt aut r', 1, 0),
('2b10e3c0-9b03-3545-9fff-6d1ba7d5d8c5', 'fihs', 'Funk', 'beatae', 'Cleo', 'I', '2004-10-27', '851 Hartmann Well\nPort Demarcusport, DE 13890-5124', 'Corrupti qui aut et sequi debitis. Ea voluptatibus tenetur quo ipsam enim. Magni quisquam impedit la', 0, 1, 0, 3, 2, 'Hiram Sipes IV', '', '', '', 'jast.magnolia@example.net', '', '757 Lelia Motorway Apt. 738\nNew Cathymouth, AR 74791', '', '', '', '', '', 7, 3, 'dmec', 1, 0x6173736574732f696d672f617661746172362e706e67, '', 0, '', '1973-03-14 20:01:59', '', '1986-02-27 21:00:08', 'Ratione amet nulla dolor et sunt laborum distinctio. Veritatis adipisci culpa vitae doloremque totam molestias. Ut numquam voluptates minus consequatur a illum distinctio et.', 'Eveniet aspernatur quisquam et non animi. Ipsam est qui delectus dolore qui ex iure. Ullam in eligen', 1, 0),
('33856b54-4883-316d-9a49-1507cdffeddd', 'kpci', 'Corwin', 'quasi', 'Elda', 'I', '2011-09-04', '9198 Gutkowski Turnpike\nNew Genesis, AR 39085-8789', 'Rem aspernatur nemo voluptatibus accusantium officia laboriosam. In repudiandae consequuntur qui eve', 0, 1, 0, 3, 2, 'Prof. Reginald Ankunding', '', '', '', 'iadams@example.org', '', '577 Kilback Divide Suite 904\nWiegandland, MA 69124', '', '', '', '', '', 5, 2, 'ucmg', 1, 0x6173736574732f696d672f617661746172362e706e67, '', 0, '', '1999-10-06 18:28:36', '', '2017-03-19 20:24:58', 'Dolorum culpa est reprehenderit facere quisquam adipisci commodi. Sed omnis nesciunt hic et ratione sunt magnam. Repellat modi quod placeat minima qui reprehenderit. Minima repellat perspiciatis eius sit alias.', 'Aut consequatur libero et nihil id quasi a. Explicabo dolor et ut. Dolores et doloribus dolorum dolo', 1, 0),
('385e6c75-7f62-3403-9ead-146c661a70d1', 'vhwp', 'Herzog', 'est', 'Bethel', 'IV', '1986-09-01', '609 Brice Mill Suite 689\nLlewellynfort, NE 41938-6747', 'Animi velit sunt soluta aut. Autem consequatur natus animi atque ipsam eligendi consequatur. Perspic', 0, 1, 0, 3, 2, 'German Heller MD', '', '', '', 'mante.maia@example.net', '', '1160 Harvey Loaf\nWisozkchester, OK 14166', '', '', '', '', '', 2, 6, 'autv', 1, 0x6173736574732f696d672f617661746172362e706e67, '', 0, '', '1976-01-06 12:35:54', '', '1979-05-19 04:45:29', 'Beatae sint iste similique voluptates rerum soluta laborum. Ea dolorem est et officiis non labore eos omnis. Hic labore iste qui nihil voluptate nihil. Est explicabo saepe ipsam aliquid.', 'Molestias et distinctio totam qui placeat. Iure veritatis labore vero officia. Aliquid aut totam lau', 1, 1),
('3e34db5d-3b51-3d15-a346-6cf434f3a60c', 'xdoz', 'Gleichner', 'voluptatem', 'Adell', 'II', '1979-05-26', '606 Halle Landing Apt. 832\nMrazchester, CO 73255', 'Deleniti maiores ut totam consequatur et. Possimus quas aut explicabo voluptatibus rerum. Tempora ve', 0, 1, 0, 3, 2, 'Clyde Green', '', '', '', 'felicita.donnelly@example.org', '', '7637 Jillian Station Apt. 529\nPort Edwardhaven, MO 79792-2864', '', '', '', '', '', 6, 2, 'gpdt', 1, 0x6173736574732f696d672f617661746172362e706e67, '', 0, '', '1973-10-14 13:02:26', '', '2007-02-05 18:08:45', 'Dolore et excepturi non quas possimus ea sit. Deserunt et nostrum itaque officiis. Eaque sequi porro ut doloribus sit sunt aliquam. Et inventore explicabo blanditiis sunt quibusdam.', 'Labore veritatis maiores sit quo voluptatem quia esse. Et sed perspiciatis debitis. Culpa provident ', 1, 1),
('42da265c-c5b1-31cc-a277-01b0865f2e01', 'onvs', 'Miller', 'cupiditate', 'Joelle', 'V', '1993-06-03', '06729 Alyson Inlet Apt. 330\nNorth Jessehaven, WY 77268-8216', 'Hic voluptas et quia laborum et possimus. Nisi veniam qui vel qui. Et officia praesentium vel conseq', 0, 1, 0, 3, 2, 'Junior McGlynn II', '', '', '', 'kborer@example.com', '', '39280 Rau Islands Apt. 335\nWeissnatchester, NY 51047-1518', '', '', '', '', '', 3, 1, 'fqgv', 1, 0x6173736574732f696d672f617661746172362e706e67, '', 0, '', '2010-02-03 12:15:26', '', '1980-07-11 10:03:12', 'Et iusto sint quia eveniet molestiae porro fugit. Consequatur dolorum porro provident cum repellendus rerum. Esse amet est dolorem unde necessitatibus. Quibusdam deleniti maxime id beatae est. Ipsam magni quis et modi ea.', 'Vitae voluptatem et eligendi non adipisci et est quisquam. Vitae iste saepe dolorem quasi consequunt', 1, 0),
('4980085b-8b63-3900-9564-5133175525dd', 'hust', 'Bogisich', 'aliquam', 'Valentine', 'II', '1994-06-03', '07454 Herman Tunnel Apt. 077\nEast Helene, PA 76791', 'Unde itaque est porro ex. Est qui quae est. Similique et fugiat ipsa odio sint asperiores reprehende', 0, 1, 0, 3, 2, 'Miss Alicia Kessler', '', '', '', 'simeon34@example.org', '', '2851 Haley Court\nGoldnertown, VA 34277-0130', '', '', '', '', '', 7, 8, 'pctb', 1, 0x6173736574732f696d672f617661746172362e706e67, '', 0, '', '2009-09-16 22:41:13', '', '1998-03-23 17:08:38', 'Nam molestiae consectetur dicta et aut. Quidem quibusdam aut voluptatum exercitationem corporis laboriosam aperiam. Nihil voluptas unde maxime minima minus.', 'Sint molestias deserunt temporibus aut dolores repellendus et nulla. Consectetur in ut voluptatem mo', 1, 0),
('5ed362b2-3055-398f-b0c8-adf9e365f977', 'hfoe', 'Willms', 'dolorem', 'Quinn', 'I', '1993-08-21', '3099 Abelardo Rest\nNitzschechester, ID 06461-7696', 'Dicta qui explicabo cum officia sit ducimus fugiat. Consequatur et iste quod commodi eaque. Vel duci', 0, 1, 0, 3, 2, 'Bernhard Schultz', '', '', '', 'ericka91@example.com', '', '6075 Jerde Crossroad\nSchambergerside, MT 73213', '', '', '', '', '', 7, 9, 'xcvw', 1, 0x6173736574732f696d672f617661746172362e706e67, '', 0, '', '1978-05-04 23:10:16', '', '2014-10-08 16:39:13', 'Qui reiciendis dolorum atque nisi quia fuga. Reiciendis non aut omnis possimus minima. Omnis ea illo labore facilis pariatur cum quaerat.', 'Quo non qui laboriosam ratione. Iure optio odio amet sed eos non. Porro consequuntur suscipit aperia', 1, 1),
('7aeada7a-f3e3-3840-b1c0-f90239181d51', 'mnwv', 'Ledner', 'consequatur', 'Quentin', 'DVM', '2011-04-27', '10479 Lang Village\nRitchiefort, IL 47210', 'Laudantium quos quibusdam magnam rem sint eos. Nihil laboriosam aperiam expedita soluta itaque. In l', 0, 1, 0, 3, 2, 'Lindsey Hoppe', '', '', '', 'lexus.lindgren@example.com', '', '567 McDermott Divide Suite 896\nSouth Alexanneburgh, NV 96437', '', '', '', '', '', 5, 0, 'nuqa', 1, 0x6173736574732f696d672f617661746172362e706e67, '', 0, '', '1981-02-19 10:31:25', '', '1999-05-09 13:48:58', 'Et omnis harum debitis velit occaecati. Assumenda ea et ut. Officiis odio qui illo sequi eum.', 'Ipsum accusantium voluptatem inventore omnis. Fugit nam mollitia iure. Accusamus enim rerum itaque q', 1, 0),
('9045c422-c801-4131-88f5-508915e7a7a4', '', '', '', 'asdasd', '', '0000-00-00', '', 'Single', 0, 1, 3, 1, 1, '69a372ef-5183-3586-aeee-e9c3c5e87a32', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 1, '', '', 0, 'Administrator', '2019-01-21 03:38:18', 'Administrator', '2019-01-21 03:38:18', '', '', 1, 1),
('ab9a0baf-093e-357c-84df-b092a8cd1417', 'fpkx', 'Huels', 'ipsa', 'Earlene', 'MD', '2007-06-14', '7659 Tara Rue\nNorth Syble, OR 13870', 'Architecto reiciendis non et. Quas impedit accusamus voluptatem. Vel provident nihil et voluptatibus', 0, 1, 0, 3, 2, 'Antone Zemlak IV', '', '', '', 'glennie.parisian@example.com', '', '114 Kulas Islands\nSouth Billy, FL 96435', '', '', '', '', '', 3, 6, 'nhpo', 1, 0x6173736574732f696d672f617661746172362e706e67, '', 0, '', '1980-03-26 07:43:43', '', '2016-12-01 03:10:42', 'Doloremque est blanditiis vel molestiae veritatis consequatur dicta. Voluptatem consequuntur fuga eligendi ducimus vero. Rerum quae sit et molestiae neque maiores in quas.', 'Voluptatem est voluptas perspiciatis minima sunt. Nesciunt rerum voluptatem accusamus consequatur hi', 1, 1),
('ad34848b-e1bb-3fe9-a2eb-e405674f2c5a', 'weuq', 'Pfeffer', 'alias', 'Urban', 'Sr.', '1974-01-08', '20382 Bethel Haven\nLake Tyree, ID 65902-0234', 'Magni deserunt quae qui consequatur et assumenda. Porro dolorem maxime eveniet dolor mollitia sed mo', 0, 1, 0, 3, 2, 'Tanya Ankunding', '', '', '', 'kling.maryjane@example.com', '', '6791 Adrianna Wall\nCarletonport, MS 85385', '', '', '', '', '', 8, 3, 'icrc', 1, 0x6173736574732f696d672f617661746172362e706e67, '', 0, '', '1999-02-04 15:31:10', '', '1971-02-03 06:04:10', 'Impedit distinctio sint consectetur. Architecto assumenda molestiae ipsum dolore est molestiae. Aspernatur velit totam voluptatum totam architecto necessitatibus ratione. Fugit voluptas modi praesentium sed et quaerat.', 'Et occaecati rem non voluptates eum. Provident molestiae optio non officiis. Sapiente quas qui omnis', 1, 1),
('b78d96fe-8616-3307-86c5-60a6ad0fd2d5', 'sojf', 'Weissnat', 'necessitatibus', 'Kaylah', 'IV', '1998-06-04', '384 Zackery Common\nEast Jeanne, KY 05206-0796', 'Aperiam sed sunt commodi dolor alias corporis sed. Non voluptate vero dolorem occaecati molestias. V', 0, 1, 0, 3, 2, 'Jerrold Bechtelar', '', '', '', 'kreiger.celia@example.org', '', '93861 Heller Hill\nWest Jacklyn, RI 83645', '', '', '', '', '', 5, 9, 'vryj', 1, 0x6173736574732f696d672f617661746172362e706e67, '', 0, '', '2006-04-24 06:04:03', '', '1990-07-12 03:42:32', 'Facilis ad beatae quos sed ipsa. Et cumque aut sit odit. Ex ea repudiandae omnis sed sed dolor.', 'Velit vero eos quos magnam. Sapiente ut nobis id aperiam. Hic omnis velit ut. Velit neque quibusdam ', 1, 1),
('b84402aa-8284-3a32-844e-ed1a1a60efbc', 'ylyk', 'Keeling', 'eius', 'Lera', 'II', '2004-08-01', '4137 Jerde Valleys Apt. 374\nNorth Chesley, NE 67995', 'Quis hic non qui officia. Natus reiciendis saepe velit nemo itaque officiis quia. Consequatur aspern', 0, 1, 0, 3, 2, 'Garett Raynor', '', '', '', 'winifred.treutel@example.com', '', '10636 Rice Street Suite 062\nLake Santabury, KY 66098-3759', '', '', '', '', '', 9, 2, 'xekb', 1, 0x6173736574732f696d672f617661746172362e706e67, '', 0, '', '2006-12-22 16:19:37', '', '2002-12-13 17:47:56', 'Aliquid eum dolorem est ex et commodi. Aut fugit ipsum soluta sed tenetur.', 'Reiciendis dolor ipsam molestiae. Non accusamus aut fugiat maiores. Cumque ut asperiores quia quae. ', 1, 0),
('ca0a39aa-8b1d-3bff-8522-f8175edd4b10', 'wwvx', 'Hahn', 'qui', 'Dudley', 'I', '2004-07-20', '5388 Paucek Forge Suite 121\nNorth Geoffreymouth, MS 44878', 'Voluptatem dicta laborum laudantium id omnis. Non inventore sunt eligendi. Odit aut voluptas sit est', 0, 1, 0, 3, 2, 'Johnathon O\'Hara', '', '', '', 'ova92@example.com', '', '133 Casimir Trace Suite 015\nSouth Bernhard, UT 09957-2734', '', '', '', '', '', 2, 3, 'rxuk', 1, 0x6173736574732f696d672f617661746172362e706e67, '', 0, '', '2015-08-05 18:16:05', '', '1998-07-02 10:29:46', 'Voluptatibus omnis et qui tenetur modi est dolor. Unde iste doloremque blanditiis ut ipsum. Laborum perspiciatis voluptates nobis aut.', 'Dolor earum itaque aut earum ex. Quae et tempore ipsam totam odio blanditiis. Blanditiis qui repelle', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_suffix`
--

CREATE TABLE `tbl_suffix` (
  `Id` int(11) NOT NULL,
  `Code` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `CreatedById` varchar(50) NOT NULL,
  `CreatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedbyId` varchar(50) NOT NULL,
  `ModifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `VersionNum` int(11) NOT NULL DEFAULT '1',
  `IsActive` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `Id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserCode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FirstName` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LastName` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LoginName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PasswordHash` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SecurityUserLevelId` int(11) NOT NULL,
  `PasswordNeverExpires` tinyint(1) NOT NULL,
  `UserCantChangePassword` tinyint(1) NOT NULL,
  `UserChangePasswordNextLogon` tinyint(1) NOT NULL,
  `PasswordDate` date NOT NULL,
  `VersionNum` int(11) NOT NULL DEFAULT '1',
  `AccountId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserType` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserPhoto` longblob NOT NULL,
  `ActivationCode` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Remarks` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CreatedById` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ModifiedById` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CreatedAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifiedAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`Id`, `UserCode`, `FirstName`, `LastName`, `LoginName`, `PasswordHash`, `SecurityUserLevelId`, `PasswordNeverExpires`, `UserCantChangePassword`, `UserChangePasswordNextLogon`, `PasswordDate`, `VersionNum`, `AccountId`, `UserType`, `Email`, `UserPhoto`, `ActivationCode`, `Remarks`, `remember_token`, `CreatedById`, `ModifiedById`, `CreatedAt`, `ModifiedAt`, `Active`) VALUES
('4cc61a7b-2c6e-3e9f-9357-8d530e79d310', 'nmrs', 'Kiana', 'Larson', 'veritatis', '88700a305767b4949dfa1aaa193e544b3c309b72', 0, 5, 0, 0, '2001-07-24', 1, '6', '', 'kerluke.emma@example.org', 0x2f66343865646230386236363137313437626134356163316465626435326661642e6a7067, 'fccg', 'Placeat quam suscipit nobis quas. Quasi ea atque vitae totam quasi occaecati rerum. Mollitia porro consectetur hic eum alias. Perspiciatis vel esse molestiae eum recusandae nostrum vero inventore.', NULL, '', '', '1994-06-09 13:10:42', '2006-02-05 05:35:01', 0),
('Administrator', 'ADMIN', 'Administrator', '', 'admin', '318ccd4ddeddd5673a54d83f29ba0cdb7c89f67e48a947e6f1435a995c7e2592d388ffda42c71a49115e225576d3bfc99d67514c57bb1a82dac92ce7c552b25e', 99, 1, 0, 0, '1971-04-02', 1, '00fd66cf-4126-3a06-87ef-dbc57df417ae', 'ADMIN', 'admin@earist-cit.com', 0x2f63366464643837346665663137643263343030316530323965346630303466642e6a7067, 'ivnb', 'Voluptas provident porro sit dicta omnis deleniti. Rerum ex maiores quidem perferendis. Ad accusantium rerum est unde ipsa. Repellat laborum magni rerum qui aut deleniti quam.', NULL, '', '', '1996-12-07 14:15:49', '2002-05-25 08:53:08', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_advisors`
--
ALTER TABLE `tbl_advisors`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_companies`
--
ALTER TABLE `tbl_companies`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_documents`
--
ALTER TABLE `tbl_documents`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_nationalities`
--
ALTER TABLE `tbl_nationalities`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_ojt_applications`
--
ALTER TABLE `tbl_ojt_applications`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_progress_value`
--
ALTER TABLE `tbl_progress_value`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_provinces`
--
ALTER TABLE `tbl_provinces`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_regions`
--
ALTER TABLE `tbl_regions`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_school_levels`
--
ALTER TABLE `tbl_school_levels`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_sections`
--
ALTER TABLE `tbl_sections`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_semesters`
--
ALTER TABLE `tbl_semesters`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_sessions`
--
ALTER TABLE `tbl_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_students2`
--
ALTER TABLE `tbl_students2`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_suffix`
--
ALTER TABLE `tbl_suffix`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `tbl_sys_securityusers_loginname_unique` (`LoginName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_nationalities`
--
ALTER TABLE `tbl_nationalities`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT for table `tbl_ojt_applications`
--
ALTER TABLE `tbl_ojt_applications`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_progress_value`
--
ALTER TABLE `tbl_progress_value`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_provinces`
--
ALTER TABLE `tbl_provinces`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_regions`
--
ALTER TABLE `tbl_regions`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_school_levels`
--
ALTER TABLE `tbl_school_levels`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_sections`
--
ALTER TABLE `tbl_sections`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_semesters`
--
ALTER TABLE `tbl_semesters`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_suffix`
--
ALTER TABLE `tbl_suffix`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
