<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

$db = new mysqli("210.117.181.21", "s201414795", "tndqja07289!", "s201414795");
$db->set_charset("utf-8");

function mq($sql){
  global $db;
  return $db->query($sql);
}
 ?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta charset="utf-8">
<link rel="stylesheet" href="./assets/reset.css"/>
<link rel="stylesheet" type="text/css" href="./assets/common.css"/>
<link rel="stylesheet" type="text/css" href="./assets/layout.css"/>
<link rel="stylesheet" type="text/css" href="./assets/navi.css"/>
<link rel="stylesheet" href="common.css"/>
</head>
<body>
	<div id="nav">
		<div class="nav_inner">
			<ul class="navigation clearfix">
				<li class="navigation_list"><a href="loginform.php" class="navigation_link">로그인</a></li>
				<li class="navigation_list"><a href="" class="navigation_link">이용방법</a></li>
				<li class="navigation_list"><a href="reviewlist.php" class="navigation_link">리뷰</a></li>
				<li class="navigation_list"><a href="" class="navigation_link">카쉐어링</a></li>
				<li class="navigation_list"><a href="" class="navigation_link">공지사항</a></li>

        	<li class="navigation_list"><a href="de.php" class="navigation_link"><img src="./image/title.PNG" width="80" height="40" align="center"/></a></li>
			</ul>
		</div>
	</div>
<div id="wrap">
	<div id="wrap_in">
		<div id="mem_t">Member Login</div>
		<div id="mem_li"></div>
		<form action="access.php" method="post">
		<div id="in_box" class="idpw_box">
			<input type="text" name="user_id" maxlength="20" placeholder="사용자 아이디" required />
			<input type="password" name="user_pw" maxlength="20" placeholder="사용자 비밀번호" required/>
		</div>
		<span id="join_mem"><a href="joinForm.php">회원가입</a></span>
		<div id="log_box_bot">
			<button>LOGIN</button>
		</div>
	</form>
</div>
</div>
</body>
</html>
