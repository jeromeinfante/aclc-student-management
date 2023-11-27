<?php

include_once("dbconn.php");



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


$select = "SELECT * FROM `admin_acc` WHERE admin_username ='$username' AND admin_gmail = '$gmail' ";

if (isset($_POST["REGISTER-BTN"])) {
    $result = mysqli_query($conn, $select);
    if (mysqli_num_rows($result) > 0) {
        header("location: register.php?error=Account already Registered");
    }elseif ($password_len < 8) {
        header("location: register.php?error=Password Should be 8 Char");
    }elseif (empty($password_hash)) {
        header("location: register.php?error=Password is Required");
    } elseif (empty($username)) {
        header("location: register.php?error=Name is Required");
    } elseif (empty($gmail)) {
        header("location: register.php?error=Gmail is Required");
    } elseif (!filter_var($gmail, FILTER_VALIDATE_EMAIL)) {
        header("location: register.php?error=Gmail is Invalid");
    }else {
        mysqli_query($conn, "INSERT INTO `admin_acc` (admin_username, admin_gmail, admin_password) VALUES ('$username', '$gmail', '$password')");
        header("location: register.php?success=Registration Successfully!");
    }
}

?>      

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Library</title>
    <link rel="stylesheet" href="register.css?v=<?php echo time(); ?>" />
</head>

<body>
    <div class="hero">
        <div class="form-box">
            <form id="register" action="register.php" method="post" class="input-group">
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error'] ?></p>

                <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success'] ?></p>

                <?php } ?>
                <input type="text" class="input-field" placeholder="Username"  name="USERNAME" />
                <input type="text" class="input-field" placeholder="Gmail"  name="GMAIL" />
                <input type="password" class="input-field" placeholder="Password"  name="PASSWORD" />
                <button type="submit" class="submit-btn" name="REGISTER-BTN">Register</button>
                <a href="login.php">Login Here!</a>
            </form>
        </div>
    </div>

</body>

</html>