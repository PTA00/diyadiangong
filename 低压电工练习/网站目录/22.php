
<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>低压电工作业考试题库练习</title>
    
    <link rel="stylesheet" href="./css/style.css">
    <!-- <link href="./css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="./css/m_nav.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.6.1/jquery.slim.min.js"></script>
    <style>
        .div_relative{position:relative;height:90px;}
        .div_xshd{position:absolute;right:0;top:0;}
        .div_fun{position:absolute;left:0;top:0;}
    </style>
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
  <div class="Float_QRCode">
    <div class="FQ_box">
      <div class="QRCode"><img style="image-rendering:pixelated" src="data:image/bmp;base64,Qk2yAAAAAAAAAD4AAAAoAAAAHQAAAB0AAAABAAEAAAAAAHQAAAATCwAAEwsAAAAAAAAAAAAAAAAAAP///wABdQ3YfRH7kEXYAAhF8AqQRdlgMH1N13ABJqUY/xzXOE3VAEBuU+F4Ie5pMFcw7UCwDgeYZg9O0HTGFZib/nRgsaJZ8FIyQzgp2FJ4tzHqSDiulzj/zWf4AVVUAH3l1fBFP2UQRXYdEEX25RB9mX3wAeT0AA==" width="100"></div>
      <div class="text">QQ扫码<br>加入交流群</div>
    </div>
  </div>  <main class="main">
    <div class="m_box">

        <div class="b_title">
            <div class="b_name">请选择练习功能</div>
            <div class="b_explain"><h1>低压电工作业题库更新于2022年11月</h1></div>
        </div>

        <div class="b_fun">
            <table width="100%" class="bf_table" border="0" cellspacing="0">
                <tbody><tr>
                    <td width="65" style="vertical-align:middle;"><a href="u_xuanze_sx.php" title="低压电工作业模拟考试"><i class="fa fa-list fa-4x" style="display: block;width: 60px;padding-top: 6px;color: #87CEFF;text-shadow:2px 2px 5px #c0c0c0;"></i><!-- <img src="https://s3.bmp.ovh/imgs/2022/11/08/b56a6beac608b2f0.png" width="60" alt="低压电工作业模拟考试" class="img"> --></a></td>
                    <td><a href="u_xuanze_sx.php" title="低压电工作业模拟考试"><div class="name">选择练习</div><div class="caption">按顺序练习所有选择题</div></a></td>
                </tr>
            </tbody></table>
        </div>
        <div class="b_fun">
            <table width="100%" class="bf_table" border="0" cellspacing="0">
                <tbody><tr>
                    <td width="65" style="vertical-align:middle;"><a href="u_panduan_sx.php" title="低压电工作业模拟考试"><i class="fa fa-check fa-4x" style="display: block;width: 60px;padding-top: 6px;color: #90EE90;text-shadow:2px 2px 5px #c0c0c0;"><!-- <img src="https://s3.bmp.ovh/imgs/2022/11/08/b56a6beac608b2f0.png" width="60" alt="低压电工作业模拟考试" class="img"> --></a></td>
                    <td><a href="u_panduan_sx.php" title="低压电工作业模拟考试"><div class="name">判断练习</div><div class="caption">按顺序练习所有判断题</div></a></td>
                </tr>
            </tbody></table>
        </div>
<!-- 截止以上为有用的功能 -->
<!--         <div class="b_fun">
            <table width="100%" class="bf_table" border="0" cellspacing="0">
                <tbody><tr>
                    <td width="65" style="vertical-align:middle;"><a href="#" title="低压电工作业模拟考试"><img src="https://s3.bmp.ovh/imgs/2022/11/08/b56a6beac608b2f0.png" width="60" alt="低压电工作业模拟考试" class="img"></a></td>
                    <td><a href="u_questions_random.php" title="低压电工作业模拟考试"><div class="name">模拟考试</div><div class="caption">从题库随机抽取100道题</div></a></td>
                </tr>
            </tbody></table>
        </div>
    
        <div class="b_fun">
            <table width="100%" class="bf_table" border="0" cellspacing="0">
                <tbody><tr>
                    <td width="65" style="vertical-align:middle;"><a href="http://jyhc.aqzx.wang/fun/u_questions_all.php?classid=22&amp;source=fun" title="低压电工作业考试题库"><img src="https://s3.bmp.ovh/imgs/2022/11/08/303f225229662d71.png" width="60" alt="低压电工作业题库练习" class="img"></a></td>
                    <td><a href="http://jyhc.aqzx.wang/fun/u_questions_all.php?classid=22&amp;source=fun" title="低压电工作业考试题库"><div class="name">题库练习</div><div class="caption">全方位掌握题库中的<span style="color: red;">所有试题</span></div></a></td>
                </tr>
            </tbody></table>
        </div>
    
        <div class="b_fun">
            <table width="100%" class="bf_table" border="0" cellspacing="0">
                <tbody><tr>
                    <td width="65" style="vertical-align:middle;"><a href="http://jyhc.aqzx.wang/fun/u_questions_mytag.php?classid=22&amp;source=fun" title="低压电工作业标记题"><img src="https://s3.bmp.ovh/imgs/2022/11/08/6266e6d997a5f9a0.png" width="60" alt="低压电工作业标记题" class="img"></a></td>
                    <td><a href="http://jyhc.aqzx.wang/fun/u_questions_mytag.php?classid=22&amp;source=fun" title="低压电工作业标记题"><div class="name">我的标记</div><div class="caption">对标记过的试题进行<span style="color: red;">强化训练</span></div></a></td>
                </tr>
            </tbody></table>
        </div>
    
        <div class="b_fun">
            <table width="100%" class="bf_table" border="0" cellspacing="0">
                <tbody><tr>
                    <td width="65" style="vertical-align:middle;"><a href="http://jyhc.aqzx.wang/fun/u_questions_myerror.php?classid=22&amp;source=fun" title="低压电工作业错题练习"><img src="https://s3.bmp.ovh/imgs/2022/11/08/ae8ad7c45dbdb685.png" width="60" alt="低压电工作业错题练习" class="img"></a></td>
                    <td><a href="http://jyhc.aqzx.wang/fun/u_questions_myerror.php?classid=22&amp;source=fun" title="低压电工作业错题练习"><div class="name">我的错题 <span style="font-size:14px;">(当前？题)</span></div><div class="caption">对自己的错题进行<span style="color: red;">精准校正</span></div></a></td>
                </tr>
            </tbody></table>
        </div>
    
        <div class="b_fun">
            <table width="100%" class="bf_table" border="0" cellspacing="0">
                <tbody><tr>
                     <td width="65" style="vertical-align:middle;"><a href="http://jyhc.aqzx.wang/fun/u_questions_errorbigdata.php?classid=22&amp;source=fun" title="低压电工作业易错题大数据"><img src="https://s3.bmp.ovh/imgs/2022/11/08/72f8a91f36e7fdbb.png" width="60" alt="低压电工作业易错题大数据" class="img"></a></td>
                    <td><a href="http://jyhc.aqzx.wang/fun/u_questions_errorbigdata.php?classid=22&amp;source=fun" title="低压电工作业易错题大数据"><div class="name">易错题大数据 <span style="font-size:14px;">(共？题)</span></div><div class="caption">筛选数千人易错题进行<span style="color: red;">重点练习</span></div></a></td>
                    </tr>
                </tbody></table>
        </div>
    
      <div class="b_fun">
        <table width="100%" class="bf_table" border="0" cellspacing="0">
          <tbody><tr>
            <td width="65" style="vertical-align:middle;"><a href="http://jyhc.aqzx.wang/fun/u_users_info.php" title="低压电工作业练习记录"><img src="https://s3.bmp.ovh/imgs/2022/11/08/284b165836e78c4e.png" width="60" alt="低压电工作业练习记录" class="img"></a></td>
            <td><a href="http://jyhc.aqzx.wang/fun/u_users_info.php" title="低压电工作业练习记录"><div class="name">我的记录</div><div class="caption">查看历次练习和模拟的记录</div></a></td>
          </tr>
        </tbody></table>
      </div> -->
    
      
      
    </div>
  </main>


  <footer class="footer">
    <div class="m_box">
      <div class="other">咨询电话：114514-1919810<br>学校地址：c语言萝卜群</div>
      <div class="aname">© 北京大冤种教育咨询有限公司 版权没有</div>
    </div>
  </footer>
</div>
</body>