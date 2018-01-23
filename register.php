<?php
  session_start();
  $title = "Register";
  include 'includes/head.php';

  if (isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (checksusername($username)) {
      echo "That username is already taken";
    }
    else {
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

         $hashFormat = "$2y$10$";
         $password = crypt($password, $hashAndSalt);

         $query = "INSERT INTO users(username, password)";
         $query .="VALUES ('$username', '$password')";

         $result = mysqli_query($connection, $query);
         if (!$result) {
           die("Query failed") . mysqli_error($connection);
         }

         header('location: login.php');

     }

    }



 ?>

  <body>
    <form class="login animated flipInX" action="register.php" method="post">
      <h3>Register</h3>
          <input type="text" name="username" placeholder="Username" autofocus>
          <input type="password" name="password" placeholder="Password">
          <input type="submit" name="login" value="Register">
      </form>
  </body>
</html>
