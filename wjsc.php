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
    <div class="login_img">logo</div>
    <form enctype="multipart/form-data" method="post" action="empProcess.php" id="main_login_form">
        <div>
            <p>首页轮播图添加
            </p>
        </div>
        
        <div class="main_login_wrapper">
        
            <div>
                <label for="name">标&nbsp;&nbsp;题&nbsp;&nbsp;名：</label>
                <input id="username" type="text" name="name"  placeholder="请输入标题" />
            </div>
            <div>
                <label for="js">
                                           图片介绍:
                </label>
                <textarea rows="10" cols="50" style="margin: -30px 110px 20px"></textarea>
            </div>
            <div>
                <label for="wjsc">上传图片:</label>
                <input id="password_1" type="file" name="myform" />
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

