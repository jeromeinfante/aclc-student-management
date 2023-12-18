<?php
session_start();
include_once("../app/database/dbconn.php");




if (isset($_SESSION['admin_username'])) {

        $id = $_GET['updateid'];
        $result = mysqli_query($conn, "SELECT  `fullname`, `gmail`, `phoneNumber`, `hometown` FROM `student` WHERE id='$id'");
        if (isset($_POST['update'])) {
            $fullname = $_POST["FULLNAME"];
            $gmail = $_POST["GMAIL"];
            $cp_number = $_POST["NUMBER"];
            $hometown = $_POST["HOMETOWN"];
            $grade = $_POST["GRADE"];
            $section = $_POST["SECTION"];
            $strand = $_POST["STRAND"];

            // $update = "UPDATE `student` SET id=$id, fullname='$fullname', gmail='$gmail', phoneNumber='$cp_number', hometown='$hometown', grade='$grade', section='$section', strand='$strand' WHERE id=$id";
            // $sql = mysqli_query($conn, $update);
            // if ($sql) {
            //     echo "done";
            //     header("location: update.php");
            // } else {
            //     echo "failed";
            //     header("location: update.php");
            // }
            if (empty($fullname)) {
                header("location: update.php?error=Name is Required");
            } else if (empty($gmail)) {
                header("location: update.php?error=Gmail is Required");
            } else if (empty($cp_number)) {
                header("location: update.php?error=Cellphone is Required");
            } else if (empty($hometown)) {
                header("location: update.php?error=Hometown is Required");
            } else if (empty($grade)) {
                header("location: update.php?error=Grade is Required");
            } else if (empty($section)) {
                header("location: update.php?error=Section is Required");
            } else if (empty($strand)) {
                header("location: update.php?error=Strand is Required");
            } else if (!filter_var($gmail, FILTER_VALIDATE_EMAIL)) {
                header("location: update.php?error=Gmail is Invalid");
            } else {
                mysqli_query($conn, "UPDATE `student` SET id=$id, fullname='$fullname', gmail='$gmail', phoneNumber='$cp_number', hometown='$hometown', grade='$grade', section='$section', strand='$strand' WHERE id=$id");
                header("location: update.php?success=Update Successfully!");
            }
        }
    

?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>User Registration</title>
        <link rel="stylesheet" href="../styles/update.css?v=<?php echo time(); ?>">
    </head>

    <body>

        <div class="parent-container">
            <div class="container">
                <div class="title">Update Student</div>
                <div class="content">
                    <form action="update.php" method="POST">
                        <?php if (isset($_GET['error'])) { ?>
                            <p class="error"><?php echo $_GET['error'] ?></p>

                        <?php } ?>

                        <?php if (isset($_GET['success'])) { ?>
                            <p class="success"><?php echo $_GET['success'] ?></p>

                        <?php } ?>



                        <?php while ($row = mysqli_fetch_assoc($result)) : ?>

                            <div class="user-details">
                                <div class="input-box">
                                    <span class="details">Full Name</span>
                                    <input type="text" placeholder="<?php echo $row['fullname'] ?>" name="FULLNAME">
                                </div>
                                <div class="input-box">
                                    <span class="details">Gmail</span>
                                    <input type="text" placeholder="<?php echo $row['gmail'] ?>" name="GMAIL">
                                </div>
                                <div class="input-box">
                                    <span class="details">Phone Number</span>
                                    <input type="number" placeholder="<?php echo $row['phoneNumber'] ?>" name="NUMBER">
                                </div>
                                <div class="input-box">
                                    <span class="details">Hometown</span>
                                    <input type="text" placeholder="<?php echo $row['hometown'] ?>" name="HOMETOWN">
                                </div>
                            </div>
                            <h4>Grade Level</h4>
                            <div class="Grade">
                                <div class="item">
                                    <input type="radio" name="GRADE" value="11" id="11">
                                    <label for="11">11</label>
                                </div>
                                <div class="item">
                                    <input type="radio" name="GRADE" value="12" id="12">
                                    <label for="12">12</label>
                                </div>

                            </div>
                            <h4>Section</h4>
                            <div class="Section">
                                <div class="item">
                                    <input type="radio" name="SECTION" value="A" id="A">
                                    <label for="A">A</label>
                                </div>
                                <div class="item">
                                    <input type="radio" name="SECTION" value="B" id="B">
                                    <label for="B">B</label>
                                </div>
                                <div class="item">
                                    <input type="radio" name="SECTION" value="C" id="C">
                                    <label for="C">C</label>
                                </div>
                                <div class="item">
                                    <input type="radio" name="SECTION" value="D" id="D">
                                    <label for="D">D</label>
                                </div>
                                <div class="item">
                                    <input type="radio" name="SECTION" value="E" id="E">
                                    <label for="E">E</label>
                                </div>
                                <div class="item">
                                    <input type="radio" name="SECTION" value="F" id="F">
                                    <label for="F">F</label>
                                </div>
                                <div class="item">
                                    <input type="radio" name="SECTION" value="G" id="G">
                                    <label for="G">G</label>
                                </div>
                                <div class="item">
                                    <input type="radio" name="SECTION" value="H" id="H">
                                    <label for="H">H</label>
                                </div>
                            </div>
                            <h4>Strand</h4>
                            <div class="strand">
                                <div class="item">
                                    <input type="radio" name="STRAND" value="TVL" id="TVL">
                                    <label for="TVL">TVL</label>
                                </div>
                                <div class="item">
                                    <input type="radio" name="STRAND" value="STEM" id="STEM">
                                    <label for="STEM">STEM</label>
                                </div>
                                <div class="item">
                                    <input type="radio" name="STRAND" value="GAS" id="GAS">
                                    <label for="GAS">GAS</label>
                                </div>
                                <div class="item">
                                    <input type="radio" name="STRAND" value="ABM" id="ABM">
                                    <label for="ABM">ABM</label>
                                </div>
                                <div class="item">
                                    <input type="radio" name="STRAND" value="HUMMS" id="HUMMS">
                                    <label for="HUMMS">HUMMS</label>
                                </div>
                            </div>
                            <div class="button">
                                <input type="submit" value="Update" name="update" class="btn">
                            </div>
                        <?php endwhile; ?>
                    </form>
                    <div class="dashboard">
                        <a href="dashboard.php">Dashboard</a>
                    </div>

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