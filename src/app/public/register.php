<?php

include_once("dbconn.php");

$username = $_POST["USERNAME"];
$gmail = $_POST["GMAIL"];
$password_hash = $_POST["PASSWORD"];
$password = md5($password_hash);

$select = "SELECT * FROM `admin_acc` WHERE admin_username ='$username' AND admin_gmail = '$gmail' ";

if (isset($_POST["REGISTER-BTN"])) {
   $result = mysqli_query($conn, $select);
    if (mysqli_num_rows($result) > 0) {
        echo"<script>alert('account already registered')</script>";
    }else{
        mysqli_query($conn, "INSERT INTO `admin_acc` (admin_username, admin_gmail, admin_password) VALUES ('$username', '$gmail', '$password')");
        header("location: login.php");
    }
    
}


?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Library</title>
    <link rel="stylesheet" href="../styles/register.css" />
</head>

<body>
    <div class="hero">
        <div class="form-box">
            <form id="register" action="register.php" method="post" class="input-group">
                <input type="text" class="input-field" placeholder="Username" required name="USERNAME" />
                <input type="text" class="input-field" placeholder="Gmail" required name="GMAIL" />
                <input type="password" class="input-field" placeholder="Password" required name="PASSWORD" />
                <button type="submit" class="submit-btn" name="REGISTER-BTN">Register</button>
                <a href="login.php">Login Here!</a>
            </form>
        </div>
    </div>

</body>

</html>