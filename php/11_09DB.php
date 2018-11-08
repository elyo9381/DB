
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta charset="utf-8">
<link rel="stylesheet" href="./assets/reset.css"/>
<link rel="stylesheet" type="text/css" href="./assets/common.css"/>
<link rel="stylesheet" type="text/css" href="./assets/layout.css"/>
<link rel="stylesheet" type="text/css" href="./assets/navi.css"/>



</head>
<body>

	<div id="nav">
		<div class="nav_inner">
			<ul class="navigation clearfix">
				<li class="navigation_list"><a href="" class="navigation_link">로그인</a></li>
				<li class="navigation_list"><a href="" class="navigation_link">이용방법</a></li>
				<li class="navigation_list"><a href="" class="navigation_link">리뷰</a></li>
				<li class="navigation_list"><a href="" class="navigation_link">카쉐어링</a></li>
				<li class="navigation_list"><a href="" class="navigation_link">공지사항</a></li>
				<li class="navigation_list"><a href="" class="navigation_link">이미지삽입</a></li>
			</ul>
		</div>
	</div>

	<div id="header">
		
			 <form action=<?=$PHP_SELF?> >      
			<input type='hidden' name='id' value='<?=$id?>'>

		  <tr>    
		<td width='100%' height='30' align=right bgcolor='#FFFFFF'> 
			<select name='Search_mode' style="width:80px; height:20px; color:#8A8B8B;  border:1px solid #BAC3F8; background:#CDFCEE;">
		      <option value='3'> 전체에서
			  <option value='1'> 상품명에서   
		      <option value='2'> 홍보글에서      
		    </select>  

			

		    <input type='text' name='Search_text' size='10' style="width:100px; height:20px;  border:1px solid #BAC3F8; background:#CDFCEE;" />   
		    <input type='submit' value='Search' style="width:60px; height:20px; color:#8A8B8B; border:1px solid #BAC3F8; background:#B7E2D5;" />  
		    &nbsp; &nbsp;
			
			  &nbsp; &nbsp;
			</td>   </form>  
				
	</div>

	<div id="content" class="clearfix">
		<div class="section_main">
			
		</div>
		
		<div class="aside">
			<table border='0' width='240' bgcolor='#FFFFFF' cellspacing='0' cellpadding='0' align='center' valign='middle'> 
			<tr>
   			<td width='180' height='230' align='center' valign='middle'>
   			</td> 
 

		  <tr> 
		  <td width='230' height='80' align='center' valign='middle'> <!---__--->
		</div>
	</div>
	


</body>
</html>













