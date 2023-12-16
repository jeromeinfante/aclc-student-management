<?php
session_start();
require_once("../app/database/dbconn.php");
if (isset($_SESSION['admin_username'])) {



?>

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    
</body>
</html>

<?php
} else {
    header("Location: login.php");
    exit();
}
?>