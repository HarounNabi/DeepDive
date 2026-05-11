DROP DATABASE IF EXISTS quizbezoeker;
CREATE DATABASE quizbezoeker;

USE quizbezoeker; 

CREATE TABLE VRAGEN (
    id INT NOT NULL AUTO_INCREMENT,
    vraag_tekst VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);