-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 18, 2012 at 03:17 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `donate`
--
CREATE DATABASE `donate` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `donate`;

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE IF NOT EXISTS `card` (
  `name` varchar(250) NOT NULL,
  `cardno` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE IF NOT EXISTS `children` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ngo` text NOT NULL,
  `cause` text NOT NULL,
  `max_amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`id`, `ngo`, `cause`, `max_amount`) VALUES
(1, 'All People Together(Formerly \r\nThe Spastics Society of India)\r\nContact: Dr.Anita Prabhu\r\n9820588314\r\nani_prabhu@yahoo.co.in', 'ADAPT endeavours to provide equal opportunities to children \r\nespecially in the field of education and employment.', 50000),
(2, 'Amcha Ghar\r\nContact:Susheela Singh\r\n9892270729\r\namchaghar2yahoo.com', 'Amcha Ghar, a home for girls is dedicated to helpless female children - \r\nirrespective of their religion or caste- who are susceptible to the \r\nvulnerable conditions of living on the street.', 40000),
(3, 'Apnalaya\r\nContact : Leena Joshi\r\n9892632224\r\ndirector@ apnalaya.org', 'An NGO founded in 1972 to help children living in slums towards a \r\nbetter life, Apnalaya strives to achieve this through urban community \r\ndevelopment projects in Mumbai', 30000),
(4, 'M.Venkatarangaiya Foundation-\r\nAddress:\r\n201, Narayan Apartments,\r\nWest Marredpally, \r\nSecunderabad - 500026, AP India. \r\nPhone: +91 (40) 2780-1320\r\nFax: +91 (40) 2780-8808\r\nWebsite: www.mvfindia.in\r\nE-mail: mvfindia@gmail.com', 'MV Foundation’s approach is based on a firm conviction that no child works and that all children in the 5-14 years age group must be in school.', 20000),
(5, '', '', 10000),
(6, 'Pratham:Universalisation of Primary Education \r\nContact Addresses:\r\nMumbai:\r\nPratham Mumbai, Above Adarsh Mithai Mandir,\r\nOswal Bhavan, Tardeo Road, Nana Chowk,\r\nMumbai 400 007\r\nTel. No. - (91) (22) 23851542\r\nE-mail: mumbai@pratham.org', 'Every child in school and learning well', 5000),
(7, 'PCVC (Pratham Council for Vulnerable Children)\r\nContact : \r\n3rd Floor, Above Adarsh Mithai Mandir,\r\nOswal Bhavan, Tardeo Road, Nana Chowk,\r\nMumbai - 400 007\r\nContact Persons:\r\nKishore Bhamre\r\nVikas sawant\r\nTel. No. - (91) (22) 23851542\r\nE-mail: pcvc@pratham,org', 'Vulnerable Children', 500);

-- --------------------------------------------------------

--
-- Table structure for table `disabled`
--

CREATE TABLE IF NOT EXISTS `disabled` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ngo` text NOT NULL,
  `cause` text NOT NULL,
  `max_amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `disabled`
--

INSERT INTO `disabled` (`id`, `ngo`, `cause`, `max_amount`) VALUES
(1, 'HelpAge India\r\ncontact: Prakash Borgaonkar\r\n9821224513\r\nprakash.borgaonkar@helpag\r\neindia.org', 'HelpAge India''s mission is to work for the cause and care of \r\ndisadvantaged older persons and to make them aware of their own \r\nrights so that they get their due and are able to play an active role in \r\nsociety.T', 50000),
(2, 'National Society for \r\nEqual Opportunities \r\nfor the \r\nHandicapped India\r\ncontact: Yogendra S.Shetty\r\n9820107848\r\nnaseoh@vsnl.com', 'The NGO strives to create comprehensive rehabilitation opportunities \r\nfor the differently-abled persons.', 40000),
(3, 'Network in Thane \r\nby People Living \r\nwith HIV\r\ncontact:Ashok Dhokale\r\n9224747972\r\nntpplus@gmail.com', 'The NGO works for the benefit of the people infected and affected with \r\nHIV', 25000),
(4, 'OM Creations Trust\r\ncontact:Hoshang Chacha \r\n9820145825\r\nomcreationstrust@gmail.com', 'The trust is a platform for developmentally challenged women to learn, \r\nbe free and earn their living themselves', 15000),
(5, 'Rising Star \r\nOutreach of India\r\ncontact: Rondell Hanson\r\n9176660096\r\nrondell@cox.net', 'Rising Star Outreach of India aims to help the Leprosy colonies \r\nbecome thriving, self-sufficient communities. ', 5000),
(6, 'Reform Image \r\nGroup\r\ncontact:Amitabh Kumar\r\n9820285451\r\nrigmumbai@vsnl.net', 'RIG aims to serve and enrich the quality of life of the poor, indigent \r\nandunderprivileged people.', 500);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE IF NOT EXISTS `donation` (
  `S.NO.` int(11) NOT NULL,
  `NGO` text NOT NULL,
  `Cause` text NOT NULL,
  `Amount` int(11) NOT NULL,
  PRIMARY KEY (`S.NO.`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `environment`
--

CREATE TABLE IF NOT EXISTS `environment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ngo` text NOT NULL,
  `cause` text NOT NULL,
  `max_amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `environment`
--

INSERT INTO `environment` (`id`, `ngo`, `cause`, `max_amount`) VALUES
(1, 'Indian NGOs Working For Saving the Environment\r\nAddress : General Secretary\r\nAssam Science Society, Latsil\r\nLamb Road\r\nGuwahati - 781 001\r\nAssam', 'Saving Environment', 50000),
(2, 'Academy For Mountain Environics (AME)\r\nContact Person - Shri Ram Murti Sreedhar, Director\r\nAddress :111/2-1, Rajpur Road, Dehradun\r\nDehradun, Uttar Pradesh, 248001\r\nPhone - (0135) 747304', 'Saving Mountains', 45000),
(3, 'Action For Agricultural Renewal In Maharashtra (AFARM)\r\nContact Person - Mr. M. N. Kondhalkar, Executive Officer\r\nAddress : 2/23, A-B, Raisoni Park, Marketyard\r\nPune, Maharashtra, 411037\r\nPhone - (0212) 464641 , Fax - 466303', 'Saving Agricultural Area ', 40000),
(4, 'Action For Sustainable Developement & Awareness Society (ASDA)\r\nContact Person - Ms. Vinod Bala Sharma, Secretary\r\nAddress :20, Malviya Marg, Rishikesh\r\nDehradun, Uttar Pradesh, 249201', 'Sustainable Developement & Awareness Society', 35000),
(5, 'Action For Welfare & Awakening In Rural Environment (AWARE)\r\nContact Person - Mr. P.K.S. Madhavan, Chairman\r\nAddress : 5-9-24/78, Lake Hill Road, Hyderabad\r\nHyderabad, Andhra Pradesh, 500002\r\nPhone - (040) 236311, 235949 , Fax - 236369\r\nE-mail - aware@hd1.vsnl.net.in\r\n', 'Welfare & Awakening In Rural Environment', 25000),
(6, 'All India Centre For Urban And Rural Development (AICURD)\r\nContact Person - Mr. D. P. Ray, Patron\r\nAddress :16, Bhai Veer Singh Marg, Gole Market, New Delhi\r\nNew Delhi, Delhi, 110001\r\nPhone - (011) 3346311, 3360970', 'Urban And Rural Development ', 15000),
(7, 'All India Environmental Society\r\nContact Person - Prof. S. P. Grover, Secretary\r\nAddress :3-Curzon Road\r\nDehradun, Uttar Pradesh, 248001\r\nPhone - (0135) 651805, 652426', 'Saving Environment', 10000),
(8, 'Association Of Organisations On Nature And Environment (A-ONE)\r\nContact Person - Ms. Sujata S. General Secretary\r\nAddress :A-15, Paryavaran Complex, South of Saket, New Delhi\r\nNew Delhi, Delhi, 110030\r\nPhone - (011) 6515081 , Fax - 6967514\r\nE-mail - ecology@nda.vsnl.net.in', 'Nature And Environment ', 5000),
(9, 'It''s Your Earth', 'Saving Earth', 500);

-- --------------------------------------------------------

--
-- Table structure for table `health`
--

CREATE TABLE IF NOT EXISTS `health` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ngo` text NOT NULL,
  `cause` text NOT NULL,
  `max_amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `health`
--

INSERT INTO `health` (`id`, `ngo`, `cause`, `max_amount`) VALUES
(1, 'St Jude India Childcare Centres', 'Sponsor the daily transport cost of our children from Parel Centre to Tata Memorial Hospital', 50000),
(2, 'Society For Women’s Education Economic Development (SWEED)', 'Supplementary nutrition and medical care for a chronically ill HIV/Aids and TB co- infected person on ART Drugs for six months', 40000),
(3, 'ASHWINI', 'Support a fund for dental care of tribals at Gudalur Adivasi Hospital', 30000),
(4, 'Spurthi Mahila Mandal (Bijapur)', 'Sponsor basic health care and nutrition for a poor T.B/ HIV ailing person for a month', 20000),
(5, 'Blind People''s Association, India', 'Sponsor a Cataract Surgery (one eye) for a very poor elderly person ', 10000),
(6, 'Sapna', 'Contribute towards costs of running a Public Health Care Centre say (PHCC) for the rural poor', 5000),
(7, 'It''s your earth', 'treatment for poor people', 500);
--
-- Database: `greenrar`
--
CREATE DATABASE `greenrar` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `greenrar`;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- RELATIONS FOR TABLE `blog`:
--   `email`
--       `login` -> `email`
--

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `email`, `date_added`) VALUES
(1, 'test blog 1', 'ankit', '2012-11-11 11:04:11'),
(2, 'environment blogsss', 'rajul kuk', '2012-11-11 11:16:54'),
(3, 'blog', 'ankit', '2012-11-16 17:04:30'),
(4, 'faltu blog', 'rajat', '2012-11-16 14:45:23'),
(11, 'ankit', 'rajul', '2012-11-05 10:06:24'),
(60, 'Work from Home,How Green is the idea', 'rajul', '2012-11-28 08:33:02'),
(61, '6 Ideas to make your Company join the Go Green Bandwagon', 'ankit', '2012-11-28 08:35:49'),
(62, 'Environment, a cliche? I think not.', 'rajul', '2012-11-28 08:40:52'),
(63, 'Biodiesel from algae', 'rajat', '2012-11-28 08:42:28'),
(64, 'Waning Interest, Ambiguous Future:  Another  UN Climate Change Conference at Durban', 'rajat', '2012-11-28 08:43:26'),
(65, 'Natural environment', 'vaibhudgr8', '2012-11-29 10:50:39'),
(66, 'Newlights Airflex Plastic is Made from Greenhouse Gases', 'vaibhudgr8', '2012-11-29 11:33:40');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE IF NOT EXISTS `card` (
  `name` varchar(250) NOT NULL,
  `cardno` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE IF NOT EXISTS `children` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ngo` text NOT NULL,
  `cause` text NOT NULL,
  `max_amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`id`, `ngo`, `cause`, `max_amount`) VALUES
(1, 'All People Together(Formerly \r\nThe Spastics Society of India)\r\nContact: Dr.Anita Prabhu\r\n9820588314\r\nani_prabhu@yahoo.co.in', 'ADAPT endeavours to provide equal opportunities to children \r\nespecially in the field of education and employment.', 50000),
(2, 'Amcha Ghar\r\nContact:Susheela Singh\r\n9892270729\r\namchaghar2yahoo.com', 'Amcha Ghar, a home for girls is dedicated to helpless female children - \r\nirrespective of their religion or caste- who are susceptible to the \r\nvulnerable conditions of living on the street.', 40000),
(3, 'Apnalaya\r\nContact : Leena Joshi\r\n9892632224\r\ndirector@ apnalaya.org', 'An NGO founded in 1972 to help children living in slums towards a \r\nbetter life, Apnalaya strives to achieve this through urban community \r\ndevelopment projects in Mumbai', 30000),
(4, 'M.Venkatarangaiya Foundation-\r\nAddress:\r\n201, Narayan Apartments,\r\nWest Marredpally, \r\nSecunderabad - 500026, AP India. \r\nPhone: +91 (40) 2780-1320\r\nFax: +91 (40) 2780-8808\r\nWebsite: www.mvfindia.in\r\nE-mail: mvfindia@gmail.com', 'MV Foundation’s approach is based on a firm conviction that no child works and that all children in the 5-14 years age group must be in school.', 20000),
(5, '', '', 10000),
(6, 'Pratham:Universalisation of Primary Education \r\nContact Addresses:\r\nMumbai:\r\nPratham Mumbai, Above Adarsh Mithai Mandir,\r\nOswal Bhavan, Tardeo Road, Nana Chowk,\r\nMumbai 400 007\r\nTel. No. - (91) (22) 23851542\r\nE-mail: mumbai@pratham.org', 'Every child in school and learning well', 5000),
(7, 'PCVC (Pratham Council for Vulnerable Children)\r\nContact : \r\n3rd Floor, Above Adarsh Mithai Mandir,\r\nOswal Bhavan, Tardeo Road, Nana Chowk,\r\nMumbai - 400 007\r\nContact Persons:\r\nKishore Bhamre\r\nVikas sawant\r\nTel. No. - (91) (22) 23851542\r\nE-mail: pcvc@pratham,org', 'Vulnerable Children', 500);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `blog_id` int(11) NOT NULL,
  `comment_no` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`blog_id`,`comment_no`),
  KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `comment`:
--   `blog_id`
--       `blog` -> `id`
--   `email`
--       `login` -> `email`
--

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`blog_id`, `comment_no`, `email`, `comment`, `datetime`) VALUES
(1, 1, 'ankit', 'edwfdvc', '2012-11-11 19:04:25'),
(1, 2, 'ankit', 'wdfadfadf', '2012-11-11 19:04:25'),
(1, 3, 'ankit1000', 'full blog portion done..!! :D', '2012-11-05 15:30:26'),
(1, 4, 'ankit1000', 'jhgjfdxz ', '2012-11-05 16:22:11'),
(2, 1, 'ankit', 'argfvdsafvdf', '2012-11-05 12:01:41'),
(3, 1, 'rajat', 'dfgbghdfxd', '2012-11-05 12:01:41'),
(3, 2, 'rajul', 'etgbdvsfasdb', '2012-11-05 12:02:10'),
(3, 3, 'ankit', 'ghdetytng sfdhbgf', '2012-11-05 12:02:10'),
(3, 4, 'ankit1000', 'hello', '2012-11-21 19:39:38'),
(3, 5, 'ankit1000', 'hello derefull site working', '2012-11-05 15:14:34'),
(3, 6, 'ankit1000', 'hello', '2012-11-05 15:15:21'),
(3, 7, 'ankit1000', 'here', '2012-11-05 15:17:26'),
(3, 8, 'ankit1000', 'vre up n working', '2012-11-05 15:18:17'),
(3, 9, 'ankit', 'ankit', '2012-11-24 07:18:48'),
(3, 10, 'ankit', 'ankit', '2012-11-29 06:12:30'),
(4, 1, 'ankit1000', 'hsdvas', '2012-11-05 17:32:04'),
(4, 2, 'ankit1000', 'hjfsdsdf', '2012-11-05 17:32:52'),
(4, 3, 'ankit1000', 'ankit22222222', '2012-11-05 17:41:06'),
(4, 4, 'ankit1000', 'dgfhgjh', '2012-11-05 17:46:54'),
(4, 5, 'ankit1000', 'poijhygtfc', '2012-11-05 17:49:44'),
(4, 6, 'ankit1000', 'hfxc', '2012-11-05 17:50:22'),
(4, 7, 'ankit1000', 'sdfdvbdfvfdv', '2012-11-05 17:51:26'),
(4, 8, 'ankit1000', 'jhgfgxd', '2012-11-05 17:52:05'),
(4, 9, 'ankit1000', 'try', '2012-11-05 17:53:09'),
(66, 1, 'test', 'ankit', '2012-12-08 15:45:05');

-- --------------------------------------------------------

--
-- Table structure for table `crawler`
--

CREATE TABLE IF NOT EXISTS `crawler` (
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crawler`
--

INSERT INTO `crawler` (`link`) VALUES
('http://blog.enn.com/'),
('http://www.enn.com/static/ennmediakit.pdf'),
('http://www.enn.com/contact.html'),
('http://www.enn.com/contact.html'),
('http://www.ennmagazine.com/12all/index.php?action=subscribe&mode=view_subscribe&funcml=&mlt=&nl=2&em'),
('http://blog.enn.com/?p=2956'),
('http://blog.enn.com/?p=2956'),
('http://blog.enn.com/?p=2936'),
('http://blog.enn.com/?p=2936'),
('http://blog.enn.com/?p=2923'),
('http://blog.enn.com/?p=2923'),
('http://www.enn.com'),
('http://ens-newswire.com/about/'),
('http://ens-newswire.com/subscribe/'),
('http://ens-newswire.com/mission-statement/'),
('http://ens-newswire.com/contact/'),
('http://ens-newswire.com'),
('http://ens-newswire.com/about/'),
('http://ens-newswire.com/subscribe/'),
('http://ens-newswire.com/mission-statement/'),
('http://ens-newswire.com/contact/'),
('http://ens-newswire.com/2012/11/28/sarawak-indigenous-win-australian-greens-to-anti-dam-cause/'),
('http://ens-newswire.com/2012/11/28/sarawak-indigenous-win-australian-greens-to-anti-dam-cause/'),
('http://ens-newswire.com/2012/11/27/small-oil-leak-points-up-big-danube-river-issues/'),
('http://ens-newswire.com/2012/11/27/small-oil-leak-points-up-big-danube-river-issues/'),
('http://ens-newswire.com/2012/11/27/mountain-gorilla-populations-grow-as-conservation-succeeds/'),
('http://ens-newswire.com/2012/11/27/mountain-gorilla-populations-grow-as-conservation-succeeds/'),
('http://ens-newswire.com/2012/11/26/converting-agreements-to-action-key-to-doha-climate-talks/'),
('http://ens-newswire.com/2012/11/26/converting-agreements-to-action-key-to-doha-climate-talks/'),
('http://ens-newswire.com/2012/11/26/europe-changing-fast-as-climate-warms/'),
('http://ens-newswire.com/2012/11/26/europe-changing-fast-as-climate-warms/'),
('http://ens-newswire.com/2012/11/23/no-rare-earths-in-next-generation-electric-vehicles/'),
('http://ens-newswire.com/2012/11/23/no-rare-earths-in-next-generation-electric-vehicles/'),
('http://ens-newswire.com/2012/11/21/global-climate-emissions-gap-widens-rescue-still-possible/'),
('http://ens-newswire.com/2012/11/21/global-climate-emissions-gap-widens-rescue-still-possible/'),
('http://ens-newswire.com/category/at-risk/'),
('http://ens-newswire.com/2012/11/19/one-dead-one-missing-in-gulf-of-mexico-oil-rig-explosion/'),
('http://ens-newswire.com/2012/11/19/one-dead-one-missing-in-gulf-of-mexico-oil-rig-explosion/'),
('http://ens-newswire.com/2012/11/16/bp-pleads-guilty-to-criminal-charges-in-gulf-oil-spill/'),
('http://ens-newswire.com/2012/11/16/bp-pleads-guilty-to-criminal-charges-in-gulf-oil-spill/'),
('http://ens-newswire.com/category/air-climate/'),
('http://ens-newswire.com/2012/11/26/converting-agreements-to-action-key-to-doha-climate-talks/'),
('http://ens-newswire.com/2012/11/26/converting-agreements-to-action-key-to-doha-climate-talks/'),
('http://ens-newswire.com/2012/11/26/europe-changing-fast-as-climate-warms/'),
('http://ens-newswire.com/2012/11/26/europe-changing-fast-as-climate-warms/'),
('http://ens-newswire.com/category/business-and-sports/'),
('http://ens-newswire.com/2012/11/20/greenpeace-exposes-toxic-chemicals-in-fashionable-clothing/'),
('http://ens-newswire.com/2012/11/20/greenpeace-exposes-toxic-chemicals-in-fashionable-clothing/'),
('http://ens-newswire.com/2012/10/31/europe-updates-environment-impact-assessment-law/'),
('http://ens-newswire.com/2012/10/31/europe-updates-environment-impact-assessment-law/'),
('http://ens-newswire.com/category/energy/'),
('http://ens-newswire.com/2012/11/28/sarawak-indigenous-win-australian-greens-to-anti-dam-cause/'),
('http://ens-newswire.com/2012/11/28/sarawak-indigenous-win-australian-greens-to-anti-dam-cause/'),
('http://ens-newswire.com/category/food/'),
('http://ens-newswire.com/2012/09/29/peanut-and-almond-butters-recalled-for-salmonella/'),
('http://ens-newswire.com/2012/09/29/peanut-and-almond-butters-recalled-for-salmonella/'),
('http://ens-newswire.com/category/land-use/'),
('http://ens-newswire.com/2012/11/12/u-s-voters-approve-conservation-ballot-measures-worth-billions/'),
('http://ens-newswire.com/2012/11/12/u-s-voters-approve-conservation-ballot-measures-worth-billions/'),
('http://ens-newswire.com/category/oceans/'),
('http://ens-newswire.com/2012/11/20/galapagos-coral-may-predict-the-future-of-reefs-worldwide/'),
('http://ens-newswire.com/2012/11/20/galapagos-coral-may-predict-the-future-of-reefs-worldwide/'),
('http://ens-newswire.com/2012/10/03/unexploded-bombs-menace-busy-gulf-of-mexico/'),
('http://ens-newswire.com/2012/10/03/unexploded-bombs-menace-busy-gulf-of-mexico/'),
('http://ens-newswire.com/category/science-technology/'),
('http://ens-newswire.com/2012/11/20/galapagos-coral-may-predict-the-future-of-reefs-worldwide/'),
('http://ens-newswire.com/2012/11/20/galapagos-coral-may-predict-the-future-of-reefs-worldwide/'),
('http://ens-newswire.com/2012/11/08/space-sensor-to-track-air-pollution-across-north-america/'),
('http://ens-newswire.com/2012/11/08/space-sensor-to-track-air-pollution-across-north-america/'),
('http://ens-newswire.com/category/transport/'),
('http://ens-newswire.com/2012/11/23/no-rare-earths-in-next-generation-electric-vehicles/'),
('http://ens-newswire.com/2012/11/23/no-rare-earths-in-next-generation-electric-vehicles/'),
('http://ens-newswire.com/2012/11/12/california-to-get-200-electric-car-charging-freedom-stations/'),
('http://ens-newswire.com/2012/11/12/california-to-get-200-electric-car-charging-freedom-stations/'),
('http://ens-newswire.com/category/waste/'),
('http://ens-newswire.com/2012/11/14/superbug-mrsa-found-in-u-s-wastewater-treatment-plants/'),
('http://ens-newswire.com/2012/11/14/superbug-mrsa-found-in-u-s-wastewater-treatment-plants/'),
('http://ens-newswire.com/2012/11/12/uganda-high-court-rules-in-favor-of-plastic-bag-ban/'),
('http://ens-newswire.com/2012/11/12/uganda-high-court-rules-in-favor-of-plastic-bag-ban/'),
('http://ens-newswire.com/category/water/'),
('http://ens-newswire.com/2012/11/27/small-oil-leak-points-up-big-danube-river-issues/'),
('http://ens-newswire.com/2012/11/27/small-oil-leak-points-up-big-danube-river-issues/'),
('http://ens-newswire.com/2012/11/14/superbug-mrsa-found-in-u-s-wastewater-treatment-plants/'),
('http://ens-newswire.com/2012/11/14/superbug-mrsa-found-in-u-s-wastewater-treatment-plants/'),
('http://ens-newswire.com/category/wildlife/'),
('http://ens-newswire.com/2012/11/27/mountain-gorilla-populations-grow-as-conservation-succeeds/'),
('http://ens-newswire.com/2012/11/27/mountain-gorilla-populations-grow-as-conservation-succeeds/'),
('http://ens-newswire.com/2012/11/09/secretary-clinton-declares-war-on-wildlife-traffickers/'),
('http://ens-newswire.com/2012/11/09/secretary-clinton-declares-war-on-wildlife-traffickers/'),
('http://ens-newswire.com/category/opinions/kumi-naidoo/'),
('http://ens-newswire.com/2012/08/30/cold-hands-determined-hearts/'),
('http://ens-newswire.com/2012/08/30/cold-hands-determined-hearts/'),
('http://ens-newswire.com/category/opinions/paul-watson/'),
('http://ens-newswire.com/2012/08/04/on-eluding-extradition/'),
('http://ens-newswire.com/2012/08/04/on-eluding-extradition/'),
('http://ens-newswire.com/category/opinions/lester-brown/'),
('http://ens-newswire.com/2012/08/04/throwaway-economy-headed-for-junk-heap-of-history/'),
('http://ens-newswire.com/2012/08/04/throwaway-economy-headed-for-junk-heap-of-history/'),
('http://ens-newswire.com/2012/11/28/sarawak-indigenous-win-australian-greens-to-anti-dam-cause/'),
('http://ens-newswire.com/2012/11/28/sarawak-indigenous-win-australian-greens-to-anti-dam-cause/'),
('http://ens-newswire.com/2012/11/27/small-oil-leak-points-up-big-danube-river-issues/'),
('http://ens-newswire.com/2012/11/27/small-oil-leak-points-up-big-danube-river-issues/'),
('http://ens-newswire.com/2012/11/27/mountain-gorilla-populations-grow-as-conservation-succeeds/'),
('http://ens-newswire.com/2012/11/27/mountain-gorilla-populations-grow-as-conservation-succeeds/'),
('http://ens-newswire.com/2012/11/26/converting-agreements-to-action-key-to-doha-climate-talks/'),
('http://ens-newswire.com/2012/11/26/converting-agreements-to-action-key-to-doha-climate-talks/'),
('http://ens-newswire.com/2012/11/26/europe-changing-fast-as-climate-warms/'),
('http://ens-newswire.com/2012/11/26/europe-changing-fast-as-climate-warms/'),
('http://ens-newswire.com/2012/11/23/no-rare-earths-in-next-generation-electric-vehicles/'),
('http://ens-newswire.com/2012/11/23/no-rare-earths-in-next-generation-electric-vehicles/'),
('http://ens-newswire.com/2012/11/21/global-climate-emissions-gap-widens-rescue-still-possible/'),
('http://ens-newswire.com/2012/11/21/global-climate-emissions-gap-widens-rescue-still-possible/'),
('http://ens-newswire.com/2012/11/20/greenpeace-exposes-toxic-chemicals-in-fashionable-clothing/'),
('http://ens-newswire.com/2012/11/20/greenpeace-exposes-toxic-chemicals-in-fashionable-clothing/'),
('http://ens-newswire.com/2012/11/20/galapagos-coral-may-predict-the-future-of-reefs-worldwide/'),
('http://ens-newswire.com/2012/11/20/galapagos-coral-may-predict-the-future-of-reefs-worldwide/'),
('http://ens-newswire.com/2012/11/19/twelve-arrested-in-texas-keystone-xl-pipeline-blockade/'),
('http://ens-newswire.com/2012/11/19/twelve-arrested-in-texas-keystone-xl-pipeline-blockade/'),
('http://ens-newswire.com/2012/11/19/one-dead-one-missing-in-gulf-of-mexico-oil-rig-explosion/'),
('http://ens-newswire.com/2012/11/19/one-dead-one-missing-in-gulf-of-mexico-oil-rig-explosion/'),
('http://ens-newswire.com/2012/11/19/world-bank-sounds-alarm-on-cataclysmic-climate-change/'),
('http://ens-newswire.com/2012/11/19/world-bank-sounds-alarm-on-cataclysmic-climate-change/'),
('http://ens-newswire.com/2012/11/16/bp-pleads-guilty-to-criminal-charges-in-gulf-oil-spill/'),
('http://ens-newswire.com/2012/11/16/bp-pleads-guilty-to-criminal-charges-in-gulf-oil-spill/'),
('http://ens-newswire.com/2012/11/15/california-holds-first-greenhouse-gas-allowance-auction/'),
('http://ens-newswire.com/2012/11/15/california-holds-first-greenhouse-gas-allowance-auction/'),
('http://ens-newswire.com/2012/11/14/superbug-mrsa-found-in-u-s-wastewater-treatment-plants/'),
('http://ens-newswire.com/2012/11/14/superbug-mrsa-found-in-u-s-wastewater-treatment-plants/'),
('http://ens-newswire.com/2012/11/13/undp-doha-talks-could-help-avert-climate-disaster/'),
('http://ens-newswire.com/2012/11/13/undp-doha-talks-could-help-avert-climate-disaster/'),
('http://ens-newswire.com/2012/11/12/california-to-get-200-electric-car-charging-freedom-stations/'),
('http://ens-newswire.com/2012/11/12/california-to-get-200-electric-car-charging-freedom-stations/'),
('http://ens-newswire.com/2012/11/12/uganda-high-court-rules-in-favor-of-plastic-bag-ban/'),
('http://ens-newswire.com/2012/11/12/uganda-high-court-rules-in-favor-of-plastic-bag-ban/'),
('http://ens-newswire.com/2012/11/12/u-s-voters-approve-conservation-ballot-measures-worth-billions/'),
('http://ens-newswire.com/2012/11/12/u-s-voters-approve-conservation-ballot-measures-worth-billions/'),
('http://ens-newswire.com/2012/11/09/secretary-clinton-declares-war-on-wildlife-traffickers/'),
('http://ens-newswire.com/2012/11/09/secretary-clinton-declares-war-on-wildlife-traffickers/'),
('http://ens-newswire.com/2012/11/09/hyundai-kia-overstated-fuel-economy-claims/'),
('http://ens-newswire.com/2012/11/09/hyundai-kia-overstated-fuel-economy-claims/'),
('http://ens-newswire.com/2012/11/08/space-sensor-to-track-air-pollution-across-north-america/'),
('http://ens-newswire.com/2012/11/08/space-sensor-to-track-air-pollution-across-north-america/'),
('http://ens-newswire.com/2012/11/08/american-towns-fight-back-against-fracking/'),
('http://ens-newswire.com/2012/11/08/american-towns-fight-back-against-fracking/'),
('http://ens-newswire.com/2012/11/07/2012-congressional-elections-environment-won-polluters-lost/'),
('http://ens-newswire.com/2012/11/07/2012-congressional-elections-environment-won-polluters-lost/'),
('http://ens-newswire.com/2012/11/07/superstorm-sandy-survivors-brace-for-more-severe-weather/'),
('http://ens-newswire.com/2012/11/07/superstorm-sandy-survivors-brace-for-more-severe-weather/'),
('http://ens-newswire.com/2012/11/07/triumphant-obama-remembers-threat-of-climate-change/'),
('http://ens-newswire.com/2012/11/07/triumphant-obama-remembers-threat-of-climate-change/'),
('http://ens-newswire.com/2012/11/05/nyc-storm-recovery-schools-open-monday-close-election-day/'),
('http://ens-newswire.com/2012/11/05/nyc-storm-recovery-schools-open-monday-close-election-day/'),
('http://ens-newswire.com/2012/11/02/telethon-stars-shine-on-survivors-of-hurricane-sandy/'),
('http://ens-newswire.com/2012/11/02/telethon-stars-shine-on-survivors-of-hurricane-sandy/'),
('http://ens-newswire.com/2012/11/01/full-impact-of-superstorm-sandy-still-emerging/'),
('http://ens-newswire.com/2012/11/01/full-impact-of-superstorm-sandy-still-emerging/'),
('http://ens-newswire.com/2012/10/31/sandy-and-tar-sands-pipeline-stein-arrest-connects-the-dots/'),
('http://ens-newswire.com/2012/10/31/sandy-and-tar-sands-pipeline-stein-arrest-connects-the-dots/'),
('http://ens-newswire.com/2012/10/31/europe-updates-environment-impact-assessment-law/'),
('http://ens-newswire.com/2012/10/31/europe-updates-environment-impact-assessment-law/'),
('http://ens-newswire.com/2012/10/31/president-obama-governor-christie-tour-damaged-new-jersey/'),
('http://ens-newswire.com/2012/10/31/president-obama-governor-christie-tour-damaged-new-jersey/'),
('http://ens-newswire.com/2012/10/30/superstorm-sandy-is-what-global-warming-looks-like/'),
('http://ens-newswire.com/2012/10/30/superstorm-sandy-is-what-global-warming-looks-like/'),
('http://ens-newswire.com/2012/10/30/devastated-new-york-and-new-jersey-survey-the-damage/'),
('http://ens-newswire.com/2012/10/30/devastated-new-york-and-new-jersey-survey-the-damage/'),
('http://ens-newswire.com/2012/10/30/four-nuclear-power-plants-jolted-by-hurricane-sandy/'),
('http://ens-newswire.com/2012/10/30/four-nuclear-power-plants-jolted-by-hurricane-sandy/'),
('http://ens-newswire.com/2012/10/29/vicious-superstorm-sandy-smashes-u-s-northeast-cities/'),
('http://ens-newswire.com/2012/10/29/vicious-superstorm-sandy-smashes-u-s-northeast-cities/'),
('http://ens-newswire.com/2012/10/29/atlas-aims-to-ease-extreme-weather-impacts-on-public-health/'),
('http://ens-newswire.com/2012/10/29/atlas-aims-to-ease-extreme-weather-impacts-on-public-health/'),
('http://ens-newswire.com/2012/10/28/new-york-city-evacuates-375000-ahead-of-hurricane-sandy-2/'),
('http://ens-newswire.com/2012/10/28/new-york-city-evacuates-375000-ahead-of-hurricane-sandy-2/'),
('http://ens-newswire.com/2012/10/28/hawaii-tsunami-scare-follows-violent-canada-earthquake/'),
('http://ens-newswire.com/2012/10/28/hawaii-tsunami-scare-follows-violent-canada-earthquake/'),
('http://ens-newswire.com/2012/10/25/south-korea-will-host-the-green-climate-fund/'),
('http://ens-newswire.com/2012/10/25/south-korea-will-host-the-green-climate-fund/'),
('http://ens-newswire.com/2012/10/25/investors-worth-800-billion-lobby-for-wind-energy-tax-credit/'),
('http://ens-newswire.com/2012/10/25/investors-worth-800-billion-lobby-for-wind-energy-tax-credit/'),
('http://ens-newswire.com/2012/10/25/eight-dead-in-attack-on-virunga-national-park-rangers/'),
('http://ens-newswire.com/2012/10/25/eight-dead-in-attack-on-virunga-national-park-rangers/'),
('http://ens-newswire.com/2012/10/25/deadly-hurricane-sandy-blows-north-u-s-east-coast-on-alert/'),
('http://ens-newswire.com/2012/10/25/deadly-hurricane-sandy-blows-north-u-s-east-coast-on-alert/'),
('http://ens-newswire.com/2012/10/24/harpers-china-canada-deal-overrides-environmental-protections/'),
('http://ens-newswire.com/2012/10/24/harpers-china-canada-deal-overrides-environmental-protections/'),
('http://ens-newswire.com/2012/10/23/worlds-worst-pollution-problems-2012/'),
('http://ens-newswire.com/2012/10/23/worlds-worst-pollution-problems-2012/'),
('http://ens-newswire.com/2012/10/23/environmental-goups-ask-court-to-halt-fracking-in-california/'),
('http://ens-newswire.com/2012/10/23/environmental-goups-ask-court-to-halt-fracking-in-california/'),
('http://ens-newswire.com/2012/10/22/tar-sands-pipeline-protestors-swarm-british-columbia-legislature/'),
('http://ens-newswire.com/2012/10/22/tar-sands-pipeline-protestors-swarm-british-columbia-legislature/'),
('http://ens-newswire.com/2012/10/22/disney-rejects-paper-from-indonesian-rainforest-destruction/'),
('http://ens-newswire.com/2012/10/22/disney-rejects-paper-from-indonesian-rainforest-destruction/'),
('http://ens-newswire.com/2012/10/19/biodiesel-exhaust-linked-to-respiratory-illness/'),
('http://ens-newswire.com/2012/10/19/biodiesel-exhaust-linked-to-respiratory-illness/'),
('http://ens-newswire.com/2012/10/19/european-commission-would-limit-food-based-biofuels/'),
('http://ens-newswire.com/2012/10/19/european-commission-would-limit-food-based-biofuels/'),
('http://ens-newswire.com/2012/10/18/un-strategizes-to-fund-biodiversity-recovery-in-100-countries/'),
('http://ens-newswire.com/2012/10/18/un-strategizes-to-fund-biodiversity-recovery-in-100-countries/'),
('http://ens-newswire.com/2012/10/18/brazilian-president-vetoes-amnesty-for-illegal-logging/'),
('http://ens-newswire.com/2012/10/18/brazilian-president-vetoes-amnesty-for-illegal-logging/'),
('http://ens-newswire.com/2012/10/17/court-orders-first-handover-of-chevrons-ecuador-assets/'),
('http://ens-newswire.com/2012/10/17/court-orders-first-handover-of-chevrons-ecuador-assets/'),
('http://ens-newswire.com/2012/10/17/new-fuel-sipping-ford-plug-in-hybrid-erases-range-anxiety/'),
('http://ens-newswire.com/2012/10/17/new-fuel-sipping-ford-plug-in-hybrid-erases-range-anxiety/'),
('http://ens-newswire.com/2012/10/16/obama-romney-lock-horns-over-energy-environment/'),
('http://ens-newswire.com/2012/10/16/obama-romney-lock-horns-over-energy-environment/'),
('http://ens-newswire.com/2012/10/16/green-party-presidential-candidate-arrested-outside-debate-venue/'),
('http://ens-newswire.com/2012/10/16/green-party-presidential-candidate-arrested-outside-debate-venue/'),
('http://ens-newswire.com/2012/10/16/india-pledges-50-million-for-biodiversity-conservation/'),
('http://ens-newswire.com/2012/10/16/india-pledges-50-million-for-biodiversity-conservation/'),
('http://ens-newswire.com/2012/10/16/cell-phones-all-contain-toxics-older-ones-the-most-2/'),
('http://ens-newswire.com/2012/10/16/cell-phones-all-contain-toxics-older-ones-the-most-2/'),
('http://ens-newswire.com/2012/10/14/primates-vanishing-under-relentless-human-pressure/'),
('http://ens-newswire.com/2012/10/14/primates-vanishing-under-relentless-human-pressure/'),
('http://ens-newswire.com/2012/10/12/cost-to-save-all-at-risk-species-habitats-80-billion-a-year/'),
('http://ens-newswire.com/2012/10/12/cost-to-save-all-at-risk-species-habitats-80-billion-a-year/'),
('http://ens-newswire.com/2012/10/11/cell-phones-all-contain-toxics-older-ones-the-most/'),
('http://ens-newswire.com/2012/10/11/cell-phones-all-contain-toxics-older-ones-the-most/'),
('http://ens-newswire.com/2012/10/11/afghanistan-to-strengthen-climate-change-defenses/'),
('http://ens-newswire.com/2012/10/11/afghanistan-to-strengthen-climate-change-defenses/'),
('http://ens-newswire.com/2012/10/11/wyoming-site-approved-for-largest-u-s-wind-farm/'),
('http://ens-newswire.com/2012/10/11/wyoming-site-approved-for-largest-u-s-wind-farm/'),
('http://ens-newswire.com/2012/10/09/top-u-s-court-rejects-chevrons-appeal-in-ecuador-pollution-case/'),
('http://ens-newswire.com/2012/10/09/top-u-s-court-rejects-chevrons-appeal-in-ecuador-pollution-case/'),
('http://ens-newswire.com/2012/10/08/cash-flow-crisis-as-afghan-dam-crumbles/'),
('http://ens-newswire.com/2012/10/08/cash-flow-crisis-as-afghan-dam-crumbles/'),
('http://ens-newswire.com/2012/10/08/wolves-losing-ground-state-by-western-state/'),
('http://ens-newswire.com/2012/10/08/wolves-losing-ground-state-by-western-state/'),
('http://ens-newswire.com/2012/10/08/kentuckians-win-coal-giant-fake-reporting-water-pollution-case/'),
('http://ens-newswire.com/2012/10/08/kentuckians-win-coal-giant-fake-reporting-water-pollution-case/'),
('http://ens-newswire.com/2012/10/05/france-invests-50-million-euros-in-electro-mobility/'),
('http://ens-newswire.com/2012/10/05/france-invests-50-million-euros-in-electro-mobility/'),
('http://ens-newswire.com/2012/10/05/texas-grandma-jailed-for-trespass-on-her-own-land-in-pipeline-pro'),
('http://ens-newswire.com/2012/10/05/texas-grandma-jailed-for-trespass-on-her-own-land-in-pipeline-pro'),
('http://ens-newswire.com/2012/10/03/debate-obama-backs-green-energy-romney-backs-black/'),
('http://ens-newswire.com/2012/10/03/debate-obama-backs-green-energy-romney-backs-black/'),
('http://ens-newswire.com/2012/10/03/haiti-bans-plastic-bags-and-foam-containers/'),
('http://ens-newswire.com/2012/10/03/haiti-bans-plastic-bags-and-foam-containers/'),
('http://ens-newswire.com/2012/10/03/sewage-troubles-in-havana/'),
('http://ens-newswire.com/2012/10/03/sewage-troubles-in-havana/'),
('http://ens-newswire.com/2012/10/03/unexploded-bombs-menace-busy-gulf-of-mexico/'),
('http://ens-newswire.com/2012/10/03/unexploded-bombs-menace-busy-gulf-of-mexico/'),
('http://ens-newswire.com/2012/10/02/poll-dems-gop-swing-voters-all-smile-on-solar-power/'),
('http://ens-newswire.com/2012/10/02/poll-dems-gop-swing-voters-all-smile-on-solar-power/'),
('http://ens-newswire.com/2012/10/02/u-s-supreme-court-leaves-roadless-rule-standing/'),
('http://ens-newswire.com/2012/10/02/u-s-supreme-court-leaves-roadless-rule-standing/'),
('http://ens-newswire.com/2012/10/01/obama-to-designate-cesar-e-chavez-national-monument/'),
('http://ens-newswire.com/2012/10/01/obama-to-designate-cesar-e-chavez-national-monument/'),
('http://ens-newswire.com/2012/10/01/feds-update-truth-in-advertising-guides-for-green-marketing/'),
('http://ens-newswire.com/2012/10/01/feds-update-truth-in-advertising-guides-for-green-marketing/'),
('http://ens-newswire.com/2012/10/01/typhoon-hits-japan-as-nuclear-plant-construction-resumes/'),
('http://ens-newswire.com/2012/10/01/typhoon-hits-japan-as-nuclear-plant-construction-resumes/'),
('http://ens-newswire.com/2012/09/29/states-fail-to-enforce-their-own-oil-gas-rules/'),
('http://ens-newswire.com/2012/09/29/states-fail-to-enforce-their-own-oil-gas-rules/'),
('http://ens-newswire.com/2012/09/29/peanut-and-almond-butters-recalled-for-salmonella/'),
('http://ens-newswire.com/2012/09/29/peanut-and-almond-butters-recalled-for-salmonella/'),
('http://ens-newswire.com/page/2/'),
('http://ens-newswire.com/about/'),
('http://ens-newswire.com/mission-statement/'),
('http://ens-newswire.com/category/air-climate/'),
('http://ens-newswire.com/category/at-risk/'),
('http://ens-newswire.com/category/opinions/'),
('http://ens-newswire.com/category/business-and-sports/'),
('http://ens-newswire.com/category/energy/'),
('http://ens-newswire.com/category/food/'),
('http://ens-newswire.com/category/land-use/'),
('http://ens-newswire.com/category/oceans/'),
('http://ens-newswire.com/category/transport/'),
('http://ens-newswire.com/category/waste/'),
('http://ens-newswire.com/category/water/'),
('http://ens-newswire.com/category/wildlife/'),
('http://www.ens-newswire.com/');

-- --------------------------------------------------------

--
-- Table structure for table `disabled`
--

CREATE TABLE IF NOT EXISTS `disabled` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ngo` text NOT NULL,
  `cause` text NOT NULL,
  `max_amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `disabled`
--

INSERT INTO `disabled` (`id`, `ngo`, `cause`, `max_amount`) VALUES
(1, 'HelpAge India\r\ncontact: Prakash Borgaonkar\r\n9821224513\r\nprakash.borgaonkar@helpag\r\neindia.org', 'HelpAge India''s mission is to work for the cause and care of \r\ndisadvantaged older persons and to make them aware of their own \r\nrights so that they get their due and are able to play an active role in \r\nsociety.T', 50000),
(2, 'National Society for \r\nEqual Opportunities \r\nfor the \r\nHandicapped India\r\ncontact: Yogendra S.Shetty\r\n9820107848\r\nnaseoh@vsnl.com', 'The NGO strives to create comprehensive rehabilitation opportunities \r\nfor the differently-abled persons.', 40000),
(3, 'Network in Thane \r\nby People Living \r\nwith HIV\r\ncontact:Ashok Dhokale\r\n9224747972\r\nntpplus@gmail.com', 'The NGO works for the benefit of the people infected and affected with \r\nHIV', 25000),
(4, 'OM Creations Trust\r\ncontact:Hoshang Chacha \r\n9820145825\r\nomcreationstrust@gmail.com', 'The trust is a platform for developmentally challenged women to learn, \r\nbe free and earn their living themselves', 15000),
(5, 'Rising Star \r\nOutreach of India\r\ncontact: Rondell Hanson\r\n9176660096\r\nrondell@cox.net', 'Rising Star Outreach of India aims to help the Leprosy colonies \r\nbecome thriving, self-sufficient communities. ', 5000),
(6, 'Reform Image \r\nGroup\r\ncontact:Amitabh Kumar\r\n9820285451\r\nrigmumbai@vsnl.net', 'RIG aims to serve and enrich the quality of life of the poor, indigent \r\nandunderprivileged people.', 500);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE IF NOT EXISTS `donation` (
  `S.NO.` int(11) NOT NULL,
  `NGO` text NOT NULL,
  `Cause` text NOT NULL,
  `Amount` int(11) NOT NULL,
  PRIMARY KEY (`S.NO.`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `elementcomment`
--

CREATE TABLE IF NOT EXISTS `elementcomment` (
  `type` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `comment` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elementcomment`
--

INSERT INTO `elementcomment` (`type`, `id`, `email`, `comment`, `time`) VALUES
(1, 1, 'ankit', 'asdgfhghjkl', '2012-11-05 10:36:54'),
(1, 1, 'rajul', 'asdfbgfxzcdgb', '2012-11-05 10:36:54'),
(1, 1, 'ankit', 'hello there', '2012-11-05 11:07:17'),
(1, 1, 'ankit', 'undefined', '2012-11-05 11:10:09'),
(1, 1, 'ankit', 'undefined', '2012-11-05 11:10:21'),
(1, 1, 'ankit', 'jhgfds', '2012-11-05 11:10:35'),
(1, 2, 'ankit', 'jhgd', '2012-11-05 11:11:25'),
(1, 3, 'ankit', 'undefined', '2012-11-05 11:50:24'),
(1, 3, 'ankit', 'adszdcgbh', '2012-11-05 11:50:36'),
(1, 3, 'ankit', 'ankitankit', '2012-11-05 12:46:40');

-- --------------------------------------------------------

--
-- Table structure for table `elements`
--

CREATE TABLE IF NOT EXISTS `elements` (
  `type` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `topic` text NOT NULL,
  PRIMARY KEY (`id`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elements`
--

INSERT INTO `elements` (`type`, `id`, `topic`) VALUES
(1, 1, 'Biodiversity of Earth Richest Plant Kingdom Under Fire'),
(2, 1, 'Climate Change Evident Across Europe, Confirming Urgent Need for Adaptation'),
(3, 1, 'Fish Thrive on Danish Offshore Wind Farm'),
(4, 1, 'Half of Great Barrier Reef Gone'),
(5, 1, 'Bats Not Just for Halloween'),
(6, 1, 'The legal and regulatory framework for Environment'),
(8, 1, 'How to renovate in an Eco-Friendly Way'),
(9, 1, 'Simple and Big Changes to Make Your Home Eco-Friendly'),
(10, 1, 'Energy efficiency'),
(1, 2, 'Half of Great Barrier Reef Gone'),
(2, 2, '2012 Noctilucent Cloud Season Begins'),
(3, 2, 'Predicting Wave Power Could Double Marine Energy'),
(4, 2, 'Tropical Reefs and Environmental Stresses'),
(5, 2, 'All the Birds in All the Trees'),
(6, 2, 'Legislation for environmental protection in India'),
(8, 2, '10 Ways to Green Transportation This School Year'),
(9, 2, 'Goals of green building'),
(10, 2, 'ELCOMA JOINS SUSTAINABLE DEVELOPMENT INITIATIVE WITH GLOBAL MESSE FRANKFURT'),
(1, 3, 'World Habitat Day'),
(2, 3, 'Step Forward Carbon Offsets Mitigate CO2 Emissions: Good Carbon and Good Karma'),
(3, 3, 'Renewables Accounted for 62% of New EU Electricity Generation Capacity in 2009'),
(4, 3, 'Water in the City'),
(5, 3, 'Human Population and the Future of Diversity'),
(6, 3, 'Forests and wildlife'),
(8, 3, 'New study links autism to traffic pollution'),
(9, 3, 'Introduction'),
(10, 3, 'NGO India 2012, a unique concept on an exposition platform'),
(1, 4, 'South Pacific Coconut Gene Bank Under Threat'),
(2, 4, 'Anatomy of a Thunderstorm'),
(3, 4, 'Petroleum Demand in Developing Countries'),
(10, 4, 'POWER-GEN India and Central Asia 2013'),
(1, 5, 'Protected Areas Have Increased to Cover One Fifth of Europes Land'),
(3, 5, 'Petroleum Demand in Developing Countries'),
(1, 6, 'ankit');

-- --------------------------------------------------------

--
-- Table structure for table `environment`
--

CREATE TABLE IF NOT EXISTS `environment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ngo` text NOT NULL,
  `cause` text NOT NULL,
  `max_amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `environment`
--

INSERT INTO `environment` (`id`, `ngo`, `cause`, `max_amount`) VALUES
(1, 'Indian NGOs Working For Saving the Environment\r\nAddress : General Secretary\r\nAssam Science Society, Latsil\r\nLamb Road\r\nGuwahati - 781 001\r\nAssam', 'Saving Environment', 50000),
(2, 'Academy For Mountain Environics (AME)\r\nContact Person - Shri Ram Murti Sreedhar, Director\r\nAddress :111/2-1, Rajpur Road, Dehradun\r\nDehradun, Uttar Pradesh, 248001\r\nPhone - (0135) 747304', 'Saving Mountains', 45000),
(3, 'Action For Agricultural Renewal In Maharashtra (AFARM)\r\nContact Person - Mr. M. N. Kondhalkar, Executive Officer\r\nAddress : 2/23, A-B, Raisoni Park, Marketyard\r\nPune, Maharashtra, 411037\r\nPhone - (0212) 464641 , Fax - 466303', 'Saving Agricultural Area ', 40000),
(4, 'Action For Sustainable Developement & Awareness Society (ASDA)\r\nContact Person - Ms. Vinod Bala Sharma, Secretary\r\nAddress :20, Malviya Marg, Rishikesh\r\nDehradun, Uttar Pradesh, 249201', 'Sustainable Developement & Awareness Society', 35000),
(5, 'Action For Welfare & Awakening In Rural Environment (AWARE)\r\nContact Person - Mr. P.K.S. Madhavan, Chairman\r\nAddress : 5-9-24/78, Lake Hill Road, Hyderabad\r\nHyderabad, Andhra Pradesh, 500002\r\nPhone - (040) 236311, 235949 , Fax - 236369\r\nE-mail - aware@hd1.vsnl.net.in\r\n', 'Welfare & Awakening In Rural Environment', 25000),
(6, 'All India Centre For Urban And Rural Development (AICURD)\r\nContact Person - Mr. D. P. Ray, Patron\r\nAddress :16, Bhai Veer Singh Marg, Gole Market, New Delhi\r\nNew Delhi, Delhi, 110001\r\nPhone - (011) 3346311, 3360970', 'Urban And Rural Development ', 15000),
(7, 'All India Environmental Society\r\nContact Person - Prof. S. P. Grover, Secretary\r\nAddress :3-Curzon Road\r\nDehradun, Uttar Pradesh, 248001\r\nPhone - (0135) 651805, 652426', 'Saving Environment', 10000),
(8, 'Association Of Organisations On Nature And Environment (A-ONE)\r\nContact Person - Ms. Sujata S. General Secretary\r\nAddress :A-15, Paryavaran Complex, South of Saket, New Delhi\r\nNew Delhi, Delhi, 110030\r\nPhone - (011) 6515081 , Fax - 6967514\r\nE-mail - ecology@nda.vsnl.net.in', 'Nature And Environment ', 5000),
(9, 'It''s Your Earth', 'Saving Earth', 500);

-- --------------------------------------------------------

--
-- Table structure for table `health`
--

CREATE TABLE IF NOT EXISTS `health` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ngo` text NOT NULL,
  `cause` text NOT NULL,
  `max_amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `health`
--

INSERT INTO `health` (`id`, `ngo`, `cause`, `max_amount`) VALUES
(1, 'St Jude India Childcare Centres', 'Sponsor the daily transport cost of our children from Parel Centre to Tata Memorial Hospital', 50000),
(2, 'Society For Women’s Education Economic Development (SWEED)', 'Supplementary nutrition and medical care for a chronically ill HIV/Aids and TB co- infected person on ART Drugs for six months', 40000),
(3, 'ASHWINI', 'Support a fund for dental care of tribals at Gudalur Adivasi Hospital', 30000),
(4, 'Spurthi Mahila Mandal (Bijapur)', 'Sponsor basic health care and nutrition for a poor T.B/ HIV ailing person for a month', 20000),
(5, 'Blind People''s Association, India', 'Sponsor a Cataract Surgery (one eye) for a very poor elderly person ', 10000),
(6, 'Sapna', 'Contribute towards costs of running a Public Health Care Centre say (PHCC) for the rural poor', 5000),
(7, 'It''s your earth', 'treatment for poor people', 500);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `email` varchar(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `pswrd` varchar(250) NOT NULL,
  `dob` date DEFAULT NULL,
  `mobile` bigint(11) DEFAULT NULL,
  `ques` varchar(250) NOT NULL,
  `ans` varchar(250) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `name`, `pswrd`, `dob`, `mobile`, `ques`, `ans`) VALUES
('admin', 'ankit', 'ankit222rar', '1992-08-19', 9911056604, 'Your Project??', 'minor'),
('ankit', 'ankit', 'ankit', '1992-08-19', 9911056604, 'clg name??', 'jiit'),
('ankit1000', 'ankit', 'ankit', '1992-08-19', 9911056604, 'pet name??', 'rajul'),
('ankitgarg', 'a', 'a', '0000-00-00', 9911056604, 'What was your childhood nickname?', 'a'),
('asd', 'asd', 'asd', '1989-07-05', 9911056604, 'What was your childhood nickname?', 'ghj'),
('rajat', 'rajat', 'rajat', '1991-10-28', 9911056608, 'qwedfwdcsa?', 'dsfc'),
('rajul', 'rajul', 'rajul', '1992-09-06', 9947483647, 'afsf', 'asd'),
('rajul kuk', 'a', 'a', '0000-00-00', 111111111, 'What was your childhood nickname?', 'aqx'),
('test', 'test', 'test', '2012-12-08', 9874563210, '', ''),
('vaibhudgr8', 'vaibhav', 'vaibhu', '1992-01-19', 7838369221, 'What was your childhood nickname?', 'vaibhu');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news` text NOT NULL,
  `discription` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news`, `discription`) VALUES
(1, 'new news', 'adding new news to test software'),
(2, 'Children s Environmental Health & Environmental Justice Champion', ' “WebMD health heroes are inspiring individuals who encourage health and wellness in each of their communities,” Clare Martorana, Editor in Chief of WebMD the Magazine said in a press release. “We are excited to celebrate their continued achievements and support their goals to make an impact in the lives of those facing their own health challenges.”\n\nRobina Suwol s  efforts began in 1998 with the Los Angeles Unified School District (2nd largest school district in the nation), where she  spearheaded groundbreaking efforts to protect the health of  children  and vulnerable communities throughout California and the  nation. The diverse children’s coalition she founded, California  Safe Schools  (www.calisafe.org) includes more than fifty  organizations.\n\nCSS began one  day in March, 1998, when grade school students encountered an LAUSD gardener in a hazardous materials suit who was spraying the herbicide Princep. The students ended up walking through a cloud of  pesticide mist on their way to their classrooms.\n\nSeveral parents who had dropped off their children at the school  were alarmed to witness this event. One of them was Robina Suwol,   whose sons, ages six and ten, were forced to walk directly through the cloud.   Later, her youngest son, Nicholas, whose asthma had been under   control, experienced a severe asthma attack. Robina’s research on a  Cornell University website revealed that a single exposure to   Princep could cause tremors, convulsions, paralysis, and other   symptoms.\n\nWith no litigious motives, only a desire to protect students,   teachers, staff and residents near school sites, Robina led  parents  to investigate. They learned that many chemical pesticides  commonly  used in schools posed risks to growing  children, including risks of cancer and learning disabilities\n\nWith the support of the School Board, a committee was formed. One year to the date that Nicholas became ill, California Safe Schools and LAUSD created the most stringent pesticide policy in the nation  for schools. The policy was the first in the USA that embraced the  "Precautionary Principle" and "Parents Right to Know" regarding   pesticides in schools. To ensure implementation, a fifteen-member  oversight committee was formed. The committee meets monthly and  members include parents, community members, and environmentalists.\n\nThe success of the policy led to California legislation, the Healthy  Schools Act 2000, and AB 405, which was spearheaded by Robina and California  Safe Schools. This latter law prevents experimental , conditional or phased  out pesticides  from being   used on any K-12 California public school campus. As a result, 6 million  students, and hundreds of thousands of teachers and school  employees,  are protected. These efforts have had enormous success  and become a model for protecting  human health and the environment, not only in California  but throughout the nation and internationally. On March 30, 2012,  California Safe Schools celebrated fourteen years of  success..\n\n"It was a tremendous honor to be recognized by WebMD, and  we greatly appreciate their  generous  $2500. donation  to California Safe Schools," Suwol says, "As rates of childhood cancer, asthma, neurological disorders, endocrine and hormonal disorders and birth defects increase, there is no better time than now to protect our children s health.”\n\nOther 2012 WebMD Health Heroes:\n\nBonnie Addario, a lung cancer survivor and founder of the Bonnie J. Addario Foundation\n\nRichard and Debra Siravo, who established  the Matthew Siravo Memorial Foundation – The Matty Fund – a nonprofit that provides services to children and families affected by epilepsy\n\nBonnie Stehr, a founder of the 90–day Olympic Weight Loss Challenge, a community-wide weight loss competition complete with cash prizes and fund-raising for charity.'),
(3, 'Loss of Arctic Sea Ice Linked to Global Weather Changes', 'The extent of Arctic sea ice hit a dramatically new record low this summer, as a melting trend attributed to global warming continues a downward trend.\r\n\r\nWhile the Arctic melt is one of the clearest signs of climate change recorded, the effects are remote to most people who aren t following trends in polar bear populations (downward) or the potential for new offshore oil drilling (upward). That changes with a new study from the National Oceanographic and Atmospheric Administration that correlated a shift in wind patterns across Europe and North America with the loss of Arctic sea ice over the past six years.\r\n\r\n\r\nRead more: http://www.thedailygreen.com/environmental-news/latest/arctic-melting-weather-patterns-1210#ixzz2DXlzuGF3\r\n'),
(4, 'Study Links Lead, Mercury Exposure to ADHD', 'Children exposed to higher levels of mercury or lead are three to five times more likely to be identified by teachers as having problems associated with Attention Deficit Hyperactivity Disorder, according to a scientific study published recently.\r\n\r\nThe study – of Inuit children living in Arctic Quebec – is the first to find a high rate of attention-deficit symptoms in children highly exposed to mercury in the womb. In addition, the Inuit children more often had hyperactivity symptoms if they were exposed to the same low levels of lead commonly found in young U.S. children.\r\n\r\n\r\nRead more: http://www.thedailygreen.com/healthy-eating/eat-safe/adhd-lead-mercury-1209#ixzz2DXmfNd66\r\n'),
(5, 'Multivitamin Food: Avoid Pills with These Nutrient-Dense Foods', 'As a nutritionist, there are certain things I know from research studies and textbooks. There are other pieces of information I have gathered from personal experience. My view on vitamins is a combination of the two; I can tell you the approximate suggested daily values for most nutrients but wholeheartedly support solid food over supplements, chard versus calcium, eggs versus Vitamin E – you get the picture. When The Daily Green forwarded me a reader s query whether we could get the RDA for nutrients from our foo\r\n\r\nRead more: http://www.thedailygreen.com/healthy-eating/eat-safe/multivitamin-food-0708#ixzz2DXmM8aPA\r\n'),
(6, 'Carving a Jack-o-Lantern this Weekend? Here s How to Cook the Pumpkin Goop!', '"Jeff, can t we at least celebrate the holiday before you eat the decorations?" I ve heard that more than once from my long-suffering wife during our 26-year marriage.\r\n\r\nRead more: http://www.thedailygreen.com/living-green/blogs/save-money/pumpkin-recipes-461009#ixzz2DXmW67Zn\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `sitemap`
--

CREATE TABLE IF NOT EXISTS `sitemap` (
  `links` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sitemap`
--

INSERT INTO `sitemap` (`links`) VALUES
('index.html'),
('index.Html'),
('Bhome.html'),
('./element.html?element=1'),
('./element.html?element=2'),
('./element.html?element=3'),
('./element.html?element=4'),
('./element.html?element=5'),
('./element.html?element=5'),
('about.html'),
('Bhome.html'),
('Greentube.html'),
('elements.php?tab=news&id='''''),
('donation/donation.html'),
('volunteer.html'),
('start.html'),
('Theme.html'),
('./element.html?element=1'),
('element.html?element=2'),
('element.html?element=3'),
('element.html?element=4'),
('element.html?element=5'),
('element.html?element=6'),
('greentube.html'),
('element.html?element=8'),
('element.html?element=9'),
('element.html?element=10'),
('about.html'),
('sitemap.php'),
('Index.html'),
('./index.html');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `name` text,
  `fileloc` text NOT NULL,
  `desc` text,
  `tym` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `name`, `fileloc`, `desc`, `tym`) VALUES
(1, 'Human Impact On The Environment', 'http://www.youtube.com/watch?v=0zPcR7wgh0c', 'Video about the influence that humans have and are having on our planet.', '2012-11-26 11:31:16'),
(2, 'President Obama Speaks to Environmental Protection Agency Staff', 'http://www.youtube.com/watch?v=Ro84d4RUtoc', 'President Obama thanks the staff of the Environmental Protection', '2012-11-26 11:31:16'),
(3, '10 ways to "GO GREEN"', 'http://www.youtube.com/watch?v=kS6JN67DWtc', 'here are the 10 top ways to go green. hope you enjoy!', '2012-11-05 13:03:13'),
(4, 'Go Green Campaign.', 'http://www.youtube.com/watch?v=qS8-XInj_qg', 'I created a character named Mimi, a young girl with passion of to go green', '2012-11-05 13:03:13'),
(5, 'Go Green', 'http://www.youtube.com/watch?v=Gtx4DrpCNsg', 'Fore More Info Visit : ? www.2links.info www.2links.info/earth4energy', '2012-11-05 13:27:21'),
(6, 'Going Green: Supernews', 'http://www.youtube.com/watch?v=_hPcPEeB_Ok', 'A wannabe environmentalist just doesn''t get it. VIEW more SuperNews!', '2012-11-05 13:27:21'),
(7, 'Save Environment....3-A Short Skit  Prakriti Bachaao ', './files/videonews/Save Environment.mp4', 'This is a simple short skit I wrote to convey our message of  Save Environment . Many thanks to Dr.(Mrs.) Ila Prakash, Mrs. Vasudha Seth and Mrs. Ritu Singh for taking part in this skit and my mother Dr.(Mrs.) Meera Verma for a giving a very informative conclusion....All of us are not actors and performing for the first time so kindly forgive and overlook our mistakes and just concentrate on the message....Thanks a lot for sparing your precious time...Save Environment Save Earth Save Life......', '2012-11-04 19:21:15'),
(8, 'Green-Zip Tape | Reusable Drywall Partition Tape', 'http://www.youtube.com/watch?v=CV190OfM-QE', 'http://commercialenergyadvantage.com | Get the Commercial Energy Advantage that only Green-Zip Tape can give your commercial building project by using "Reusable Drywall Partition Tape".', '2012-11-26 20:04:34'),
(9, 'HELP SAVE EARTH', './files/videonews/HELP SAVE EARTH.mp4', '## HERE S SOME WAYS ON HOW YOU CAN HELP THE ENVIRONMENT ##\r\n\r\n###GROWN-UP THING###\r\n\r\n\r\n1. Turn off lights, computers and other appliances when not in use.\r\n2. Plant trees to shade your home.\r\n3. Use compact fluorescent light bulbs to save money and energy.\r\n4. Report smoking vehicles to your local air agency.\r\n5. Don t use your wood stove or fireplace when air quality is poor.\r\n6. Avoid slow-burning, smoldering fires. They produce the largest amount of pollution.\r\n7. Walk or ride your bike instead of driving, whenever possible.\r\n8. Check and fix any water leaks.\r\n9. Don t wash dishes with the water running continuously.\r\n10. Never dump anything down a storm drain.\r\n\r\n\r\n###HERE S WHATM CHILDREN CAN DO###\r\n\r\n1. Throw trashes on the proper trash bin.\r\n2. Turn off the light/lamp/computer and the plug-ins in your room when not in use.\r\n3. Walk or ride your bike to scholl so that you won t waste fuel on your car.\r\n4. Turn off the faucet when not in use Ex. When brushin teeth, don t leave water on the faucet running continuously.\r\n5. Save trees, which are used to make paper, by using a lunch pail, rather than a paper bag each day.\r\n6. Pick up litter that you see in your neighborhood and recycle whatever can be recycled - aluminum cans, glass, paper, cardboard, plastic things.\r\n7. Use both sides of a piece of paper when drawing, coloring or writing.\r\n\r\n##HERE ARE SOME THINGS YOU&YOUR FAMILY CAN DO TOGETHER###\r\n\r\n1. Use paper shopping bags, rather than plastic, and reuse them at the market. Keep a supply in your car, so you have them with you when you stop at the store.\r\n2.Pay attention to the packaging of the products you buy and buy things that come in containers that can be recycled or reused.\r\n2. When possible, bring fruits and vegetables home unwrapped, rather than in plastic bags.\r\n3. Recycle aluminum, glass, newspapers, cardboard and plastic containers.\r\n4. Use water-saving devices on toilets, shower heads and faucets.\r\n5. Carpool whenever possible. When you can, walk, ride a bike, or use public transportation.\r\n6. Plant trees in your yard.\r\n7. Diaper babies in cloth diapers, which can be used again and again.\r\n8. In the winter, keep your thermostat lower and wear a sweater. In the summer, be a little warmer than you are used to. Let the air conditioner rest, and let your body use its thermostat.', '2012-11-28 07:41:00'),
(10, 'save our environment', './files/videonews/save our environment.mp4', 'save our environment\r\nThere are cultures in the world that haven t adopted the ways of the west so they are more naturally in harmony with their environments.So to me it seems that we should mimic the cultures that are degradating the environment the less.Most? people don t understand the real agenda behind going green.I feel that people are helping a system that is unjust sustain itself.', '2012-11-28 07:41:06'),
(13, 'Blue in Green by. Miles Davis', 'http://www.youtube.com/watch?v=PoPL7BExSQU&feature=fvst', 'xzdfgbxzdfgbxzdfgbxzdfgbxzdfgbxzdfgbxzdfgbxzdfgbxzdfgbxzdfgbxzdfgbxzdfgbxzdfgbxzdfgbxzdfgbxzdfgbxzdfgbxzdfgbxzdfgbxzdfgbxzdfgbxzdfgbxzdfgbxzdfgbxzdfgbxzdfgbxzdfgb', '2012-11-29 06:07:36');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE IF NOT EXISTS `volunteer` (
  `id` int(11) NOT NULL,
  `ngo` text NOT NULL,
  `work` text NOT NULL,
  `days` int(11) NOT NULL,
  `date` date NOT NULL,
  `location` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `ngo`, `work`, `days`, `date`, `location`) VALUES
(0, 'All People Together(Formerly \r\nThe Spastics Societ...', 'ADAPT endeavours to provide equal opportunities', 10, '2012-11-30', 'Delhi'),
(1, 'Amcha Ghar\r\nContact:Susheela Singh\r\n9892270729\r\nam...', 'Amcha Ghar, a home for girls', 12, '2012-11-30', 'Mumbai'),
(2, 'Apnalaya\r\nContact : Leena Joshi\r\n9892632224\r\ndirec...', 'An NGO founded in 1972 to help children', 20, '2012-12-30', 'Kolkata'),
(3, 'M.Venkatarangaiya Foundation', 'to help children', 12, '2012-11-30', 'Jaipur'),
(4, 'Pratham:Universalisation of Primary Education', 'Every child in school and learning well', 21, '2012-12-11', 'Kolkata'),
(5, 'PCVC (Pratham Council for Vulnerable Children)', 'Vulnerable Children', 31, '2012-12-19', 'Delhi'),
(6, 'All People Together(Formerly \r\nThe Spastics Societ..', 'ADAPT endeavours to provide equal opportunities', 23, '2012-12-11', 'Mumbai'),
(7, 'Amcha Ghar\r\nContact:Susheela Singh\r\n9892270729', 'Amcha Ghar, a home for girls', 15, '2012-12-25', 'Jaipur'),
(8, 'All People Together(Formerly \r\nThe Spastics Societ...', 'ADAPT endeavours to provide equal opportunities', 5, '2013-03-29', 'Delhi'),
(9, 'Apnalaya\r\nContact : Leena Joshi\r\n9892632224', 'An NGO founded in 1972 to help children', 7, '2013-11-30', 'Mumbai'),
(10, 'M.Venkatarangaiya Foundation', 'to help children', 15, '2013-11-12', 'Jaipur'),
(11, 'Pratham:Universalisation of Primary Education', 'Every child in school and learning well', 15, '2013-11-14', 'Kolkata');

-- --------------------------------------------------------

--
-- Table structure for table `whyvol`
--

CREATE TABLE IF NOT EXISTS `whyvol` (
  `whyvol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `whyvol`
--

INSERT INTO `whyvol` (`whyvol`) VALUES
('\r\nrajat jain'),
('\r\nrajat jain'),
('\r\nrajat jain'),
('\r\nrajat jain'),
('\r\nsdadsda'),
('\r\nrajat'),
('efssefsd'),
(''),
('rajul the great'),
('dsadassadassd'),
('rajul'),
('nknsdknkn'),
(''),
(''),
(''),
('');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`email`) REFERENCES `login` (`email`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`email`) REFERENCES `login` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
