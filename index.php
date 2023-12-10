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
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" id="login-btn">
                    Login
                </button>
                <button type="button" class="toggle-btn" id="register-btn">
                    Register
                </button>
            </div>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error'] ?></p>

            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success'] ?></p>
            <?php } ?>
            <form id="login" action="login_func.php" method="post" class="input-group">
                <input type="text" class="input-field" placeholder="Username" required name="USERNAME" />
                <input type="password" class="input-field" placeholder="Password" required name="PASSWORD" />
                <button type="submit" class="submit-btn" name="LOGIN-BTN">Log In</button>
            </form>
            <form id="register" action="register_func.php" method="post" class="input-group">
                <input type="text" class="input-field" placeholder="Username" required name="USERNAME" />
                <input type="text" class="input-field" placeholder="Gmail" required name="GMAIL" />
                <input type="password" class="input-field" placeholder="Password" required name="PASSWORD" />
                <button type="submit" class="submit-btn" name="REGISTER-BTN">Register</button>
            </form>
        </div>
    </div>
    <script src="login.js?v=<?php echo time(); ?>"></script>
</body>

</html>