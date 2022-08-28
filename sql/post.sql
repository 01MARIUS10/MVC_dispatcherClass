CREATE DATABASE IF NOT EXISTS `JovoBook`;
USE `JovoBook`;
CREATE TABLE `Post` 
(
    `post_id` INT NOT NULL AUTO_INCREMENT ,
    `post_type` VARCHAR(255) NOT NULL ,
    `post_title` VARCHAR(255) NOT NULL ,
    `post_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
    `post_content` TEXT NOT NULL , 
    `post_id_mention` INT NOT NULL , 
    PRIMARY KEY (`post_id`),
    FOREIGN KEY (`post_id_mention`) REFERENCES `Mention`
) 
ENGINE = InnoDB;