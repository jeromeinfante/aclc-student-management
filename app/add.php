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
                    <form action="./functions/add_student.php" method="post">
                        <?php if (isset($_GET['error'])) { ?>
                            <p class="error"><?php echo $_GET['error'] ?></p>

                        <?php } ?>

                        <?php if (isset($_GET['success'])) { ?>
                            <p class="success"><?php echo $_GET['success'] ?></p>

                        <?php } ?>
                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Full Name</span>
                                <input type="text" placeholder="Enter your name"  name="FULLNAME">
                            </div>
                            <div class="input-box">
                                <span class="details">Gmail</span>
                                <input type="text" placeholder="Enter your Gmail"  name="GMAIL">
                            </div>
                            <div class="input-box">
                                <span class="details">Phone Number</span>
                                <input type="number" placeholder="Enter your Phone Number"  name="CP_NUMBER">
                            </div>
                            <div class="input-box">
                                <span class="details">Hometown</span>
                                <input type="text" placeholder="Enter your Hometown"  name="HOMETOWN">
                            </div>
                        </div>
                        <h4>Grade Level</h4>
                        <div class="Grade">
                            <div class="item"><input type="radio" name="grade_level" value="11" >
                                <label for="11">11</label>
                            </div>
                            <div class="item"><input type="radio" name="grade_level" value="12" >
                                <label for="12">12</label>
                            </div>

                        </div>
                        <h4>Section</h4>
                        <div class="Section">
                            <div class="item">
                                <input type="radio" name="grade_section" value="A" >
                                <label for="11">A</label>
                            </div>
                            <div class="item">
                                <input type="radio" name="grade_section" value="B" >
                                <label for="12">B</label>
                            </div>
                            <div class="item">
                                <input type="radio" name="grade_section" value="C" >
                                <label for="12">C</label>
                            </div>
                            <div class="item">
                                <input type="radio" name="grade_section" value="D" >
                                <label for="12">D</label>
                            </div>
                            <div class="item">
                                <input type="radio" name="grade_section" value="E" >
                                <label for="12">E</label>
                            </div>
                            <div class="item">
                                <input type="radio" name="grade_section" value="F" >
                                <label for="12">F</label>
                            </div>
                            <div class="item">
                                <input type="radio" name="grade_section" value="G" >
                                <label for="12">G</label>
                            </div>
                            <div class="item">
                                <input type="radio" name="grade_section" value="H" >
                                <label for="12">H</label>
                            </div>
                        </div>
                        <h4>Strand</h4>
                        <div class="strand">
                            <div class="item">
                                <input type="radio" name="grade_strand" value="TVL" >
                                <label for="12">TVL</label>
                            </div>
                            <div class="item">
                                <input type="radio" name="grade_strand" value="STEM" >
                                <label for="12">STEM</label>
                            </div>
                            <div class="item">
                                <input type="radio" name="grade_strand" value="GAS" >
                                <label for="12">GAS</label>
                            </div>
                            <div class="item">
                                <input type="radio" name="grade_strand" value="ABM" >
                                <label for="12">ABM</label>
                            </div>
                            <div class="item">
                                <input type="radio" name="grade_strand" value="HUMMS" >
                                <label for="12">HUMMS</label>
                            </div>
                        </div>
                        <div class="button">
                            <button name="ADD_BTN" type="submit">Register</button>
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