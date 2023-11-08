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
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $fullname = $_POST["FULLNAME"];
          $email = $_POST["EMAIL"];
          $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

          $check_query = "SELECT * FROM users WHERE email_address = '$email'";
          $check_result = mysqli_query($CONN, $check_query);

          if (mysqli_num_rows($check_result) > 0) {
            echo '<script>alert ("Email Address Already Exists")</script>';
          } else {
            $insert_query = "INSERT INTO users (full_name, email_address, user_password) VALUES ('$fullname', '$email', '$password')";
            if (mysqli_query($CONN, $insert_query)) {
              echo "Registration Successfull!";
              header("location: login.php");
            } else {
              echo "Error" . mysqli_error($CONN);
            }
          }
          mysqli_close($CONN);
        }




        ?>



      </form>
      <a href="login.php" class="">Login Here!</a>
    </div>
  </div>
</body>

</html>