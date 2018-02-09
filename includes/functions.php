<?php

function checksusername($username){
  global $connection;

  $query="SELECT username FROM users WHERE username = '$username' ";
  $result = mysqli_query($connection, $query);

  if (mysqli_num_rows($result) > 0){
    return true;
  }
  else {
    return false;
  }
}

function isAuthenticated() {

}

function TitleCheck(){
  $username = $_SESSION['username'];

  $hi = substr("$username", -1);
    if (isset($_SESSION['username'])) {

      if ($hi == "s" || $hi == "S") {
        $title = $username . ' tasks';
      }
      else {
        $title = $username . 's tasks';
      }
    }
}
 ?>
