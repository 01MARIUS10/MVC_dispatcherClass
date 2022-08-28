CREATE DATABASE IF NOT EXISTS `JovoBook`;
USE `JovoBook`;
CREATE TABLE `Skills` 
(
    `skills_id` INT NOT NULL AUTO_INCREMENT ,
    `skills_name` VARCHAR(255) NOT NULL ,
    `skills_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,  
    PRIMARY KEY (`skills_id`)
) 
ENGINE = InnoDB;