<?php 
require_once("dbconn.php");


if (isset($_POST["add"])) {
    $fullname = $_POST["FULLNAME"];
    $gmail = $_POST["GMAIL"];
    $number = $_POST["CP_NUMBER"];
    $hometown = $_POST["HOMETOWN"];
    $grade = $_POST["grade_level"];
    $section = $_POST["grade_section"];
    $strand = $_POST["grade_strand"];


   
    mysqli_query($conn,"INSERT INTO student (`fullname`, `gmail`, `phoneNumber`, `hometown`,  `grade`, `section`, `strand`) VALUES ('$fullname', '$gmail', '$number', '$hometown', '$grade', '$section', '$strand')"); 
    header("location: add.php");

   
}



?>