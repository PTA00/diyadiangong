<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>用户登录</title>
    <link rel="stylesheet" href="./css/style.css">

    <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.6.1/jquery.slim.min.js"></script>
</head>
<body>
<?php
// 检索 session 数据
if(isset($_SESSION['views'])==false){
    $_SESSION['views']=0;
}
echo "登录状态：". $_SESSION['views'];
?>
<div class="login_box">
    <div class="panel">
        <div class="panel-header">
            <h1 class="panel-header-title">用户登录</h1>
        </div>

        <form class="form" action="login_check.php" method="post">
            <div class="input">
                <input type="text" name="user" placeholder="请输入账号" class="input-field">
            </div>
            <div class="input">
                <input type="password" name="pw" placeholder="请输入密码" class="input-field">
            </div>
            <div class="input">
                <button class="input-submit">登录</button>
            </div>
        </form>
    </div>
</div>

</body></html>
