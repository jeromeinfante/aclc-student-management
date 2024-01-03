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
            <form action="./server/models/login.php">
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"> <?php echo $_GET['error'] ?> </p>
                <?php } ?>
                <input type="text" placeholder="Username">
                <input type="password" placeholder="Password">
                <input type="submit" class="button" value="Login">
            </form>
            <div class="signup">
                <span class="signup">Don't have an account?
                    <label for="check">Signup</label>
                </span>
            </div>
        </div>
        <div class="registration form">
            <header>Signup</header>
            <form action="./server/models/signup.php">
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"> <?php echo $_GET['error'] ?> </p>
                <?php } ?>
                <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success'] ?></p>
                <?php } ?>
                <input type="text" placeholder="Username">
                <input type="text" placeholder="Gmail">
                <input type="password" placeholder="Password">
                <input type="submit" class="button" value="Signup">
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