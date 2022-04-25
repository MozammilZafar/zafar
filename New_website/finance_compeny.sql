-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2019 at 01:13 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `finance_compeny`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `image`, `content`) VALUES
(1, 'assets/Images/About/124136image.jpg', '<p>There is no doubt that the customer of Reliance Jio is increasing day by day and it is heard that the ratio is approx 3 million users. By these Reliance Jio wants to install more tower in all over the country so it gave an opportunity by which mobile towers can be installed by the company On The Terrace Of Your House, Plot Or Market for Increase The Network Range Of Jio. On installing mobile tower, you can easily earn upto Rs 40,000- 45, 000. But now you will now be wondering how we will apply that our tower will be built on the ground and we can easily earn money. Friends, it is very easy, we will give you full details about this.</p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `type` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `type`) VALUES
(1, 'Skycliffer', 'skycliffer', 'skycliffer', 'Admin'),
(2, 'Admin', 'admin', 'admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `basic_details`
--

CREATE TABLE IF NOT EXISTS `basic_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta_key` text NOT NULL,
  `meta_content` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `logo` varchar(100) NOT NULL,
  `icon` text NOT NULL,
  `about_us` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `basic_details`
--

INSERT INTO `basic_details` (`id`, `site_name`, `title`, `meta_key`, `meta_content`, `email`, `contact`, `address`, `logo`, `icon`, `about_us`) VALUES
(1, 'jiotoweronline.co.in', 'Jio Tower Online', 'Jio Tower Online', 'Jio Tower Online', 'info@jiotoweronline.co.in', '7870216234', 'Jio Towers Limited 3rd Floor,B Wing, Fortune Building, Bharat Nagar,Bandra - Kurla Complex, Mumbai - 400051.', 'assets/Images/Logo/693604image.png', 'assets/Images/Logo/777284image.png', 'We are a Web Development Company that builds optimized IT Infrastructure which will give your business or idea the right edge, making your business or idea processes more streamlined, easy and cost effective. We build effective organized web solutions that enable our customers to work with no constraining limits of work space.');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE IF NOT EXISTS `counter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `title`, `count`) VALUES
(1, 'Happy Clients', 1200),
(2, 'Towers Installed', 560),
(3, 'Currently Working', 48),
(4, 'Locations Covered', 1350);

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` longtext NOT NULL,
  `heading` varchar(255) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `content`, `heading`, `image`) VALUES
(1, '<ul>\r\n	<li>Aadhar Card Self attested copy of Voter ID.</li>\r\n	<li>Self attested copy of PAN card.</li>\r\n	<li>Self attested passport size photograph (two).</li>\r\n	<li>Copy of property related documents.</li>\r\n	<li>Copy of bank statement (last six months).</li>\r\n</ul>\r\n', 'Document Required', 'assets/Images/Document/441077image.gif');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE IF NOT EXISTS `enquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `alt_mobile` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL,
  `apply_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `fname`, `lname`, `mobile`, `alt_mobile`, `amount`, `email`, `type`, `address`, `status`, `apply_date`) VALUES
(1, 'Aman', 'Jain', '9806169218', '9806169218', 'dfdsfsf', 'amanjain1409@gmail.com', 'Auto/Vehicle', 'M-21 bda complex opp Ci Home Mata Mandir', '', '2019-07-11'),
(2, 'Anuj', 'Shrivas', '6260901338111', '6260901338111', 'dfdsfsf', 'ankitshrivas098@gmail.com', 'Personal', 'Barkhedi near by police chokhi Bhopal', '', '2019-07-14');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `content`, `image`) VALUES
(1, 'Personal Loan', '<p>The company has decided to install more than 6000 Infratel across the country for JIO users for data speed and network problem.</p>\r\n', 'assets/Images/Services/309190image.png'),
(2, 'Home Loan', '<p>register with the all details, We will review your property detail and notify you once there is requirement of Tower.</p>\r\n', 'assets/Images/Services/930628image.png'),
(3, 'Project Loan', '<p>RJIL shall invite applications for land or space to install Reliance JIO 4G Tower for providing network in that area on rent basis.</p>\r\n', 'assets/Images/Services/579634image.png'),
(4, 'Education Loan', '<p>RJIL shall invite applications for land or space to install Reliance JIO 4G Tower for providing network in that area on rent basis.</p>\r\n', 'assets/Images/Services/434092image.png'),
(5, 'Business Loan', '<p>RJIL shall invite applications for land or space to install Reliance JIO 4G Tower for providing network in that area on rent basis.</p>\r\n', 'assets/Images/Services/572778image.png'),
(6, 'Vehicle/Car Loan', '<p>RJIL shall invite applications for land or space to install Reliance JIO 4G Tower for providing network in that area on rent basis.</p>\r\n', 'assets/Images/Services/943456image.png');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `heading` varchar(255) NOT NULL,
  `ordering` int(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `heading`, `ordering`, `status`) VALUES
(6, 'assets/Images/Slider/272555image.jpg', '', 1, 'Enable'),
(7, 'assets/Images/Slider/164935image.jpg', '', 2, 'Enable'),
(8, 'assets/Images/Slider/751966image.jpg', '', 3, 'Enable');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
