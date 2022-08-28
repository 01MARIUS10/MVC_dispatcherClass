CREATE DATABASE IF NOT EXISTS `JovoBook`;
USE `JovoBook`;
CREATE TABLE `Project` 
(
    `project_id` INT NOT NULL AUTO_INCREMENT ,
    `project_title` VARCHAR(255) NOT NULL ,
    `project_content` VARCHAR(255) NOT NULL ,
    `project_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,  
    PRIMARY KEY (`post_id`)
) 
ENGINE = InnoDB;