
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WEB</title>
  </head>
  <body>
    <h1> 출력 </h1>
   <!-- <p><a href="index.php">topic</a></p> -->
    
      <?php  
      mysqli_query($conn,"set names utf8");
      $sql = "SELECT * FROM car";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_array($result)){
        echo $row['car_number'].;
        echo nl2br();
      }

      if($conn){
      echo "서버와 연결되었습니다.";
    }
      ?>
      <br>
  </body>
</html>