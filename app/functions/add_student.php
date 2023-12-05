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
    mysqli_query($conn, $add);
    header("location: ../add.php");
}else{
    echo "error";
}

echo"error";
?>