-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 11, 2019 at 07:38 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

--
-- Database: `epassport`
--

-- --------------------------------------------------------
--
-- Table structure for table `bank`
--
/*بنك ام درمان الوطني*/
DROP TABLE IF EXISTS `OmdurmanNationalBank`;
CREATE TABLE IF NOT EXISTS `OmdurmanNationalBank` (
  `accnumber` int(6) NOT NULL,
  `name` text NOT NULL,
  `pass` text NOT NULL,
  `amt` int(11) NOT NULL,
  `checkk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `OmdurmanNationalBank`
--

INSERT INTO `OmdurmanNationalBank` (`accnumber`, `name`, `pass`, `amt`,`checkk`) VALUES
(123456, 'Khalid mohamed ali othman', '3456', 5000, 'f'),
(123457, 'Mujahid Bakri Siraj Alshaikh', '3457', 5000, 'f'),
(123458, 'Omar Badawi Alameen Fadul', '3458', 5000, 'f'),
(123459, 'Alshaikh Badur Haidar Mustafa', '3459', 5000, 'f');

-- --------------------------------------------------------

-- ---------------------------------------------------------
/*بنك فيصل*/
DROP TABLE IF EXISTS `FeisalIslamicBank`;
CREATE TABLE IF NOT EXISTS `FeisalIslamicBank` (
  `accnumber` int(6) NOT NULL,
  `name` text NOT NULL,
  `pass` text NOT NULL,
  `amt` int(11) NOT NULL,
  `checkk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Feisal Islamic bank`
--

INSERT INTO `FeisalIslamicBank` (`accnumber`, `name`, `pass`, `amt`,`checkk`) VALUES
(1234510, 'alia ali azzat omar', '2516', 5000, 'f'),
(1234511, 'mona tajalsir ismail mukhtar', '2517', 5000, 'f'),
(1234512, 'Hassan ali Mohamed Ahmed', '2518', 5000, 'f'),
(1234513, 'Hussain Mohamed Othman Ahmed', '2559', 5000, 'f');
-- ----------------------------------------------------------

--
-- Table structure for table `civilregistry`
--

DROP TABLE IF EXISTS `civilregistry`;
CREATE TABLE IF NOT EXISTS `civilregistry` (
  `nationalnumb` bigint(20) NOT NULL,
  `name` text NOT NULL,
  `birthdate` date NOT NULL,
  `birthplace` text NOT NULL,
  `image` text NOT NULL,
  `fingerprint` text NOT NULL,
  `maritalstatus` int(1) NOT NULL,
  `fnationalnumb` bigint(20) NOT NULL,
  `gender` int(1) NOT NULL,
  `job` text NOT NULL,
  `address` text  NOT NULL,
  `checkk` text  NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `civilregistry`
--

INSERT INTO `civilregistry` (`nationalnumb`, `name`, `birthdate`, `birthplace`, `image`, `fingerprint`, `maritalstatus`, `fnationalnumb`,`gender`,`job`,`address`, `checkk`) VALUES
(12345678900, 'خالد محمد علي عثمان', '1990-05-22', 'portsudan', 'style/images/man.png', 'style/images/khalid.png', '1', 0, 1,'doctor','khartoum', 'f'),
(12345678910, 'مجاهد بكري سراج الشيخ', '1987-07-15', 'aldamar', 'style/images/man.png', 'style/images/mujahid.png', '2', 0,1,'teacher','khartoum', 'f'),
(12345678911, 'عمر بدوي الامين طه', '1960-03-11', 'rabak', 'style/images/man.png', 'style/images/omar.png', '2', 0,1,'farmer','dongola', 'f'),
(12345678912, 'الشيخ بدر حيدر مصطفى', '1983-09-28', 'halfa', 'style/images/man.png', 'style/images/alshaikh.png', '1', 0,1,'doctor','bahry', 'f'),
(12345678913, 'ناجي الشيخ بدر حيدر', '2009-06-03', 'khartoum', 'style/images/man.png', 'style/images/naji.png', '2', 12345678912,1,'student','bahry', 'f'),
(12345678914, 'اسامة خالد محمد علي', '2003-04-25', 'portsudan', 'style/images/man.png', 'style/images/osama.png', '2', 12345678900,1,'student','bahry', 'f'),
(12345678915, 'حسين محمد عثمان احمد', '1973-05-14', 'khartoum', 'style/images/man.png', 'style/images/hussain.png', '3', 0, 1,'teacher','khartoum', 'f'),
(12345678916, 'عثمان علي محمد احمد', '1980-06-11', 'khartoum', 'style/images/man.png', 'style/images/osman.png', '2', 0,1,'drivre','bahry', 'f'),
(12345678917, 'منى تاج السر اسماعيل مختار', '1960-12-11', 'madani', 'style/images/woman.png', 'style/images/mona.png', '1', 0,2,'mother','bahry', 'f'),
(12345678918, 'كمال خوجلي عثمان النصري', '1958-03-11', 'dongola', 'style/images/man.png', 'style/images/kamal.png', '1', 0,1,'farmer','dongola', 'f'),
(12345678919, 'سامية الطيب مدثر الامام', '1969-07-21', 'shandi', 'style/images/woman.png', 'style/images/samia.png', '1', 0,2,'mother','bahri', 'f'),
(12345678920, 'حذيفة بشير محمد صالح', '1985-09-22', 'marawi', 'style/images/man.png', 'style/images/hozaifa.png', '1', 0,1,'seller','khartoum', 'f'),
(12345678921, 'ابتهال صلاح محمد عمر', '1994-03-25', 'khartoum', 'style/images/woman.png', 'style/images/ibtihal.png', '1', 0,2,'dentist','bahri', 'f'),
(12345678922, 'رامي كمال خوجلي عثمان', '2004-09-10', 'dongola', 'style/images/man.png', 'style/images/rami.png', '2',12345678918,1,'student','bahri', 'f'),
(12345678923, 'رهام مصطفى ادم اسحق', '1992-01-13', 'alfashir', 'style/images/woman.png', 'style/images/riham.png', '2', 0,2,'loyer','khartoum', 'f'),
(12345678924, 'طارق محمد علي موسى', '1975-08-10', 'khartoum', 'style/images/man.png', 'style/images/tarig.png', '2',0,1,'drivre','khartoum', 'f'),
(12345678925, 'يسرا مصطفى ادم اسحق', '1996-06-18', 'alfashir', 'style/images/woman.png', 'style/images/yosra.png', '2', 0,2,'doctor','khartoum', 'f'),
(12345678926, 'يوسف بشير محمد صالح', '1989-03-20', 'marawi', 'style/images/man.png', 'style/images/yousef.png', '1', 0,1,'seller','khartoum', 'f'),
(12345678927, 'اماني جعفر علي طه', '1974-07-21', 'khartoum', 'style/images/woman.png', 'style/images/amani.png', '1', 0,2,'mother','bahri', 'f'),
(12345678928, 'راشد محمد عثمان احمد', '1970-07-12', 'khartoum', 'style/images/man.png', 'style/images/rashid.png', '2', 0, 1,'drivre','khartoum', 'f'),
(12345678929, 'نوال علي احمد سعد', '1988-04-21', 'omdurman', 'style/images/woman.png', 'style/images/nawal.png', '1', 0,2,'mother','bahri', 'f'),
(12345678930, 'ريم عادل فضل ادريس', '1999-08-11', 'bahri', 'style/images/woman.png', 'style/images/reem.png', '1', 0,2,'student','bahri', 'f'),
(12345678931, 'شاذلي عثمان محمد احمد', '1980-12-12', 'khartoum', 'style/images/man.png', 'style/images/shazali.png', '1', 0, 1,'seller','khartoum', 'f'),
(12345678932, 'سليم صالح سليم مختار', '1993-11-10', 'dongola', 'style/images/man.png', 'style/images/saliem.png', '1', 0, 1,'drivre','khartoum', 'f'),
(12345678933, 'مودة عادل فضل ادريس', '1998-09-03', 'bahri', 'style/images/woman.png', 'style/images/mawada.png', '1', 0,2,'student','bahri', 'f'),
(12345678934, 'حفصة رزق ارباب', '1998-09-03', 'bahri', 'style/images/woman.png', 'style/images/hafsa.png', '1', 0,2,'teacher','bahri', 'f'),
(12345678935, ' اريج دفع الله فضل المولى', '1990-09-03', 'portsudan', 'style/images/woman.png', 'style/images/areej.png', '1', 0,2,'student','khartoum', 'f'),
(12345678936, 'هند علي السيد مختار', '1998-09-03', 'almnagel', 'style/images/woman.png', 'style/images/hind.png', '1', 0,2,'mother','bahri', 'f'),
(12345678937, 'ايمان محمد احمد حسين', '1998-09-03', 'khartoum', 'style/images/woman.png', 'style/images/eman.png', '1', 0,2,'student','khartoum', 'f'),
(12345678938, 'محاسن سيد علي طه', '1998-09-03', 'bahri', 'style/images/woman.png', 'style/images/mahasin.png', '1', 0,2,'nurse','bahri', 'f'),
(12345678939, 'فدوى صالح التجاني فؤاد', '1989-08-30', 'khartoum', 'style/images/woman.png', 'style/images/sadwa.png', '2', 0,2,'writer','omdurman', 'f');
(12345678940, 'امنية الطاهر معتصم حجاج', '1987-06-10', 'khartoum', 'style/images/woman.png', 'style/images/omnia.png', '1', 0,2,'manger','bahry', 'f');
(12345678941, 'عدوية سيد احمد محمدين', '1977-04-1', 'egypt', 'style/images/woman.png', 'style/images/adawia.png', '1', 0,2,'mother','omdurman', 'f');
(12345678942, 'علياء احمد سعيد محمد', '1980-03-31', 'saudia', 'style/images/woman.png', 'style/images/aliaa.png', '2', 0,2,'sell manger','bahry', 'f');
(12345678943, 'تقوى حامد محمد الضي', '1967-07-30', 'omdurman', 'style/images/woman.png', 'style/images/taqwa.png', '2', 0,2,'singer','bahry', 'f');
(12345678944, 'خالد فضل علي عثمان', '1990-05-22', 'portsudan', 'style/images/man.png', 'style/images/khalid2.png', '1', 0, 1,'doctor','khartoum', 'f'),
(12345678945, 'زاهر الدين احمد عوض', '1970-12-22', 'aldamar', 'style/images/man.png', 'style/images/zahir.png', '1', 0, 1,'engieer','khartoum', 'f'),
(12345678946, 'محمد احمد السيد نورين', '1880-05-12', 'madani', 'style/images/man.png', 'style/images/mohamed.png', '2', 0, 1,'sell manger','omdurman', 'f'),
(12345678947, 'احمد محمد مختار حسن', '1976-01-1', 'kosty', 'style/images/man.png', 'style/images/ahmed.png', '3', 0, 1,'manger','marawi', 'f'),
(12345678948, 'فؤاد علي محمد علي', '1983-04-10', 'rabak', 'style/images/man.png', 'style/images/foad.png', '1', 0, 1,'drivre','rabak', 'f'),
(12345678949, 'ناجي دفع الله الحاج', '1985-09-15', 'khartoum', 'style/images/man.png', 'style/images/naji2.png', '1', 0, 1,'doctor','khartoum', 'f'),
(12345678950, 'علياء علي عزت عمر', '1977-06-30', 'khartoum', 'style/images/woman.png', 'style/images/alia.png', '2', 0,2,'writer','bahry', 'f');



-- --------------------------------------------------------

--
-- Table structure for table `Khartoum passport `
--

DROP TABLE IF EXISTS `KhartoumPassport`;
CREATE TABLE IF NOT EXISTS `KhartoumPassport` (
  `nationalnumb` bigint(20) NOT NULL,
  `name` text NOT NULL,
  `passnumber` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `birthplace` text NOT NULL,
  `gender` int(1) NOT NULL,
  `releasedate` date NOT NULL,
  `releaseplace` text NOT NULL,
  `passtype` int(1) NOT NULL,
  `nameenglish` text NOT NULL,
  `passnumber+` bigint(20) NOT NULL,
  `image` blob NOT NULL,
  `checkk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- ------------------------------------------------------------------------------------
-- --------------------------------------------------------

--
-- Table structure for table `bahri  passport `
-- ----------------------------------------------------------
DROP TABLE IF EXISTS `bahriPassport`;
CREATE TABLE IF NOT EXISTS `bahriPassport` (
  `nationalnumb` bigint(20) NOT NULL,
  `name` text NOT NULL,
  `passnumber` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `birthplace` text  NOT NULL,
  `gender` int(1) NOT NULL,
  `releasedate` date  NOT NULL,
  `releaseplace` text  NOT NULL,
  `passtype` int(1)  NOT NULL,
  `nameenglish` text  NOT NULL,
  `passnumber+` bigint(20)  NOT NULL,
  `image` blob    NOT NULL,
  `checkk` text  NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- --------------------------------------------------------

--
-- Table structure for table `omdurman  passport `
-- -------------------------------------------------------------------------------------
DROP TABLE IF EXISTS `omdurmanPassport`;
CREATE TABLE IF NOT EXISTS `omdurmanPassport` (
  `nationalnumb` bigint(20) NOT NULL,
  `name` text  NOT NULL,
  `passnumber` varchar(20)  NOT NULL,
  `birthdate` date  NOT NULL,
  `birthplace` text  NOT NULL,
  `gender` int(1)  NOT NULL,
  `releasedate` date  NOT NULL,
  `releaseplace` text  NOT NULL,
  `passtype` int(1) NOT NULL,
  `nameenglish` text  NOT NULL,
  `passnumber+` bigint(20)  NOT NULL,
  `image` blob    NOT NULL,
  `checkk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- --------------------------------------------------------------------------------------
--
-- Table structure for table `user `
-- -------------------------------------------------------------------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(1) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `checkk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- Dumping data for table `Feisal Islamic bank`
--

INSERT INTO `user` (`userid`,`name`, `password`,`checkk`) VALUES
('mouhmed ali', '2233', 'f'),
('ahmed mouhmed', '3322', 'f');

-- ----------------------------------------------------------
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
