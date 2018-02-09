
<section class="col-12-sm-8 col-lg-4">

  <div class="heading">
    <h2 style="font-style: 'Hervetica';">ToDo List Application PHP and MySQL database</h2>
  </div>

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
  $tasks = mysqli_query($connection, "SELECT * FROM tasks WHERE userid = {$_SESSION['userid']}");

  $i = 1; while ($row = mysqli_fetch_array($tasks)) { ?>
    <tr>
      <td> <?php echo $i; ?> </td>
      <td class="task"> <?php echo $row['task']; ?> </td>
      <td class="delete">
        <a href="delete.php?del_task=<?php echo $row['id']; ?>">x</a>
        <a href="edit.php?edit_task=<?php echo $row['id']; ?>&taskname=<?php echo $row['task']; ?>">Edit</a>
      </td>
    </tr>
  <?php $i++; } ?>
</tbody>
</table>

<form method="post" action="admin.php" class="input_form">
  <?php if (isset($errors)) { ?>
<p><?php echo $errors; ?></p>
<?php } ?>
  <input type="text" name="task" class="task_input">
  <button type="submit" name="submit" id="add_btn" class="btn btn-outline-dark">Add Task</button>
</form>

</section>
