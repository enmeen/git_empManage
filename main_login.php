<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>main_login</title>
    <link rel="stylesheet" type="text/css" href="css/basic.css">
    <link rel="stylesheet" type="text/css" href="css/main_login.css">
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/form.js"></script>
</head>

<body>

    <!-- <div class="main_homepage_nav"><span>位置：</span><span><a href="main_homepage.html">首页</a>>注册</span></div> -->
    <div class="login_img">logo</div>
    <form method="post" action="empProcess.php" id="main_login_form">
        <div>
            <p>欢迎注册网站会员，如果您已经拥有账户，则可以在此
                <a href="login.php " target="_top">登录</a>
            </p>
        </div>
        
        <div class="main_login_wrapper">
        
            <div>
                <label for="username">用&nbsp;&nbsp;户&nbsp;&nbsp;名：</label>
                <input id="username" type="text" name="name"  placeholder="输入用户名" />
                <!--  <p>用户名输入错误 请重新输入</p> -->
            </div>
            <div>
                <label for="password_1">设置密码：</label>
                <input id="password_1" type="password" name="grade"  placeholder="输入密码" />
            </div>
            
            <div>
                <label for="email">邮&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱：</label>
                <input id="email" type="text" name="email" placeholder="输入常用的邮箱" />
            </div>
            <input type="hidden" name="flag" value="addemp1"/>
            
            <div>
                <button type="submit" name="submit">提交</button>
                <button type="reset" name="reset">重置</button>
            
            </div>
        </div>
    </form>
</body>

</html>
