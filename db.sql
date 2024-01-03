CREATE DATABASE IF NOT EXISTS STUDENT_MANAGEMENT;
USE STUDENT_MANAGEMENT;


CREATE TABLE student(
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(255) NOT NULL,
    gmail VARCHAR(255) NOT NULL,
    phoneNumber VARCHAR(50) NOT NULL,
    hometown VARCHAR (255) NOT NULL,
    grade INT(50) NOT NULL,
    section VARCHAR(50) NOT NULL,
    strand VARCHAR(255) NOT NULL
);

CREATE TABLE admin(
    admin_id INT AUTO_INCREMENT PRIMARY KEY,
    admin_username VARCHAR(255) NOT NULL,
    admin_password VARCHAR(255) NOT NULL
);

INSERT INTO `admin` (`admin_username`, `admin_password`) VALUES ("Boboy_Infante", "2220001293")

