<?php
  include "db.php";
  include "functions.php";
  TitleCheck();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta type="description" content="<?php echo $description; ?>">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  </head>
  <?php if (isset($bodyClass)) : ?>
  <body class="<?php echo $bodyClass;?>">
  <?php else: ?>
  <body>
  <?php endif; ?>
