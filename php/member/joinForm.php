
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>회원가입</title>
    <link rel="stylesheet" href="./assets/reset.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/common.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/layout.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/navi.css"/>
    <link rel="stylesheet" href="common2.css"/>

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
          <li class="navigation_list"><a href="" class="navigation_link"><img src="./image/title.PNG" width="80" height="40" align="center"/></a></li>
        </ul>
      </div>
    </div>
    <div id="wrap">
	    <div id="join_form_in">
  		    <div id="mem_t" >회원가입</div>
      			<form action="joinOK.php" method="post">
      				<div id="join_f">
      					<div class="form-group">
      						<label for="id">아이디</label>
      						<div class="mb"><input type="text" class="inp" id="id" name="user_id" placeholder="아이디" /></div>
      					</div>
      					<div class="form-group">
      						<label for="pw">비밀번호</label>
      						<div class="mb"><input type="password" class="inp" id="pw" name="user_pw" placeholder="비밀번호" /></div>
      					</div>
      					<div class="form-group">
      						<label for="name">이름</label>
      						<div class="mb"><input type="text" class="inp" id="name" name="user_name" placeholder="이름" /></div>
      					</div>
      					  <div class="form-group">
      						<label for="age">나이</label>
      				        <div class="mb"><input type="text" class="inp" id="age" name="user_age" placeholder="나이" /></div>
      				    </div>
      				    <div class="form_btn">
      				    	<button type="submit" class="form_bt">회원가입</button>

      				    </div>
      				</div> <!-- join_f end -->
      			</form>
  		</div>
	</div>




  </body>
</html>
