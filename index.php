<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login & Registration Form</title>

    <link rel="stylesheet" href="./assets/styles/index.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="container">
        <input type="checkbox" id="check">
        <div class="login form">
            <header>Login</header>
            <form action="./server/models/login.php" method="post">
 
                <input type="text" placeholder="Username" name="USERNAME">
                <input type="password" placeholder="Password" name="PASSWORD">
                <input type="submit" class="button" value="Login">
            </form>
            <div class="signup">
                <span class="signup">Don't have an account?
                    <label for="check">Register</label>
                </span>
            </div>
        </div>
        <div class="registration form">
            <header>Register</header>
            <form action="./server/models/register.php" method="post">
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"> <?php echo $_GET['error'] ?> </p>
                <?php } ?>
                <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success'] ?></p>
                <?php } ?>
                <input type="text" placeholder="Username" name="USERNAME">
                <input type="text" placeholder="Gmail" name="GMAIL">
                <input type="password" placeholder="Password" name="PASSWORD">
                <input type="submit" class="button" value="Signup" name="REGISTER-BTN">
            </form>
            <div class="signup">
                <span class="signup">Already have an account?
                    <label for="check">Login</label>
                </span>
            </div>
        </div>
    </div>
</body>

</html>