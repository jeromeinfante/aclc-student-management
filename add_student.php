<?php

include_once("dbconn.php");

$fullname = $_POST["FULLNAME"];
$gmail = $_POST["GMAIL"];
$cp_number = $_POST["CP_NUMBER"];
$hometown = $_POST["HOMETOWN"];

// $add = "INSERT INTO stud (fullname, gmail, cp_number, hometown) VALUES ('$fullname', '$gmail', '$cp_number', '$hometown')";

// mysqli_query($conn,"INSERT INTO stud (fullname, gmail, cp_number, hometown) VALUES ('$fullname', '$gmail', '$cp_number', '$hometown')");
// header("Location: test.php");

echo"".$fullname."".$gmail."".$cp_number."".$hometown."";


// if (isset($_POST["SUBMIT"])) {
//     mysqli_query($conn, "INSERT INTO stud (fullname, gmail, cp_number, hometown) VALUES ('$fullname', '$gmail', '$cp_number', '$hometown')");
//     header("location: test.php?success=Registration Successfully!");
// }
?>