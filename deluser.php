<?php
  require('./include/db.php');

  $id = $_GET['id'];
  //ceate query  
  $query = 'DELETE FROM users WHERE id = '.$id;
  
  mysqli_query($conn, $query);

  header("Refresh:0; url=users.php");

  mysqli_close($conn);
  
?>