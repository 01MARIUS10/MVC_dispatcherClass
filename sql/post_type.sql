CREATE DATABASE IF NOT EXISTS `JovoBook`;
USE `JovoBook`;
CREATE TABLE `post_type` 
(
    `type_id` INT NOT NULL AUTO_INCREMENT ,
    `type_name` VARCHAR(255) NOT NULL ,
    `type_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,  
    PRIMARY KEY (`type_id`)
) 
ENGINE = InnoDB;