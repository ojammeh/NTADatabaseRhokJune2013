-- phpMyAdmin SQL Dump
-- version 3.4.10.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2013 at 03:16 PM
-- Server version: 5.5.22
-- PHP Version: 5.3.15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nta_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `attachmentlocations`
--

CREATE TABLE IF NOT EXISTS `attachmentlocations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `region` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `lecturer_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `lecturer_id`) VALUES
(1, 'Beginners : Piano', 1),
(2, 'Advance : "Tama"', 1),
(3, 'Advance : Data Management Systems', 2),
(5, 'Advance : Javascript', 4),
(6, 'Beginner : Web Application Development', 5),
(7, 'Beginners : Flute', 1),
(8, 'Advance : Drumming', 1);

-- --------------------------------------------------------

--
-- Table structure for table `financialdatas`
--

CREATE TABLE IF NOT EXISTS `financialdatas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institution_id` int(11) NOT NULL,
  `centralgovtrevenue` double NOT NULL,
  `localgovtrevenue` double NOT NULL,
  `developmentpartnersrevenue` double NOT NULL,
  `owngeneratedrevenue` double NOT NULL,
  `outstandingarrears` double NOT NULL,
  `staffcost` double NOT NULL,
  `administrationexpenses` double NOT NULL,
  `other` double NOT NULL,
  `yearquarter` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `financialdatas`
--

INSERT INTO `financialdatas` (`id`, `institution_id`, `centralgovtrevenue`, `localgovtrevenue`, `developmentpartnersrevenue`, `owngeneratedrevenue`, `outstandingarrears`, `staffcost`, `administrationexpenses`, `other`, `yearquarter`) VALUES
(1, 1, 9090, 4000, 4000, 980, 8980, 10098, 9009, 0, 'Quarter1-2013');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`, `user_id`, `user`, `created`, `modified`) VALUES
(1, 'Administrator', 'List of administrators', 0, '', '2012-01-24 20:41:30', '2012-02-03 21:38:51'),
(2, 'Staff', '', 0, '', '2012-03-13 21:59:00', '2012-03-13 21:59:00'),
(3, 'Project Manager', '', 0, '', '2012-03-13 21:59:15', '2012-03-13 21:59:15');

-- --------------------------------------------------------

--
-- Table structure for table `institutions`
--

CREATE TABLE IF NOT EXISTS `institutions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `institutiontype_id` int(11) NOT NULL,
  `localgovernmentarea` varchar(50) NOT NULL,
  `postalboxnumber` varchar(20) NOT NULL,
  `region` varchar(50) NOT NULL,
  `town` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `emailaddress` varchar(50) NOT NULL,
  `ntaid` varchar(40) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `website` varchar(30) NOT NULL,
  `sourceoffinancialsupport` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `institutions`
--

INSERT INTO `institutions` (`id`, `name`, `institutiontype_id`, `localgovernmentarea`, `postalboxnumber`, `region`, `town`, `address`, `phonenumber`, `emailaddress`, `ntaid`, `fax`, `website`, `sourceoffinancialsupport`) VALUES
(1, 'Gambian School Of Mbalax', 1, 'KMC', '237989', 'Serrekunda', '', '', '', 'som@nta.gm', '08088909', '', '', 'Public'),
(2, 'Institute Of Computer Technology', 3, '', '', 'Banjul', '', '', '', 'iot@nta.gm', '90876GB89', '', '', 'The Government'),
(3, 'Vocational Training Institute', 1, 'Serrekunda', '', '', '', '', '', '', '8989JKL0', '', '', ''),
(4, 'Blurred B', 1, '', '', '', '', '', '', '', '91234GHT', '', '', ''),
(5, 'Blurred Visions', 1, 'Banjul', '', '', '', '', '', '', '9890KLOP', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `institutiontypes`
--

CREATE TABLE IF NOT EXISTS `institutiontypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `institutiontypes`
--

INSERT INTO `institutiontypes` (`id`, `value`) VALUES
(1, 'School'),
(2, 'Company'),
(3, 'NGO');

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE IF NOT EXISTS `lecturers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lecturercode` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `institution_id` int(11) NOT NULL,
  `primaryphonenumber` varchar(20) NOT NULL,
  `secondaryphonenumber` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`id`, `lecturercode`, `firstname`, `lastname`, `institution_id`, `primaryphonenumber`, `secondaryphonenumber`, `address`, `nationality`, `email`) VALUES
(1, 30435, 'Dr Ousman', 'Jammeh', 1, '', '', '', '', ''),
(2, 879009, 'Serign', 'Job', 2, '', '', '', 'Gambian', ''),
(3, 78099, 'Abdou', 'Ndure', 1, '', '', '', '', ''),
(4, 98088, 'Oumie', 'Jawo', 2, '', '', '', '', ''),
(5, 9089, 'Pa Essa', 'Jabang', 2, '', '', '', 'Gambian', 'pjabang@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE IF NOT EXISTS `programs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `programoffered` varchar(255) NOT NULL,
  `tuitionfee` double NOT NULL,
  `accretidedbynta` int(11) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `internationalexam` varchar(50) NOT NULL,
  `remarks` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `studentattachments`
--

CREATE TABLE IF NOT EXISTS `studentattachments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `attachmentlocation_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `studentcourseenrollments`
--

CREATE TABLE IF NOT EXISTS `studentcourseenrollments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institution_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  `dateofbirth` datetime NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `hasgraduated` int(11) NOT NULL,
  `major` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `primaryphonenumber` varchar(20) NOT NULL,
  `secondaryphonenumber` varchar(20) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `studentcode` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `lastlogin` datetime NOT NULL,
  `email` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `password`, `lastlogin`, `email`, `group_id`, `created`, `modified`) VALUES
(1, 'pjabang', 'Pa Essa Jabang', '2cec227e98c53b0d29f08d3b96e7e91ab4977d13', '0000-00-00 00:00:00', 'pjabang@gmail.com', 1, '2012-03-03 23:41:45', '2012-03-03 23:41:45'),
(2, 'ousman', 'Ousman Jammeh', 'eeb5cac1bd1286fba9a3336cff0b74a1533b4618', '0000-00-00 00:00:00', 'ous.jammeh@gmail.com', 1, '2013-06-16 12:44:23', '2013-06-16 12:44:23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
