<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
<link type="text/css" href="../lib/m_style.css" rel='stylesheet' />
<title>차량 추가</title>
<!-- 디비연동 -->
<script type="text/javascript" src="../../SmartEditor2/js/HuskyEZCreator.js" charset="utf-8"></script>
</head>

<?
		include("./db_connect.php");
		$conn=dbconn();
		$member=member();
		?>

<body>

<TABLE BORDER='0' CELLSPACING='0' CELLPADDING='0' WIDTH='100%' HEIGHT='100%' ALIGN='CENTER' VALIGN='TOP'>
<TR>
<TD WIDTH='100%'  HEIGHT='70'  ALIGN='LEFT'  VALIGN='MIDDLE' BGCOLOR='#E89C05'>
<table border='0' width='90%' height='70' bgcolor='FFFFF' align='center' cellspacing='0' cellpadding='0'>  
<tr> 
    <td width='100%' height='70' align='center' valign='middle'>
	<a href='../../index.php'><strong>홈</strong></a>

</td>
	</tr>
	</table>
</TD>

<TR>
<TD WIDTH='100%'  HEIGHT='100%'  ALIGN='CENTER'  VALIGN='TOP'>
<table border='0' width='75%' height='100%' bgcolor='FFFFF' align='center' cellspacing='0' cellpadding='0'>  
<tr> 
    <td width='100%' height='10' colspan='2' bgcolor='FFFFF'>&nbsp;</td>
<tr> 
    <td width='100%' height='30' colspan='2' bgcolor='FFFFF' align='center'> - 차량 추가 하기  -</td>

<form name='write' action='write_post.php' method='post' enctype='multipart/form-data'>


<tr>
<td width='20%' height='30'  align='right' valign='middle'>
<li> model_name
</td>
<td width='80%' height='30' bgcolor='FFFFF' align='left' valign='middle'>

&nbsp; <input type='text' name='model_name' size='15'  >
</td>


<tr>
<td width='20%' height='30'  align='right' valign='middle'>
<li>passenger
</td>
<td width='80%' height='30' bgcolor='FFFFF' align='left' valign='middle'>

&nbsp; <input type='text' name='passenger' size='15'  >
</td>


<tr>
<td width='20%' height='30'  align='right' valign='middle'>
<li>car_option</td>
<td width='80%' height='30' bgcolor='FFFFF' align='left' valign='middle'>

&nbsp; <input type='text' name='car_option' size='15'  >
</td>

<tr>
<td width='20%' height='30'  align='right' valign='middle'>
<li>car_kind</td>
<td width='80%' height='30' bgcolor='FFFFF' align='left' valign='middle'>

&nbsp; <input type='text' name='car_kind' size='15' >
</td>


<tr>
<td width='100%' height='30'  align='center' valign='middle' colspan='2'>
<input type='file' name='image_path'>
</td>

<tr>
<td width='100%' height='30' bgcolor='EDEDED' colspan='2' align='center' valign='middle'>
<input type='Submit' value='전송'>
</td>
</form>





<tr> 
    <td width='100%' height='100%' colspan='2'  bgcolor='FFFFF'>&nbsp;</td>
</tr>
</table>
</TD>

<TR>
<TD WIDTH='100%'  HEIGHT='100%'  ALIGN='CENTER'  VALIGN='TOP'>&nbsp;</TD>
</TR>
</TABLE>

</body>
</html>