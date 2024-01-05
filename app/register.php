<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="../assets/styles/register.css?v=<?php echo time(); ?>" />
</head>

<body>
    <div class="hero">
        <div class="form-box">
            <form id="register" action="./models/register_func.php" method="post" class="input-group">
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error'] ?></p>

                <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success'] ?></p>

                <?php } ?>
                <input type="text" class="input-field" placeholder="Username" name="USERNAME" />
                <input type="text" class="input-field" placeholder="Gmail" name="GMAIL" />
                <input type="password" class="input-field" placeholder="Password" name="PASSWORD" />
                <button type="submit" class="submit-btn" name="REGISTER-BTN">Register</button>
                <a href="login.php">Login Here!</a>
            </form>
        </div>
    </div>
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
    <link rel="stylesheet" href="../assets/styles/register.css?v=<?php echo time(); ?>" />
</head>

<body>
    <div class="container">
        <div class="registration form">
            <header>Signup</header>
            <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error'] ?></p>

                <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success'] ?></p>

                <?php } ?>
            <form action="./models/register_func.php" method="post">
                <input type="text" placeholder="Enter your username" name="USERNAME">
                <input type="test" placeholder="Enter your gmail" name="GMAIL">
                <input type="password" placeholder="Confirm your password" name="PASSWORD">
                <input type="submit" class="button" value="Signup" name="REGISTER-BTN">
            </form>
            <div class="signup">
                <span class="signup">Already have an account?
                    <a href="login.php">Login</a>
                </span>
            </div>
        </div>
    </div>
</body>

</html>