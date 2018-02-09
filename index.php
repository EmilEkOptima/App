<?php
$bodyClass = "d-flex justify-content-center align-items-center";
include 'includes/head.php';


$query = "SELECT id FROM users";
$results = mysqli_query($connection, $query);
$numberOfUsers = mysqli_num_rows($results);
?>

<!-- Background video -->
<video loop muted autoplay>
  <source src="vid/Myvid.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>
<!-- Background video END -->

<!-- Main content -->
<main class="col-12-sm-8 col-lg-4 animated fadeInDown">
  <img src="img/Logo.png" class="img-fluid" alt="To-Do">
  <p id="quote"></p>
  <p>Over <span><?php echo $numberOfUsers; ?></span> users registered</p>
  <a href="login.php" class="btn btn-outline-light">Login</a>
  <a href="register.php" class="btn btn-outline-light">Register</a>
</main>
<!-- Main content -->

<?php include 'includes/footer.php'; ?>
