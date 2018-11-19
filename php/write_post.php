<?header("content-type:text/html; charset=UTF-8");



		include("./db_connect.php");
		$conn=dbconn();
		$member=member();
		


 $model_name= $_POST[model_name];  //게시판 ID
 $passenger=$_POST[passenger];  //회원 USER_ID
 $car_option=$_POST[car_option]; //회원이름
 $car_kind=$_POST[car_kind]; //닉네임
 $image_path=$_FILES[image_path][name];



 if($_FILES[image_path][name]){
 $size= $_FILES['image_path']['size'];
    if($size > 2097152) Error('파일용량:2MB 제한합니다.'); 

$file01_name=strtolower($_FILES['image_path']['name']); //파일명과 확장자를 소문자로 변경
 $file01_split= explode(".",$file01_name);   // 파일명과 확장자를 분리

  $extexplode= $file01_split[count($file01_split)-2.3]; //파일명만 가져오기
  $file01_type= $file01_split[count($file01_split)-1]; // 확장자만 가져오기

$img_ext= array('jpg','jpeg','gif','png'); //이미지 확장자 종류를 배열에 넣는다.
  if(array_search($file01_type, $img_ext) === false)Error('이미지 파일이 아닙니다.');

 $tates= date("mdhis", time());  //날짜 (월,일,시간,분,초)
 $newfile01= chr(rand(97,122)).chr(rand(97,122)).$tates.rand(1,9).".".$file01_type; //파일명 생성;

 $dir="./image/";  //업로드할 디렉터리 지정
 move_uploaded_file($_FILES['image_path']['tmp_name'],$dir.$newfile01); //파일업로드;
  chmod($dir.$newfile01,0777);
 }




		// mysqli_query($conn,"set names utf8");
		// $cnt=1;
	 //    $sql = "SELECT * FROM model where $where and passenger=5";
	 //    $result = mysqli_query($conn, $sql);
	 //    while($data = mysqli_fetch_array($result)){



//쿼리전송
$sql="insert into model(model_name, passenger, car_option, car_kind,image_path) 
                   values('$model_name','$passenger',' $car_option','$car_kind','$newfile01')";
mysqli_query($conn,"set names utf8");
mysqli_query($conn, $sql);
mysqli_close; //끝내기.



?>

<script>  
window.alert('쿼리가 정상적으로 전송 되었습니다.');
location.href='./de.php';
</script>