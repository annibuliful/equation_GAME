-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 18, 2015 at 09:38 AM
-- Server version: 5.5.46-0ubuntu0.14.04.2-log
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `equaltion`
--

-- --------------------------------------------------------

--
-- Table structure for table `central`
--

CREATE TABLE IF NOT EXISTS `central` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `question` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `ans1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `central`
--

INSERT INTO `central` (`id`, `question`, `ans1`, `detail`) VALUES
(1, 'krungthep.jpg', '1', 'krungthep.png\r\n'),
(2, 'angthong.jpg', '72', 'angthong.png\r\n'),
(3, 'chainart.jpg', '10', 'chainart.png'),
(4, 'gamphangphet.jpg', '5', 'khampangphet.png'),
(5, 'lopburi.jpg', '52', 'lopburi.png'),
(6, 'nakhonnayok.jpg', '18', 'nakornnayok.png\r\n'),
(7, 'nakhonphatom.jpg', '19', 'nakornpathom.png'),
(8, 'nakhonsawan.jpg', '23', 'nakornsawan.png'),
(9, 'nonburi.jpg', '24', 'nonburi.png'),
(10, 'patumthani.jpg', '29', 'pathumthani.png'),
(11, 'phetchbool.jpg', '39', 'phetbool.png'),
(12, 'phijit.jpg', '36', 'phijit.png'),
(13, 'ayudthaya.jpg', '33', 'ayudtha.png'),
(14, 'samutprakhan.jpg', '60', 'samutprakan.png'),
(15, 'samutsakhon.jpg', '62', 'samutsakorn.png'),
(16, 'samutsongkram.jpg', '61', 'samutsongkram.png'),
(17, 'saraburi.jpg', '64', 'saraburi.png'),
(18, 'singburi.jpg', '65', 'singburi.png'),
(19, 'sukhothai.jpg', '66', 'sukothai.png'),
(20, 'suphan.jpg', '67', 'suphan.png'),
(21, 'uthaithani.jpg', '74', 'unthai.png');

-- --------------------------------------------------------

--
-- Table structure for table `checkans`
--

CREATE TABLE IF NOT EXISTS `checkans` (
  `idp` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `idq` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `East`
--

CREATE TABLE IF NOT EXISTS `East` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `question` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `ans1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `East`
--

INSERT INTO `East` (`id`, `question`, `ans1`, `detail`) VALUES
(1, 'chaserngchuang.jpg', '8', 'chachersua.png'),
(2, 'janburi.jpg', '7', 'jan.png'),
(3, 'chonburi.jpg', '9', 'chonburi.png'),
(4, 'prajeenburi.jpg', '31', 'prajeen.png'),
(5, 'rayong.jpg', '50', 'rayong.png'),
(6, 'sakrew.jpg', '63', 'sakeaw.png'),
(7, 'trad.jpg', '16', 'trad.png');

-- --------------------------------------------------------

--
-- Table structure for table `Isan`
--

CREATE TABLE IF NOT EXISTS `Isan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `question` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `ans1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `Isan`
--

INSERT INTO `Isan` (`id`, `question`, `ans1`, `detail`) VALUES
(1, 'amnart.jpg', '77', 'amnart.png'),
(2, 'bungkhan.jpg', '27', 'buengkhan.png'),
(3, 'buriram.jpg', '28', 'buriram.png'),
(4, 'chaiyaphoom.jpg', '11', 'chaiyaphoom.png'),
(5, 'kalasin.jpg', '3', 'kalasin.png'),
(6, 'khongan.jpg', '6', 'khongan.png'),
(7, 'luey.jpg', '55', 'luey.png'),
(8, 'mahasalakham.jpg', '43', 'mahasalakham.png'),
(9, 'nakhonphanom.jpg', '20', 'nakornphanom.png'),
(10, 'mukdahan.jpg', '44', 'mukdahan.png'),
(11, 'nakhonrashasrima.jpg', '21', 'nakornras.png'),
(12, 'nhonbualampoo.jpg', '71', 'nongbualampoo.png'),
(13, 'nhongkhai.jpg', '70', 'nhonkai.png'),
(14, 'royed.jpg', '48', 'royed.png'),
(15, 'sakon.jpg', '57', 'sakon.png'),
(16, 'srisagate.jpg', '56', 'srisa.png'),
(17, 'surin.jpg', '69', 'surin.png'),
(18, 'ubol.jpg', '76', 'unbol.png'),
(19, 'udonthani.jpg', '73', 'undonthani.png'),
(20, 'yasothon.jpg', '47', 'yasothon.png');

-- --------------------------------------------------------

--
-- Table structure for table `north`
--

CREATE TABLE IF NOT EXISTS `north` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `question` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `ans1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `north`
--

INSERT INTO `north` (`id`, `question`, `ans1`, `detail`) VALUES
(1, 'chiangmai.jpg', '14', 'chingmai.png'),
(2, 'chianrai.jpg', '13', 'chingrai.png'),
(3, 'lampang.jpg', '53', 'lampang.png'),
(4, 'lampoon.jpg', '54', 'lampoon.png'),
(5, 'maehongsorn.jpg', '45', 'maehongsorn.png\r\n'),
(6, 'narn.jpg', '26', 'narn.png'),
(7, 'phayua.jpg', '41', 'payua.png'),
(8, 'pair.jpg', '40', 'pair.png'),
(9, 'utaradit.jpg', '75', 'utaradit.png');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE IF NOT EXISTS `picture` (
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE IF NOT EXISTS `player` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mail` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `score` int(100) NOT NULL,
  `picture` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id`, `user`, `password`, `mail`, `phone`, `sex`, `score`, `picture`) VALUES
(1, 'Kewalin', '123', '123', '0', 'man', 80, 'pness.jpg'),
(2, 'Chalida', '456', '200', '0', 'man', 500, 'teacher.jpg'),
(9, 'asd', 'asd', 'asd@gmail.com', '024885775', 'man', 0, '22030_863236630411385_5725238682490712212_n.jpg'),
(11, 'kanokporn', '', '', '', 'woman', 434, 'pna.jpg'),
(12, 'Poo', '123456', '', '', 'woman', 28, ''),
(13, 'lagman', '123', 'lagmanmc@gmail.com', '08xxxxxxxx', 'man', 108, '14050_1413685082278622_5792585325214504471_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `south`
--

CREATE TABLE IF NOT EXISTS `south` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `question` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `ans1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `south`
--

INSERT INTO `south` (`id`, `question`, `ans1`, `detail`) VALUES
(1, 'chumphon.jpg', '12', 'chumphon.png'),
(2, 'krabee.jpg', '2', 'krabee.png'),
(3, 'nakhonsrithamarat.jpg', '22', 'nakornsri.png'),
(4, 'narathivart.jpg', '25', 'narathivart.png'),
(5, 'patani.jpg', '32', 'pattani.png'),
(6, 'pangngang.jpg', '34', 'pangna.png'),
(7, 'pattalung.jpg', '35', 'pattalung.png'),
(8, 'phoolget.jpg', '42', 'poolget.png\r\n'),
(9, 'ranong.jpg', '49', 'ranong.png'),
(10, 'satool.jpg', '59', 'satool.png\r\n'),
(11, 'songkla.jpg', '58', 'sonkla.png'),
(12, 'surart.jpg', '68', 'surat.png'),
(13, 'trang.jpg', '15', 'trang.png'),
(14, 'yala.jpg', '46', 'yala.png');

-- --------------------------------------------------------

--
-- Table structure for table `west`
--

CREATE TABLE IF NOT EXISTS `west` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `question` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `ans1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `west`
--

INSERT INTO `west` (`id`, `question`, `ans1`, `detail`) VALUES
(1, 'khanjanaburi.jpg', '3', 'khanjanaburi.png'),
(2, 'phetburi.jpg', '38', 'phetburi.png'),
(3, 'pajuab.jpg', '30', 'pajuab.png'),
(4, 'rashaburi.jpg', '51', 'rashburi.png'),
(5, 'targ.jpg', '17', 'targ.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
