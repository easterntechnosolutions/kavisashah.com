-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 07, 2024 at 04:37 AM
-- Server version: 8.0.36
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kavisash_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_master`
--

CREATE TABLE `contact_master` (
  `cid` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `address` text,
  `qualification` varchar(255) DEFAULT NULL,
  `experience_year` varchar(255) DEFAULT NULL,
  `experience_month` varchar(255) DEFAULT NULL,
  `industry` varchar(255) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(250) NOT NULL,
  `upload_file` text,
  `phone` varchar(30) DEFAULT '0',
  `cdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `new` int NOT NULL DEFAULT '0',
  `salutation` varchar(255) NOT NULL,
  `medium` varchar(255) NOT NULL DEFAULT 'Hindva web'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_master`
--

INSERT INTO `contact_master` (`cid`, `name`, `email_address`, `company`, `purpose`, `city`, `country`, `address`, `qualification`, `experience_year`, `experience_month`, `industry`, `subject`, `message`, `upload_file`, `phone`, `cdate`, `new`, `salutation`, `medium`) VALUES
(224, 'jigna', 'bhautik.easternts@gmail.com', NULL, NULL, 'surat', 'india', NULL, NULL, NULL, NULL, NULL, 'testing', 'TESTINGTESTINGTESTINGTESTING', NULL, '+91 6564656+5+', '2019-11-09 12:04:17', 1, 'Miss.', 'Hindva web'),
(225, 'ets rajath bhai', 'bhautik.easternts@gmail.com', NULL, NULL, 'Surat', 'India', NULL, NULL, NULL, NULL, NULL, 'asdASDad', 'ASDasd', NULL, '+91 65656565', '2019-11-09 12:06:41', 1, 'Mrs.', 'Hindva web'),
(220, 'rajnji kant', 'bhautik.easternts@gmail.com', NULL, NULL, 'Surat', 'India', NULL, NULL, NULL, NULL, NULL, 'bhautik', 'adAS', NULL, '+91 656565', '2019-11-08 08:21:29', 1, 'Miss.', 'Hindva web'),
(221, 'RAJNIKANT', 'bhautik.easternts@gmail.com', NULL, NULL, 'Surat', 'India', NULL, NULL, NULL, NULL, NULL, 'RAJNI', 'A\'DSFKA\'SDF;LKASD\'FL;SA', NULL, '+91 25246565', '2019-11-08 08:21:29', 1, 'Mr.', 'Hindva web'),
(222, 'RAJNIKANT', 'bhautik.easternts@gmail.com', NULL, NULL, 'Surat', 'India', NULL, NULL, NULL, NULL, NULL, 'RAJNI', 'A\'DSFKA\'SDF;LKASD\'FL;SA', NULL, '+91 25246565', '2019-11-08 08:21:29', 1, 'Mr.', 'Hindva web'),
(223, 'jigna', 'bhautik.easternts@gmail.com', NULL, NULL, 'surat', 'india', NULL, NULL, NULL, NULL, NULL, 'testing', 'TESTINGTESTINGTESTINGTESTING', NULL, '+91 6564656+5+', '2019-11-09 12:04:17', 1, 'Miss.', 'Hindva web'),
(219, 'rajnji kant', 'bhautik.easternts@gmail.com', NULL, NULL, 'Surat', 'India', NULL, NULL, NULL, NULL, NULL, 'bhautik', 'adAS', NULL, '+91 656565', '2019-11-08 08:21:29', 1, 'Miss.', 'Hindva web'),
(218, 'ets', 'bhautik.easternts@gmail.com', NULL, NULL, 'Surat', 'India', NULL, NULL, NULL, NULL, NULL, 'sfd;gkljfdsl;ets ets ets ets', 'asklfdja;lskjfd;laksdjfkl', NULL, '+91 98989898', '2019-11-08 08:06:52', 1, 'Mrs.', 'Hindva web'),
(216, 'folo', 'bhautik.easternts@gmail.com', NULL, NULL, 'Surat', 'India', NULL, NULL, NULL, NULL, NULL, 'testing', 'asdfasf', NULL, '+9154565656565', '2019-11-08 08:04:18', 1, 'Miss.', 'Hindva web'),
(217, 'ets', 'bhautik.easternts@gmail.com', NULL, NULL, 'Surat', 'India', NULL, NULL, NULL, NULL, NULL, 'sfd;gkljfdsl;ets ets ets ets', 'asklfdja;lskjfd;laksdjfkl', NULL, '+91 98989898', '2019-11-08 08:04:18', 1, 'Mrs.', 'Hindva web'),
(214, 'folo', 'bhautik.easternts@gmail.com', NULL, NULL, 'Surat', 'India', NULL, NULL, NULL, NULL, NULL, 'testing', 'asdfasf', NULL, '+9154565656565', '2019-11-08 07:26:11', 1, 'Miss.', 'Hindva web'),
(215, 'folo', 'bhautik.easternts@gmail.com', NULL, NULL, 'Surat', 'India', NULL, NULL, NULL, NULL, NULL, 'testing', 'asdfasf', NULL, '+9154565656565', '2019-11-08 07:26:11', 1, 'Miss.', 'Hindva web'),
(213, 'ets big b', 'bhautik.easternts@gmail.com', NULL, NULL, 'Surat', 'India', NULL, NULL, NULL, NULL, NULL, 'ets', 'f;aslkdfja;sldkjfas;ldkjfa;sldkfj;al', NULL, '+91 2131321321', '2019-11-08 07:26:11', 1, 'Mrs.', 'Hindva web'),
(212, 'ets big b', 'bhautik.easternts@gmail.com', NULL, NULL, 'Surat', 'India', NULL, NULL, NULL, NULL, NULL, 'ets', 'f;aslkdfja;sldkjfas;ldkjfa;sldkfj;al', NULL, '+91 2131321321', '2019-11-08 07:26:11', 1, 'Mrs.', 'Hindva web'),
(210, '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '2019-11-08 07:26:11', 1, '', 'Hindva web'),
(211, 'ets big b', 'bhautik.easternts@gmail.com', NULL, NULL, 'Surat', 'India', NULL, NULL, NULL, NULL, NULL, 'ets', 'f;aslkdfja;sldkjfas;ldkjfa;sldkfj;al', NULL, '+91 2131321321', '2019-11-08 07:26:11', 1, 'Mrs.', 'Hindva web'),
(209, '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '2019-11-08 07:26:11', 1, '', 'Hindva web'),
(208, 'ets big b', 'bhautik.easternts@gmail.com', NULL, NULL, 'Surat', 'India', NULL, NULL, NULL, NULL, NULL, 'ets', 'f;aslkdfja;sldkjfas;ldkjfa;sldkfj;al', NULL, '+91 2131321321', '2019-11-08 06:58:19', 1, 'Mrs.', 'Hindva web'),
(207, 'ets big b', 'bhautik.easternts@gmail.com', NULL, NULL, 'Surat', 'India', NULL, NULL, NULL, NULL, NULL, 'ets', 'f;aslkdfja;sldkjfas;ldkjfa;sldkfj;al', NULL, '+91 2131321321', '2019-11-08 06:58:19', 1, 'Mrs.', 'Hindva web'),
(206, 'ets', 'bhautik.easternts@gmail.com', NULL, NULL, 'Surat', 'India', NULL, NULL, NULL, NULL, NULL, 'ets bhautik', 'dsfasdfasdfasdfasdfasdf', NULL, '+91 231231321321321231312', '2019-11-08 06:58:19', 1, 'Mrs.', 'Hindva web'),
(204, 'ets', 'bhautik.easternts@gmail.com', NULL, NULL, 'Surat', 'India', NULL, NULL, NULL, NULL, NULL, 'ets bhautik', 'dsfasdfasdfasdfasdfasdf', NULL, '+91 231231321321321231312', '2019-11-08 06:58:19', 1, 'Mrs.', 'Hindva web'),
(205, 'ets', 'bhautik.easternts@gmail.com', NULL, NULL, 'Surat', 'India', NULL, NULL, NULL, NULL, NULL, 'ets bhautik', 'dsfasdfasdfasdfasdfasdf', NULL, '+91 231231321321321231312', '2019-11-08 06:58:19', 1, 'Mrs.', 'Hindva web'),
(203, 'ets', 'bhautik.easternts@gmail.com', NULL, NULL, 'Surat', 'India', NULL, NULL, NULL, NULL, NULL, 'ets bhautik', 'dsfasdfasdfasdfasdfasdf', NULL, '+91 231231321321321231312', '2019-11-08 06:58:19', 1, 'Mrs.', 'Hindva web'),
(202, 'ets bhautik admission', 'bmehta217@gmail.com', 'Ashadeep School', 'Admission', 'Surat', 'India', '', '', '', '', '', 'bhautik', 'aSDasdA', NULL, '+91 1234567890', '2019-10-24 06:10:16', 1, 'Mr.', 'Hindva Web'),
(226, 'ets bhautik', 'bhautik.easternts@gmail.com', NULL, NULL, 'Surat', 'India', NULL, NULL, NULL, NULL, NULL, 'bhautik', 'asdfsafsfsdfsad', NULL, '+91 65656565656', '2019-11-19 09:58:32', 1, 'Miss.', 'Hindva web'),
(227, 'rajath', 'rajath.easternts@gmail.com', NULL, NULL, 'Surat', 'India', NULL, NULL, NULL, NULL, NULL, 'bhautik', 'yertyertyertyertyr', NULL, '+91 6565656565', '2019-11-19 09:58:32', 1, 'Mrs.', 'Hindva web'),
(228, 'bhautik ets', 'bmehta217@gmail.com', NULL, NULL, 'Surat', 'India', NULL, NULL, NULL, NULL, NULL, 'bhautik', 'adsASDasdASDadasdSAD', NULL, '+91 123456789', '2019-12-05 14:46:48', 1, 'Mrs.', 'Hindva web'),
(229, 'SDasdad', 'ASDA@gmail.com', NULL, NULL, 'aisdf;l', NULL, NULL, NULL, NULL, NULL, NULL, '', ';afsdjfklasdjf;laksjdflkasdf', NULL, '+91 65654564654', '2020-01-17 12:14:50', 1, '', 'Hindva web'),
(230, 'ets testing', 'bhautik@easternts@gmail.com', NULL, NULL, 'surat', NULL, NULL, NULL, NULL, NULL, NULL, 'ets', 'ets', NULL, '+91 656565656565', '2020-01-17 12:14:50', 1, '', 'Hindva web'),
(231, 'ets', 'bhautik.easternts@gmail.com', NULL, NULL, 'surat', NULL, NULL, NULL, NULL, NULL, NULL, 'kahfslk', 'aksjlhdfaskjdf', NULL, '+91 6565656565', '2020-01-17 12:14:50', 1, '', 'Hindva web'),
(232, 'bhautik ets testing', 'bhautik.easternts@gmail.com', NULL, NULL, 'surat', NULL, NULL, NULL, NULL, NULL, NULL, 'ets testing', 'testing', NULL, '+91 123567890', '2020-04-18 05:20:01', 1, '', 'Hindva web'),
(233, 'bhautik ets testing', 'bhautik.easternts@gmail.com', NULL, NULL, 'surat', NULL, NULL, NULL, NULL, NULL, NULL, 'ets testing', 'testing', NULL, '+91 123567890', '2020-04-18 05:20:01', 1, '', 'Hindva web'),
(234, 'harsh', 'harsh.easternts@gmail.com', NULL, NULL, 'surat', NULL, NULL, NULL, NULL, NULL, NULL, 'abc', 'HGFHGHJVNBVNBN', NULL, '+91 9879562985', '2020-04-18 05:20:01', 1, '', 'Hindva web'),
(235, 'harsh', 'harsh.easternts@gmail.com', NULL, NULL, 'fg', NULL, NULL, NULL, NULL, NULL, NULL, 'abc', 'SDFSGDHJ', NULL, '+91 9879562985', '2020-04-18 05:20:01', 1, '', 'Hindva web'),
(236, 'harsh', 'harsh.easternts@gmail.com', NULL, NULL, 'surat', NULL, NULL, NULL, NULL, NULL, NULL, 'abc', 'fdfgnhnbvcxz', NULL, '+91 9879562985', '2020-04-18 05:20:01', 1, '', 'Hindva web'),
(237, 'harsh', 'harsh.easternts@gmail.com', NULL, NULL, 'surat', NULL, NULL, NULL, NULL, NULL, NULL, 'abc', 'xzcvb', NULL, '+91 98796552', '2020-04-18 05:20:01', 1, '', 'Hindva web'),
(238, 'Hillary Erickson', 'lukiv@mailinator.com', NULL, NULL, 'Officia pariatur Lo', NULL, NULL, NULL, NULL, NULL, NULL, 'Odit et dolor sit v', 'Et laborum Corrupti', NULL, '+1 (773) 276-7278', '2021-10-27 01:56:26', 1, '', 'Hindva web'),
(239, 'Maxine Walters', 'quxikefy@mailinator.com', NULL, NULL, 'Ullam minim molestia', NULL, NULL, NULL, NULL, NULL, NULL, 'Esse minim aliquip d', 'Rerum cillum iste ut', NULL, '+1 (188) 145-8396', '2021-10-27 01:56:26', 1, '', 'Hindva web'),
(240, 'Camille Mcdonald', 'devang.easternts@gmail.com', NULL, NULL, 'Aliquam deserunt eiu', NULL, NULL, NULL, NULL, NULL, NULL, 'Distinctio Voluptat', 'Facilis et ullam qui', NULL, '+1 (486) 913-5294', '2021-10-27 01:56:26', 1, '', 'Hindva web');

-- --------------------------------------------------------

--
-- Table structure for table `content_master`
--

CREATE TABLE `content_master` (
  `content_id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `createdate` date NOT NULL,
  `modifieddate` date NOT NULL,
  `remote_ip` varchar(150) NOT NULL,
  `description` text,
  `image_id` int NOT NULL,
  `image` text,
  `type` varchar(100) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'E'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content_master`
--

INSERT INTO `content_master` (`content_id`, `username`, `createdate`, `modifieddate`, `remote_ip`, `description`, `image_id`, `image`, `type`, `status`) VALUES
(2, '', '2016-09-05', '2017-06-26', '192.168.0.9', 'a:5:{s:4:\"type\";N;s:3:\"url\";N;s:7:\"caption\";N;s:11:\"description\";s:18:\"Under Construction\";s:12:\"redirect_url\";N;}', 0, 'popup_thumb.webp', 'popup', ''),
(4, 'Keyur', '2017-06-14', '2018-02-10', '192.168.0.12', '<p>The Real Estate (Regulation and Development) Act, 2016 (RERA) will finally give India&rsquo;s real estate sector its first regulator from Monday, May 1, 2016. The act was passed by parliament last year and the Union Ministry of Housing and Urban Poverty Alleviation had given time till May 1, 2017, to formulate and notify rules for the functioning of the regulator. RERA seeks to bring clarity and fair practices that would protect the interests of buyers and also impose penalties on errant builders.</p>\r\n<p style=\"padding-top: 5px;\">So what is RERA? Here is a look at the real estate regulator and how it will impact the real estate market. According to RERA, each state and Union territory will have its own regulator and set of rules to govern the functioning of the regulator. Centre has drafted the rules for Union territories including the national Capital. While many states are still behind on schedule for notification of RERA rules, many have notified rules and a regulator will start functioning. Some of these states are Haryana, Uttar Pradesh and Maharashtra.</p>\r\n<p style=\"padding-top: 5px;\">Despite seeing a slump in the past three years, the ticket prices are relatively high and inventories are piling up. Low demand is also contributing to the reduced recovery of investment by developers. These reasons have deterred developers from reducing the ticket prices. RERA seeks to address issues like delays, price, quality of construction, title and other changes.</p>\r\n<p style=\"padding-top: 5px;\">Delays in projects are the biggest issue faced by buyers. The reasons are many and the impact is huge. Since the last 10 years, many projects have seen delays of up to 7 years. Projects launched after the turn of this decade have faced delays as well. Some have run into obstacles even before a brick was laid. The reasons include diversion of funds to other projects, changes in regulations by authorities, the environment ministry, national green tribunal etc. and other bodies like those involved in infrastructure development and governing transport. In many places, land acquisition becomes an issue. Errant builders often sell projects to investors without the approval of plans, unauthorized increase in FAR, bad quality of construction, projects stuck in litigation etc.</p>', 0, '', 'real_estate_act', 'E');

-- --------------------------------------------------------

--
-- Table structure for table `epanel_master`
--

CREATE TABLE `epanel_master` (
  `id` int NOT NULL,
  `home_content` text NOT NULL,
  `copyright` varchar(100) NOT NULL,
  `powered_by` varchar(255) NOT NULL,
  `ga_view_id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `create_date` date NOT NULL,
  `modified_date` date NOT NULL,
  `remote_ip` varchar(70) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `epanel_master`
--

INSERT INTO `epanel_master` (`id`, `home_content`, `copyright`, `powered_by`, `ga_view_id`, `username`, `create_date`, `modified_date`, `remote_ip`) VALUES
(1, '<p>Eastern Techno Solution (ETS) is headquartered in Surat, Gujarat. An IT Company established by ex- employees of COGNIZANT and INFOSYS.<br /><br />It principally focused on&nbsp;Customized Software Development, Web Applications&nbsp;(which includes Web Designing and Ecommerce Websites),&nbsp;Mobile Applications and Training Institute.&nbsp;Within 3 years from its inception, ETS has been able to make a mark in Gujarat.<br /><br />We are a company with leading specialized professionals whose striking experiences reveal a comprehensible indulgent that industries today are faced with the confrontation of harnessing the eternally changing landscape of a complicated and spirited business world.<br /><br />It\'s essential for businesses today to stay on the callous edge of technology to build and implement the tools necessary to compete and succeed taking care of innovation. ETS has showed that with apparent understanding of your business attached to our analytical proficiency; a policy can be forged heartening your company to a whole new plateau of triumph.<br /><br />Our all-embracing case of services includes Customized software&rsquo;s, Web&nbsp;application development and Mobile application development (Android development and iPhone development). ETS sets it a challenge to make finest use of the resources, and the precious business intelligence entrenched in a range of verticals - Insurance, Finance, Hotels &amp; Travel, Healthcare, Retail, Distribution, Government, and Manufacturing etc.<br /><br /><strong>We as Training Institute</strong><br />ETS also offers a wide range of training programs for school as well as college students and IT professionals. It provides high class principles and top priority to deliver best learning know-how by following best business practices projected to help the students to expand valuable newest knowledge and experience in grounding for an innovative, pleasing career in an ever-changing marketplace.</p>\r\n<p><br /><strong>We as Consultancy Firm</strong><br />ETS is also a consultancy firm that helps college students and IT professionals to be placed in the best IT companies. We have tie- ups with many companies. So the students/ IT Professionals, after attending the corporate training program, maximize their chances of getting placed in the best IT companies. Thus, we are helping the industry by providing IT technocrats.</p>', 'Eastern Techno Solutions', 'a:2:{s:5:\"title\";s:24:\"Eastern Techno Solutions\";s:4:\"link\";s:25:\"http://www.easternts.com/\";}', 138386736, 'Keyur', '2015-10-26', '2020-02-25', '60.254.95.173');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `galleryID` int NOT NULL,
  `productID` int NOT NULL DEFAULT '0',
  `galleryTitle` varchar(100) NOT NULL DEFAULT '',
  `galleryImage` varchar(100) NOT NULL,
  `galleryImage1` varchar(100) NOT NULL,
  `galleryImage2` varchar(100) NOT NULL,
  `user_flows` text,
  `user_flows_des` text,
  `mobile_galleryImage` varchar(100) NOT NULL DEFAULT '',
  `isFront` char(1) NOT NULL DEFAULT 'E',
  `sortorder` int DEFAULT '0',
  `status` char(1) NOT NULL DEFAULT 'E',
  `username` varchar(50) NOT NULL,
  `createdate` date DEFAULT '2016-01-01',
  `modifieddate` date DEFAULT '2016-01-01',
  `remote_ip` varchar(15) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`galleryID`, `productID`, `galleryTitle`, `galleryImage`, `galleryImage1`, `galleryImage2`, `user_flows`, `user_flows_des`, `mobile_galleryImage`, `isFront`, `sortorder`, `status`, `username`, `createdate`, `modifieddate`, `remote_ip`) VALUES
(50, 122, '', '8.webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(48, 122, '', '6 (1).webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(49, 122, '', '7 (1).webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(46, 122, '', '3.webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(47, 122, '', '5.webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(44, 122, '', '2.webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(45, 122, '', '4.webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(42, 118, '', '6.webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(43, 122, '', '1.webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(41, 118, '', '7.webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(40, 118, '', '5.webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(39, 118, '', '4.webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(37, 118, '', '2 (1).webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(38, 118, '', '3.webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(36, 118, '', '1 (1).webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(51, 130, '', '1.webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(52, 130, '', '6.webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(53, 130, '', '5.webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(54, 130, '', '7.webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(55, 130, '', '8.webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(56, 130, '', '9.webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(57, 130, '', '2.webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(58, 130, '', '4.webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(59, 130, '', '3.webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(60, 141, '', 'slider-title.webp', '', '', NULL, NULL, '', 'E', 1, 'E', '', '2016-01-01', '2016-01-01', '0'),
(61, 141, '', 'poster1.webp', '', '', NULL, NULL, '', 'E', 4, 'E', '', '2016-01-01', '2016-01-01', '0'),
(62, 141, '', 'poster.webp', '', '', NULL, NULL, '', 'E', 3, 'E', '', '2016-01-01', '2016-01-01', '0'),
(63, 141, '', 'poster2.webp', '', '', NULL, NULL, '', 'E', 2, 'E', '', '2016-01-01', '2016-01-01', '0'),
(64, 141, '', 'slider2.webp', '', '', NULL, NULL, '', 'E', 6, 'E', '', '2016-01-01', '2016-01-01', '0'),
(65, 141, '', 'slider1.webp', '', '', NULL, NULL, '', 'E', 5, 'E', '', '2016-01-01', '2016-01-01', '0'),
(66, 146, '', 'poster.webp', '', '', NULL, NULL, '', 'E', 4, 'E', '', '2016-01-01', '2016-01-01', '0'),
(67, 146, '', 'poster1.webp', '', '', NULL, NULL, '', 'E', 3, 'E', '', '2016-01-01', '2016-01-01', '0'),
(68, 146, '', 'poster2.webp', '', '', NULL, NULL, '', 'E', 2, 'E', '', '2016-01-01', '2016-01-01', '0'),
(69, 146, '', 'slider1.webp', '', '', NULL, NULL, '', 'E', 5, 'E', '', '2016-01-01', '2016-01-01', '0'),
(71, 146, '', 'slider-title.webp', '', '', NULL, NULL, '', 'E', 1, 'E', '', '2016-01-01', '2016-01-01', '0'),
(75, 146, '', 'slider2 (1).webp', '', '', NULL, NULL, '', 'E', 6, 'E', '', '2016-01-01', '2016-01-01', '0'),
(76, 150, '', '8.webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(77, 150, '', '3.webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(78, 150, '', '7 (1).webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(79, 149, '', '6.webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(80, 149, '', '6 (1).webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(81, 151, '', 'slider-title.webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(82, 151, '', 'poster2.webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(83, 151, '', 'poster.webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(84, 151, '', 'poster1.webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(102, 173, '', 'img5_mob (1).webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(101, 173, '', 'img4_mob (1).webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(100, 173, '', 'img3_mob (1).webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(99, 173, '', 'img2_mob (1).webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(98, 173, '', 'img1_mob (1).webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(95, 177, '', '308-375x667.webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(96, 177, '', '315-375x667.webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(97, 177, '', '335-375x667.webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(103, 173, '', 'img6_mob (1).webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(104, 173, '', 'img7_mob (1).webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(105, 173, '', 'img8_mob (1).webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(106, 173, '', 'img9_mob (1).webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(107, 173, '', 'img10_mob (1).webp', '', '', NULL, NULL, '', 'E', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(108, 173, 'Branding', '173-logo_2.webp', '', '', NULL, NULL, '', 'B', 0, 'E', '', '2016-01-01', '2016-01-01', '0'),
(127, 173, 'Raja Ryan', 'video (2)_Moment.webp', 'photo-1573614999645-e5f0f16ec15d.webp', 'video (2)_Moment.webp', NULL, NULL, '', 'B', 11, 'E', '', '2021-10-05', '2021-10-05', '150.107.188.82'),
(128, 173, '', 'PORTFOLIO (i,s)_cc.mp4', 'CAREER (i,s)_cc.mp4', 'CONTACT US (i,s)_cc.mp4', NULL, NULL, '', 'V', 12, 'E', '', '2021-10-05', '2021-10-05', '103.251.59.138'),
(129, 173, '', 'TEAM (i,s)_cc.mp4', 'CONTACT US (i,s)_cc.mp4', 'CONTACTis-1.mp4', NULL, NULL, '', 'V', 13, 'E', '', '2021-10-05', '2021-10-05', '103.251.59.138'),
(148, 214, '', 'photo-1573614999645-e5f0f16ec15d.webp', 'photo-1573614999645-e5f0f16ec15d.webp', '', NULL, NULL, '', 'L', 17, 'D', '', '2021-10-07', '2021-10-07', '150.107.188.82'),
(150, 218, '', 'photo-1573614999645-e5f0f16ec15d.webp', 'photo-1573614999645-e5f0f16ec15d.webp', '', NULL, NULL, '', 'F', 19, 'D', '', '2021-10-07', '2021-10-07', '150.107.188.82'),
(147, 214, 'Ronan Flores', 'video (2)_Moment.webp', 'photo-1573614999645-e5f0f16ec15d.webp', 'video (2)_Moment.webp', NULL, NULL, '', 'B', 16, 'D', '', '2021-10-07', '2021-10-07', '150.107.188.82'),
(145, 214, 'Fletcher Murphy', 'video (2)_Moment.webp', 'video (2)_Moment.webp', 'video (2)_Moment.webp', NULL, NULL, '', 'B', 14, 'D', '', '2021-10-07', '2021-10-07', '150.107.188.82'),
(146, 214, '', 'BLOGS (i,s)_cc.mp4', 'CAREER (i,s)_cc.mp4', 'CONTACT US (i,s)_cc.mp4', NULL, NULL, '', 'V', 15, 'D', '', '2021-10-07', '2021-10-07', '150.107.188.82'),
(149, 214, '', 'photo-1573614999645-e5f0f16ec15d.webp', 'photo-1573614999645-e5f0f16ec15d.webp', '', NULL, NULL, '', 'F', 18, 'D', '', '2021-10-07', '2021-10-07', '150.107.188.82'),
(151, 218, '', 'photo-1573614999645-e5f0f16ec15d.webp', 'photo-1573614999645-e5f0f16ec15d.webp', '', NULL, NULL, '', 'L', 20, 'D', '', '2021-10-07', '2021-10-07', '150.107.188.82');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_master`
--

CREATE TABLE `gallery_master` (
  `image_id` int NOT NULL,
  `username` varchar(100) NOT NULL DEFAULT '',
  `createdate` date NOT NULL DEFAULT '0000-00-00',
  `modifieddate` date NOT NULL DEFAULT '0000-00-00',
  `a_id` int NOT NULL,
  `image_title` varchar(255) NOT NULL DEFAULT '',
  `gallery_image` text NOT NULL,
  `sortorder` int NOT NULL,
  `isFront` varchar(100) NOT NULL DEFAULT '',
  `status` char(1) NOT NULL DEFAULT 'E',
  `remote_ip` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `group_master`
--

CREATE TABLE `group_master` (
  `group_id` int NOT NULL,
  `group_name` varchar(50) NOT NULL DEFAULT '',
  `group_status` char(1) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=0;

--
-- Dumping data for table `group_master`
--

INSERT INTO `group_master` (`group_id`, `group_name`, `group_status`) VALUES
(1, 'Administrator', 'E'),
(2, 'Developer', 'E');

-- --------------------------------------------------------

--
-- Table structure for table `homecontent`
--

CREATE TABLE `homecontent` (
  `content_id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `createdate` date NOT NULL,
  `modifieddate` date NOT NULL,
  `home_content` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homecontent`
--

INSERT INTO `homecontent` (`content_id`, `username`, `createdate`, `modifieddate`, `home_content`) VALUES
(1, 'Keyur', '2017-04-05', '2018-05-21', '<div class=\"text-content\">\r\n<p>Studio Elements is all about enhancing the beauty of your home.</p>\r\n</div>\r\n<div class=\"text-content\">\r\n<p>Every artefact @STUDIO ELEMENTS is curated and handpicked from various parts of the world, to brighten the cultural ambience. We encourage various artists &amp; craftsman, by showcasing their products at our studio, thus providing them a platform to build upon their dreams. Our forte being, interior designing, along with our passion for art, makes it an equitable union bringing out the finest designs and artefacts, for one\'s home &amp; commercial place. Studio Elements also offers a robust range of interior design services with unique and flawless finishing touches to all your architectural spaces.</p>\r\n</div>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `job_master`
--

CREATE TABLE `job_master` (
  `job_id` int NOT NULL,
  `description` text,
  `j_name` varchar(150) NOT NULL,
  `j_email` varchar(50) NOT NULL,
  `j_message` text,
  `j_resume` varchar(255) NOT NULL DEFAULT '',
  `j_contact` varchar(100) DEFAULT NULL,
  `j_date` datetime DEFAULT NULL,
  `j_area` varchar(256) NOT NULL DEFAULT '',
  `j_exp` varchar(256) NOT NULL DEFAULT '',
  `new` int DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_master`
--

INSERT INTO `job_master` (`job_id`, `description`, `j_name`, `j_email`, `j_message`, `j_resume`, `j_contact`, `j_date`, `j_area`, `j_exp`, `new`) VALUES
(113, NULL, 'Bhavin Mistry', 'bhavin9mistry@gmail.com', 'Dear Team,\r\nGood Evening.\r\n\r\nMyself Bhavin Mistry applying for Engineer. \r\nPlease find the updated CV of mine as per shared details.', '113-Bhavin Mistry.docx', '8460172088', '2019-06-13 14:43:03', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `module_master`
--

CREATE TABLE `module_master` (
  `module_id` int NOT NULL,
  `module_title` varchar(50) NOT NULL,
  `module_name` varchar(100) NOT NULL,
  `module_file` varchar(25) NOT NULL,
  `module_parent` varchar(20) NOT NULL,
  `module_seo_slug` varchar(25) NOT NULL,
  `sortorder` int NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'D',
  `username` varchar(30) NOT NULL,
  `createdate` date NOT NULL,
  `modifieddate` date NOT NULL,
  `remote_ip` varchar(50) NOT NULL,
  `module_controller` varchar(70) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_master`
--

INSERT INTO `module_master` (`module_id`, `module_title`, `module_name`, `module_file`, `module_parent`, `module_seo_slug`, `sortorder`, `status`, `username`, `createdate`, `modifieddate`, `remote_ip`, `module_controller`) VALUES
(1, 'Contact', 'Contact', 'contact', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'contact'),
(2, 'User Management', 'User', 'user', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'user'),
(3, 'User Group Management', 'User Group', 'usergroup', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'user'),
(4, 'Slider Management', 'Slider', 'slider', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'slider'),
(5, 'Permission Management', 'Permission', 'permission', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'permission'),
(6, 'Pages Management', 'Pages', 'pages', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'pages'),
(7, 'Page Image Management', 'Page Images', 'pageimages', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'pages'),
(8, 'Homecontent Management', 'Homecontent', 'homecontent', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'pages'),
(9, 'Subscription List', 'Subscription List', 'subscription', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'subscription'),
(10, 'Job Data', 'Job Data', 'job', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'job'),
(11, 'epanel', 'epanel', 'epanel', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'settings'),
(12, 'website', 'website', 'website', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'settings'),
(13, 'News', 'News', 'news', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'news'),
(14, 'News Type', 'News Type', 'newsmaster', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'news'),
(15, 'Testimonial', 'Testimonial', 'testimonial', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'testimonial'),
(16, 'Testimonial Type', 'Testimonial Type', 'testimonialtype', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'testimonial'),
(17, 'Album Type', 'Album Type', 'albumtype', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'gallery'),
(18, 'Album', 'Album', 'album', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'gallery'),
(19, 'Gallery', 'Gallery', 'gallery', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'gallery'),
(20, 'Project Type', 'Project Type', 'project_type', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'projects'),
(21, 'Projects', 'Projects', 'projects', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'projects'),
(22, 'Project Floor Plans', 'Project Floor Plans', 'projectfloors', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'projects'),
(23, 'Project Slider Images', 'Project Slider Images', 'projectslider', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'projects'),
(24, 'Project Images', 'Project Images', 'projectimages', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'projects'),
(25, 'Brochure Downloads', 'Brochure Downloads', 'downloads_list', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'downloads_list'),
(26, 'Our Team', 'Our Team', 'team', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'team'),
(27, 'Banners', 'Banners', 'banner', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'banner'),
(28, 'Company', 'Company', 'company', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'projects'),
(29, 'Brochure', 'Brochure', 'brochure', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'brochure'),
(30, 'Home Page Popup', 'Home Page Popup', 'popup', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'popup'),
(33, 'Professional Honours', 'Professional Honours', 'professional', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'aboutus'),
(32, 'Academic Association', 'Academic Association', 'academic', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'aboutus'),
(31, 'Approved List', 'Approved List', 'approvedlist', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'approvedlist'),
(34, 'Client', 'Client', 'client', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'client'),
(35, 'Services', 'Services', 'services', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'services'),
(36, 'Certification', 'Certification', 'certification', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'achievement'),
(38, 'Product', 'Product', 'product', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'products'),
(39, 'Manage Type', 'Manage Type', 'producttype', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'products'),
(40, 'Manage Project Options', 'Manage Project Options', 'productoptions', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'products'),
(41, 'Brochure Download List', 'Brochure Download List', 'inquirylist', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'products'),
(42, 'Products', 'Products', 'products', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'products'),
(43, 'Industry type', 'Industry type', 'industry_type', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'products'),
(44, 'Real Estate Act', 'Real Estate Act', 'real_estate_act', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'real_estate_act'),
(45, 'Query Type', 'Query Type', 'real_estate_act_type', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'real_estate_act'),
(46, 'Content', 'Content', 'real_estate_act_content', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'real_estate_act'),
(47, 'product site gallery', 'product site gallery', 'productsitegallery', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'products'),
(48, 'Subscription List', 'Subscription List', 'subscriptionlist', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'products'),
(37, 'Press', 'Press', 'press', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'achievement'),
(50, 'Client', 'Client', 'client', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'client'),
(51, 'Client', 'Client', 'client', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'client'),
(52, 'Blogs Management', 'Blogs Management', 'blog', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'blog'),
(53, 'Team Type', 'Team Type', 'teamtype', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'team'),
(54, 'Success Story', 'Success Story', 'successstory', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'successstory'),
(55, 'Jobs', 'Jobs', 'jobs', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'jobs'),
(57, 'Jobs', 'Jobs', 'jobs', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'jobs'),
(56, 'FAQ', 'FAQ', 'faq', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'faq'),
(58, 'Free Estimate', 'Free Estimate', 'estimate', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'estimate'),
(70, 'product site gallery', 'product site gallery', 'productimages', '', '', 0, 'E', '', '0000-00-00', '0000-00-00', '', 'products'),
(71, 'works', 'works', 'works', '', '', 71, 'E', '', '2019-11-03', '2019-11-06', '', 'works'),
(72, 'workvideo', 'workvideo', 'workvideo', '', '', 71, 'E', '', '2019-11-03', '2019-11-06', '', 'work'),
(73, 'workfont', 'workfont', 'workfont', '', '', 71, 'E', '', '2019-11-03', '2019-11-06', '', 'work'),
(74, 'worklogo', 'worklogo', 'worklogo', '', '', 71, 'E', '', '2019-11-03', '2019-11-06', '', 'work'),
(75, 'workcolor', 'workcolor', 'workcolor', '', '', 71, 'E', '', '2019-11-03', '2019-11-06', '', 'work'),
(76, 'work', 'work', 'work', '', '', 71, 'E', '', '2019-11-03', '2019-11-06', '', 'work');

-- --------------------------------------------------------

--
-- Table structure for table `page_master`
--

CREATE TABLE `page_master` (
  `page_id` bigint NOT NULL,
  `parent_id` bigint NOT NULL,
  `page_template` varchar(200) NOT NULL,
  `page_slug` varchar(255) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_content` text NOT NULL,
  `mobile_page_content` text NOT NULL,
  `page_image` varchar(100) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_desc` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `sortorder` int NOT NULL,
  `status` char(1) NOT NULL COMMENT 'E-Enable D- Disable',
  `user_id` int NOT NULL,
  `createdate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL,
  `remote_ip` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permission_master`
--

CREATE TABLE `permission_master` (
  `permission_id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `createdate` date NOT NULL,
  `modifieddate` date NOT NULL,
  `group_id` varchar(20) NOT NULL,
  `module` varchar(20) NOT NULL,
  `permissions` varchar(7) NOT NULL DEFAULT 'a,e,d,v',
  `module_id` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission_master`
--

INSERT INTO `permission_master` (`permission_id`, `username`, `createdate`, `modifieddate`, `group_id`, `module`, `permissions`, `module_id`) VALUES
(1649, 'Keyur', '2018-08-28', '2018-08-28', '1', 'client', 'a,d,e,v', 51),
(1650, 'Keyur', '2018-08-28', '2018-08-28', '1', 'blog', 'a,d,e,v', 52),
(1648, 'Keyur', '2018-08-28', '2018-08-28', '1', 'client', 'a,d,e,v', 50),
(1647, 'Keyur', '2018-08-28', '2018-08-28', '1', 'press', 'a,d,e,v', 37),
(1646, 'Keyur', '2018-08-28', '2018-08-28', '1', 'subscriptionlist', 'a,d,e,v', 48),
(1645, 'Keyur', '2018-08-28', '2018-08-28', '1', 'productsitegallery', 'a,d,e,v', 47),
(1644, 'Keyur', '2018-08-28', '2018-08-28', '1', 'real_estate_act_cont', 'a,d,e,v', 46),
(1643, 'Keyur', '2018-08-28', '2018-08-28', '1', 'real_estate_act_type', 'a,d,e,v', 45),
(1642, 'Keyur', '2018-08-28', '2018-08-28', '1', 'stakeholder', 'a,d,e,v', 44),
(1641, 'Keyur', '2018-08-28', '2018-08-28', '1', 'industry_type', 'a,d,e,v', 43),
(1640, 'Keyur', '2018-08-28', '2018-08-28', '1', 'products', 'a,d,e,v', 42),
(1639, 'Keyur', '2018-08-28', '2018-08-28', '1', 'inquirylist', 'a,d,e,v', 41),
(1638, 'Keyur', '2018-08-28', '2018-08-28', '1', 'productoptions', 'a,d,e,v', 40),
(1637, 'Keyur', '2018-08-28', '2018-08-28', '1', 'producttype', 'a,d,e,v', 39),
(1636, 'Keyur', '2018-08-28', '2018-08-28', '1', 'product', 'a,d,e,v', 38),
(1634, 'Keyur', '2018-08-28', '2018-08-28', '1', 'services', 'a,d,e,v', 35),
(1635, 'Keyur', '2018-08-28', '2018-08-28', '1', 'certification', 'a,d,e,v', 36),
(1633, 'Keyur', '2018-08-28', '2018-08-28', '1', 'client', 'a,d,e,v', 34),
(1632, 'Keyur', '2018-08-28', '2018-08-28', '1', 'approvedlist', 'a,d,e,v', 31),
(1631, 'Keyur', '2018-08-28', '2018-08-28', '1', 'academic', 'a,d,e,v', 32),
(1630, 'Keyur', '2018-08-28', '2018-08-28', '1', 'professional', 'a,d,e,v', 33),
(1629, 'Keyur', '2018-08-28', '2018-08-28', '1', 'popup', 'a,d,e,v', 30),
(1628, 'Keyur', '2018-08-28', '2018-08-28', '1', 'brochure', 'a,d,e,v', 29),
(1627, 'Keyur', '2018-08-28', '2018-08-28', '1', 'company', 'a,d,e,v', 28),
(1626, 'Keyur', '2018-08-28', '2018-08-28', '1', 'banner', 'a,d,e,v', 27),
(1625, 'Keyur', '2018-08-28', '2018-08-28', '1', 'team', 'a,d,e,v', 26),
(1624, 'Keyur', '2018-08-28', '2018-08-28', '1', 'downloads_list', 'a,d,e,v', 25),
(1623, 'Keyur', '2018-08-28', '2018-08-28', '1', 'projectimages', 'a,d,e,v', 24),
(1622, 'Keyur', '2018-08-28', '2018-08-28', '1', 'projectslider', 'a,d,e,v', 23),
(1621, 'Keyur', '2018-08-28', '2018-08-28', '1', 'projectfloors', 'a,d,e,v', 22),
(1620, 'Keyur', '2018-08-28', '2018-08-28', '1', 'projects', 'a,d,e,v', 21),
(1619, 'Keyur', '2018-08-28', '2018-08-28', '1', 'project_type', 'a,d,e,v', 20),
(1617, 'Keyur', '2018-08-28', '2018-08-28', '1', 'album', 'a,d,e,v', 18),
(1618, 'Keyur', '2018-08-28', '2018-08-28', '1', 'gallery', 'a,d,e,v', 19),
(1616, 'Keyur', '2018-08-28', '2018-08-28', '1', 'albumtype', 'a,d,e,v', 17),
(1615, 'Keyur', '2018-08-28', '2018-08-28', '1', 'testimonialtype', 'a,d,e,v', 16),
(1614, 'Keyur', '2018-08-28', '2018-08-28', '1', 'testimonial', 'a,d,e,v', 15),
(1613, 'Keyur', '2018-08-28', '2018-08-28', '1', 'newsmaster', 'a,d,e,v', 14),
(1612, 'Keyur', '2018-08-28', '2018-08-28', '1', 'news', 'a,d,e,v', 13),
(1611, 'Keyur', '2018-08-28', '2018-08-28', '1', 'website', 'a,d,e,v', 12),
(1610, 'Keyur', '2018-08-28', '2018-08-28', '1', 'epanel', 'a,d,e,v', 11),
(1609, 'Keyur', '2018-08-28', '2018-08-28', '1', 'job', 'a,d,e,v', 10),
(1608, 'Keyur', '2018-08-28', '2018-08-28', '1', 'subscription', 'a,d,e,v', 9),
(1607, 'Keyur', '2018-08-28', '2018-08-28', '1', 'homecontent', 'a,d,e,v', 8),
(1606, 'Keyur', '2018-08-28', '2018-08-28', '1', 'pageimages', 'a,d,e,v', 7),
(1605, 'Keyur', '2018-08-28', '2018-08-28', '1', 'pages', 'a,d,e,v', 6),
(1604, 'Keyur', '2018-08-28', '2018-08-28', '1', 'permission', 'a,d,e,v', 5),
(1603, 'Keyur', '2018-08-28', '2018-08-28', '1', 'slider', 'a,d,e,v', 4),
(1602, 'Keyur', '2018-08-28', '2018-08-28', '1', 'usergroup', 'a,d,e,v', 3),
(1601, 'Keyur', '2018-08-28', '2018-08-28', '1', 'user', 'a,d,e,v', 2),
(1600, 'Keyur', '2018-08-28', '2018-08-28', '1', 'contact', 'a,d,e,v', 1),
(1651, 'Keyur', '2018-08-28', '2018-08-28', '1', 'teamtype', 'a,d,e,v', 53),
(1652, 'Keyur', '2018-08-28', '2018-08-28', '1', 'successstory', 'a,d,e,v', 54),
(1653, 'Keyur', '2018-08-28', '2018-08-28', '1', 'jobs', 'a,d,e,v', 55),
(1654, 'Keyur', '2018-08-28', '2018-08-28', '1', 'jobs', 'a,d,e,v', 57),
(1655, 'Keyur', '2018-08-28', '2018-08-28', '1', 'faq', 'a,d,e,v', 56),
(1656, 'Keyur', '2018-08-28', '2018-08-28', '1', 'estimate', 'a,d,e,v', 58),
(1657, 'Keyur', '2018-08-28', '2018-08-28', '1', 'productimages', 'a,d,e,v', 70),
(1658, 'Keyur', '2018-08-28', '2018-08-28', '1', 'works', 'a,d,e,v', 71),
(1659, 'Keyur', '2018-08-28', '2018-08-28', '1', 'workvideo', 'a,d,e,v', 72),
(1660, 'Keyur', '2018-08-28', '2018-08-28', '1', 'workfont', 'a,d,e,v', 73),
(1661, 'Keyur', '2018-08-28', '2018-08-28', '1', 'worklogo', 'a,d,e,v', 74),
(1662, 'Keyur', '2018-08-28', '2018-08-28', '1', 'workcolor', 'a,d,e,v', 75),
(1663, 'Keyur', '2018-08-28', '2018-08-28', '1', 'work', 'a,d,e,v', 76);

-- --------------------------------------------------------

--
-- Table structure for table `productoptions`
--

CREATE TABLE `productoptions` (
  `productoptionID` int NOT NULL,
  `productID` int NOT NULL,
  `productOptionTitle` varchar(25) NOT NULL,
  `productOptionValue` text NOT NULL,
  `createdate` date NOT NULL,
  `modifieddate` date NOT NULL,
  `username` varchar(20) NOT NULL,
  `sortorder` int NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'E',
  `remote_ip` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int NOT NULL,
  `pTypeID` int NOT NULL,
  `productTitle` varchar(100) NOT NULL,
  `productTypeTitle` varchar(50) NOT NULL DEFAULT '',
  `clientName` varchar(50) NOT NULL DEFAULT '',
  `productDescr` text NOT NULL,
  `productStatus` varchar(25) NOT NULL DEFAULT '',
  `siteaddress` varchar(255) NOT NULL,
  `productArea` varchar(100) NOT NULL DEFAULT '',
  `productThumbnail` varchar(100) DEFAULT NULL,
  `productShareImage` varchar(100) NOT NULL,
  `productSpeciality` text,
  `createdate` date NOT NULL,
  `modifieddate` date NOT NULL,
  `username` varchar(20) NOT NULL,
  `sortorder` int NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'E',
  `remote_ip` varchar(20) NOT NULL,
  `hasmasterplan` varchar(6) DEFAULT 'No',
  `productDetail` text NOT NULL,
  `productSpecifi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE `producttype` (
  `pTypeID` int NOT NULL,
  `pTypeTitle` text NOT NULL,
  `projectFile` varchar(100) DEFAULT NULL,
  `pTypeDescr` text,
  `type` text NOT NULL,
  `pTypeParent` int NOT NULL DEFAULT '0',
  `createdate` date NOT NULL,
  `modifieddate` date NOT NULL,
  `username` varchar(20) NOT NULL,
  `sortorder` int NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'E',
  `HasProject` char(1) NOT NULL DEFAULT 'N',
  `remote_ip` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`pTypeID`, `pTypeTitle`, `projectFile`, `pTypeDescr`, `type`, `pTypeParent`, `createdate`, `modifieddate`, `username`, `sortorder`, `status`, `HasProject`, `remote_ip`) VALUES
(1, 'Services', '', '', '', 0, '0000-00-00', '0000-00-00', 'Keyur', 1, 'E', 'Y', '116.74.112.172'),
(2, 'Sector', '', '', '', 0, '2018-08-27', '2019-05-27', 'Keyur', 1, 'E', 'Y', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `project_gallery`
--

CREATE TABLE `project_gallery` (
  `galleryID` int NOT NULL,
  `projectID` int NOT NULL DEFAULT '0',
  `galleryTitle` varchar(100) NOT NULL DEFAULT '',
  `galleryImage` varchar(100) NOT NULL,
  `type` char(1) NOT NULL DEFAULT 'G',
  `sortorder` int NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'E',
  `username` varchar(50) NOT NULL,
  `createdate` date NOT NULL,
  `modifieddate` date NOT NULL,
  `remote_ip` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seo_link_master`
--

CREATE TABLE `seo_link_master` (
  `seo_link_id` int NOT NULL,
  `module_name` varchar(100) NOT NULL,
  `module_id` int NOT NULL,
  `seo_slug` varchar(255) NOT NULL,
  `user_id` int NOT NULL,
  `createdate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL,
  `remote_ip` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seo_link_master`
--

INSERT INTO `seo_link_master` (`seo_link_id`, `module_name`, `module_id`, `seo_slug`, `user_id`, `createdate`, `modifieddate`, `remote_ip`) VALUES
(64, 'pages', 5, 'about-us-home-', 4, '2018-10-03 14:03:39', '2019-06-04 10:44:36', '::1'),
(2, 'pages', 2, 'about-us', 4, '2018-07-21 12:00:14', '2019-06-04 10:17:50', '::1'),
(102, 'works', 117, 'ets-work', 4, '2019-11-08 14:37:51', '2019-11-08 15:05:56', '::1'),
(103, 'works', 118, 'paycrave', 4, '2019-11-08 15:06:47', '2020-10-14 07:00:50', '150.107.188.82'),
(104, 'works', 120, 'asdfsadf', 4, '2019-11-09 09:34:33', '2019-11-09 09:34:33', '::1'),
(105, 'works', 121, 'xzcfs', 4, '2019-11-09 09:55:07', '2019-11-09 09:55:07', '::1'),
(106, 'pdf', 121, 'xzcfs', 4, '2019-11-09 09:55:07', '2019-11-09 09:55:07', '::1'),
(107, 'pdf', 118, 'paycrave', 4, '2019-11-09 10:02:37', '2020-10-14 07:00:50', '150.107.188.82'),
(108, 'works', 122, 'dena', 4, '2019-11-09 11:19:55', '2020-10-13 11:47:06', '150.107.188.82'),
(109, 'pdf', 122, 'dena', 4, '2019-11-09 11:19:55', '2020-10-13 11:47:06', '150.107.188.82'),
(113, 'pdf', 124, 'sdafas', 4, '2019-11-11 09:04:38', '2019-11-11 09:04:38', '::1'),
(112, 'works', 124, 'sdafas', 4, '2019-11-11 09:04:38', '2019-11-11 09:04:38', '::1'),
(111, 'pdf', 123, 'dfghfh', 4, '2019-11-11 09:02:54', '2019-11-11 09:02:54', '::1'),
(110, 'works', 123, 'dfghfh', 4, '2019-11-11 09:02:54', '2019-11-11 09:02:54', '::1'),
(114, 'works', 125, 'afdsd', 4, '2019-11-11 09:07:20', '2019-11-11 09:07:20', '::1'),
(115, 'pdf', 125, 'afdsd', 4, '2019-11-11 09:07:20', '2019-11-11 09:07:20', '::1'),
(116, 'works', 126, 'fdsgdg', 4, '2019-11-11 10:05:04', '2019-11-11 10:05:04', '::1'),
(117, 'pdf', 126, 'fdsgdg', 4, '2019-11-11 10:05:04', '2019-11-11 10:05:04', '::1'),
(118, 'works', 127, 'adsfsa', 4, '2019-11-11 10:05:54', '2019-11-11 10:05:54', '::1'),
(119, 'pdf', 127, 'adsfsa', 4, '2019-11-11 10:05:54', '2019-11-11 10:05:54', '::1'),
(120, 'works', 128, 'dsgfds', 4, '2019-11-11 14:07:23', '2019-11-11 14:07:23', '::1'),
(121, 'pdf', 128, 'dsgfds', 4, '2019-11-11 14:07:23', '2019-11-11 14:07:23', '::1'),
(122, 'works', 129, 'rajath-2', 4, '2019-11-11 14:13:01', '2019-11-11 14:13:01', '::1'),
(123, 'pdf', 129, 'rajath-2', 4, '2019-11-11 14:13:01', '2019-11-11 14:13:01', '::1'),
(124, 'works', 130, 'zerothreeseven', 4, '2019-11-12 07:38:27', '2020-10-13 11:47:26', '150.107.188.82'),
(125, 'pdf', 130, 'zerothreeseven', 4, '2019-11-12 07:38:27', '2020-10-13 11:47:26', '150.107.188.82'),
(126, 'works', 225, 'test', 4, '2019-11-18 14:41:04', '2019-11-18 14:41:04', '::1'),
(129, 'works', 134, 'dummy', 4, '2019-11-18 15:09:40', '2019-11-18 15:09:40', '::1'),
(130, 'works', 135, 'dummy1', 4, '2019-11-18 15:13:08', '2019-11-18 15:13:08', '::1'),
(131, 'works', 137, 'bhautik', 4, '2019-11-18 15:23:43', '2019-11-18 15:23:43', '::1'),
(132, 'works', 138, 'bhautik', 4, '2019-11-18 15:28:23', '2019-11-18 15:28:23', '::1'),
(133, 'works', 139, 'main', 4, '2019-11-18 15:52:34', '2019-11-18 15:52:34', '::1'),
(134, 'works', 140, 'bhautik33', 4, '2019-11-18 15:55:39', '2019-11-18 15:55:39', '::1'),
(136, 'pdf', 141, 'roundhouse', 4, '2019-11-18 16:09:10', '2019-11-18 16:09:10', '::1'),
(138, 'pdf', 143, 'roundhouse', 4, '2019-11-18 16:19:07', '2019-11-18 16:45:56', '::1'),
(139, 'works', 144, 'bhautik', 4, '2019-11-18 16:39:38', '2019-11-18 16:44:34', '::1'),
(140, 'pdf', 144, 'bhautik', 4, '2019-11-18 16:43:51', '2019-11-18 16:44:34', '::1'),
(141, 'works', 145, 'gfc', 4, '2019-11-18 16:45:16', '2019-11-18 16:45:16', '::1'),
(142, 'works', 146, 'roundhouse', 4, '2019-11-18 17:40:44', '2020-04-17 07:09:07', '27.4.152.58'),
(152, 'pdf', 153, 'dena', 4, '2019-11-25 06:46:24', '2019-11-25 06:46:24', '49.36.4.228'),
(151, 'works', 153, 'dena', 4, '2019-11-25 06:45:37', '2019-11-25 06:46:23', '49.36.4.228'),
(146, 'works', 150, 'testing', 4, '2019-11-21 06:53:21', '2019-11-21 09:13:49', '60.254.95.173'),
(147, 'works', 151, 'work', 4, '2019-11-21 06:57:39', '2019-11-21 06:57:39', '49.36.6.178'),
(149, 'pdf', 150, 'testing', 4, '2019-11-21 07:00:13', '2019-11-21 09:13:49', '60.254.95.173'),
(150, 'works', 152, 'jigna', 4, '2019-11-21 09:30:56', '2019-11-21 09:30:56', '49.36.6.178'),
(153, 'pdf', 146, 'roundhouse', 4, '2019-12-11 08:51:31', '2020-04-17 07:09:07', '27.4.152.58'),
(154, 'works', 154, 'test123', 4, '2019-12-11 08:56:27', '2019-12-11 08:56:27', '::1'),
(155, 'pdf', 154, 'test123', 4, '2019-12-11 08:56:27', '2019-12-11 08:56:27', '::1'),
(156, 'works', 156, 'work-2', 4, '2019-12-11 09:14:39', '2019-12-11 11:10:17', '::1'),
(157, 'pdf', 156, 'work-2', 4, '2019-12-11 09:21:00', '2019-12-11 11:10:17', '::1'),
(158, 'works', 157, 'ets999', 4, '2019-12-12 15:28:56', '2019-12-12 15:28:56', '::1'),
(159, 'pdf', 157, 'ets999', 4, '2019-12-12 15:28:56', '2019-12-12 15:28:56', '::1'),
(160, 'works', 158, 'ets110', 4, '2019-12-12 15:51:33', '2019-12-12 15:51:33', '::1'),
(161, 'works', 159, 'ets-88', 4, '2019-12-12 17:13:56', '2019-12-12 17:14:40', '::1'),
(162, 'pdf', 159, 'ets-88', 4, '2019-12-12 17:14:40', '2019-12-12 17:14:40', '::1'),
(163, 'works', 160, 'ets-work', 4, '2020-01-28 13:25:18', '2020-01-28 13:26:33', '60.254.95.173'),
(164, 'pdf', 160, 'ets-work', 4, '2020-01-28 13:25:18', '2020-01-28 13:26:33', '60.254.95.173'),
(165, 'works', 161, 'mohit-work', 4, '2020-01-28 13:36:01', '2020-01-28 13:37:31', '60.254.95.173'),
(166, 'pdf', 161, 'mohit-work', 4, '2020-01-28 13:37:31', '2020-01-28 13:37:31', '60.254.95.173'),
(167, 'works', 162, 'knowlondon', 4, '2020-02-27 08:24:44', '2020-09-29 15:39:03', '14.198.12.67'),
(168, 'pdf', 162, 'knowlondon', 4, '2020-02-28 08:10:44', '2020-09-29 15:39:03', '14.198.12.67'),
(169, 'works', 163, 'opulent-fine-jewels', 4, '2020-03-01 07:36:32', '2020-09-29 15:47:04', '14.198.12.67'),
(170, 'pdf', 163, 'opulent-fine-jewels', 4, '2020-03-01 07:38:06', '2020-09-29 15:47:04', '14.198.12.67'),
(171, 'works', 164, 'plan-b', 4, '2020-03-16 07:41:24', '2020-09-29 16:12:04', '14.198.12.67'),
(172, 'pdf', 164, 'plan-b', 4, '2020-03-16 07:43:55', '2020-09-29 16:12:04', '14.198.12.67'),
(173, 'works', 165, 'website-testing-branding', 4, '2020-03-19 06:46:59', '2020-03-19 06:46:59', '123.201.5.226'),
(174, 'works', 166, 'websitetesting-mobile', 4, '2020-03-19 06:53:05', '2020-03-19 06:53:30', '123.201.5.226'),
(175, 'pdf', 166, 'websitetesting-mobile', 4, '2020-03-19 06:53:30', '2020-03-19 06:53:30', '123.201.5.226'),
(176, 'works', 167, 'websitetesting-desktop', 4, '2020-03-19 06:55:31', '2020-03-19 06:56:40', '123.201.5.226'),
(177, 'pdf', 167, 'websitetesting-desktop', 4, '2020-03-19 06:55:43', '2020-03-19 06:56:40', '123.201.5.226'),
(178, 'works', 168, 'marquise-diamond', 4, '2020-03-19 10:55:39', '2020-09-29 15:54:17', '14.198.12.67'),
(179, 'pdf', 168, 'marquise-diamond', 4, '2020-03-19 10:58:51', '2020-09-29 15:54:17', '14.198.12.67'),
(180, 'works', 169, 'print-artwork', 4, '2020-03-19 16:25:48', '2020-09-29 15:39:22', '14.198.12.67'),
(181, 'pdf', 169, 'print-artwork', 4, '2020-03-19 19:01:06', '2020-09-29 15:39:22', '14.198.12.67'),
(182, 'works', 170, 'ets-home-testing', 4, '2020-03-23 06:24:10', '2020-03-23 06:24:10', '42.108.201.210'),
(183, 'works', 171, 'home-testing-ets', 4, '2020-03-24 05:20:51', '2020-03-24 07:48:52', '42.108.205.93'),
(184, 'pdf', 171, 'home-testing-ets', 4, '2020-03-24 07:48:52', '2020-03-24 07:48:52', '42.108.205.93'),
(185, 'works', 172, 'rajath-home-testing', 4, '2020-03-25 06:23:50', '2020-04-01 07:34:14', '27.4.152.58'),
(186, 'pdf', 172, 'rajath-home-testing', 4, '2020-03-25 06:26:19', '2020-04-01 07:34:14', '27.4.152.58'),
(187, 'works', 173, 'jf-digital', 4, '2020-04-14 12:22:48', '2020-10-13 07:16:59', '14.198.12.67'),
(188, 'pdf', 173, 'jf-digital', 4, '2020-04-16 07:32:43', '2020-10-13 07:16:59', '14.198.12.67'),
(189, 'works', 175, 'hatsh-testing', 4, '2020-04-21 13:52:06', '2020-04-22 06:13:29', '219.91.241.251'),
(190, 'pdf', 175, 'hatsh-testing', 4, '2020-04-21 13:52:23', '2020-04-22 06:13:29', '219.91.241.251'),
(191, 'works', 176, 'rajath-testing', 4, '2020-04-21 14:11:20', '2020-04-21 17:13:42', '219.91.245.208'),
(192, 'pdf', 176, 'rajath-testing', 4, '2020-04-21 17:13:42', '2020-04-21 17:13:42', '219.91.245.208'),
(193, 'works', 177, 'easternts-testing', 4, '2020-04-22 06:24:24', '2020-04-28 08:23:32', '219.91.225.139'),
(194, 'pdf', 177, 'easternts-testing', 4, '2020-04-22 06:27:15', '2020-04-28 08:23:32', '219.91.225.139'),
(195, 'works', 178, 'eastern-branding', 4, '2020-04-22 06:43:12', '2020-04-28 08:27:26', '219.91.225.139'),
(196, 'pdf', 178, 'eastern-branding', 4, '2020-04-22 06:46:22', '2020-04-28 08:27:26', '219.91.225.139'),
(197, 'works', 179, 'aspire-designs', 4, '2020-05-27 19:25:34', '2020-10-13 18:26:23', '14.198.12.67'),
(198, 'pdf', 179, 'aspire-designs', 4, '2020-05-27 19:25:34', '2020-10-13 18:26:23', '14.198.12.67'),
(199, 'works', 183, 'long-time-no-see-music-concert', 4, '2021-09-28 06:58:05', '2021-11-11 09:31:32', '103.251.19.59'),
(200, 'pdf', 183, 'long-time-no-see-music-concert', 4, '2021-09-28 06:58:05', '2021-11-11 09:31:32', '103.251.19.59'),
(218, 'works', 226, 'danielle-fry', 4, '2021-10-15 13:59:18', '2021-10-15 13:59:18', '1.22.53.50'),
(217, 'works', 225, 'test', 4, '2021-10-15 13:54:29', '2021-10-15 13:54:29', '1.22.53.50'),
(203, 'works', 214, 'marcia-mcgee', 4, '2021-09-28 06:58:05', '2021-10-07 11:10:15', '150.107.188.82'),
(204, 'works', 216, 'winter-jacobson', 4, '2021-10-07 08:19:02', '2021-10-07 08:19:02', '150.107.188.82'),
(205, 'works', 217, 'perry-dennis', 4, '2021-10-07 08:21:18', '2021-10-07 08:21:18', '150.107.188.82'),
(206, 'pdf', 214, 'marcia-mcgee', 4, '2021-10-07 08:34:37', '2021-10-07 11:10:15', '150.107.188.82'),
(207, 'works', 218, 'luke-reyes', 4, '2021-10-07 11:13:16', '2021-10-07 11:13:16', '150.107.188.82'),
(208, 'works', 219, 'lee-benjamin', 4, '2021-10-08 19:28:51', '2021-10-08 19:28:51', '103.251.19.220'),
(209, 'works', 220, 'rina-sandoval', 4, '2021-10-09 13:45:49', '2021-10-09 13:45:49', '150.107.188.82'),
(210, 'works', 221, 'ashely-nelson', 4, '2021-10-09 13:54:39', '2021-10-09 13:54:39', '150.107.188.82'),
(211, 'works', 222, 'sonya-david', 4, '2021-10-14 14:29:05', '2021-10-14 14:29:05', '150.107.188.82'),
(212, 'works', 223, 'asdy', 4, '2021-10-14 14:32:02', '2021-10-14 14:55:33', '150.107.188.82'),
(213, 'pdf', 223, 'asdy', 4, '2021-10-14 14:46:13', '2021-10-14 14:55:33', '150.107.188.82'),
(214, 'works', 224, 'clockenflap-music-talent-launch', 4, '2021-10-15 09:18:46', '2021-11-17 09:05:43', '202.82.226.146'),
(215, 'pdf', 224, 'clockenflap-music-talent-launch', 4, '2021-10-15 09:24:49', '2021-11-17 09:05:43', '202.82.226.146'),
(219, 'works', 227, 'kite-systems', 4, '2021-10-21 04:15:29', '2021-10-21 04:36:41', '202.82.226.146'),
(220, 'pdf', 227, 'kite-systems', 4, '2021-10-21 04:24:40', '2021-10-21 04:36:41', '202.82.226.146'),
(221, 'works', 228, 'straight', 4, '2021-10-21 08:06:31', '2021-10-27 05:46:53', '202.82.226.146'),
(222, 'pdf', 228, 'straight', 4, '2021-10-21 08:21:49', '2021-10-27 05:46:53', '202.82.226.146'),
(223, 'works', 229, 'meanwhile', 4, '2021-12-03 08:36:45', '2021-12-10 04:23:29', '202.82.226.146'),
(224, 'pdf', 229, 'meanwhile', 4, '2021-12-03 08:38:46', '2021-12-10 04:23:29', '202.82.226.146');

-- --------------------------------------------------------

--
-- Table structure for table `session_log_master`
--

CREATE TABLE `session_log_master` (
  `session_log_id` bigint NOT NULL,
  `user_id` bigint NOT NULL,
  `loginID` varchar(100) NOT NULL,
  `remote_ip` varchar(100) NOT NULL,
  `last_access` datetime NOT NULL,
  `status` char(1) NOT NULL COMMENT 'LogiIn(I) / Logout (O)'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session_log_master`
--

INSERT INTO `session_log_master` (`session_log_id`, `user_id`, `loginID`, `remote_ip`, `last_access`, `status`) VALUES
(53, 4, 'admin-kavisashah', '::1', '2019-11-12 09:19:42', 'I'),
(52, 4, 'admin-kavisashah', '::1', '2019-11-11 10:07:47', 'I'),
(51, 4, 'admin-kavisashah', '::1', '2019-11-11 08:45:38', 'I'),
(50, 4, 'admin-kavisashah', '::1', '2019-11-09 08:33:48', 'I'),
(49, 4, 'admin-kavisashah', '::1', '2019-11-08 12:01:38', 'I'),
(54, 4, 'admin-kavisashah', '60.254.95.173', '2019-11-12 11:10:25', 'I'),
(55, 4, 'admin-kavisashah', '::1', '2019-11-15 10:56:59', 'I'),
(56, 4, 'admin-kavisashah', '::1', '2019-11-18 08:26:53', 'I'),
(57, 4, 'admin-kavisashah', '::1', '2019-11-19 13:44:14', 'I'),
(58, 4, 'admin-kavisashah', '60.254.95.173', '2019-11-19 12:44:43', 'I'),
(59, 4, 'admin-kavisashah', '60.254.95.173', '2019-11-21 06:29:04', 'I'),
(60, 4, 'admin-kavisashah', '60.254.95.173', '2019-11-21 06:29:18', 'I'),
(61, 4, 'admin-kavisashah', '49.36.6.178', '2019-11-21 06:36:09', 'I'),
(62, 4, 'admin-kavisashah', '60.254.95.173', '2019-11-21 07:14:24', 'I'),
(63, 4, 'admin-kavisashah', '60.254.95.173', '2019-11-21 07:14:37', 'I'),
(64, 4, 'admin-kavisashah', '49.36.6.178', '2019-11-21 07:47:17', 'I'),
(65, 4, 'admin-kavisashah', '49.36.6.178', '2019-11-21 08:55:13', 'I'),
(66, 4, 'admin-kavisashah', '60.254.95.173', '2019-11-21 09:12:08', 'I'),
(67, 4, 'admin-kavisashah', '49.36.4.228', '2019-11-25 06:23:20', 'I'),
(68, 4, 'admin-kavisashah', '60.254.95.173', '2019-11-25 10:28:37', 'I'),
(69, 4, 'admin-kavisashah', '42.108.200.120', '2019-12-05 15:46:23', 'I'),
(70, 4, 'admin-kavisashah', '42.108.200.120', '2019-12-05 15:46:36', 'I'),
(71, 4, 'admin-kavisashah', '42.108.221.131', '2019-12-06 16:55:44', 'I'),
(72, 4, 'admin-kavisashah', '42.108.221.131', '2019-12-06 16:56:04', 'I'),
(73, 4, 'admin-kavisashah', '42.108.205.100', '2019-12-07 17:15:13', 'I'),
(74, 4, 'admin-kavisashah', '150.107.188.82', '2019-12-10 04:35:45', 'I'),
(75, 4, 'admin-kavisashah', '150.107.188.82', '2019-12-10 04:36:01', 'I'),
(76, 4, 'admin-kavisashah', '150.107.188.82', '2019-12-10 12:00:25', 'I'),
(77, 4, 'admin-kavisashah', '150.107.188.82', '2019-12-10 12:00:33', 'I'),
(78, 4, 'admin-kavisashah', '::1', '2019-12-11 08:32:25', 'I'),
(79, 4, 'admin-kavisashah', '::1', '2019-12-12 14:41:46', 'I'),
(80, 4, 'admin-kavisashah', '123.201.5.226', '2019-12-12 13:10:54', 'I'),
(81, 4, 'admin-kavisashah', '49.34.54.43', '2019-12-12 16:27:33', 'I'),
(82, 4, 'admin-kavisashah', '123.201.5.226', '2019-12-14 05:58:32', 'I'),
(83, 4, 'admin-kavisashah', '123.201.5.226', '2019-12-14 07:45:09', 'I'),
(84, 4, 'admin-kavisashah', '123.201.5.226', '2019-12-14 09:47:11', 'I'),
(85, 4, 'admin-kavisashah', '150.107.188.82', '2019-12-17 04:55:48', 'I'),
(86, 4, 'admin-kavisashah', '150.107.188.82', '2019-12-17 04:55:55', 'I'),
(87, 4, 'admin-kavisashah', '60.254.95.173', '2019-12-25 05:58:15', 'I'),
(88, 4, 'admin-kavisashah', '14.198.12.67', '2020-01-16 15:20:57', 'I'),
(89, 4, 'admin-kavisashah', '123.201.5.226', '2020-01-17 06:02:39', 'I'),
(90, 4, 'admin-kavisashah', '123.201.5.226', '2020-01-17 06:03:03', 'I'),
(91, 4, 'admin-kavisashah', '150.107.188.82', '2020-01-17 13:13:13', 'I'),
(92, 4, 'admin-kavisashah', '14.198.12.67', '2020-01-19 15:29:31', 'I'),
(93, 4, 'admin-kavisashah', '150.107.188.82', '2020-01-27 04:07:28', 'I'),
(94, 4, 'admin-kavisashah', '150.107.188.82', '2020-01-27 04:24:36', 'I'),
(95, 4, 'admin-kavisashah', '60.254.95.173', '2020-01-28 10:54:32', 'I'),
(96, 4, 'admin-kavisashah', '60.254.95.173', '2020-01-28 11:26:08', 'I'),
(97, 4, 'admin-kavisashah', '60.254.95.173', '2020-01-28 13:18:21', 'I'),
(98, 4, 'admin-kavisashah', '14.198.12.67', '2020-01-30 15:28:03', 'I'),
(99, 4, 'admin-kavisashah', '60.254.95.173', '2020-02-07 08:50:30', 'I'),
(100, 4, 'admin-kavisashah', '60.254.95.173', '2020-02-08 09:41:08', 'I'),
(101, 4, 'admin-kavisashah', '60.254.95.173', '2020-02-10 12:09:01', 'I'),
(102, 4, 'admin-kavisashah', '60.254.95.173', '2020-02-13 11:19:04', 'I'),
(103, 4, 'admin-kavisashah', '60.254.95.173', '2020-02-13 14:34:12', 'I'),
(104, 4, 'admin-kavisashah', '27.4.152.58', '2020-02-24 09:32:24', 'I'),
(105, 4, 'admin-kavisashah', '27.4.152.58', '2020-02-24 16:26:51', 'I'),
(106, 4, 'admin-kavisashah', '60.254.95.173', '2020-02-25 04:38:45', 'I'),
(107, 4, 'admin-kavisashah', '60.254.95.173', '2020-02-25 04:42:26', 'I'),
(108, 4, 'admin-kavisashah', '60.254.95.173', '2020-02-25 05:33:20', 'I'),
(109, 4, 'admin-kavisashah', '27.4.152.58', '2020-02-25 09:08:57', 'I'),
(110, 4, 'admin-kavisashah', '27.4.152.58', '2020-02-25 10:13:17', 'I'),
(111, 4, 'admin-kavisashah', '27.4.152.58', '2020-02-25 10:16:00', 'I'),
(112, 4, 'admin-kavisashah', '27.4.152.58', '2020-02-25 13:30:42', 'I'),
(113, 4, 'admin-kavisashah', '27.4.152.58', '2020-02-27 08:21:20', 'I'),
(114, 4, 'admin-kavisashah', '27.4.152.58', '2020-02-28 07:59:52', 'I'),
(115, 4, 'admin-kavisashah', '27.4.152.58', '2020-02-28 10:12:19', 'I'),
(116, 4, 'admin-kavisashah', '60.254.95.173', '2020-02-28 10:17:13', 'I'),
(117, 4, 'admin-kavisashah', '60.254.95.173', '2020-02-28 11:46:15', 'I'),
(118, 4, 'admin-kavisashah', '27.4.152.58', '2020-02-28 15:31:19', 'I'),
(119, 4, 'admin-kavisashah', '27.4.152.58', '2020-02-29 16:59:31', 'I'),
(120, 4, 'admin-kavisashah', '27.4.152.58', '2020-03-01 07:11:16', 'I'),
(121, 4, 'admin-kavisashah', '27.4.152.58', '2020-03-06 06:16:11', 'I'),
(122, 4, 'admin-kavisashah', '27.4.152.58', '2020-03-10 10:34:28', 'I'),
(123, 4, 'admin-kavisashah', '27.4.152.58', '2020-03-10 11:36:21', 'I'),
(124, 4, 'admin-kavisashah', '27.4.152.58', '2020-03-11 02:26:06', 'I'),
(125, 4, 'admin-kavisashah', '150.107.188.82', '2020-03-11 03:45:14', 'I'),
(126, 4, 'admin-kavisashah', '27.4.152.58', '2020-03-16 05:57:04', 'I'),
(127, 4, 'admin-kavisashah', '27.4.152.58', '2020-03-16 07:39:23', 'I'),
(128, 4, 'admin-kavisashah', '27.4.152.58', '2020-03-16 12:04:07', 'I'),
(129, 4, 'admin-kavisashah', '150.107.188.82', '2020-03-17 05:24:32', 'I'),
(130, 4, 'admin-kavisashah', '27.4.152.58', '2020-03-17 12:25:26', 'I'),
(131, 4, 'admin-kavisashah', '27.4.152.58', '2020-03-17 14:50:10', 'I'),
(132, 4, 'admin-kavisashah', '27.4.152.58', '2020-03-18 05:02:45', 'I'),
(133, 4, 'admin-kavisashah', '123.201.5.226', '2020-03-18 06:13:07', 'I'),
(134, 4, 'admin-kavisashah', '123.201.5.226', '2020-03-18 06:13:21', 'I'),
(135, 4, 'admin-kavisashah', '27.4.152.58', '2020-03-18 07:47:13', 'I'),
(136, 4, 'admin-kavisashah', '27.4.152.58', '2020-03-18 11:40:13', 'I'),
(137, 4, 'admin-kavisashah', '27.4.152.58', '2020-03-18 15:56:05', 'I'),
(138, 4, 'admin-kavisashah', '49.34.92.26', '2020-03-18 16:03:50', 'I'),
(139, 4, 'admin-kavisashah', '27.4.152.58', '2020-03-18 16:46:57', 'I'),
(140, 4, 'admin-kavisashah', '27.4.152.58', '2020-03-18 16:49:07', 'I'),
(141, 4, 'admin-kavisashah', '123.201.5.226', '2020-03-19 05:50:52', 'I'),
(142, 4, 'admin-kavisashah', '123.201.5.226', '2020-03-19 05:51:01', 'I'),
(143, 4, 'admin-kavisashah', '123.201.5.226', '2020-03-19 06:26:16', 'I'),
(144, 4, 'admin-kavisashah', '123.201.5.226', '2020-03-19 06:26:28', 'I'),
(145, 4, 'admin-kavisashah', '150.107.188.82', '2020-03-19 06:31:43', 'I'),
(146, 4, 'admin-kavisashah', '150.107.188.82', '2020-03-19 06:32:35', 'O'),
(147, 4, 'admin-kavisashah', '150.107.188.82', '2020-03-19 06:33:24', 'I'),
(148, 4, 'admin-kavisashah', '27.4.152.58', '2020-03-19 07:21:27', 'I'),
(149, 4, 'admin-kavisashah', '27.4.152.58', '2020-03-19 10:52:32', 'I'),
(150, 4, 'admin-kavisashah', '27.4.152.58', '2020-03-19 11:44:46', 'I'),
(151, 4, 'admin-kavisashah', '27.4.152.58', '2020-03-19 14:01:19', 'I'),
(152, 4, 'admin-kavisashah', '27.4.152.58', '2020-03-19 16:10:16', 'I'),
(153, 4, 'admin-kavisashah', '27.4.152.58', '2020-03-19 18:57:45', 'I'),
(154, 4, 'admin-kavisashah', '27.4.152.58', '2020-03-20 04:34:42', 'I'),
(155, 4, 'admin-kavisashah', '27.4.152.58', '2020-03-20 13:17:09', 'I'),
(156, 4, 'admin-kavisashah', '42.108.201.210', '2020-03-23 06:22:21', 'I'),
(157, 4, 'admin-kavisashah', '157.32.107.189', '2020-03-23 10:15:50', 'I'),
(158, 4, 'admin-kavisashah', '42.108.200.93', '2020-03-24 05:10:18', 'I'),
(159, 4, 'admin-kavisashah', '42.108.205.93', '2020-03-24 07:40:12', 'I'),
(160, 4, 'admin-kavisashah', '157.32.13.87', '2020-03-25 06:17:42', 'I'),
(161, 4, 'admin-kavisashah', '27.4.152.58', '2020-03-25 08:56:27', 'I'),
(162, 7, 'admin-new', '42.108.200.242', '2020-03-25 09:34:27', 'I'),
(163, 4, 'admin-kavisashah', '42.108.205.150', '2020-03-25 09:34:49', 'I'),
(164, 4, 'admin-kavisashah', '42.108.220.30', '2020-03-25 09:35:41', 'I'),
(165, 4, 'admin-kavisashah', '42.108.205.150', '2020-03-25 09:56:42', 'I'),
(166, 4, 'admin-kavisashah', '150.107.232.51', '2020-03-25 10:03:04', 'I'),
(167, 4, 'admin-kavisashah', '150.107.232.51', '2020-03-25 10:03:18', 'I'),
(168, 4, 'admin-kavisashah', '27.4.152.58', '2020-03-25 10:23:33', 'I'),
(169, 4, 'admin-kavisashah', '42.108.200.242', '2020-03-25 10:55:22', 'I'),
(170, 4, 'admin-kavisashah', '150.107.232.51', '2020-03-25 12:05:50', 'I'),
(171, 4, 'admin-kavisashah', '150.107.232.51', '2020-03-25 12:07:45', 'I'),
(172, 4, 'admin-kavisashah', '150.107.232.51', '2020-03-26 05:27:55', 'I'),
(173, 4, 'admin-kavisashah', '123.201.225.34', '2020-03-31 13:25:29', 'I'),
(174, 4, 'admin-kavisashah', '103.240.76.185', '2020-03-31 15:01:34', 'I'),
(175, 4, 'admin-kavisashah', '103.240.76.185', '2020-03-31 17:13:30', 'I'),
(176, 4, 'admin-kavisashah', '103.240.76.185', '2020-03-31 17:13:52', 'I'),
(177, 4, 'admin-kavisashah', '27.4.152.58', '2020-04-01 07:12:07', 'I'),
(178, 4, 'admin-kavisashah', '27.4.152.58', '2020-04-01 08:34:17', 'I'),
(179, 4, 'admin-kavisashah', '27.4.152.58', '2020-04-01 11:25:42', 'I'),
(180, 4, 'admin-kavisashah', '27.4.152.58', '2020-04-10 19:44:23', 'I'),
(181, 4, 'admin-kavisashah', '27.4.152.58', '2020-04-11 18:41:47', 'I'),
(182, 4, 'admin-kavisashah', '27.4.152.58', '2020-04-12 10:30:36', 'I'),
(183, 4, 'admin-kavisashah', '27.4.152.58', '2020-04-14 11:45:09', 'I'),
(184, 4, 'admin-kavisashah', '27.4.152.58', '2020-04-16 07:31:30', 'I'),
(185, 4, 'admin-kavisashah', '27.4.152.58', '2020-04-16 08:10:09', 'I'),
(186, 4, 'admin-kavisashah', '27.4.152.58', '2020-04-16 11:24:07', 'I'),
(187, 4, 'admin-kavisashah', '27.4.152.58', '2020-04-16 12:09:55', 'I'),
(188, 4, 'admin-kavisashah', '27.4.152.58', '2020-04-17 06:37:56', 'I'),
(189, 4, 'admin-kavisashah', '27.4.152.58', '2020-04-18 07:19:59', 'I'),
(190, 4, 'admin-kavisashah', '219.91.225.4', '2020-04-18 14:11:51', 'I'),
(191, 4, 'admin-kavisashah', '27.4.152.58', '2020-04-19 08:26:51', 'I'),
(192, 4, 'admin-kavisashah', '219.91.241.248', '2020-04-20 06:21:56', 'I'),
(193, 4, 'admin-kavisashah', '219.91.241.248', '2020-04-20 07:37:39', 'I'),
(194, 4, 'admin-kavisashah', '219.91.245.227', '2020-04-21 12:57:11', 'I'),
(195, 4, 'admin-kavisashah', '219.91.245.227', '2020-04-21 13:06:21', 'I'),
(196, 4, 'admin-kavisashah', '219.91.245.227', '2020-04-21 13:41:19', 'I'),
(197, 4, 'admin-kavisashah', '219.91.245.208', '2020-04-21 17:13:01', 'I'),
(198, 4, 'admin-kavisashah', '219.91.241.251', '2020-04-22 06:05:02', 'I'),
(199, 4, 'admin-kavisashah', '27.4.152.58', '2020-04-23 07:43:25', 'I'),
(200, 4, 'admin-kavisashah', '103.240.79.50', '2020-04-23 07:58:26', 'I'),
(201, 4, 'admin-kavisashah', '219.91.225.24', '2020-04-23 08:27:06', 'I'),
(202, 4, 'admin-kavisashah', '219.91.245.213', '2020-04-23 10:27:34', 'I'),
(203, 4, 'admin-kavisashah', '27.4.152.58', '2020-04-23 12:08:10', 'I'),
(204, 4, 'admin-kavisashah', '219.91.245.241', '2020-04-24 07:02:39', 'I'),
(205, 4, 'admin-kavisashah', '103.251.59.96', '2020-04-24 15:41:59', 'I'),
(206, 4, 'admin-kavisashah', '103.251.59.96', '2020-04-24 15:42:10', 'I'),
(207, 4, 'admin-kavisashah', '219.91.225.245', '2020-04-24 15:42:12', 'I'),
(208, 4, 'admin-kavisashah', '219.91.245.64', '2020-04-27 06:41:25', 'I'),
(209, 4, 'admin-kavisashah', '219.91.225.139', '2020-04-28 07:50:10', 'I'),
(210, 4, 'admin-kavisashah', '103.240.79.91', '2020-04-28 10:18:44', 'I'),
(211, 4, 'admin-kavisashah', '103.240.79.91', '2020-04-28 10:18:50', 'I'),
(212, 4, 'admin-kavisashah', '219.91.245.41', '2020-04-28 10:19:27', 'I'),
(213, 4, 'admin-kavisashah', '27.4.152.58', '2020-04-28 10:44:11', 'I'),
(214, 4, 'admin-kavisashah', '27.4.152.58', '2020-04-30 08:12:31', 'I'),
(215, 4, 'admin-kavisashah', '27.4.152.58', '2020-05-04 11:32:53', 'I'),
(216, 4, 'admin-kavisashah', '27.4.152.58', '2020-05-14 13:32:40', 'I'),
(217, 4, 'admin-kavisashah', '27.4.157.31', '2020-05-26 08:23:03', 'I'),
(218, 4, 'admin-kavisashah', '27.4.157.31', '2020-05-27 13:19:55', 'I'),
(219, 4, 'admin-kavisashah', '27.4.157.31', '2020-05-27 19:22:31', 'I'),
(220, 4, 'admin-kavisashah', '27.4.157.31', '2020-05-29 12:09:59', 'I'),
(221, 4, 'admin-kavisashah', '27.4.157.31', '2020-05-30 07:57:36', 'I'),
(222, 4, 'admin-kavisashah', '14.198.12.67', '2020-08-21 16:28:31', 'I'),
(223, 4, 'admin-kavisashah', '14.198.12.67', '2020-09-29 15:31:51', 'I'),
(224, 4, 'admin-kavisashah', '150.107.188.82', '2020-09-30 06:00:34', 'I'),
(225, 4, 'admin-kavisashah', '14.198.12.67', '2020-10-11 16:09:44', 'I'),
(226, 4, 'admin-kavisashah', '14.198.12.67', '2020-10-12 12:22:28', 'I'),
(227, 4, 'admin-kavisashah', '14.198.12.67', '2020-10-12 16:08:55', 'I'),
(228, 4, 'admin-kavisashah', '14.198.12.67', '2020-10-12 18:15:45', 'I'),
(229, 4, 'admin-kavisashah', '14.198.12.67', '2020-10-13 07:05:13', 'I'),
(230, 4, 'admin-kavisashah', '150.107.188.82', '2020-10-13 07:23:22', 'I'),
(231, 4, 'admin-kavisashah', '150.107.188.82', '2020-10-13 11:46:01', 'I'),
(232, 4, 'admin-kavisashah', '116.72.42.22', '2020-10-13 13:34:57', 'I'),
(233, 4, 'admin-kavisashah', '14.198.12.67', '2020-10-13 18:09:03', 'I'),
(234, 4, 'admin-kavisashah', '150.107.188.82', '2020-10-14 06:46:00', 'I'),
(235, 4, 'admin-kavisashah', '150.107.188.82', '2020-10-22 06:45:05', 'I'),
(236, 4, 'admin-kavisashah', '150.107.188.82', '2021-07-22 12:00:59', 'I'),
(237, 4, 'admin-kavisashah', '14.198.12.67', '2021-09-13 16:34:57', 'I'),
(238, 4, 'admin-kavisashah', '14.198.12.67', '2021-09-16 13:09:36', 'I'),
(239, 4, 'admin-kavisashah', '14.198.12.67', '2021-09-27 16:17:21', 'I'),
(240, 4, 'admin-kavisashah', '14.198.12.67', '2021-09-28 06:53:19', 'I'),
(241, 4, 'admin-kavisashah', '14.198.12.67', '2021-09-28 08:51:20', 'I'),
(242, 4, 'admin-kavisashah', '14.198.12.67', '2021-09-28 12:38:19', 'I'),
(243, 4, 'admin-kavisashah', '14.198.12.67', '2021-09-29 16:00:36', 'I'),
(244, 4, 'admin-kavisashah', '14.198.12.67', '2021-09-30 11:36:34', 'I'),
(245, 4, 'admin-kavisashah', '103.251.59.220', '2021-09-30 18:41:22', 'I'),
(246, 4, 'admin-kavisashah', '150.107.188.82', '2021-10-01 05:45:57', 'I'),
(247, 4, 'admin-kavisashah', '150.107.188.82', '2021-10-01 11:55:42', 'I'),
(248, 4, 'admin-kavisashah', '150.107.188.82', '2021-10-04 05:34:01', 'I'),
(249, 4, 'admin-kavisashah', '150.107.188.82', '2021-10-04 10:43:00', 'I'),
(250, 4, 'admin-kavisashah', '150.107.188.82', '2021-10-04 12:19:21', 'I'),
(251, 4, 'admin-kavisashah', '150.107.188.82', '2021-10-05 07:28:44', 'I'),
(252, 4, 'admin-kavisashah', '150.107.188.82', '2021-10-05 10:22:17', 'I'),
(253, 4, 'admin-kavisashah', '150.107.188.82', '2021-10-05 11:12:02', 'I'),
(254, 4, 'admin-kavisashah', '150.107.188.82', '2021-10-05 13:31:03', 'I'),
(255, 4, 'admin-kavisashah', '103.251.59.138', '2021-10-05 18:10:48', 'I'),
(256, 4, 'admin-kavisashah', '150.107.188.82', '2021-10-06 05:30:35', 'I'),
(257, 4, 'admin-kavisashah', '150.107.188.82', '2021-10-07 06:21:36', 'I'),
(258, 4, 'admin-kavisashah', '150.107.188.82', '2021-10-07 07:47:25', 'I'),
(259, 4, 'admin-kavisashah', '150.107.188.82', '2021-10-07 10:25:45', 'I'),
(260, 4, 'admin-kavisashah', '14.198.12.67', '2021-10-08 06:30:30', 'I'),
(261, 4, 'admin-kavisashah', '103.251.19.220', '2021-10-08 19:26:03', 'I'),
(262, 4, 'admin-kavisashah', '150.107.188.82', '2021-10-09 13:42:36', 'I'),
(263, 4, 'admin-kavisashah', '150.107.188.82', '2021-10-14 14:27:29', 'I'),
(264, 4, 'admin-kavisashah', '14.198.12.67', '2021-10-15 08:48:53', 'I'),
(265, 4, 'admin-kavisashah', '1.22.53.50', '2021-10-15 13:48:10', 'I'),
(266, 4, 'admin-kavisashah', '150.107.188.82', '2021-10-20 14:26:33', 'I'),
(267, 4, 'admin-kavisashah', '202.82.226.146', '2021-10-21 03:01:28', 'I'),
(268, 4, 'admin-kavisashah', '202.82.226.146', '2021-10-21 07:59:24', 'I'),
(269, 4, 'admin-kavisashah', '202.82.226.146', '2021-10-21 08:26:45', 'O'),
(270, 4, 'admin-kavisashah', '150.107.188.82', '2021-10-26 08:30:18', 'I'),
(271, 4, 'admin-kavisashah', '202.82.226.146', '2021-10-27 03:54:40', 'I'),
(272, 4, 'admin-kavisashah', '150.107.188.82', '2021-10-27 05:36:41', 'I'),
(273, 4, 'admin-kavisashah', '202.82.226.146', '2021-10-27 05:40:09', 'I'),
(274, 4, 'admin-kavisashah', '103.251.19.59', '2021-11-11 05:20:17', 'I'),
(275, 4, 'admin-kavisashah', '202.82.226.146', '2021-11-17 08:59:30', 'I'),
(276, 4, 'admin-kavisashah', '202.82.226.146', '2021-12-03 04:59:17', 'I'),
(277, 4, 'admin-kavisashah', '202.82.226.146', '2021-12-03 08:03:58', 'I'),
(278, 4, 'admin-kavisashah', '202.82.226.146', '2021-12-10 02:50:47', 'I'),
(279, 4, 'admin-kavisashah', '116.72.18.49', '2021-12-23 12:59:25', 'I');

-- --------------------------------------------------------

--
-- Table structure for table `sliderimage`
--

CREATE TABLE `sliderimage` (
  `sliderID` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `mobile_image` text NOT NULL,
  `sliderTitle` varchar(255) NOT NULL,
  `sliderDesc` varchar(100) NOT NULL,
  `sliderBtn` varchar(30) NOT NULL,
  `btnlink` varchar(150) NOT NULL,
  `username` varchar(30) NOT NULL,
  `createdate` date NOT NULL,
  `modifieddate` date NOT NULL,
  `sortorder` int NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'E',
  `sliderPosition` char(1) NOT NULL DEFAULT 'H',
  `remote_ip` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_master`
--

CREATE TABLE `subscription_master` (
  `s_id` int NOT NULL,
  `s_name` varchar(100) DEFAULT NULL,
  `s_email` varchar(200) DEFAULT NULL,
  `s_mobile` varchar(20) DEFAULT NULL,
  `s_date` date NOT NULL,
  `new` int NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscription_master`
--

INSERT INTO `subscription_master` (`s_id`, `s_name`, `s_email`, `s_mobile`, `s_date`, `new`) VALUES
(1, 'Bhavini', 'anupriya.easternts@gmail.com', NULL, '0000-00-00', 1),
(2, 'Bhavini', 'bhavini.easternts@gmail.com', NULL, '0000-00-00', 1),
(3, 'cvxfvfds', 'fdsfsd@gmail.com', NULL, '0000-00-00', 1),
(4, 'Jignendra', 'jignendra1212@gmail.com', NULL, '0000-00-00', 1),
(5, 'Naresh Bhuva', 'bhuvanaresh@yahoo.com', NULL, '0000-00-00', 1),
(6, 'Virag sharma', 'Sharmavirag7@gmail.com', NULL, '0000-00-00', 1),
(7, 'rohit joshi', 'rohitjoshi2912@gmail.com', NULL, '0000-00-00', 1),
(8, ' Sanjay.Pandya ', 'babu.pandya07041967@gmail.com', NULL, '0000-00-00', 1),
(9, 'Bipin Babariya', 'bipin.babariya@gmail.com', NULL, '0000-00-00', 1),
(10, 'Jayesh babulal soni', 'jayesh_soni577@yahoo.in', NULL, '0000-00-00', 1),
(11, 'Jayesh babulal soni', 'jayesh_soni577@yahoo.in', NULL, '0000-00-00', 1),
(12, 'Rajendra Shah', 'rajendra.shah.sg@hotmail.com', NULL, '0000-00-00', 1),
(13, 'Sandeep Shah', 'sandeepshah06081974@gmail.com', NULL, '0000-00-00', 1),
(14, 'Kuldip Panjabi', 'kuldip.panjabi@gmail.com', NULL, '0000-00-00', 1),
(15, 'Rashmikant Choksey', 'choksey@vsnl.com', NULL, '0000-00-00', 1),
(16, 'mukesh patil', 'mukesh.sa.patil@gmail.com', NULL, '0000-00-00', 1),
(17, 'Amit s', 'amitsarvaiyar@gmail.com', NULL, '0000-00-00', 1),
(18, 'Jagadeesh', 'jaggubhai114@gmail', NULL, '0000-00-00', 1),
(19, 'Parimal Rameshbhai ramoliya', 'parimal.ramoliya25@gmail.com', NULL, '0000-00-00', 1),
(20, 'Kuldip Panjabi', 'kuldip.panjabi@gmail.com', NULL, '0000-00-00', 1),
(21, 'Dhananjay Krishna Raut', 'dhananjairaut@gmail.com', NULL, '0000-00-00', 1),
(22, 'Bhavini', 'bhavini.easternts@gmail.com', NULL, '0000-00-00', 1),
(23, 'Rameshchandra R Patel ', 'pramesh45@hotmail.com', NULL, '0000-00-00', 1),
(24, 'Bhavin Prajapati', 'PRAJAPATIBHAVIN15@gmail.com', NULL, '0000-00-00', 1),
(25, 'Mehta Nayan hiteshbhai', 'mehta.nayan06@gmail.com', NULL, '0000-00-00', 1),
(26, 'Mehta Nayan hiteshbhai', 'mehta.nayan06@gmail.com', NULL, '0000-00-00', 1),
(27, 'Bhaskar Ramesh Patil', 'bpatil103bp5@gmail.com', NULL, '0000-00-00', 1),
(28, 'BRIJESH  KAMBODI', 'kambodibrijesh@gmail.com', NULL, '0000-00-00', 1),
(29, 'Urja jiger shah', 'urjashah2931@gmail.com', NULL, '0000-00-00', 1),
(30, 'Dr kusum chandnani', 'kusumchandnani@gmail.com', NULL, '0000-00-00', 1),
(31, 'Kunja bihari mohanta', 'kunjaice@gmail.com', NULL, '0000-00-00', 1),
(32, 'Dr Ronak Kadia', 'doctorronakkadia@gmail.com', NULL, '0000-00-00', 1),
(33, 'Sachin ', 'sachinbillimaga@gmail.com', NULL, '0000-00-00', 1),
(34, 'Sachin ', 'sachineshetty@gmail.com', NULL, '0000-00-00', 1),
(35, 'Dr. Madhusudan Makwana', 'drmdmakwana@gmail.com', NULL, '0000-00-00', 1),
(36, 'Ramesh Thumar ', 'krinalthumar@gmail.com', NULL, '0000-00-00', 1),
(37, 'Ramesh Thumar ', 'krinalthumar@gmail.com', NULL, '0000-00-00', 1),
(38, 'GAUTHAMI PULIPATI', 'gathami44@gmail.com', NULL, '0000-00-00', 1),
(39, 'Ramesh Thumar ', 'krinalthumar@gmail.com', NULL, '0000-00-00', 1),
(40, 'Ramesh Thumar ', 'krinalthumar@gmail.com', NULL, '0000-00-00', 1),
(41, 'Thumar Rameshbhai d. ', 'krinalthumar@gmail.com', NULL, '0000-00-00', 1),
(42, 'Vipul l goti', 'vlgoti888@gmail.com', NULL, '0000-00-00', 1),
(43, 'Ramesh Thumar ', 'krinalthumar@gmail.com', NULL, '0000-00-00', 1),
(44, 'Bhavna Raja', 'bhavnaraja@gmail.com', NULL, '0000-00-00', 1),
(45, 'CHIRAG JANAKBHAI BRAHMBHATT', 'chiraag7bb@gmail.com', NULL, '0000-00-00', 1),
(46, 'Vilas devidas yashwante ', 'vilasyash123@gmail.com', NULL, '0000-00-00', 1),
(47, 'Umesh ramesh birhade', 'umeshllll.birhade@gmail.com', NULL, '0000-00-00', 1),
(48, 'Trupti Suresh Bhosale', 'truptibhosale145@gmail.com', NULL, '0000-00-00', 1),
(49, 'Sandeep Barot ', 'Sandeepbarot1979@gmail.com', NULL, '0000-00-00', 1),
(50, 'Ammireddy', 'ammireddy732@gmail.com', NULL, '0000-00-00', 1),
(51, 'Chirag Dineshbhai Padariya ', 'chiragpadariya1407@gmail.com', NULL, '0000-00-00', 1),
(52, 'Ullash pradhan', 'ullash55dkl@gmail.com', NULL, '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `template_master`
--

CREATE TABLE `template_master` (
  `template_id` int NOT NULL,
  `template_name` varchar(100) NOT NULL,
  `template_title` varchar(100) NOT NULL,
  `sortorder` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `template_master`
--

INSERT INTO `template_master` (`template_id`, `template_name`, `template_title`, `sortorder`) VALUES
(1, 'inner_page.tpl.php', 'Inner Page Template', 1),
(3, 'full_width_page.tpl.php', 'full_width_page', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `userID` int NOT NULL,
  `group_id` int NOT NULL DEFAULT '0',
  `loginID` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `address` text NOT NULL,
  `contacts` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`userID`, `group_id`, `loginID`, `email`, `password`, `firstname`, `lastname`, `address`, `contacts`) VALUES
(4, 1, 'admin-kavisashah', 'contact@easternts.com (x06gamqdfi3)', '08422f4fe706649fb2e805084f08ac03d4f9418a793671af8b1b713fd7baa8e2', 'Keyur', 'Mehta', '', ''),
(7, 1, 'admin-new', 'contact@easternts.com (x06gamqdfi3)', '9644a0aeb1ca493cb2ca51e01367fdbcc5de287cb1302edb0845f33ec588257b', 'Keyur', 'Mehta', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `website_master`
--

CREATE TABLE `website_master` (
  `id` int NOT NULL,
  `email1` varchar(255) NOT NULL,
  `email2` varchar(255) NOT NULL,
  `tel1` varchar(25) NOT NULL,
  `tel2` varchar(25) NOT NULL,
  `address` text NOT NULL,
  `address2` text NOT NULL,
  `fax` varchar(25) NOT NULL,
  `map_code` text NOT NULL,
  `logo` text NOT NULL,
  `social` text NOT NULL,
  `copyright` varchar(70) NOT NULL,
  `rera` text NOT NULL,
  `modal_rera` varchar(2) NOT NULL,
  `powered_by` text NOT NULL,
  `coming_soon` varchar(1) NOT NULL DEFAULT 'N',
  `username` varchar(70) NOT NULL,
  `remote_ip` varchar(70) NOT NULL,
  `create_date` date NOT NULL,
  `modified_date` date NOT NULL,
  `homeimage` varchar(256) NOT NULL,
  `check1` varchar(1) NOT NULL,
  `caption` varchar(256) NOT NULL,
  `address3` text,
  `address4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `website_master`
--

INSERT INTO `website_master` (`id`, `email1`, `email2`, `tel1`, `tel2`, `address`, `address2`, `fax`, `map_code`, `logo`, `social`, `copyright`, `rera`, `modal_rera`, `powered_by`, `coming_soon`, `username`, `remote_ip`, `create_date`, `modified_date`, `homeimage`, `check1`, `caption`, `address3`, `address4`) VALUES
(1, 'kavisa@zerothreeseven.com', '', '', '', '<p>Sketch, Illustrator, Photoshop, Indesign, Principle, HTML5, Basic Javascript, CSS, Git, Invision, Balsamiq</p>', '<p><strong>UI UX Designer</strong><br />Freelancer<br />Oct&nbsp;2017 - Present&nbsp;<br />Hong Kong</p>\r\n<p><strong>UI UX Manager</strong><br /> Cloudaxis<br />Apr 2017 - Oct 2017 <em class=\"fa fa-circle\" style=\"color: #373737 !important; font-size: 6px; top: -3px; position: relative;\">.</em> 7 mos<br />Hong Kong<br /><br /> <strong>Senior Graphic Designer</strong><br /> Simply Grand Productions<br />Feb 2014 - Apr 2017 <em class=\"fa fa-circle\" style=\"color: #373737 !important; font-size: 6px; top: -3px; position: relative;\">.</em> 3 yrs 3 mos<br />Hong Kong<br /><br /> <strong>Proprietor</strong><br /> Zerothreeseven<br />Jul 2009 - Feb 2014 <em class=\"fa fa-circle\" style=\"color: #373737 !important; font-size: 6px; top: -3px; position: relative;\">.</em> 4 yrs 8 mos<br />Hong Kong and Mumbai<br /><br /> <strong>Junior Graphic Designer</strong><br /> Ideaspice<br />Jul 2008 - June 2009<br />Mumbai</p>', '', '', '', 'a:6:{s:8:\"facebook\";s:0:\"\";s:7:\"twitter\";s:0:\"\";s:6:\"google\";s:0:\"\";s:9:\"instagram\";s:34:\"https://www.instagram.com/kavisa7/\";s:8:\"linkedin\";s:40:\"https://www.linkedin.com/in/kavisa-shah/\";s:8:\"dribbble\";s:27:\"https://dribbble.com/kavisa\";}', '', '<p class=\"text-justify\">Dear Viewers,Please note that we are in process to update this website. With the introduction of RERA &ndash; Act 2016, we are implementing the changes and hence certain details mentioned will undergo change. The new changes will be updated shortly. While accessing this website, it is established that the viewer understands that all the information including brochures and marketing collaterals within the website are for information purposes only. The developer is not liable for any consequence of any action taken by viewer solely relying on such information.</p>', 'E', 'a:2:{s:5:\"title\";s:24:\"Eastern Techno Solutions\";s:4:\"link\";s:25:\"http://www.easternts.com/\";}', '', 'Keyur', '27.4.152.58', '2015-10-26', '2020-04-30', 'Rasa_Engineering_eBrochure.pdf', '', '', '<h4 class=\"contact-heading\">UI/UX DESIGN BOOTCAMP</h4>\r\n<p>May 2016 - August 2016 <br />Designed three mobile/web products: Developed branding, gathered and analyzed user research, created wireframes, conducted user testing, and built interactive prototypes with relevant design elements.</p>\r\n<p>&nbsp;</p>\r\n<h4 class=\"contact-heading\">FDA Design for Graphic Communication at London College of Communication (LCC), London UK</h4>\r\n<p>September 2006 - August 2008</p>\r\n<p>&nbsp;</p>\r\n<h4 class=\"contact-heading\">Diploma in Foundation Studies in Art &amp; Design at London College of Communication (LCC), London UK</h4>\r\n<p>June 2005 - August 2006</p>\r\n<p>&nbsp;</p>\r\n<h4 class=\"contact-heading\">Foundation Degree in Commercial &amp; Advertising Art at Sophia Polytechnic, Mumbai India</h4>\r\n<p>July 2004 - May 2005</p>', '<p><strong>Level 3 Award in 3D Visual Thinking at LCC, London UK<br /> ABC Level 3 Award in Sound Editing at LCC, London UK<br /> Award in 2D Design at Sophia Polytechnic, Mumbai, India</strong><br /><br /></p>\r\n<p><br /><br /><br /></p>');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `workID` int NOT NULL,
  `is_work` int NOT NULL DEFAULT '1',
  `work_title` varchar(255) NOT NULL,
  `title` text,
  `prototype` varchar(255) NOT NULL,
  `home_image` text,
  `detail_image` text,
  `short_desc` text,
  `detail_desc` text,
  `createdate` date NOT NULL,
  `modifieddate` date NOT NULL DEFAULT '1970-01-01',
  `username` varchar(20) NOT NULL,
  `sortorder` int NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'E',
  `remote_ip` varchar(20) NOT NULL,
  `Sector` varchar(255) NOT NULL,
  `Project_detail_image` text,
  `Image_1` text,
  `Image_2` text,
  `Image_3` text,
  `Image_4` text,
  `Image_5` text,
  `Image_6` text,
  `Image_7` text,
  `Image_8` text,
  `Image_9` text,
  `Home_Page` varchar(255) NOT NULL,
  `Home_Page_Sortorder` int DEFAULT NULL,
  `Project_Listing_Page_Sortorder` int DEFAULT NULL,
  `project_listing_image` varchar(255) NOT NULL DEFAULT '',
  `project_listing_hover_image` varchar(255) NOT NULL DEFAULT '',
  `Banner_image` varchar(255) NOT NULL DEFAULT '',
  `application_name` varchar(255) NOT NULL,
  `user_sur` text NOT NULL,
  `user_pdf` varchar(255) DEFAULT NULL,
  `competitive_analysis` text NOT NULL,
  `branding` text NOT NULL,
  `user_flows` text NOT NULL,
  `competitive_pdf` varchar(255) DEFAULT NULL,
  `user_flow_pdf` varchar(255) DEFAULT NULL,
  `work_main_title` varchar(255) NOT NULL,
  `specification` text NOT NULL,
  `pagetype` char(1) NOT NULL,
  `user_flows_des` text NOT NULL,
  `project_color` varchar(255) DEFAULT NULL,
  `branding_title` varchar(255) NOT NULL,
  `branding_brand` varchar(255) NOT NULL,
  `branding_desc` text NOT NULL,
  `branding_bold` text NOT NULL,
  `Image_10` text,
  `Image_11` text,
  `Image_12` text,
  `Image_14` text,
  `Image_15` text,
  `Image_16` text,
  `Image_13` text,
  `project_listing_video` varchar(255) DEFAULT NULL,
  `Image_17` text,
  `Image_18` text,
  `Image_19` text,
  `Image_20` text,
  `Image_21` text,
  `Image_22` text,
  `Image_23` text,
  `Image_24` text,
  `Image_25` text,
  `video_1` text,
  `video_2` text,
  `video_3` text,
  `project_listing_image1` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`workID`, `is_work`, `work_title`, `title`, `prototype`, `home_image`, `detail_image`, `short_desc`, `detail_desc`, `createdate`, `modifieddate`, `username`, `sortorder`, `status`, `remote_ip`, `Sector`, `Project_detail_image`, `Image_1`, `Image_2`, `Image_3`, `Image_4`, `Image_5`, `Image_6`, `Image_7`, `Image_8`, `Image_9`, `Home_Page`, `Home_Page_Sortorder`, `Project_Listing_Page_Sortorder`, `project_listing_image`, `project_listing_hover_image`, `Banner_image`, `application_name`, `user_sur`, `user_pdf`, `competitive_analysis`, `branding`, `user_flows`, `competitive_pdf`, `user_flow_pdf`, `work_main_title`, `specification`, `pagetype`, `user_flows_des`, `project_color`, `branding_title`, `branding_brand`, `branding_desc`, `branding_bold`, `Image_10`, `Image_11`, `Image_12`, `Image_14`, `Image_15`, `Image_16`, `Image_13`, `project_listing_video`, `Image_17`, `Image_18`, `Image_19`, `Image_20`, `Image_21`, `Image_22`, `Image_23`, `Image_24`, `Image_25`, `video_1`, `video_2`, `video_3`, `project_listing_image1`) VALUES
(118, 1, 'Paycrave', '<p>Challenge</p>\r\n<p>The target user would use this app generally during meal-times. Since meal times are usually fixed it is necessary to design the app in such a way that it economises the users time by allowing them to order their meal quickly. Locating food trucks in the vicinity, ability to view and place order online, option to pay and maintain a record of previous transactions for easy reference are necessary features for the success of this app</p>\r\n<p><br /> My role</p>\r\n<p>To be a one-stop solution for food truck aficionados<br /> - locate food trucks in the defined vicinity<br /> - view menu and order online<br /> - option to make payment via app</p>', 'https://invis.io/RQ7XVYOGC', '', '', NULL, NULL, '2019-11-08', '1970-01-01', 'Keyur', 2, 'E', '150.107.188.82', '', '', '118-b-l-1.webp', '118-b-l-2.webp', '118-b-l-3.webp', '118-b-c-1.webp', '118-b-c-2.webp', '118-b-c-3.webp', '118-b-r-1.webp', '118-paycrave-sketchimage.webp', '118-Mobile.webp', 'N', 1, 1, '118-Work-loading-1.webp', '', '118-MaroonBackground.webp', '<p><span class=\"iso\">IOS APPLICATION</span></p>', '<p>To understand the market better, I created a user survey to learn about the pain points associated with ordering from food trucks and how the process could be bettered by way of an app.</p>\r\n<p>I monitored the survey to understand what motivates the target audience to use food trucks, what are their expectations from buying their meals at a food truck and what inconveniences they face whilst doing the same.</p>', '118-paycrave-user-persona.pdf', '<p>Competitive analysis plays an integral role while narrowing down key features which will determine the success of the app.</p>', '<p>The branding for a food truck app has to have a warm and friendly appeal to it, to encourage maximum users to sign up. I picked warm colors, sans serif fonts to highlight this emotion. Since it would have a lot of information it was necessary to have simplistic graphic elements to balance the page chaos.&nbsp;</p>', '<p>User flows help fix glitches in the navigation process, I did a preference test on www.usertesting.com to check which user flow charts were easier to maneuver. Based on the preference test results, I created a prototype for user testing. Most of the users were tech savvy and found the onboarding, landing and search pages easy to use. However I noticed there was minimal interaction with the dietary filter options. Based on this observation I made this feature more visible for greater user experience.</p>', '118-paycrave-competitive-analysis.pdf', '118-paycrave-wireframes.pdf', '<h3 class=\"font-i\">Paycrave</h3>', '<p><span class=\"challenge\">Challenge</span></p>\r\n<p>The target user would use this app generally during meal-times. Since meal times are usually fixed it is necessary to design the app in such a way that it economises the users time by allowing them to order their meal quickly. Locating food trucks in the vicinity, ability to view and place order online, option to pay and maintain a record of previous transactions for easy reference are necessary features for the success of this app</p>\r\n<p><br /> <span class=\"role\">My role</span></p>\r\n<p>To be a one-stop solution for food truck aficionados<br /> - locate food trucks in the defined vicinity<br /> - view menu and order online<br /> - option to make payment via app</p>', 'M', '<p>I prefer to sketch wireframes. Sorry for the blurry lines, I hope the prototype explains the layout better.</p>', '#981A36', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL, '118-PC_thumbnail copy.webp'),
(122, 1, 'Dena', '<p>Challenge</p>\r\n<p>There are plenty of crowd sourced fund raising websites that exist today. Dena was created to provide a platform for affording education to those who sought it by allowing them to raise funds for their endeavours. To make Dena the go-to platform for &lsquo;seekers&rsquo; and &lsquo;donors&rsquo; I would need to have<br /> <br />- multiple payment options <br />- tax saving guidance and related documentation <br />- quick access to all social platforms for easy sharing</p>\r\n<p><br /> My role</p>\r\n<p>In crowdfunding websites information trump visuals. Keeping this in perspective, I had to create a happy space with sufficient text content. Another key feature was to make it easy and quick to create, edit and share a cause.</p>', 'https://invis.io/7280R7XXM', '', '', NULL, NULL, '2019-11-09', '1970-01-01', 'Keyur', 7, 'E', '150.107.188.82', '', NULL, '122-d-l-1.webp', '', '', '122-d-c-1.webp', '', '', '122-d-r-1.webp', '122-748x3000px-02 copy.webp', '122-Imac.webp', 'Y', NULL, NULL, '122-Work-loading-2.webp', '', '122-dena-bg.webp', '<p><span class=\"iso\">IOS APPLICATION</span></p>', '<p>To better understand the target user I shortlisted the user personas to have these basic qualities:<br /> - Tech savvy<br /> - Active on social media<br /> - Having disposable income</p>', '122-dena-user-personas.pdf', '<p>Competitive analysis plays an integral role while narrowing down key features which will determine the success of the website.</p>', '<p>The term &lsquo;Dena&rsquo; is derived from the Hindi Language which means \"to give\". The logo symbol uses a hollow alphabet &lsquo;D&rsquo; to showcase the idea of filling up as funds are raised towards the specific cause.</p>\r\n<p>Since there is a substantial amount of content on each page I wanted the color palette to be engaging and friendly but at the same time not to overpower&nbsp;the layout. To achieve this objective I maintained a good percentage of negative space.</p>\r\n<p>Using a typeface with multiple weights was essential to emphasis text.</p>', '<p>In this dual login website it was essential for the backer to reach the cause he/she wished to support without browsing at length, to ensure this I created browsing categories.&nbsp;The backer has to feel a connect with the beneficiary\'s story inorder to fund it. To engage the backer it was essential to have concise text representing each cause. For this feature to work it was necessary to&nbsp;create, edit and share a cause with ease, getting this feature right would largely result in the success of this website.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '122-dena-competitive-analysis.pdf', '122-dena-userflows.pdf', '<h3 class=\"font-i\">Dena</h3>', '<p><span class=\"challenge\">Challenge</span></p>\r\n<p>There are plenty of crowd sourced fund raising websites that exist today. Dena was created to provide a platform for affordable education to those who sought it by allowing them to raise funds for their endeavours. To make Dena the go-to platform for &lsquo;seekers&rsquo; and &lsquo;donors&rsquo; I would need to have<br /> <br />- multiple payment options <br />- tax saving guidance and related documentation <br />- quick access to all social platforms for easy sharing</p>\r\n<p><br /> <span class=\"role\">My role</span></p>\r\n<p>In crowdfunding websites information and visuals are equally important. Keeping this in perspective, I had to create a concise text space&nbsp;complimenting the visuals.</p>', 'L', '', '#5353E2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL, '122-Dena_thumbnail compressed.webp'),
(130, 1, 'ZerothreeSeven', NULL, 'https://www.youtube.com/watch?v=XmPlL9CvGYU', '', '', NULL, NULL, '2019-11-12', '1970-01-01', 'Keyur', 4, 'E', '150.107.188.82', '', '', '130-z-l-1.webp', '', '', '130-z-c-1.webp', '', '', '130-z-r-1.webp', '130-748x3000px-03 copy.webp', '130-Imac.webp', 'Y', NULL, NULL, '130-Work-loading-3.webp', '', '130-zero-bg.webp', '<p><span class=\"iso\">IOS APPLICATION</span></p>', '<p>Selling quirky products online is very different from selling conventional products that make up the bulk of the online marketplace. Unconventional products require explanation to sell the usability of the product. Therefore defining and understanding the right user persona is critical.<br /> After conducting user surveys I shortlisted these key characteristics of the target audience<br /> - Appreciate creativity<br /> - Avid art collector<br /> - World Traveler<br /> - Pay attention to detail</p>', '', '<p>Competitive analysis plays an integral role while narrowing down key features which will determine the success of the website.</p>', '<p>Customized wall clocks, funky magazine racks, foldable wine racks, most of the products on this website have an inherently fun vibe to it. I wanted to retain that vibe with the use of an electric colour. I selected a simple typeface since I wanted to use this san serif font in a bigger size to differentiate different product categories. Instead of using generic tabs for features I created rectangular shaped bars with a pop up option.</p>\r\n<p>As for the logo I have used the numeric value and helvetica font weight to depict its value.</p>', '<p>Rounds of user testing helped in getting the navigation flow in order. Add on features like concise reviews options and horizontal navigation lead to a better viewing experience.&nbsp;</p>', '130-037-competitive-analysis.pdf', '130-748x3000px-03 copy.webp', '<h3 class=\"font-i\">ZerothreeSeven</h3>', '<p><span style=\"box-sizing: border-box; font-family: \'New Italic\'; color: #8c8c8c; font-size: 14px; letter-spacing: 1px;\">Challenge</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #272727; font-family: \'ITC Avant Garde Gothic Condensed Book\'; font-size: 14px; letter-spacing: 1px;\">Even after all these advancements in e-commerce and online shopping space some issues continue to impede the overall experience. Since the touch factor is missing in online shopping, a very pertinent issue is misinterpretation of products by consumers broad range of reviews. To address this we found an effective yet concise way of reviewing products.</p>\r\n<p><br style=\"box-sizing: border-box; color: #272727; font-family: \'ITC Avant Garde Gothic Condensed Book\'; font-size: 14px; letter-spacing: 1px;\" /><span style=\"box-sizing: border-box; font-family: \'New Italic\'; color: #8c8c8c; font-size: 14px; letter-spacing: 1px;\">My role</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #272727; font-family: \'ITC Avant Garde Gothic Condensed Book\'; font-size: 14px; letter-spacing: 1px;\">To combat this I simplified the review format by condensing it to 3 basic questions which are answers by clicking either thumbs up or thumbs down.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #272727; font-family: \'ITC Avant Garde Gothic Condensed Book\'; font-size: 14px; letter-spacing: 1px;\">Another key feature of this website is its navigation. The loading page teaches a first time user on how the webpage functions right from selecting product category, chasing desired products, reviews and checkout.</p>', 'L', '', '#F14949', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL, '130-037_thumbnail copy.webp'),
(146, 1, 'Roundhouse', NULL, '', '', '', NULL, NULL, '2019-11-18', '1970-01-01', 'Keyur', 1, 'E', '27.4.152.58', '', '', '', '', '', '', '', '', '', '', '', 'Y', NULL, NULL, '146-Roundhouse_thumbnailimage.webp', '', '', '', '', '', '', '', '', '', '', '', '', 'B', '', NULL, 'Roundhouse', '<p>BRAND IDENTITY</p>', '<p>Roundhouse is an Arthouse based in London which promotes different forms of art for the youth and holds workshops for the same. For this brand I have made use of rhythm which represents music through soundwaves, free flow dance movements and abstract art. Displayed here are the collaterals designed for them which include posters, hand illustrations, CD cover, magazine advert and the logo.</p>', '<h1>A strong typographic identity for<br /> London&rsquo;s arthouse scene to cut <br />through the visual chaos.</h1>', '146-poster.webp', '146-slider-title.webp', '146-poster2.webp', '146-poster1.webp', '146-slider1.webp', '146-146-cd_cover.webp', '146-roundhouse_ful.webp', '146-Roundhouse_thumbnailuse_h264USE.mp4', '', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL, '146-Roundhouse_thumbnailimage.webp'),
(162, 1, 'KnowLondon', NULL, '', '', '', NULL, NULL, '2020-02-27', '1970-01-01', 'Keyur', 8, 'E', '14.198.12.67', '', '', '', '', '', '', '', '', '', '', '', 'Y', NULL, NULL, '162-KL_400x400.webp', '', '', '', '', '', '', '', '', '', '', '', '', 'B', '', '', 'KnowLondon', '<p>BRAND IDENTITY</p>', '<p>KnowLondon company&rsquo;s aim is to create a complete guide for the students coming to London for higher education. This guide would be distributed in universities, student housing, restaurants, bars, travel agencies etc whose target audience would be students. The task at hand was to create an easy yet concise guide for the students to access all this information. Since there was a lot of text I used infographics as my main medium to create hierarchy of that information.</p>', '<h1>A thorough infographic media kit guide for students living in London</h1>', '162-2.webp', '162-1.webp', '162-3.webp', '162-5.webp', '162-6.webp', '162-7.webp', '162-4.webp', '162-KnowLondon_thumbnail_h264USE.mp4', '', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL, '162-KL_400x400.webp'),
(163, 1, 'Opulent Fine Jewels', NULL, '', '', '', NULL, NULL, '2020-03-01', '1970-01-01', 'Keyur', 10, 'E', '14.198.12.67', '', '', '', '', '', '', '', '', '', '', '', 'Y', NULL, NULL, '163-OFJ_thumbnailimage_2.webp', '', '', '', '', '', '', '', '', '', '', '', '', 'B', '', '', 'Opulent Fine Jewels', '<p>BRAND IDENTITY, DIGITAL DESIGN</p>', '<p>Branding and communication for Opulent Fine Jewels, a brand that combines traditional Indian and classic western motifs to create exclusive jewellery pieces.&nbsp;The logo and graphic language are based on the contemporary nature of the brand name making the identity feel appropriately affluent and grand.</p>\r\n<p>Website Link&nbsp;<a href=\"http://www.opulentfinejewels.com\" target=\"_blank\">www.opulentfinejewels.com</a></p>', '<h1>The identity is guided by two oppositional attitudes. These are grandeur, representing the heritage of the brand, and minimalism, representing the company\'s philosophy.</h1>', '163-Group 41.webp', '163-Group 43.webp', '163-Group 42.webp', '163-Group 39.webp', '163-Group 40.webp', '163-desktopmobile1920x900.webp', '163-cardimage1920x900.webp', '163-OFJ_thumbnailuse_h264USE.mp4', '', '', '', '', '', '', NULL, NULL, NULL, '163-OFJ_videouse_h264.mp4', NULL, NULL, '163-OFJ_thumbnailimage_2.webp'),
(164, 1, 'Plan B', NULL, '', '', '', NULL, NULL, '2020-03-16', '1970-01-01', 'Keyur', 3, 'E', '14.198.12.67', '', '', '', '', '', '', '', '', '', '', '', 'Y', NULL, NULL, '164-YGPB400X400.webp', '', '', '', '', '', '', '', '', '', '', '', '', 'B', '', '', 'Plan B', '<p>GRAPHIC ART</p>', '<p>Artwork for a line of innerwear range which includes underwear, boxer shorts, camisoles, vests and socks</p>', '<h1>Fun, colourful, modern illustration to make the transition from diaper to underwear much easier.</h1>', '164-Group 396.webp', '164-Group 398.webp', '164-Group 399.webp', '164-Group 402.webp', '164-Group 403.webp', '164-Group 404.webp', '164-Group 141.webp', '164-YGPB_thumbnailuse_H264USE.mp4', '164-Group 405.webp', '164-Group 406.webp', '', '164-Group 401.webp', '164-Group 400.webp', '', NULL, NULL, NULL, '', NULL, NULL, '164-YGPB400X400.webp'),
(173, 1, 'JF Digital', NULL, 'www.kavisashah.com', '', '', NULL, NULL, '2020-04-14', '1970-01-01', 'Keyur', 11, 'E', '14.198.12.67', '', '', '173-logo_1.webp', '', '', '173-font_1.webp', '', '', '173-color_1.webp', '173-748x3000px-01.jpg', '173-118-Mobile.webp', 'Y', NULL, NULL, '', '', '173-720x1025px.webp', '<p>IOS | ANDROID APPLICATION</p>', '<p>There would be two types of users for this app&nbsp;</p>\r\n<p>&bull; <strong>Job seekers</strong> who would want to load their profile manually or pull in professional credentials from social media. JF Digital\'s algorithm analyses the job seekers\'s location, experience and skills and brings them jobs they may be interested in. Job seekers swipe to apply and if employer shows interest too, only then does the app reveal the job seeker\'s identity to the corporate recruiter or hiring manager. Once the identity is revealed they can directly chat in the app.</p>\r\n<p>&bull; <strong>Employers</strong> behave similarly to job seekers. Hiring managers or recruiters can sign up online and open positions, then view the app\'s reccommended candidates or wait for job seekers to swipe right. Employers can select relevant job seekers by swiping right on their profiles, then chat directly in the app.</p>', '173-UserSurveys&UserProfiles.pdf', '<p>Competitive analysis plays an integral role while narrowing down key features which will determine the success of the app. There were many competitiors who were already exploring this idea with multiple features, the&nbsp;challenge&nbsp;is choosing the right features which would assist in easy job matching and still provide a niche in this exhausted market.&nbsp;</p>', '<p>The use of the blues creates a professional feel while the yellow adds a tinge of friendliness and warmth to this palette. This combination of colors will compliment the philosophy of JF Digital ; professional and approachable. I wanted a san serif typeface with multiple weights, the app had a lot of information and the usage of different weights would help in creating heirarchy of information.</p>\r\n<p>&nbsp;</p>', '<p>User flow help fix glitches in the navigation process, I did a preference test on www.usertesting.com to check which user flow charts were easier to maneuver. Based on the preference test results, I created a prototype for user testing. Most of the users were tech savvy and found the onboarding process a bit lengthy because of the amount of information needed to make the profile. Reworked with the developers team and made sure there is a easier way to link their professional credentials via social links to save time.</p>', '173-Competitive Analysis.pdf', '173-UserFlow_compressed.pdf', '<h3><strong>JF Digital</strong></h3>', '<p><span class=\"challenge\">Challenge</span></p>\r\n<p>JF digital is a job matching app that connects candidtaes directly to hiring managers. Candidates can upload their resumes and connect their social and professional media profiles, but have the option to remain anonymous while searching. Users would receive a daily set of job reccommendations that fit their backgrounds and salary criteria and swipe right to apply. Employers can directly post jobs on JF Digital, eliminating the need for third-party job boards and recruiters and connect directly to job seekers. Identity of the candidate is revealed only after a potential match.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><span class=\"challenge\">My role</span></p>\r\n<p>- To facilitate easy profile creation from social media and in-app profile editing</p>\r\n<p>- Swipe is a major aspect of the JF Digital user experience. Job seekers swipe to apply for jobs or left to pass on positions. Whereas employers respond and swipe right to reciprocate interest or left to eliminate the candidate</p>\r\n<p>- To provide direct communication between job seekers and employers thus allowing immediate conversation within the app</p>', 'M', '<p>The first&nbsp;version of the wireframes, starting with the onboarding process, along creating a user profile and finally the swipe option screens.</p>', '#264961', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL, '173-JFDthumbnail compressed.webp'),
(179, 1, 'Aspire Designs', NULL, '', '', '', NULL, NULL, '2020-05-27', '1970-01-01', 'Keyur', 6, 'E', '14.198.12.67', '', '', '', '', '', '', '', '', '', '', '', 'Y', NULL, NULL, '179-AD_thumbnail_400X400 compressed.webp', '', '', '', '', '', '', '', '', '', '', '', '', 'B', '', '', 'Aspire Designs', '<p>BOOK DESIGN, EXHIBITION DESIGN, ART DIRECTION &amp; ENVIRONMENTAL GRAPHICS</p>', '<p>Equal parts mythical, exuberant, inspirational and visually rich. Aspire Designs is known for its visually engaging and unique designs. The brief was to create an identity which is as distinctive as their designs. I experimented with bold backgrounds, detailed illustrations and clean san serif typography. This graphic language was further implemented on the product catalogue, exhibition booth layout and environmental graphics.&nbsp;&nbsp;</p>', '<h1>Experimented with bold backgrounds, detailed illustrations and clean san serif typography.</h1>', '179-900x500_2.webp', '179-900x500.webp', '179-900x500_3.webp', '', '', '179-1920x900_1.webp', '179-1920x900_4.webp', '179-AD_thumbnail_400X400 compressed.mp4', '', '', '179-1920x900_2.webp', '', '', '179-1920x900_5.webp', NULL, NULL, NULL, '', NULL, NULL, ''),
(169, 1, 'Print Artwork', NULL, '', '', '', NULL, NULL, '2020-03-19', '1970-01-01', 'Keyur', 5, 'E', '14.198.12.67', '', '', '', '', '', '', '', '', '', '', '', 'Y', NULL, NULL, '169-400x400_thumbnailimage.webp', '', '', '', '', '', '', '', '', '', '', '', '', 'B', '', '', 'Print Artwork', '<p>STATIONERY DESIGN</p>', '<p>Custom made prints for clients</p>', '', '', '169-SG_embroidery.webp', '', '', '', '169-Sg_invite2.webp', '169-SG_invite.webp', '169-400x400_thumbnailvideouse_H264USE.mp4', '', '', '169-SG_invite_leaves.webp', '169-SG_pinkinvite1.webp', '169-SG_macyinvite.webp', '169-Nidhiinvite.webp', NULL, NULL, NULL, '', NULL, NULL, '169-400x400_thumbnailimage.webp'),
(168, 1, 'Marquise Diamond', NULL, '', '', '', NULL, NULL, '2020-03-19', '1970-01-01', 'Keyur', 9, 'E', '14.198.12.67', '', '', '', '', '', '', '', '', '', '', '', 'Y', NULL, NULL, '168-MD_thumbnailimage_2.webp', '', '', '', '', '', '', '', '', '', '', '', '', 'B', '', '', 'Marquise Diamond', '<p>BRAND IDENTITY, SIGNAGE &amp; ENVIRONMENTAL GRAPHICS, DIGITAL DESIGN</p>', '<p>Branding and communication for Marquise Diamond, a brand that has over 28 years of experience, exceptional products, excellent service, consistently and takes pride in maintaining global relations.</p>\r\n<p>Website Link&nbsp;<a href=\"http://www.marquisediam.com\" target=\"_blank\">www.marquisediam.com</a></p>', '<h1>The graphic language is based on the distinctive nature of the brand, the use of complimentary colours and clean typography is to stand out in&nbsp;a competitive market.</h1>', '168-streetadvert.webp', '168-Businesscard.webp', '168-Mobile_900x500.webp', '', '', '168-desktopmobile1920x900.webp', '168-Exhibition_1920x900.webp', '168-MD_H.264_USE.MP4', '', '', '', '', '', '', NULL, NULL, NULL, '168-MD_webvideouse_H264.mp4', NULL, NULL, '168-MD_thumbnailimage.webp'),
(178, 1, 'eastern branding', NULL, '', '', '', NULL, NULL, '2020-04-22', '1970-01-01', 'Keyur', 3, 'D', '219.91.225.139', '', '', '', '', '', '', '', '', '', '', '', 'Y', NULL, NULL, '178-169-400x400_thumbnailimageuse.webp', '', '', '', '', '', '', '', '', '', '', '', '', 'B', '', '', 'branding brand', '<p>harsh testing</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>', '', '', '178-213-900x500.webp', '178-213-900x500.webp', '178-213-900x500.webp', '178-170-1920x700.webp', '178-215-1920x500.webp', '', '178-211-900x500.webp', '178-212-900x500.webp', '178-210-1920x700.webp', '178-213-900x500.webp', '178-214-900x500.webp', '178-140-1920x700.webp', NULL, NULL, NULL, '', NULL, NULL, ''),
(177, 1, 'easternts testing', NULL, 'https://youtu.be/vqJRytxAjog', '', '', NULL, NULL, '2020-04-22', '1970-01-01', 'Keyur', 6, 'D', '219.91.225.139', '', '', '', '', '', '', '', '', '', '', '', 'Y', NULL, NULL, '', '', '177-203-720x1025.webp', '<p>testingg</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>', '', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>', '177-dummy.pdf', '', '<p>easternts</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>', 'M', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>', '#2954A7', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL, ''),
(183, 1, 'Long Time No See - Music Concert', NULL, '', '', '', NULL, NULL, '2021-09-27', '1970-01-01', 'Keyur', 12, 'E', '103.251.19.59', '', NULL, '', '', '', '', '', '', '', '', '', 'Y', NULL, NULL, '183-Thumbnail400x400.webp', '', '', '', '', '', '', '', '', '', '', '', '', 'B', '', '', 'Clockenflap Presents - Long Time No See', 'Brand Identity & Marketing Assets', 'Celebrating the return of live music to Hong Kong in true Clockenflap style, ‘Long Time No See’ is the first event from Clockenflap Presents for more than a year, giving fans the long-awaited opportunity to cut loose and enjoy the magic of the live show experience with friends and kindred spirits.\r\n\r\nTaking place at MacPherson Stadium in Mongkok, the all-day show will feature an eclectic lineup of Hong Kong’s best musical talent, from much-loved veteran acts to the hottest up-and-coming stars.', '<h1> Complimentary colours, strong visual to highlight the artists performing.</h1>', '', '183-900x500.webp', '', '', '', '', '183-mobile.webp', '183-edm.mov', '', '', '', '', '', '', '', '', '', '183-edm.mov', '183-Tickets3840x1900.mov', '', ''),
(224, 1, 'Clockenflap Music - Talent Launch', NULL, '', '', '', NULL, NULL, '2021-10-15', '1970-01-01', 'Keyur', 13, 'E', '202.82.226.146', '', '', '', '', '', '', '', '', '', '', '', 'Y', NULL, NULL, '224-400x400.webp', '', '', '', '', '', '', '', '', '', '', '', '', 'B', '', '', 'Clockenflap Music - Talent Launch', 'Brand Identity & Digital Design', 'Clockenflap Music is a new online platform that celebrates musical discovery in all its forms. New Cantonese programme announcements with local talents. Each show ident is inspired by the personality of the host and is reflective of that show genre. The show idents are further extended into marketing assets.', '<h1>The unique typography holds the artists under the clockenflap brand however the visuals are inspired by their show genre which are instantly recognizable on posters and other promotional material that gives each artist its own iconic image.</h1>\r\n', '', '', '', '', '', '', '', '', '', '', '224-Mobile-Mockup.webp', '', '', '224-posters.webp', '', '', '224-poster_wall copy.webp', '', '', '224-Comp 1_6 compressed.mp4', ''),
(229, 1, 'Meanwhile ', NULL, '', '', '', NULL, NULL, '2021-12-03', '1970-01-01', 'Keyur', 16, 'E', '202.82.226.146', '', '', '', '', '', '', '', '', '', '', '', 'Y', NULL, NULL, '229-400x400px-03.webp', '', '', '', '', '', '', '', '', '', '', '', '', 'B', '', '', 'Meanwhile 2021', 'Brand identity framework, naming, positioning and digital design for an live music concert', 'Meanwhile was born as a transitional event during uncertain times. A time when the need to reflect, ramble and even wander was at its peak. The extension of the letter \'h\' in meanwhile was to depict this exact emotion.', '<h1>The graphics for the assets are tactile, warm and human, to foster a sense of connection and capture the feeling of celebration and camaraderie.</h1>', '', '229-900x500-01.webp', '', '229-06-Urban Flyer Mock-up.webp', '229-blank-billboard-located-in-underground-hall-or-sub-2021-08-30-06-50-25-utc.webp', '229-01 Event Wristbands Mockup.webp', '229-1920x900_posters.webp', '', '', '', '', '', '', '', '', '', '', '229-TST_web.mp4', '229-CWB_web.mp4', '229-Mobile_video.mp4', ''),
(227, 1, 'Kite Systems', NULL, '', '', '', NULL, NULL, '2021-10-21', '1970-01-01', 'Keyur', 14, 'E', '202.82.226.146', '', '', '', '', '', '', '', '', '', '', '', 'Y', NULL, NULL, '227-thumbnail.webp', '', '', '', '', '', '', '', '', '', '', '', '', 'B', '', '', 'Branding ', 'Marketing and Sales Deck', 'Kite Systems is a Hong Kong based I.T. Solutions provider that has been in business for 10 years. Their services include, web/mobile development, I.T. infrastructure support and deployment, and I.T. consultancy.  Inspite of providing cutting edge solutions, their branding lacked personality.', '<h1>Usage of dynamic photography, minimalistic icons and a colour palette that\'s approachable and professional helped achieve a distinctive personality for this company. </h1>', '', '227-KITESYSTEMS_mockup1.webp', '', '', '', '', '227-KITESYSTEM_mockup copy.webp', '', '', '', '227-KITESYSTEMS_icons.webp', '', '', '', '', '', '', '', '', NULL, ''),
(228, 1, 'Straight', NULL, '', '', '', NULL, NULL, '2021-10-21', '1970-01-01', 'Keyur', 15, 'E', '202.82.226.146', '', '', '', '', '', '', '', '', '', '', '', 'Y', NULL, NULL, '228-85-a4-landscape-poster-mockup-template-04-copy.webp', '', '', '', '', '', '', '', '', '', '', '', '', 'B', '', '', 'Straight Marketing Deck', 'Marketing and Sales Deck', 'Straight blends stories, creatives and strategy with data, tech and media thinking to deliver holistic, end-to-end content marketing solutions. Working with local SMEs, start-ups and global players across different industries, they are all about helping brands and businesses grow.', '<h1>The deck is an extension to straight\'s existing branding, minimalistic and bold. </h1>', '', '228-Mix_of_round_sitckers_collection_mockup-copy.webp', '', '', '', '228-01_mockup-copy.webp', '228-12_mockup-copy.webp', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_master`
--
ALTER TABLE `contact_master`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `content_master`
--
ALTER TABLE `content_master`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`galleryID`);

--
-- Indexes for table `gallery_master`
--
ALTER TABLE `gallery_master`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `group_master`
--
ALTER TABLE `group_master`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `homecontent`
--
ALTER TABLE `homecontent`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `job_master`
--
ALTER TABLE `job_master`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `module_master`
--
ALTER TABLE `module_master`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `page_master`
--
ALTER TABLE `page_master`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `permission_master`
--
ALTER TABLE `permission_master`
  ADD PRIMARY KEY (`permission_id`);

--
-- Indexes for table `productoptions`
--
ALTER TABLE `productoptions`
  ADD PRIMARY KEY (`productoptionID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `pTypeID` (`pTypeID`),
  ADD KEY `pTypeID_2` (`pTypeID`);

--
-- Indexes for table `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`pTypeID`);

--
-- Indexes for table `project_gallery`
--
ALTER TABLE `project_gallery`
  ADD PRIMARY KEY (`galleryID`);

--
-- Indexes for table `seo_link_master`
--
ALTER TABLE `seo_link_master`
  ADD PRIMARY KEY (`seo_link_id`);

--
-- Indexes for table `session_log_master`
--
ALTER TABLE `session_log_master`
  ADD PRIMARY KEY (`session_log_id`);

--
-- Indexes for table `sliderimage`
--
ALTER TABLE `sliderimage`
  ADD PRIMARY KEY (`sliderID`);

--
-- Indexes for table `subscription_master`
--
ALTER TABLE `subscription_master`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `template_master`
--
ALTER TABLE `template_master`
  ADD PRIMARY KEY (`template_id`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `website_master`
--
ALTER TABLE `website_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`workID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_master`
--
ALTER TABLE `contact_master`
  MODIFY `cid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `content_master`
--
ALTER TABLE `content_master`
  MODIFY `content_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `galleryID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `gallery_master`
--
ALTER TABLE `gallery_master`
  MODIFY `image_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `group_master`
--
ALTER TABLE `group_master`
  MODIFY `group_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `homecontent`
--
ALTER TABLE `homecontent`
  MODIFY `content_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_master`
--
ALTER TABLE `job_master`
  MODIFY `job_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `module_master`
--
ALTER TABLE `module_master`
  MODIFY `module_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `page_master`
--
ALTER TABLE `page_master`
  MODIFY `page_id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permission_master`
--
ALTER TABLE `permission_master`
  MODIFY `permission_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1664;

--
-- AUTO_INCREMENT for table `productoptions`
--
ALTER TABLE `productoptions`
  MODIFY `productoptionID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `producttype`
--
ALTER TABLE `producttype`
  MODIFY `pTypeID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_gallery`
--
ALTER TABLE `project_gallery`
  MODIFY `galleryID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_link_master`
--
ALTER TABLE `seo_link_master`
  MODIFY `seo_link_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT for table `session_log_master`
--
ALTER TABLE `session_log_master`
  MODIFY `session_log_id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- AUTO_INCREMENT for table `sliderimage`
--
ALTER TABLE `sliderimage`
  MODIFY `sliderID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `subscription_master`
--
ALTER TABLE `subscription_master`
  MODIFY `s_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `template_master`
--
ALTER TABLE `template_master`
  MODIFY `template_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `userID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `website_master`
--
ALTER TABLE `website_master`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `workID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
