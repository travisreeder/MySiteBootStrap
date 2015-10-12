--
-- Table structure for table `visitors`
--

CREATE TABLE IF NOT EXISTS `visitors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;