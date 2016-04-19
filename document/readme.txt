




Database details for connection via PHP:

Host: sql2.freemysqlhosting.net
Database name: sql2107364
Database user: sql2107364
Database password: dZ2*wT7%


once the application is up and running, register as a new user and you will have access to the site.

******************Please see below schema for our Database if required*******************************


-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: sql2.freemysqlhosting.net
-- Generation Time: Apr 19, 2016 at 08:39 PM
-- Server version: 5.5.46-0ubuntu0.12.04.2
-- PHP Version: 5.3.28

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sql2107364`
--

-- --------------------------------------------------------

--
-- Table structure for table `attractions`
--

CREATE TABLE IF NOT EXISTS `attractions` (
  `title` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `info` text,
  `phone` text NOT NULL,
  `opening` text NOT NULL,
  `website` text NOT NULL,
  `weather` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `attractions`
--

INSERT INTO `attractions` (`title`, `description`, `address`, `id`, `image`, `info`, `phone`, `opening`, `website`, `weather`) VALUES
('Dublin Castle', 'Built between 1208 and 1220, this complex represents some of the oldest surviving architecture in the city. Highlights include the 13th-century record tower, the largest visible fragment of the original Norman castle and the State Apartments, once the residence of English viceroys and now the focal point for government ceremonial functions, including the inauguration of Ireland''s presidents. The newest developments for visitors are the Undercroft, and excavates site on the grounds where an early Viking fortress stood, and the treasury, built between 1712 and 1715, believed to be the oldest surviving purpose-built office building in Ireland. It houses a new visitor centre in its vaulted basement.\n				\n				', 'Address : Palace Street, off Dame Street, Dublin 2, Ireland\n\n\n				', 1, 'DublinCastle.jpg', '<h3>Building complex in Dublin, Republic of Ireland</h3>\n                         <p>Dublin Castle off Dame Street, Dublin, Ireland,</br>\n                    	 was until 1922 the seat of the United Kingdom\n                    	 </br>government''s administration in Ireland,</br>\n                    	 and is now a major Irish government complex.</p>', 'Phone : +353 (1) 677 7129 ', 'Opening Time : Monday - Sunday 24 hrs', 'Website : www.dublincastle.ie', 'Rain'),
('Phoenix Park', 'Some of Dublin''s best night spots, restaurants and unusual shops line these narrow, cobbled streets running between the Bank of Ireland and Christ Church Cathedral. In the 18th century the area was home to many insalubrious characters-Fownes Street was noted for its brothels. It was also the birthplace of parliamentarian Henry Grattan. Skilled craftsmen and artisans, such as clockmakers and printers, lived and worked around Temple Bar until post-Emergency (post-war) industrialisation led to a decline in the area''s fortunes. In the 1970s, the CIE (national transport authority) bought up parcels of land in this area to build a major bus depot. While waiting to acquire the land in this area to buildings needed, the CIE rented out, on cheap leases, some of the old retail and warehouse premises to young artists and to record, clothing and book shops. The area developed an "alternative" identity and a successful lobby by local residents persuaded CIE to drop their plans. As more cynical Dubliners put it, the area became the city''s "officially designated arts zone". But while the new investment and planning may have added a slight air of contrivance, it''s still an exciting, atmospheric and essentially very young place. Organisations based here include the Irish Film Centre (IFC), the experimental Projects Arts Centre and around a dozen galleries. There are also centres for music, multi-media and photography as well as a Children''s Cultural Centre-an arts centre offering theatre, workshops and other entertainment for children.', 'Address : The Whitefields, Phoenix Park, Dublin 8, Ireland\n				\n				\n				\n', 2, 'PhoenPark.jpg', ' <h3>Park</h3>\n     <p>Phoenix Park is an urban park in Dublin, Ireland,</p>\n	 <p>lying 2–4 km west of the city centre, north of the River Liffey.\n	 </br>Its 11 km perimeter wall encloses 707 hectares, </br>\n	 one of the largest walled city parks in Europe.</p>   \n	', 'Phone : +353 (0)1 677-0095 ', 'Opening Time : Monday - Friday 9 hrs', 'Website : www.phoenixpark.ie', ''),
('Temple Bar', '  Some of Dublin''s best night spots, restaurants and unusual shops line these narrow, cobbled streets running between the Bank of Ireland and Christ Church Cathedral. In the 18th century the area was home to many insalubrious characters-Fownes Street was noted for its brothels. It was also the birthplace of parliamentarian Henry Grattan. Skilled craftsmen and artisans, such as clockmakers and printers, lived and worked around Temple Bar until post-Emergency (post-war) industrialisation led to a decline in the area''s fortunes. In the 1970s, the CIE (national transport authority) bought up parcels of land in this area to build a major bus depot. While waiting to acquire the land in this area to buildings needed, the CIE rented out, on cheap leases, some of the old retail and warehouse premises to young artists and to record, clothing and book shops. The area developed an "alternative" identity and a successful lobby by local residents persuaded CIE to drop their plans. As more cynical Dubliners put it, the area became the city''s "officially designated arts zone". But while the new investment and planning may have added a slight air of contrivance, it''s still an exciting, atmospheric and essentially very young place. Organisations based here include the Irish Film Centre (IFC), the experimental Projects Arts Centre and around a dozen galleries. There are also centres for music, multi-media and photography as well as a Children''s Cultural Centre-an arts centre offering theatre, workshops and other entertainment for children.', 'Address : Temple Bar, Co. Dublin\n		\n		', 3, 'templebar.jpg', ' <h3>Street in Dublin, Republic of Ireland</h3>\n                <p>Temple Bar is an area on the south bank of the River</br>\n                Liffey in central Dublin, Ireland.</br>\n            	The area is bounded by the Liffey to the north,</br>\n            	Dame Street	to the south, Westmoreland Street to \n            	</br>the east and Fishamble Street to the west.</p>', 'Phone : +353(0)1 655-0001', 'Opening Time : All day', '\n		Website : www.templebar.ie', ''),
('Christ Church Cathedral', 'Standing on high ground in the oldest part of the city, this cathedral is one of Dublin''s finest historic buildings. It dates back to 1038 when Sitric, the then Danish king of Dublin, built the first wood here. In 1171 the original simple foundation was extended into a cruciform and rebuilt in stone by Strongbow, although the present structure dates mainly from 1871 to 1878 when a huge restoration was undertaken. Only the transepts, the crypt, and a few other portions date from the medieval times. Highlights of the interior include magnificent stonework and graceful pointed arches, with delicately chiselled supporting columns. Strongbow himself is among the historic figures buried in the church, as is archbishop Browne, the first Protestant to occupy the church, during the reign of the English King Henry 8th. It is the mother church for the Diocese of Dublin and Glendalough of the Church of Ireland.\n		  		', ' Address : Palace Street, off Dame Street, Dublin 2, Ireland		  			  		\n		  		 ', 4, 'christ-church.jpg', ' <h3>Cathedral in the Republic of Ireland</h3>\n     <p>Christ Church Cathedral is the cathedral of the</br>\n     United Dioceses of Dublin and Glendalough and the </br>\n     cathedral of the Ecclesiastical province of the United</br>\n     Provinces of Dublin and Cashel in the Church of Ireland.</p>   ', 'Phone : +353 (0)1 677-8099 ', 'Opening Time : Monday - Saturday 9:00 - 18:00, Sunday 12:30 - 14:30/16:30-18:00\n	', 'Website : www.christchurchcathedral.ie\n		', 'Partly Cloudy'),
('Guinness Storehouse', 'At Guinness® Storehouse you’ll discover all there is to know about the world’s most famous beer. A dramatic story that begins 250 years ago and ends…where else - in the Gravity® bar with a complimentary pint of the black stuff.\n				This £30million visitor experience brings to life one of the world''s most iconic brands. Located at the heart of St. James’s Gate Brewery, the seven floors are designed around a central glass atrium mirroring the shape of a pint of Guinness®. Floor by floor, visitors take a surprising journey through the past, present and future of the world’s greatest beer. They discover the ingredients, the process, the time, the craft and the passion that goes into every pint.', 'Address : Guinness Storehouse, St. James Gate, Dublin 8, Ireland\n						\n						\n						', 5, 'guinness-storehouse.jpg', '<h3>Brewery</h3>\n                                     <p>Brewery experience telling the tale of Ireland''s famous beer,</br>\n                                	 with tastings and a rooftop bar</p> ', 'Phone : +353 (0)1 408-4800', 'Opening Time : Monday - Sunday 9:30 - 17:00', 'Website : www.guinness-storehouse.com\n	', ''),
('National Museum of Ireland', 'The National Museum Of Ireland was built in the 1880s to the design of Sir Thomas Deane. The treasury houses priceless items such as the Broighter gold boat, while  Ireland''s Gold, an exhibition focusing on Ireland''s Bronze Age gold, contains beautiful jewellery such as the Gleninsheen Gorget. Other permanent displays include Irish Silver and glassware, the Viking exhibition, the War of Independence exhibition and more.\n	  		', 'Address : Kildare Street, Dublin 2, Ireland\n	  		\n	  		\n	  		', 6, 'NationalMuseumofIreland.jpg', ' <h3>Museum in the Republic of Ireland</h3>\n                                     The National Museum of Ireland is the national museum in Ireland.</br>\n                                	 It has three branches in Dublin and one in County Mayo,</br>\n                                	 with a strong emphasis on Irish art, culture and natural history.</p>', 'Phone : +353 (0)1 677-7444 ', 'Opening Time : Tuesday - Saturday 10:00 - 17:00 Sunday 14:00 - 17:00', 'Website : www.museum.ie/en/homepage.aspx ', ''),
('', '', '', 7, NULL, NULL, '', '', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `chat_rooms`
--

CREATE TABLE IF NOT EXISTS `chat_rooms` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `numofuser` int(10) NOT NULL,
  `file` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `chat_users`
--

CREATE TABLE IF NOT EXISTS `chat_users` (
  `id` tinyint(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `time_mod` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `chat_users`
--

INSERT INTO `chat_users` (`id`, `username`, `status`, `time_mod`) VALUES
(23, 'ss', 1, 1456256295);

-- --------------------------------------------------------

--
-- Table structure for table `chat_users_rooms`
--

CREATE TABLE IF NOT EXISTS `chat_users_rooms` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `room` varchar(100) NOT NULL,
  `mod_time` int(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1472 ;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `com_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `rating` varchar(30) DEFAULT NULL,
  `comment` varchar(300) DEFAULT NULL,
  `attraction` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`com_id`, `name`, `email`, `rating`, `comment`, `attraction`) VALUES
(89, 'Borat', 'a.ibsaine@hotmail.fr', '6', 'Nice ! I Like !!!', ''),
(90, 'arezki', 'a.ibsaine@hotmail.fr', '6', 'cool', ''),
(91, 'maurice', 'm@m.i', '6', 'undefined', ''),
(92, 'James', 'j@j.ie', '2', 'Not my thing', ''),
(93, 'Borat', 'a.ibsaine@hotmail.fr', '6', 'cool', '');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `msg` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `username`, `msg`) VALUES
(58, 'Arezki', 'Hello'),
(59, 'Maurice', 'Hello there'),
(60, 'Turbo', 'Hey Guys'),
(61, 'Mick', 'YO!'),
(62, 'arezki', 'a'),
(63, 'tra', 'lala'),
(64, 'bill', 'Hey everyone'),
(65, 'arezki', 'hello'),
(66, 'arezki', 'hello'),
(67, 'arezki', 'hello'),
(68, 'arezki', 'hello'),
(69, 'arezki', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` char(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `salt` char(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `msg` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `salt`, `msg`) VALUES
(57, 'Turbo', '', '', '', 'Hey'),
(61, 'maurice', 'bdcc6aca3361d4c9ae1e0bc3d38d2365b64fab1f5f4337576fcbcc1ea4802921', 'maurice@m.ie', '1ebcc416238c34b2', ''),
(62, 'arezki1', 'f4a76e3fefc0cb86aa49002a303ae3a068f5f3805b77f1875a145f3a9d2c4d40', 'a.ibsaine@hotmail.fr', '707aff25184f8679', ''),
(72, 'gabriel', 'af88d8bf6188325e43ea38692c140e78b6d4fcca8d344432925c180ee9b3fb85', 'gabriel@demo.com', '5782ba9961b23fb9', ''),
(79, 'arezki', 'd7505ad75007805d06e9915c71a0a9b8eda00d13a5eeea40fdeaa234c3413d24', 'arezki@hotmail.com', '642fe6727971ee07', ''),
(80, 'Phuri', '1057d18a30fbec47a7f00d60a1e3ac95ddc829c9d9dc22b3f4b2c6981c0fc2c1', 'phuri@hotmail.com', '7c0698904ffd3235', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



************************Database schema ends here*******************************