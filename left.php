<?php 
require_once 'common.php';
checkUserValidate();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>left_main</title>
    <link rel="stylesheet" type="text/css" href="css/basic.css">
    <link rel="stylesheet" type="text/css" href="css/left.css">
</head>

<body  >
    <div class="left_nav">
        <ul>
            
            <li> <a href="main_homepage.php" target="main">管理信息</a>
            <ul class="third_nav">
           <li> <a href="emplist.php" target="main">用户列表</a></li>
           <li><a href="user.php" target="main">添加用户</a></li>
           </ul></li>
            <li><a href="#" target="main">数据列表</a>
                <ul class="third_nav">
                    <li>
                        <a href="http://bbs.csdn.net/topics/80492915" target="main">自定义</a>
                    </li>
                    <li>
                        <a href="" target="main">自定义</a>
                    </li>
                </ul>
            </li>
            <li><a href="#">组件</a>
                <ul class="third_nav">
                    <li><a href="#" target="main">广告管理组件</a></li>
                    <li><a href="#" target="main">相册管理组件</a></li>
                </ul>
            </li>
            <li><a href="#" target="main" >客户反馈</a></li>
            <li><a href="#" target="main">自定义</a></li>
            <li><a href="login.php" target="main">自定义</a></li>
        </ul>
    </div>
</body>

</html>
