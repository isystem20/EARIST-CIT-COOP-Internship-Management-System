-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2019 at 05:45 AM
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
('0quf7vlk53dvodn0ieae1qq3k25jaglg', '::1', 1546519179, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363531393137393b),
('140nb22vrun9otkioeejspve40qubo36', '::1', 1546646943, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363634363934333b),
('28ralbojjp0mgcn3kqutlvu2ndd7thp1', '::1', 1546646180, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363634363138303b),
('2dmf0cmqtrhbuktdiglc7qqukpfgegvs', '::1', 1546648203, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363634383230333b),
('31q0oh9op61dhfda4vi84mo2017e0s5o', '::1', 1546507114, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363530373131343b),
('75rvmq0jqc0pi6p4djpm5mr77n87e0ev', '::1', 1546520639, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363532303633393b),
('7tjrtac7ua7rif6p2oe9v7peh9mgdan7', '::1', 1546517293, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363531373239333b),
('86g6iuo8135uuqb2oaohl9ojhkt6e44a', '::1', 1546506678, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363530363637383b),
('99kvpkv5qh5fl4sv6b2klf81cs8tlimj', '::1', 1546435185, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363433353138353b),
('a2ctbeugqfsq12jobg74275hugt8d9k2', '::1', 1546520258, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363532303235383b),
('abuif6eh3vdv7jv8g5vu8elol5bm45a8', '::1', 1546652137, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363635323133373b),
('bseroam7l2roo6hml25dpb8b0mrr8fv9', '::1', 1546435494, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363433353439343b),
('ck2ofba71nmj44bef3p2dpi3uvno90aa', '::1', 1546507131, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363530373131343b),
('d3sbl7kcor0r8l71ogn3389r028p828e', '::1', 1546646529, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363634363532393b),
('e28nueanr7hlsfk9rpriiid9q7p0s5am', '::1', 1546648546, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363634383534363b),
('gunp70lsa8qc3j6c58dmfitve0su4hu3', '::1', 1546517884, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363531373838343b),
('jd0qq799vek7cavjr4teistmelaf9el9', '::1', 1546652440, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363635323434303b7573657269647c733a31333a2241646d696e6973747261746f72223b6c6173746e616d657c733a303a22223b66697273746e616d657c733a31333a2241646d696e6973747261746f72223b7374617475737c733a313a2231223b6163746976657c733a313a2231223b73656375726974795f69647c733a323a223939223b75736572747970657c733a353a2241444d494e223b70656f706c6569647c4e3b4163636f756e7449647c733a33363a2230306664363663662d343132362d336130362d383765662d646263353764663431376165223b),
('jj9q8o7c1djft08ttduhgpq8pt4q9c47', '::1', 1546651149, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363635313134393b),
('jm7ucvdot1kls1iud8bsphrr8cu5gh7q', '::1', 1546435526, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363433353439343b),
('knsqk4q6tjs2evu99bimmee9prhlalke', '::1', 1546649799, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363634393739393b),
('mehjvog07a0aefud656o2ckc3ngrkish', '::1', 1546652753, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363635323735333b),
('nqk0mght7epcchpulrpcsgnu6vmfvs97', '::1', 1546521258, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363532303938343b),
('onmpsl83tcictuq27d5a7ginv4lfmsl2', '::1', 1546518201, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363531383230313b),
('pq7ief8lalpriafb71kp162ageejafum', '::1', 1546651451, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363635313435313b),
('ptecbos92qohsd0hfnd78tme2ueh1jtt', '::1', 1546647536, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363634373533363b),
('stno96lb5ol95fj10hjpb71lm4pkf3th', '::1', 1546520984, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363532303938343b),
('svi2saqme9akte8ngg21c796cfi64l1p', '::1', 1546645715, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363634353731353b),
('t3s5cc6lp2e3q1v7k21a7ellu7gg8kg0', '::1', 1546652928, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363635323932383b),
('vqgmj9krs9rjk828tbmf1gr17bk0iofp', '::1', 1546518692, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534363531383639323b);

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
  `Section` varchar(100) NOT NULL,
  `YearLevel` varchar(100) NOT NULL,
  `Semester` varchar(100) NOT NULL,
  `AdvisorName` varchar(200) NOT NULL,
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
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`Id`, `Code`, `LastName`, `MiddleName`, `FirstName`, `Suffix`, `Birthdate`, `Birthplace`, `CivilStatus`, `Section`, `YearLevel`, `Semester`, `AdvisorName`, `Gender`, `TelNo`, `MobileNo`, `PersonalEmail`, `HouseNo`, `Address1`, `Address2`, `Address3`, `Address4`, `Address5`, `Address6`, `CityId`, `ProvinceId`, `ZipCode`, `VersionNo`, `Photopath`, `Migrated`, `CreatedById`, `CreatedAt`, `ModifiedById`, `ModifiedAt`, `Remarks`, `Status`, `VersionNum`, `IsActive`) VALUES
('00fd66cf-4126-3a06-87ef-dbc57df417ae', 'rrmr', 'Lind', 'ut', 'Bernie', 'V', '1988-03-17', '10418 Wisozk Radial\nArmstrongmouth, RI 68698-1522', 'Velit ut perspiciatis nesciunt sit totam. Et delectus totam illum.', '4c341c45-3ae6-3503-a099-c301e899b8e5', '1976', '', 'Prof. Madie Oberbrunner', '', '', '', 'alanis.donnelly@example.org', '', '60706 Satterfield Trail\nLake Jordy, SC 86718', '', '', '', '', '', 3, 3, 'msse', 1, 'assets/img/avatar6.png', 0, '', '1995-06-04 02:54:48', '', '2014-12-04 22:12:21', 'Error soluta deleniti mollitia adipisci. Ex nemo ut ut iure quod perferendis ut. Magni aut blanditiis quia doloribus sed. Impedit accusantium provident consequatur eius necessitatibus.', 'Praesentium odio voluptatem voluptas possimus id nemo qui minus. Id numquam non sunt aliquam. Reicie', 1, 1),
('21658803-2bfb-3f6b-a676-5e987cf833c2', 'sbsq', 'Murazik', 'laudantium', 'Amira', 'I', '2008-11-06', '6920 Letitia Key\nDejuanville, DE 64072-3541', 'Eius voluptatum blanditiis aliquid dolor quod. Quo ea optio minus delectus. Quo incidunt aliquid des', '966b71e1-f9d3-3043-ba11-1ef2deb5eb69', '1977', '', 'Louie Littel', '', '', '', 'schiller.brenna@example.net', '', '2983 Tom Inlet Apt. 851\nEast Kane, MT 17112', '', '', '', '', '', 3, 7, 'zhxf', 1, 'assets/img/avatar6.png', 0, '', '1980-05-27 15:40:02', '', '2004-12-25 02:37:00', 'Laboriosam aut ducimus dolore culpa impedit error maxime esse. Dolor quia et enim voluptas alias. Optio qui et delectus recusandae.', 'Expedita placeat et aut nam accusantium et. Corrupti veritatis assumenda accusantium odit sunt aut r', 1, 0),
('2b10e3c0-9b03-3545-9fff-6d1ba7d5d8c5', 'fihs', 'Funk', 'beatae', 'Cleo', 'I', '2004-10-27', '851 Hartmann Well\nPort Demarcusport, DE 13890-5124', 'Corrupti qui aut et sequi debitis. Ea voluptatibus tenetur quo ipsam enim. Magni quisquam impedit la', 'fc94e268-1746-3270-9b22-a1515043c157', '1979', '', 'Hiram Sipes IV', '', '', '', 'jast.magnolia@example.net', '', '757 Lelia Motorway Apt. 738\nNew Cathymouth, AR 74791', '', '', '', '', '', 7, 3, 'dmec', 1, 'assets/img/avatar6.png', 0, '', '1973-03-14 20:01:59', '', '1986-02-27 21:00:08', 'Ratione amet nulla dolor et sunt laborum distinctio. Veritatis adipisci culpa vitae doloremque totam molestias. Ut numquam voluptates minus consequatur a illum distinctio et.', 'Eveniet aspernatur quisquam et non animi. Ipsam est qui delectus dolore qui ex iure. Ullam in eligen', 1, 0),
('33856b54-4883-316d-9a49-1507cdffeddd', 'kpci', 'Corwin', 'quasi', 'Elda', 'I', '2011-09-04', '9198 Gutkowski Turnpike\nNew Genesis, AR 39085-8789', 'Rem aspernatur nemo voluptatibus accusantium officia laboriosam. In repudiandae consequuntur qui eve', 'e747a6c3-1629-3546-bca8-dad866749194', '1970', '', 'Prof. Reginald Ankunding', '', '', '', 'iadams@example.org', '', '577 Kilback Divide Suite 904\nWiegandland, MA 69124', '', '', '', '', '', 5, 2, 'ucmg', 1, 'assets/img/avatar6.png', 0, '', '1999-10-06 18:28:36', '', '2017-03-19 20:24:58', 'Dolorum culpa est reprehenderit facere quisquam adipisci commodi. Sed omnis nesciunt hic et ratione sunt magnam. Repellat modi quod placeat minima qui reprehenderit. Minima repellat perspiciatis eius sit alias.', 'Aut consequatur libero et nihil id quasi a. Explicabo dolor et ut. Dolores et doloribus dolorum dolo', 1, 0),
('385e6c75-7f62-3403-9ead-146c661a70d1', 'vhwp', 'Herzog', 'est', 'Bethel', 'IV', '1986-09-01', '609 Brice Mill Suite 689\nLlewellynfort, NE 41938-6747', 'Animi velit sunt soluta aut. Autem consequatur natus animi atque ipsam eligendi consequatur. Perspic', 'cef689f9-5f9a-3ae5-92a5-4f063d098bcd', '1999', '', 'German Heller MD', '', '', '', 'mante.maia@example.net', '', '1160 Harvey Loaf\nWisozkchester, OK 14166', '', '', '', '', '', 2, 6, 'autv', 1, 'assets/img/avatar6.png', 0, '', '1976-01-06 12:35:54', '', '1979-05-19 04:45:29', 'Beatae sint iste similique voluptates rerum soluta laborum. Ea dolorem est et officiis non labore eos omnis. Hic labore iste qui nihil voluptate nihil. Est explicabo saepe ipsam aliquid.', 'Molestias et distinctio totam qui placeat. Iure veritatis labore vero officia. Aliquid aut totam lau', 1, 1),
('3e34db5d-3b51-3d15-a346-6cf434f3a60c', 'xdoz', 'Gleichner', 'voluptatem', 'Adell', 'II', '1979-05-26', '606 Halle Landing Apt. 832\nMrazchester, CO 73255', 'Deleniti maiores ut totam consequatur et. Possimus quas aut explicabo voluptatibus rerum. Tempora ve', 'a498a022-9725-3fe5-b0ba-edbbaaae6619', '1990', '', 'Clyde Green', '', '', '', 'felicita.donnelly@example.org', '', '7637 Jillian Station Apt. 529\nPort Edwardhaven, MO 79792-2864', '', '', '', '', '', 6, 2, 'gpdt', 1, 'assets/img/avatar6.png', 0, '', '1973-10-14 13:02:26', '', '2007-02-05 18:08:45', 'Dolore et excepturi non quas possimus ea sit. Deserunt et nostrum itaque officiis. Eaque sequi porro ut doloribus sit sunt aliquam. Et inventore explicabo blanditiis sunt quibusdam.', 'Labore veritatis maiores sit quo voluptatem quia esse. Et sed perspiciatis debitis. Culpa provident ', 1, 1),
('42da265c-c5b1-31cc-a277-01b0865f2e01', 'onvs', 'Miller', 'cupiditate', 'Joelle', 'V', '1993-06-03', '06729 Alyson Inlet Apt. 330\nNorth Jessehaven, WY 77268-8216', 'Hic voluptas et quia laborum et possimus. Nisi veniam qui vel qui. Et officia praesentium vel conseq', 'beffabac-6f03-3053-94ef-72cef5f5d419', '2017', '', 'Junior McGlynn II', '', '', '', 'kborer@example.com', '', '39280 Rau Islands Apt. 335\nWeissnatchester, NY 51047-1518', '', '', '', '', '', 3, 1, 'fqgv', 1, 'assets/img/avatar6.png', 0, '', '2010-02-03 12:15:26', '', '1980-07-11 10:03:12', 'Et iusto sint quia eveniet molestiae porro fugit. Consequatur dolorum porro provident cum repellendus rerum. Esse amet est dolorem unde necessitatibus. Quibusdam deleniti maxime id beatae est. Ipsam magni quis et modi ea.', 'Vitae voluptatem et eligendi non adipisci et est quisquam. Vitae iste saepe dolorem quasi consequunt', 1, 0),
('4980085b-8b63-3900-9564-5133175525dd', 'hust', 'Bogisich', 'aliquam', 'Valentine', 'II', '1994-06-03', '07454 Herman Tunnel Apt. 077\nEast Helene, PA 76791', 'Unde itaque est porro ex. Est qui quae est. Similique et fugiat ipsa odio sint asperiores reprehende', '0845f3b2-ccf6-34d0-a35c-4f095c28082b', '2008', '', 'Miss Alicia Kessler', '', '', '', 'simeon34@example.org', '', '2851 Haley Court\nGoldnertown, VA 34277-0130', '', '', '', '', '', 7, 8, 'pctb', 1, 'assets/img/avatar6.png', 0, '', '2009-09-16 22:41:13', '', '1998-03-23 17:08:38', 'Nam molestiae consectetur dicta et aut. Quidem quibusdam aut voluptatum exercitationem corporis laboriosam aperiam. Nihil voluptas unde maxime minima minus.', 'Sint molestias deserunt temporibus aut dolores repellendus et nulla. Consectetur in ut voluptatem mo', 1, 0),
('5ed362b2-3055-398f-b0c8-adf9e365f977', 'hfoe', 'Willms', 'dolorem', 'Quinn', 'I', '1993-08-21', '3099 Abelardo Rest\nNitzschechester, ID 06461-7696', 'Dicta qui explicabo cum officia sit ducimus fugiat. Consequatur et iste quod commodi eaque. Vel duci', '9b69abb9-4a80-3998-8fed-034eb0a50c68', '1999', '', 'Bernhard Schultz', '', '', '', 'ericka91@example.com', '', '6075 Jerde Crossroad\nSchambergerside, MT 73213', '', '', '', '', '', 7, 9, 'xcvw', 1, 'assets/img/avatar6.png', 0, '', '1978-05-04 23:10:16', '', '2014-10-08 16:39:13', 'Qui reiciendis dolorum atque nisi quia fuga. Reiciendis non aut omnis possimus minima. Omnis ea illo labore facilis pariatur cum quaerat.', 'Quo non qui laboriosam ratione. Iure optio odio amet sed eos non. Porro consequuntur suscipit aperia', 1, 1),
('7aeada7a-f3e3-3840-b1c0-f90239181d51', 'mnwv', 'Ledner', 'consequatur', 'Quentin', 'DVM', '2011-04-27', '10479 Lang Village\nRitchiefort, IL 47210', 'Laudantium quos quibusdam magnam rem sint eos. Nihil laboriosam aperiam expedita soluta itaque. In l', '7a9d4b31-981e-3e43-868c-6d6ef3d7b5ab', '2010', '', 'Lindsey Hoppe', '', '', '', 'lexus.lindgren@example.com', '', '567 McDermott Divide Suite 896\nSouth Alexanneburgh, NV 96437', '', '', '', '', '', 5, 0, 'nuqa', 1, 'assets/img/avatar6.png', 0, '', '1981-02-19 10:31:25', '', '1999-05-09 13:48:58', 'Et omnis harum debitis velit occaecati. Assumenda ea et ut. Officiis odio qui illo sequi eum.', 'Ipsum accusantium voluptatem inventore omnis. Fugit nam mollitia iure. Accusamus enim rerum itaque q', 1, 0),
('ab9a0baf-093e-357c-84df-b092a8cd1417', 'fpkx', 'Huels', 'ipsa', 'Earlene', 'MD', '2007-06-14', '7659 Tara Rue\nNorth Syble, OR 13870', 'Architecto reiciendis non et. Quas impedit accusamus voluptatem. Vel provident nihil et voluptatibus', '35ff3e12-365b-3a02-944c-5a89f5359180', '1988', '', 'Antone Zemlak IV', '', '', '', 'glennie.parisian@example.com', '', '114 Kulas Islands\nSouth Billy, FL 96435', '', '', '', '', '', 3, 6, 'nhpo', 1, 'assets/img/avatar6.png', 0, '', '1980-03-26 07:43:43', '', '2016-12-01 03:10:42', 'Doloremque est blanditiis vel molestiae veritatis consequatur dicta. Voluptatem consequuntur fuga eligendi ducimus vero. Rerum quae sit et molestiae neque maiores in quas.', 'Voluptatem est voluptas perspiciatis minima sunt. Nesciunt rerum voluptatem accusamus consequatur hi', 1, 1),
('ad34848b-e1bb-3fe9-a2eb-e405674f2c5a', 'weuq', 'Pfeffer', 'alias', 'Urban', 'Sr.', '1974-01-08', '20382 Bethel Haven\nLake Tyree, ID 65902-0234', 'Magni deserunt quae qui consequatur et assumenda. Porro dolorem maxime eveniet dolor mollitia sed mo', '86266a5d-72f6-3346-a970-43acaa56de8f', '2007', '', 'Tanya Ankunding', '', '', '', 'kling.maryjane@example.com', '', '6791 Adrianna Wall\nCarletonport, MS 85385', '', '', '', '', '', 8, 3, 'icrc', 1, 'assets/img/avatar6.png', 0, '', '1999-02-04 15:31:10', '', '1971-02-03 06:04:10', 'Impedit distinctio sint consectetur. Architecto assumenda molestiae ipsum dolore est molestiae. Aspernatur velit totam voluptatum totam architecto necessitatibus ratione. Fugit voluptas modi praesentium sed et quaerat.', 'Et occaecati rem non voluptates eum. Provident molestiae optio non officiis. Sapiente quas qui omnis', 1, 1),
('b78d96fe-8616-3307-86c5-60a6ad0fd2d5', 'sojf', 'Weissnat', 'necessitatibus', 'Kaylah', 'IV', '1998-06-04', '384 Zackery Common\nEast Jeanne, KY 05206-0796', 'Aperiam sed sunt commodi dolor alias corporis sed. Non voluptate vero dolorem occaecati molestias. V', 'e16df437-4734-3f44-9fce-b4825ea25a0c', '1996', '', 'Jerrold Bechtelar', '', '', '', 'kreiger.celia@example.org', '', '93861 Heller Hill\nWest Jacklyn, RI 83645', '', '', '', '', '', 5, 9, 'vryj', 1, 'assets/img/avatar6.png', 0, '', '2006-04-24 06:04:03', '', '1990-07-12 03:42:32', 'Facilis ad beatae quos sed ipsa. Et cumque aut sit odit. Ex ea repudiandae omnis sed sed dolor.', 'Velit vero eos quos magnam. Sapiente ut nobis id aperiam. Hic omnis velit ut. Velit neque quibusdam ', 1, 1),
('b84402aa-8284-3a32-844e-ed1a1a60efbc', 'ylyk', 'Keeling', 'eius', 'Lera', 'II', '2004-08-01', '4137 Jerde Valleys Apt. 374\nNorth Chesley, NE 67995', 'Quis hic non qui officia. Natus reiciendis saepe velit nemo itaque officiis quia. Consequatur aspern', '13e5d070-4b39-3c80-b273-4d3476fec9f2', '2012', '', 'Garett Raynor', '', '', '', 'winifred.treutel@example.com', '', '10636 Rice Street Suite 062\nLake Santabury, KY 66098-3759', '', '', '', '', '', 9, 2, 'xekb', 1, 'assets/img/avatar6.png', 0, '', '2006-12-22 16:19:37', '', '2002-12-13 17:47:56', 'Aliquid eum dolorem est ex et commodi. Aut fugit ipsum soluta sed tenetur.', 'Reiciendis dolor ipsam molestiae. Non accusamus aut fugiat maiores. Cumque ut asperiores quia quae. ', 1, 0),
('ca0a39aa-8b1d-3bff-8522-f8175edd4b10', 'wwvx', 'Hahn', 'qui', 'Dudley', 'I', '2004-07-20', '5388 Paucek Forge Suite 121\nNorth Geoffreymouth, MS 44878', 'Voluptatem dicta laborum laudantium id omnis. Non inventore sunt eligendi. Odit aut voluptas sit est', 'b88397b7-afdd-3bc5-9d8a-4ecaab4cabe0', '2006', '', 'Johnathon O\'Hara', '', '', '', 'ova92@example.com', '', '133 Casimir Trace Suite 015\nSouth Bernhard, UT 09957-2734', '', '', '', '', '', 2, 3, 'rxuk', 1, 'assets/img/avatar6.png', 0, '', '2015-08-05 18:16:05', '', '1998-07-02 10:29:46', 'Voluptatibus omnis et qui tenetur modi est dolor. Unde iste doloremque blanditiis ut ipsum. Laborum perspiciatis voluptates nobis aut.', 'Dolor earum itaque aut earum ex. Quae et tempore ipsam totam odio blanditiis. Blanditiis qui repelle', 1, 1);

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
-- Indexes for table `tbl_companies`
--
ALTER TABLE `tbl_companies`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_documents`
--
ALTER TABLE `tbl_documents`
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
-- Indexes for table `tbl_sections`
--
ALTER TABLE `tbl_sections`
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
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `tbl_sys_securityusers_loginname_unique` (`LoginName`);

--
-- AUTO_INCREMENT for dumped tables
--

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
-- AUTO_INCREMENT for table `tbl_sections`
--
ALTER TABLE `tbl_sections`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
