<?php 
session_start();

if (isset($_SESSION['admin_username'])) {

 ?>

 <?php 
 
 
 
 
 
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
                    <form action="#">
                        <div class="user-details">
                            <div class="input-box">
                                <input
                                    type="text"
                                    placeholder="Full Name"
                                    required
                                />
                            </div>
                            <div class="input-box">
                                <input
                                    type="text"
                                    placeholder="Section"
                                    required
                                />
                            </div>
                            <div class="input-box">
                                <input
                                    type="number"
                                    placeholder="Grade Level"
                                    required
                                />
                            </div>
                            <div class="input-box">
                                <input
                                    type="text"
                                    placeholder="Strand"
                                    required
                                />
                            </div>
                            <div class="input-box">
                                <input
                                    type="text"
                                    placeholder="Celphone Number"
                                    required
                                />
                            </div>
                            <div class="input-box">
                                <input
                                    type="text"
                                    placeholder="Gmail"
                                    required
                                />
                            </div>
                        </div>
                        <div class="button">
                            <input type="submit" value="Add" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>