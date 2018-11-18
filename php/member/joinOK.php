<?php
//session_start();

include("./db_connect.php");
    $conn=dbconn();
    mysqli_query($conn,"set names utf8");


$user_id = $_POST[user_id];
$user_name = $_POST[user_name];
$pw = $_POST[user_pw];
$user_age = $_POST[user_age];
$sql = "SELECT * FROM usertable";

$user_pw = md5($pw);
$sql = "INSERT INTO usertable (user_id, user_name, user_pw, user_age) values('".$user_id."','".$user_name."','".$user_pw."','".$user_age."')";
$result = mysqli_query($conn, $sql);


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> 회원가입</title>
    <link rel="stylesheet" href="./assets/reset.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/common.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/layout.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/navi.css"/>

  </head>
  <body>
    <div id="nav">
      <div class="nav_inner">
        <ul class="navigation clearfix">
          <li class="navigation_list"><a href="loginform.php" class="navigation_link">로그인</a></li>
          <li class="navigation_list"><a href="" class="navigation_link">이용방법</a></li>
          <li class="navigation_list"><a href="" class="navigation_link">리뷰</a></li>
          <li class="navigation_list"><a href="" class="navigation_link">카쉐어링</a></li>
          <li class="navigation_list"><a href="" class="navigation_link">공지사항</a></li>
          <li class="navigation_list"><a href="" class="navigation_link">이미지삽입</a></li>
        </ul>
      </div>
    </div>
    <form>
      <a href="loginform.php">로그인 화면으로 가기</a>
    </form>
  </body>
</html>
