-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: sql2.freemysqlhosting.net
-- Generation Time: Apr 14, 2016 at 06:30 PM
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `attractions`
--

INSERT INTO `attractions` (`title`, `description`, `address`, `id`, `image`, `info`, `phone`, `opening`, `website`) VALUES
('Dublin Castle', 'Built between 1208 and 1220, this complex represents some of the oldest surviving architecture in the city. Highlights include the 13th-century record tower, the largest visible fragment of the original Norman castle and the State Apartments, once the residence of English viceroys and now the focal point for government ceremonial functions, including the inauguration of Ireland''s presidents. The newest developments for visitors are the Undercroft, and excavates site on the grounds where an early Viking fortress stood, and the treasury, built between 1712 and 1715, believed to be the oldest surviving purpose-built office building in Ireland. It houses a new visitor centre in its vaulted basement.\n				\n				', 'Address : Palace Street, off Dame Street, Dublin 2, Ireland\n\n\n				', 1, 'DublinCastle.jpg', '<h3>Building complex in Dublin, Republic of Ireland</h3>\n                         <p>Dublin Castle off Dame Street, Dublin, Ireland,</br>\n                    	 was until 1922 the seat of the United Kingdom\n                    	 </br>government''s administration in Ireland,</br>\n                    	 and is now a major Irish government complex.</p>', 'Phone : +353 (1) 677 7129 ', 'Opening Time : Monday - Sunday 24 hrs', 'Website : www.dublincastle.ie'),
('Phoenix Park', 'Some of Dublin''s best night spots, restaurants and unusual shops line these narrow, cobbled streets running between the Bank of Ireland and Christ Church Cathedral. In the 18th century the area was home to many insalubrious characters-Fownes Street was noted for its brothels. It was also the birthplace of parliamentarian Henry Grattan. Skilled craftsmen and artisans, such as clockmakers and printers, lived and worked around Temple Bar until post-Emergency (post-war) industrialisation led to a decline in the area''s fortunes. In the 1970s, the CIE (national transport authority) bought up parcels of land in this area to build a major bus depot. While waiting to acquire the land in this area to buildings needed, the CIE rented out, on cheap leases, some of the old retail and warehouse premises to young artists and to record, clothing and book shops. The area developed an "alternative" identity and a successful lobby by local residents persuaded CIE to drop their plans. As more cynical Dubliners put it, the area became the city''s "officially designated arts zone". But while the new investment and planning may have added a slight air of contrivance, it''s still an exciting, atmospheric and essentially very young place. Organisations based here include the Irish Film Centre (IFC), the experimental Projects Arts Centre and around a dozen galleries. There are also centres for music, multi-media and photography as well as a Children''s Cultural Centre-an arts centre offering theatre, workshops and other entertainment for children.', 'Address : The Whitefields, Phoenix Park, Dublin 8, Ireland\n				\n				\n				\n', 2, 'PhoenPark.jpg', ' <h3>Park</h3>\n     <p>Phoenix Park is an urban park in Dublin, Ireland,</p>\n	 <p>lying 2–4 km west of the city centre, north of the River Liffey.\n	 </br>Its 11 km perimeter wall encloses 707 hectares, </br>\n	 one of the largest walled city parks in Europe.</p>   \n	', 'Phone : +353 (0)1 677-0095 ', 'Opening Time : Monday - Friday 9 hrs', 'Website : www.phoenixpark.ie'),
('Temple Bar', '  Some of Dublin''s best night spots, restaurants and unusual shops line these narrow, cobbled streets running between the Bank of Ireland and Christ Church Cathedral. In the 18th century the area was home to many insalubrious characters-Fownes Street was noted for its brothels. It was also the birthplace of parliamentarian Henry Grattan. Skilled craftsmen and artisans, such as clockmakers and printers, lived and worked around Temple Bar until post-Emergency (post-war) industrialisation led to a decline in the area''s fortunes. In the 1970s, the CIE (national transport authority) bought up parcels of land in this area to build a major bus depot. While waiting to acquire the land in this area to buildings needed, the CIE rented out, on cheap leases, some of the old retail and warehouse premises to young artists and to record, clothing and book shops. The area developed an "alternative" identity and a successful lobby by local residents persuaded CIE to drop their plans. As more cynical Dubliners put it, the area became the city''s "officially designated arts zone". But while the new investment and planning may have added a slight air of contrivance, it''s still an exciting, atmospheric and essentially very young place. Organisations based here include the Irish Film Centre (IFC), the experimental Projects Arts Centre and around a dozen galleries. There are also centres for music, multi-media and photography as well as a Children''s Cultural Centre-an arts centre offering theatre, workshops and other entertainment for children.', 'Address : Temple Bar, Co. Dublin\n		\n		', 3, 'templebar.jpg', ' <h3>Street in Dublin, Republic of Ireland</h3>\n                <p>Temple Bar is an area on the south bank of the River</br>\n                Liffey in central Dublin, Ireland.</br>\n            	The area is bounded by the Liffey to the north,</br>\n            	Dame Street	to the south, Westmoreland Street to \n            	</br>the east and Fishamble Street to the west.</p>', 'Phone : +353(0)1 655-0001', 'Opening Time : All day', '\n		Website : www.templebar.ie'),
('Christ Church Cathedral', 'Standing on high ground in the oldest part of the city, this cathedral is one of Dublin''s finest historic buildings. It dates back to 1038 when Sitric, the then Danish king of Dublin, built the first wood here. In 1171 the original simple foundation was extended into a cruciform and rebuilt in stone by Strongbow, although the present structure dates mainly from 1871 to 1878 when a huge restoration was undertaken. Only the transepts, the crypt, and a few other portions date from the medieval times. Highlights of the interior include magnificent stonework and graceful pointed arches, with delicately chiselled supporting columns. Strongbow himself is among the historic figures buried in the church, as is archbishop Browne, the first Protestant to occupy the church, during the reign of the English King Henry 8th. It is the mother church for the Diocese of Dublin and Glendalough of the Church of Ireland.\n		  		', ' Address : Palace Street, off Dame Street, Dublin 2, Ireland		  			  		\n		  		 ', 4, 'christ-church.jpg', ' <h3>Cathedral in the Republic of Ireland</h3>\n     <p>Christ Church Cathedral is the cathedral of the</br>\n     United Dioceses of Dublin and Glendalough and the </br>\n     cathedral of the Ecclesiastical province of the United</br>\n     Provinces of Dublin and Cashel in the Church of Ireland.</p>   ', 'Phone : +353 (0)1 677-8099 ', 'Opening Time : Monday - Saturday 9:00 - 18:00, Sunday 12:30 - 14:30/16:30-18:00\n	', 'Website : www.christchurchcathedral.ie\n		'),
('Guinness Storehouse', 'At Guinness® Storehouse you’ll discover all there is to know about the world’s most famous beer. A dramatic story that begins 250 years ago and ends…where else - in the Gravity® bar with a complimentary pint of the black stuff.\n				This £30million visitor experience brings to life one of the world''s most iconic brands. Located at the heart of St. James’s Gate Brewery, the seven floors are designed around a central glass atrium mirroring the shape of a pint of Guinness®. Floor by floor, visitors take a surprising journey through the past, present and future of the world’s greatest beer. They discover the ingredients, the process, the time, the craft and the passion that goes into every pint.', 'Address : Guinness Storehouse, St. James Gate, Dublin 8, Ireland\n						\n						\n						', 5, 'guinness-storehouse.jpg', '<h3>Brewery</h3>\n                                     <p>Brewery experience telling the tale of Ireland''s famous beer,</br>\n                                	 with tastings and a rooftop bar</p> ', 'Phone : +353 (0)1 408-4800', 'Opening Time : Monday - Sunday 9:30 - 17:00', 'Website : www.guinness-storehouse.com\n	'),
('National Museum of Ireland', 'The National Museum Of Ireland was built in the 1880s to the design of Sir Thomas Deane. The treasury houses priceless items such as the Broighter gold boat, while  Ireland''s Gold, an exhibition focusing on Ireland''s Bronze Age gold, contains beautiful jewellery such as the Gleninsheen Gorget. Other permanent displays include Irish Silver and glassware, the Viking exhibition, the War of Independence exhibition and more.\n	  		', 'Address : Kildare Street, Dublin 2, Ireland\n	  		\n	  		\n	  		', 6, 'NationalMuseumofIreland.jpg', ' <h3>Museum in the Republic of Ireland</h3>\n                                     The National Museum of Ireland is the national museum in Ireland.</br>\n                                	 It has three branches in Dublin and one in County Mayo,</br>\n                                	 with a strong emphasis on Irish art, culture and natural history.</p>', 'Phone : +353 (0)1 677-7444 ', 'Opening Time : Tuesday - Saturday 10:00 - 17:00 Sunday 14:00 - 17:00', 'Website : www.museum.ie/en/homepage.aspx '),
('', '', '', 7, NULL, NULL, '', '', '0');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`com_id`, `name`, `email`, `rating`, `comment`, `attraction`) VALUES
(85, 'Borat', 'a.ibsaine@hotmail.fr', '6', 'I Like !!', 'Temple Bar'),
(86, 'gab', '123@SOMEWHERE', '5', 'good', ''),
(87, 'Maurice', 'm@m.ie', '6', 'Sweet!', 'Temple Bar');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `msg` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `username`, `msg`) VALUES
(58, 'Arezki', 'Hello'),
(59, 'Maurice', 'Hello there'),
(60, 'Turbo', 'Hey Guys'),
(61, 'Mick', 'YO!'),
(62, 'arezki', 'a'),
(63, 'tra', 'lala');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `salt`, `msg`) VALUES
(57, 'Turbo', '', '', '', 'Hey'),
(58, 'arezki', '', '', '', 'hi'),
(59, 'john1', '79e57a1fb404238b523ab04e682149497cd7c4b6f332ac6457a6bf47aa30ab74', 'john@gmail.com', '6fca644969e7e2e2', ''),
(60, 'johnnyboy', '67a8a4d6a5c538f5ac10eac3eabb67fd8813f0243512d9e99cb005c2b993ad89', 'john@john.ie', '4d24f96d5e4ab91e', ''),
(61, 'maurice', 'bdcc6aca3361d4c9ae1e0bc3d38d2365b64fab1f5f4337576fcbcc1ea4802921', 'maurice@m.ie', '1ebcc416238c34b2', ''),
(62, 'arezki1', 'f4a76e3fefc0cb86aa49002a303ae3a068f5f3805b77f1875a145f3a9d2c4d40', 'a.ibsaine@hotmail.fr', '707aff25184f8679', ''),
(63, 'arezki2', '9e13ae65d99ae2d8bed2a0d1b645322a5504e6f491ca61c5472f50185b5826e2', 'amskjw@hotmail.com', '2b8beb8d3bd0f2e0', ''),
(64, 'brian', '82cbb128d480f439c48392804093805e815190ebc8db2bd3f451343d1596fb7e', 'b@b.ie', '433d38247f6c0c1c', ''),
(65, 'tom', 'bef6be9d1cbe020288a370bef25ab799d03a6c0d718eb4de46efd8b84f2f84bb', 'tom@hotmail.com', '2719ebac1035f1cf', ''),
(66, 'arezki3', '3e3937eeb2c29a73ce6a7a8822e622571b213dfb775a86d1946f4b003936c38b', 'arezki@gmail.com', '6577616280eed2c', ''),
(67, 'sarah', '598c4d1cc6fc08f85f17d47b1442d6676a8c22b3211ac80948026db25190fda0', 'ko@lk.u', '1d546a9b236efbc', ''),
(68, 'ksjs', '', '', '', 'slmsl'),
(69, 'ksjs', '', '', '', 'slmsl'),
(70, 'arezki4', 'fce2abe08ef71a2ed722c92ba6d233242ae9f528f8c10e4ab203a83705931bc0', 'arezki@gail.com', '340e3efdebecfa3', ''),
(71, 'arezki5', 'aaba53a682f7d2d6ffd42b6c627eae35d998e56ad26fe3acf6e4b7d520d804ad', 'arezki5@hotmail.com', '89271966fc29c67', ''),
(72, 'gabriel', 'af88d8bf6188325e43ea38692c140e78b6d4fcca8d344432925c180ee9b3fb85', 'gabriel@demo.com', '5782ba9961b23fb9', ''),
(73, 'gabriel olariu', '3f214a47bc7f3283493b0d05cc9876b465db716bb6250adcd685c14deab4c75a', 'gabriel@somewhere.co', '236f48d617ac3efc', ''),
(74, 'Mark', '5d6a3cc2bde89a542cc13c3f46f47f2b58545ac32d4a8bc03f273232982d8d39', 'mark@gmail.com', '76dfc5c720f2c54d', ''),
(75, 'donnie', '98e05253b7d7828455c0a8e091c0abb6c45fc4875c128e0240bf7eac55aef89b', 'd@d.ie', '31c8a25574b1c347', ''),
(76, 'alan2016', 'e58114f1f8559520c487f489ba8fe828b51e36cd50b0b818a943a3fe0ed0158f', 'a@a.ie', 'c2a24d716de20a2', ''),
(77, 'alan', '5d09d126a0cdabce4955e96dd3d86438ffb29bfb9eceec0e9af7eb7c48a68d31', 'alan@alan.ie', '605a81912b61fbd1', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` char(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `salt` char(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `msg` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `username_2` (`username`),
  UNIQUE KEY `username_3` (`username`),
  UNIQUE KEY `username_4` (`username`),
  UNIQUE KEY `password` (`password`),
  KEY `username_5` (`username`),
  KEY `username_6` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `salt`, `msg`) VALUES
(1, 'arezki', '606fa2a5d9db3e3813cbfe0b1895653483fbe82b59f7adb32c40c1f675147b05', '', '1bd00e207dc4e107', ''),
(2, 'maurice', '3f647ef7b73879cf9f951613588883274940325a912c3ec3eb4e467f83df7a82', '', '35b295f65c3b194e', ''),
(3, 'turbo', '6f1d9d19edeb3b961e307664438c2219b65bfe0bb62016f612fb09d4d6f931e5', '', '25d27bd61c37d01', ''),
(5, 'iwonka', '3eb81aefb2587273651e1c2b766dc8fd959293cc24d12a8e08ae4a0fbbd2cc14', 'i@i.ven', '2d3741b44061806a', ''),
(6, 'gabriel', 'c3827cb0b8c92b5f9d0e9fe495dfd230bed3a550f88db4640f861015e75b494f', 'gabriel@demo.com', '3ab2abf341014c21', ''),
(38, 'john', '', '', '', 'hi'),
(46, 'gabriel1', '870e34604b8ee351fb16a609c9263780e401b6cf6fe18983911ec8022a27299b', 'gtarsgds@somewhere.ie', '739d1f0743f6e2ff', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
