<?php
  $title = "Edit" . $currentTaskName . "?";

  include 'includes/head.php';

  $taskID = $_GET['edit_task'];
  $currentTaskName = $_GET['taskname'];

  if (isset($_POST['editTask'])) {
    $newTaskName = $_POST['taskname'];

    $query = "UPDATE tasks SET task='$newTaskName' WHERE id=$taskID";
    $editTaskQuery = mysqli_query($connection, $query);
    header("Location: welcome.php");
  }

 ?>

 <form action="edit.php" method="post">
   <h2>Here you can edit your text</h2>
   <input type="hidden" name="taskID" value="<?php echo $taskID; ?>">
   <input type="text" name="taskname" value="<?php echo $currentTaskName; ?>">
   <input type="submit" name="editTask" value="Change">
   <a href="welcome.php">Back</a>
 </form>

</body>
</html>
