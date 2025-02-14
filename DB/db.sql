-- Project updated today `13/10/21`
CREATE DATABASE IF NOT EXISTS `app`;

USE app;

-- Table structure for registered users `users` 
CREATE TABLE IF NOT EXISTS `app_users` ( 
`id` INT(11) AUTO_INCREMENT,
`uniqueid` VARCHAR(100) NOT NULL,
`email` VARCHAR(150) NOT NULL,
`username` VARCHAR(200) NOT NULL,
`password` VARCHAR(150) DEFAULT NULL,
`profile` ENUM('User', 'Moderator', 'Admin') DEFAULT 'User',
`code` varchar(20) NOT NULL,
`status` ENUM('Activated', 'Banned', 'Deactivated', 'New', 'Trash') DEFAULT 'New',
`log_session` varchar(30) DEFAULT NULL,
`login_status` ENUM('Logged_out', 'Logged_in') DEFAULT 'Logged_out',
`notify` ENUM('On', 'Off') DEFAULT 'Off',
`hash` VARCHAR(200) NOT NULL,
`lastlogin` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
`ip` VARCHAR(50) NOT NULL,
`user_agent` VARCHAR(250) NOT NULL,
`created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,    
PRIMARY KEY  (`id`)
) ENGINE = InnoDB   DEFAULT CHARSET=latin1 ;



-- Table structure for confirmed users `profile` 
CREATE TABLE IF NOT EXISTS `app_profile` ( 
`id` INT(11) AUTO_INCREMENT,
`uniqueid` VARCHAR(100) NOT NULL,
`dob` varchar(20) DEFAULT NULL,
`gender` ENUM('Male', 'Female') DEFAULT NULL,
`occupation` varchar(100) DEFAULT NULL,
`category` varchar(200) DEFAULT NULL,
`number` varchar(20) DEFAULT NULL,
`wal_bal` VARCHAR(100) DEFAULT '0',
`number1` varchar(20) DEFAULT NULL,
`email1` VARCHAR(150) DEFAULT NULL,
`address` VARCHAR(200) DEFAULT NULL,
`city` VARCHAR(100) DEFAULT NULL,
`country` VARCHAR(150) DEFAULT NULL,
`zipcode` VARCHAR(50) DEFAULT NULL,
`profileimage` VARCHAR(200) DEFAULT 'favicon.png',
`img1` VARCHAR(200) DEFAULT 'favicon.png',
`img2` VARCHAR(200) DEFAULT 'favicon.png',
`img3` VARCHAR(200) DEFAULT 'favicon.png',
`details` longtext DEFAULT NULL,
`verify_status` ENUM('Unverified', 'Verified') DEFAULT 'Unverified',
`created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,    
PRIMARY KEY  (`id`)
) ENGINE = InnoDB   DEFAULT CHARSET=latin1 ;




-- Table structure for msg report `msgreport` 
CREATE TABLE IF NOT EXISTS `app_msgreport` ( 
`id` INT(11) AUTO_INCREMENT,
`msgid` VARCHAR(100) NOT NULL,
`uniqueid` VARCHAR(100) NOT NULL,
`username` VARCHAR(100) NOT NULL,
`email` VARCHAR(100) NOT NULL,
`dept` VARCHAR(100) NOT NULL,
`issue` VARCHAR(100) NOT NULL,
`subject` VARCHAR(100) NOT NULL,
`details` longtext NOT NULL,
`status` ENUM('Unread', 'Read', 'Trash') DEFAULT 'Unread',
`created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,    
PRIMARY KEY  (`id`)
) ENGINE = InnoDB   DEFAULT CHARSET=latin1 ;





-- Table structure for msg report `subscribe` 
CREATE TABLE IF NOT EXISTS `app_subscribe` ( 
`id` INT(11) AUTO_INCREMENT,
`email` VARCHAR(100) NOT NULL,
`status` ENUM('Active', 'Unactive', 'Trash') DEFAULT 'Active',
`ip` VARCHAR(50) NOT NULL,
`user_agent` VARCHAR(250) NOT NULL,
`created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,    
PRIMARY KEY  (`id`)
) ENGINE = InnoDB   DEFAULT CHARSET=latin1 ;





-- Table structure for activity `activity` 
CREATE TABLE IF NOT EXISTS `app_activity` ( 
`id` INT(11) AUTO_INCREMENT,
`uniqueid` VARCHAR(100) NOT NULL,
`username` VARCHAR(100) DEFAULT NULL,
`category` VARCHAR(20) DEFAULT NULL,
`details` longtext,
`status` ENUM('Unread', 'Hide', 'Read', 'Trash') DEFAULT 'Unread',
`created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,    
PRIMARY KEY  (`id`)
) ENGINE = InnoDB   DEFAULT CHARSET=latin1 ;




-- Table structure for Visitors `courier_visitors` 
CREATE TABLE IF NOT EXISTS `app_visitors` ( 
`id` INT(11) AUTO_INCREMENT,
`ip` VARCHAR(20) NOT NULL,
`vdate` VARCHAR(20) NOT NULL,
`vtime` VARCHAR(20) DEFAULT NULL,
`count` INT(11) DEFAULT '1',
`details` text DEFAULT NULL,
`status` ENUM('Unread', 'Read', 'Trash') DEFAULT 'Unread',
`created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,    
PRIMARY KEY  (`id`)
) ENGINE = InnoDB   DEFAULT CHARSET=latin1 ;





-- Table structure for Company Information `coy_info` 
CREATE TABLE IF NOT EXISTS `app_coy_info` ( 
`id` INT(11) AUTO_INCREMENT,
`coyname` VARCHAR(150) NOT NULL,
`slogan` VARCHAR(500) DEFAULT NULL,
`email` VARCHAR(150) NOT NULL,
`email1` VARCHAR(150) DEFAULT NULL,
`phone` VARCHAR(50) NOT NULL,
`phone1` VARCHAR(50) DEFAULT NULL,
`facebook` VARCHAR(50) NOT NULL,
`instagram` VARCHAR(50) NOT NULL,
`twitter` VARCHAR(50) NOT NULL,
`linkedin` VARCHAR(50) NOT NULL,
`address` text NOT NULL,
`img` VARCHAR(200) DEFAULT 'favicon.png',
`status` ENUM('Draft', 'Publish', 'Trash') DEFAULT 'Draft',
`created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,    
PRIMARY KEY  (`id`)
) ENGINE = InnoDB   DEFAULT CHARSET=latin1 ;





-- Table structure for Currency Setting `app_currency` 
CREATE TABLE IF NOT EXISTS `app_currency` ( 
`id` INT NOT NULL AUTO_INCREMENT,
`name` VARCHAR(50)  NOT NULL,
`currency` VARCHAR(10) NOT NULL,
`created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,    
PRIMARY KEY  (`id`)) ENGINE = InnoDB DEFAULT CHARSET=latin1   ;




-- Table structure for User Notifications `app_notify` 
CREATE TABLE IF NOT EXISTS `app_notify` ( 
`id` INT(11) AUTO_INCREMENT,
`subject` varchar(100) NOT NULL,
`details` longtext,
`status` ENUM('Active', 'Unactive') DEFAULT 'Active',
`created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,    
PRIMARY KEY  (`id`)
) ENGINE = InnoDB   DEFAULT CHARSET=latin1 ;







-- Table structure for Crypto Payment `API` 
CREATE TABLE IF NOT EXISTS `app_thirdPartyApi` ( 
`id` INT(11) AUTO_INCREMENT,
`name` VARCHAR(100) DEFAULT NULL,
`url` VARCHAR(100) DEFAULT NULL,
`public` text DEFAULT NULL,
`private` text DEFAULT NULL,
`status` ENUM('Active', 'Deactivated') DEFAULT 'Active',
`created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,    
PRIMARY KEY  (`id`)
) ENGINE = InnoDB   DEFAULT CHARSET=latin1 ;







-- Table structure for Control Panel `app_control_panel` 
CREATE TABLE IF NOT EXISTS `app_control_panel` ( 
`id` INT NOT NULL AUTO_INCREMENT,
`paydate` VARCHAR(50)  NOT NULL,
`expirydate` VARCHAR(50)  NOT NULL,
`amount` VARCHAR(50)  NOT NULL,
`duration` VARCHAR(80)  NOT NULL,
`contact` VARCHAR(150)  NOT NULL,
`created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,    
PRIMARY KEY  (`id`)) ENGINE = InnoDB DEFAULT CHARSET=latin1   ;












--
-- Dumping data for table `app_control_panel`
--
INSERT INTO `app_control_panel` (`id`, `paydate`, `expirydate`, `amount`, `duration`, `contact`) VALUES (1, '2024-12-06 08:04:43', '2025-11-07 06:04:43', '$140', 'One Year', 'benimagreg@gmail.com'); 







--
-- Dumping data for table `users`
--

INSERT INTO `app_users` (`id`, `uniqueid`, `email`, `username`, `password`, `profile`, `code`, `status`, `log_session`, `login_status`, `notify`, `hash`, `lastlogin`, `ip`, `user_agent`, `created`) VALUES
(1, 'REDfTc35','admintester@admin.com', 'adminTester', '$2y$10$hEjHAQrERtIEOicsWzrqPeuYbALGeGdkNzA5n3orsk/PUHUtP.E4.', 'Admin', 'Hwjvh', 'Activated', '', 'Logged_out', 'Off', '63dc7ed1010d3c3b8269faf0ba7491d4', '2023-01-19 09:24:18', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '2022-12-24 05:32:18');



--
-- Dumping data for table `Profile`
--
INSERT INTO `app_profile` (`id`, `uniqueid`) VALUES (1, 'REDfTc35'); 


                                        

--
-- Dumping data for table `Company Profile`
--
INSERT INTO `app_info` (`id`, `coyname`, `slogan`, `email`, `email1`, `phone`, `phone1`, `facebook`, `instagram`, `twitter`, `linkedin`, `address`, `img`, `status`) VALUES (1, 'GistVille','Connecting You To Your Soulmate', 'hello@GistVille.com', '', '+20111111111', '', 'GistVille', 'GistVille', 'GistVille', 'GistVille', 'No 17, Kudeti Avenue, Flambush', 'favicon.png', 'Publish'); 




--
-- Dumping data for table `Company Currency`
--
INSERT INTO `app_currency` (`id`, `name`, `currency`) VALUES (1, 'USD','$'); 




