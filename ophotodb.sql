-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 24, 2016 at 02:51 AM
-- Server version: 5.5.41-log
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ashlyn_ophotodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE IF NOT EXISTS `collections` (
  `CollectionID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `UserID` int(11) NOT NULL,
  `CollectionDate` date DEFAULT NULL,
  `Description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`CollectionID`, `UserID`, `CollectionDate`, `Description`) VALUES
('Marvin Wedding', 1, '2016-04-21', 'Photos from the Marvin wedding.'),
('Meevers Wedding', 1, '2016-04-22', 'Photos from the Meever wedding.'),
('Newbies', 1, '2016-04-15', 'A collection of newbies'),
('Poozy Collection', 18, '2016-04-20', 'Collection of Poozies'),
('Snowmobiles', 14, '2016-04-15', 'Sefsdf'),
('Some Stuff', 2, '2016-04-09', 'Flowers and stuff'),
('Training Day', 1, '2016-04-07', 'Training Day photos.'),
('Training Day 2', 1, '2016-04-07', 'Training Day photo set 2.'),
('Training Day 3', 1, '2016-04-07', 'Training Day photo set 3.'),
('Whee', 1, '2016-04-16', 'Whoo');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
`PhotoID` int(11) NOT NULL,
  `ImagePath` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ImageFileSize` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CollectionID` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Title` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`PhotoID`, `ImagePath`, `ImageFileSize`, `CollectionID`, `Description`, `Title`) VALUES
(1, 'photos/017.png', '152661', 'Marvin Wedding', 'Asf', 'asdf'),
(2, 'photos/017.png', '152661', 'Marvin Wedding', 'asf', 'asf'),
(3, 'photos/017.png', '152661', 'Newbies', 'asdf', 'Dsdf'),
(4, 'photos/017.png', '152661', 'Marvin Wedding', 'SF', 'SDF'),
(5, 'photos/017.png', '152661', 'Marvin Wedding', 'SF', 'SDF'),
(6, 'photos/017.png', '152661', 'Marvin Wedding', 'SF', 'SDF'),
(7, 'photos/017.png', '152661', 'Marvin Wedding', 'SF', 'SDF'),
(8, 'photos/017.png', '152661', 'Marvin Wedding', 'SF', 'SDF'),
(9, 'photos/Newbies017.png', '152661', 'Newbies', 'asdf', 'SDf'),
(11, 'photos/Training Day/014.png', '500105', 'Training Day', 'asdf', 'Blablabla'),
(12, 'photos/Poozy Collection/cupcake-hi.png', '15779', 'Poozy Collection', 'A cupcake', 'Cupcake'),
(13, 'photos/Marvin Wedding/tumblr_nqfo9ueCJf1smipnlo1_1280.jpg', '147056', 'Marvin Wedding', 'Pretty sea', 'A sea'),
(14, 'photos/Some Stuff/pooze.jpg', '517288', 'Some Stuff', 'stuff', 'Some Stuff');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`UserID` int(11) NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Admin` tinyint(1) NOT NULL DEFAULT '0',
  `Active` tinyint(1) NOT NULL DEFAULT '1',
  `FirstName` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `LastName` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `City` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `State` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `Zip` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Email`, `Password`, `Admin`, `Active`, `FirstName`, `LastName`, `Phone`, `Address`, `City`, `State`, `Zip`) VALUES
(1, 'ashlyn.m.hassebrock@gmail.com', 'Password1*', 1, 1, 'Ashlyn', 'Duhautois', '5555555555', '555 New Lane SE', 'Iowa City', 'IA', '52242'),
(2, 'sally.smith@gmail.com', 'password', 0, 1, 'Sally', 'Smith', '5152832222', '382 Osceola Lane', 'Osceola', 'IA', '59195'),
(14, 'mike@fakeemail.com', '$2y$10$FaPIlUW5G5i17qEz3TzmjuVnZG8UD9njHp0yMQFF95sX7ozm9cKoS', 1, 1, 'Mike', 'Hassebrock', '5159793346', '328 N. Main', 'Madrid', 'IA', '50156'),
(17, 'ashlyn.duhautois@gmail.com', '$2y$10$E6dmc8YioklcYtq2pCz5HuvQwXq7.J.6sNQgHpKbxp2fuKE.YVVi2', 1, 1, 'Ashlyn', 'Duhautois', '5152982104', '2509 Newport Dr SW', 'Cedar Rapids', 'IA', '52403'),
(18, 'julien.duhautois@gmail.com', '$2y$10$6xVUuUipRQs9PVjxLJCEvugyKY6PLAOtN/O0YugoiVck5psHA6fWS', 0, 1, 'Julien', 'Duhautois', '5152903665', '2509 Newport Dr SW', 'Cedar Rapids', 'IA', '52404');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
 ADD PRIMARY KEY (`CollectionID`), ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
 ADD PRIMARY KEY (`PhotoID`), ADD KEY `photos_ibfk_1` (`CollectionID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
MODIFY `PhotoID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `collections`
--
ALTER TABLE `collections`
ADD CONSTRAINT `collections_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`) ON UPDATE CASCADE;

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
ADD CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`CollectionID`) REFERENCES `collections` (`CollectionID`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
