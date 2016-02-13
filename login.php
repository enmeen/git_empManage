<?php
require_once 'common.php';
/**
 * 该版本完成了分层模式的分页功能，并且把分页的信息封装到FenyePage中
 * 从而提高代码的复用性。
 */
if(isset($_REQUEST['authcode'])){
    session_start();
    if(strtolower($_REQUEST['authcode'])==$_SESSION['authcode']){
        echo'<font color="#0000CC"><b>输入错误！</b></font>';
    }else{
        echo'<font color="#0000CC"><b>输入错误！</b></font>';
    }

    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <link rel="stylesheet" type="text/css" href="./css/login.css">
</head>

<body>
    <div class="logo"></div>
    <form id="form" method="post" action="loginProcess.php">
        <div class="wrapper">
            <label for="username"></label>
            <input class="username" type="text" name="id"  placeholder="id" value="<?php echo  getCookieVal("id");?>" >
            <input class="pwd" type="password" name="password" placeholder="password">
            <button id="login" type="submit"></button>
           
            <div class="yzm">
            <input type="text" name="yzm" placeholder="请输入验证码"  class="verificationCode"/>
            <img class="verificationImg" src="yzm.php?r=<?php  echo rand();?>"  onclick="this.src='yzm.php?r='+Math.random()"/>
            <a  href="login.php" class="verificationIcon">看不清？换一个</a>
            </div>
          <div class="sfbc"><span>是否保存id</span><input  type="checkbox" value="yes" name="keep" /></div>
        </div>
        
    </form>
    <footer>
        如果你还没有帐号的话点击此处<a href="main_login.php">注册</a>
        <br />Copyright &copy; 2014.Company name All rights reserved.</footer>
    <!--  语义标签低版本浏览器不支持 -->
</body>

</html>
<?php 
//接收errno
if(!empty($_GET['errno'])){
    $errno=$_GET['errno'];
    if($errno==1){
        echo "<br/><font color='red' size='3'>你的用户名或密码错误</font>";
    }else if($errno==2){
        echo "<br/><font color='red' size='3'>你的验证码错误！</font>";
    }
}
//<?php echo getCookieVal('id');

?>