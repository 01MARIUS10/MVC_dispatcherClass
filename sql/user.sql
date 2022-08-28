DROP DATABASE `JovoBook`;

CREATE DATABASE IF NOT EXISTS `JovoBook`;
USE `JovoBook`;
CREATE TABLE `user` 
(   
    `user_id` INT NOT NULL AUTO_INCREMENT ,
    `user_name` VARCHAR(255) NOT NULL , 
    `user_password` VARCHAR(255) NOT NULL ,
    `user_pseudo` VARCHAR(255) NOT NULL ,
    `user_id_project` INT NOT NULL ,
    `user_id_post` INT NOT NULL ,
    `user_id_skills` INT NOT NULL ,
    `user_admin` BOOLEAN NOT NULL ,
    PRIMARY KEY (`user_id`),
    UNIQUE (`user_password`),
    UNIQUE (`user_pseudo`),
    FOREIGN KEY (`user_id_project`) REFERENCES `Project`,
    FOREIGN KEY (`user_id_post`) REFERENCES `Post`   ,
    FOREIGN KEY (`user_id_skills`) REFERENCES `Skills`
)
ENGINE = InnoDB;    