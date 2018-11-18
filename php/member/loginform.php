<?php
session_start();
header('Content-Type: text/html; charset=utf8');
include("./db_connect.php");
		$conn=dbconn();
		mysqli_query($conn,"set names utf8");
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
				<li class="navigation_list"><a href="" class="navigation_link">리뷰</a></li>
				<li class="navigation_list"><a href="" class="navigation_link">카쉐어링</a></li>
				<li class="navigation_list"><a href="" class="navigation_link">공지사항</a></li>
				<li class="navigation_list"><a href="" class="navigation_link">이미지삽입</a></li>
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
