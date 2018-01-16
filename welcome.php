<?php
  session_start();

  $title = "Welcome";
 ?>
 <?php include 'includes/head.php'; ?>
  <body>

    <h1>Roses are red, Violets are blue, This name is great (<?php echo $_SESSION['username']; ?>), Just like the user too.</h1>

  </body>
</html>
