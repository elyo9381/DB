
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>

<?
		include("./db_connect.php");
		$conn=dbconn();
		$member=member();
		?>


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
			</ul>
		</div>
	</div>

	<div id="header">

				
	</div>

	<div id="content" class="clearfix">
		<div class="section_main">
			
		</div>


		<?
		$model_name=$_GET[model_name];
		
		$sql="SELECT * FROM model where model_name = '$model_name'";
		$result = mysqli_query($conn, $sql);
		$data = mysqli_fetch_array($result);
	
		?>


		<table border='1'  width='100%'  align='center' valign='top' cellspacing='0' cellpadding='0' bgcolor='FFFFFF'>
		  <form name='buys' action='./buys.php' method='post' enctype='multipart/form-data' >
		  <input type='hidden' name='B_no[]' value='<?=$data[no]?>'>
		  <input type='hidden' name='price[]' value='<?=$data[price]?>'>


			<tr>
			<td  width='35%' height='300' align='center'  bgcolor='#FFFFFF' >
			<img src="./image/<?=$data[image_path]?>" width='314' height='280'>
			</td>
			<td  width='65%' height='200' align='left' valign='top'  bgcolor='#FFFFFF' class='drrr'>
			<br> <br> 
			상품상세 설명<br><br>
			모델 <font class='subject'><?=$data[model_name]?></font> <br>
			차종 <font class='reference'><?=$data[car_kind]?></font> <br>
			MAX 탑승인원 <font class='priced'><s><?=number_format($data[passenger])?></s> 원</font>
			&nbsp; &nbsp;  &nbsp; &nbsp; 
			판매가 <font class='price'><?=number_format($data[price])?> 원</font>
			&nbsp; &nbsp;
			배송비&nbsp; <?=number_format($data[dv_pay])?>원 
			<br><br>
			상품카테고리: &nbsp; &nbsp; <?=$data[ctg_name]?>  &nbsp; &nbsp; &nbsp; &nbsp;
			상품유형: &nbsp; &nbsp; <?=$data[sorts]?>
			<br><br>

			수량 <input type='text' name='_volume' value='1' readonly style="width:35px; height:20px">
			<img src='./image/h_count_1.png' onclick='incre(1);'>
			<img src='./image/h_count_2.png' onclick='incre(-1);'>
			<input  type='hidden' name='volume[]' id="volume1" value='1'> <!-- 실제 전송될 값-->
			<br><br>

			
			
	</div>
</body>
</html> 