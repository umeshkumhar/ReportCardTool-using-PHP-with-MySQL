-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2016 at 08:56 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reportcardtool`
--

-- --------------------------------------------------------

--
-- Table structure for table `stu_info`
--

CREATE TABLE IF NOT EXISTS `stu_info` (
`id` int(20) NOT NULL,
  `enrollno` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `sub1_mids` int(20) NOT NULL,
  `sub2_mids` int(20) NOT NULL,
  `sub3_mids` int(20) NOT NULL,
  `sub4_mids` int(20) NOT NULL,
  `sub5_mids` int(20) NOT NULL,
  `sub6_mids` int(20) NOT NULL,
  `sub1_univ` int(20) NOT NULL,
  `sub2_univ` int(20) NOT NULL,
  `sub3_univ` int(20) NOT NULL,
  `sub4_univ` int(20) NOT NULL,
  `sub5_univ` int(20) NOT NULL,
  `sub6_univ` int(20) NOT NULL,
  `total_mids` int(20) NOT NULL,
  `total_ob` int(20) NOT NULL,
  `perc` varchar(255) NOT NULL,
  `pf` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `stu_info`
--

INSERT INTO `stu_info` (`id`, `enrollno`, `sname`, `fname`, `mname`, `branch`, `semester`, `session`, `contact`, `sub1_mids`, `sub2_mids`, `sub3_mids`, `sub4_mids`, `sub5_mids`, `sub6_mids`, `sub1_univ`, `sub2_univ`, `sub3_univ`, `sub4_univ`, `sub5_univ`, `sub6_univ`, `total_mids`, `total_ob`, `perc`, `pf`) VALUES
(22, '11eebcd111', 'Mr karishma SHAKTIMAN', 'jaudugar JACKOL', 'chandrakanta', 'Civil', '4th Sem / II year', '2004-2005', '1245787845', 14, 14, 12, 18, 12, 10, 55, 58, 98, 58, 87, 55, 0, 0, '', ''),
(23, '13ecbce43', 'TT', 'bansal  DUTT', 'leela', 'IT', '1st Sem / I year', '2000-2001', '545451214', 15, 14, 18, 10, 11, 18, 85, 55, 65, 29, 84, 55, 0, 0, '', ''),
(24, '13ectcs104', 'MIss katayani', 'Baap', 'Maa', 'IT', '3rd Sem / II year', '2004-2005', '369852147', 12, 15, 12, 2, 16, 14, 58, 75, 45, 56, 58, 78, 71, 370, '88.2', 'PASS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stu_info`
--
ALTER TABLE `stu_info`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `enrollno` (`enrollno`,`sname`,`branch`), ADD UNIQUE KEY `enrollno_2` (`enrollno`,`semester`,`session`);
 
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stu_info`
--
ALTER TABLE `stu_info`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
