<?php 
session_start();

if (isset($_SESSION['admin_username'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../styles/dashboard.css?v=<?php echo time(); ?>" />
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
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Section</th>
                <th>Grade Level</th>
                <th>Strand</th>
                <th>Cellphone Number</th>
                <th>Gmail</th>
                <th>Gender</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>20</td>
                <td>A</td>
                <td>New York</td>
                <td>USA</td>
                <td>Male</td>
                <td>
                    <button class="button delete">Delete</button>
                    <button class="button update">Update</button>
                </td>
            </tr>

        </tbody>
    </table>
</body>
</html>

<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>