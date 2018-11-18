<? header("content-type:text/html; charset=utf-8"); ob_start;


include("./db_connect.php");
		$conn=dbconn();
		mysqli_query($conn,"set names utf8");

// if(!isset($_POST[user_id]) || !isset($_POST[user_pw]))
//   exit;
$id = $_POST[user_id];
$pws = $_POST[user_pw];
$pw = md5($pws);

$sql = "SELECT * FROM usertable WHERE user_id = '$id'";
$result = mysqli_query($conn, $sql);
$member = mysqli_fetch_array($result);
if(!$id){
  echo "<script> alert('아이디를 다시 입력하세요');";
  echo "history.back();</script>";
}
elseif($member[user_id] != $id){
  echo "<script> alert('잘못된 아이디 입니다.');";
  echo "history.back();</script>";
}

if($member[user_pw] != $pw){
  echo "<script> alert('잘못된 비밀번호 입니다.');";
  echo "history.back();</script>";
}

if(($member[user_id] == $id) and ($member[user_pw] == $pw)){
  $tmp = $member[user_id]."//".$member[user_pw];
  setcookie("COOKIES", $tmp, time()+60*60*24, "/");
  echo "<script> alert('로그인 되었습니다');";
  echo "location.href='./de.php'</script>";
}
 ?>
<!-- <script>
   window.alert('로그인 되었습니다');
   location.href='./de.php';
 </script>
 -->