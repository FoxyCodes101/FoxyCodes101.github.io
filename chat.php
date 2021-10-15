
<html>
  <head>
    <title>Foxhole</title>
  </head>
  <body vlink="#880000" text="#2222ff" link="#ff0000" bgcolor="#000000" alink="#00ff00">
    <h1 style="color:red">This page is under construction<h1>
    <form method="post">
      <input type="text" name="inp">
      <input type="submit" name="submit">
    </form>
   </body>
</html>
    

<?php
  if(isset($_POST['inp']))
  {
  $data=$_POST['inp'];
  
  $fp = fopen('text.txt', 'a');
  fwrite($fp, $data);
  fclose($fp);
  }
  

?>
