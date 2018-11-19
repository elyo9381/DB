<?
header("content-type:text/html; charset=UTF-8");

include("./db_connect.php");
		$conn=dbconn();

$model_name=$_GET[model_name];

$query= "DELETE FROM model WHERE model_name='$model_name'";

mysqli_query($conn, $query);
?>

<script>
window.alert('삭제 되었습니다.');
location.href='./test1.php';
</script>s