<?php

include_once("dbconn.php");

// kinuha ko html form names for login/registration
$username = $_POST["USERNAME"];
$gmail = $_POST["GMAIL"];
$password = md5($_POST["PASSWORD"]);

// name for login/registration buttons
$registerBTN = $_POST["REGISTER-BTN"];
$loginBTN = $_POST["LOGIN-BTN"];

// selects all the data from database, this is only for registration
$select_data_register = "SELECT * FROM admin_acc WHERE admin_username = '$username' AND `admin_gmail` = '$gmail'";

// selects all the data from database, this is only for login
$$select_data_login = "SELECT * FROM admin_acc WHERE admin_username = '$username' AND `admin_password` = '$password'";

// inserts data onto database ince reigsterbtn is clicked
$insert_data = "INSERT INTO `admin_acc` (admin_username, admin_gmail, admin_password) VALUES ('$username', '$gmail', '$password')";



// if login button is clicked ma check siya sa results and if may kaparehas ma login else account invalid/not found
if (isset($loginBTN)) {
    $results = $conn->query($select_data_login);
    if($results->num_rows > 0){
        header("location: home.php");
    }else{
        echo"account invalid";
    }
}

// if register button is clicked ma check muna siya sa results if may kaparehas account already registered else ma insert data sa database as a new account
if (isset($registerBTN)) {
    $results = mysqli_query($conn, $select_data_register);
    if($results->num_rows > 0){
        echo"account already registered";
    }else{
        $conn->query($insert_data);
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
    <link rel="stylesheet" href="../styles/login.css"/>
</head>

<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" id="login-btn">
                    Login
                </button>
                <button type="button" class="toggle-btn" id="register-btn">
                    Register
                </button>
            </div>
            <?php echo $php_errormsg ?>
            <form id="login" action="login.php" method="post" class="input-group">
                <input type="text" class="input-field" placeholder="Username" required name="USERNAME" />
                <input type="password" class="input-field" placeholder="Password" required name="PASSWORD" />
                <button type="submit" class="submit-btn" name="LOGIN-BTN">Log In</button>
            </form>
            <form id="register" action="login.php" method="post" class="input-group">
                <input type="text" class="input-field" placeholder="Username" required name="USERNAME" />
                <input type="text" class="input-field" placeholder="Gmail" required name="GMAIL" />
                <input type="password" class="input-field" placeholder="Password" required name="PASSWORD" />
                <button type="submit" class="submit-btn" name="REGISTER-BTN">Register</button>
            </form>
        </div>
    </div>
    <script src="../components/login.js"></script>
</body>

</html>