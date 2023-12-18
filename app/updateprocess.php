<?php 
include_once("../app/database/dbconn.php");





if(isset($_POST['update'])){
    $id = $_GET['id'];
    $fullname = $_POST["FULLNAME"];
    $gmail = $_POST["GMAIL"];
    $cp_number = $_POST["NUMBER"];
    $hometown = $_POST["HOMETOWN"];
    $grade = $_POST["GRADE"];
    $section = $_POST["SECTION"];
    $strand = $_POST["STRAND"];

    $update = "UPDATE `student` SET fullname='$fullname', gmail='$gmail', phoneNumber='$cp_number', hometown='$hometown', grade='$grade', section='$section', strand='$strand' WHERE id=$id";
    $sql = mysqli_query($conn, $update);

    if($sql){
        echo "done";
    }else{
        echo "failed";
    }
}


?>