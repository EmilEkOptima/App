<?php
  session_start();

  $title = "Welcome";
  
  // initialize errors variable
 $errors = "No task was filled";

 // connect to database
 $db = mysqli_connect("localhost", "root", "root", "appdb");

   // insert a quote if submit button is clicked
   if (isset($_POST['submit'])) {
     if (empty($_POST['task'])) {
       $errors = "You must fill in the task";
     }else{
       $task = $_POST['task'];
       $sql = "INSERT INTO tasks (task, userid) VALUES ('$task', '{$_SESSION['userid']}')";
       mysqli_query($db, $sql);
       header('location: welcome.php');
     }
   }
   // delete task
  if (isset($_GET['del_task'])) {
  	$id = $_GET['del_task'];

  	mysqli_query($db, "DELETE FROM tasks WHERE id=".$id);
  	header('location: welcome.php');
  }

?>


 <?php include 'includes/head.php'; ?>
  <body id="normal">

    <nav>
      <a href="logut.php">Logout <?php echo $_SESSION['username']; ?></a>
      <h1>App</h1>
    </nav>
    <?php if(isset($_SESSION['username'])) : ?>
      <div class="heading">
		<h2 style="font-style: 'Hervetica';">ToDo List Application PHP and MySQL database</h2>
	</div>


	<form method="post" action="welcome.php" class="input_form">
    <?php if (isset($errors)) { ?>
	<p><?php echo $errors; ?></p>
<?php } ?>
		<input type="text" name="task" class="task_input">
		<button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
	</form>


  <table>
	<thead>
		<tr>
			<th>N</th>
			<th>Tasks</th>
			<th style="width: 60px;">Action</th>
		</tr>
	</thead>

	<tbody>
		<?php
		// select all tasks if page is visited or refreshed
		$tasks = mysqli_query($db, "SELECT * FROM tasks WHERE userid = {$_SESSION['userid']}");

		$i = 1; while ($row = mysqli_fetch_array($tasks)) { ?>
			<tr>
				<td> <?php echo $i; ?> </td>
				<td class="task"> <?php echo $row['task']; ?> </td>
				<td class="delete">
					<a href="welcome.php?del_task=<?php echo $row['id'] ?>">x</a>
				</td>
			</tr>
		<?php $i++; } ?>
	</tbody>
</table>


  <?php else : ?>
  <h1>You better get the fuck out, Your not allowed, Except for your mom, owwwwwwwwwwwwwwww seriously get the fuck out</h1>
<?php endif ; ?>
  </body>
</html>
