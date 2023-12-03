<?php

include_once("../database/dbconn.php");

$fullname = $_POST["FULLNAME"];
$gmail = $_POST["GMAIL"];
$cp_number = $_POST["CP_NUMBER"];
$hometown = $_POST["HOMETOWN"];
$grade = $_POST["grade_level"];
$section = $_POST["grade_section"];
$strand = $_POST["grade_strand"];


$add = "INSERT INTO student_info (stud_name, stud_section, stud_grade, stud_strand, stud_cp_number, stud_gmail) VALUES ('$fullname', '$section', '$grade', '$strand', '$cpnumber', '$gmail')";


if (isset($_POST['ADD_BTN'])) {
    if (empty($fullname)) {
        header('location: ../add.php?error=Name is Required');
    }
}
