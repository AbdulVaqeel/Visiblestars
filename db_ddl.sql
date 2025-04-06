CREATE TABLE `contactedu` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `ipaddr` varchar(45) DEFAULT NULL,
  `addedon` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);


CREATE TABLE `course` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `ipaddr` varchar(45) DEFAULT NULL,
  `addedon` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

CREATE TABLE `author_edu` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cust_name` VARCHAR(255) NULL,
  `email` VARCHAR(255) NULL,
  `position` VARCHAR(255) NULL,
  `company` VARCHAR(255) NULL,
  `expertise` VARCHAR(255) NULL,
  `linkedIn` VARCHAR(255) NULL,
  `title` VARCHAR(255) NULL,
  `twitter` VARCHAR(255) NULL,
  `facebook` VARCHAR(255) NULL,
  `author_bio` VARCHAR(255) NULL,
  `ipaddr` VARCHAR(255) NULL,
  `addedon` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`));