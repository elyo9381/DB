<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta charset="utf-8">
<link rel="stylesheet" href="./assets/reset.css"/>
<link rel="stylesheet" href="./assets/common.css"/>
<link rel="stylesheet" href="./assets/layout.css"/>
<link rel="stylesheet" href="./assets/navi.css"/>



</head>
<body>
		<?
		include("./db_connect.php");
		$conn=dbconn();
		$member=member();
		?>


	<div id="nav">
		<div class="nav_inner">
			<ul class="navigation clearfix">
				<li class="navigation_list">
	
					<?if(!$member[user_id]){?>
					<a href="loginform.php" class="navigation_link">로그인</a>
				</li>

				<?}else{?>
					<a href="logout.php"class="navigation_link">로그아웃</a>
				</li><?}?>


				<li class="navigation_list"><a href="" class="navigation_link">이용방법</a></li>
				<li class="navigation_list"><a href="reviewlist.php" class="navigation_link">리뷰</a></li>
				<li class="navigation_list"><a href="" class="navigation_link">카쉐어링</a></li>
				<li class="navigation_list"><a href="" class="navigation_link">공지사항</a></li>
			  	<li class="barimg"><a href="de.php" class="barimg"><img src="./image/title.PNG" width="80" height="30" align="center"/></a></li>

			</ul>
		</div>
	</div>

	<div id="header">



			 <form action=<?=$PHP_SELF?> >
			<!-- <input type='hidden' name='id' value='<?=$id?>'> -->

		  <tr>
		<td width='100%' height='30' align=right bgcolor='#FFFFFF'>
			<select name='Search_mode' style="width:80px; height:20px; color:#8A8B8B;  border:1px solid #BAC3F8; background:#CDFCEE;">
		     <option value='3'> 검색
			  <option value='1'> 차량검색
		      <option value='2'> 차종검색
		    </select>




		    <input type='text' name='Search_text' size='10' style="width:100px; height:20px;  border:1px solid #BAC3F8; background:#CDFCEE;" />
		    <input type='submit' value='Search' style="width:60px; height:20px; color:#8A8B8B; border:1px solid #BAC3F8; background:#B7E2D5;" />
		    &nbsp; &nbsp;

			  &nbsp; &nbsp;
			</td>  

			<td width='100%'' height='50' align="50">
				<? if($member[user_id]){echo $member[user_name]."(".$member[user_id].") 님 환영합니다..";}
				?>

			</td>

			 </form>
			

	</div>

	<div id="content" class="clearfix">
		<div class="section_main">

		</div>

		<table border='0'  width='100%'  align='center' valign='top' cellspacing='0' cellpadding='0' bgcolor='FFFFFF'>
		<tr>
		<td  height='10' align='center'  bgcolor='#FFFFFF' >&nbsp;</td>

		<td height='10' align='center' bgcolor='#FFFFFF' >&nbsp;</td>
		<td height='10' align='center' bgcolor='#FFFFFF' >&nbsp;</td>

		<td height='10' align='center' bgcolor='#FFFFFF' >&nbsp;</td>
		<td height='10' align='center' bgcolor='#FFFFFF' >&nbsp;</td>

		<td height='10' align='center' bgcolor='#FFFFFF' >&nbsp;</td>
		<td height='10' align='center' bgcolor='#FFFFFF' >&nbsp;</td>

		<td height='10' align='center' bgcolor='#FFFFFF' >&nbsp;</td>
		<td height='10' align='center' bgcolor='#FFFFFF' >&nbsp;</td>




		<tr>
		<td width='4%' height='230' align='center' bgcolor='#FFFFFF' >&nbsp;</td>




		<?php

		$Search_text=$_GET[Search_text];
		$Search_mode=$_GET[Search_mode];

		$where = 'passenger';
		if($Search_text){
			if($Search_mode==1) $tmp="model_name";
			if($Search_mode==2) $tmp="car_kind";


			if($Search_mode==3){
			$where="model_name like '%$Search_text%' or car_kind like '%$Search_text%'";}
			else{
			$where="$tmp like '%$Search_text%'";  }
			}?>


			<?


		mysqli_query($conn,"set names utf8");
		$cnt=1;
	    $sql = "SELECT * FROM model where $where and passenger=5";
	    $result = mysqli_query($conn, $sql);
	    while($data = mysqli_fetch_array($result)){

	    	// var_dump($data);
	    ?>



	    	<td width='20%' height='410' align='center' valign='top' bgcolor='#FFFFFF'>


			<table border='0' width='240' bgcolor='#FFFFFF' cellspacing='0' cellpadding='0' align='center' valign='middle'>

			<tr>
   			 <td width='100%' height='auto' align='center' valign='middle'>

			<A  href= >
			<img src='./image/<?=$data[image_path]?>' width='95%' height='AUTO' border='0' onmouseover='this.style.filter="alpha(opacity=60)"' onmouseout='this.style.filter=""'></a>

			</td>

		 	<tr>
			<td width='100%' height='80' align='center' valign='middle'>

			<a href= >
			<span style='font-size:10pt; font-family:verdana,Tahoma; color:#6D6D6B'>
			가격비교</span> </td>

		   	<tr>
		   	<td width='100%' height='80' align='center' valign='middle'>

	   		<a href= >
			<span style='font-size:10pt; font-family:verdana,Tahoma; color:#6D6D6B'>
			<?=$subject=mb_substr($data[model_name],0,20,'UTF-8');  //문자열자르기; ?></span> </td>

			<tr>
			<td  height='4%'  align='center' bgcolor='#FFFFFF'>&nbsp;</td>
			</tr>
			</table>

			</td>
			<td width='4%' align='center' bgcolor='#FFFFFF'>&nbsp;</td>


			<?
				$cnt++;
			   if($cnt%4==1) {
				echo "<tr><td>";
			 } } ?>

			 </td>
			</tr>
			</table>







	</div>
</body>
</html>
