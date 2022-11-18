
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./css/style.css">
	<title>登录验证</title>
</head>
<body>
	<div id="container">
<?php
if($_SERVER['REQUEST_METHOD']!='POST'){
	exit('ERROR発生!');
}
session_start();
?>
<?php 
$host = 'localhost';
$user = 'root';
$pass = 'root';
$dbname = 'b5i2nackd';
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('无法连接至数据库: '.mysqli_connect_error());  
}
echo '数据库连接成功<br/>';

$suser=mysqli_real_escape_string($conn, $_POST["user"]);
$spw=mysqli_real_escape_string($conn, $_POST["pw"]);
$sql = "SELECT * FROM `login` WHERE `user`='$suser' AND `pw`='$spw'";
//echo $sql.'<br>';
$retval=mysqli_query($conn, $sql);
if(mysqli_num_rows($retval) > 0){
	while($row = mysqli_fetch_assoc($retval)){  
		//var_dump($row);
	    $_SESSION['views']=1;
		echo'登录成功';

		header("refresh:1;url=22.php");
		exit;
	}
}else{
	echo "0 返回<br>";
	$_SESSION['views']=0;
	echo'账号或密码错误，3秒后跳转返回...';

	header("refresh:3;url=login.php");
	exit;
}
mysqli_close($conn);

?>
	</div>
</body>
</html>

