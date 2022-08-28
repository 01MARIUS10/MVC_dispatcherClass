DROP DATABASE `JovoBook`;
CREATE DATABASE IF NOT EXISTS `JovoBook`;
USE `JovoBook`;

#_______________________________________________________________#
#---------------------------------------------------------------#
#---------------------------------------------------------------#

CREATE TABLE `Image_type` 
(
    `type_id` INT NOT NULL AUTO_INCREMENT ,
    `type_name` VARCHAR(255) NOT NULL ,
    `type_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,  
    PRIMARY KEY (`type_id`)
) ENGINE = InnoDB;
INSERT INTO `Image_type`(`type_name`)
VALUES ("Image_post"),("Image_project"),("Image_skill"),("Image_user");

CREATE TABLE `Image`
(
    `image_id` INT NOT NULL AUTO_INCREMENT ,
    `image_name` VARCHAR(65) NOT NULL ,
    `image_size` VARCHAR(255) NOT NULL ,
    `image_bin` VARCHAR(65) NOT NULL ,
    `image_type` VARCHAR(65) ,
    PRIMARY KEY (`image_id`)
)
ENGINE = InnoDB;

#_______________________________________________________________#
#---------------------------------------------------------------#
#---------------------------------------------------------------#
CREATE TABLE `Image_user`
(
    `image_user_id` INT NOT NULL AUTO_INCREMENT,
    `image_id` INT NOT NULL  ,
    `user_id` INT NOT NULL ,
    PRIMARY KEY (`image_user_id`),
    UNIQUE (`user_id`),
    FOREIGN KEY (`image_id`) REFERENCES `Image`(`image_id`)
)
ENGINE = InnoDB;

CREATE TABLE `Image_post`
(
    `image_post_id` INT NOT NULL AUTO_INCREMENT,
    `image_id` INT NOT NULL  ,
    `post_id` INT NOT NULL ,
    PRIMARY KEY (`image_post_id`),
    UNIQUE (`post_id`),
    FOREIGN KEY (`image_id`) REFERENCES `Image`(`image_id`)
)
ENGINE = InnoDB;

CREATE TABLE `Image_project`
(
    `image_project_id` INT NOT NULL AUTO_INCREMENT,
    `image_id` INT NOT NULL  ,
    `project_id` INT NOT NULL ,
    PRIMARY KEY (`image_project_id`),
    UNIQUE (`project_id`),
    FOREIGN KEY (`image_id`) REFERENCES `Image`(`image_id`)
)
ENGINE = InnoDB;

CREATE TABLE `Image_skill`
(
    `image_skill_id` INT NOT NULL AUTO_INCREMENT,
    `image_id` INT NOT NULL  ,
    `skill_id` INT NOT NULL ,
    PRIMARY KEY (`image_skill_id`),
    UNIQUE (`skill_id`),
    FOREIGN KEY (`image_id`) REFERENCES `Image`(`image_id`)
)
ENGINE = InnoDB;

#_______________________________________________________________#
#---------------------------------------------------------------#
#---------------------------------------------------------------#
CREATE TABLE `User` 
(   
    `user_id` INT NOT NULL AUTO_INCREMENT ,
    `user_name` VARCHAR(255) NOT NULL , 
    `user_password` VARCHAR(255) NOT NULL ,
    `user_pseudo` VARCHAR(255) NOT NULL ,
    `user_id_image` INT ,
    `user_admin` BOOLEAN NOT NULL ,
    PRIMARY KEY (`user_id`),
    UNIQUE (`user_password`),
    UNIQUE (`user_pseudo`),
    FOREIGN KEY (`user_id_image`) REFERENCES `Image_user`(`user_id`)
)ENGINE = InnoDB;


#_______________________________________________________________#
#---------------------------------------------------------------#
#---------------------------------------------------------------#
CREATE TABLE `Chat` 
(
    `chat_id` INT NOT NULL AUTO_INCREMENT ,
    `chat_id_from` INT NOT NULL ,
    `chat_content` VARCHAR(255) NOT NULL ,
    `chat_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,  
    PRIMARY KEY (`chat_id`),
    FOREIGN KEY (`chat_id_from`) REFERENCES `User`(`user_id`)
) 
ENGINE = InnoDB;


#_______________________________________________________________#
#---------------------------------------------------------------#
#---------------------------------------------------------------#
CREATE TABLE `Post_type` 
(
    `type_id` INT NOT NULL AUTO_INCREMENT ,
    `type_name` VARCHAR(255) NOT NULL ,
    `type_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,  
    PRIMARY KEY (`type_id`)
) ENGINE = InnoDB;
INSERT INTO `Post_type`(`type_name`)
VALUES ("TEST"),("INFORMATIF"),("COMMUNICATION"),("LOISIR");

CREATE TABLE `Post` 
(
    `post_id` INT NOT NULL AUTO_INCREMENT ,
    `post_types` INT NOT NULL ,
    `post_title` VARCHAR(255) NOT NULL ,
    `post_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
    `post_content` TEXT NOT NULL  ,
    `post_id_user` INT NOT NULL  ,
    `post_id_image` INT ,
    `post_jaime` INT DEFAULT 0,
    `post_jadore` INT  DEFAULT 0,
    `post_partage` INT DEFAULT 0,
    PRIMARY KEY (`post_id`),
    FOREIGN KEY (`post_id_user`) REFERENCES `User`(`user_id`),
    FOREIGN KEY (`post_id_image`) REFERENCES `Image_post`(`post_id`)
) 
ENGINE = InnoDB;


#_______________________________________________________________#
#---------------------------------------------------------------#
#---------------------------------------------------------------#
CREATE TABLE `Project` 
(
    `project_id` INT NOT NULL AUTO_INCREMENT ,
    `project_title` VARCHAR(255) NOT NULL ,
    `project_content` TEXT NOT NULL ,
    `project_id_user` INT NOT NULL ,
    `project_id_image` INT  ,
    `project_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,  
    PRIMARY KEY (`project_id`),
    FOREIGN KEY (`project_id_user`) REFERENCES `User`(`user_id`),
    FOREIGN KEY (`project_id_image`) REFERENCES `Image_project`(`project_id`)
) ENGINE = InnoDB;


#_______________________________________________________________#
#---------------------------------------------------------------#
#---------------------------------------------------------------#
CREATE TABLE `Skills` 
(
    `skills_id` INT NOT NULL AUTO_INCREMENT ,
    `skills_name` VARCHAR(255) NOT NULL ,
    `skills_id_user` INT NOT NULL ,
    `skills_id_image` INT ,  
    `skills_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,  
    PRIMARY KEY (`skills_id`),
    FOREIGN KEY (`skills_id_user`) REFERENCES `User`(`user_id`),
    FOREIGN KEY (`skills_id_image`) REFERENCES `Image_skill`(`skill_id`)
) ENGINE = InnoDB;


