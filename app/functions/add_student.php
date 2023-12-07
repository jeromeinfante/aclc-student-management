<?php

include_once("../database/dbconn.php");

$fullname = $_POST["FULLNAME"];
$gmail = $_POST["GMAIL"];
$cp_number = $_POST["CP_NUMBER"];
$hometown = $_POST["HOMETOWN"];
$grade = $_POST["grade_level"];
$section = $_POST["grade_section"];
$strand = $_POST["grade_strand"];


$add = "INSERT INTO student_info (stud_name, stud_gmail, stud_cp_num, stud_homwtown, stud_grade, stud_section, stud_strand) VALUES ('$fullname', '$gmail', '$cp_number', '$hometown', '$grade', '$section', '$strand')";

if (isset($_POST["ADD_BTN"])) {
    if(empty($fullname)){
        header("location: ../add.php?error=Name is Required");
    }else if(empty($gmail)){
        header("location: ../add.php?error=Gmail is Required");
    }else if(empty($cp_number)){
        header("location: ../add.php?error=Cellphone is Required");
    }else if(empty($hometown)){
        header("location: ../add.php?error=Hometown is Required");
    }else if(empty($grade)){
        header("location: ../add.php?error=Grade is Required");
    }else if(empty($section)){
        header("location: ../add.php?error=Section is Required");
    }else if(empty($strand)){
        header("location: ../add.php?error=Strand is Required");
    }else if(!filter_var($gmail, FILTER_VALIDATE_EMAIL)){
        header("location: ../add.php?error=Gmail is Invalid");
    }else{
        mysqli_query($conn, "INSERT INTO `student_info` (stud_name, stud_gmail, stud_cp_num, stud_hometown, stud_grade, stud_section, stud_strand) VALUES ('$fullname', '$gmail', '$cp_number', '$hometown', '$grade', '$section', '$strand')");
        header("location: ../add.php");
    }
}
?>