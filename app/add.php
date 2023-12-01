<?php
session_start();

if (isset($_SESSION['admin_username'])) {



?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>User Registration</title>
        <link rel="stylesheet" href="../styles/add.css?v=<?php echo time(); ?>">
    </head>

    <body>
        <header class="header">
            <h2 class="logo">Add</h2>
            <nav class="navbar">
                <a href="home.php">Home</a>
                <a href="add.php">Add</a>
                <a href="dashboard.php">Dashboard</a>
                <a href="../portfolio/index.html">Portfolio</a>
                <a href="logout.php">Logout</a>
            </nav>
        </header>
        <div class="parent-container">
            <div class="container">
                <div class="title">Add Student</div>
                <div class="content">
                    <form action="./functions/add_student.php">
                        <?php if (isset($_GET['error'])) { ?>
                            <p class="error"><?php echo $_GET['error'] ?></p>

                        <?php } ?>

                        <?php if (isset($_GET['success'])) { ?>
                            <p class="success"><?php echo $_GET['success'] ?></p>

                        <?php } ?>
                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Full Name</span>
                                <input type="text" placeholder="Enter your name" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Gmail</span>
                                <input type="text" placeholder="Enter your username" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Phone Number</span>
                                <input type="text" placeholder="Enter your email" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Hometown</span>
                                <input type="text" placeholder="Enter your number" required>
                            </div>
                        </div>
                        <!-- <div class="gender-details">
                            <input type="radio" name="gender" id="dot-1">
                            <input type="radio" name="gender" id="dot-2">
                            <span class="gender-title">Gender</span>
                            <div class="category">
                                <label for="dot-1">
                                    <span class="dot one"></span>
                                    <span class="gender">Male</span>
                                </label>
                                <label for="dot-2">
                                    <span class="dot two"></span>
                                    <span class="gender">Female</span>
                                </label>
                            </div>
                        </div>
                        <div class="gender-details">
                            <input type="radio" name="gender" id="dot-1">
                            <input type="radio" name="gender" id="dot-2">
                            <input type="radio" name="gender" id="dot-3">
                            <span class="gender-title">Gender</span>
                            <div class="category">
                                <label for="dot-1">
                                    <span class="dot one"></span>
                                    <span class="gender">Male</span>
                                </label>
                                <label for="dot-2">
                                    <span class="dot two"></span>
                                    <span class="gender">Female</span>
                                </label>
                                <label for="dot-3">
                                    <span class="dot three"></span>
                                    <span class="gender">Prefer not to say</span>
                                </label>
                            </div>
                        </div> -->
                        <div class="Grade">
                            <h3>Grade Level</h3>
                            <input type="radio" id="11" name="grade_level" value="11">
                            <label for="11">11</label>
                            <input type="radio" id="12" name="grade_level" value="12">
                            <label for="12">12</label>
                        </div>
                        <div class="Section">
                            <h3>Section</h3>
                            <input type="radio" id="11" name="grade_level" value="11">
                            <label for="11">A</label>
                            <input type="radio" id="12" name="grade_level" value="12">
                            <label for="12">B</label>
                        </div>
                        <div class="button">
                            <input type="submit" value="Register">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </body>

    </html>

<?php
} else {
    header("Location: login.php");
    exit();
}
?>