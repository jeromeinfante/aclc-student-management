<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../assets/styles/login.css?v=<?php echo time(); ?>" />
</head>

<body>
    <div class="container">
        <div class="login form">
            <header>Login</header>
            <?php if (isset($_GET['error'])) { ?>
                    <p class="error"> <?php echo $_GET['error'] ?> </p>
                <?php } ?>
            <form action="./models/login_func.php" method="post">
                <input type="text" placeholder="Enter your username" name="USERNAME">
                <input type="password" placeholder="Enter your password" name="PASSWORD">
                <input type="submit" class="button" value="Login">
            </form>
            <div class="signup">
                <span class="signup">Don't have an account?
                    <a href="register.php">Signup</a>
                </span>
            </div>
        </div>
    </div>
</body>

</html>