<?php
session_start();

if (isset($_SESSION['admin_username'])) {

?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Home</title>
        <link rel="stylesheet" href="../styles/add.css?v=<?php echo time(); ?>" />
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
                <div class="title">Add New Student</div>
                <div class="content">
                    <form action="./functions/add_student.php" method="POST">
                        <?php if (isset($_GET['error'])) { ?>
                            <p class="error"><?php echo $_GET['error'] ?></p>

                        <?php } ?>

                        <?php if (isset($_GET['success'])) { ?>
                            <p class="success"><?php echo $_GET['success'] ?></p>

                        <?php } ?>
                        <div class="user-details">
                            <div class="input-box">
                                <input type="text" placeholder="Full Name" name="FULLNAME" />
                            </div>
                            <div class="input-box">
                                <input type="text" placeholder="Section" name="SECTION" />
                            </div>
                            <div class="input-box">
                                <input type="number" placeholder="Grade Level" name="GRADE" />
                            </div>
                            <div class="input-box">
                                <input type="text" placeholder="Strand" name="STRAND" />
                            </div>
                            <div class="input-box">
                                <input type="text" placeholder="Celphone Number" name="CP_NUMBER" />
                            </div>
                            <div class="input-box">
                                <input type="text" placeholder="Gmail" name="GMAIL" />
                            </div>
                        </div>
                        <div class="button">
                            <button name="ADD_BTN" type="submit">Add</button>
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