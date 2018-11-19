<?header("content-type:text/html; charset=UTF-8");

echo "
<head>
<title>TEST홈페이지-DB 테이블생성</title>
</head>";


		include("./db_connect.php");
		$conn=dbconn();

/*
$sql="CREATE TABLE model
     (model_name varchar(30),
     passenger varchar(30),
     car_option varchar(30),
     car_kind varchar(30),
     image_path varchar(30),
     CONSTRAINT model_PK Primary key(model_name),
     CONSTRAINT model_FK Foreign key(model_name)
	 references car(model_name)
      )"; */




// $sql = "alter table 테이블명 drop column 필드명"; //필드삭제
// $sql = "drop table 테이블명 "; // 테이블삭제
 //$sql = "alter table usertable add  level int default '3' not null"; //필드명과 타입명 추가하기
//$sql = "update usertable set level='1'where user_id='admin'"; //필드명과 타입명 추가하기
// $sql = "alter table 테이블명 change 필드명 변경할필드명 변경할타입명"; // 필드명과 타입명 변경하기
// $sql = "alter table 테이블명 rename 변경할테이블명"; // 테이블 이름 변경


if(!$sql)die("테이블 생성에 실패 하였습니다.");

if($sql)echo ("정상적으로 실행 되었습니다.");

mysqli_query($conn,"set names utf8");
mysqli_query($conn, $sql);
?>