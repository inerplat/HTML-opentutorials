<?php
  $conn = mysqli_connect("o","o","o");
  mysqli_select_db($conn,'webapp');
  $result= mysqli_query($conn,'SELECT * FROM topic');

  $sql = "DELETE FROM topic WHERE title=".'"'.$_POST['title'].'"';
  $result = mysqli_query($conn,$sql);
  header('Location:http://localhost/index.php');
 ?>
