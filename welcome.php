<?php
  session_start();

  $title = "Welcome";
 ?>
 <?php include 'includes/head.php'; ?>
  <body>
    <?php if($_SESSION['username']) : ?>
    <h1>Roses are red, Violets are blue, This name is great (<?php echo $_SESSION['username']; ?>), Just like the user too.</h1>
    <a href="logut.php">Logga ut <?php echo $SEASSION['username']; ?></a>
  <?php else : ?>
  <h1>You better get the fuck out, Your not allowed, Except for your mom, owwwwwwwwwwwwwwww seriously get the fuck out</h1>
<?php endif ; ?>
  </body>
</html>
