CREATE DATABASE IF NOT EXISTS `JovoBook`;
USE `JovoBook`;
CREATE TABLE `Mention` 
(
    `mention_id` INT NOT NULL AUTO_INCREMENT ,
    `mention_jaime` INT NOT NULL ,
    `mention_jadore` INT NOT NULL ,
    `mention_partage` INT NOT NULL ,
    PRIMARY KEY (`mention_id`),
) 
ENGINE = InnoDB;