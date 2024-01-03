<?php

include_once("/opt/lampp/htdocs/testhaha/db.php");

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$username = validate($_POST["USERNAME"]);
$gmail = validate($_POST["GMAIL"]);
$password_hash = validate($_POST["PASSWORD"]);
$password_len = $_POST["PASSWORD"];
$password = md5($password_hash);

$select = "SELECT * FROM `admin` WHERE username ='$username' AND gmail = '$gmail' ";
$result = mysqli_query($conn, $select);

if(empty($username)){
    header("location: /testhaha/index.php?error=Name is Required");
}


?>



