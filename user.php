<?php 
require_once 'common.php';
checkUserValidate();
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<title>管理员注册</title>
</head>
<body>
<h1>注册管理员</h1>
<form action="empProcess.php" method="post">
<table>
<tr><td>用户名</td><td><input type="text" name="id" value="请输入用户名"/></td></tr>
<tr><td>用户名</td><td><input type="text" name="name" value="请输入用户名"/></td></tr>
<tr><td>密码</td><td><input type="password" name="password" value=""/> </td></tr>
<input type="hidden" name="flag" value="Useraddemp"/>
<tr>
<td><input type="submit" value="提交"/></td>
<td><input type="reset" value="取消"/></td>
</tr>
</table>
</form>

</body>
</html>
