<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>main_homepage</title>
    <link rel="stylesheet" type="text/css" href="css/basic.css">
    <link rel="stylesheet" type="text/css" href="css/main_homepage.css">

</head>

<body>
    <div class="main_homepage_nav"><span>位置：</span><span>首页</span></div>
    <div class="main_homepage_login">
        <div class="main_homepage_header"><img src="images/sun.png" alt="sun" /><b id="username">亲爱的
</b>
<?php
echo "<font color='red' size='10'>".$_GET['name']."</font>";
?><span id="moment"></span>
<span> 欢迎使用信息管理系统</span></div>
   <!--     <div class="main_homepage_content">
       <img src="../images/time.png" alt="time.png" /><span>您上次登录的时间：</span>
       <time id="time">2013-10-09 15:22</time>
   </div>已将改时间转移到top.html文件右上角 -->
    </div>
    <div class="main_homepage_function"></div>
    <div class="main_homepage_explain">
        <div class="main_homepage_header"><img src="images/dp.png" /><span>信息管理系统功能说明</span></div>
        <div class="main_homepage_content">
        <ol>
        <li>
        <p>开发环境woinds7,xp</p>
        <p>集成开发工具<font color="red" size="4">Zendstuido</font></p>
        <p>开发集成软件PHP5.0+Apache1.2.20+Mysql5.1</p>
        </li>
        <li>
            <p>您可以快速进行文章发布管理操作<span class="button" ><a href="">管理文章</a></span></p>
            <p>您可以快速管理产品<span class="button"><a href="">管理产品</span></a></p>
            <p>您可以进行密码修改、账户设置等操作<span class="button"><a href="">帐号修改</a></span></p>
       </li>
       </ol>
        </div>
    </div>
    <div class="main_homepage_information">
        <div class="main_homepage_header"><img src="images/search.png" /><span><a href="#">查看网站使用指南</a></span></div>
        <div class="classmain_homepage_content">
        </div>
    </div>
    <script type="text/javascript" src="js/time.js"></script>
</body>

</html>
