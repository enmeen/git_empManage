
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>index</title>
    <link rel="stylesheet" type="text/css" href="css/basic.css">
    <link rel="stylesheet" type="text/css" href="css/top.css">
</head>

<body>
    <div id="index_time"><img src="images/time.png" alt="time.png" /><span>您上次登录的时间：</span>
        <time id="time"><?php echo $_GET['name']; require_once 'common.php';getLastTime();?></time>
    </div>
    <div class="nav">
        <div class="logo"><img src="images/index_logo.png" alt="logo"></div>
        <ul>
            <li><a href="#">标题一</a></li>
            <li><a href="#">标题二</a></li>
            <li><a href="#">标题三</a></li>
            <li><a href="#">标题四</a></li>
            <li><a href="#">标题五</a></li>
            <li><a href="#">标题六</a></li>
        </ul>
    </div>
</body>

</html>
