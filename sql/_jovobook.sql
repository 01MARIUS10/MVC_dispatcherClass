DROP DATABASE `JovoBook`;
CREATE DATABASE IF NOT EXISTS `JovoBook`;
USE `JovoBook`;
CREATE TABLE `post_type` 
(
    `type_id` INT NOT NULL AUTO_INCREMENT ,
    `type_name` VARCHAR(255) NOT NULL ,
    `type_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,  
    PRIMARY KEY (`type_id`)
) ENGINE = InnoDB;
INSERT INTO `post_type`(`type_name`)
VALUES ("TEST"),("INFORMATIF"),("COMMUNICATION"),("LOISIR");

##############################################
##############################################
##############################################
CREATE TABLE `Project` 
(
    `project_id` INT NOT NULL AUTO_INCREMENT ,
    `project_title` VARCHAR(255) NOT NULL ,
    `project_content` VARCHAR(255) NOT NULL ,
    `project_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    `projet_id_image` VARCHAR(255)  ,
    PRIMARY KEY (`project_id`)
) ENGINE = InnoDB;
INSERT INTO `Project`(`project_title`,`project_content`)
VALUES ("Web design","une maquette concu sur adobe XD"),
("Database","Modelisation d'une base de donne relationnel ,reseau sociaux"),
("Angular","Responsive form d'une application web "),
("PHP","Jovobook,un blog pour notre groupe d'equipe implementer MVC PHP"),
("MYSQl ","Ensemble de requete bien structurer"),
("Api PHP","system d'API realiser via PHP");

##############################################
##############################################
##############################################
CREATE TABLE `Skills` 
(
    `skills_id` INT NOT NULL AUTO_INCREMENT ,
    `skills_name` VARCHAR(255) NOT NULL ,
    `skills_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    `skills_id_image` VARCHAR(255) ,  
    PRIMARY KEY (`skills_id`)
) ENGINE = InnoDB;
INSERT INTO `Skills`(`skills_name`)
VALUES ("C"),("C++"),("HTML"),("CSS"),("JavaScript"),("PHP"),
("Python"),("Java"),("Ruby"),("Dart"),("Flutter"),("MYSQL"),("NoSql"),
("Angular"),("React"),("Vue"),("Symphony"),("Laravel"),("Wordpress"),("QT"),("SFML");

##############################################
##############################################
##############################################
CREATE TABLE `Post` 
(
    `post_id` INT NOT NULL AUTO_INCREMENT ,
    `post_types` INT NOT NULL ,
    `post_title` VARCHAR(255) NOT NULL ,
    `post_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
    `post_content` TEXT NOT NULL  ,
    `post_id_image` VARCHAR(255) ,
    `post_jaime` INT ,
    `post_jadore` INT  ,
    `post_partage` INT ,
    PRIMARY KEY (`post_id`),
    FOREIGN KEY (`post_types`) REFERENCES `post_type`(`type_id`)
) 
ENGINE = InnoDB;
INSERT INTO `Post`(`post_types`,`post_title`,`post_content`,`post_jaime`,`post_jadore`,`post_partage`)
VALUES (1,"formation ComptIA , linkedIn","Bonjour Prom malala,vita andraony ny formation linkedIn izay nataoko momba ny connaissance de base en informatique cote hardware",4,12,1),
(2,"Web designer","Faly miarahaba antsika rehetra , mila mianatra manao maquette koa isika fa tena ilaina be io code front  .Manamora ny fomba fiasa refa miintegrer site",14,11,5),
(4,"Com important","Misy Mr Hage isika rampitso am 10 ora ,tongava daholo prom",19,12,2),
(3,"Respo sport no miteny eto","Com zalah ah,mis pol tsika dem contre ny M1",18,11,2);
##############################################
##############################################
##############################################
CREATE TABLE `User` 
(   
    `user_id` INT NOT NULL AUTO_INCREMENT ,
    `user_name` VARCHAR(255) NOT NULL , 
    `user_password` VARCHAR(255) NOT NULL ,
    `user_pseudo` VARCHAR(255) NOT NULL ,
    `user_id_project` INT ,
    `user_id_post` INT  ,
    `user_id_skills` INT  ,
    `user_id_image ` VARCHAR(255) ,
    `user_admin` BOOLEAN NOT NULL ,
    PRIMARY KEY (`user_id`),
    UNIQUE (`user_password`),
    UNIQUE (`user_pseudo`),
    FOREIGN KEY (`user_id_project`) REFERENCES `Project`(`project_id`),
    FOREIGN KEY (`user_id_post`) REFERENCES `Post` (`post_id`)  ,
    FOREIGN KEY (`user_id_skills`) REFERENCES `Skills` (`skills_id`)
)ENGINE = InnoDB;
INSERT INTO  `User`(`user_name`,`user_password`,`user_pseudo`,
                    `user_id_project`,`user_id_post`,`user_id_skills`,`user_admin`) 
VALUES ("RAZAFITSALAMA Tsiorimbola Marius","12345678","Dadilove",4,1,6,1),
("TODISOA Nirina Michael","1345432","Mathman",3,2,5,0),
("RAZAFINDRAKOTONJATOVO Zo Anjatiana Henintsoa Kokoly","kokoly","Detty",1,2,3,0),
("A NDRIAMIADANJATO Mioraniaina","Pirina","Pirina",1,2,5,0);

##############################################
##############################################
##############################################

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
INSERT INTO `Chat`(`chat_id_from`,`chat_content`)
VALUES 
(1,"SALUT dahol prom,ty zany le blog vaovao ho antsika rehetra xD"),
(3,"GG less binome , za maka anla"),
(2,"com zalah ,taf dadilove"),
(4,"sotra ehhhhhhh");