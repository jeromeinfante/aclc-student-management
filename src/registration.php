<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registration</title>
  <link rel="stylesheet" href="../css/registration.css" />
</head>

<body>
  <div class="login-container">
    <div class="login-form">
      <h2>Register</h2>
      <form action="registration.php" method="POST">
        <input type="text" name="FULLNAME" placeholder="Fullname" required />
        <br />
        <input type="text" name="EMAIL" placeholder="Email Address" required />
        <br />
        <input type="password" name="PASSWORD" placeholder="Password" required />
        <br />
        <input type="submit" value="Submit" name="SUBMIT" />



        <?php
        include("dbconn.php");
        $fullname = $_POST['FULLNAME'];
        $email = $_POST['EMAIL'];
        $pswd = $_POST['PASSWORD'];
        $password = md5($pswd);
        $submit = $_POST['SUBMIT'];
        if (isset($submit)) {
       
          $check = "SELECT * FROM `users` WHERE `full_name` = '$fullname' AND `email_address` = '$email' AND `user_password' = '$finalPassword'";
          $result = mysqli_query($CONN, $check);
          $data = mysqli_fetch_array($result, MYSQLI_NUM);

          if($data[0] > 1){
            echo '<script>alert("Account already exist!")</script>';
          }else{
            $insert = "INSERT INTO users (full_name, email_address, user_password) VALUES ('$fullname', '$email', '$password')";
            if(mysqli_query($CONN, $insert)){
              header("location: registration.php");
            }else{
              echo '<script>("Invalid")</script>';
            }
          }
        }
        ?>



      </form>
      <a href="login.php" class="">Login Here!</a>
    </div>
  </div>
</body>

</html>

<?php

session_destroy();

?>