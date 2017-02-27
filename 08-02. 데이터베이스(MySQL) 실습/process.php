<?php
  $conn = mysqli_connect("이런걸들여다볼정도로","제가궁금하신가요","그래도안알랴줌");
  mysqli_select_db($conn,'webapp');
  $result= mysqli_query($conn,'SELECT * FROM topic');

  $sql = "INSERT INTO topic (title,description,author,created) VALUES('".$_POST['title']."', '".$_POST['description']."', '".$_POST['author']."', now())";
  $result = mysqli_query($conn,$sql);
  header('Location:http://localhost/index.php');
 ?>
