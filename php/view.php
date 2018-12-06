
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>

<?
		include("./db_connect.php");
		$conn=dbconn();
		$member=member();
?>

<!-- <?
		$model_name=$_GET[model_name];

		$sql = "SELECT * FROM model natural join car where model_name = '$model_name'
		order by share_fee";
		$result = mysqli_query($conn, $sql);
		$data = mysqli_fetch_array($result);


?> -->


				<?
				//$model_name=$_GET[model_name];

				$sql = "SELECT model_name, share_fee, share_spot, car_number, insurance, image_path
						FROM car natural join model,
						(SELECT  MIN( share_fee ) AS min_fee
						FROM car 
						where model_name ='$model_name'
						GROUP BY share_spot
						) as t2					
						WHERE model_name ='$model_name' 
						AND share_fee = t2.min_fee
						ORDER BY share_fee
						Limit 1"
						;

				$result = mysqli_query($conn, $sql);
				$data = mysqli_fetch_array($result);
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
				<li class="barimg"><a href="de.php" class="barimg"><img src="./image/title.PNG" width="300" height="38" align="center"/></a></li>
			</ul>
		</div>
	</div>

	<div id="header">



		<?if($member[level]=='2'or $member[level]=='1'){?>
			<tr>
			<td width='100%' height='50' align='center'>
			 		<a href= delete.php?model_name=<?=$data[model_name]?> > car delete </a>

			 </td>
			</tr>
			<?}else{}?>

	</div>

	<div id="content" class="clearfix">





		<table border='0'  width='100%'  align='center' valign='top' bgcolor='FFFFFF'>



			<tr>
			<td  width='35%' height='380' align='center' style="padding-bottom: 350px;"  >
			<img src="./image/<?=$data[image_path]?>" width='314' height='380'>
			</td>



			<td  width='65%' height='400' align='left' valign='top'  bgcolor='#FFFFFF' class='drrr'>


			<br> 

			<table border='0' width="90%" align="center" style="margin-left: 30px;">
			<tr >
				<td style="font-size : 70px">   
					<font class='subject'><?=$data[model_name]?></font> </td></tr></table> 
			<table border='0' width="90%" align="center" style="margin-left: 30px;">
			<tr>
				<td><p style="font-size : 35px"
				align="right">
				<font class='subject'><?=$data[share_fee]?>원</font>
				</p></td></tr></table> <br>

			


			<table border='0' width="90%" align="center" style="margin-left: 30px;">

				<tr>
					<td width="60px" height='50' align="center" style="font-size : 18px">대여업체</td>
					<td width="80px" height='50' align="center" style="font-size : 22px">차량번호</td>
					<td width="60px" height='50' align="center" style="font-size : 22px">대여료</td>
					<td width="60px" height='50' align="center" style="font-size : 22px">보험료</td>
					<td width="60px" height='50' align="center" style="font-size : 22px">총 금액</td>
					<td width="130px" height='50' align="center" style="font-size : 20px">예약 <br> 사이트</td>
				</tr>

				
				<?
				//$model_name=$_GET[model_name];

				$v_sql = "SELECT model_name, share_fee, share_spot, car_number, insurance
						FROM car natural join model,
						(SELECT  MIN( share_fee ) AS min_fee
						FROM car 
						where model_name ='$model_name'
						GROUP BY share_spot
						) as t2					
						WHERE model_name ='$model_name' 
						AND share_fee = t2.min_fee
						ORDER BY share_fee"
						;

				$v_result = mysqli_query($conn, $v_sql);
				while($v_data = mysqli_fetch_array($v_result)){
				?>

				<table border='0' width="90%" align="center" style="margin-left: 30px;">

					<tr>
						<td width="60px" style="font-size : 15px"> <?=$v_data[share_spot]?> </td>
						<td width="70px" align="left" style="font-size : 15px;  padding-left: 10px;"><font class=''><?=$v_data[car_number]?></font></td>
						<td width="60px" align="center" style="font-size : 15px;"><font class=''> <?=$v_data[share_fee]?>원</font></td>
						<td width="60px" align="center" style="font-size : 15px;"><font class=''><?=$v_data[insurance]?>원</font></td>
						<td width="60px" align="center" style="font-size : 15px;"><font class=''><?=$v_data[share_fee]+$v_data[insurance]?>원</font></td>
						<td width="130px" align="center" style="font-size : 15px;"><font color=#0040FF>
							<?
							if($v_data[share_spot] == '그린카'){?>
								<a href="https://www.greencar.co.kr/reserve/index.do">그린카</a>
							<?
							}
							elseif ($v_data[share_spot] == '쏘카') {
							?>
								<a href="https://www.socar.kr/reserve">쏘카</a>
							<?
							}
							elseif ($v_data[share_spot] == '피플카') {
							?>	
								<a href="https://www.peoplecar.co.kr/main/main.asp">피플카</a>
							<?
							}
							?>

							</font>

						</td>

					</tr>

				</table>

				<?}?>
				
				<br>
				<br>


			
			      <div id="map" style="width:500px;height:400px;">

			      <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=6423fbe8bd19c7d0dd087e16a7c67bff"></script>
			      <script>
			         var container = document.getElementById('map');
			         var options = {
			            center: new daum.maps.LatLng(35.822168, 127.122277),
			            level: 7
			         };
			         var map = new daum.maps.Map(container, options); // 지도 생성
			         // 마커를 표시할 위치와 title 객체 배열입니다
			         <?
			         //$model_name=$_GET[model_name];

			         $l_sql = "SELECT model_name, share_fee, share_spot, car_number, insurance, Latitude, Longitude
			               FROM car natural join model,
			               (SELECT  MIN( share_fee ) AS min_fee
			               FROM car
			               where model_name ='$model_name'
			               GROUP BY share_spot
			               ) as t2
			               WHERE model_name ='$model_name'
			               AND share_fee = t2.min_fee
			               ORDER BY share_fee"
			               ;

			         $l_result = mysqli_query($conn, $l_sql);
			         while($l_data = mysqli_fetch_array($l_result)){
			         ?>

			         var positions = [
			       {
			      //  title: '카카오',
			        latlng: new daum.maps.LatLng(<?=$l_data['Latitude']?>, <?=$l_data['Longitude']?>)
			       }

			      ];

					// 마커 이미지의 이미지 주소입니다
			         //var imageSrc = "http://t1.daumcdn.net/localimg/localimages/07/mapapidoc/markerStar.png";
			         var imageSrc1 = "./image/greenmarker.PNG";
			         var imageSrc2 = "./image/socarmarker.PNG";
			         var imageSrc3 = "./image/peoplemarker.PNG";

			         for (var i = 0; i < positions.length; i++) {

				    // 마커 이미지의 이미지 크기 입니다
			       var imageSize = new daum.maps.Size(24, 35);

			   	 // 마커 이미지를 생성합니다
			       var markerImage1 = new daum.maps.MarkerImage(imageSrc1, imageSize);
			         var markerImage2 = new daum.maps.MarkerImage(imageSrc2, imageSize);
			         var markerImage3 = new daum.maps.MarkerImage(imageSrc3, imageSize);

			 	     // 마커를 생성합니다



			       var marker = new daum.maps.Marker({
			        map: map, // 마커를 표시할 지도
			        position: positions[i].latlng, // 마커를 표시할 위치
			        //title : positions[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시됩니다
			        image : <?
			            if($l_data['share_spot'] == '그린카'){
			               echo markerImage1;
			            }
			            if($l_data['share_spot'] == '쏘카'){
			               echo markerImage2;
			            }
			            if($l_data['share_spot'] == '피플카'){
			               echo markerImage3;
			            }
			            ?> // 마커 이미지
			       });
			      }
			      <?}?>

			      </script>
			      </div>
   


				
			</table>



		</tr>
		<tr>
			<td>
				
			</td>
		</tr>
	









<!-- 
			모델 :<font class='subject'><?=$data[model_name]?></font> <br>
			차종 :<font class='reference'><?=$data[car_kind]?></font> <br>
			MAX 탑승인원 :<font class='reference'><?=$data[passenger]?></font> <br>
		  기본 사용료 :<font class='reference'>
				<?=$data[share_fee];
					?>원</font><br>
			업체 :<font class='reference'>
  				<?=$data[share_spot]?></font><br>
			차량 번호	:<font class='reference'>
					<?=$data[car_number]?>
 -->





		<!-- 	&nbsp; &nbsp;  &nbsp; &nbsp;
			판매가 <font class='price'><?=number_format($data[price])?> 원</font>
			&nbsp; &nbsp;
			배송비&nbsp; <?=number_format($data[dv_pay])?>원
			<br><br>
			상품카테고리: &nbsp; &nbsp; <?=$data[ctg_name]?>  &nbsp; &nbsp; &nbsp; &nbsp;
			상품유형: &nbsp; &nbsp; <?=$data[sorts]?>
			<br><br> -->

			<!-- 수량 <input type='text' name='_volume' value='1' readonly style="width:35px; height:20px">
			<img src='./image/h_count_1.png' onclick='incre(1);'>
			<img src='./image/h_count_2.png' onclick='incre(-1);'>
			<input  type='hidden' name='volume[]' id="volume1" value='1'> <!-- 실제 전송될 값-->
		

				</td>
			</tr>
			</table>
	</div>








</body>
</html>
