<?php
  $conn = mysqli_connect("해킹을하고싶다면","조금더","노오오오력하시죠");
  mysqli_select_db($conn,'webapp');
  $result= mysqli_query($conn,'SELECT * FROM topic');

  $sql = "DELETE FROM topic WHERE title=".'"'.$_POST['title'].'"';
  $result = mysqli_query($conn,$sql);
  header('Location:http://localhost/index.php');
 ?>
