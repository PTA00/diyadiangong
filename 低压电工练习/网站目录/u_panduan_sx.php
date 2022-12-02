<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./css/style.css">
	<link href="./css/m_nav.css" rel="stylesheet">
	<link href="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-M/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.6.1/jquery.slim.min.js"></script>
	<title>随机抽题测试</title>
	
</head>
<body>
  <div id="container">
	<header>
    <div class="wrapper cf">
<?php
session_start();
// 检索 session 数据
echo "登录状态：". $_SESSION['views'];
if ($_SESSION['views']==0) {
  echo'未登录，3秒后跳转到登录页面...<br>';
  header("refresh:3;url=login.php");
  exit;
}
?>
<?php 
	if(!is_numeric($_GET['id']) || !($_GET['id'] >= 1 && $_GET['id'] <= 516) ){
		header('Location:u_panduan_sx.php?id=1');
		exit;
	}
	//echo $_GET['id'];
 ?>

        <div class="top_nav">
        <style type="text/css">.top_nav{background: url(https://s3.bmp.ovh/imgs/2022/11/08/f652cfb5bfe289ef.png) no-repeat 0 -5px;}</style>
          <div class="web_name">
            <i class="fa fa-home"></i><a href="#" class="n_tn">大冤种职业教育</a>
          </div>
          <!-- <div class="web_nav">
            <a href="javascript:void(0);" class="toggle hc-nav-1"><span class="n_txt">菜单</span><i class="fa fa-bars"></i></a>
          </div> -->
          <div class="clear"></div>
        </div>
    </div>
  </header>
	<main class="main">
    <div class="m_box">
			<div class="b_title">
        <div class="b_name">低压电工作业</div>
        <div class="b_explain"><h1>低压电工作业题库更新于2022年11月</h1></div>
      </div>
<div class="b_ques">
<div class="qs">
<?php 

$host = 'localhost';
$user = 'root';
$pass = 'root';
$dbname = 'b5i2nackd';
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('无法连接至数据库: '.mysqli_connect_error());  
}
//echo '数据库连接成功<br/>';
mysqli_query($conn, "set names 'utf8'");
$sid=mysqli_real_escape_string($conn, $_GET["id"]);
$sql = "SELECT * FROM `panduan` WHERE `id`='$sid'";
//echo $sql.'<br>';
$retval=mysqli_query($conn, $sql);
if(mysqli_num_rows($retval) > 0){
	while($row = mysqli_fetch_assoc($retval)){  
		//$row['a']='123';
		//var_dump($row);
		$title=$row['title'];
		// $seed = time();
		// srand($seed);
		// $arr1=[$row['a'],$row['b'],$row['c'],$row['d']];
		$daan=$row['yn'];
	  // for ($i=0; $i < 3; $i++) { 
	  // 	$j=rand($i,3);
	  // 	if($i==$daan){
	  // 		$daan=$j;
	  // 	}else if($j==$daan){
	  // 		$daan=$i;
	  // 	}
	  // 	$temp=$arr1[$i];
	  // 	$arr1[$i]=$arr1[$j];
	  // 	$arr1[$j]=$temp;

	  // }
	  //echo $daan;
	}
}else{
	echo "0 返回<br>";
	echo'找不到题目，3秒后跳转...';
	//header("refresh:3;url=u_questions_random.php?id=1");
	exit;
}
mysqli_close($conn);


 ?>
 <script type="text/javascript">
  	var daan='<?php echo chr(65+$daan) ?>';
  	function Next(){
  		//window.location.search='id=<?php echo $_GET['id']+1 ?>';
  		window.location = changeURLArg(window.location.href,'id','<?php echo $_GET['id']+1 ?>');
  	}

		function squa(v_type,v_qid,v_qua){
			//console.log(v_type,v_qid,v_qua);
			if(v_type=='radio'){
				if (v_qua===daan) {
					console.log('√');
					$("#warning").html("<div class=\"warning\">您的答案：正确</div><div class=\"FontSize\"><a href=\"javascript:;\" onclick=\"Next()\" class=\"link\">下一题</a></div>");
				}else{
					console.log('×');
					$("#warning").html("<div class=\"warning\">正确答案是："+daan+"</div>");
				}
			}
		}
	// 修改url中的某个参数
		function changeURLArg(url,arg,arg_val){
		    var pattern=arg+'=([^&]*)';
		    var replaceText=arg+'='+arg_val;
		    if(url.match(pattern)){
		        var tmp='/('+ arg+'=)([^&]*)/gi';
		        tmp=url.replace(eval(tmp),replaceText);
		        return tmp;
		    }else{
		        if(url.match('[\?]')){
		            return url+'&'+replaceText;
		        }else{
		            return url+'?'+replaceText;
		        }
		    }
		    return url+'\n'+arg+'\n'+arg_val;
		}
 </script>
<?php 
echo <<<EOF
<div class="info"><div class="num">第{$_GET['id']}题&nbsp;&nbsp;判断题</div><!-- <a href="javascript:void(0);" id="tag_24370" class="tag no" onclick="mytag(22,24370)">标记</a> --></div>

<div class="title" style="font-size: 1.2em;">{$title}</div>

<div class="row"><div class="relative"><input type="radio" onclick="squa('radio','{$_GET['id']}','A')" id="qs_A" name="qs" value="A"><i></i></div><label for="qs_A" style="font-size: 1.1em;">A. 正确</label></div>
<div class="row"><div class="relative"><input type="radio" onclick="squa('radio','{$_GET['id']}','B')" id="qs_B" name="qs" value="B"><i></i></div><label for="qs_B" style="font-size: 1.1em;">B. 错误</label></div>

<div id="warning"></div>

EOF;
 ?>
</div>
</div>
    </div>
  </main>

</body>
</html>
