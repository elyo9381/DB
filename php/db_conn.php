<?
function dbconn(){
  $connect = mysqli_connect('210.117.181.21','s201414795','','s201414795');
  mysqli_query($connect,"set names utf8");
  if(!$connect)die("연결에 실패 하였씁니다.");
  return $connect;
}

function Error($msg){
  echo"
  <script>
  window.alter('$msg');
  history.back(1);
  </script>
  ";
  exit;
}

function member(){
  // global $connect;
  $connect = mysqli_connect('210.117.181.21','s201414795','tndqja07289!','s201414795');
  
  $temps=$_COOKIE["COOKIES"];
  // explode("구분기준문자","처리할 내용");
  $cookise= explode("//",$temps);

  //아이디 $cookise[0];
  // 비밀번호 $cookise[1];

  $query = "SELECT * FROM usertable WHERE user_id = '$cookise[0]' ";
  mysqli_query($connect,"set names utf8");
    $result = mysqli_query($connect, $query); 
    $member = mysqli_fetch_array($result); 
    return $member;
  
}
?>