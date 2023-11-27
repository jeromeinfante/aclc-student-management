<?php

include_once("dbconn.php");

if (isset($_POST["USERNAME"]) && isset($_POST["PASSWORD"])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['USERNAME']);
    $password = md5(validate($_POST['PASSWORD']));




    $select = "SELECT * FROM `admin_acc` WHERE admin_username ='$username' AND admin_password = '$password' ";
    $result = $conn->query($select);

    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['admin_username'] = $username;
        // header('location: home.php');

    }else{
        header('location: login.php?error=Invalid Account');
    }

//   if (mysqli_num_rows($result) == 1) {
//         $row = mysqli_fetch_assoc($result);
//         if ($row["admin_username"] === $username && $row["admin_password"] === $password) {
//             header('location: home.php');
//             exit();
//         } else {
//             header('location: login.php?error=Incorrect Password or Username');
//             exit();
//         }
//     } else {
//         header('location: login.php?error=Incorrect Password or Username');
//         exit();
//     }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Library</title>
    <link rel="stylesheet" href="login.css?v=<?php echo time(); ?>" />
</head>

<body>
    <div class="hero">
        <div class="form-box">
            <form id="login" action="login.php" method="post" class="input-group">
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"> <?php echo $_GET['error'] ?> </p>
                <?php } ?>
                <input type="text" class="input-field" placeholder="Username" name="USERNAME" />
                <input type="password" class="input-field" placeholder="Password" name="PASSWORD" />
                <button type="submit" class="submit-btn" name="LOGIN-BTN">Log In</button>
                <a href="register.php">Register Here!</a>
            </form>
        </div>
    </div>

</body>

</html>