<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
      <?php
        $list = scandir('./data'); /* scandir 디렉토리를 읽어오는 함수 */
        $i = 0;
        while($i < count($list)){ /*count 길이를 알려주는 함수*/
          // scandir의 문제점 배열의 0,1에 표현하지 않아도 될 값이 들어감 
          // 다른표현  if($list[$i] != '.' && $list[$i] != '..') 
          if($list[$i] != '.') { 
            if($list[$i] != '..') {
              echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
            }
          }
          $i = $i + 1;
        }
      ?>
    </ol>
    <h2>
      <?php
      if(isset($_GET['id'])){
        echo $_GET['id'];
      } else {
        echo "Welcome";
      }
      ?>
    </h2>
    <?php
    if(isset($_GET['id'])){
      echo file_get_contents("data/".$_GET['id']);
    } else {
      echo "Hello, PHP";
    }
     ?>
  </body>
</html>