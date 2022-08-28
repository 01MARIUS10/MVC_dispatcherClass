CREATE DATABASE IF NOT EXISTS `JovoBook`;
USE `JovoBook`;
CREATE TABLE `Chat` 
(
    `chat_id` INT NOT NULL AUTO_INCREMENT ,
    `chat_id_from` INT NOT NULL ,
    `chat_content` VARCHAR(255) NOT NULL ,
    `chat_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,  
    PRIMARY KEY (`post_id`),
    FOREIGN KEY (`chat_id_from`) REFERENCES `user`
) 
ENGINE = InnoDB;