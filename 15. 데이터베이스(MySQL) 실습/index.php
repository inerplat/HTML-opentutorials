<?php
$conn = mysqli_connect("","","");
mysqli_select_db($conn,'webapp');
$result= mysqli_query($conn,'SELECT * FROM topic');


 ?>

<!DOCTYPE html>
  <html>
  <head>
    <meta charset = "utf-8" />
    <link rel="stylesheet" type="text/css" href="http://localhost/style.css">
  </head>
  <body id="target">

    <header>
      <h1><a href="http://localhost/index.php">JavaScript</a></h1>
    </header>

    <nav>
      <ol id="navol">
        <?php
        while($row = mysqli_fetch_assoc($result))
        {
          echo '<li><a href = "http://localhost/index.php?id='.$row['id'].'">'.$row['title'].'</li></a>'."\n";
        }
        ?>
      </ol>
    </nav>

    <div id="con">
      <input type="button" value="white" id="white_btn" />
      <input type="button" value="black" id="black_btn" />
      <a href="http://localhost/write.php">쓰기</a>
      <a href="http://localhost/delete.php">삭제</a>
    </div>
<script src="http://localhost/script.js"> </script>

    <article>

      <?php
      if(empty($_GET['id']) == false)
      {
      $sql='SELECT * FROM topic WHERE id='.$_GET['id'];
      $result=mysqli_query($conn,$sql);
      $data=mysqli_fetch_assoc($result);
      echo '<h2>'.$data['title'].'</h2>';
      echo $data['description'];
    }
        ?>
      <!--
      <?php
      if (empty($_GET['id']) == false){
        if($_GET['id']==1) $name='java';
        else if($_GET['id']==2) $name='vc';
        else if($_GET['id']==3) $name='op';
        else if($_GET['id']==4) $name='';

        echo file_get_contents($name.".txt");
      }

       ?>
     -->
    </article>

    <div id="disqus_thread"></div>
    <script>

    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = '//practice-of-javascript.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

    <script src="http://localhost/javascript/html/script.js"> </script>

  </body>
</html>
