<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="http://localhost/style.css">
</head>
<body id="target">
    <header>
    <img src="https://s3.ap-northeast-2.amazonaws.com/opentutorials-user-file/course/94.png" alt="생활코딩">
        <h1><a href="http://localhost/index.php">JavaScript</a></h1>
  </header>
    <nav>
        <ol>
    <?php
      echo file_get_contents("list.txt");
    ?>
        </ ol>
    </nav>
  <div id="control">
    <input type="button" value="white" onclick="document.getElementById('target').className='white'"/>
    <input type="button" value="black" onclick="document.getElementById('target').className='black'" />
  </div>
  <article>
  <?php
    if( empty($_GET['id']) == false ) {
      if($_GET['id']==1)
      {
          echo file_get_contents("java".".txt");
      }
      else if($_GET['id']==2)
      {
        echo file_get_contents("op".".txt");
      }
      else if($_GET['id']==3)
      {
        echo file_get_contents("vc".".txt");
      }
    }
  ?>
  </article>
</body>
</html>
