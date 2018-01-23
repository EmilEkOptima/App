<?php
include 'includes/head.php';
$title = "Login";

  session_start();
  if (isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "SELECT * FROM users WHERE username = '{$username}' ";
    $select_user_query = mysqli_query($connection, $query);

  if (!$select_user_query){
    die('Query failed') . mysqli_error($connection);
  }

  while ($row = mysqli_fetch_array($select_user_query)) {
       $db_id = $row['id'];
       $db_username = $row['Username'];
       $db_password = $row['Password'];

    }

    $password = crypt($password, $db_password);

    if ($username === $db_username && $password === $db_password) {
      $_SESSION['userid'] = $db_id;
      $_SESSION['username'] = $db_username;
     header("Location: welcome.php");
    }
    else {
    $errorMessage = "That user does not exist";
    }


  }
 ?>


  <body>
    <form class="login animated flipInX" action="login.php" method="post">
      <h3>Login</h3>
        <input type="text" name="username" placeholder="Username" autofocus>
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="login" value="Login">
        <a class="register" href="register.php">Have account?</a>
      </form>
      <?php if ($errorMessage) : ?>
      <div class="alert flipInX"><?php echo $errorMessage; ?></div>
    <?php endif; ?>
  </body>
</html>
