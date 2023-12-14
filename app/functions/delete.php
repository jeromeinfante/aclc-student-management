<?php

require_once("../database/dbconn.php");

if (isset($_POST["delete"])) {

    $id = $_POST['id'];


    mysqli_query($conn, "DELETE FROM student WHERE id=$id");
    header("location: ../dashboard.php");
}
