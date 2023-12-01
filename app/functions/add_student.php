<?php

include_once("../database/dbconn.php");

$fullname = $_POST['FULLNAME'];
$section = $_POST['SECTION'];
$grade = $_POST['GRADE'];
$strand = $_POST['STRAND'];
$cpnumber = $_POST['CP_NUMBER'];
$gmail = $_POST['GMAIL'];


$add = "INSERT INTO student_info (stud_name, stud_section, stud_grade, stud_strand, stud_cp_number, stud_gmail) VALUES ('$fullname', '$section', '$grade', '$strand', '$cpnumber', '$gmail')";


if (isset($_POST['ADD_BTN'])) {
    if (empty($fullname)) {
        header('location: ../add.php?error=Name is Required');
    }elseif (empty($section)) {
        header('location: ../add.php?error=Section is Required');
    }elseif (empty($grade)) {
        header('location: ../add.php?error=Grade Level is Required');
    }elseif (empty($strand)) {
        header('location: ../add.php?error=Strand is Required');
    }elseif (empty($cpnumber)) {
        header('location: ../add.php?error=Number is Required');
    }elseif (empty($gmail)) {
        header('location: ../add.php?error=Gmail is Required');
    }elseif (is_string($section) && strlen($section) > 1) {
        header('location: ../add.php?error=Section Should be one Character');
    }elseif($grade != 11 || $grade != 12){
        header('location: ../add.php?error=Grade Level Should be 11 or 12');
    }
}
