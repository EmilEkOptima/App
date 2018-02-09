<?php

  include 'includes/head.php';

  if (!empty($_GET['del_task'])) {
    $id = $_REQUEST['del_task'];
  }

  if (!empty($_POST)) {

     	$id = $_POST['del_task'];

      mysqli_query($connection, "DELETE FROM tasks WHERE id=".$id);
    	header('location: admin.php');
  }

  // if (!empty($_POST)) {
  //   $taskID = $_POST['taskID'];
  //   $query = "DELETE FROM tasks WHERE id = $taskID";
  //   $deleteTaskQuery = mysqli_query($connection, $query);
  //   header("Location: welcome.php");
  // }

 ?>

 <form action="delete.php" method="post">
   <input type="hidden" name="del_task" value="<?php echo $id; ?>">
   <h2>Are you sure?</h2>
   <input type="submit" name="deleteTask" value="Ja">
   <a href="admin.php">Nej</a>
 </form>

</body>
</html>
