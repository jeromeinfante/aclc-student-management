<?php 
include_once("dbconn.php");



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
            <form id="login" action="login.php" method="post" class="input-group">
                <input type="text" class="input-field" placeholder="Username" required name="USERNAME" />
                <input type="password" class="input-field" placeholder="Password" required name="PASSWORD" />
                <button type="submit" class="submit-btn" name="LOGIN-BTN">Log In</button>
                <a href="register.php">Register Here!</a>
            </form>
        </div>
    </div>

</body>

</html>