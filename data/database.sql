-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2016 at 06:35 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teemw`
--

-- --------------------------------------------------------

--
-- Table structure for table `carrier`
--

CREATE TABLE `carrier` (
  `user_id` int(11) DEFAULT NULL,
  `street_name` varchar(100) DEFAULT NULL,
  `street_number` int(10) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `radius` int(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `id` int(11) NOT NULL,
  `from_user` int(11) DEFAULT NULL,
  `to_user` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `additional_info` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `log` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `offer` varchar(100) DEFAULT NULL,
  `start_street` varchar(200) NOT NULL,
  `start_zip_code` int(4) NOT NULL,
  `start_place` varchar(200) NOT NULL,
  `destination_street` varchar(200) NOT NULL,
  `destination_zip_code` int(4) NOT NULL,
  `destination_place` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `offer_type` varchar(4) NOT NULL,
  `fields` text NOT NULL,
  `date` date NOT NULL,
  `state` int(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `user_id`, `offer`, `start_street`, `start_zip_code`, `start_place`, `destination_street`, `destination_zip_code`, `destination_place`, `description`, `offer_type`, `fields`, `date`, `state`) VALUES
(2, 4, 'Test offer', 'Gampinenstrasse 6', 3952, 'Susten', 'Sustenstrasse 35', 3950, 'Leuk', 'Terst', 'dem', '{"boxes":"12","small_furniture":"1","middle_furniture":"2","big_furniture":"4"}', '2016-07-03', 1),
(3, 7, 'Offre normal', 'Gampinenstrasse 6', 3952, 'Susten', 'Sebastiansplatz 4', 3900, 'Brig', 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. ', 'veh', '{"brand":"VW","model":"Polo","length":"2.5","width":"1.5","height":"1.8","wheight":"1200kg","number":"1"}', '2016-07-12', 1),
(5, 7, 'Autoschieber', 'Gampinenstrasse 6', 3952, 'Susten', 'Rue de la Plaine 2', 3960, 'Sierre', 'Autoschieber gesucht\r\n\r\nBezahlung nach Auftrag', 'per', '{"number":"15","bags":"2","mob_red":"1"}', '2016-07-29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `offer_communication`
--

CREATE TABLE `offer_communication` (
  `offer_communication_id` int(11) NOT NULL,
  `offer_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `send_datetime` datetime NOT NULL,
  `is_notified` int(11) NOT NULL DEFAULT '0',
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer_communication`
--

INSERT INTO `offer_communication` (`offer_communication_id`, `offer_id`, `from_user_id`, `to_user_id`, `send_datetime`, `is_notified`, `text`) VALUES
(1, 5, 4, 7, '2016-07-05 06:28:21', 1, 'Ich wÃ¤re intressiert, melden Sie sich bei mir.'),
(3, 5, 7, 4, '2016-07-06 16:24:23', 1, 'Melde mich sobald wie mÃ¶glich\r\n\r\nWelchen Preis stellen Sie sich vor?'),
(5, 5, 5, 7, '2016-07-01 13:26:17', 1, 'Hey, send me a PM about the price'),
(6, 5, 5, 7, '2016-07-01 13:26:17', 1, 'Hey, send me a PM about the price'),
(7, 5, 7, 5, '2016-07-04 08:29:18', 0, 'About 500CHF'),
(8, 5, 7, 5, '2016-07-04 08:29:18', 0, 'About 500CHF'),
(9, 5, 7, 4, '2016-07-07 06:20:38', 1, 'WTF First Test'),
(10, 5, 4, 7, '2016-07-07 06:21:13', 1, 'wtf first test too'),
(11, 5, 4, 7, '2016-07-07 06:32:48', 0, 'Still working');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `tel` varchar(100) COLLATE utf8_bin NOT NULL,
  `first_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `last_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `address` varchar(200) COLLATE utf8_bin NOT NULL,
  `zip_code` int(8) NOT NULL,
  `street` varchar(100) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `tel`, `first_name`, `last_name`, `address`, `zip_code`, `street`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(3, 'benjamin', '$2a$08$0YfmPSRZMzptFHszo3k66.EuyAOSR0V6EVWT4fe60YYW/iuovX/rC', 'mathieu.b93@gmail.com', '079 266 25 26', '', '', '', 0, '', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2016-04-09 12:34:52', '2016-04-09 10:21:23', '2016-07-07 00:13:14'),
(4, 'amaran', '$2a$08$sJYeuedcUxuAZF4IOdVjHOfe5TZPfJ2glti9bzT4HseKCWzcRyni.', 'elsio.coelho@gmail.com', '+4179 712 43 56', 'Elsio', 'Coelho', 'Susten', 3952, 'Gamp 6', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2016-07-07 06:03:37', '2016-04-09 11:04:16', '2016-07-07 04:03:37'),
(5, 'Billy', '$2a$08$PhFXkksSqrgBFNZggw3fCuBTVm6jYwtwdjrt/8DN4Yr73mSjCu6ZK', 'billy@boy.ch', '0274733600', 'Hans', 'Wurst', 'Leuk', 3953, 'Sonnhalde 4', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '0000-00-00 00:00:00', '2016-04-23 12:24:32', '2016-07-07 03:31:31'),
(6, 'test', '$2a$08$iKGiHq9d8bgfZXR0NC4W3.xynOaKuKVw/DxJk67lfKpxlDWpVy452', 'benjamin.mathieu@indual.ch', '+49792662526', '', '', 'Susten', 3952, 'Gampinen', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2016-05-27 15:26:26', '2016-05-19 02:44:14', '2016-05-27 13:26:26'),
(7, 'mathieu', '$2a$08$vnNWoRqbeLL1quW2.t1fz.jmz5.nFtbN3lT49F2I3fNwAqoTJVG6i', 'c715339@mvrht.com', '+4179 266 25 26', 'Benjamin', 'Mathieu', 'Susten', 3952, 'Gampinenstrasse 6', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2016-07-06 20:22:04', '2016-07-05 20:44:29', '2016-07-07 00:16:14');

-- --------------------------------------------------------

--
-- Table structure for table `user_autologin`
--

CREATE TABLE `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `country`, `website`) VALUES
(1, 3, NULL, NULL),
(2, 4, NULL, NULL),
(3, 5, NULL, NULL),
(4, 6, NULL, NULL),
(5, 7, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_communication`
--
ALTER TABLE `offer_communication`
  ADD PRIMARY KEY (`offer_communication_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_autologin`
--
ALTER TABLE `user_autologin`
  ADD PRIMARY KEY (`key_id`,`user_id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `offer_communication`
--
ALTER TABLE `offer_communication`
  MODIFY `offer_communication_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
