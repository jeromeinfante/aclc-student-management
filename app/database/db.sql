CREATE DATABASE IF NOT EXISTS STUDENT_MANAGEMENT;
USE STUDENT_MANAGEMENT;


CREATE TABLE student_info(
    stud_id INT AUTO_INCREMENT PRIMARY KEY,
    stud_name VARCHAR(255) NOT NULL,
    stud_gmail VARCHAR(255) NOT NULL,
    stud_cp_num INT(11) NOT NULL,
    stud_hometown INT (255) NOT NULL,
    stud_grade INT(2) NOT NULL,
    stud_section VARCHAR(1) NOT NULL,
    stud_strand VARCHAR(255) NOT NULL,
 
    
);

CREATE TABLE admin_acc(
    admin_id INT AUTO_INCREMENT PRIMARY KEY,
    admin_username VARCHAR(255) NOT NULL,
    admin_gmail VARCHAR(255) NOT NULL,
    admin_password VARCHAR(255) NOT NULL
);


