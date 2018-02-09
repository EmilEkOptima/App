<?php
  session_start();

  include 'includes/head.php';

  // initialize errors variable
  $errors = "Fill in task here";

   // insert a quote if submit button is clicked
   if (isset($_POST['submit'])) {
     if (empty($_POST['task'])) {
       $errors = "You must fill in the task";
     }
     else{
       $task = $_POST['task'];
       $sql = "INSERT INTO tasks (task, userid) VALUES ('$task', '{$_SESSION['userid']}')";
       mysqli_query($connection, $sql);
       header('location: admin.php');
     }
   }

   // delete task
//  if (isset($_GET['del_task']) && isset($_SESSION['username'])) {
//  	$id = $_GET['del_task'];

//  	mysqli_query($db, "DELETE FROM tasks WHERE id=".$id);
//  	header('location: welcome.php');
//  }

?>

<?php include 'includes/navigation.php'; ?>
<?php if(isset($_SESSION['username'])) : ?>
  <div class="container-fluid">
    <div class="row">
      <?php include 'includes/tasks.php' ?>
    </div>
  </div>
<?php else : ?>
  <h1>You dont have access to this site</h1>
<?php endif ; ?>


<?php include "includes/footer.php"; ?>
