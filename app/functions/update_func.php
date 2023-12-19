<?php

require_once("../database/dbconn.php");

function val($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name = val($_POST['FULLNAME']);
$gmail = val($_POST['GMAIL']);
$number = val($_POST['NUMBER']);
$hometown = val($_POST['HOMETOWN']);
$grade = val($_POST['GRADE']);
$section = val($_POST['SECTION']);
$strand = val($_POST['STRAND']);
$id = val($_POST['id']);

$sql = "UPDATE `student` SET  `fullname` = '$name', `gmail` = '$gmail', `phoneNumber` = '$number', `hometown` = '$hometown', `grade` = $grade, `section` = '$section', `strand` = '$strand' WHERE id= $id";
$update = mysqli_query($conn, $sql);

if ($update) {
    header("location: ../update.php?success=Update Success");
}