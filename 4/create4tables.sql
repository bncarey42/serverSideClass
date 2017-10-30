CREATE TABLE IF NOT EXISTS `cjohnson_qu5773oo`.`BTC_CLASS` (
  `CLS_CLASS_ID` VARCHAR(7) UNIQUE NOT NULL,
  `CLS_CLASS_NAME` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`CLS_CLASS_ID`));
  
  CREATE TABLE IF NOT EXISTS `cjohnson_qu5773oo`.`BTC_STUDENT` (
  `STDNT_STUDENT_ID` INT UNIQUE NOT NULL auto_increment,
  `STDNT_FIRST_NAME` VARCHAR(45) NOT NULL,
  `STDNT_LAST_NAME` VARCHAR(45) NOT NULL,
  `STDNT_GENDER` VARCHAR(1) NOT NULL default '$',
  `STDNT_COHORT` VARCHAR(1) NOT NULL DEFAULT '$',
  PRIMARY KEY (`STDNT_STUDENT_ID`));

ALter table cjohnson_qu5773oo.BTC_STUDENT auto_increment=100;

CREATE TABLE IF NOT EXISTS `cjohnson_qu5773oo`.`BTC_CLASS_MEMBERS` (
  `CMBR_ID` INT UNIQUE NOT NULL auto_increment, 
  `CMBR_CLASS_ID` VARCHAR(7) UNIQUE NOT NULL,
  `CMBR_STUDENT_ID` INT NOT NULL,
  PRIMARY KEY (`CMBR_ID`),
  CONSTRAINT `CMBR_CLASS_ID`
    FOREIGN KEY (`CMBR_CLASS_ID`)
    REFERENCES `cjohnson_qu5773oo`.`BTC_CLASS` (`CLS_CLASS_ID`),
  CONSTRAINT `CMBR_STUDENT_ID`
    FOREIGN KEY (`CMBR_STUDENT_ID`)
    REFERENCES `cjohnson_qu5773oo`.`BTC_STUDENT` (`STDNT_STUDENT_ID`));
  
  CREATE TABLE `cjohnson_qu5773oo`.`BTC_SURVEY` (
  `SRVY_ID` INT UNIQUE NOT NULL auto_increment,
  `SRVY_ANSWER_ONE` INT NULL DEFAULT NULL,
  `SRVY_COMMENT_ONE` VARCHAR(250) NULL DEFAULT NULL,
  `SRVY_ANSWER_TWO` INT NULL DEFAULT NULL,
  `SRVY_COMMENT_TWO` VARCHAR(250) NULL DEFAULT NULL,
  `SRVY_ANSWER_THREE` INT NULL DEFAULT NULL,
  `SRVY_COMMENT_THREE` VARCHAR(250) NULL DEFAULT NULL,
  `SRVY_ANSWER_FOUR` INT NULL DEFAULT NULL,
  `SRVY_COMMENT_FOUR` VARCHAR(250) NULL DEFAULT NULL,
  `SRVY_ANSWER_FIVE` INT NULL DEFAULT NULL,
  `SRVY_COMMENT_FIVE` VARCHAR(250) NULL DEFAULT NULL,
  `SRVY_CMBR_ID` INT NOT NULL,
  `srvy_QSTNS_ID` int not Null,
  PRIMARY KEY (`SRVY_ID`),
  CONSTRAINT `SRVY_CMBR_ID`
    FOREIGN KEY (`SRVY_CMBR_ID`)
    REFERENCES `cjohnson_qu5773oo`.`BTC_CLASS_MEMBERS` (`CMBR_ID`),
  CONSTRAINT `srvy_QSTNS_ID`
    FOREIGN KEY (`srvy_QSTNS_ID`)
    REFERENCES `cjohnson_qu5773oo`.`BTC_QUESTIONS` (`QSTNS_ID`));
    
CREATE TABLE `cjohnson_qu5773oo`.`BTC_QUESTIONS` (
	`QSTNS_ID` INT NOT NULL unique auto_increment,
    `QSTNS_ONE` varchar(150) NOT NULL default 'The material covered was relevent to the topic of the course.',
    `QSTNS_TWO` varchar(150) NOT NULL default 'The course was well organized and the sequence of the material covered enabled understanding.',
    `QSTNS_THREE` varchar(150) NOT NULL default 'The professor was able to present the material covered in a way that was accessable by all studenets in the course.',
    `QSTNS_FOUR` varchar(150) NOT NULL default 'The professor was accessable for questions.',
    `QSTNS_FIVE` varchar(150) NOT NULL default 'I would recomend this course to to a fellow student.',
	PRIMARY KEY (`QSTNS_ID`)
    );
INSERT INTO `cjohnson_qu5773oo`.`BTC_QUESTIONS` SET `QSTNS_ID`=1;
